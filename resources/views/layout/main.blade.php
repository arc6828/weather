<!DOCTYPE html>
<html lang="en">
<head>

  @include('layout.head')
</head>
<body>
  
  @include('layout.js')   

  <div>
    @include('layout.navbar')
  </div>
  <div>    
    @include('layout.subnavbar')
  </div>

  <div class="" style="padding-bottom:100px !important;">           
    @yield('content')    
  </div>

  <div >
    @include('layout.footer')
  </div> 
         
        
</body>
</html>
