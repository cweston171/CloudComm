<div class="internalPhoneNumbers view">
<h2><?php  echo __('Internal Phone Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($internalPhoneNumber['Client']['name'], array('controller' => 'clients', 'action' => 'view', $internalPhoneNumber['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($internalPhoneNumber['Agent']['username'], array('controller' => 'agents', 'action' => 'view', $internalPhoneNumber['Agent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms Enabled'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['sms_enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($internalPhoneNumber['InternalPhoneNumber']['country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Internal Phone Number'), array('action' => 'edit', $internalPhoneNumber['InternalPhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Internal Phone Number'), array('action' => 'delete', $internalPhoneNumber['InternalPhoneNumber']['id']), null, __('Are you sure you want to delete # %s?', $internalPhoneNumber['InternalPhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
