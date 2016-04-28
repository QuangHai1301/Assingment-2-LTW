
$(document).ready(function()
{
    /***********--DELETE--***************/
	$(".delete").live('click',function()
	{
	  var id=$(this).parent().parent().attr('id');
	  var b=$(this).parent().parent();
	  var dataString = 'id='+ id;
	   if(confirm("Sure you want to delete this item? "))
		   {
			 $.ajax({
					type: "POST",
					url: "delete.php",
					data: dataString,
					cache: false,
					success: function(e)
					{
					b.hide();
					}
				   });
		  return false;
		   }
	});
					
/***********--EDIT--***************/			
$(".edit_btn").live('click',function()
{
	var ID=$(this).parent().parent().attr('id');
	$(this).hide();
	$("#"+ID).find("a.update").show();
	$("#"+ID).find("a.cancel").show();
	$("#"+ID).find("a.delete").hide();
	$("#"+ID).find("span").hide()
	$("#"+ID).find("input.editbox_search").show();
	$("#"+ID).find("input.editbox_search").css("border","1px solid red");
});		

/***********--Cancel--***************/
  $('.cancel').live('click',function(){
   var ID=$(this).parent().parent().attr('id');
   
   var one_val=$("#one_"+ID).html();
   var two_val=$("#two_"+ID).html();
   var three_val=$("#three_"+ID).html();
   
   $("#one_input_"+ID).val(one_val);
   $("#two_input_"+ID).val(two_val);
   $("#three_input_"+ID).val(three_val);
   
   $("#"+ID).find("span").show()
   $("#"+ID).find("input.editbox_search").hide();
   
   $("#"+ID).find("a.update").hide();
   $("#"+ID).find("a.cancel").hide();
   $("#"+ID).find("a.delete").show();
   $("#"+ID).find("a.edit_btn").show();	
}); 

/***********--UPDATE--***************/
$(".update").live('click',function(){
		var ID=$(this).parent().parent().attr('id');
		
		var one_val=$("#one_input_"+ID).val();
		var two_val=$("#two_input_"+ID).val();
		
		var dataString = 'id='+ ID+'&name='+one_val+'&year='+two_val;
		
		if(one_val.length>0 && two_val.length>0){
		
				$.ajax({
				   type: "POST",
				   url: "update.php",
				   data: dataString,
				   cache: false,
				   success: function(e)
				   {
							$("#one_"+ID).html(one_val);
							$("#two_"+ID).html(two_val);
							$("#"+ID).find("span").show()
							$("#"+ID).find("input.editbox_search").hide();
							
							$("#"+ID).find("a.update").hide();
							$("#"+ID).find("a.cancel").hide();
							
							$("#"+ID).find("a.delete").show();
							$("#"+ID).find("a.edit_btn").show();	

				    }
				   });
		} 	
		
		else{
		  alert("field missing");
		}
  });
  
/***********--ADD--***************/
$(".add").click(function(){
	var email=$("#email").val();
	//Check invalid date
	var birthdate=$("#birthday").val();   
    if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(birthdate)){
        $(".error").text("Ngày sinh không hợp lệ");
        return false;
    }  
    var parts = birthdate.split("/");
    var month = parseInt(parts[1], 10);
    var day = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);   
    if(year < 1000 || year > 3000 || month == 0 || month > 12){
         $(".error").text("Ngày sinh không hợp lệ");
        return false;
    }
    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29; 
    if (day > 0 && day <= monthLength[month - 1] ==false){
    	 $(".error").text("Ngày sinh không hợp lệ");
    	return false;
    }
    // end check invalid date

    //Check invalid email
    function isValidEmailAddress(emailAddress) {
	    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	    return pattern.test(emailAddress);
	};
	if( !isValidEmailAddress( email ) ) { 
		$(".error").text("Email không hợp lệ");
        return false;
	 }
    //end check invalid email


    var birthday = year+'/'+month+'/'+day;
	var name=$("#name").val();
	
	var password=$("#password").val();
	if (name.length>0&&email.length>0&&birthday.length>0&&password.length>0)
	{
		var dataString ='name='+name+'&email='+email+'&birthday='+birthday+'&password='+password;
		
		$.ajax({
			type: "POST",
			url: "reg.php",
			data: dataString,
			cache: false,
			success: function(e)
			{
				if (e.status=='succ') {window.location = "../login/login.php";}
				if (e.status=='nameerr') $(".error").text("Tên đăng nhập đã tồn tại!");
				if (e.status=='emailerr') $(".error").text("Email đã tồn tại!");
			   //
			}
			 //success end
		}); // ajax end
	}
	return false;	
 });

}); // document end
