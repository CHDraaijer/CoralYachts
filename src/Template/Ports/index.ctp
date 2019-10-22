<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Port[]|\Cake\Collection\CollectionInterface $ports
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ports index large-9 medium-8 columns content">
    <h3><?= __('Ports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('portID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contactperson') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contactphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contactemail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catering') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skipper') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flottielje') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groceries') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transfer') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ports as $port): ?>
            <tr>
                <td><?= $this->Number->format($port->portID) ?></td>
                <td><?= h($port->name) ?></td>
                <td><?= h($port->city) ?></td>
                <td><?= h($port->country) ?></td>
                <td><?= h($port->contactperson) ?></td>
                <td><?= h($port->contactphone) ?></td>
                <td><?= h($port->contactemail) ?></td>
                <td><?= h($port->catering) ?></td>
                <td><?= h($port->skipper) ?></td>
                <td><?= h($port->flottielje) ?></td>
                <td><?= h($port->groceries) ?></td>
                <td><?= h($port->transfer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $port->portID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $port->portID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $port->portID], ['confirm' => __('Are you sure you want to delete # {0}?', $port->portID)]) ?>
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
