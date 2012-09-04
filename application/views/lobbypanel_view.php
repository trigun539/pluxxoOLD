
<div style="width:560px;height:500px;float:left;padding:10px 10px 10px 10px;">
<h2>Game Options</h2>
<div class="smallBlueBox" style="width:510px;height:430px;float:left;padding:20px 15px 5px 15px;">


<div class="gamesOptionsText" style="width:230px">Game #<?= $gameID ?></div>


<div class="gamesOptionsText" style="width:230px">Creator: <?= $gameInfo[0]['MaxPlayers']; ?></div>

<?php if($IsHost): ?>
<div class="gamesOptionsText" style="width:230px">Mode:
	<select class="gameOptionsDropdown" name="mode">
	<option value="Rumble" selected="selected">Rumble Pit</option>
	<option value="Team">Team vs Team</option>
	<option value="CTF">CTF</option>
	</select>
</div>

<div class="gamesOptionsText" style="width:230px">Map:
	<select class="gameOptionsDropdown" name="map">
	<option value="Rumble" selected="selected">Blood Gulch</option>
	<option value="Team">Terrain</option>
	<option value="CTF">Tron</option>
	<option value="CTF">Pluxopolis</option>
	</select>
</div>

<div class="gamesOptionsText" style="width:230px">Weapons:
	<select class="gameOptionsDropdown" name="weapons">
	<option value="Rumble" selected="selected">Standard</option>
	<option value="Team">Snipers</option>
	<option value="CTF">Explosive</option>
	<option value="CTF">Shotguns</option>
	</select>

</div>

<div class="gamesOptionsText" style="width:230px">Max Players:
	<select class="gameOptionsDropdown" name="maxplayers">
	<option value="Rumble" selected="selected">2</option>
	<option value="Team">3</option>
	<option value="CTF">4</option>
	<option value="CTF">5</option>
	<option value="CTF">6</option>
	<option value="CTF">7</option>
	<option value="CTF">8</option>
	<option value="CTF">9</option>
	<option value="CTF">10</option>
	<option value="CTF">11</option>
	<option value="CTF">12</option>
	</select>
</div>
<?php endif; ?>



<input type="submit" id="submitButton" class="greenButton" style="float:right;margin-top:8px;background:#327FBE;border:1px solid #375269" value="Start Game" onclick="loadAjaxPage('Game', 'MainBox','gameInitScript');" >

</div>
</div>


<div style="height:500px;width:320px;margin:0px;padding:10px 10px 10px 5px;;float:left">
<h2>Chat</h2>


	<div id="chatUsersDiv" style="width:300px;height:150px;float:none;margin-bottom:10px;"></div>
	<div id="chatDiv" style="width:315px;height:278px;float:none;display:block;">
			<div id="lobbyInnerChatDiv" style="width:305px;height:238px;"></div>

			<div id="chatEnterNew" style="width:309px">

				<input id="livechat_msg" class="roundedInput" name="msg" type="text" style="width:290px" onkeypress="CheckKeyEntered(event, <?= $gameID ?>);" />
			</div>
		</div>


	</div>

</div>







<script id="liveChatScript">
		var lastmsg;

		if(typeof(EventSource)!=="undefined")
		  {
		  var source=new EventSource("/game/index.php/LastMessage?gameID=<?= $gameID ?>");
		  source.onmessage=function(event)
		    {

				if(event.data != lastmsg)  //don't retype the same message
				{
				document.getElementById("lobbyInnerChatDiv").innerHTML = event.data + "<br />";
				lastmsg = event.data;
				}
		    };
		  }
		else
		  {
		  document.getElementById("result").innerHTML="Sorry, your browser does not support server-sent events...";
		  }

</script>