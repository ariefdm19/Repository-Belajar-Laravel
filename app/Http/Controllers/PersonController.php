<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //

    public function add(){
        return view ('person.add');
    }

    public function addProcess(){
        $this->validate($request,[
            'person_name' => 'required|max:30',
            'person_email' => 'required|email',
            ]);
            return view('person.show' ,['data' =>$request]);
            }
            
    
    

    private $name = "Arief Dwi Muhidin";
    private $code ="180914057";

    public function index(){
        return view ("person.index");
    }
    


    public function show($param){
        $this->name =$param;
        return $this->name;
    }

    public function sendData(){
        $code =$this->code;
        $name =$this->name;

        return view("person.sendData", compact('code','name'));
    }

    public function data(){
        $names =["Arief Dwi Muhidin","M Arief Jayana","Rapiudin Saputra","Imam Firmansyah","Fajar Laksono"];

        return view ("person.data",['names'=> $names]);
    }

    public function cetak(){
        $nilai_awal =$this->nilai_awal;
        $nilai_akhir=$this->nilai_akhir;

        for($i=$nilai_awal;$i<=$nilai_akhir;$i++){
            if($nilai_awal%2==0){
                echo"genap";

            }else{
                echo"ganjil";

            }
        }

    }





































































































































































































































































}
