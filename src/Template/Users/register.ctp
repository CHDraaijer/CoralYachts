<head>
    <title>Website</title>
</head>
<html>
<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Register</h2>
        <?= $this->Form->create($user); ?>
            <?= $this->Form->input('firstname'); ?>
            <?= $this->Form->input('lastname'); ?>
            <?= $this->Form->input('address'); ?>
            <?= $this->Form->input('zipcode'); ?>
            <?= $this->Form->input('city'); ?>
            <?= $this->Form->input('country'); ?>
            <?= $this->Form->input('phone'); ?>
            <?= $this->Form->input('email', array('type' => 'email')); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
            <?= $this->Form->submit('Register', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>
</html>
