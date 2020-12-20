<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{

    public function index(){
        //untuk menampilkan semua data
        // $students = Student::all(); 

        //untuk menampilkan berdasarkan jenis kelamin
        // $students = Student::where('gender', 'P')->get();

        // Untuk Menampilkan Berdasarkan Jenis Kelamin P dan Tempat Lahir Bandung
        // $students = Student::where('gender', 'P')->Where('birth_place', 'Bandung')->get();

        // untuk menampilkan data berdasarkan descending
        $students = Student::orderBy('name','desc')->get();

        return view('student.index', compact('students'));

  }
  // Tugas Satu
  public function TugasSatu(){
    $students = Student::where('code', 'like', '%' . 7 . '%')->get();

    return view('student.index', compact('students'));
  }

    // Tugas 2
    public function TugasDua(){
      $students = Student::where('birth_place', 'Jakarta')->where('gender','W')->get();

      return view('student.index', compact('students'));
    }

    // Tugas 3
    public function TugasTiga(){
      $students = Student::where('code', 'like', '%' . 2 . '%')->where('birth_place','Jakarta')
            ->orWhere('birth_place', 'like', '%U%')->where('gender', 'W')->get();
  
      return view('student.index', compact('students'));
  
      }

      // Tugas 4
      public function TugasEmpat(){
        $students = Student::Where('birth_date', 'like', '%03%')->get();
    
        return view('student.index', compact('students'));
    
        }

        // Tugas 5
        public function TugasLima(){
          $students = Student::limit(5)->get();
      
          return view('student.index', compact('students'));
      
        }

//     private $code = "180914057";
//     private $name = "Arief Dwi Muhidin";
//     private $course;
//     private $task;
//     private $quiz;
//     private $mid_term;
//     private $final;

//     public function MyCourse($course,$task,$quiz,$mid_term,$final){
//         $code = $this->code;
//         $name = $this->name;
//         $this->course = $course;
//         $this->task = $task;
//         $this->quiz = $quiz;
//         $this->mid_term = $mid_term;
//         $this->final = $final;


//         $this->calculateGrade();
        

//         return view('student.my_view', [
//             'code' => $code,
//             'name' => $name,
//             'course' => $course,
//             'task' => $task,
//             'quiz' => $quiz,
//             'mid_term' => $mid_term,
//             'final' => $final,
//             'grade' => $this->calculateGrade()
//         ]
//         );
//     }


//     public function calculateGrade()
//     {
//         $task = $this->task * 0.10;
//         $quiz = $this->quiz * 0.10;
//         $mid_term = $this->mid_term * 0.30;
//         $final = $this->final * 0.50;

//         $grade = $task + $quiz + $mid_term + $final;

//         return $grade;
//     }
}
