<div class="internalPhoneNumbers index">
	<h2><?php echo __('Internal Phone Numbers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('sms_enabled'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($internalPhoneNumbers as $internalPhoneNumber): ?>
	<tr>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($internalPhoneNumber['Client']['name'], array('controller' => 'clients', 'action' => 'view', $internalPhoneNumber['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($internalPhoneNumber['Agent']['username'], array('controller' => 'agents', 'action' => 'view', $internalPhoneNumber['Agent']['id'])); ?>
		</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['name']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['number']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['sms_enabled']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['created']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['modified']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['type']); ?>&nbsp;</td>
		<td><?php echo h($internalPhoneNumber['InternalPhoneNumber']['country']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $internalPhoneNumber['InternalPhoneNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $internalPhoneNumber['InternalPhoneNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $internalPhoneNumber['InternalPhoneNumber']['id']), null, __('Are you sure you want to delete # %s?', $internalPhoneNumber['InternalPhoneNumber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
