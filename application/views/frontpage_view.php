


<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('header_view'); ?>

<script type="text/javascript">
$(document).ready(function(){

	$('#Content').css('marginTop', '-600px');

	$('#outerLoginBox').css('opacity',0);
	$('#activationBox').css('opacity',0);
	$('#Loader').css('opacity',1);
	$('#activationBox').css('top','-300px');

    // /\ presetting variables to where they need to be before animating



	$(window).load(function()   //makes sure everything is loaded before animations begin
	{




		setTimeout( function()
		{
		  var audio = document.getElementById("hitSound");
		  audio.play();
	 	},2300);

	 	setTimeout( function()
		{
		  var audio = document.getElementById("hitSound");
		  audio.play();
	 	},3100);


		$('#Loader').animate(
			{ 'opacity':0},1000,'linear');


		  $('#Content').delay(1500).animate(
						  { 'marginTop': "30px" }, 2500, 'easeOutBounce');

			$('#outerLoginBox').delay(3000).animate(
						{ 'opacity':1},1000,'linear');

			<?php if(isset($act_success)): ?>
			setTimeout( function()
			{
				  $('#activationBox').css('top','300px');
				  $('#activationBox').animate({ 'opacity':1},1000,'linear');
			  },3500);
			  <?php endif; ?>

			  setTimeout( function()
			  {
				  $('#activationBox').animate({ 'opacity':0},1000,'linear');

				setTimeout( function(){
						$('#activationBox').css('top','-300px');
				},1000);
		},8500);
	});




	// /\ time events


	$('#activationBox').click(function(){
		  $('#activationBox').animate({ 'opacity':0},1000,'linear');

    	setTimeout( function(){
				$('#activationBox').css('top','-300px');
    	},1000);
    });



	$("#loginTab").toggle(
	function()
	{
    $("#outerLoginBox").animate({'top':"-155px"},800,'linear');
    },
    function()
	{
	if($("#outerLoginBox").css('top') > "-155px")
		loadAjaxPage('Login', 'innerLoginBox','registrationJquery');  //if its in the registration view, reload the login view in the spot

	$("#outerLoginBox").animate({'top':"-342px"},800,'linear');   //closed
    });
});
</script>


<body bgcolor="#222222" onload="loadAjaxPage('MainPanel', 'MainBox','liveChatScript'); loadAjaxPage('Login', 'innerLoginBox','registrationJquery')">




<div id="Loader" style="position:absolute;top:0;left:0;opacity:0;width:100%;height:100%;background:#222222;z-index:-20"></div>

<audio id="hitSound">
  <source src="/game/assets/sound/SharpPunch.mp3" type="audio/mpeg" />
</audio>


<div id="Content">



	<div id="TabsBox">

		<a href="javascript:void(0)" onclick="loadAjaxPage('MainPanel', 'MainBox','liveChatScript')"><div class="tab">Home</div></a>

		<a href="javascript:void(0)" onclick="loadAjaxPage('Forum', 'MainBox','loadMessagesScript')"><div class="tab">Forum</div></a>

		<a href="javascript:void(0)" onclick="loadAjaxPage('About', 'MainBox','')"><div class="tab">About</div></a>



	</div>







	<div id="outerLoginBox">

		<div id="innerLoginBox"></div>

		<a href="javascript:void(0)"><div id="loginTab">Account</div></a>

	</div>



	<div id="MainBox"></div>











</div>



<div id="activationBox">Your account is now activated!  You may log in now.<br/><br/>
<span id="activationBoxSubtext">[This message will self-destruct in 5 seconds]</span>

</div>



</body>

</html>