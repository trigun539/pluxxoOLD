<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

        @font-face {
            font-family: Exo;
            font-weight: bold;
            src: url('/halo6/assets/font/Exo-Bold.otf');
        }

        @font-face {
            font-family: Exo;
            font-weight: normal;
            src: url('/halo6/assets/font/Exo-Regular.otf');
        }

        @font-face {
            font-family: Cuprum;
            src: url('/halo6/assets/font/Cuprum-Regular.ttf');
        }

        #forum {
            width: 850px;
            height: 520px;
            margin: 0px;
            padding: 0px;
            float: left;
            background: transparent;

            font-family: Exo;
        }

        #forum h2 {
            display: block;
            margin: 10px 0px 10px 10px;
            padding: 0px;
            /*color: #FFFFFF; */
            color: #123456;
            font-size: 24px;
            line-height: 24px;

            font-family: Exo;
            font-weight: bold;
        }

        #forum #messages {
            width: 830px;
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
            width: 830px;
        }

        #forum #messages div p {
            margin-left: 10px;
        }

        #forum #messages div p.createdBy {
            float: right;
            font-size: 14px;
            margin-right: 10px;
            color: #5fe478;
        }

        #forum #forumForm {
            float: left;
            width: 830px;
            height: 166px;
            margin-top: 0px;
            margin-left: 10px;

        }

        #forum #forumForm form {
            position: relative;
        }

        #forum #forumForm textarea {
            width: 807px;
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
            position: absolute;
            bottom: 10px;
            right: 10px;
            z-index: 10;
            padding: 5px 20px;
            background: #47b85b;
            border: 1px solid #5fe478;
            color: #ffffff;
            font-size: 18px;

            font-weight: bold;

            -webkit-border-radius: 3px;
            border-radius: 3px;

            -webkit-box-shadow: 2px 2px 5px 1px #bbbbbb;
            box-shadow: 2px 2px 5px 1px #bbbbbb;

        }

        #forum #forumForm #submitButton:hover {
            background: #5fe478;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

            /* Track */
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

            /* Handle */
        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: #337fbe;
            -webkit-box-shadow: inset 0 0 6px #337fbe;
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #337fbe;
        }

    </style>

    <script src="/halo6/game/js/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="forum">
        <h2>Forum</h2>

        <div id="messagesHolder" style="height: 300px;">

        </div>

        <div id="forumForm">
            <form action="Forum" method="POST">
                <textarea name="message" autofocus="autofocus">

                </textarea>
                <input type="submit" id="submitButton" value="Post" >
            </form>
        </div>

    </div>
    <script id="loadMessagesScript" type="text/javascript">
        $("#messagesHolder").load("/halo6/game/index.php/Messages");
        $("#submitButton").click(function(){
            // load about page on click
            $("#messagesHolder").load("Messages");
        });

    </script>
</body>

</html>