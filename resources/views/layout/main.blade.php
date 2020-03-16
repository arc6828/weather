<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>
<body>

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
  @include('layout.js')    
         
        
</body>
</html>
