<div class="invoiceItems view">
<h2><?php  echo __('Invoice Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoiceItem['Invoice']['name'], array('controller' => 'invoices', 'action' => 'view', $invoiceItem['Invoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Per Unit'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['price_per_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Qty'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['unit_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line Item Total'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['line_item_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice Item'), array('action' => 'edit', $invoiceItem['InvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice Item'), array('action' => 'delete', $invoiceItem['InvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $invoiceItem['InvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
