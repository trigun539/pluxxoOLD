<div id="messages">
    <?php foreach ($users as $user){ ?>
    <div>
        <p><?php echo $user['message'] ?></p>
        <p class="createdBy">Posted by: <?php echo $user['username'] ?> <?php echo $user['created'] ?></p>
    </div>
    <hr />
    <?php } ?>

</div>