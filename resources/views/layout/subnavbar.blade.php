<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="{{ url('/') }}"><i class="icon-dashboard"></i><span>ข้อมูลล่าสุด</span> </a> </li>
        <li><a href="{{ url('/weather') }}"><i class="icon-list-alt"></i><span>ข้อมูลย้อนหลัง</span> </a> </li>
        <li class="d-none"><a href="#"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li class="d-none"><a href="#"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li class="d-none"><a href="#"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown d-none">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<script>
var url = window.location.href;
//console.log("URL : ", url);
var object = document.querySelector('a[href="'+url+'"]');
//console.log("Object : " , object);
if(object){
    object.parentNode.classList.add('active');
}
</script>