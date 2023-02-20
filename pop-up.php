<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display popup on page load</title>
<style type="text/css">
	#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#26262c;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:850px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 5px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:auto;
  padding: 10px 10px 10px 10px;
  background-color:#ffffff;
  font-size: 15pt;
}

.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
 background-color:#D1D1D1;
 color: green;
}
.popupoption2:hover{
 color: red;
}
</style>




<!-- <link rel="stylesheet" href="swc.css"> -->
</head>
<body>
<!-- <div class="maintext">
<h2> Main text goes here...</h2>
</div> -->
<div id="boxes">
<div style="top: 50%; left: 50%; display: none;" id="dialog" class="window"> 
<div id="san">
<a href="index.php" class="close agree"><img src="close-icon.png" width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
<h1>We are doing testing on it please avoid to book this package ....<strong>Sorry For Inconvenience</strong></h1>
</div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<!-- <script src="swc.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() { 
  var id = '#dialog';
  var maskHeight = $(document).height();
  var maskWidth = $(window).width();
  $('#mask').css({'width':maskWidth,'height':maskHeight}); 
  $('#mask').fadeIn(500); 
  $('#mask').fadeTo("slow",0.9); 
        var winH = $(window).height();
  var winW = $(window).width();
        $(id).css('top',  winH/2-$(id).height()/2);
  $(id).css('left', winW/2-$(id).width()/2);
     $(id).fadeIn(2000);  
     $('.window .close').click(function (e) {
  e.preventDefault();
  $('#mask').hide();
  $('.window').hide();
     });  
     $('#mask').click(function () {
  $(this).hide();
  $('.window').hide();
 });  
 
});
</script>
</body>
</html>