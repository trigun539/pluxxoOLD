


<script type="text/javascript" id="registrationJquery">
$(document).ready(function(){


	$("#registerTab").click(
	function()
	{
    $("#outerLoginBox").animate({'top':"-80px"},800,'linear');

    loadAjaxPage('Register', 'innerLoginBox','backToLogonJQuery');
    }
    );
});
</script>




<h2 style="margin-top:150px">Login</h2>

<div class="loginBox">
<div class="loginText">Username:</div>
<input class="roundedInput" style="width:130px" type="text" id="login" />
</div>

<div class="loginBox">
<div class="loginText">Password:</div>
<input class="roundedInput" style="width:130px" type="password" id="password" />
</div>

<input id="registerTab" type="submit" class="greenButton" value="Register" >

<input type="submit" class="greenButton" style="float:right" value="Login" onclick="loginAttempt();" >






<div id="loginResultBox" style="height:45px">

<?php if($loginfailure == 1): ?>
	<div id="loginFailBox">
	You have entered an invalid user/pass
	</div>
<?php endif; ?>

</div>
