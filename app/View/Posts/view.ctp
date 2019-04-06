
<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']." by ".$post['User']['username']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>