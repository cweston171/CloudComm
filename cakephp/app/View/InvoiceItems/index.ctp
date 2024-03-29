<div class="invoiceItems index">
	<h2><?php echo __('Invoice Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('price_per_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('tax'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('line_item_total'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoiceItems as $invoiceItem): ?>
	<tr>
		<td><?php echo h($invoiceItem['InvoiceItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoiceItem['Invoice']['name'], array('controller' => 'invoices', 'action' => 'view', $invoiceItem['Invoice']['id'])); ?>
		</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['name']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['modified']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['price_per_unit']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['unit_qty']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['tax']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['status']); ?>&nbsp;</td>
		<td><?php echo h($invoiceItem['InvoiceItem']['line_item_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoiceItem['InvoiceItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoiceItem['InvoiceItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoiceItem['InvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $invoiceItem['InvoiceItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
