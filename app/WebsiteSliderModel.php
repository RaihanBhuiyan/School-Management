<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteSliderModel extends Model
{
    protected $table='website_slider';
    protected $primaryKey='website_slider_id';
    protected $fillable=['title','image'];

    public function validation(){
	  	return [
		    'title' => 'required',
		    'image' => 'required',
		];
	}
}
