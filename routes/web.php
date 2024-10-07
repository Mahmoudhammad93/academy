<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\backend\admin\BanksController;
use App\Http\Controllers\backend\admin\ClassroomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\admin\DashboardController;
use App\Http\Controllers\backend\admin\CountriesController;
use App\Http\Controllers\backend\admin\CoursesController;
use App\Http\Controllers\backend\admin\CourseActivitiesController;
use App\Http\Controllers\backend\admin\CurriculumsController;
use App\Http\Controllers\backend\admin\GradesController;
use App\Http\Controllers\backend\admin\SchoolsController;
use App\Http\Controllers\backend\admin\SubjectsController;
use App\Http\Controllers\backend\admin\UsersController;
use App\Http\Controllers\frontend\StaticPagesController;
use App\Http\Controllers\backend\admin\PaymentController;
use App\Http\Controllers\backend\admin\RolesController;
use App\Http\Controllers\backend\admin\SettingsController;
use App\Http\Controllers\backend\teacher\MyGroupsController;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use App\Http\Controllers\backend\admin\GroupsController;
use App\Http\Controllers\backend\admin\LessonsController;
use App\Http\Controllers\backend\admin\UnitsController;
use App\Http\Controllers\backend\admin\TermsController;
use App\Http\Controllers\backend\admin\PagesController;
use App\Http\Controllers\backend\admin\TimetablesController;
use App\Http\Controllers\backend\student\QuizzesController;
use App\Http\Controllers\backend\student\DigitalLibraryController;
use App\Http\Controllers\backend\student\PlaylistController;
use App\Http\Controllers\backend\PublicController;
use App\Http\Controllers\backend\LibraryController;
use App\Http\Controllers\backend\admin\QuestionsController;
use App\Http\Controllers\backend\teacher\AssignmentsController;
use App\Http\Controllers\backend\teacher\QuizGradeController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\backend\admin\EducationTypeController;
use App\Http\Controllers\backend\student\CommentsController;
use App\Http\Controllers\LevelsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{lang}', function ($lang){
//    dd("jdfdf");
    if (in_array($lang, ['ar','en'])){
        if (auth()->user()){
//            dd($lang);
            $user = auth()->user();
            $user->language = $lang;
            $user->save();
        }else{
            if (session()->has('lang')){
                session()->forget('lang');
            }
            session()->put('lang',$lang);
        }
    }else{
        if (auth()->user()){
            $user = auth()->user();
            $user->language = 'en';
            $user->save();
        }else{
            if (session()->has('lang')){
                session()->forget('lang');
            }
        }
        session()->put('lang','en');
    }
    return back();
})->name('lang');

Route::group(['middleware' => 'lang'], function (){

    route::get('urway/respons', [App\Http\Controllers\backend\student\CoursesController::class, 'response'])->name('urway/respons');


    Route::get('/', function () {
        Setting::set('site_name', 'sdfsdf');
        Setting::set( 'site_logo', 'sdfsdf');
        Setting::save();
        $module_name = 'Home';
        return view('static_pages.home.index',get_defined_vars());
    })->name('/');

    Route::get('about',[StaticPagesController::class,'about'])->name('about');
    Route::get('static_classes',[StaticPagesController::class,'staticClasses'])->name('static_classes');
    Route::get('education',[StaticPagesController::class,'education'])->name('education');
    Route::get('training',[StaticPagesController::class,'training'])->name('training');

    Route::get('get_reg_data',[RegisterController::class, 'get_reg_data'])->name('get_reg_data');
    Route::get('get_student_schools',[RegisterController::class, 'getStudentSchools'])->name('get_student_schools');
    Route::get('contact',[StaticPagesController::class,'contact'])->name('contact');
});

Auth::routes();
Route::group(['middleware' => ['auth', 'lang']], function (){

    // student routes
    Route::get('myCourses',[App\Http\Controllers\backend\student\CoursesController::class,'courses'])->name('courses');
    Route::get('get_term_courses/{id}', [App\Http\Controllers\backend\student\CoursesController::class,'termCourses'])->name('termCourses');
    Route::get('courses/{slug}/view', [App\Http\Controllers\backend\student\CoursesController::class,'get_course'])->name('get_course');
    Route::get('course_data/{slug}', [App\Http\Controllers\backend\student\CoursesController::class,'course_data'])->name('course_data');
    Route::get('get_curriculum/{id}', [App\Http\Controllers\backend\student\CoursesController::class,'get_curriculum'])->name('get_curriculum');
    Route::get('get_units/{id}', [App\Http\Controllers\backend\student\CoursesController::class,'get_units'])->name('get_units');
    Route::get('get_my_courses/{slug}/term/{id}', [App\Http\Controllers\backend\student\CoursesController::class,'get_my_courses'])->name('get_my_courses');
    Route::post('join_course/{id}', [App\Http\Controllers\backend\student\CoursesController::class,'join_course'])->name('join_course');
    route::post('course/store', [App\Http\Controllers\backend\student\CoursesController::class, 'storeCourses'])->name('storeCourses');
    route::post('curriculum/store', [App\Http\Controllers\backend\student\CoursesController::class, 'storeCurriculums'])->name('storeCurriculums');
    Route::get('get_curriculums_enrolled', [App\Http\Controllers\backend\student\CoursesController::class, 'get_curriculums_enrolled'])->name('get_curriculums_enrolled');
    Route::post('comment/store', [CommentsController::class, 'storeComment'])->name('storeComment');
    Route::get('getComments/{courseId}', [CommentsController::class, 'getComments'])->name('getComments');
    Route::post('replay/store', [CommentsController::class, 'storeReplay'])->name('storeReplay');
    Route::get('getReplies/{courseId}/{parent_id}', [CommentsController::class, 'getReplies'])->name('getReplies');
    Route::resource('users', UsersController::class);
    Route::resource('subjects', SubjectsController::class);
    // Route::resource('grades', GradesController::class);
    Route::resource('schools', SchoolsController::class);
    Route::resource('countries', CountriesController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('groups', GroupsController::class);
    Route::resource('courses', CoursesController::class);
    Route::resource('curriculums', CurriculumsController::class);
    Route::resource('terms', TermsController::class);
    Route::resource('library', LibraryController::class);
    Route::resource('classrooms', ClassroomsController::class);



    // show curriculums for every course
    Route::get('courses/{id}/curriculums',[CurriculumsController::class,'courseCurriculums'])->name('courseCurriculums');
    Route::get('courses/{id}/role',[CoursesController::class,'courseRole'])->name('courseRole');
    Route::get('get_data/{id}',[CoursesController::class,'getData'])->name('getData');
    Route::post('courses/{id}/role/assign',[CoursesController::class,'assignCourseRole'])->name('assignCourseRole');
    Route::delete('role/{id}/delete',[CoursesController::class,'deleteCourseRole'])->name('deleteCourseRole');
    Route::get('courses/{course_id}/activites',[CourseActivitiesController::class,'courseActivities'])->name('courseActivities');
    Route::post('assesstant/{context}/delete' ,[CourseActivitiesController::class, 'deleteAssesstant'])->name('deleteAssesstant');
    Route::post('teacher/{id}/delete' ,[CourseActivitiesController::class, 'deleteactitviesTeacher'])->name('deleteActitviesTeacher');
    Route::get('get_ilos/{id}', [CoursesController::class, 'get_ilos']);
    Route::resource('pages', PagesController::class);
    // roles and permissions
    Route::resource('roles', RolesController::class);
    Route::get('users/{id}/role', [RolesController::class, 'assignRoles']);
    Route::post('users/{id}/role', [RolesController::class, 'setUserRoles'])->name('setUserRoles');
    Route::get('roles/{id}/permissions', [RolesController::class,'assignPermissions']);
    Route::get('getPermissions', [RolesController::class,'getPermissions']);
    // Route::post('roles/{id}/permissions', [RolesController::class,'setPermissions'])->name('setPermissions');
    Route::post('roles/{id}/setPermissions', [RolesController::class,'setPermissions'])->name('setPermissions');
    Route::get('user/{id}/permissions',[RolesController::class,'assignUserPermission'])->name('assignUserPermission');
    Route::post('user/{id}/permissions',[RolesController::class,'addPermissionToUser'])->name('addPermissionToUser');
    Route::get('/getPermissionsArr/{id}',[RolesController::class, 'getPermissionsArr'])->name('getPermissionsArr');

    Route::post('users/store', [UsersController::class, 'create_user']);
    Route::post('users/{id}/update', [UsersController::class, 'update_user']);
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/inactive', [UsersController::class, 'list_inactive_users'])->name('inactive');
    Route::post('/requests/{id}', [UsersController::class, 'action'])->name('active');
    Route::get('/requests/{id}/show', [UsersController::class, 'show'])->name('show');
    Route::get('users/{id}/description/add', [UsersController::class, 'addDescription'])->name('addDescription');
    Route::get('users/{id}/description/store', [UsersController::class, 'storeDescription'])->name('storeDescription');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('store_settings', [SettingsController::class, 'store'])->name('store_settings');

    /// teacher routes
    Route::get('myGroups',[MyGroupsController::class,'myGroups'])->name('myGroups');
    Route::get('createGroup',[MyGroupsController::class,'createGroup'])->name('createGroup');
    Route::get('viewGroup',[MyGroupsController::class,'viewGroup'])->name('viewGroup');
    Route::get('assignment_grade',[AssignmentsController::class,'assignment_grade'])->name('assignment_grade');
    Route::get('quiz_grade',[QuizGradeController::class,'quiz_grade'])->name('quiz_grade');
    // student routes

    Route::get('quizzes',[QuizzesController::class,'quizzes'])->name('quizzes');
    Route::get('digital_library',[DigitalLibraryController::class,'digital_library'])->name('digital_library');
    Route::get('view_digital_library',[DigitalLibraryController::class,'view_digital_library'])->name('view_digital_library');
    Route::get('digital_library_form',[DigitalLibraryController::class,'digital_library_form'])->name('digital_library_form');

    Route::get('course/{course_slug}/curriculum/{curr_id}/unit/{unit_slug}/lesson/{lesson_slug}',[PlaylistController::class,'playlist'])->name('playlist');
    Route::get('get_lesson/{lesson_slug}',[PlaylistController::class,'get_lesson'])->name('get_lesson');
    Route::post('complete_lesson/{lesson_id}',[PlaylistController::class, 'complete_lesson'])->name('complete_lesson');
    Route::post('get_completed_lessons',[PlaylistController::class, 'getCompletedLessons'])->name('get_completed_lessons');
    Route::get('curriculums/{id}/units', [UnitsController::class, 'index'])->name('units.index');
    Route::get('getUnits/{id}', [UnitsController::class, 'getUnits'])->name('getUnits');
    Route::post('addUnit', [UnitsController::class, 'addUnit'])->name('addUnit');
    Route::get('curriculums/{curriculum}/units/{unit}/edit', [UnitsController::class, 'edit'])->name('units.edit');
    Route::get('curriculums/{curriculum}/units/create', [UnitsController::class, 'create'])->name('units.create');
    Route::post('curriculums/{curriculum}/units/store', [UnitsController::class, 'store'])->name('units.store');
    Route::put('curriculums/{curriculum}/units/{unit}/update', [UnitsController::class, 'update'])->name('units.update');
    Route::post('curriculums/{curriculum}/units/{unit}/delete', [UnitsController::class, 'delete'])->name('units.delete');

    Route::get('unit/{unit_id}/{curriculum_id}/lessons/create', [LessonsController::class, 'create'])->name('createLesson');
    Route::get('curriculums/{curriculum_id}/unit/{unit_id}/lessons', [LessonsController::class, 'create'])->name('lessons.index');
    Route::post('unit/{unit_id}/lesson/store', [LessonsController::class, 'store'])->name('storeLesson');
    Route::get('unit/{id}/lessons', [LessonsController::class, 'getLessons'])->name('getLessons');
    Route::get('lesson/{id}/edit', [LessonsController::class, 'edit'])->name('editLesson');
    Route::delete('curriculum/{curriculum_id}/lesson/{id}/delete', [LessonsController::class, 'deleteLesson'])->name('deleteLesson');
    Route::get('getLesson/{id}', [LessonsController::class, 'getLesson'])->name('getLesson');
    Route::post('update_lesson/{id}', [LessonsController::class, 'update_lesson'])->name('update_lesson');
    Route::get('/public_views/{id}/edit_profile', [PublicController::class, 'edit_profile'])->name('edit_profile');

    // Timetable routes
    Route::get('timetable',[TimetablesController::class, 'index'])->name('timetable');
    Route::get('course/{id}/timetable',[TimetablesController::class, 'courseTimetable'])->name('courseTimetable');
    Route::get('course/{id}/getTimetable',[TimetablesController::class, 'getTimetable'])->name('getTimetable');
    Route::get('timetable/create',[TimetablesController::class, 'create'])->name('createCourseTimetable');
    Route::post('timetable/store',[TimetablesController::class, 'store'])->name('storeCourseTimetable');
    Route::get('timetable/delete',[TimetablesController::class, 'destroy'])->name('deleteCourseTimetable');

    // my library rout
    Route::get('my_library', [LibraryController::class,'my_library'])->name('mylibrary');
    // Route::get('my_library/{id}/show', [LibraryController::class,'show'])->name('show');

    //banks
    Route::get('courses/{course}/banks', [BanksController::class, 'index'])->name('banks.index');
    Route::get('courses/{course}/banks/create', [BanksController::class, 'create'])->name('banks.create');
    Route::get('courses/{course}/banks/{bank}/edit', [BanksController::class, 'edit'])->name('banks.edit');
    Route::put('courses/{course}/banks/{bank}/update', [BanksController::class, 'update'])->name('banks.update');
    Route::post('courses/{course}/banks/{bank}/delete', [BanksController::class, 'delete'])->name('banks.delete');
    Route::post('courses/{course}/banks/store', [BanksController::class, 'store'])->name('banks.store');
    //questions
    Route::get('courses/{course}/banks/{bank}/questions/create', [QuestionsController::class, 'create'])->name('questions.create');
    Route::get('courses/{course}/banks/{bank}/questions', [QuestionsController::class, 'index'])->name('questions.index');
    Route::post('courses/{course}/banks/{bank}/questions/store', [QuestionsController::class, 'store'])->name('questions.store');
    Route::get('api/courses/{course}/curriculums', [QuestionsController::class, 'json_curriculums'])->name('questions.curriculums');
    Route::get('api/courses/{course}/curriculums/{curriculum}/units', [QuestionsController::class, 'json_curriculum_units'])->name('questions.units');
    Route::get('api/courses/{course}/curriculums/{curriculum}/units/{unit}/lessons', [QuestionsController::class, 'json_unit_lessons'])->name('questions.units');
    Route::post('courses/{course}/banks/{bank}/questions/{question}/delete', [QuestionsController::class, 'delete'])->name('questions.delete');

    Route::get('courses/{course}/banks/datatable', [BanksController::class, 'get_datatable'])->name('banks.get_banks');

    // education_type
    Route::get('education_types', [EducationTypeController::class, 'index'])->name('education_types.index');
    Route::get('education_types/create', [EducationTypeController::class, 'create'])->name('education_types.create');
    Route::post('education_types/store', [EducationTypeController::class, 'store'])->name('education_types.store');
    Route::get('education_types/{education_type}/edit', [EducationTypeController::class, 'edit'])->name('education_types.edit');
    Route::put('education_types/{education_type}/update', [EducationTypeController::class, 'update'])->name('education_types.update');
    Route::post('education_types/{education_type}/delete', [EducationTypeController::class, 'delete'])->name('education_types.delete');

    //grades
    Route::post('grades/{grade}/delete', [GradesController::class, 'delete'])->name('grades.delete');
    Route::get('education_types/{eduObject}/grades/index', [GradesController::class, 'index'])->name('grades.index');
    Route::get('education_types/{eduObject}/grades/create', [GradesController::class, 'create'])->name('grades.create');
    Route::post('education_types/{eduObject}/grades/store', [GradesController::class, 'store'])->name('grades.store');
    Route::get('education_types/{eduObject}/grades/{grade}/edit', [GradesController::class, 'edit'])->name('grades.edit');
    Route::put('education_types/{eduObject}/grades/{grade}/update', [GradesController::class, 'update'])->name('grades.update');

    //levels
    Route::get('education_types/{eduObject}/grades/{grade}/levels', [LevelsController::class, 'index'])->name('levels.index');
    Route::get('education_types/{eduObject}/grades/{grade}/levels/create', [LevelsController::class, 'create'])->name('levels.create');
    Route::post('education_types/{eduObject}/grades/{grade}/levels/store', [LevelsController::class, 'store'])->name('levels.store');
    Route::get('education_types/{eduObject}/grades/{grade}/levels/{level}/edit', [LevelsController::class, 'edit'])->name('levels.edit');
    Route::put('education_types/{eduObject}/grades/{grade}/levels/{level}/update', [LevelsController::class, 'update'])->name('levels.update');
    Route::post('education_types/{eduObject}/grades/{grade}/levels/{level}/delete', [LevelsController::class, 'delete'])->name('levels.delete');

     // sign up routes
     Route::get('parent_signup',[SignUpController::class,'parent_signup'])->name('parent_signup');
     Route::get('teacher_signup',[SignUpController::class,'teacher_signup'])->name('teacher_signup');
     Route::get('student_signup',[SignUpController::class,'student_signup'])->name('student_signup');
     Route::get('general_signup',[SignUpController::class,'general_signup'])->name('general_signup');

});






