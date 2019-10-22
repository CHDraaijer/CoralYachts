<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Yacht[]|\Cake\Collection\CollectionInterface $yachts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Yacht'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="yachts index large-9 medium-8 columns content">
    <h3><?= __('Yachts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('yachtID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Yachttypes_yachtTypeID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ports_portID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($yachts as $yacht): ?>
            <tr>
                <td><?= $this->Number->format($yacht->yachtID) ?></td>
                <td><?= $this->Number->format($yacht->Yachttypes_yachtTypeID) ?></td>
                <td><?= $this->Number->format($yacht->Ports_portID) ?></td>
                <td><?= h($yacht->status) ?></td>
                <td><?= h($yacht->name) ?></td>
                <td><?= h($yacht->code) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $yacht->yachtID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $yacht->yachtID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $yacht->yachtID], ['confirm' => __('Are you sure you want to delete # {0}?', $yacht->yachtID)]) ?>
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
