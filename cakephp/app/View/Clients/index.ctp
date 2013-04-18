<div class="clients index">
	<h2><?php echo __('Clients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('license_fee'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('license_count'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_card_number'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_card_expiration_month'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_card_expiration_year'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_street'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_city'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_state'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_country'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['license_fee']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['modified']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['license_count']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['credit_card_number']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['credit_card_expiration_month']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['credit_card_expiration_year']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['billing_street']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['billing_city']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['billing_state']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['billing_postcode']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['billing_country']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('controller' => 'internal_phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
