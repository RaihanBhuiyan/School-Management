<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general_settings_model extends Model
{
   protected $table='general_settings';
   protected $primaryKey='general_settings_id';
  
   protected $fillable=['system_name','system_title','Phone','address','country','postal_code','school_eiin','general_settings_id','default_session','default_batch','admission_exam_venue','admission_exam_time','admission_exam_end_time'];
         public  function roles_rule(){
     		return [
   	    'system_name' => 'required',
   	    'system_title' => 'required',
   	    'Phone' => 'required',
   	    'address' => 'required',
   	    'country' => 'required',
   		  'postal_code' => 'required',
   	    'school_eiin' => 'required',
   	    'school_logo' => 'image|mimes:png'
   	    ];
   	}
}
