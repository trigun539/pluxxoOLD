function CheckKeyEntered(e, gameID)
{
    if (e.keyCode == 13)   //user pressed enter, run script
    {
        var msg = document.getElementById("livechat_msg");

        if(msg != "")
        {
        	liveChatPost(msg.value, gameID);
        }

        msg.value = "";
    }
}