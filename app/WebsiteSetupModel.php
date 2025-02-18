<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetupModel extends Model
{
    protected $table='website_setup';
    protected $primaryKey='website_setup_id';
    protected $fillable=['about_us','history','mission_vision','principle_message','providan_link','academic_calender_link'];

    public  function validation(){
	  	return [
		    'about_us' => 'required',
		    'history' => 'required',
		    'mission_vision' => 'required',
		    'principle_message' => 'required',
		    'providan_link' => 'required',
		    'academic_calender_link' => 'required',
		];
	}
}
