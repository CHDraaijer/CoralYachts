<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yacht $yacht
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $yacht->yachtID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $yacht->yachtID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Yachts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="yachts form large-9 medium-8 columns content">
    <?= $this->Form->create($yacht) ?>
    <fieldset>
        <legend><?= __('Edit Yacht') ?></legend>
        <?php
            echo $this->Form->control('Yachttypes_yachtTypeID');
            echo $this->Form->control('Ports_portID');
            echo $this->Form->control('status');
            echo $this->Form->control('name');
            echo $this->Form->control('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
