<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li> <a href="{{ url('/') }}/"><i class="icon-dashboard"></i><span>ข้อมูลล่าสุด</span> </a> </li>
        <li> <a href="{{ url('/weather') }}"><i class="icon-list-alt"></i><span>ข้อมูลย้อนหลัง</span> </a> </li>
        <li> <a href="{{ url('/dashboard') }}"><i class="icon-list-alt"></i><span>Dashboard</span> </a> </li>
        <li> <a href="{{ url('/ocr') }}"><i class="icon-list-alt"></i><span>ข้อมูลระดับน้ำ</span> </a> </li>
        <li class="d-none"> <a href="{{ url('/location') }}"><i class="icon-list-alt"></i><span>ข้อมูลตำแหน่ง</span> </a> </li>
        <li> <a href="{{ url('/staffgauge') }}"><i class="icon-list-alt"></i><span>ข้อมูลมาตรวัด</span> </a> </li>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<script>
var url = window.location.href;
console.log("URL : ", url);
var object = document.querySelector('a[href="'+url+'"]');
console.log("Object : " , object);
if(object){
    object.parentNode.classList.add('active');
}
</script>