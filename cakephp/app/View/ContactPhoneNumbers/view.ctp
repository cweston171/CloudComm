<div class="contactPhoneNumbers view">
<h2><?php  echo __('Contact Phone Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactPhoneNumber['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $contactPhoneNumber['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Mobile'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['is_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Dnc'); ?></dt>
		<dd>
			<?php echo h($contactPhoneNumber['ContactPhoneNumber']['is_dnc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Phone Number'), array('action' => 'edit', $contactPhoneNumber['ContactPhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Phone Number'), array('action' => 'delete', $contactPhoneNumber['ContactPhoneNumber']['id']), null, __('Are you sure you want to delete # %s?', $contactPhoneNumber['ContactPhoneNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Phone Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Phone Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
