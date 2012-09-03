
function postForum()
{
	console.log("forum post");
	
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
			var display = document.getElementById('messagesHolder');
			display.innerHTML = result;
			
		 }
		 else if((ajaxRequest.readyState == 1))
		{
			var display = document.getElementById('messagesHolder');
			display.innerHTML += "<div style=top:300px;position:absolute;><img  src=\"/game/assets/ajax-loader.gif\" /></div>";
		}
	 }
	
	var msg = document.getElementById('message');
	
	var parameters="msg=" + msg.value;
	ajaxRequest.open("POST", "/game/index.php/Messages", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxRequest.send(parameters);


}