<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sutradara extends Model
{
    use HasFactory;
    protected $fillable =['id_sutradara', 'nama_sutradara', 'alamat_sutradara','no_telp'];
   
    // public function movie(){
    //     return $this->hasMany(Movie::class);
    // }
    // private static $sutradaras = [
        
    //     [
    //      'id_sutradara' => 'IMT001', 
    //     'nama_sutradara' => 'dearN', 
    //     'alamat_sutradara' => 'busan',
    //     'no_telp' => '000', 
       
        
    //     ],
    // //     [
    // //          'course_code' => '456', 
    // //         'course_name' => 'OPERATING SYSTEM', 
    // //         'lecturer' => 'B',
    // //         'number_of_sks' => '4', 
    // //         'description' => 'Mata Kuliah semester 1 Informatika',
         
    // //     ],
    // //     [
    // //          'course_code' => '789', 
    // //         'course_name' => 'ENTERPRENEUR', 
    // //         'lecturer' => 'C',
    // //         'number_of_sks' => '3', 
    // //         'description' => 'Mata Kuliah semester 1 universitas ciputra',
          
    // //     ],
        
    
    //  ];
      
    // public static function allData(){
    //     return collect(self::$sutradaras);
    // } 
    // public static function dataWithCode($id_sutradara){
    //     $allsutradaras = static::allData();
    //     return $allsutradara->firstWhere('id_sutradara',$id_sutradara);
    // }
    
}
