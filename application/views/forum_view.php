<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

        @font-face {
            font-family: Exo;
            font-weight: bold;
            src: url('/assets/font/Exo-Bold.otf');
        }

        @font-face {
            font-family: Exo;
            font-weight: normal;
            src: url('/assets/font/Exo-Regular.otf');
        }

        @font-face {
            font-family: Cuprum;
            src: url('/assets/font/Cuprum-Regular.ttf');
        }


        #forum #messages {
            width: 910px;
            height: 366px;
            overflow-y: scroll;
            overflow-x: hidden;
            float: left;
            margin-left: 10px;
            color: #FFFFFF;
            background: #0a1e30;

            -webkit-border-radius: 5px 5px 0px 0px;
            border-radius: 5px 5px 0px 0px;

            -webkit-box-shadow: inset 2px 2px 20px 1px #000000;
            box-shadow: inset 2px 2px 20px 1px #000000;

            opacity: .82;
        }

        #forum hr {
            border: 1px solid #337fbe;
        }

        #forum #messages div {
            float: left;
            width: 900px;
        }

        #forum #messages div p {
            margin-left: 10px;
            font-size: 12px;
            text-align:left;
            font-family: Exo;
        }

        #forum #messages div p.createdBy {
            float: left;
            font-size: 12px;
            margin-right: 10px;
            color: #FFE47D;
            font-family: Exo;
        }

        #forum #messages div p.createdTime {
			float: right;
			font-size: 12px;
			margin-right: 10px;
			color: #5fe478;
			font-family: Exo;
        }

        #forum #forumForm {
            float: left;
            width: 910px;
            height: 86px;
            margin-top: 0px;
            margin-left: 10px;

        }

        #forum #forumForm form {
            position: relative;
        }

        #forum #forumForm textarea {
            width: 887px;
            height: 80px;
            color: #717171;

            padding: 10px;

            border: 1px solid #CCCCCC;

            -webkit-box-shadow: inset 2px 2px 10px 1px #bbbbbb;
            box-shadow: inset 2px 2px 10px 1px #bbbbbb;

            -webkit-border-radius: 0px 0px 5px 5px;
            border-radius: 0px 0px 5px 5px;

            resize: none;

        }

        #forum #forumForm #submitButton {
        	position:relative;
        	bottom: 40px;
        	left: 412px;
        }

        #forum #forumForm #submitButton:hover {
            background: #5fe478;
        }


    </style>

    <script src="/game/js/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="forum">
        <h2>Forum</h2>

        <div id="messagesHolder" style="height: 300px;">

        </div>

        <div id="forumForm">
			<textarea id="message" name="message" <?php if(!isset($loggedin)): ?> disabled="disabled"<?php endif; ?> autofocus="autofocus"><?php if(!isset($loggedin)): ?>Guests can't post in the forum, bro<?php endif; ?></textarea>
			<input type="submit" id="submitButton" class="greenButton" value="Post" onclick="postForum()" >
        </div>

    </div>
    <script id="loadMessagesScript" type="text/javascript">
		loadAjaxPage('Messages', 'messagesHolder','');
    </script>
</body>

</html>