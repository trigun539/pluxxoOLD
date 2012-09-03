<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
?>


data:<div id="chatText"><?php for($i=(count($lastmsg)-1); $i>= 0; $i--): ?><?php if($i==0) echo "<div id=chatTextHighlight>";?><b><?= $lastmsg[$i]['username'];?></b>: <?= $lastmsg[$i]['message'];?><?php if($i==0) echo "</div>"; ?><br/><?php endfor; ?></div>

<?php flush(); ?>