<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->bookingID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->bookingID], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->bookingID)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookings view large-9 medium-8 columns content">
    <h3><?= h($booking->bookingID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($booking->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PaymentStatus') ?></th>
            <td><?= h($booking->paymentStatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PaymentPreference') ?></th>
            <td><?= h($booking->paymentPreference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catering') ?></th>
            <td><?= h($booking->catering) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skipper') ?></th>
            <td><?= h($booking->skipper) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flottielje') ?></th>
            <td><?= h($booking->flottielje) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groceries') ?></th>
            <td><?= h($booking->groceries) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer') ?></th>
            <td><?= h($booking->transfer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insurence') ?></th>
            <td><?= h($booking->insurence) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChildLifejackets') ?></th>
            <td><?= h($booking->childLifejackets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fishinggear') ?></th>
            <td><?= h($booking->fishinggear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paddleboard') ?></th>
            <td><?= h($booking->paddleboard) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AggreedToTerms') ?></th>
            <td><?= h($booking->aggreedToTerms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookingID') ?></th>
            <td><?= $this->Number->format($booking->bookingID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customers CustomerID') ?></th>
            <td><?= $this->Number->format($booking->Customers_customerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yachts YachtID') ?></th>
            <td><?= $this->Number->format($booking->Yachts_yachtID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Start') ?></th>
            <td><?= h($booking->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date End') ?></th>
            <td><?= h($booking->date_end) ?></td>
        </tr>
    </table>
</div>
