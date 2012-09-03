
function loginAttempt()
{

	var ajaxRequest;  // The variable that makes Ajax possible!
	
	   try
	   {
			// Opera 8.0+, Firefox, Safari
			ajaxRequest = new XMLHttpRequest();
	   }
	
	   catch (e)
	   {
			// Internet Explorer Browsers
	     try
	     {
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	     }
	
	       catch (e)
	       {
	
	         try
	         {
					ajaxRequest = new ActiveXObject
	                      ("Microsoft.XMLHTTP");
		 }
	           catch (e)
	           {
					// Something went wrong
					alert("Your browser broke!");
					return false;
		   }
	
	         }
       }



	ajaxRequest.onreadystatechange=function()
	{
	 if((ajaxRequest.readyState == 4))
		{
			result = ajaxRequest.responseText;
			var display = document.getElementById('innerLoginBox');
			display.innerHTML = result;
			
			var ob = document.getElementById('registrationJquery'); 
			eval(ob.text);
		 }
		 else if((ajaxRequest.readyState == 1))
		{
			var display = document.getElementById('innerLoginBox');
			display.innerHTML = "<img src=\"/game/assets/ajax-loader.gif\" />";
		}
	 }
	
	var user = document.getElementById('login');
	var pass = document.getElementById('password');
	
	var parameters="user=" + user.value + "&pass=" + pass.value;
	ajaxRequest.open("POST", "/game/index.php/Login", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxRequest.send(parameters);


}