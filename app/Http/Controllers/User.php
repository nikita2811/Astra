<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

class User extends Controller
{
    public function file_exist(){



   // public function exists_v1(){
     $v1_files = Storage::disk('public')->allFiles('v1');
     $v2_files = Storage::disk('public')->allFiles('v2');

     for ($i=0; $i < count($v1_files); $i++) { 
        
        $v1_filename =explode('/',$v1_files[$i]);
        $file1 =public_path($v1_files[$i]);
         $file_r1  = str_replace("v1","v2",$file1);
         $present2 = 0;
         $present1  = 0;
          $comman =[];
     
      
       
        for ($j=0; $j <count($v2_files) ; $j++) { 
            $v2_filename =explode('/',$v2_files[$j]);
              $file2 =public_path($v2_files[$i]);
             $file_r2  =str_replace("v2","v1",$file2);
            if($file1 ==$file_r2 ){
                $present1 = 1;
                
            }
            if ($file2 ==$file_r1) {
                 $present2 = 1;
               
            }
              if($v1_filename[1] ==$v2_filename[1]){
             array_push($comman,$file1);
            }


           }//for j

           if($present1 == 0 ){
        
       $v2=explode(' ',$file1);
      print_r($file1);
        //print($file1.' exists in v2');

        

    }//ifpresent1
      if($present2 == 0 ){
       
        $v1=explode(' ',$file2);
       print_r($file2);
       
        //print($file2.'exists in v1');
        

       
    } //if present2

           
        }//for i
        print_r($comman);
         
   // return view('dashboard',['v1'=>$v1,'v2'=>$v2,'comman'=>$comman]);

       }
          

      //}
   
   //public function exists_v2(){
    

        
     
     
       
        
            
         
   

  
    
}
