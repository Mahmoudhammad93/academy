<?php

namespace App\Http\Controllers\backend\student;

use App\Http\Controllers\Controller;
use App\Models\ContextEnrollment;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\CurriculumEnrollment;
use App\Models\Models\Lesson;
use App\Models\Unit;
use App\Models\User;
use App\ORM\Context;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function courses(){

        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('student.courses.index',compact('module_name'));

    }

    public function termCourses(Request $request, $id){
        $courses = Course::where('term_id', $id)->get();
        $coursesIsEnrolled = Context::get_enrolled_context($id);
        return ['courses' => $courses, 'coursesIsEnrolled' => $coursesIsEnrolled];
    }

    public function get_course($slug){
        $course = Course::where('slug',$slug)->first();
        // $courses_enrolled = ContextEnrollment::all()->pluck('context_id');
        // return $courses_enrolled;
        $id = $course->id;
        $class = get_called_class(); // or $class = static::class;
        $arr_class = explode("\\", $class);
        $controller_name = end($arr_class);
        $module = explode('Controller', $controller_name);
        $module_name = $module[0];

        return view('student.courses.view',compact('module_name','slug','id'));
    }

    public function course_data($slug){

        // To get course information
        $course = Course::where('courses.slug', $slug)
        ->join('grades','grades.id','courses.grade_id')
        ->join('terms','terms.id','courses.term_id')
        ->select('courses.id','courses.name_ar as cn_ar', 'courses.name_en as cn_en','grades.name_ar as gn_ar','grades.name_en as gn_en','terms.name_ar as tn_ar','terms.name_en as tn_en','courses.slug','courses.price','courses.subject_id','courses.image')
        ->first();

        // To get courses is enrolled
        $courses_enrolled = ContextEnrollment::where('user_id',auth()->user()->id)->get()->pluck('context_id');

        // To get course teacher
        $teacher = User::join('context_enrollments','context_enrollments.user_id','users.id')
        ->join('descriptions','descriptions.user_id','users.id')
        ->where('context_enrollments.context_id', $course->id)
        ->where('context_enrollments.role', 'teacher')
        ->first();

        // To get course assesstants
        $assesstants = User::join('context_enrollments','context_enrollments.user_id','users.id')
        ->where('context_enrollments.context_id', $course->id)
        ->where('context_enrollments.role', 'assesstant')
        ->get();

        $countLessons = Curriculum::where('course_id', $course->id)->sum('count_lessons');
        $lessonsCompleted = Curriculum::where('course_id', $course->id)->sum('lessons_complete');
        $countEnrolled = ContextEnrollment::where('context_id', $course->id)->count();

        // $countLessons = Curriculum::sum($lessons->count_lessons);

        return ['course' => $course, 'courses_enrolled' => $courses_enrolled, 'teacher' => $teacher, 'assesstants' => $assesstants, 'countLessons' => $countLessons, 'countEnrolled'=> $countEnrolled, 'lessonsCompleted'=>$lessonsCompleted];
    }

    public function get_my_courses($slug, $id){
        if($slug == 'all'){
            $courses = Course::where('term_id', $id)->get();
        }else{
            $courses = Course::where('term_id', $id)
            ->join('context_enrollments','context_enrollments.context_id','courses.id')
            ->join('terms','terms.id','courses.term_id')
            ->where('context_enrollments.user_id',auth()->user()->id)
            ->where('terms.id', $id)
            ->select('courses.id','courses.name_ar', 'courses.name_en','courses.slug','courses.image','courses.price')
            ->get();
        }

        return $courses;
    }

    public function join_course(Request $request,ContextEnrollment $contextEnrollment, $id){
        // return $request;
        $row = $contextEnrollment->where('context_id',$id)
        ->where('context_type','course')
        ->where('role','teacher')
        ->first();
        if(!$row){
            return $contextEnrollment->create([
                'user_id' => auth()->user()->id,
                'context_type' => 'course',
                'context_id' => $request['id'],
                'role' => auth()->user()->account_type,
                'status' => 1
            ]);
        }
    }

    public function get_curriculum($id){
        $curriculums = Curriculum::where('course_id', $id)->get();
        return $curriculums;
    }

    public function get_units($id){
        $units = Unit::where('curriculum_id', $id)->with('lessons')->get();
        return $units;
    }

    public function get_curriculums_enrolled(){
        $curriculums_enrolled = CurriculumEnrollment::all()->pluck('curriculum_id');
        return $curriculums_enrolled;
    }

    public function storeCourses(Request $request){


        $sum = Course::where('id',$request['id'])->sum('price');

        $idorder = 'PHP_' . rand(1, 1000);//Customer Order ID
        $terminalId = "bilingual";// Will be provided by URWAY
        $password = "bilingual@123";// Will be provided by URWAY
        $merchant_key = "bf0fe9dc1ac15ca4c2d1ece8f650a51daa35735004608f907ce5e24eff1ee89d";// Will be provided by URWAY
        $currencycode = "SAR";
        $amount = $sum;
        function get_server_ip()
        {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER('HTTP_FORWARDED');
            else if (isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }

        $ipp = get_server_ip();
        //Generate Hash
        $txn_details = $idorder . '|' . $terminalId . '|' . $password . '|' . $merchant_key . '|' . $amount . '|' . $currencycode;
        $hash = hash('sha256', $txn_details);
        $fields = array(
            'trackid' => $idorder,
            'terminalId' => $terminalId,
            'customerEmail' => 'customer@email.com',
            'action' => "1",  // action is always 1
            'merchantIp' => $ipp,
            'password' => $password,
            'currency' => $currencycode,
            'country' => "SA",
            'amount' => $amount,
            "udf1" => "Test1",
            "udf2" => env('APP_URL') . "/admin/test/urway/respons",//Response page URL
            "udf3" => "",
            "udf4" => "",
            "udf5" => "Test5",
            'requestHash' => $hash  //generated Hash
        );
        $data = json_encode($fields);
        $ch = curl_init('https://payments-dev.urway-tech.com/URWAYPGService/transaction/jsonProcess/JSONrequest'); // Will be provided by URWAY
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //execute post
        $server_output = curl_exec($ch);
        //close connection
        curl_close($ch);
        $result = json_decode($server_output);
        if (!empty($result->payid) && !empty($result->targetUrl)) {
            $url = $result->targetUrl . '?paymentid=' . $result->payid;
            return $url;
            header('Location: ' . $url, true, 307);//Redirect to Payment Page
            die();
        } else {
            print_r($result);
            echo "<br/><br/>";
            print_r($data);
            die();
        }
    }

    // To store curriculum
    public function storeCurriculums(Request $request){

        // To Store curriculum
        $row = ContextEnrollment::where('context_id', $request['course_id'])->first();
        if($row->context_type === 'course'){
            $curriculum = new CurriculumEnrollment;
            $curriculum->curriculum_id = $request['id'];
            $curriculum->enroll_id = $row->id;
            $curriculum->save();
        }

        $sum = Curriculum::where('id',$request['id'])->sum('price');

        $idorder = 'PHP_' . rand(1, 1000);//Customer Order ID
        $terminalId = "bilingual";// Will be provided by URWAY
        $password = "bilingual@123";// Will be provided by URWAY
        $merchant_key = "bf0fe9dc1ac15ca4c2d1ece8f650a51daa35735004608f907ce5e24eff1ee89d";// Will be provided by URWAY
        $currencycode = "SAR";
        $amount = $sum;
        function get_server_ip()
        {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER('HTTP_FORWARDED');
            else if (isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }

        $ipp = get_server_ip();
        //Generate Hash
        $txn_details = $idorder . '|' . $terminalId . '|' . $password . '|' . $merchant_key . '|' . $amount . '|' . $currencycode;
        $hash = hash('sha256', $txn_details);
        $fields = array(
            'trackid' => $idorder,
            'terminalId' => $terminalId,
            'customerEmail' => 'customer@email.com',
            'action' => "1",  // action is always 1
            'merchantIp' => $ipp,
            'password' => $password,
            'currency' => $currencycode,
            'country' => "SA",
            'amount' => $amount,
            "udf1" => "Test1",
            "udf2" => env('APP_URL') . "/admin/test/urway/respons",//Response page URL
            "udf3" => "",
            "udf4" => "",
            "udf5" => "Test5",
            'requestHash' => $hash  //generated Hash
        );
        $data = json_encode($fields);
        $ch = curl_init('https://payments-dev.urway-tech.com/URWAYPGService/transaction/jsonProcess/JSONrequest'); // Will be provided by URWAY
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //execute post
        $server_output = curl_exec($ch);
        //close connection
        curl_close($ch);
        $result = json_decode($server_output);
        if (!empty($result->payid) && !empty($result->targetUrl)) {
            $url = $result->targetUrl . '?paymentid=' . $result->payid;
            return $url;
            header('Location: ' . $url, true, 307);//Redirect to Payment Page
            die();
        } else {
            print_r($result);
            echo "<br/><br/>";
            print_r($data);
            die();
        }
    }

    public function response(){
        $terminalId = "bilingual";// Will be provided by URWAY
        $password = "bilingual@123";// Will be provided by URWAY
        $key = "bf0fe9dc1ac15ca4c2d1ece8f650a51daa35735004608f907ce5e24eff1ee89d";// Will be provided by URWAY
        if ($_GET !== NULL) {
            $requestHash = "" . $_GET['TranId'] . "|" . $key . "|" . $_GET['ResponseCode'] . "|" . $_GET['amount'] . "";
            $txn_details1 = "" . $_GET['TrackId'] . "|" . $terminalId . "|" . $password . "|" . $key . "|" . $_GET['amount'] . "|SAR";
            $hash = hash('sha256', $requestHash);
            function get_server_ip() {
                $ipaddress = '';
                if (isset($_SERVER['HTTP_CLIENT_IP']))
                    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                else if(isset($_SERVER['HTTP_X_FORWARDED']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER('HTTP_FORWARDED');
                else if(isset($_SERVER['REMOTE_ADDR']))
                    $ipaddress = $_SERVER['REMOTE_ADDR'];
                else
                    $ipaddress = 'UNKNOWN';
                return $ipaddress;
            }
            $ipp = get_server_ip();
            if ($hash === $_GET['responseHash']) {
                $txn_details1 = "" . $_GET['TrackId'] . "|" . $terminalId . "|" . $password . "|" . $key . "|" . $_GET['amount'] . "|SAR";
                //Secure check
                $requestHash1 = hash('sha256', $txn_details1);
                $apifields    = array(
                    'trackid' => $_GET['TrackId'],
                    'terminalId' => $terminalId,
                    'action' => '10',
                    'merchantIp' => $ipp,
                    'password' => $password,
                    'currency' => "SAR",
                    'transid' => "",
                    'transid' => $_GET['TranId'],
                    'amount' => $_GET['amount'],
                    'udf5' => "",
                    'udf3' => "",
                    'udf4' => "",
                    'udf1' => "",
                    'udf2' => "",
                    'requestHash' => $requestHash1
                );
                $apifields_string = json_encode($apifields);
                $url = "https://payments-dev.urway-tech.com/URWAYPGService/transaction/jsonProcess/JSONrequest";
                $ch  = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $apifields_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($apifields_string)
                ));
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                //execute post
                $apiresult = curl_exec($ch);
                $urldecodeapi        = (json_decode($apiresult, true));
                $inquiryResponsecode = $urldecodeapi['responseCode'];
                $inquirystatus       = $urldecodeapi['result'];
                if (($_GET['Result'] === 'Successful' ||$_GET['Result'] === 'Success')  && $_GET['ResponseCode']==='000') {
                    if($inquirystatus=='Successful' || $inquirystatus=='Success' || $inquiryResponsecode=='000'){
                        $trackid = $_GET['TrackId'];
                        $paymentid = $_GET['PaymentId'];
                        $result = $_GET['Result'];
                        $authcode = $_GET['AuthCode'];
                        $cardbrand = $_GET['cardBrand'];
                        $responseCode = $_GET['ResponseCode'];
                        $amount = $_GET['amount'];

                        foreach (json_decode($_GET['request']) as $key => $value) {
                                $studentSubjects = new userSubject;
                                $subTeach = explode(',',$value);
                                $studentSubjects->user_id = auth()->user()->id;
                                $studentSubjects->teacher_id = $subTeach[0];
                                $studentSubjects->subject_id = $subTeach[1];
                                $studentSubjects->course_name = $subTeach[2];
                                $studentSubjects->crs_id = $subTeach[3];
                                $subject_raw = userSubject::where('subject_id', $subTeach[1])->where('user_id', $subTeach[0])->where('teacher_id', null)->first();
                                $studentSubjects->rate_num = $subject_raw->rate_num;
                                $studentSubjects->count = $subject_raw->count;
                                $studentSubjects->course_price= $subTeach[4];
                                $studentSubjects->save();
                                $count_lessons = count(File::where('course_id',$studentSubjects->crs_id)->get());
                                // return $count_lessons;
                                $store_count_lessons = userSubject::where('crs_id',$studentSubjects->crs_id)->first();
                                // return $store_count_lessons;
                                $store_count_lessons->count_lessons = $count_lessons;
                                // return $store_count_lessons;
                                $store_count_lessons->save();
                            }
                        return view('creditCard',compact('trackid','paymentid','result'
                        ,'authcode','cardbrand','responseCode','amount'));
                    }else {
                        echo "Something went wrong!!! Secure Check failed!!!!!!!";
                    }
                } else {
                    return view('creditCard',compact('trackid','paymentid','result'
                        ,'authcode','cardbrand','responseCode','amount'));
                }
            }else {
                echo "Hash Mismatch!!!!!!!";
            }
        }else {
            echo "Something Went wrong!!!!!!!!!!!!";
        }
    }

}
