<div class="container-fluid">
<h1>Log In</h1>
<?php echo $this->Flash->render('auth'); ?>
<?php
echo $this->Form->create('User', array(
'role' => 'form',
'inputDefaults' => array(
    'format' => array('label', 'input', 'error'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
)));
echo $this->Form->input('username', array('type' => 'text'));
echo $this->Form->input('password');
echo $this->Form->submit('Log In', array('class' => 'btn btn-primary mb-3'));
echo $this->Form->end();

echo $this->Html->link('Don\'t have an account? Make one here', '/users/register');
?>
</div>