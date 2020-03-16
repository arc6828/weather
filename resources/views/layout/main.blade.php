<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>
<body>

<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
           
                @include('layout.navbar')
        </div>
    </div>


    <div class="subnavbar">
        <div class="subnavbar-inner">
       
                @include('layout.subnavbar')
        </div>
    </div>


<div class="main">           
         @yield('content')
</div>
                            </div>
        @include('layout.footer')

  </div>
</div>
    @include('layout.js')    
         
        
    </body>
</html>
