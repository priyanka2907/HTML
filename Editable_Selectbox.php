<html>
<head>
<title>HTML Select Box</title>

<style>
.editableBox{
	width:205px;
	height:30px;
	
}
.timeTextBox{
	width:190px;
	margin-left:-208px;
	height:25px;
	border:none
	
	
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	
	$(".editableBox").change(function(){ 
	// here we get selectbox selected value & assign to textbox
		$(".timeTextBox").val($(".editableBox option:selected").html());
		
	});
	
});
</script>


</head>
<form>
<p><h3>Editable Select Box</h3></p>

<div class="wrapper"> &nbsp;&nbsp;&nbsp;
<select name="classname" class=" editableBox">
<option value="BCS">BCS</option>
<option value="MCS">MCS</option>
<option value="BBA">BBA</option>
<option value="BCA">BCA</option>
<option value="MCA">MCA</option>
 </select>
<input class="timeTextBox" value= "" name="timebox" >

</form>


</div>



</html>
