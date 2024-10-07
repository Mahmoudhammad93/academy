<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Question;
use App\Models\Unit;
use App\Repositories\Bank\BankRepositoryInterface;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Curriculum\CurriculumRepositoryInterface;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\Unit\UnitRepositoryInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuestionsController extends Controller
{
    private $QuestionRepository;
    private $CourseRepository;
    private $BankRepository;
    private $CurriculumRepository;
    private $UnitRepository;
    private $LessonRepository;
    public function __construct(
        QuestionRepositoryInterface $QuestionRepository,
        CourseRepositoryInterface $CourseRepository,
        BankRepositoryInterface $BankRepository,
        CurriculumRepositoryInterface $CurriculumRepository,
        UnitRepositoryInterface $UnitRepository,
        LessonRepositoryInterface $LessonRepository
    ) {
        $this->QuestionRepository = $QuestionRepository;
        $this->CourseRepository = $CourseRepository;
        $this->BankRepository = $BankRepository;
        $this->CurriculumRepository = $CurriculumRepository;
        $this->UnitRepository = $UnitRepository;
        $this->LessonRepository = $LessonRepository;
    }

    public function index(Request $request, Course $course, Bank $bank)
    {
        if ($request->ajax()) {
            $data = $this->QuestionRepository->getByBankId($bank->id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '
                    <button class="ajax_delete btn btn-danger btn-icon-text" data="' . $row->id . '">
                        <i class="mdi mdi-delete btn-icon-prepend"></i>
                        ' . __('data.Delete') . '
                    </button>
                    ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $module_name = 'Questions';
        $course_id = $course->id;
        $bank_id = $bank->id;

        return view('admin.question.index', compact('module_name', 'course_id', 'bank_id'));
    }

    public function create(Course $course, Bank $bank)
    {
        $module_name = "Questions";
        return view("admin.question.create", compact('course', 'bank', 'module_name'));
    }
    public function store(Request $request, Course $course, Bank $bank)
    {
        $request->validate([
            "title" => "required",
            "answer" => "required",
            "level" => "required",
            "mark" => "required|gte:1",
            "bank_id" => "required|exists:banks,id",
            "lesson_id" => "required|exists:banks,id"
        ]);

        Question::create($request->all());
    }
    public function json_curriculums(Course $course)
    {
        return $this->CurriculumRepository->getByCourseId($course->id);
    }
    public function json_curriculum_units(Course $course, Curriculum $curriculum)
    {
        return $this->UnitRepository->getUnitsByCurriculumId($curriculum->id);
    }
    public function json_unit_lessons(Course $course, Curriculum $curriculum, Unit $unit)
    {
        return $this->LessonRepository->getUnitLessons($unit->id);
    }



    public function delete(Request $request,Course $course,Bank $bank,Question $question){
        return $question->delete();
    }
}
