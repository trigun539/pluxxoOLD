<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
?>


data:<div id="chatText"><b><?=$lastmsg[4]['username']?></b>: <?=$lastmsg[4]['message']?><br/><b><?=$lastmsg[3]['username']?></b>: <?=$lastmsg[3]['message']?><br/><b><?=$lastmsg[2]['username']?></b>: <?=$lastmsg[2]['message']?><br/><b><?=$lastmsg[1]['username']?></b>: <?=$lastmsg[1]['message']?><br/><div id="chatTextHighlight"><b><?=$lastmsg[0]['username']?></b>: <?=$lastmsg[0]['message']?></div><br/></div>

<?php flush(); ?>