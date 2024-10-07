<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\User\UserRepositoryInterface',
            'App\Repositories\User\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\Subject\SubjectRepositoryInterface',
            'App\Repositories\Subject\SubjectRepository'
        );

        $this->app->bind(
            'App\Repositories\Grade\GradeRepositoryInterface',
            'App\Repositories\Grade\GradeRepository'
        );

        $this->app->bind(
            'App\Repositories\School\SchoolRepositoryInterface',
            'App\Repositories\School\SchoolRepository'
        );

        $this->app->bind(
            'App\Repositories\Country\CountryRepositoryInterface',
            'App\Repositories\Country\CountryRepository'
        );
        $this->app->bind(
            'App\Repositories\Payment\PaymentRepositoryInterface',
            'App\Repositories\Payment\PaymentRepository'
        );
        $this->app->bind(
            'App\Repositories\Role\RoleRepositoryInterface',
            'App\Repositories\Role\RoleRepository'
        );
        $this->app->bind(
            'App\Repositories\Group\GroupRepositoryInterface',
            'App\Repositories\Group\GroupRepository'
        );
        $this->app->bind(
            'App\Repositories\Course\CourseRepositoryInterface',
            'App\Repositories\Course\CourseRepository'
        );
        $this->app->bind(
            'App\Repositories\Curriculum\CurriculumRepositoryInterface',
            'App\Repositories\Curriculum\CurriculumRepository'
        );
        $this->app->bind(
            'App\Repositories\Term\TermRepositoryInterface',
            'App\Repositories\Term\TermRepository'
        );
        $this->app->bind(
            'App\Repositories\Page\PageRepositoryInterface',
            'App\Repositories\Page\PageRepository'
        );
        $this->app->bind(
            'App\Repositories\Unit\UnitRepositoryInterface',
            'App\Repositories\Unit\UnitRepository'
        );
        $this->app->bind(
            'App\Repositories\Library\LibraryRepositoryInterface',
            'App\Repositories\Library\LibraryRepository'
        );
        $this->app->bind(
            'App\Repositories\Classroom\ClassroomRepositoryInterface',
            'App\Repositories\Classroom\ClassroomRepository'
        );
        $this->app->bind(
            'App\Repositories\Bank\BankRepositoryInterface',
            'App\Repositories\Bank\BankRepository'
        );
        $this->app->bind(
            'App\Repositories\Question\QuestionRepositoryInterface',
            'App\Repositories\Question\QuestionRepository'
        );
        $this->app->bind(
            'App\Repositories\Lesson\LessonRepositoryInterface',
            'App\Repositories\Lesson\LessonRepository'
        );
        $this->app->bind(
            'App\Repositories\Lesson\EducationTypeRepositoryInterface',
            'App\Repositories\Lesson\EducationTypeRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        app()->singleton('lang', function () {
            if (auth()->user()) {
                if (empty(auth()->user()->language)) {
                    return 'en';
                } else {
                    return auth()->user()->language;
                }
            } else {
                if (session()->has('lang')) {
                    return session()->get('lang');
                } else {
                    return 'en';
                }
            }
        });
    }
}
