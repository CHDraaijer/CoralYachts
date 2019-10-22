<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Port $port
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ports form large-9 medium-8 columns content">
    <?= $this->Form->create($port) ?>
    <fieldset>
        <legend><?= __('Add Port') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('contactperson');
            echo $this->Form->control('contactphone');
            echo $this->Form->control('contactemail');
            echo $this->Form->control('facilities');
            echo $this->Form->control('directions');
            echo $this->Form->control('parking');
            echo $this->Form->control('catering');
            echo $this->Form->control('skipper');
            echo $this->Form->control('flottielje');
            echo $this->Form->control('groceries');
            echo $this->Form->control('transfer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
