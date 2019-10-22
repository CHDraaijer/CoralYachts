<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yachttype $yachttype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Yachttype'), ['action' => 'edit', $yachttype->yachtTypeID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Yachttype'), ['action' => 'delete', $yachttype->yachtTypeID], ['confirm' => __('Are you sure you want to delete # {0}?', $yachttype->yachtTypeID)]) ?> </li>
        <li><?= $this->Html->link(__('List Yachttypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Yachttype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="yachttypes view large-9 medium-8 columns content">
    <h3><?= h($yachttype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($yachttype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($yachttype->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($yachttype->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Engine') ?></th>
            <td><?= h($yachttype->engine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('YachtTypeID') ?></th>
            <td><?= $this->Number->format($yachttype->yachtTypeID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= $this->Number->format($yachttype->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Depth') ?></th>
            <td><?= $this->Number->format($yachttype->depth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sail') ?></th>
            <td><?= $this->Number->format($yachttype->sail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('1pcabins') ?></th>
            <td><?= $this->Number->format($yachttype->1pcabins) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('2pcabins') ?></th>
            <td><?= $this->Number->format($yachttype->2pcabins) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beds') ?></th>
            <td><?= $this->Number->format($yachttype->beds) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Toilets') ?></th>
            <td><?= $this->Number->format($yachttype->toilets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Showers') ?></th>
            <td><?= $this->Number->format($yachttype->showers) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gear') ?></h4>
        <?= $this->Text->autoParagraph(h($yachttype->gear)); ?>
    </div>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($yachttype->text)); ?>
    </div>
</div>
