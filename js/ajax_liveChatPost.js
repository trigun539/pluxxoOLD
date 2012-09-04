

function liveChatPost(msg, gameID)
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
	 if (ajaxRequest.readyState==4)
	 {
	  if (ajaxRequest.status==200 || window.location.href.indexOf("http")==-1)
	  {
	  }
	  else
	  {
	   alert("An error has occured making the request");
	  }
	 }
	}
	var parameters="msg=" + msg + "&gameID=" + gameID;
	
	ajaxRequest.open("POST", "/game/index.php/PostMessage", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxRequest.send(parameters);


}


