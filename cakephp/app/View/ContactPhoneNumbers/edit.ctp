<div class="contactPhoneNumbers form">
<?php echo $this->Form->create('ContactPhoneNumber'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact Phone Number'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('number');
		echo $this->Form->input('is_mobile');
		echo $this->Form->input('is_dnc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactPhoneNumber.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactPhoneNumber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Phone Numbers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
