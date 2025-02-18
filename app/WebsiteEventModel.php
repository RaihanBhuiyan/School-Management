<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteEventModel extends Model
{
    protected $table='website_event';
    protected $primaryKey='website_event_id';
    protected $fillable=['title','description','type','image'];

    public  function validation(){
	  	return [
		    'title' => 'required',
		    'description' => 'required',
		    'type' => 'required',
		    'image' => 'required',
		];
	}
}
