

<script type="text/javascript" id="backToLogonJQuery">
$(document).ready(function(){


	$("#backToLogonButton").click(
	function()
	{
    $("#outerLoginBox").animate({'top':"-155px"},800,'linear');

    loadAjaxPage('Login', 'innerLoginBox','registrationJquery');
    }
    );
});
</script>





<h2 style="margin-top:78px">Register</h2>

<div class="loginBox">
<div class="loginText">Username:</div>
<input class="roundedInput" style="width:130px" type="text" id="login" />
</div>

<div class="loginBox">
<div class="loginText">Password:</div>
<input class="roundedInput" style="width:130px" type="password" id="password" />
</div>

<div class="loginBox">
<div class="loginText">Retype Pass:</div>
<input class="roundedInput" style="width:130px" type="password" id="password2" />
</div>

<div class="loginBox">
<div class="loginText">Email:</div>
<input class="roundedInput" style="width:130px" type="text" id="email" />
</div>


<input id="backToLogonButton" type="submit" class="greenButton" value="Back" />

<input id="confirmEmail" type="submit" class="greenButton" style="float:right" value="Submit" onclick="registerAttempt()" />




<br/>
<div id="registerResultBox" style="height:53px">

<?php if(isset($success)): ?>
	<div id="loginFailBox" style="height:27px">
		<font color="#C1C7FF">An activation code has been sent to your email address</font>
	</div>

<?php elseif(isset($errormsg)): ?>
	<div id="loginFailBox">
	<?= $errormsg; ?>
	</div>

<?php endif; ?>


</div>




