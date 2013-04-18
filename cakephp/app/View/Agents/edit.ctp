<div class="agents form">
<?php echo $this->Form->create('Agent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('extension');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('is_active');
		echo $this->Form->input('can_change_password');
		echo $this->Form->input('must_change_password');
		echo $this->Form->input('facebook_name');
		echo $this->Form->input('twitter_name');
		echo $this->Form->input('linkedin_name');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Agent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Actions'), array('controller' => 'account_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Action'), array('controller' => 'account_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('controller' => 'internal_phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
