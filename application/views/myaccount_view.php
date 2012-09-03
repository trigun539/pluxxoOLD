<br/><br/><br/><br/><br/><br/><br/>

<h2>My Account</h2>

<div class="loginText" style="width:200px">UserName: <?= $userinfo[0]['username']; ?></div>

<div class="loginText" style="width:200px">Email: <?= $userinfo[0]['email']; ?></div>

<div class="loginText" style="width:200px">Score: <?= $userinfo[0]['score']; ?></div>

<br/><br/>


<input type="submit" class="greenButton" value="Logout" onclick="logOut();" >