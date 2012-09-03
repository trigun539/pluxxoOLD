

//Browser Support Code
function loadAjaxPage(pagename, divname, innerscripttag)
{

console.log("Page:" + pagename + ",Div:" + divname + ",Scripttag:" + innerscripttag);


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
		if((ajaxRequest.readyState == 4))
		{
			result = ajaxRequest.responseText;
			var display = document.getElementById(divname);
			display.innerHTML = result;
			
			
			
			
			if(innerscripttag != '')
			{
			
				var ob = document.getElementById(innerscripttag); 
				eval(ob.text);
			
			}
			
                }
                else if((ajaxRequest.readyState == 1))
		{
			var display = document.getElementById(divname);
			display.innerHTML = "<img src=\"/game/assets/ajax-loader.gif\" />";
                }
	}

    
    
    var link = "/game/index.php/" + pagename;
    ajaxRequest.open("GET", link, true);
    ajaxRequest.send(null);
}


