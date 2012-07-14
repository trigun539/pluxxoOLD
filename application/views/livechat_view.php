






<h2>Chat</h2>

<div class="smallBlueBox">

	<div id="chatDiv">
		<div id="innerChatDiv"></div>

		<div id="chatEnterNew">

			<input id="livechat_msg" class="roundedInput" name="msg" type="text" style="width:200px" onkeypress="CheckKeyEntered(event)" />
		</div>
	</div>

	<div id="chatUsersDiv">
	</div>


</div>




<script id="liveChatScript">
var lastmsg;

if(typeof(EventSource)!=="undefined")
  {
  var source=new EventSource("/halo6/game/index.php/LastMessage");
  source.onmessage=function(event)
    {

		if(event.data != lastmsg)  //don't retype the same message
		{
		document.getElementById("innerChatDiv").innerHTML = event.data + "<br />";
		lastmsg = event.data;
		}
    };
  }
else
  {
  document.getElementById("result").innerHTML="Sorry, your browser does not support server-sent events...";
  }

</script>