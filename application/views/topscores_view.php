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

		<div class="topScoresRank"><?= ($i+1) ?></div>
		<div class="topScoresUser"><?=$scores[$i]['username'] ?></div>
		<div class="topScoresScore"><?=$scores[$i]['score'] ?></div>

	</div>


<?php endfor; ?>


<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>

<div class="topScoresBox">
		<div class="topScoresRank">#</div>
		<div class="topScoresUser">username</div>
		<div class="topScoresScore">score</div>
</div>


</div>

