<div class="agents form">
<?php echo $this->Form->create('Agent'); ?>
    <fieldset>
        <legend><?php echo __('Agent Login'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
 