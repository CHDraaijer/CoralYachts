<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Port $port
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Port'), ['action' => 'edit', $port->portID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Port'), ['action' => 'delete', $port->portID], ['confirm' => __('Are you sure you want to delete # {0}?', $port->portID)]) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ports view large-9 medium-8 columns content">
    <h3><?= h($port->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($port->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($port->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($port->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contactperson') ?></th>
            <td><?= h($port->contactperson) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contactphone') ?></th>
            <td><?= h($port->contactphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contactemail') ?></th>
            <td><?= h($port->contactemail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catering') ?></th>
            <td><?= h($port->catering) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skipper') ?></th>
            <td><?= h($port->skipper) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flottielje') ?></th>
            <td><?= h($port->flottielje) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groceries') ?></th>
            <td><?= h($port->groceries) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer') ?></th>
            <td><?= h($port->transfer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PortID') ?></th>
            <td><?= $this->Number->format($port->portID) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Facilities') ?></h4>
        <?= $this->Text->autoParagraph(h($port->facilities)); ?>
    </div>
    <div class="row">
        <h4><?= __('Directions') ?></h4>
        <?= $this->Text->autoParagraph(h($port->directions)); ?>
    </div>
    <div class="row">
        <h4><?= __('Parking') ?></h4>
        <?= $this->Text->autoParagraph(h($port->parking)); ?>
    </div>
</div>
