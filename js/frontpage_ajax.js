

//Browser Support Code
function loadAjaxForum()
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




	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if((ajaxRequest.readyState == 4))   //loaded
		{
			var display = document.getElementById('MainBox');
            display.innerHTML = ajaxRequest.responseText;
        }
        else if((ajaxRequest.readyState == 1))  //loading icon
		{
			var display = document.getElementById('MainBox');
			display.innerHTML = "<div style=\"text-align:center;margin-top:50px;\"><img src=\"/halo6/game/assets/ajax-loader.gif\" /></div>";
        }
	}



    var link = "/halo6/game/index.php/Forum";
    ajaxRequest.open("GET", link, true);
    ajaxRequest.send(null);
}
