<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*


        /* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {

    /* Manager Dashboard  */
    route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware([Admin::class])->group(function () {
        /* User */
        Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create']);
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware([Admin::class]);
        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware([Admin::class]);
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware([Admin::class]);
        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        Route::post('admin/user/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store']);
        /* end user */
    });

    /* rota de sala-aula  */
    Route::get('admin/sala-aula/index', ['as' => 'admin.classroom.index', 'uses' => 'Admin\ClassroomController@index']);
    Route::get('admin/sala-aula/show/{id}', ['as' => 'admin.classroom.show', 'uses' => 'Admin\ClassroomController@show']);

    Route::get('admin/sala-aula/create', ['as' => 'admin.classroom.create', 'uses' => 'Admin\ClassroomController@create']);
    Route::post('admin/sala-aula/store', ['as' => 'admin.classroom.store', 'uses' => 'Admin\ClassroomController@store']);
    Route::get('admin/sala-aula/edit/{id}', ['as' => 'admin.classroom.edit', 'uses' => 'Admin\ClassroomController@edit']);
    Route::put('admin/sala-aula/update/{id}', ['as' => 'admin.classroom.update', 'uses' => 'Admin\ClassroomController@update']);
    Route::get('admin/sala-aula/delete/{id}', ['as' => 'admin.classroom.delete', 'uses' => 'Admin\ClassroomController@destroy']);


    Route::get('admin/sala-aula/delete/{id}', ['as' => 'admin.classroom.delete', 'uses' => 'Admin\ClassroomController@destroy']);
    Route::get('admin/sala-aula/sala-aula/{id}', ['as' => 'admin.classroom', 'uses' => 'Admin\ClassroomController@GetSubCatAgainstMain']);

    /* end news */
    /* rota de  teachers_class */
    Route::get('admin/teacher_classes/index', ['as' => 'admin.teacher_classes.index', 'uses' => 'Admin\TeacherClasseController@index']);
    Route::get('admin/teacher_classes/show/{id}', ['as' => 'admin.teacher_classes.show', 'uses' => 'Admin\TeacherClasseController@show']);
    Route::get('admin/teacher_classes/create', ['as' => 'admin.teacher_classes.create', 'uses' => 'Admin\TeacherClasseController@create']);
    Route::post('admin/teacher_classes/store', ['as' => 'admin.teacher_classes.store', 'uses' => 'Admin\TeacherClasseController@store']);
    Route::get('admin/teacher_classes/edit/{id}', ['as' => 'admin.teacher_classes.edit', 'uses' => 'Admin\TeacherClasseController@edit']);
    Route::put('admin/teacher_classes/update/{id}', ['as' => 'admin.teacher_classes.update', 'uses' => 'Admin\TeacherClasseController@update']);
    Route::get('admin/teacher_classes/delete/{id}', ['as' => 'admin.teacher_classes.delete', 'uses' => 'Admin\TeacherClasseController@destroy']);
    Route::post('admin/teacher_classes/search', ['as' => 'admin.teacher_classes_seach', 'uses' => 'Admin\TeacherClasseController@teacher_classes_seach']);
    Route::get('admin/teacher_classes/seachResult/{classeName}', ['as' => 'admin.teacher_classes.seachResult', 'uses' => 'Admin\TeacherClasseController@seachResult']);
    Route::get('admin/teacher_classes/recibo', ['as' => 'admin.teacher_classes.report', 'uses' => 'Admin\TeacherClasseController@print']);
    Route::get('admin/teacher_classes/estudantes/{id}', ['as' => 'admin.teacher_classes.student', 'uses' => 'Admin\TeacherClasseController@GetSubCatAgainstMain']);
    Route::get('admin/teacher_classes/recibo', ['as' => 'admin.teacher_classes.report', 'uses' => 'Admin\TeacherClasseController@print']);
    /* end  teachers_class */
    /* rota de disciplina  */
    Route::get('admin/disciplina/index', ['as' => 'admin.subject.index', 'uses' => 'Admin\SubjectController@index']);
    Route::get('admin/disciplina/show/{id}', ['as' => 'admin.subject.show', 'uses' => 'Admin\SubjectController@show']);

    Route::get('admin/disciplina/create', ['as' => 'admin.subject.create', 'uses' => 'Admin\SubjectController@create']);
    Route::post('admin/disciplina/store', ['as' => 'admin.subject.store', 'uses' => 'Admin\SubjectController@store']);
    Route::get('admin/disciplina/edit/{id}', ['as' => 'admin.subject.edit', 'uses' => 'Admin\SubjectController@edit']);
    Route::put('admin/disciplina/update/{id}', ['as' => 'admin.subject.update', 'uses' => 'Admin\SubjectController@update']);
    Route::get('admin/disciplina/delete/{id}', ['as' => 'admin.subject.delete', 'uses' => 'Admin\SubjectController@destroy']);

    Route::get('admin/disciplina/delete/{id}', ['as' => 'admin.subject.delete', 'uses' => 'Admin\SubjectController@destroy']);
    Route::get('admin/disciplina/disciplina/{id}', ['as' => 'admin.subject', 'uses' => 'Admin\SubjectController@GetSubCatAgainstMain']);

    /* end disciplina */

    /* rota de  Pagamento */
    Route::get('admin/pagamento/index', ['as' => 'admin.payment.index', 'uses' => 'Admin\PaymentController@index']);
    Route::get('admin/pagamento/show/{id}', ['as' => 'admin.payment.show', 'uses' => 'Admin\PaymentController@show']);
    Route::get('admin/pagamento/create', ['as' => 'admin.payment.create', 'uses' => 'Admin\PaymentController@create']);
    Route::post('admin/pagamento/store', ['as' => 'admin.payment.store', 'uses' => 'Admin\PaymentController@store']);
    Route::get('admin/pagamento/edit/{id}', ['as' => 'admin.payment.edit', 'uses' => 'Admin\PaymentController@edit']);
    Route::put('admin/pagamento/update/{id}', ['as' => 'admin.payment.update', 'uses' => 'Admin\PaymentController@update']);
    Route::get('admin/pagamento/delete/{id}', ['as' => 'admin.payment.delete', 'uses' => 'Admin\PaymentController@destroy']);
    Route::get('admin/pagamento/delete/{id}', ['as' => 'admin.payment.delete', 'uses' => 'Admin\PaymentController@destroy']);
    Route::get('admin/pagamento/estudantes/{id}', ['as' => 'admin.payment', 'uses' => 'Admin\PaymentController@GetSubCatAgainstMain']);
    Route::get('admin/pagamento/recibo', ['as' => 'admin.payments.report', 'uses' => 'Admin\PaymentController@print']);
    /* end Pagamento */
    /**tipo de finalista  */
    Route::get('admin/finalista/index', ['as' => 'admin.finalists.index', 'uses' => 'Admin\FinalistController@index']);
    Route::get('admin/finalista/show/{id}', ['as' => 'admin.finalists.show', 'uses' => 'Admin\FinalistController@show']);
    Route::get('admin/finalista/create', ['as' => 'admin.finalists.create', 'uses' => 'Admin\FinalistController@create']);
    Route::post('admin/finalista/store', ['as' => 'admin.finalists.store', 'uses' => 'Admin\FinalistController@store']);
    Route::get('admin/finalista/edit/{id}', ['as' => 'admin.finalists.edit', 'uses' => 'Admin\FinalistController@edit']);
    Route::put('admin/finalista/update/{id}', ['as' => 'admin.finalists.update', 'uses' => 'Admin\FinalistController@update']);
    Route::post('admin/finalista/delete', ['as' => 'admin.finalists.delete', 'uses' => 'Admin\FinalistController@destroy']);
    /** end  */
    /* rota de curso  */
    Route::get('admin/curso/index', ['as' => 'admin.course.index', 'uses' => 'Admin\CourseController@index']);
    Route::get('admin/curso/show/{id}', ['as' => 'admin.course.show', 'uses' => 'Admin\CourseController@show']);
    Route::get('admin/curso/create', ['as' => 'admin.course.create', 'uses' => 'Admin\CourseController@create']);
    Route::post('admin/curso/store', ['as' => 'admin.course.store', 'uses' => 'Admin\CourseController@store']);
    Route::get('admin/curso/edit/{id}', ['as' => 'admin.course.edit', 'uses' => 'Admin\CourseController@edit']);
    Route::put('admin/curso/update/{id}', ['as' => 'admin.course.update', 'uses' => 'Admin\CourseController@update']);
    Route::get('admin/curso/delete/{id}', ['as' => 'admin.course.delete', 'uses' => 'Admin\CourseController@destroy']);
    /* end news *

    /* rota de turma  */
    Route::get('admin/classe/index', ['as' => 'admin.classe.index', 'uses' => 'Admin\ClasseController@index']);
    Route::get('admin/classe/show/{id}', ['as' => 'admin.classe.show', 'uses' => 'Admin\ClasseController@show']);
    Route::get('admin/classe/create', ['as' => 'admin.classe.create', 'uses' => 'Admin\ClasseController@create']);
    Route::post('admin/classe/store', ['as' => 'admin.classe.store', 'uses' => 'Admin\ClasseController@store']);
    Route::get('admin/classe/edit/{id}', ['as' => 'admin.classe.edit', 'uses' => 'Admin\ClasseController@edit']);
    Route::put('admin/classe/update/{id}', ['as' => 'admin.classe.update', 'uses' => 'Admin\ClasseController@update']);
    Route::get('admin/classe/delete/{id}', ['as' => 'admin.classe.delete', 'uses' => 'Admin\ClasseController@destroy']);
    /* end news */

    /* rota de  professor em relacao a disciplina*/
    Route::get('admin/disciplina-professor/index', ['as' => 'admin.teacher_subjects.index', 'uses' => 'Admin\TeacherSubjectController@index']);
    Route::get('admin/disciplina-professor/show/{id}', ['as' => 'admin.teacher_subjects.show', 'uses' => 'Admin\TeacherSubjectController@show']);
    Route::get('admin/disciplina-professor/create', ['as' => 'admin.teacher_subjects.create', 'uses' => 'Admin\TeacherSubjectController@create']);
    Route::post('admin/disciplina-professor/store', ['as' => 'admin.teacher_subjects.store', 'uses' => 'Admin\TeacherSubjectController@store']);
    Route::get('admin/disciplina-professor/edit/{id}', ['as' => 'admin.teacher_subjects.edit', 'uses' => 'Admin\TeacherSubjectController@edit']);
    Route::put('admin/disciplina-professor/update/{id}', ['as' => 'admin.teacher_subjects.update', 'uses' => 'Admin\TeacherSubjectController@update']);
    Route::get('admin/disciplina-professor/delete/{id}', ['as' => 'admin.teacher_subjects.delete', 'uses' => 'Admin\TeacherSubjectController@destroy']);
    Route::post('admin/disciplina-professor/search', ['as' => 'admin.teacher_subjects_seach', 'uses' => 'Admin\TeacherSubjectController@teacher_subjects_seach']);
    Route::get('admin/disciplina-professor/seachResult/{startYear}', ['as' => 'admin.teacher_subjects.seachResult', 'uses' => 'Admin\TeacherSubjectController@seachResult']);
    Route::get('admin/disciplina-professor/recibo', ['as' => 'admin.teacher_subjects.report', 'uses' => 'Admin\TeacherSubjectController@print']);
    Route::get('admin/disciplina-professor/estudantes/{id}', ['as' => 'admin.teacher_subjects.teacher', 'uses' => 'Admin\TeacherSubjectController@GetSubCatAgainstMain']);
    Route::get('admin/disciplina-professor/recibo', ['as' => 'admin.teacher_subjects.report', 'uses' => 'Admin\TeacherSubjectController@print']);
    /* end new */
    /* rota de  estudantes */
    Route::get('admin/estudantes/index', ['as' => 'admin.students.index', 'uses' => 'Admin\StudentController@index']);
    Route::get('admin/estudantes/show/{id}', ['as' => 'admin.students.show', 'uses' => 'Admin\StudentController@show']);
    Route::get('admin/estudantes/create', ['as' => 'admin.students.create', 'uses' => 'Admin\StudentController@create']);
    Route::post('admin/estudantes/store', ['as' => 'admin.students.store', 'uses' => 'Admin\StudentController@store']);
    Route::get('admin/estudantes/edit/{id}', ['as' => 'admin.students.edit', 'uses' => 'Admin\StudentController@edit']);
    Route::put('admin/estudantes/update/{id}', ['as' => 'admin.students.update', 'uses' => 'Admin\StudentController@update']);
    Route::get('admin/estudantes/delete/{id}', ['as' => 'admin.students.delete', 'uses' => 'Admin\StudentController@destroy']);
    Route::post('admin/estudantes/search', ['as' => 'admin.students_seach', 'uses' => 'Admin\StudentController@students_seach']);
    Route::get('admin/estudantes/seachResult/{startYear}', ['as' => 'admin.students.seachResult', 'uses' => 'Admin\StudentController@seachResult']);
    Route::get('admin/estudantes/recibo', ['as' => 'admin.students.report.print', 'uses' => 'Admin\StudentController@print']);
    Route::get('admin/estudantes/estudantes/{id}', ['as' => 'admin.students.student', 'uses' => 'Admin\StudentController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/estudantes/recibo/', ['as' => 'admin.students.print', 'uses' => 'Admin\StudentController@sendStartYear']);
    Route::get('admin/estudantes/recibo/{startYear}', ['as' => 'admin.students.report', 'uses' => 'Admin\StudentController@print']);
    /**end print */

    /* rota de  estudante-transferido */
    Route::get('admin/ano-academico-professor/index', ['as' => 'admin.teacher_academic_years.index', 'uses' => 'Admin\TeacherAcademicYearController@index']);
    Route::get('admin/ano-academico-professor/show/{id}', ['as' => 'admin.teacher_academic_years.show', 'uses' => 'Admin\TeacherAcademicYearController@show']);
    Route::get('admin/ano-academico-professor/create', ['as' => 'admin.teacher_academic_years.create', 'uses' => 'Admin\TeacherAcademicYearController@create']);
    Route::post('admin/ano-academico-professor/store', ['as' => 'admin.teacher_academic_years.store', 'uses' => 'Admin\TeacherAcademicYearController@store']);
    Route::get('admin/ano-academico-professor/edit/{id}', ['as' => 'admin.teacher_academic_years.edit', 'uses' => 'Admin\TeacherAcademicYearController@edit']);
    Route::put('admin/ano-academico-professor/update/{id}', ['as' => 'admin.teacher_academic_years.update', 'uses' => 'Admin\TeacherAcademicYearController@update']);
    Route::get('admin/ano-academico-professor/delete/{id}', ['as' => 'admin.teacher_academic_years.delete', 'uses' => 'Admin\TeacherAcademicYearController@destroy']);
    Route::post('admin/ano-academico-professor/search', ['as' => 'admin.teacher_academic_years_seach', 'uses' => 'Admin\TeacherAcademicYearController@teacher_academic_years_seach']);
    Route::get('admin/ano-academico-professor/seachResult/{startYear}', ['as' => 'admin.teacher_academic_years.seachResult', 'uses' => 'Admin\TeacherAcademicYearController@seachResult']);
    Route::get('admin/ano-academico-professor/recibo', ['as' => 'admin.teacher_academic_years.report.show', 'uses' => 'Admin\TeacherAcademicYearController@print']);
    Route::get('admin/ano-academico-professor/estudantes/{id}', ['as' => 'admin.teacher_academic_years.student', 'uses' => 'Admin\TeacherAcademicYearController@GetSubCatAgainstMain']);

    /**Print  */

    Route::post('admin/ano-academico-professor/recibo/', ['as' => 'admin.teacher_academic_years.print.show', 'uses' => 'Admin\TeacherAcademicYearController@sendStartYear']);

    Route::get('admin/ano-academico-professor/recibo/{startYear}', ['as' => 'admin.teacher_academic_years.report.print', 'uses' => 'Admin\TeacherAcademicYearController@print']);

    /**end print */
    /* rota de  quandro de honra */
    Route::get('admin/quandro-honra/index', ['as' => 'admin.honor_academic_years.index', 'uses' => 'Admin\HonorAcademicYearController@index']);
    Route::get('admin/quandro-honra/show/{id}', ['as' => 'admin.honor_academic_years.show', 'uses' => 'Admin\HonorAcademicYearController@show']);
    Route::get('admin/quandro-honra/create', ['as' => 'admin.honor_academic_years.create', 'uses' => 'Admin\HonorAcademicYearController@create']);
    Route::post('admin/quandro-honra/store', ['as' => 'admin.honor_academic_years.store', 'uses' => 'Admin\HonorAcademicYearController@store']);
    Route::get('admin/quandro-honra/edit/{id}', ['as' => 'admin.honor_academic_years.edit', 'uses' => 'Admin\HonorAcademicYearController@edit']);
    Route::put('admin/quandro-honra/update/{id}', ['as' => 'admin.honor_academic_years.update', 'uses' => 'Admin\HonorAcademicYearController@update']);
    Route::get('admin/quandro-honra/delete/{id}', ['as' => 'admin.honor_academic_years.delete', 'uses' => 'Admin\HonorAcademicYearController@destroy']);
    Route::post('admin/quandro-honra/search', ['as' => 'admin.honor_academic_years_seach', 'uses' => 'Admin\HonorAcademicYearController@honor_academic_years_seach']);
    Route::get('admin/quandro-honra/seachResult/{startYear}', ['as' => 'admin.honor_academic_years.seachResult', 'uses' => 'Admin\HonorAcademicYearController@seachResult']);
    Route::get('admin/quandro-honra/recibo', ['as' => 'admin.honor_academic_years.report.show', 'uses' => 'Admin\HonorAcademicYearController@print']);
    Route::get('admin/quandro-honra/estudantes/{id}', ['as' => 'admin.honor_academic_years.student', 'uses' => 'Admin\HonorAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/quandro-honra/recibo/', ['as' => 'admin.honor_academic_years.print', 'uses' => 'Admin\HonorAcademicYearController@sendStartYear']);
    Route::get('admin/quandro-honra/recibo/{startYear}', ['as' => 'admin.honor_academic_years.report.print', 'uses' => 'Admin\HonorAcademicYearController@print']);
    /**end print */
    /* end */
    /* rota de  seminar_academic_years */
    Route::get('admin/feriado/index', ['as' => 'admin.seminar_academic_years.index', 'uses' => 'Admin\SeminarAcademicYearController@index']);
    Route::get('admin/feriado/show/{id}', ['as' => 'admin.seminar_academic_years.show', 'uses' => 'Admin\SeminarAcademicYearController@show']);
    Route::get('admin/feriado/create', ['as' => 'admin.seminar_academic_years.create', 'uses' => 'Admin\SeminarAcademicYearController@create']);
    Route::post('admin/feriado/store', ['as' => 'admin.seminar_academic_years.store', 'uses' => 'Admin\SeminarAcademicYearController@store']);
    Route::get('admin/feriado/edit/{id}', ['as' => 'admin.seminar_academic_years.edit', 'uses' => 'Admin\SeminarAcademicYearController@edit']);
    Route::put('admin/feriado/update/{id}', ['as' => 'admin.seminar_academic_years.update', 'uses' => 'Admin\SeminarAcademicYearController@update']);
    Route::get('admin/feriado/delete/{id}', ['as' => 'admin.seminar_academic_years.delete', 'uses' => 'Admin\SeminarAcademicYearController@destroy']);
    Route::post('admin/feriado/search', ['as' => 'admin.seminar_academic_years_seach', 'uses' => 'Admin\SeminarAcademicYearController@seminar_academic_years_seach']);
    Route::get('admin/feriado/seachResult/{startYear}', ['as' => 'admin.seminar_academic_years.seachResult', 'uses' => 'Admin\SeminarAcademicYearController@seachResult']);
    Route::get('admin/feriado/recibo', ['as' => 'admin.seminar_academic_years.report.show', 'uses' => 'Admin\SeminarAcademicYearController@print']);
    Route::get('admin/feriado/estudantes/{id}', ['as' => 'admin.seminar_academic_years.student', 'uses' => 'Admin\SeminarAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/feriado/recibo/', ['as' => 'admin.seminar_academic_years.print', 'uses' => 'Admin\SeminarAcademicYearController@sendStartYear']);
    Route::get('admin/feriado/recibo/{startYear}', ['as' => 'admin.seminar_academic_years.report.list', 'uses' => 'Admin\SeminarAcademicYearController@print']);
    /**end print */

    /* rota de exame  */
    Route::post('admin/feriados/seach', ['as' => 'admin.holidays.seach', 'uses' => 'Admin\HolidayController@seach']);
    Route::get('admin/feriados/seachResult/{examName}', ['as' => 'admin.holidays.seachResult', 'uses' => 'Admin\HolidayController@seachResult']);
    Route::get('admin/feriados/index', ['as' => 'admin.holidays.index', 'uses' => 'Admin\HolidayController@index']);
    Route::get('admin/feriados/show/{id}', ['as' => 'admin.holidays.show', 'uses' => 'Admin\HolidayController@show']);
    Route::get('admin/feriados/create', ['as' => 'admin.holidays.create', 'uses' => 'Admin\HolidayController@create']);
    Route::post('admin/feriados/store', ['as' => 'admin.holidays.store', 'uses' => 'Admin\HolidayController@store']);
    Route::get('admin/feriados/edit/{id}', ['as' => 'admin.holidays.edit', 'uses' => 'Admin\HolidayController@edit']);
    Route::put('admin/feriados/update/{id}', ['as' => 'admin.holidays.update', 'uses' => 'Admin\HolidayController@update']);
    Route::get('admin/feriados/delete/{id}', ['as' => 'admin.holidays.delete', 'uses' => 'Admin\HolidayController@destroy']);
    /* end exame */



    /* rota de  ano-academico-estudantes */
    Route::get('admin/ano-academico-estudantes/index', ['as' => 'admin.student_academic_years.index', 'uses' => 'Admin\StudentAcademicYear@index']);
    Route::get('admin/ano-academico-estudantes/show/{id}', ['as' => 'admin.student_academic_years.show', 'uses' => 'Admin\StudentAcademicYear@show']);
    Route::get('admin/ano-academico-estudantes/create', ['as' => 'admin.student_academic_years.create', 'uses' => 'Admin\StudentAcademicYear@create']);
    Route::post('admin/ano-academico-estudantes/store', ['as' => 'admin.student_academic_years.store', 'uses' => 'Admin\StudentAcademicYear@store']);
    Route::get('admin/ano-academico-estudantes/edit/{id}', ['as' => 'admin.student_academic_years.edit', 'uses' => 'Admin\StudentAcademicYear@edit']);
    Route::put('admin/ano-academico-estudantes/update/{id}', ['as' => 'admin.student_academic_years.update', 'uses' => 'Admin\StudentAcademicYear@update']);
    Route::get('admin/ano-academico-estudantes/delete/{id}', ['as' => 'admin.student_academic_years.delete', 'uses' => 'Admin\StudentAcademicYear@destroy']);
    Route::post('admin/ano-academico-estudantes/search', ['as' => 'admin.student_academic_years_seach', 'uses' => 'Admin\StudentAcademicYear@student_academic_years_seach']);
    Route::get('admin/ano-academico-estudantes/seachResult/{startYear}', ['as' => 'admin.student_academic_years.seachResult', 'uses' => 'Admin\StudentAcademicYear@seachResult']);
    Route::get('admin/ano-academico-estudantes/recibo', ['as' => 'admin.student_academic_years.report', 'uses' => 'Admin\StudentAcademicYear@print']);
    Route::get('admin/ano-academico-estudantes/estudantes/{id}', ['as' => 'admin.student_academic_years.student', 'uses' => 'Admin\StudentAcademicYear@GetSubCatAgainstMain']);
    Route::get('admin/ano-academico-estudantes/recibo', ['as' => 'admin.student_academic_years.report', 'uses' => 'Admin\StudentAcademicYear@print']);
    /* rota de  estudante-transferido */




    Route::get('admin/finalista-estudantes/index', ['as' => 'admin.finalist_academic_years.index', 'uses' => 'Admin\FinalistAcademicYearsController@index']);
    Route::get('admin/finalista-estudantes/show/{id}', ['as' => 'admin.finalist_academic_years.show', 'uses' => 'Admin\FinalistAcademicYearsController@show']);
    Route::get('admin/finalista-estudantes/create', ['as' => 'admin.finalist_academic_years.create', 'uses' => 'Admin\FinalistAcademicYearsController@create']);
    Route::post('admin/finalista-estudantes/store', ['as' => 'admin.finalist_academic_years.store', 'uses' => 'Admin\FinalistAcademicYearsController@store']);
    Route::get('admin/finalista-estudantes/edit/{id}', ['as' => 'admin.finalist_academic_years.edit', 'uses' => 'Admin\FinalistAcademicYearsController@edit']);
    Route::put('admin/finalista-estudantes/update/{id}', ['as' => 'admin.finalist_academic_years.update', 'uses' => 'Admin\FinalistAcademicYearsController@update']);
    Route::get('admin/finalista-estudantes/delete/{id}', ['as' => 'admin.finalist_academic_years.delete', 'uses' => 'Admin\FinalistAcademicYearsController@destroy']);
    Route::post('admin/finalista-estudantes/search', ['as' => 'admin.finalist_academic_years_seach', 'uses' => 'Admin\FinalistAcademicYearsController@finalist_academic_years_seach']);
    Route::get('admin/finalista-estudantes/seachResult/{startYear}', ['as' => 'admin.finalist_academic_years.seachResult', 'uses' => 'Admin\FinalistAcademicYearsController@seachResult']);
    Route::get('admin/finalista-estudantes/recibo', ['as' => 'admin.finalist_academic_years.report.show', 'uses' => 'Admin\FinalistAcademicYearsController@print']);
    Route::get('admin/finalista-estudantes/estudantes/{id}', ['as' => 'admin.finalist_academic_years.student.list', 'uses' => 'Admin\FinalistAcademicYearsController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/finalista-estudantes/recibo/', ['as' => 'admin.finalist_academic_years.print.show', 'uses' => 'Admin\FinalistAcademicYearsController@sendStartYear']);
    Route::get('admin/finalista-estudantes/recibo/{startYear}', ['as' => 'admin.finalist_academic_years.report.list', 'uses' => 'Admin\FinalistAcademicYearsController@print']);
    /**end print */
    /* rota de  estudante-transferido */
    Route::get('admin/ano-academico-estudantes/index', ['as' => 'admin.student_academic_years.index', 'uses' => 'Admin\StudentAcademicYearController@index']);
    Route::get('admin/ano-academico-estudantes/show/{id}', ['as' => 'admin.student_academic_years.show', 'uses' => 'Admin\StudentAcademicYearController@show']);
    Route::get('admin/ano-academico-estudantes/create', ['as' => 'admin.student_academic_years.create', 'uses' => 'Admin\StudentAcademicYearController@create']);
    Route::post('admin/ano-academico-estudantes/store', ['as' => 'admin.student_academic_years.store', 'uses' => 'Admin\StudentAcademicYearController@store']);
    Route::get('admin/ano-academico-estudantes/edit/{id}', ['as' => 'admin.student_academic_years.edit', 'uses' => 'Admin\StudentAcademicYearController@edit']);
    Route::put('admin/ano-academico-estudantes/update/{id}', ['as' => 'admin.student_academic_years.update', 'uses' => 'Admin\StudentAcademicYearController@update']);
    Route::get('admin/ano-academico-estudantes/delete/{id}', ['as' => 'admin.student_academic_years.delete', 'uses' => 'Admin\StudentAcademicYearController@destroy']);
    Route::post('admin/ano-academico-estudantes/search', ['as' => 'admin.student_academic_years_seach', 'uses' => 'Admin\StudentAcademicYearController@student_academic_years_seach']);
    Route::get('admin/ano-academico-estudantes/seachResult/{startYear}', ['as' => 'admin.student_academic_years.seachResult', 'uses' => 'Admin\StudentAcademicYearController@seachResult']);
    Route::get('admin/ano-academico-estudantes/recibo', ['as' => 'admin.student_academic_years.report', 'uses' => 'Admin\StudentAcademicYearController@print']);
    Route::get('admin/ano-academico-estudantes/estudantes/{id}', ['as' => 'admin.student_academic_years.student', 'uses' => 'Admin\StudentAcademicYearController@GetSubCatAgainstMain']);

    /**Print  */

    Route::post('admin/ano-academico-estudantes/recibo/', ['as' => 'admin.teacher_academic_years.print', 'uses' => 'Admin\StudentAcademicYearController@sendStartYear']);

    Route::get('admin/ano-academico-estudantes/recibo/{startYear}', ['as' => 'admin.teacher_academic_years.report.list', 'uses' => 'Admin\StudentAcademicYearController@print']);

    /**end print */
    /* rota de  teacher_exames */
    Route::get('admin/teacher_exames/index', ['as' => 'admin.teacher_exames.index', 'uses' => 'Admin\TeacherExameController@index']);
    Route::get('admin/teacher_exames/show/{id}', ['as' => 'admin.teacher_exames.show', 'uses' => 'Admin\TeacherExameController@show']);
    Route::get('admin/teacher_exames/create', ['as' => 'admin.teacher_exames.create', 'uses' => 'Admin\TeacherExameController@create']);
    Route::post('admin/teacher_exames/store', ['as' => 'admin.teacher_exames.store', 'uses' => 'Admin\TeacherExameController@store']);
    Route::get('admin/teacher_exames/edit/{id}', ['as' => 'admin.teacher_exames.edit', 'uses' => 'Admin\TeacherExameController@edit']);
    Route::put('admin/teacher_exames/update/{id}', ['as' => 'admin.teacher_exames.update', 'uses' => 'Admin\TeacherExameController@update']);
    Route::get('admin/teacher_exames/delete/{id}', ['as' => 'admin.teacher_exames.delete', 'uses' => 'Admin\TeacherExameController@destroy']);
    Route::post('admin/teacher_exames/search', ['as' => 'admin.teacher_exames_seach', 'uses' => 'Admin\TeacherExameController@teacher_exames_seach']);
    Route::get('admin/teacher_exames/seachResult/{startYear}', ['as' => 'admin.teacher_exames.seachResult', 'uses' => 'Admin\TeacherExameController@seachResult']);
    Route::get('admin/teacher_exames/recibo', ['as' => 'admin.teacher_exames.report', 'uses' => 'Admin\TeacherExameController@print']);
    Route::get('admin/teacher_exames/estudantes/{id}', ['as' => 'admin.teacher_exames.student', 'uses' => 'Admin\TeacherExameController@GetSubCatAgainstMain']);
    Route::get('admin/teacher_exames/recibo', ['as' => 'admin.teacher_exames.report', 'uses' => 'Admin\TeacherExameController@print']);
    /* end  teacher_exames */
    /**Print  */
    Route::post('admin/teacher_exames/recibo/', ['as' => 'admin.teacher_exames.print', 'uses' => 'Admin\TeacherExameController@sendStartYear']);
    Route::get('admin/teacher_exames/recibo/{startYear}', ['as' => 'admin.teacher_exames.report', 'uses' => 'Admin\TeacherExameController@print']);
    /**end print */
    /* rota de  student_class */
    Route::get('admin/student_classes/index', ['as' => 'admin.student_classes.index', 'uses' => 'Admin\StudentClassController@index']);
    Route::get('admin/student_classes/show/{id}', ['as' => 'admin.student_classes.show', 'uses' => 'Admin\StudentClassController@show']);
    Route::get('admin/student_classes/create', ['as' => 'admin.student_classes.create', 'uses' => 'Admin\StudentClassController@create']);
    Route::post('admin/student_classes/store', ['as' => 'admin.student_classes.store', 'uses' => 'Admin\StudentClassController@store']);
    Route::get('admin/student_classes/edit/{id}', ['as' => 'admin.student_classes.edit', 'uses' => 'Admin\StudentClassController@edit']);
    Route::put('admin/student_classes/update/{id}', ['as' => 'admin.student_classes.update', 'uses' => 'Admin\StudentClassController@update']);
    Route::get('admin/student_classes/delete/{id}', ['as' => 'admin.student_classes.delete', 'uses' => 'Admin\StudentClassController@destroy']);
    Route::post('admin/student_classes/search', ['as' => 'admin.student_classes_seach', 'uses' => 'Admin\StudentClassController@student_classes_seach']);
    Route::get('admin/student_classes/seachResult/{classeName}', ['as' => 'admin.student_classes.seachResult', 'uses' => 'Admin\StudentClassController@seachResult']);
    Route::get('admin/student_classes/recibo', ['as' => 'admin.student_classes.report', 'uses' => 'Admin\StudentClassController@print']);
    Route::get('admin/student_classes/estudantes/{id}', ['as' => 'admin.student_classes.student', 'uses' => 'Admin\StudentClassController@GetSubCatAgainstMain']);
    Route::get('admin/student_classes/recibo', ['as' => 'admin.student_classes.report', 'uses' => 'Admin\StudentClassController@print']);
    /* end  student_class */
    /* imageGallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End imageGallery */
    /* rota de  student_rooms */
    Route::get('admin/student_rooms/index', ['as' => 'admin.student_rooms.index', 'uses' => 'Admin\StudentRoomController@index']);
    Route::get('admin/student_rooms/show/{id}', ['as' => 'admin.student_rooms.show', 'uses' => 'Admin\StudentRoomController@show']);
    Route::get('admin/student_rooms/create', ['as' => 'admin.student_rooms.create', 'uses' => 'Admin\StudentRoomController@create']);
    Route::post('admin/student_rooms/store', ['as' => 'admin.student_rooms.store', 'uses' => 'Admin\StudentRoomController@store']);
    Route::get('admin/student_rooms/edit/{id}', ['as' => 'admin.student_rooms.edit', 'uses' => 'Admin\StudentRoomController@edit']);
    Route::put('admin/student_rooms/update/{id}', ['as' => 'admin.student_rooms.update', 'uses' => 'Admin\StudentRoomController@update']);
    Route::get('admin/student_rooms/delete/{id}', ['as' => 'admin.student_rooms.delete', 'uses' => 'Admin\StudentRoomController@destroy']);
    Route::post('admin/student_rooms/search', ['as' => 'admin.student_rooms_seach', 'uses' => 'Admin\StudentRoomController@student_rooms_seach']);
    Route::get('admin/student_rooms/seachResult/{name}', ['as' => 'admin.student_rooms.seachResult', 'uses' => 'Admin\StudentRoomController@seachResult']);
    Route::get('admin/student_rooms/recibo', ['as' => 'admin.student_rooms.report', 'uses' => 'Admin\StudentRoomController@print']);
    Route::get('admin/student_rooms/estudantes/{id}', ['as' => 'admin.student_rooms.student', 'uses' => 'Admin\StudentRoomController@GetSubCatAgainstMain']);
    Route::get('admin/student_rooms/recibo', ['as' => 'admin.student_rooms.report', 'uses' => 'Admin\StudentRoomController@print']);
    /* end  student_rooms */
    /* rota de  dormitorio-anual */
    Route::get('admin/dormitorio-anual/index', ['as' => 'admin.room_academic_years.index', 'uses' => 'Admin\RoomAcademicYearController@index']);
    Route::get('admin/dormitorio-anual/show/{id}', ['as' => 'admin.room_academic_years.show', 'uses' => 'Admin\RoomAcademicYearController@show']);
    Route::get('admin/dormitorio-anual/create', ['as' => 'admin.room_academic_years.create', 'uses' => 'Admin\RoomAcademicYearController@create']);
    Route::post('admin/dormitorio-anual/store', ['as' => 'admin.room_academic_years.store', 'uses' => 'Admin\RoomAcademicYearController@store']);
    Route::get('admin/dormitorio-anual/edit/{id}', ['as' => 'admin.room_academic_years.edit', 'uses' => 'Admin\RoomAcademicYearController@edit']);
    Route::put('admin/dormitorio-anual/update/{id}', ['as' => 'admin.room_academic_years.update', 'uses' => 'Admin\RoomAcademicYearController@update']);
    Route::get('admin/dormitorio-anual/delete/{id}', ['as' => 'admin.room_academic_years.delete', 'uses' => 'Admin\RoomAcademicYearController@destroy']);
    Route::post('admin/dormitorio-anual/search', ['as' => 'admin.room_academic_years_seach', 'uses' => 'Admin\RoomAcademicYearController@room_academic_years_seach']);
    Route::get('admin/dormitorio-anual/seachResult/{startYear}', ['as' => 'admin.room_academic_years.seachResult', 'uses' => 'Admin\RoomAcademicYearController@seachResult']);
    Route::get('admin/dormitorio-anual/recibo', ['as' => 'admin.room_academic_years.report', 'uses' => 'Admin\RoomAcademicYearController@print']);
    Route::get('admin/dormitorio-anual/estudantes/{id}', ['as' => 'admin.room_academic_years.student', 'uses' => 'Admin\RoomAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/dormitorio-anual/recibo/', ['as' => 'admin.room_academic_years.print', 'uses' => 'Admin\RoomAcademicYearController@sendStartYear']);
    Route::get('admin/dormitorio-anual/recibo/{startYear}', ['as' => 'admin.room_academic_years.report', 'uses' => 'Admin\RoomAcademicYearController@print']);
    /**end print */

    /* rota de  estudante-transferido */
    Route::get('admin/ano-academico-estudantes/index', ['as' => 'admin.student_academic_years.index', 'uses' => 'Admin\StudentAcademicYearController@index']);
    Route::get('admin/ano-academico-estudantes/show/{id}', ['as' => 'admin.student_academic_years.show', 'uses' => 'Admin\StudentAcademicYearController@show']);
    Route::get('admin/ano-academico-estudantes/create', ['as' => 'admin.student_academic_years.create', 'uses' => 'Admin\StudentAcademicYearController@create']);
    Route::post('admin/ano-academico-estudantes/store', ['as' => 'admin.student_academic_years.store', 'uses' => 'Admin\StudentAcademicYearController@store']);
    Route::get('admin/ano-academico-estudantes/edit/{id}', ['as' => 'admin.student_academic_years.edit', 'uses' => 'Admin\StudentAcademicYearController@edit']);
    Route::put('admin/ano-academico-estudantes/update/{id}', ['as' => 'admin.student_academic_years.update', 'uses' => 'Admin\StudentAcademicYearController@update']);
    Route::get('admin/ano-academico-estudantes/delete/{id}', ['as' => 'admin.student_academic_years.delete', 'uses' => 'Admin\StudentAcademicYearController@destroy']);
    Route::post('admin/ano-academico-estudantes/search', ['as' => 'admin.student_academic_years_seach', 'uses' => 'Admin\StudentAcademicYearController@student_academic_years_seach']);
    Route::get('admin/estudante-transferido/seachResult/{startYear}', ['as' => 'admin.student_academic_years.seachResult', 'uses' => 'Admin\StudentAcademicYearController@seachResult']);
    Route::get('admin/ano-academico-estudantes/recibo', ['as' => 'admin.student_academic_years.report', 'uses' => 'Admin\StudentAcademicYearController@print']);
    Route::get('admin/ano-academico-estudantes/estudantes/{id}', ['as' => 'admin.student_academic_years.student', 'uses' => 'Admin\StudentAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/ano-academico-estudantes/recibo/', ['as' => 'admin.student_academic_years.print', 'uses' => 'Admin\StudentAcademicYearController@sendStartYear']);
    Route::get('admin/ano-academico-estudantes/recibo/{startYear}', ['as' => 'admin.student_academic_years.report', 'uses' => 'Admin\StudentAcademicYearController@print']);
    /**end print */

    /* rota de exame  */
    Route::post('admin/exams/seach', ['as' => 'admin.exams.seach', 'uses' => 'Admin\ExamController@seach']);
    Route::get('admin/exams/seachResult/{examName}', ['as' => 'admin.exams.seachResult', 'uses' => 'Admin\ExamController@seachResult']);
    Route::get('admin/exams/index', ['as' => 'admin.exams.index', 'uses' => 'Admin\ExamController@index']);
    Route::get('admin/exams/show/{id}', ['as' => 'admin.exams.show', 'uses' => 'Admin\ExamController@show']);
    Route::get('admin/exams/create', ['as' => 'admin.exams.create', 'uses' => 'Admin\ExamController@create']);
    Route::post('admin/exams/store', ['as' => 'admin.exams.store', 'uses' => 'Admin\ExamController@store']);
    Route::get('admin/exams/edit/{id}', ['as' => 'admin.exams.edit', 'uses' => 'Admin\ExamController@edit']);
    Route::put('admin/exams/update/{id}', ['as' => 'admin.exams.update', 'uses' => 'Admin\ExamController@update']);
    Route::get('admin/exams/delete/{id}', ['as' => 'admin.exams.delete', 'uses' => 'Admin\ExamController@destroy']);
    /* end exame */
    /* rota de curso  */
    Route::get('admin/provincia/index', ['as' => 'admin.province.index', 'uses' => 'Admin\ProvinceController@index']);
    Route::get('admin/provincia/show/{id}', ['as' => 'admin.province.show', 'uses' => 'Admin\ProvinceController@show']);

    Route::get('admin/provincia/create', ['as' => 'admin.province.create', 'uses' => 'Admin\ProvinceController@create']);
    Route::post('admin/provincia/store', ['as' => 'admin.province.store', 'uses' => 'Admin\ProvinceController@store']);
    Route::get('admin/provincia/edit/{id}', ['as' => 'admin.province.edit', 'uses' => 'Admin\ProvinceController@edit']);
    Route::put('admin/provincia/update/{id}', ['as' => 'admin.province.update', 'uses' => 'Admin\ProvinceController@update']);
    Route::get('admin/provincia/delete/{id}', ['as' => 'admin.province.delete', 'uses' => 'Admin\ProvinceController@destroy']);
    /* end news */
    /* rota de aproveitamento  */
    Route::post('admin/aproveitamento/seach', ['as' => 'admin.aproveitaments.seach', 'uses' => 'Admin\AproveitamentController@seach']);
    Route::get('admin/aproveitamento/seachResult/{examName}', ['as' => 'admin.aproveitaments.seachResult', 'uses' => 'Admin\AproveitamentController@seachResult']);
    Route::get('admin/aproveitamento/index', ['as' => 'admin.aproveitaments.index', 'uses' => 'Admin\AproveitamentController@index']);
    Route::get('admin/aproveitamento/show/{id}', ['as' => 'admin.aproveitaments.show', 'uses' => 'Admin\AproveitamentController@show']);
    Route::get('admin/aproveitamento/create', ['as' => 'admin.aproveitaments.create', 'uses' => 'Admin\AproveitamentController@create']);
    Route::post('admin/aproveitamento/store', ['as' => 'admin.aproveitaments.store', 'uses' => 'Admin\AproveitamentController@store']);
    Route::get('admin/aproveitamento/edit/{id}', ['as' => 'admin.aproveitaments.edit', 'uses' => 'Admin\AproveitamentController@edit']);
    Route::put('admin/aproveitamento/update/{id}', ['as' => 'admin.aproveitaments.update', 'uses' => 'Admin\AproveitamentController@update']);
    Route::get('admin/aproveitamento/delete/{id}', ['as' => 'admin.aproveitaments.delete', 'uses' => 'Admin\AproveitamentController@destroy']);
    /* end aproveitamento */
    /* rota de transport  */
    Route::post('admin/transporte/seach', ['as' => 'admin.transports.seach', 'uses' => 'Admin\TransportController@seach']);
    Route::get('admin/transporte/seachResult/{startYear}', ['as' => 'admin.transports.seachResult', 'uses' => 'Admin\TransportController@seachResult']);
    Route::get('admin/transporte/index', ['as' => 'admin.transports.index', 'uses' => 'Admin\TransportController@index']);
    Route::get('admin/transporte/show/{id}', ['as' => 'admin.transports.show', 'uses' => 'Admin\TransportController@show']);
    Route::get('admin/transporte/create', ['as' => 'admin.transports.create', 'uses' => 'Admin\TransportController@create']);
    Route::post('admin/transporte/store', ['as' => 'admin.transports.store', 'uses' => 'Admin\TransportController@store']);
    Route::get('admin/transporte/edit/{id}', ['as' => 'admin.transports.edit', 'uses' => 'Admin\TransportController@edit']);
    Route::put('admin/transporte/update/{id}', ['as' => 'admin.transports.update', 'uses' => 'Admin\TransportController@update']);
    Route::get('admin/transporte/delete/{id}', ['as' => 'admin.transports.delete', 'uses' => 'Admin\TransportController@destroy']);
    /* end transport */
    /* rota de  estudante-transferido */
    Route::get('admin/estudante-transporte/index', ['as' => 'admin.transport_academic_years.index', 'uses' => 'Admin\TransportAcademicYearController@index']);
    Route::get('admin/estudante-transporte/show/{id}', ['as' => 'admin.transport_academic_years.show', 'uses' => 'Admin\TransportAcademicYearController@show']);
    Route::get('admin/estudante-transporte/create', ['as' => 'admin.transport_academic_years.create', 'uses' => 'Admin\TransportAcademicYearController@create']);
    Route::post('admin/estudante-transporte/store', ['as' => 'admin.transport_academic_years.store', 'uses' => 'Admin\TransportAcademicYearController@store']);
    Route::get('admin/estudante-transporte/edit/{id}', ['as' => 'admin.transport_academic_years.edit', 'uses' => 'Admin\TransportAcademicYearController@edit']);
    Route::put('admin/estudante-transporte/update/{id}', ['as' => 'admin.transport_academic_years.update', 'uses' => 'Admin\TransportAcademicYearController@update']);
    Route::get('admin/estudante-transporte/delete/{id}', ['as' => 'admin.transport_academic_years.delete', 'uses' => 'Admin\TransportAcademicYearController@destroy']);
    Route::post('admin/estudante-transporte/search', ['as' => 'admin.transport_academic_years_seach', 'uses' => 'Admin\TransportAcademicYearController@transport_academic_years_seach']);
    Route::get('admin/estudante-transporte/seachResult/{startYear}', ['as' => 'admin.transport_academic_years.seachResult', 'uses' => 'Admin\TransportAcademicYearController@seachResult']);
    Route::get('admin/estudante-transporte/recibo', ['as' => 'admin.transport_academic_years.report', 'uses' => 'Admin\TransportAcademicYearController@print']);
    Route::get('admin/estudante-transporte/estudantes/{id}', ['as' => 'admin.transport_academic_years.student', 'uses' => 'Admin\StudentTransferController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/estudante-transporte/recibo/', ['as' => 'admin.transport_academic_years.print', 'uses' => 'Admin\TransportAcademicYearController@sendStartYear']);
    Route::get('admin/estudante-transporte/recibo/{startYear}', ['as' => 'admin.transport_academic_years.report', 'uses' => 'Admin\TransportAcademicYearController@print']);
    /**end print */




    
    /* rota de  pagamento-transporte */
    Route::get('admin/pagamento-transporte/index', ['as' => 'admin.trans_payment_academic_years.index', 'uses' => 'Admin\TransPaymentAcademicYearController@index']);
    Route::get('admin/pagamento-transporte/show/{id}', ['as' => 'admin.trans_payment_academic_years.show', 'uses' => 'Admin\TransPaymentAcademicYearController@show']);
    Route::get('admin/pagamento-transporte/create', ['as' => 'admin.trans_payment_academic_years.create', 'uses' => 'Admin\TransPaymentAcademicYearController@create']);
    Route::post('admin/pagamento-transporte/store', ['as' => 'admin.trans_payment_academic_years.store', 'uses' => 'Admin\TransPaymentAcademicYearController@store']);
    Route::get('admin/pagamento-transporte/edit/{id}', ['as' => 'admin.trans_payment_academic_years.edit', 'uses' => 'Admin\TransPaymentAcademicYearController@edit']);
    Route::put('admin/pagamento-transporte/update/{id}', ['as' => 'admin.trans_payment_academic_years.update', 'uses' => 'Admin\TransPaymentAcademicYearController@update']);
    Route::get('admin/pagamento-transporte/delete/{id}', ['as' => 'admin.trans_payment_academic_years.delete', 'uses' => 'Admin\TransPaymentAcademicYearController@destroy']);
    Route::post('admin/pagamento-transporte/search', ['as' => 'admin.trans_payment_academic_years_seach', 'uses' => 'Admin\TransPaymentAcademicYearController@trans_payment_academic_years_seach']);
    Route::get('admin/pagamento-transporte/seachResult/{startYear}', ['as' => 'admin.trans_payment_academic_years.seachResult', 'uses' => 'Admin\TransPaymentAcademicYearController@seachResult']);
    Route::get('admin/pagamento-transporte/recibo', ['as' => 'admin.trans_payment_academic_years.report', 'uses' => 'Admin\TransPaymentAcademicYearController@print']);
    Route::get('admin/pagamento-transporte/estudantes/{id}', ['as' => 'admin.trans_payment_academic_years.student', 'uses' => 'Admin\TransPaymentAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/pagamento-transporte/recibo/', ['as' => 'admin.trans_payment_academic_years.print', 'uses' => 'Admin\TransPaymentAcademicYearController@sendStartYear']);
    Route::get('admin/pagamento-transporte/recibo/{startYear}', ['as' => 'admin.trans_payment_academic_years.report', 'uses' => 'Admin\TransPaymentAcademicYearController@print']);
    /**end print */
    /* rota de  Pagamento */
    Route::get('admin/propina/index', ['as' => 'admin.fees_academic_years.index', 'uses' => 'Admin\FeesAcademicYearController@index']);
    Route::get('admin/propina/show/{id}', ['as' => 'admin.fees_academic_years.show', 'uses' => 'Admin\FeesAcademicYearController@show']);
    Route::get('admin/propina/create', ['as' => 'admin.fees_academic_years.create', 'uses' => 'Admin\FeesAcademicYearController@create']);
    Route::post('admin/propina/store', ['as' => 'admin.fees_academic_years.store', 'uses' => 'Admin\FeesAcademicYearController@store']);
    Route::get('admin/propina/edit/{id}', ['as' => 'admin.fees_academic_years.edit', 'uses' => 'Admin\FeesAcademicYearController@edit']);
    Route::put('admin/propina/update/{id}', ['as' => 'admin.fees_academic_years.update', 'uses' => 'Admin\FeesAcademicYearController@update']);
    Route::get('admin/propina/delete/{id}', ['as' => 'admin.fees_academic_years.delete', 'uses' => 'Admin\FeesAcademicYearController@destroy']);
    Route::get('admin/propina/delete/{id}', ['as' => 'admin.fees_academic_years.delete', 'uses' => 'Admin\FeesAcademicYearController@destroy']);
    Route::get('admin/propina/estudantes/{id}', ['as' => 'admin.fees_academic_years', 'uses' => 'Admin\FeesAcademicYearController@GetSubCatAgainstMain']);
    Route::get('admin/propina/recibo', ['as' => 'admin.fees_academic_years.report', 'uses' => 'Admin\FeesAcademicYearController@print']);
    /* end Pagamento */

    /* rota de  pagamento-diverso */
    Route::get('admin/pagamento-diverso/index', ['as' => 'admin.several_academic_years.index', 'uses' => 'Admin\severalAcademicYearController@index']);
    Route::get('admin/pagamento-diverso/show/{id}', ['as' => 'admin.several_academic_years.show', 'uses' => 'Admin\severalAcademicYearController@show']);
    Route::get('admin/pagamento-diverso/create', ['as' => 'admin.several_academic_years.create', 'uses' => 'Admin\severalAcademicYearController@create']);
    Route::post('admin/pagamento-diverso/store', ['as' => 'admin.several_academic_years.store', 'uses' => 'Admin\severalAcademicYearController@store']);
    Route::get('admin/pagamento-diverso/edit/{id}', ['as' => 'admin.several_academic_years.edit', 'uses' => 'Admin\severalAcademicYearController@edit']);
    Route::put('admin/pagamento-diverso/update/{id}', ['as' => 'admin.several_academic_years.update', 'uses' => 'Admin\severalAcademicYearController@update']);
    Route::get('admin/pagamento-diverso/delete/{id}', ['as' => 'admin.several_academic_years.delete', 'uses' => 'Admin\severalAcademicYearController@destroy']);
    Route::post('admin/pagamento-diverso/search', ['as' => 'admin.several_academic_years_seach', 'uses' => 'Admin\severalAcademicYearController@several_academic_years_seach_seach']);
    Route::get('admin/pagamento-diverso/seachResult/{startYear}', ['as' => 'admin.several_academic_years.seachResult', 'uses' => 'Admin\severalAcademicYearController@seachResult']);
    Route::get('admin/pagamento-diverso/recibo', ['as' => 'admin.several_academic_years.report', 'uses' => 'Admin\severalAcademicYearController@print']);
    Route::get('admin/pagamento-diverso/estudantes/{id}', ['as' => 'admin.several_academic_years.student', 'uses' => 'Admin\severalAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/pagamento-diverso/recibo/', ['as' => 'admin.several_academic_years.print', 'uses' => 'Admin\severalAcademicYearController@sendStartYear']);
    Route::get('admin/pagamento-diverso/recibo/{startYear}', ['as' => 'admin.several_academic_years.report', 'uses' => 'Admin\severalAcademicYearController@print']);
    /**end print */

    /* rota de ano academico  */
    Route::get('admin/ano-academico/index', ['as' => 'admin.academicYear.index', 'uses' => 'Admin\AcademicYearController@create']);
    Route::get('admin/ano-academico/show/{id}', ['as' => 'admin.academicYear.show', 'uses' => 'Admin\AcademicYearController@show']);
    Route::get('admin/ano-academico/create', ['as' => 'admin.academicYear.create', 'uses' => 'Admin\AcademicYearController@create']);
    Route::post('admin/ano-academico/store', ['as' => 'admin.academicYear.store', 'uses' => 'Admin\AcademicYearController@store']);
    Route::get('admin/ano-academico/edit/{id}', ['as' => 'admin.academicYear.edit', 'uses' => 'Admin\AcademicYearController@edit']);
    Route::put('admin/ano-academico/update/{id}', ['as' => 'admin.academicYear.update', 'uses' => 'Admin\AcademicYearController@update']);
    Route::get('admin/ano-academico/delete/{id}', ['as' => 'admin.academicYear.delete', 'uses' => 'Admin\AcademicYearController@destroy']);
    /* end news */
    /* rota de transferencia de alunos  */
    Route::get('admin/transferencia/index', ['as' => 'admin.transfers.index', 'uses' => 'Admin\TransfersController@create']);
    Route::get('admin/transferencia/show/{id}', ['as' => 'admin.transfers.show', 'uses' => 'Admin\TransfersController@show']);
    Route::get('admin/transferencia/create', ['as' => 'admin.transfers.create', 'uses' => 'Admin\TransfersController@create']);
    Route::post('admin/transferencia/store', ['as' => 'admin.transfers.store', 'uses' => 'Admin\TransfersController@store']);
    Route::get('admin/transferencia/edit/{id}', ['as' => 'admin.transfers.edit', 'uses' => 'Admin\TransfersController@edit']);
    Route::put('admin/transferencia/update/{id}', ['as' => 'admin.transfers.update', 'uses' => 'Admin\TransfersController@update']);
    Route::get('admin/transferencia/delete/{id}', ['as' => 'admin.transfers.delete', 'uses' => 'Admin\TransfersController@destroy']);
    /* end news */
    /* rota de partners */
    Route::get('admin/parceiro/index', ['as' => 'admin.partners.index', 'uses' => 'Admin\PartnerController@create']);
    Route::get('admin/parceiro/show/{id}', ['as' => 'admin.partners.show', 'uses' => 'Admin\PartnerController@show']);
    Route::get('admin/parceiro/create', ['as' => 'admin.partners.create', 'uses' => 'Admin\PartnerController@create']);
    Route::post('admin/parceiro/store', ['as' => 'admin.partners.store', 'uses' => 'Admin\PartnerController@store']);
    Route::get('admin/parceiro/edit/{id}', ['as' => 'admin.partners.edit', 'uses' => 'Admin\PartnerController@edit']);
    Route::put('admin/parceiro/update/{id}', ['as' => 'admin.partners.update', 'uses' => 'Admin\PartnerController@update']);
    Route::get('admin/parceiro/delete/{id}', ['as' => 'admin.partners.delete', 'uses' => 'Admin\PartnerController@destroy']);
    /* end news */
    /* rota de  estudante-transferido */
    Route::get('admin/estudante-transferido/index', ['as' => 'admin.student_transfers.index', 'uses' => 'Admin\StudentTransferController@index']);
    Route::get('admin/estudante-transferido/show/{id}', ['as' => 'admin.student_transfers.show', 'uses' => 'Admin\StudentTransferController@show']);
    Route::get('admin/estudante-transferido/create', ['as' => 'admin.student_transfers.create', 'uses' => 'Admin\StudentTransferController@create']);
    Route::post('admin/estudante-transferido/store', ['as' => 'admin.student_transfers.store', 'uses' => 'Admin\StudentTransferController@store']);
    Route::get('admin/estudante-transferido/edit/{id}', ['as' => 'admin.student_transfers.edit', 'uses' => 'Admin\StudentTransferController@edit']);
    Route::put('admin/estudante-transferido/update/{id}', ['as' => 'admin.student_transfers.update', 'uses' => 'Admin\StudentTransferController@update']);
    Route::get('admin/estudante-transferido/delete/{id}', ['as' => 'admin.student_transfers.delete', 'uses' => 'Admin\StudentTransferController@destroy']);
    Route::post('admin/estudante-transferido/search', ['as' => 'admin.student_transfers_seach', 'uses' => 'Admin\StudentTransferController@student_transfers_seach']);
    Route::get('admin/estudante-transferido/seachResult/{startYear}', ['as' => 'admin.student_transfers.seachResult', 'uses' => 'Admin\StudentTransferController@seachResult']);
    Route::get('admin/estudante-transferido/recibo', ['as' => 'admin.student_transfers.report', 'uses' => 'Admin\StudentTransferController@print']);
    Route::get('admin/estudante-transferido/estudantes/{id}', ['as' => 'admin.student_transfers.student', 'uses' => 'Admin\StudentTransferController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/estudante-transferido/recibo/', ['as' => 'admin.student_transfers.print', 'uses' => 'Admin\StudentTransferController@sendStartYear']);
    Route::get('admin/estudante-transferido/recibo/{startYear}', ['as' => 'admin.student_transfers.report', 'uses' => 'Admin\StudentTransferController@print']);
    /**end print */

    /* rota de  donativo-anual */
    Route::get('admin/donativo-anual/index', ['as' => 'admin.appetizer_academic_years.index', 'uses' => 'Admin\AppetizerAcademicYearController@index']);
    Route::get('admin/donativo-anual/show/{id}', ['as' => 'admin.appetizer_academic_years.show', 'uses' => 'Admin\AppetizerAcademicYearController@show']);
    Route::get('admin/donativo-anual/create', ['as' => 'admin.appetizer_academic_years.create', 'uses' => 'Admin\AppetizerAcademicYearController@create']);
    Route::post('admin/donativo-anual/store', ['as' => 'admin.appetizer_academic_years.store', 'uses' => 'Admin\AppetizerAcademicYearController@store']);
    Route::get('admin/donativo-anual/edit/{id}', ['as' => 'admin.appetizer_academic_years.edit', 'uses' => 'Admin\AppetizerAcademicYearController@edit']);
    Route::put('admin/donativo-anual/update/{id}', ['as' => 'admin.appetizer_academic_years.update', 'uses' => 'Admin\AppetizerAcademicYearController@update']);
    Route::get('admin/donativo-anual/delete/{id}', ['as' => 'admin.appetizer_academic_years.delete', 'uses' => 'Admin\AppetizerAcademicYearController@destroy']);
    Route::post('admin/donativo-anual/search', ['as' => 'admin.appetizer_academic_years_seach', 'uses' => 'Admin\AppetizerAcademicYearController@appetizer_academic_years_seach']);
    Route::get('admin/donativo-anual/seachResult/{startYear}', ['as' => 'admin.appetizer_academic_years.seachResult', 'uses' => 'Admin\AppetizerAcademicYearController@seachResult']);
    Route::get('admin/donativo-anual/recibo', ['as' => 'admin.appetizer_academic_years.report', 'uses' => 'Admin\AppetizerAcademicYearController@print']);
    Route::get('admin/donativo-anual/estudantes/{id}', ['as' => 'admin.appetizer_academic_years.student', 'uses' => 'Admin\AppetizerAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/donativo-anual/recibo/', ['as' => 'admin.appetizer_academic_years.print', 'uses' => 'Admin\AppetizerAcademicYearController@sendStartYear']);
    Route::get('admin/donativo-anual/recibo/{startYear}', ['as' => 'admin.appetizer_academic_years.report', 'uses' => 'Admin\AppetizerAcademicYearController@print']);
    /**end print */
    /* rota de  estudante-transferido */
    Route::get('admin/estudante-pagamento/index', ['as' => 'admin.payment_academic_years.index', 'uses' => 'Admin\PaymentAcademicYearController@index']);
    Route::get('admin/estudante-pagamento/show/{id}', ['as' => 'admin.payment_academic_years.show', 'uses' => 'Admin\PaymentAcademicYearController@show']);
    Route::get('admin/estudante-pagamento/create', ['as' => 'admin.payment_academic_years.create', 'uses' => 'Admin\PaymentAcademicYearController@create']);
    Route::post('admin/estudante-pagamento/store', ['as' => 'admin.payment_academic_years.store', 'uses' => 'Admin\PaymentAcademicYearController@store']);
    Route::get('admin/estudante-pagamento/edit/{id}', ['as' => 'admin.payment_academic_years.edit', 'uses' => 'Admin\PaymentAcademicYearController@edit']);
    Route::put('admin/estudante-pagamento/update/{id}', ['as' => 'admin.payment_academic_years.update', 'uses' => 'Admin\PaymentAcademicYearController@update']);
    Route::get('admin/estudante-pagamento/delete/{id}', ['as' => 'admin.payment_academic_years.delete', 'uses' => 'Admin\PaymentAcademicYearController@destroy']);
    Route::post('admin/estudante-pagamento/search', ['as' => 'admin.payment_academic_years_seach', 'uses' => 'Admin\PaymentAcademicYearController@payment_academic_years_seach']);
    Route::get('admin/estudante-pagamento/seachResult/{startYear}', ['as' => 'admin.payment_academic_years.seachResult', 'uses' => 'Admin\PaymentAcademicYearController@seachResult']);
    Route::get('admin/estudante-pagamento/recibo', ['as' => 'admin.payment_academic_years.report', 'uses' => 'Admin\PaymentAcademicYearController@print']);
    Route::get('admin/estudante-pagamento/estudantes/{id}', ['as' => 'admin.payment_academic_years.student', 'uses' => 'Admin\PaymentAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/estudante-pagamento/recibo/', ['as' => 'admin.payment_academic_years.print', 'uses' => 'Admin\PaymentAcademicYearController@sendStartYear']);
    Route::get('admin/estudante-pagamento/recibo/{startYear}', ['as' => 'admin.payment_academic_years.report', 'uses' => 'Admin\PaymentAcademicYearController@print']);
    /**end print */
    /* end  ano-academico-professor */

    /**typePagament  */
    Route::get('admin/tipo-pagamento/index', ['as' => 'admin.type_payments.index', 'uses' => 'Admin\TypePaymentController@index']);
    Route::get('admin/tipo-pagamento/show/{id}', ['as' => 'admin.type_payments.show', 'uses' => 'Admin\TypePaymentController@show']);
    Route::get('admin/tipo-pagamento/create', ['as' => 'admin.type_payments.create', 'uses' => 'Admin\TypePaymentController@create']);
    Route::post('admin/tipo-pagamento/store', ['as' => 'admin.type_payments.store', 'uses' => 'Admin\TypePaymentController@store']);
    Route::get('admin/tipo-pagamento/edit/{id}', ['as' => 'admin.type_payments.edit', 'uses' => 'Admin\TypePaymentController@edit']);
    Route::put('admin/tipo-pagamento/update/{id}', ['as' => 'admin.type_payments.update', 'uses' => 'Admin\TypePaymentController@update']);
    Route::post('admin/tipo-pagamento/delete', ['as' => 'admin.type_payments.delete', 'uses' => 'Admin\TypePaymentController@destroy']);
    /** end  typePagament*/
    /* rota de nivel-academico  */
    Route::get('admin/nivel-academico/index', ['as' => 'admin.academicLivel.index', 'uses' => 'Admin\AcademicLivelController@index']);
    Route::get('admin/nivel-academico/show/{id}', ['as' => 'admin.academicLivel.show', 'uses' => 'Admin\AcademicLivelController@show']);

    Route::get('admin/nivel-academico/create', ['as' => 'admin.academicLivel.create', 'uses' => 'Admin\AcademicLivelController@create']);
    Route::post('admin/nivel-academico/store', ['as' => 'admin.academicLivel.store', 'uses' => 'Admin\AcademicLivelController@store']);
    Route::get('admin/nivel-academico/edit/{id}', ['as' => 'admin.academicLivel.edit', 'uses' => 'Admin\AcademicLivelController@edit']);
    Route::put('admin/nivel-academico/update/{id}', ['as' => 'admin.academicLivel.update', 'uses' => 'Admin\AcademicLivelController@update']);
    Route::get('admin/nivel-academico/delete/{id}', ['as' => 'admin.academicLivel.delete', 'uses' => 'Admin\AcademicLivelController@destroy']);
    /* end news */

    /* rota de municipio  */
    Route::get('admin/municipio/index', ['as' => 'admin.municipe.index', 'uses' => 'Admin\MunicipeController@index']);
    Route::get('admin/municipio/show/{id}', ['as' => 'admin.municipe.show', 'uses' => 'Admin\MunicipeController@show']);

    Route::get('admin/municipio/create', ['as' => 'admin.municipe.create', 'uses' => 'Admin\MunicipeController@create']);
    Route::post('admin/municipio/store', ['as' => 'admin.municipe.store', 'uses' => 'Admin\MunicipeController@store']);
    Route::get('admin/municipio/edit/{id}', ['as' => 'admin.municipe.edit', 'uses' => 'Admin\MunicipeController@edit']);
    Route::put('admin/municipio/update/{id}', ['as' => 'admin.municipe.update', 'uses' => 'Admin\MunicipeController@update']);
    Route::get('admin/municipio/delete/{id}', ['as' => 'admin.municipe.delete', 'uses' => 'Admin\MunicipeController@destroy']);
    /* end municipio */

    /**departamento  */
    Route::get('admin/departamnento/index', ['as' => 'admin.departments.index', 'uses' => 'Admin\DepartamentController@index']);
    Route::get('admin/departamnento/show/{id}', ['as' => 'admin.departments.show', 'uses' => 'Admin\DepartamentController@show']);
    Route::get('admin/departamnento/create', ['as' => 'admin.departments.create', 'uses' => 'Admin\DepartamentController@create']);
    Route::post('admin/departamnento/store', ['as' => 'admin.departments.store', 'uses' => 'Admin\DepartamentController@store']);
    Route::get('admin/departamnento/edit/{id}', ['as' => 'admin.departments.edit', 'uses' => 'Admin\DepartamentController@edit']);
    Route::put('admin/departamnento/update/{id}', ['as' => 'admin.departments.update', 'uses' => 'Admin\DepartamentController@update']);
    Route::post('admin/departamnento/delete', ['as' => 'admin.departments.delete', 'uses' => 'Admin\DepartamentController@destroy']);
    Route::get('admin/departamnento/search/{id}', ['as' => 'admin.search', 'uses' => 'Admin\DepartamentController@search']);
    /** end  departamento*/
    /**departamento  */
    Route::get('admin/reitor/index', ['as' => 'admin.rectors.index', 'uses' => 'Admin\RectorController@index']);
    Route::get('admin/reitor/show/{id}', ['as' => 'admin.rectors.show', 'uses' => 'Admin\RectorController@show']);
    Route::get('admin/reitor/create', ['as' => 'admin.rectors.create', 'uses' => 'Admin\RectorController@create']);
    Route::post('admin/reitor/store', ['as' => 'admin.rectors.store', 'uses' => 'Admin\RectorController@store']);
    Route::get('admin/reitor/edit/{id}', ['as' => 'admin.rectors.edit', 'uses' => 'Admin\RectorController@edit']);
    Route::put('admin/reitor/update/{id}', ['as' => 'admin.rectors.update', 'uses' => 'Admin\RectorController@update']);
    Route::post('admin/reitor/delete', ['as' => 'admin.rectors.delete', 'uses' => 'Admin\RectorController@destroy']);
    /** end  departamento*/
    /* rota de  professor */
    Route::get('admin/professor/index', ['as' => 'admin.teachers.index', 'uses' => 'Admin\TeacherController@index']);
    Route::get('admin/professor/show/{id}', ['as' => 'admin.teachers.show', 'uses' => 'Admin\TeacherController@show']);
    Route::get('admin/professor/create', ['as' => 'admin.teachers.create', 'uses' => 'Admin\TeacherController@create']);
    Route::post('admin/professor/store', ['as' => 'admin.teachers.store', 'uses' => 'Admin\TeacherController@store']);
    Route::get('admin/professor/edit/{id}', ['as' => 'admin.teachers.edit', 'uses' => 'Admin\TeacherController@edit']);
    Route::put('admin/professor/update/{id}', ['as' => 'admin.teachers.update', 'uses' => 'Admin\TeacherController@update']);
    Route::get('admin/professor/delete/{id}', ['as' => 'admin.teachers.delete', 'uses' => 'Admin\TeacherController@destroy']);
    Route::post('admin/professor/search', ['as' => 'admin.teachers_seach', 'uses' => 'Admin\TeacherController@teachers_seach']);
    Route::get('admin/professor/seachResult/{startYear}', ['as' => 'admin.teachers.seachResult', 'uses' => 'Admin\TeacherController@seachResult']);
    Route::get('admin/professor/recibo', ['as' => 'admin.teachers.report.print', 'uses' => 'Admin\TeacherController@print']);
    Route::get('admin/professor/estudantes/{id}', ['as' => 'admin.teachers.student', 'uses' => 'Admin\TeacherController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/professor/recibo/', ['as' => 'admin.teachers.print', 'uses' => 'Admin\TeacherController@sendStartYear']);
    Route::get('admin/professor/recibo/{startYear}', ['as' => 'admin.teachers.report', 'uses' => 'Admin\TeacherController@print']);
    /**end print */

    /* rota de professor  */
    Route::get('admin/donativo/index', ['as' => 'admin.donations.index', 'uses' => 'Admin\donationController@index']);
    Route::get('admin/donativo/show/{id}', ['as' => 'admin.donations.show', 'uses' => 'Admin\donationController@show']);
    Route::get('admin/donativo/create', ['as' => 'admin.donations.create', 'uses' => 'Admin\donationController@create']);
    Route::post('admin/donativo/store', ['as' => 'admin.donations.store', 'uses' => 'Admin\donationController@store']);
    Route::get('admin/donativo/edit/{id}', ['as' => 'admin.donations.edit', 'uses' => 'Admin\donationController@edit']);
    Route::put('admin/donativo/update/{id}', ['as' => 'admin.donations.update', 'uses' => 'Admin\donationController@update']);
    Route::get('admin/donativo/delete/{id}', ['as' => 'admin.donations.delete', 'uses' => 'Admin\donationController@destroy']);
    Route::get('admin/donativo/delete/{id}', ['as' => 'admin.donations.delete', 'uses' => 'Admin\donationController@destroy']);
    /* end news */

    /* rota de seminario  */
    Route::get('admin/seminario/index', ['as' => 'admin.seminars.index', 'uses' => 'Admin\SeminarController@index']);
    Route::get('admin/seminario/show/{id}', ['as' => 'admin.seminars.show', 'uses' => 'Admin\SeminarController@show']);
    Route::get('admin/seminario/create', ['as' => 'admin.seminars.create', 'uses' => 'Admin\SeminarController@create']);
    Route::post('admin/seminario/store', ['as' => 'admin.seminars.store', 'uses' => 'Admin\SeminarController@store']);
    Route::get('admin/seminario/edit/{id}', ['as' => 'admin.seminars.edit', 'uses' => 'Admin\SeminarController@edit']);
    Route::put('admin/seminario/update/{id}', ['as' => 'admin.seminars.update', 'uses' => 'Admin\SeminarController@update']);
    Route::get('admin/seminario/delete/{id}', ['as' => 'admin.seminars.delete', 'uses' => 'Admin\SeminarController@destroy']);
    Route::get('admin/seminario/delete/{id}', ['as' => 'admin.seminars.delete', 'uses' => 'Admin\SeminarController@destroy']);
    Route::get('admin/seminario/sala-aula/{id}', ['as' => 'admin.seminars', 'uses' => 'Admin\SeminarController@GetSubCatAgainstMain']);
    /* end news */

    /* rota de  ResquestAcademicYear */
    Route::get('admin/pedido-documento/index', ['as' => 'admin.resquest_academic_years.index', 'uses' => 'Admin\ResquestAcademicYearController@index']);
    Route::get('admin/pedido-documento/show/{id}', ['as' => 'admin.resquest_academic_years.show', 'uses' => 'Admin\ResquestAcademicYearController@show']);
    Route::get('admin/pedido-documento/create', ['as' => 'admin.resquest_academic_years.create', 'uses' => 'Admin\ResquestAcademicYearController@create']);
    Route::post('admin/pedido-documento/store', ['as' => 'admin.resquest_academic_years.store', 'uses' => 'Admin\ResquestAcademicYearController@store']);
    Route::get('admin/pedido-documento/edit/{id}', ['as' => 'admin.resquest_academic_years.edit', 'uses' => 'Admin\ResquestAcademicYearController@edit']);
    Route::put('admin/pedido-documento/update/{id}', ['as' => 'admin.resquest_academic_years.update', 'uses' => 'Admin\ResquestAcademicYearController@update']);
    Route::get('admin/pedido-documento/delete/{id}', ['as' => 'admin.resquest_academic_years.delete', 'uses' => 'Admin\ResquestAcademicYearController@destroy']);
    Route::post('admin/pedido-documento/search', ['as' => 'admin.resquest_academic_years_seach', 'uses' => 'Admin\ResquestAcademicYearController@resquest_academic_years_seach']);
    Route::get('admin/pedido-documento/seachResult/{startYear}', ['as' => 'admin.resquest_academic_years.seachResult', 'uses' => 'Admin\ResquestAcademicYearController@seachResult']);
    Route::get('admin/pedido-documento/recibo', ['as' => 'admin.resquest_academic_years.report.show', 'uses' => 'Admin\ResquestAcademicYearController@print']);
    Route::get('admin/pedido-documento/estudantes/{id}', ['as' => 'admin.resquest_academic_years.student.list', 'uses' => 'Admin\ResquestAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/pedido-documento/recibo/', ['as' => 'admin.resquest_academic_years.print.show', 'uses' => 'Admin\ResquestAcademicYearController@sendStartYear']);
    Route::get('admin/pedido-documento/recibo/{startYear}', ['as' => 'admin.resquest_academic_years.report.list', 'uses' => 'Admin\ResquestAcademicYearController@print']);
    /**end print */

  /* rota de  cartão de estudante */
  Route::get('admin/cartao-estudantes/index', ['as' => 'admin.student_cards.index', 'uses' => 'Admin\StudentCardController@index']);
  Route::get('admin/cartao-estudantes/show/{id}', ['as' => 'admin.student_cards.show', 'uses' => 'Admin\StudentCardController@show']);
  Route::get('admin/cartao-estudantess/create', ['as' => 'admin.student_cards.create', 'uses' => 'Admin\StudentCardController@create']);
  Route::post('admin/cartao-estudantes/store', ['as' => 'admin.student_cards.store', 'uses' => 'Admin\StudentCardController@store']);
  Route::get('admin/cartao-estudantes/edit/{id}', ['as' => 'admin.student_cards.edit', 'uses' => 'Admin\StudentCardController@edit']);
  Route::put('admin/cartao-estudantes/update/{id}', ['as' => 'admin.student_cards.update', 'uses' => 'Admin\StudentCardController@update']);
  Route::get('admin/cartao-estudantes/delete/{id}', ['as' => 'admin.student_cards.delete', 'uses' => 'Admin\StudentCardController@destroy']);
  Route::post('admin/cartao-estudantes/search', ['as' => 'admin.student_cards_seach', 'uses' => 'Admin\StudentCardController@student_academic_years_seach']);
  Route::get('admin/cartao-estudantes/seachResult/{startYear}', ['as' => 'admin.student_cards.seachResult', 'uses' => 'Admin\StudentCardController@seachResult']);
  Route::get('admin/cartao-estudantes/recibo', ['as' => 'admin.student_cards.report', 'uses' => 'Admin\StudentCardController@print']);
  Route::get('admin/cartao-estudantes/estudantes/{id}', ['as' => 'admin.student_cards.student', 'uses' => 'Admin\StudentCardController@GetSubCatAgainstMain']);

  /**Print  */

  Route::post('admin/cartao-estudantes/recibo/', ['as' => 'admin.student_cards.print', 'uses' => 'Admin\StudentAcademicYearController@sendStartYear']);

  Route::get('admin/cartao-estudantes/recibo/{startYear}', ['as' => 'admin.student_cards.report.list', 'uses' => 'Admin\StudentAcademicYearController@print']);

  /**end print */

    /* rota de dormitório  */
    Route::get('admin/rooms/index', ['as' => 'admin.rooms.index', 'uses' => 'Admin\RoomController@index']);
    Route::get('admin/rooms/show/{id}', ['as' => 'admin.rooms.show', 'uses' => 'Admin\RoomController@show']);
    Route::get('admin/rooms/create', ['as' => 'admin.rooms.create', 'uses' => 'Admin\RoomController@create']);
    Route::post('admin/rooms/store', ['as' => 'admin.rooms.store', 'uses' => 'Admin\RoomController@store']);
    Route::get('admin/rooms/edit/{id}', ['as' => 'admin.rooms.edit', 'uses' => 'Admin\RoomController@edit']);
    Route::put('admin/rooms/update/{id}', ['as' => 'admin.rooms.update', 'uses' => 'Admin\RoomController@update']);
    Route::get('admin/rooms/delete/{id}', ['as' => 'admin.rooms.delete', 'uses' => 'Admin\RoomController@destroy']);
    /* rota de dormitório  */
    Route::get('admin/request_documents/index', ['as' => 'admin.request_documents.index', 'uses' => 'Admin\RequestDocumentController@index']);
    Route::get('admin/request_documents/show/{id}', ['as' => 'admin.request_documents.show', 'uses' => 'Admin\RequestDocumentController@show']);
    Route::get('admin/request_documents/create', ['as' => 'admin.request_documents.create', 'uses' => 'Admin\RequestDocumentController@create']);
    Route::post('admin/request_documents/store', ['as' => 'admin.request_documents.store', 'uses' => 'Admin\RequestDocumentController@store']);
    Route::get('admin/request_documents/edit/{id}', ['as' => 'admin.request_documents.edit', 'uses' => 'Admin\RequestDocumentController@edit']);
    Route::put('admin/request_documents/update/{id}', ['as' => 'admin.request_documents.update', 'uses' => 'Admin\RequestDocumentController@update']);
    Route::get('admin/request_documents/delete/{id}', ['as' => 'admin.request_documents.delete', 'uses' => 'Admin\RequestDocumentController@destroy']);
    /* end exame */
    /* rota de actividades  */
    Route::get('admin/actividades/index', ['as' => 'admin.activities.index', 'uses' => 'Admin\ActivitiesController@index']);
    Route::get('admin/actividades/show/{id}', ['as' => 'admin.activities.show', 'uses' => 'Admin\ActivitiesController@show']);
    Route::get('admin/actividades/create', ['as' => 'admin.activities.create', 'uses' => 'Admin\ActivitiesController@create']);
    Route::post('admin/actividades/store', ['as' => 'admin.activities.store', 'uses' => 'Admin\ActivitiesController@store']);
    Route::get('admin/actividades/edit/{id}', ['as' => 'admin.activities.edit', 'uses' => 'Admin\ActivitiesController@edit']);
    Route::put('admin/actividades/update/{id}', ['as' => 'admin.activities.update', 'uses' => 'Admin\ActivitiesController@update']);
    Route::get('admin/actividades/delete/{id}', ['as' => 'admin.activities.delete', 'uses' => 'Admin\ActivitiesController@destroy']);
    /* end actividades */
    /* rota de  donativo-anual */
    Route::get('admin/salario-anual/index', ['as' => 'admin.salary_academic_years.index', 'uses' => 'Admin\SalaryAcademicYearController@index']);
    Route::get('admin/salario-anual/show/{id}', ['as' => 'admin.salary_academic_years.show', 'uses' => 'Admin\SalaryAcademicYearController@show']);
    Route::get('admin/salario-anual/create', ['as' => 'admin.salary_academic_years.create', 'uses' => 'Admin\SalaryAcademicYearController@create']);
    Route::post('admin/salario-anual/store', ['as' => 'admin.salary_academic_years.store', 'uses' => 'Admin\SalaryAcademicYearController@store']);
    Route::get('admin/salario-anual/edit/{id}', ['as' => 'admin.salary_academic_years.edit', 'uses' => 'Admin\SalaryAcademicYearController@edit']);
    Route::put('admin/salario-anual/update/{id}', ['as' => 'admin.salary_academic_years.update', 'uses' => 'Admin\SalaryAcademicYearController@update']);
    Route::get('admin/salario-anual/delete/{id}', ['as' => 'admin.salary_academic_years.delete', 'uses' => 'Admin\SalaryAcademicYearController@destroy']);
    Route::post('admin/salario-anual/search', ['as' => 'admin.salary_academic_years_seach', 'uses' => 'Admin\SalaryAcademicYearController@salary_academic_years_seach']);
    Route::get('admin/salario-anual/seachResult/{startYear}', ['as' => 'admin.salary_academic_years.seachResult', 'uses' => 'Admin\SalaryAcademicYearController@seachResult']);
    Route::get('admin/salario-anual/recibo', ['as' => 'admin.salary_academic_years.report', 'uses' => 'Admin\SalaryAcademicYearController@print']);
    Route::get('admin/salario-anual/estudantes/{id}', ['as' => 'admin.salary_academic_years.student', 'uses' => 'Admin\SalaryAcademicYearController@GetSubCatAgainstMain']);
    /**Print  */
    Route::post('admin/salario-anual/recibo/', ['as' => 'admin.salary_academic_years.print', 'uses' => 'Admin\SalaryAcademicYearController@sendStartYear']);
    Route::get('admin/salario-anual/recibo/{startYear}', ['as' => 'admin.salary_academic_years.report', 'uses' => 'Admin\SalaryAcademicYearController@print']);
    /**end print */
});





require __DIR__ . '/auth.php';
