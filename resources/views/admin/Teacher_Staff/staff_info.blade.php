@extends('admin.index')
@section('Title','Staff')
@section('breadcrumbs','Staff')
@section('breadcrumbs_link','/staff_info')
@section('breadcrumbs_title','Staff')

@section('content')



@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
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


@if (Session::has('wrong'))
    <div class="alert alert-danger alert-dismissible fade in">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('wrong') }}
    </div>
   
@endif



  <div class="container">
      <h2><i class="fa fa-street-view" aria-hidden="true"></i> Add Staff</h2> <!-- Tab Heading  -->
    <p title="Transport Details">{{Session::get('school.system_name')}} Staff Details</p> <!-- Transport Details -->

          <div class='row'>
         
         <div class="panel panel-default" >
          <div class="panel-body text-left">
             <ul class='dropdown_test'>
                   
            <li><a href='/home'><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp;Home</a></li>
            <li><a href='/staff_report'><i class="fa fa-graduation-cap" aria-hidden="true"></i> Staff Report</a></li>
            <li><a href='/teacher_info'><i class="fa fa-user" aria-hidden="true"></i> Add Teacher</a></li>
            <li><a href='/teacher_report'><i class="fa fa-address-card-o" aria-hidden="true"></i> Teacher's Report </a></li>
             </ul>
          </div>
        </div>



      <div class="controls text-right">
                <div data-toggle="buttons-checkbox" class="btn-group">
                  <button  class="btn btn-default" title='Export PDF' type="button"><a target="_blank" href="/staff_report_pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></button>

                  <button class="btn btn-default" title='Export Excel' type="button"><a  href="/staff_report_excle"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a></button>
                  
                  <button class="btn btn-default" title='Preview' ttype="button"><a target="_blank" href="/staff_report_pdf"><i class="fa fa-street-view" aria-hidden="true"></i></a></button>
                  
                  <button id='print' class="btn btn-default" title='Print' type="button"><i class="fa fa-print" aria-hidden="true"></i></button>

                </div>
        </div>
    </div>




            <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>New Staff Add</h5>
          </div>
          <div class="widget-content nopadding">
            {{Form::open(['url'=>'/teacher_info','files'=>true,'class'=>'form-horizontal','method'=>'post','name'=>'basic_validate','id'=>'basic_validate','navalidate'=>'navalidate'])}}
              
                <div class="controls">
                  {{Form::hidden('status','Staff',['id'=>'required','title'=>'status','placeholder'=>''])}}
                </div>

              
              <div class="control-group">
        {{Form::label('teacher_name','Staff Name:',['class'=>'control-label','title'=>'Staff Name'])}}
                
                      <div class="controls">
                {{Form::text('teacher_name','',['id'=>'required','title'=>'teacher_name','placeholder'=>'Staff Name'])}}
                
              </div>
            </div>

              
              
              <div class="control-group">
               {{Form::label('father_name','Fathers Name:',['class'=>'control-label','title'=>'Father Name'])}}
                <div class="controls">
                  {{Form::text('fathers_name','',['id'=>'required','title'=>'fathers_name','placeholder'=>'Fathers Name'])}}
                </div>
              </div>

              <div class="control-group">
                {{Form::label('mothers_name','Mother Name:',['class'=>'control-label','title'=>'Mother Name'])}}
                <div class="controls">
                    {{Form::text('mothers_name','',['id'=>'required','title'=>'mothers_name','placeholder'=>'Mother Name'])}}                  
                </div>
              </div>


               <div class="control-group">
            {{Form::label('birth_date','Birth Date(mm/dd)',['class'=>'control-label','title'=>'birth_date'])}}
                <div class="controls">
                <div  data-date="" class="input-append date datepicker">
                   {{Form::date('birth_date',null,['data-date-format'=>'mm-dd-yyyy','style'=>'width:85%'])}}

                   <span class="add-on"><i class="icon-th"></i></span>
                  <!-- <input type="date">  -->
                  </div>
                </div>
            </div>

            





              <div class="control-group">
                  {{Form::label('gender','Gender',['class'=>'control-label','title'=>'gender'])}}
                <div class="controls">
                    {{Form::select('gender',['Male' => 'Male', 'Female' => 'Female', 'Others'=>'Others'])}}
                    
                </div>
              </div>

                  <div class="control-group">
                      {{Form::label('maritual_status','Marital Status',['class'=>'control-label','title'=>'Marital Status'])}}
                            <div class="controls">
                                {{Form::select('marital_status',['Married' => 'Married', 
                                'Unmarried' => 'Unmarried'])}}                                
                              </div>
                            </div>

                      <div class="control-group">
                        {{Form::label('religion','Religion',['class'=>'control-label','title'=>'religion'])}}
                              <div class="controls">
                                            {{Form::select('religion', ['Islam' => 'Islam', 
                                            'Hindu' => 'Hindu',
                                            'Buddhist'=>'Buddhist',
                                            'Khristan'=>'Khristan'])}}                                  
                                        </div>
                                      </div>

                        <div class="control-group">
                         {{Form::label('email','Email',['class'=>'control-label','title'=>'Email'])}}                     
                                    <div class="controls">
                                        {{Form::email('email','',['id'=>'required','title'=>'email','placeholder'=>'@email'])}}
                                    </div>
                      </div>

                      <div class="control-group">
                          {{Form::label('mobil_no','Mobile No',['class'=>'control-label','title'=>'Mobile No'])}}
                                      <div class="controls">
                                        {{Form::number('mobile_no','',['id'=>'required','title'=>'mobile_no','placeholder'=>'Mobile No'])}}
                                      </div>
                                    </div>

                                    

                      <div class="control-group">
                             {{Form::label('job_type','Job Type',['class'=>'control-label','title'=>'Job Type'])}} 
                                      <div class="controls">
                      @php $job_type_array=['--select--'=>'--select--'] @endphp
                        @foreach($job_type_data as $job_type_data_list)
                          @php $job_type_array[$job_type_data_list->type_name]=$job_type_data_list->type_name @endphp
                        @endforeach      
                                   {{Form::select('job_type',$job_type_array)}} 
                                            </div>
                      </div>
                         <div class="control-group">
                @php $work_department_array=['--select--'=>'--select--']@endphp
                         @foreach($work_department_data as $work_department_data_list)
                          @php $work_department_array[$work_department_data_list->type_name]=$work_department_data_list->type_name @endphp
                        @endforeach


                             {{Form::label('work_department','Work Department',['class'=>'control-label','title'=>'Work Department'])}}
                                      <div class="controls">
                                        {{Form::select('work_department',$work_department_array)}}  
                                        </div>
                                    </div>

                          <div class="control-group">
                      {{Form::label('employment_id','Employement Id',['class'=>'control-label','title'=>'Teacher Name'])}}
                              
                          <div class="controls">
                              {{Form::text('employment_id','',['id'=>'required','title'=>'employment_id','placeholder'=>'Employement Id'])}}
                
                          </div>
                      </div>


        <div class="control-group">
          {{Form::label('medium','Medium',['class'=>'control-label'])}}
          <div class="controls">
            @php 
              $medium_array=[''=>'--select--']
            @endphp
            @foreach($medium as $medium_data)
              @php
                $medium_array[$medium_data->type_name]=$medium_data->type_name
              @endphp
            @endforeach
            {{Form::select('medium',$medium_array,null,['class'=>'medium','id'=>'medium'])}}
          </div>
        </div>
        
              <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                    <table class="table address">
                      <thead>
                        <tr>
                          <th>Post Office</th>
                          <th>Home District</th>
                          <th>Division</th>
                          <th>Village Name</th>
                          <th>Home Name</th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr>
                          <td>{{Form::text('post_office','',['id'=>'a_table','title'=>'post_office','placeholder'=>'Post Office'])}} </td>
                          <td>{{Form::text('home_district','',['id'=>'a_table','title'=>'home_district','placeholder'=>'Home District'])}}</td>
                           <td>{{Form::text('division','',['id'=>'a_table','title'=>'division','placeholder'=>'Division'])}} </td>
                            <td>{{Form::text('village_name','',['id'=>'a_table','title'=>'village_name','placeholder'=>'Village Name'])}} </td>
                             <td>{{Form::text('home_name','',['id'=>'a_table','title'=>'home_name','placeholder'=>'Home Name'])}} </td>
                        </tr>
                      </tbody>
                    </table>



                  </div>
              </div>

                            <div class="control-group">
                              <label class="control-label">Qualification</label>
                              <div class="controls">
                                  <table class="table address">
                                    <thead>
                                      <tr>
                                        <th>Degree Name</th>
                                        <th>Board Name</th>
                                        <th>Passing Year</th>
                                        <th>Department Name</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     <tr>
                                        <td>{{Form::text('degree_name','',['id'=>'a_table','title'=>'degree_name','placeholder'=>'Home Name'])}} </td>
                                        <td>{{Form::text('board_name','',['id'=>'a_table','title'=>'board_name'])}} </td>
                                         <td>{{Form::text('passing_year','',['id'=>'a_table','title'=>'passing_year'])}} </td>
                                          <td>{{Form::text('department_name','',['id'=>'a_table','title'=>'department_name'])}} </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>


              <div class="control-group">
            {{Form::label('photo','Photo:',['class'=>'control-label','title'=>'upload_photo'])}}
                <!-- <label class="control-label">Photo</label> -->
                <div class="controls">
                  <input type="file" name="image" onchange="readURL(this);">
                  </div>
              </div>

              <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    {{Form::image('img/blankavatar.png','Profile_image',['alt'=>'Your Image','class'=>'img-responsive img-circle blank_applicant_student_image','id'=>'blah','style'=>'width:19%'])}}
                  <!-- <img id='blah'  src="img/blankavatar.png"  alt="your image" class='img-responsive img-circle blank_applicant_student_image' /> -->
                  </div>
              </div>





          <div class="form-actions">
          @permission('INSERT')
                <input type="submit" value="Submit" class="btn btn-success" id="submit_button" >
          @endpermission
              </div>
              {{Form::close()}}
            <!-- </form> -->
          </div>
        </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@push('custom-scripts')
    <script type="text/javascript" src="{{asset('extra_js/staff.js')}}"></script>
@endpush
    
@stop
