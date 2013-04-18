<div class="internalPhoneNumbers form">
<?php echo $this->Form->create('InternalPhoneNumber'); ?>
	<fieldset>
		<legend><?php echo __('Edit Internal Phone Number'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('agent_id');
		echo $this->Form->input('name');
		echo $this->Form->input('number');
		echo $this->Form->input('sms_enabled');
		echo $this->Form->input('is_active');
		echo $this->Form->input('type');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InternalPhoneNumber.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InternalPhoneNumber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
