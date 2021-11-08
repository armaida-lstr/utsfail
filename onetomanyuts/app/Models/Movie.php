<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;
    protected $fillable =['id_movie', 'nama_movie', 'tahun_movie','description', 'sutradara_name'];

    // public function sutradara(){
    //     return $this->belongsTo(Sutradara::class, 'id_sutradara');
    // }
   
//     private static $movies = [
        
//     [
//      'id_movie' => 'IMT01', 
//     'nama_movie' => 'senjaku', 
//     'tahun_movie' => '2002',
//     'description' => 'my world', 
//     'sutradara_name' => 'Jeno Lee',
    
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
//     return collect(self::$movies);
// } 
// public static function dataWithCode($id_movie){
//     $allmovies = static::allData();
//     return $allmovies->firstWhere('id_movie',$id_movie);
// }
}
