<div class="container-fluid">
<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array(
'role' => 'form',
'inputDefaults' => array(
    'format' => array('label', 'input', 'error'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
)));
echo $this->Form->input('title', array('type' => 'text'));
echo $this->Form->input('body', array('rows' => '5'));
echo $this->Form->submit('Save Post', array('class' => 'btn btn-primary'));
echo $this->Form->end();
?>

</div>