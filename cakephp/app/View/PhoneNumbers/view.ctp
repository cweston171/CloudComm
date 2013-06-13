<div class="phoneNumbers view">
<h2><?php  echo __('Phone Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phoneNumber['Client']['name'], array('controller' => 'clients', 'action' => 'view', $phoneNumber['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phoneNumber['Agent']['username'], array('controller' => 'agents', 'action' => 'view', $phoneNumber['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phoneNumber['Campaign']['id'], array('controller' => 'campaigns', 'action' => 'view', $phoneNumber['Campaign']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms Enabled'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['sms_enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Phone Number'), array('action' => 'edit', $phoneNumber['PhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Phone Number'), array('action' => 'delete', $phoneNumber['PhoneNumber']['id']), null, __('Are you sure you want to delete # %s?', $phoneNumber['PhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Phone Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
