@extends('admin.index')
@section('Title','Website Setup')
@section('breadcrumbs','general_settings')
@section('breadcrumbs_link','/general_settings')
@section('breadcrumbs_title','general_settings')
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong><i class="fa fa-commenting-o" aria-hidden="true"></i> &nbsp; Success!</strong> {{ Session::get('success') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade in">
        <ul  style='list-style:none'>
            @foreach ($errors->all() as $error)
                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
      <h2><i class="fa fa-car" aria-hidden="true"></i>&nbsp;General Settings</h2> <!-- Tab Heading  -->
    <p title="Transport Details">{{Session::get('school.system_name')}}  General Settings</p> <!-- Transport Details -->





<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Website Setup</h5>
      </div>

        <div class="widget-content nopadding">
         {{Form::open(['url'=>"/frontend/website_setup",'class'=>'form-horizontal','method'=>'post','files'=>true,'name'=>'basic_validate','id'=>'basic_validate','novalidate'=>'novalidate'])}}
         <div class="control-group">
           <div class="controls">
             {{Form::hidden('website_setup_id',$website_setup->website_setup_id,['class'=>'span11'])}}
            </div>
         </div>

            <div class="control-group">
              {{Form::label('About Us',null,['class'=>'control-label'])}}

              <div class="controls">
                {{Form::textarea('about_us',$website_setup->about_us,['class'=>'span11'])}}
               </div>
            </div>

            <div class="control-group">
              {{Form::label('History',null,['class'=>'control-label'])}}

              <div class="controls">
                {{Form::textarea('history',$website_setup->history,['class'=>'span11'])}}
               </div>
            </div>

            <div class="control-group">
              {{Form::label('Mission Vission',null,['class'=>'control-label'])}}

              <div class="controls">
                {{Form::textarea('mission_vision',$website_setup->mission_vision,['class'=>'span11 description'])}}
               </div>
            </div>

            <div class="control-group">
              {{Form::label('Principle Message',null,['class'=>'control-label'])}}
              <div class="controls">
                {{Form::textarea('principle_message',$website_setup->principle_message,['class'=>'span11 description'])}}
               </div>
            </div>
            <div class="control-group">
              {{Form::label('Providan Google Drive Link',null,['class'=>'control-label'])}}
              <div class="controls">
                {{Form::text('providan_link',$website_setup->providan_link,['class'=>'span11 providan_link'])}}
               </div>
            </div>
            <div class="control-group">
              {{Form::label('Academic Calender Google Drive Link',null,['class'=>'control-label'])}}
              <div class="controls">
                {{Form::text('academic_calender_link',$website_setup->academic_calender_link,['class'=>'span11 academic_calender_link'])}}
               </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>
</div>
</div>


@stop
