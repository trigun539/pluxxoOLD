function CheckKeyEntered(e)
{
    if (e.keyCode == 13)   //user pressed enter, run script
    {
        var msg = document.getElementById("livechat_msg");

        if(msg != "")
        {
        	liveChatPost(msg.value);
        }

        msg.value = "";
    }
}