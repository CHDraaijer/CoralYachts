<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yachttype $yachttype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $yachttype->yachtTypeID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $yachttype->yachtTypeID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Yachttypes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="yachttypes form large-9 medium-8 columns content">
    <?= $this->Form->create($yachttype) ?>
    <fieldset>
        <legend><?= __('Edit Yachttype') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('code');
            echo $this->Form->control('type');
            echo $this->Form->control('length');
            echo $this->Form->control('depth');
            echo $this->Form->control('engine');
            echo $this->Form->control('sail');
            echo $this->Form->control('1pcabins');
            echo $this->Form->control('2pcabins');
            echo $this->Form->control('beds');
            echo $this->Form->control('toilets');
            echo $this->Form->control('showers');
            echo $this->Form->control('gear');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
