<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_model extends Model
{
    protected $table='teacher';
    protected $primaryKey='teacher_id';
    protected $fillable=['status',
                        'teacher_name',
                        'fathers_name',
                         'mothers_name',
                         'birth_date',
                         'gender',
                         'religion',
                         'mobile_no',
                         'designation',
                         'type',
                         'job_type',
                         'work_department',
                         'medium',
                         'marital_status',
                        'teacher_id','user_id','email','employment_id'];
    
    
    public function validation()
    {
        return [
           'teacher_name'=>'required',
            'fathers_name'=>'required',
            'mothers_name'=>'required',
            'birth_date'=>'required',
            'gender'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'mobile_no'=>'required',
            'job_type'=>'required',
            'work_department'=>'required',
            'medium'=>'required',
            'employment_id'=>'required',
            'image'=>'image|mimes:jpeg'
                        
        ];
    }

    public function validation_edit()
    {
        return [
           'teacher_name'=>'required',
            'fathers_name'=>'required',
            'mothers_name'=>'required',
            'birth_date'=>'required',
            'gender'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'mobile_no'=>'required',
            'job_type'=>'required',
            'employment_id'=>'required',
            'work_department'=>'required',
            'image'=>'image|mimes:jpeg',
        ];
    }
}

