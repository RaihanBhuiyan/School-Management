<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
class Role extends EntrustRole
{
    protected $primaryKey='id';
    protected $table='roles';
    protected $fillable=['name','display_name','description'];


    public  function roles_rule(){

  		return [
	    'display_name' => 'required',
	    'description' => 'required',
	    ];
	}
}

