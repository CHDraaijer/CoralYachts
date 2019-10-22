<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yachttype[]|\Cake\Collection\CollectionInterface $yachttypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Yachttype'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="yachttypes index large-9 medium-8 columns content">
    <h3><?= __('Yachttypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('yachtTypeID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('depth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('engine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('1pcabins') ?></th>
                <th scope="col"><?= $this->Paginator->sort('2pcabins') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beds') ?></th>
                <th scope="col"><?= $this->Paginator->sort('toilets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('showers') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($yachttypes as $yachttype): ?>
            <tr>
                <td><?= $this->Number->format($yachttype->yachtTypeID) ?></td>
                <td><?= h($yachttype->name) ?></td>
                <td><?= h($yachttype->code) ?></td>
                <td><?= h($yachttype->type) ?></td>
                <td><?= $this->Number->format($yachttype->length) ?></td>
                <td><?= $this->Number->format($yachttype->depth) ?></td>
                <td><?= h($yachttype->engine) ?></td>
                <td><?= $this->Number->format($yachttype->sail) ?></td>
                <td><?= $this->Number->format($yachttype->1pcabins) ?></td>
                <td><?= $this->Number->format($yachttype->2pcabins) ?></td>
                <td><?= $this->Number->format($yachttype->beds) ?></td>
                <td><?= $this->Number->format($yachttype->toilets) ?></td>
                <td><?= $this->Number->format($yachttype->showers) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $yachttype->yachtTypeID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $yachttype->yachtTypeID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $yachttype->yachtTypeID], ['confirm' => __('Are you sure you want to delete # {0}?', $yachttype->yachtTypeID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
