<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Departament;
use App\Models\Doctor;
use App\Models\Finalist;
use App\Models\FinalistAcademicYear;
use App\Models\Log;
use App\Models\News;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\StarStudent;
use App\Models\Student;
use App\Models\StudentAcademicYea;
use App\Models\StudentAcademicYear;
use App\Models\StudentPerfect;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\Feature\RegistrationTest;

class DashboardController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }


    public function index()

    {
        /* Counts */
        $response['star_students'] = StarStudent::count();
        $response['student_perfects'] = StudentPerfect::count();
        $response['students'] =  Student::count();
        $response['teachers'] = Teacher::count();
        $response['departaments'] = Departament::count();
        $response['student_academic_years'] = StudentAcademicYea::count();
        $response['student_perfects'] = StudentPerfect::count();
        $response['courses'] = Course::count();
        $response['student'] =  Student::count();
        $response['teachers'] = Teacher::count();
        $response['users'] = User::count();
        $response['classerooms'] = Classroom::count();
        $response['finalist_academic_years'] = FinalistAcademicYear::count();


        
        /**graficos de estudantes */
        $jan = StudentAcademicYear::whereMonth('created_at', '=', 01)->count();
        $response['jan'] = json_encode($jan);
        $fev = StudentAcademicYear::whereMonth('created_at', '=', 02)->count();
        $response['fev'] = json_encode($fev);
        $mar = StudentAcademicYear::whereMonth('created_at', '=', 03)->count();
        $response['mar'] = json_encode($mar);
        $abr = StudentAcademicYear::whereMonth('created_at', '=', 04)->count();
        $response['abr'] = json_encode($abr);
        $maio = StudentAcademicYear::whereMonth('created_at', '=', 05)->count();
        $response['maio'] = json_encode($maio);
        $jun = StudentAcademicYear::whereMonth('created_at', '=', 06)->count();
        $response['jun'] = json_encode($jun);
        $jul = StudentAcademicYear::whereMonth('created_at', '=', 07)->count();
        $response['jul'] = json_encode($jul);
        $ago = StudentAcademicYear::whereMonth('created_at', '=', '08')->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = StudentAcademicYear::whereMonth('created_at', '=', '09')->count();
        $response['set'] = json_encode($set);
        $out = StudentAcademicYear::whereMonth('created_at', '=', '10')->count();
        $response['out'] = json_encode($out);
        $nov = StudentAcademicYear::whereMonth('created_at', '=', 11)->count();
        $response['nov'] = json_encode($nov);
        $dez = StudentAcademicYear::whereMonth('created_at', '=', 12)->count();
        $response['dez'] = json_encode($dez);

        //Logger
        $this->Logger->log('info', 'Entrou no Painel Administrativo');

        return view('admin.home.index', $response);
    }
}
