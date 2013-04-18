<div class="agents index">
	<h2><?php echo __('Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('extension'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('can_change_password'); ?></th>
			<th><?php echo $this->Paginator->sort('must_change_password'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_name'); ?></th>
			<th><?php echo $this->Paginator->sort('twitter_name'); ?></th>
			<th><?php echo $this->Paginator->sort('linkedin_name'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agents as $agent): ?>
	<tr>
		<td><?php echo h($agent['Agent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agent['Client']['name'], array('controller' => 'clients', 'action' => 'view', $agent['Client']['id'])); ?>
		</td>
		<td><?php echo h($agent['Agent']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['email']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['extension']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['username']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['password']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['can_change_password']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['must_change_password']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['facebook_name']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['twitter_name']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['linkedin_name']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['role']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agent['Agent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agent['Agent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Actions'), array('controller' => 'account_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Action'), array('controller' => 'account_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('controller' => 'internal_phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
