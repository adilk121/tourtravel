$(function(){$("#booking_form").validate({rules:{name:"required",email:{required:!0,email:!0},phone1:{required:!0,number:!0,minlength:10,maxlength:12},address:"required",date:"required",placeindelhi:"required",textpick:"required",noofperson:"required"},messages:{name:"Please enter your name",email:"Please enter a valid email id",mcon:"Please enter your valid Phone",course:"Please choose Course",location:"Please choose location"},submitHandler:function(a){a.submit()}}),

$("#author-form").validate({rules:{pname:{required:!0},name:"required",designation:"required",department:"required",institute:"required",address:"required",email:{required:!0,email:!0},mobile:{required:!0,number:!0},attachFile:"required"},messages:{name:"Please enter your name",email:"Please enter a valid email address",pname:"Please enter Paper Name",attachFile:"Please upload Paper",department:"Please enter your department",designation:"Please enter your designation",mobile:"Please enter your number"},submitHandler:function(a){a.submit()}}),$("#contact").validate({rules:{name:"required",email:{required:!0,email:!0},phone:{required:!0,number:!0,minlength:10,maxlength:15}},messages:{name:"Please enter your name",email:"Please enter a valid email id",phone:"Please enter your valid Phone"},submitHandler:function(a){a.submit()}}),$("#form1").validate({rules:{name:"required",email:{required:!0,email:!0},phone:{required:!0,number:!0,minlength:10,maxlength:12}},messages:{name:"Please enter your name",email:"Please enter a valid email id",phone:"Please enter your valid Phone"},submitHandler:function(a){a.submit()}}),$("#form2").validate({rules:{name:"required",email:{required:!0,email:!0},phone:{required:!0,number:!0,minlength:10,maxlength:15}},messages:{name:"Please enter your name",email:"Please enter a valid email id",phone:"Please enter your valid Phone"},submitHandler:function(a){a.submit()}}),$("#page-form").validate({rules:{name:"required",email:{required:!0,email:!0},phone:{required:!0,number:!0,minlength:10,maxlength:12}},messages:{name:"Name Required",email:"Valid email",phone:" Valid Phone"},submitHandler:function(a){a.submit()}})});