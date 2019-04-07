<a href="/" class="btn btn-primary mt-3">Back to Posts</a>
<div class="card mt-3">
    <div class="card-header">
        <h1><?php echo h($post['Post']['title']); ?></h1>
    </div>
    <div class="card-body">
        <p><?php echo h($post['Post']['body']); ?></p>
    </div>
    <div class="card-footer">
        Created: <?php echo $post['Post']['created']." by ".$post['User']['username']; ?>
    </div>
</div>

