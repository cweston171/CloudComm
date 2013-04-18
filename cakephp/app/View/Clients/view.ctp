<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($client['Client']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License Fee'); ?></dt>
		<dd>
			<?php echo h($client['Client']['license_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License Count'); ?></dt>
		<dd>
			<?php echo h($client['Client']['license_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Card Number'); ?></dt>
		<dd>
			<?php echo h($client['Client']['credit_card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Card Expiration Month'); ?></dt>
		<dd>
			<?php echo h($client['Client']['credit_card_expiration_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Card Expiration Year'); ?></dt>
		<dd>
			<?php echo h($client['Client']['credit_card_expiration_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Street'); ?></dt>
		<dd>
			<?php echo h($client['Client']['billing_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing City'); ?></dt>
		<dd>
			<?php echo h($client['Client']['billing_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing State'); ?></dt>
		<dd>
			<?php echo h($client['Client']['billing_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Postcode'); ?></dt>
		<dd>
			<?php echo h($client['Client']['billing_postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Country'); ?></dt>
		<dd>
			<?php echo h($client['Client']['billing_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($client['Client']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Internal Phone Numbers'), array('controller' => 'internal_phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Internal Phone Number'), array('controller' => 'internal_phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Agents'); ?></h3>
	<?php if (!empty($client['Agent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Extension'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Can Change Password'); ?></th>
		<th><?php echo __('Must Change Password'); ?></th>
		<th><?php echo __('Facebook Name'); ?></th>
		<th><?php echo __('Twitter Name'); ?></th>
		<th><?php echo __('Linkedin Name'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Agent'] as $agent): ?>
		<tr>
			<td><?php echo $agent['id']; ?></td>
			<td><?php echo $agent['client_id']; ?></td>
			<td><?php echo $agent['first_name']; ?></td>
			<td><?php echo $agent['last_name']; ?></td>
			<td><?php echo $agent['email']; ?></td>
			<td><?php echo $agent['extension']; ?></td>
			<td><?php echo $agent['username']; ?></td>
			<td><?php echo $agent['password']; ?></td>
			<td><?php echo $agent['is_active']; ?></td>
			<td><?php echo $agent['can_change_password']; ?></td>
			<td><?php echo $agent['must_change_password']; ?></td>
			<td><?php echo $agent['facebook_name']; ?></td>
			<td><?php echo $agent['twitter_name']; ?></td>
			<td><?php echo $agent['linkedin_name']; ?></td>
			<td><?php echo $agent['role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agents', 'action' => 'view', $agent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agents', 'action' => 'edit', $agent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agents', 'action' => 'delete', $agent['id']), null, __('Are you sure you want to delete # %s?', $agent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contacts'); ?></h3>
	<?php if (!empty($client['Contact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Street2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Twitter Name'); ?></th>
		<th><?php echo __('Facebook Name'); ?></th>
		<th><?php echo __('Linkedin Name'); ?></th>
		<th><?php echo __('Google Plus Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id']; ?></td>
			<td><?php echo $contact['client_id']; ?></td>
			<td><?php echo $contact['type']; ?></td>
			<td><?php echo $contact['title']; ?></td>
			<td><?php echo $contact['first_name']; ?></td>
			<td><?php echo $contact['last_name']; ?></td>
			<td><?php echo $contact['email']; ?></td>
			<td><?php echo $contact['street']; ?></td>
			<td><?php echo $contact['street2']; ?></td>
			<td><?php echo $contact['city']; ?></td>
			<td><?php echo $contact['state']; ?></td>
			<td><?php echo $contact['postcode']; ?></td>
			<td><?php echo $contact['country']; ?></td>
			<td><?php echo $contact['created']; ?></td>
			<td><?php echo $contact['modified']; ?></td>
			<td><?php echo $contact['twitter_name']; ?></td>
			<td><?php echo $contact['facebook_name']; ?></td>
			<td><?php echo $contact['linkedin_name']; ?></td>
			<td><?php echo $contact['google_plus_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Internal Phone Numbers'); ?></h3>
	<?php if (!empty($client['InternalPhoneNumber'])): ?>
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
		foreach ($client['InternalPhoneNumber'] as $internalPhoneNumber): ?>
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
