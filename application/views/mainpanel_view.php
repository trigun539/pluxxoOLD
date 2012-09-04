

<script id="loadPanelsScript" type="text/javascript" language="JavaScript"></script>





<div id="GameListBox" style="height:490px;width:440px;margin:0px;padding:5px 20px 5px 20px;float:left">

	<h2>Game List</h2>


	<div class="smallBlueBox" style="width:440px;height:425px">

		<div class="gameslistLabels">
				<div class="gameslistID">#</div>
				<div class="gameslistMap">Map</div>
				<div class="gameslistMode">Mode</div>
				<div class="gameslistWeapons">Weapons</div>
				<div class="gameslistPlayers">Players</div>
				<div class="gameslistPrivate">Open</div>
		</div>



	<?php for($i=0; $i<count($games); $i++): ?>


		<a href="javascript:void(0)" onclick="loadAjaxPage('LobbyPanel?game=<?= $games[$i]['matchID']; ?>', 'MainBox','liveChatScript');">
		<div class="gameslistBox">
				<div class="gameslistText" style="width:60px"><?= $games[$i]['matchID']; ?></div>
				<div class="gameslistImage" style="width:60px"><img src="/game/assets/map_bloodgulch.png" /></div>
				<div class="gameslistText" style="width:80px">TvsT</div>
				<div class="gameslistImage" style="width:70px"><img src="/game/assets/weap_shot.png" /></div>
				<div class="gameslistText" style="width:70px"><?= $games[$i]['CurrentPlayers'] ?>/<?= $games[$i]['MaxPlayers'] ?></div>
				<div class="gameslistImage" style="width:50px"><?php if($games[$i]['Password'] != ''): ?><img src="/game/assets/lock.png" /><?php endif; ?></div>

		</div>
		</a>
	<?php endfor; ?>


	</div>


	<input type="submit" id="submitButton" class="greenButton" style="float:right;margin-top:8px;background:#327FBE;border:1px solid #375269" value="Create Game" onclick="postForum()" >



</div>






<div style="height:520px;width:420px;margin:0px;padding:0px;float:left">

	<div id="TopScoresBox" style="height:250px;width:380px;margin:0px;padding:5px 20px 5px 20px;">


		<!--330 wide, 260 high -->


		<h2>Top Scores</h2>

		<div class="smallBlueBox">

			<div class="topScoresLabels">
				<div class="topScoresRank">#</div>
				<div class="topScoresUser">Username</div>
				<div class="topScoresScore">Score</div>
			</div>

			<?php for($i=0; $i<count($scores); $i++): ?>

			<div class="topScoresBox">



				<div class="topScoresRank"><?= ($i+1); ?></div>
				<div class="topScoresUser"><?= $scores[$i]['username']; ?></div>
				<div class="topScoresScore"><?= $scores[$i]['score']; ?></div>

			</div>


			<?php endfor; ?>




		</div>

	</div>






	<div id="LiveChatBox" style="height:250px;width:380px;margin:0px;padding:5px 20px 5px 20px;">

		<h2>Chat</h2>

		<div class="smallBlueBox">

			<div id="chatDiv">
				<div id="innerChatDiv"></div>

				<div id="chatEnterNew">

					<input id="livechat_msg" class="roundedInput" name="msg" type="text" style="width:200px" onkeypress="CheckKeyEntered(event, 0);" />
				</div>
			</div>

			<div id="chatUsersDiv">
			</div>


		</div>



	</div>

</div>







<script id="liveChatScript">
		var lastmsg;

		if(typeof(EventSource)!=="undefined")
		  {
		  var source=new EventSource("/game/index.php/LastMessage?gameID=0");
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
