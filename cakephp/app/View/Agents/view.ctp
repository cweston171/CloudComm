<div class="agents view">
<h2><?php  echo __('Agent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['Client']['name'], array('controller' => 'clients', 'action' => 'view', $agent['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extension'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['extension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Can Change Password'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['can_change_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Must Change Password'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['must_change_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Name'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['facebook_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Name'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['twitter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin Name'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['linkedin_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agent'), array('action' => 'edit', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agent'), array('action' => 'delete', $agent['Agent']['id']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Actions'), array('controller' => 'account_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Action'), array('controller' => 'account_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('controller' => 'internal_phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Account Actions'); ?></h3>
	<?php if (!empty($agent['AccountAction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Agent Id'); ?></th>
		<th><?php echo __('Resource Used'); ?></th>
		<th><?php echo __('Action Taken'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Current Ip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($agent['AccountAction'] as $accountAction): ?>
		<tr>
			<td><?php echo $accountAction['id']; ?></td>
			<td><?php echo $accountAction['agent_id']; ?></td>
			<td><?php echo $accountAction['resource_used']; ?></td>
			<td><?php echo $accountAction['action_taken']; ?></td>
			<td><?php echo $accountAction['notes']; ?></td>
			<td><?php echo $accountAction['created']; ?></td>
			<td><?php echo $accountAction['modified']; ?></td>
			<td><?php echo $accountAction['current_ip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'account_actions', 'action' => 'view', $accountAction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'account_actions', 'action' => 'edit', $accountAction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'account_actions', 'action' => 'delete', $accountAction['id']), null, __('Are you sure you want to delete # %s?', $accountAction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account Action'), array('controller' => 'account_actions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Internal Phone Numbers'); ?></h3>
	<?php if (!empty($agent['InternalPhoneNumber'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Agent Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Sms Enabled'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($agent['InternalPhoneNumber'] as $internalPhoneNumber): ?>
		<tr>
			<td><?php echo $internalPhoneNumber['id']; ?></td>
			<td><?php echo $internalPhoneNumber['client_id']; ?></td>
			<td><?php echo $internalPhoneNumber['agent_id']; ?></td>
			<td><?php echo $internalPhoneNumber['name']; ?></td>
			<td><?php echo $internalPhoneNumber['number']; ?></td>
			<td><?php echo $internalPhoneNumber['sms_enabled']; ?></td>
			<td><?php echo $internalPhoneNumber['created']; ?></td>
			<td><?php echo $internalPhoneNumber['modified']; ?></td>
			<td><?php echo $internalPhoneNumber['is_active']; ?></td>
			<td><?php echo $internalPhoneNumber['type']; ?></td>
			<td><?php echo $internalPhoneNumber['country']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'internal_phone_numbers', 'action' => 'view', $internalPhoneNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'internal_phone_numbers', 'action' => 'edit', $internalPhoneNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'internal_phone_numbers', 'action' => 'delete', $internalPhoneNumber['id']), null, __('Are you sure you want to delete # %s?', $internalPhoneNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
