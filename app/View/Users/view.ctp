<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($user['User']['username']); ?></h1>

<p><small>Role: <?php echo $user['User']['role']; ?></small></p>
<p><small>Interest: <?php echo $user['User']['interest']; ?></small></p>
<p><small>Created: <?php echo $user['User']['created']; ?></small></p>
