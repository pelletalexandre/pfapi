<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include ('layouts.front.header')


<body>
  <style>
        body
        {
            /*background: url("{{$edition->header_image_url}}") !important; */
            background: url("{{$edition->header_image_url}}") no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }        
    </style>
    
	<div class="container">

    
    @include ('edition.include.topbar')
    
    
    @yield ('content')

  <div class="row bordgris bordrondbas">


    <div class="col-sm-12" height="100%">
    
    </div>






  

</div>
</div>




@include ('layouts.front.script')

@yield ('custom_script')

</body>

</html>