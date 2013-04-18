<div class="phoneNumbers view">
<h2><?php  echo __('Phone Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phoneNumber['Contact']['title'], array('controller' => 'contacts', 'action' => 'view', $phoneNumber['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Mobile'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['is_mobile']); ?>
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
		<dt><?php echo __('Is Dnc'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['is_dnc']); ?>
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
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
