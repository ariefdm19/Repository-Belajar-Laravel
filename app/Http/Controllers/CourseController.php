<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses= Course ::all();

    
        foreach ($courses as $course )
        echo $course ->course_name ."</br>";
}}