<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $bookings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookings index large-9 medium-8 columns content" style="overflow-x:scroll">
    <h3><?= __('Bookings') ?></h3>
    <table cellpadding="0" cellspacing="0" style="overflow-x:scroll">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookingID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Customers_customerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Yachts_yachtID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paymentStatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paymentPreference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catering') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skipper') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flottielje') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groceries') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transfer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insurence') ?></th>
                <th scope="col"><?= $this->Paginator->sort('childLifejackets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fishinggear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paddleboard') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aggreedToTerms') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?= $this->Number->format($booking->bookingID) ?></td>
                <td><?= $this->Number->format($booking->Customers_customerID) ?></td>
                <td><?= $this->Number->format($booking->Yachts_yachtID) ?></td>
                <td><?= h($booking->status) ?></td>
                <td><?= h($booking->paymentStatus) ?></td>
                <td><?= h($booking->paymentPreference) ?></td>
                <td><?= h($booking->date_start) ?></td>
                <td><?= h($booking->date_end) ?></td>
                <td><?= h($booking->catering) ?></td>
                <td><?= h($booking->skipper) ?></td>
                <td><?= h($booking->flottielje) ?></td>
                <td><?= h($booking->groceries) ?></td>
                <td><?= h($booking->transfer) ?></td>
                <td><?= h($booking->insurence) ?></td>
                <td><?= h($booking->childLifejackets) ?></td>
                <td><?= h($booking->fishinggear) ?></td>
                <td><?= h($booking->paddleboard) ?></td>
                <td><?= h($booking->aggreedToTerms) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $booking->bookingID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->bookingID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->bookingID], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->bookingID)]) ?>
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
