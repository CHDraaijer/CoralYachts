<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booking->bookingID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booking->bookingID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookings form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Edit Booking') ?></legend>
        <?php
            echo $this->Form->control('Customers_customerID');
            echo $this->Form->control('Yachts_yachtID');
            echo $this->Form->control('status');
            echo $this->Form->control('paymentStatus');
            echo $this->Form->control('paymentPreference');
            echo $this->Form->control('date_start', ['empty' => true]);
            echo $this->Form->control('date_end', ['empty' => true]);
            echo $this->Form->control('catering');
            echo $this->Form->control('skipper');
            echo $this->Form->control('flottielje');
            echo $this->Form->control('groceries');
            echo $this->Form->control('transfer');
            echo $this->Form->control('insurence');
            echo $this->Form->control('childLifejackets');
            echo $this->Form->control('fishinggear');
            echo $this->Form->control('paddleboard');
            echo $this->Form->control('aggreedToTerms');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
