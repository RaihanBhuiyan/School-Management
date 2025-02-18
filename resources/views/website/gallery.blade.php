@extends('website.index')
@section('website_main_section')

	<div class="col-lg-8 twelve columns" id="left-content">
        <div class="row mainwrapper">
            <div class="col-lg-12 header_msg_section">
                <h3 class="header_msg_section_title">Gallery</h3>
                <div class="row" id="gallery_image">
                    @foreach($event as $key => $value)
                    <div class="col-lg-4">
                        <a href="{{asset($value->image)}}">
                            <img src="{{asset($value->image)}}" class="gallery_image" style="width: 100%;     margin: 10px 0px 10px 0px;">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop