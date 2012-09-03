<div id="messages">
    <?php foreach ($users as $user){ ?>
    <div>
        <p><?= $user['message']; ?></p>
        <p class="createdBy"><?= $user['username']; ?></p>
        <p class="createdTime"><?= date("F j, Y g:i a", strtotime($user['created'])); ?></p>
    </div>
    <hr />
    <?php } ?>

</div>