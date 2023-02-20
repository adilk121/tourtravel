<?php date_default_timezone_set('Asia/Kolkata'); ?>
<!doctype html>
<html class="no-js" lang="en">
<?php include("dynamic_values.php"); ?>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>India Tourism Incredible- Ask for free enquiry</title>
<meta NAME="description" content="India Tourism Incredible for any enquiries and comments, you can contact us by phone and Enquiry form."/>
<meta NAME="keywords" content="India Tourism Incredible- Ask for free enquiry"/>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
    
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    
    <link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
    
    <link rel="stylesheet" href="assets/css/common/main.css">
   
<style>
div#pack-detail {
    text-align: center;
    margin: -15px 0 20px 0;
    background: #059afc;
    color: #000;
    padding: 10px;
}


span#pack {
    float: left;
    font-size: 18px;
    color: #000;
    font-weight: 600;
    text-shadow: 1px 1px 2px white;
    margin: 6px 0 0 0;
}




span#type {
    float: left;
    margin: 0 0 0 200px;
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    background: #f60;
    padding: 6px;
    border-radius: 3px;
    text-shadow: 1px 1px 2px black;
}

span#cost {
    float: right;
    font-size: 20px;
    margin: 4px 0 0 0;
    color: #FFEB3B;
    font-weight: 600;
    text-shadow: 1px 1px 2px red;
}

</style>    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
		<!-- Global site tag (gtag.js) - Google Ads: 830489390 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-830489390"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'AW-830489390');
</script>

</head>
<body>

<div class="tsp-main">
   <?php include("site-header-menu.php");?>
<div class="clearfix"></div>
<!--header-->
<section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>BOOKING <span> NOW</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li><span>BOOKING NOW</span></li>
                        </ul>
                    </div><!-- div breadcrumb -->
                </div><!-- div row -->
            </div>
        </section>
    <main>
    <section class="tsp-content-contact-page">
            <div class="container tsp-no-padding">

<div class="col-lg-12" id="pack-detail"><span id="pack"><?=$_REQUEST['pack']?></span> <?php if($_REQUEST['type']!='None'){?> <span id="type"><?=$_REQUEST['type']?></span> <?php }?> <span id="cost"><?="<span id='inr'>Rs.</span>".$_REQUEST['cost']?></span></div>                
                <div class="row">
                

                
                
				<div>
                    <div class="col-md-12">
                         <form name="ContactFrm" action="proceed.php" method="post" enctype="multipart/form-data" onsubmit="return EnqValidation();">
                         
<input type="hidden" name="pack_name" value="<?=$_REQUEST['pack']?>"  />
<input type="hidden" name="pack_type" value="<?=$_REQUEST['type']?>"  />
<?php /*?><input type="hidden" name="pack_cost" value="<?=$_REQUEST['cost']?>"  /><?php */?>


	<div class="tsp-form-site">
    <div class="col-md-6">
		<div class="form-group tsp-no-padding-left tsp-full-xs">
			<label>Name *</label>
			<input type="text" name="enquiry_nam" id="enquiry_nam" >
		</div>
        </div>
        <div class="col-md-6">
        <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Mobile No *</label>
			<input type="text" name="enquiry_mobil" id="enquiry_mobil" maxlength="10" >
		</div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
		<div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Email Id *</label>
			<input type="text" name="enquiry_email" id="enquiry_email" >
		</div>
        </div>
        <div class="col-md-6">
		<div class="form-group">
			<label>Address</label>
            <input type="text" name="address" id="address" >
			<!--<textarea name="address" id="address" style="height:37px;"></textarea>-->
		</div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
        <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Date of Journey</label>
			<input type="date" name="date_of_journey" id="date_of_journey" >
		</div>
        </div>
        <div class="col-md-6">
        <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>No. of Person</label>
			<select class="form-sec" name="no_of_person" id="no_of_person" onChange="calculate_fare(this.value,'<?=$_REQUEST['cost']?>')" >
            <option value="0">Select No. of Person</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
                <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
                <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               
               <option value="19">19</option>
                <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
                <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
            </select>
		</div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
        <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Fare</label>
			<input type="text" name="pack_cost" id="pack_cost" readonly value="<?=$_REQUEST['cost']?>"  >
		</div>
        </div>
        <div class="col-md-6">
        <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Pickup Points *</label>
            
            
<?php if($_REQUEST['pc']==1){?>                       
<select  class="form-sec" name="pickup_points" id="pickup_points" >
<option value="0">Select Pickup Points</option>
<option value="Karol Bagh - 06:15 am">Karol Bagh - 06:15 am</option>
<option value="R K Ashram metro - 6:45 am">R K Ashram metro - 6:45 am</option>
<option value="Paharganj Avtar Hotel, Near Yes Bank - 6:30 am">Paharganj Avtar Hotel, Near Yes Bank - 6:30 am</option>
<option value="New Delhi Station - 6:30 am">New Delhi Station - 6:30 am</option>
<option value="Patel Chowk Metro - 07:00 am">Patel Chowk Metro - 07:00 am</option>
<option value="INA METRO - 07:10 am">INA METRO - 07:10 am</option>
<option value="Hazrat Nizamuddin Police Station - 07:20 am">Hazrat Nizamuddin Police Station - 07:20 am</option>
<option value="BP Petrol Pump in ashram chowk - 07:30 am">BP Petrol Pump in ashram chowk - 07:30 am</option>
<option value="Mahamaya Flyover Noida - 07:45 am">Mahamaya Flyover Noida - 07:45 am</option>
</select>
<?php }?>    



<?php if($_REQUEST['pc']==2){?>                       
<select  class="form-sec" name="pickup_points" id="pickup_points" >
<option value="0">Select Pickup Points</option>
<option value="Karol Bagh Metro Station - 06:15 am">Karol Bagh Metro Station - 06:15 am</option>
<option value="Paharganj Avtar Hotel, Near Yes Bank - 06:20 am">Paharganj Avtar Hotel, Near Yes Bank - 06:20 am</option>
<option value="New Delhi Railway Station - 06:30 am">New Delhi Railway Station - 06:30 am	</option>
<option value="RK Ashram Metro Station - 06:45 am">RK Ashram Metro Station - 06:45 am</option>
<option value="Patel Chowk Metro Station - 07:00 am">Patel Chowk Metro Station - 07:00 am</option>
<option value="Chanakyapuri - 07:15 am">Chanakyapuri - 07:15 am</option>
<option value="Munirka - 07:25 am">Munirka - 07:25 am</option>
<option value="Mahipalpur - 07:30 am">Mahipalpur - 07:30 am</option>
<option value="Gurgaon Iffco Chowk - 07:45 am">Gurgaon Iffco Chowk - 07:45 am</option>
</select>   
<?php }?>


<?php if($_REQUEST['pc']==3){?>                       
<select  class="form-sec" name="pickup_points" id="pickup_points" >
<option value="0">Select Pickup Points</option>
<option value="New Delhi Railway Station - 08:40 PM">New Delhi Railway Station - 08:40 PM</option>
<option value="Paharganj Avtar Hotel, Near Yes Bank - 08:45 PM">Paharganj Avtar Hotel, Near Yes Bank - 08:45 PM</option>
<option value="RK Ashram - 08:50 PM">RK Ashram - 08:50 PM</option>
<option value="Karol Bagh - 09:00 PM">Karol Bagh - 09:00 PM</option>
</select>            
<?php }?>     
     

<?php if($_REQUEST['pc']==4){?>                       
<select  class="form-sec" name="pickup_points" id="pickup_points" >
<option value="0">Select Pickup Points</option>


<option value="Karol Bagh Metro Station - 09:00 am">Karol Bagh Metro Station - 09:00 am</option>
<option value="New Delhi Metro Station - Gate No 3(Near food plaza rest) - 09:00 am">New Delhi Metro Station - Gate No 3(Near Food Plaza Restaurant) - 09:00 am</option>
<option value="Paharganj Avtar Hotel, Near Yes Bank - 09:15 am">Paharganj Avtar Hotel, Near Yes Bank - 09:15 am</option>
<option value="RK ashram - 09:30 am">RK ashram - 09:30 am</option>
<option value="Patel Chawk Metro Gate No 1 - 9:45 am">Patel Chawk Metro Gate No 1 - 9:45 am</option>
<option value="Birla Temple - 10:00 am">Birla Temple - 10:00 am</option>

</select>       
<?php
$actual_link = (isset($_SERVER['HTTP']) && $_SERVER['HTTP'] === 'on' ? "http" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<input type="hidden" name="actual_link" value="<?=$actual_link?>">


<?php }?>




        
              </div>
            </div>  
            <div class="clearfix"></div>
          <!-- <div class="form-group tsp-no-padding-right tsp-full-xs">
			<label>Total</label>
			<input type="text" name="total" id="total">
		</div>    
        -->
	<div class="col-md-12">	<center><input type="submit" name="EnqSubmit" value="Pay Now"></center></div>
		
	</div>
	

</form>

                    </div>
                    <!--<div class="col-md-6">
                        <div class="tsp-content">
						<img src="images/enquiry.png" width="100%" alt="India Tourism Incredible" title="India Tourism Incredible">
	
</div>
                    </div>-->
					</div>
                </div>
            </div>
        </section>
        
<!---------------->

    </main>
    
      <?php include("service-box-section.php"); ?>
    
<?php include("site-footer.php"); ?>
</div>
<!------------>
<script type="text/javascript">


$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;

    $('#date_of_journey').attr('min', maxDate);
});



function EnqValidation(){	
      function trim(str){				
	 return str.replace(/^\s*|\s*$/g,'');
	}	
if(trim(document.getElementById('enquiry_nam').value)==0){		
alert("Enter your Name !");
document.getElementById('enquiry_nam').focus();
return false;
}	
if (!document.getElementById('enquiry_nam').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('enquiry_nam').value='';
document.getElementById('enquiry_nam').focus();
return false;
}
var mobno=trim(document.getElementById('enquiry_mobil').value);
if(trim(document.getElementById('enquiry_mobil').value)==0){
	alert("Enter your Mobile No.!");
	document.getElementById('enquiry_mobil').focus();
	return false;
}
if(isNaN(document.getElementById('enquiry_mobil').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('enquiry_mobil').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('enquiry_mobil').focus();
	return false;
}

var email=trim(document.getElementById('enquiry_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('enquiry_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('enquiry_email').focus();
return false;
}

if(trim(document.getElementById('address').value)==0){
	alert("Enter your Address !");
	document.getElementById('address').focus();
	return false;
 }
 
 

 if(trim(document.getElementById('date_of_journey').value)==0){
	alert("Select Date Of Journey !");
	document.getElementById('date_of_journey').focus();
	return false;
 }
 
 if(trim(document.getElementById('no_of_person').value)==0){
	alert("Select No. of Person !");
	document.getElementById('no_of_person').focus();
	return false;
 }
 if(trim(document.getElementById('pickup_points').value)==0){
	alert("Select Pickup Points !");
	document.getElementById('pickup_points').focus();
	return false;
 }
 //if(trim(document.getElementById('total').value)==0){
//	alert("Enter Total !");
//	document.getElementById('total').focus();
//	return false;
// }


}
</script>


<script>
function calculate_fare(person,fare){
var cost=person*fare;	
document.getElementById("pack_cost").value=cost;
}
</script>
 
<!------------->

<script src="assets/js/vendors/jquery.min.js"></script>
<script src="assets/js/vendors/bootstrap.min.js"></script>
<script src="assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="assets/js/common.js"></script>
</body>

</html>	