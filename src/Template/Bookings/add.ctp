<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookings form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Add Booking') ?></legend>
        <?php
            echo $this->Form->control('Customers_customerID');
            echo $this->Form->control('Yachts_yachtID');
            echo $this->Form->control('status');
            echo $this->Form->control('paymentStatus');
            echo $this->Form->control('paymentPreference');
            echo $this->Form->control('date_start', ['empty' => true]);
            echo $this->Form->control('date_end', ['empty' => true]);
            echo $this->Form->input('catering',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('skipper',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('flottielje',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('groceries',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('transfer',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('insurence',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('childLifejackets',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('fishinggear',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('paddleboard',array('type'=>'select','options'=>['N', 'Y']));
            echo $this->Form->control('aggreedToTerms',array('type'=>'select','options'=>['N', 'Y']));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
