<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('header_view'); ?>


<script type="text/javascript">
$(document).ready(function(){

	$('#Content').css('marginTop', '-600px');




    $('#Content').delay(1500).animate(
                { 'marginTop': "50px" }, 2500, 'easeOutBounce');


});
</script>


<body onload="loadAjaxPage('MainPanel', 'MainBox','loadPanelsScript')">







<div id="Content">



	<div id="TabsBox">

		<a href="javascript:void(0)" onclick="loadAjaxPage('MainPanel', 'MainBox','loadPanelsScript')"><div class="tab">Home</div></a>

		<a href="javascript:void(0)" onclick="loadAjaxPage('Forum', 'MainBox','loadMessagesScript')"><div class="tab">Forum</div></a>

		<a href="javascript:void(0)"><div class="tab">About</div></a>


		<a href="javascript:void(0)"><div class="tab" style="margin-left:400px">Login</div></a>
	</div>



	<div id="MainBox"></div>











</div>



</body>

</html>