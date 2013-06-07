<div class="agents index">
    <h2><?php echo __('Agents Manager'); ?></h2>
    
    <!-- Testing Only -->
    <pre>
    <?php var_dump($authResponse); ?>
    </pre>
    <!-- /Testing Only -->
    
    <?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?>
    
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('extension'); ?></th>
            <th><?php echo $this->Paginator->sort('username'); ?></th>
            <th><?php echo $this->Paginator->sort('is_active'); ?></th>
            <th><?php echo $this->Paginator->sort('role'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($agents as $agent): ?>
    <tr>
        <td><?php echo h($agent['Agent']['id']); ?>&nbsp;</td>
        <td><?php echo h($agent['Agent']['first_name']); ?>&nbsp;</td>
        <td><?php echo h($agent['Agent']['last_name']); ?>&nbsp;</td>
        <td><?php echo h($agent['Agent']['email']); ?>&nbsp;</td>
        <td><?php echo h($agent['Agent']['extension']); ?>&nbsp;</td>
        <td><?php echo h($agent['Agent']['username']); ?>&nbsp;</td>
        <td><?php
                if($agent['Agent']['is_active'] == 1) {
                    echo "Active";
                } else {
                    echo "Inactive";
                }
            ?>&nbsp;</td>
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
    ?>    </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>