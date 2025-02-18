<!DOCTYPE HTML>
<html lang="en-US"><head>
	<meta charset="UTF-8">
	<title>Component Excle</title>
	

</head><body class='body_for_report'>
      
      <div class='print_report'>
      		<div class="container">
	      
		  <h5>{{Session::get('school.system_name')}}( {{Session::get('school.school_eiin')}} )
      </h5>
      <h5>{{Session::get('school.address')}}<br>
          {{Session::get('school.Phone')}}<br>
          {{Session::get('school.country')}}<br>
          {{Session::get('school.postal_code')}}</h5>

                   <h5 style="text-align: center;">Component Report<hr style="width: 100px; margin-left:266px; "></h5>
	  
                     <div class="col-sm-12">
                         <div class="panel-body">
                             <table>
                              
                                   <tr class='report_class_background' >
				                  <th>Component Name</th>
				                  <th>Abbr</th>
				                  <th>Mark</th>
				                  <th>Calculate Percent</th>                   
                                 </tr>

                                   @foreach($component_data as $component_list_data)
                                  <tr class="gradeX" style=" font-size:10px;">
                                  <td>{{$component_list_data->component_name}}</td>
                                  <td>{{$component_list_data->abbr}}</td>
                                  <td>{{$component_list_data->mark}}</td>
                                  <td>{{$component_list_data->calculate_percent}}</td> 
                                   </tr>
                                   @endforeach
	                              
                         		</table>
                       		</div>
                  	</div>
             </div>
              <p class='p_tag_report'>Print Date &nbsp;:&nbsp;{{date('d-m-Y')}}</p>
             <p class='p_tag_report' style='text-align:center'>Develop by : TMSS ICT Ltd.<br>website : https://tmss-ict.com/<br>Contact No : 880-2-55073530</p>
      </div>

       

<!-- <script src="{{URL::asset('js/bootstrap.min.js')}}"></script> -->
</body></html>

