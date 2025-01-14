<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Setting'), ['action' => 'edit', $setting->settingID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setting'), ['action' => 'delete', $setting->settingID], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->settingID)]) ?> </li>
        <li><?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="settings view large-9 medium-8 columns content">
    <h3><?= h($setting->settingID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Key') ?></th>
            <td><?= h($setting->key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SettingID') ?></th>
            <td><?= $this->Number->format($setting->settingID) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Value') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->value)); ?>
    </div>
</div>
