


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


	<a href="javascript:void(0)" onclick="loadAjaxPage('LobbyPanel?game=<?= $games[$i]['matchID']; ?>', 'MainBox','');">
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