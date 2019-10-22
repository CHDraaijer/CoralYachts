<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yacht $yacht
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Yacht'), ['action' => 'edit', $yacht->yachtID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Yacht'), ['action' => 'delete', $yacht->yachtID], ['confirm' => __('Are you sure you want to delete # {0}?', $yacht->yachtID)]) ?> </li>
        <li><?= $this->Html->link(__('List Yachts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Yacht'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="yachts view large-9 medium-8 columns content">
    <h3><?= h($yacht->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($yacht->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($yacht->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($yacht->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('YachtID') ?></th>
            <td><?= $this->Number->format($yacht->yachtID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yachttypes YachtTypeID') ?></th>
            <td><?= $this->Number->format($yacht->Yachttypes_yachtTypeID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ports PortID') ?></th>
            <td><?= $this->Number->format($yacht->Ports_portID) ?></td>
        </tr>
    </table>
</div>
