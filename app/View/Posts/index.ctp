<h1>Blog posts</h1>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add'),
    array('class' => 'btn btn-primary mb-1'));
?>
<table class="table">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['User']['username']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id']),
                    array('class' => 'btn btn-primary btn-sm')
                );
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('class' => 'btn btn-danger btn-sm ml-1', 'confirm' => 'Are you sure you want to delete this post? This action cannot be reversed.')
                );
            ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>