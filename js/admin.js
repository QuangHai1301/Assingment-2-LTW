
$(document).ready(function()
{
	$(".delete").click(function(){
		var ID=$(this).attr('id');
		var dataString = 'id='+ID;
		$.ajax({
				type: "POST",
				url: "delete.php",
				data: dataString,
				cache: false,
				success: function(html)
				{
					alert("Xóa thành công");
					location.reload();
				}
			});
	});
	$(".edit_tr").click(function()
	{
		var ID=$(this).attr('id');
		$("#name_"+ID).hide();
		$("#birthday_"+ID).hide();
		$("#password_"+ID).hide();
		$("#email_"+ID).hide();
		$("#name_input_"+ID).show();
		$("#birthday_input_"+ID).show();
		$("#password_input_"+ID).show();
		$("#email_input_"+ID).show();
	}).change(function()
	{
		var ID=$(this).attr('id');
		var name=$("#name_input_"+ID).val();
		var birthday=$("#birthday_input_"+ID).val();
		var password=$("#password_input_"+ID).val();
		var email=$("#email_input_"+ID).val();
		var dataString = 'id='+ ID +'&name='+name+'&birthday='+birthday+'&password='+password+'&email='+email;

		if(name.length>0&& birthday.length>0&&password.length>0&& email.length>0)
		{

			$.ajax({
				type: "POST",
				url: "adminedit.php",
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#name_"+ID).html(name);
					$("#birthday_"+ID).html(birthday);
					$("#password_"+ID).html(password);
					$("#email_"+ID).html(email);
				}
			});
		}
		else
		{
			alert('Enter something.');
		}

	});

// Edit input box click action
$(".editbox").mouseup(function() 
{
	return false
});

// Outside click action
$(document).mouseup(function()
{
	$(".editbox").hide();
	$(".text").show();
});

});