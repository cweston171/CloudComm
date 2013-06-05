<div class="main_actions relative" style="height: 400px !important;">
    <ul>
        <li id="listAgentsLink" class="active mainAction">
            <?php
                echo $this->Html->link('<span class="txt">List Agents</span><div class="clear"></div>',array('action'=>'index'), array('escape'=>false));
            ?>
        </li>
        <li id="listClientsLink" class="mainAction">
            <?php
                echo $this->Html->link('<span class="txt">List Clients</span><div class="clear"></div>',array('controller' => 'Clients', 'action' => 'index'), array('escape'=>false))
            ?>
        </li>
        <li id="newClientLink" class="mainAction">
            <?php
                echo $this->Html->link('<span class="txt">New Client</span><div class="clear"></div>',array('controller' => 'Clients', 'action' => 'add'), array('escape'=>false))
            ?>
        </li>
        <li id="listAccountActionsLink" class="mainAction">
            <?php
                echo $this->Html->link('<span class="txt">List Account Actions</span><div class="clear"></div>',array('controller' => 'AccountActions', 'action' => 'index'), array('escape'=>false))
            ?>
        </li>
        <li id="newAccountLink" class="mainAction">
            <?php
                echo $this->Html->link('<span class="txt">New Account Action</span><div class="clear"></div>',array('controller' => 'AccountActions', 'action' => 'add'), array('escape'=>false))
            ?>
        </li>
        <li id="listInternalPhonesLink" class="mainAction">
            <?php
            echo $this->Html->link('<span class="txt">Internal Numbers</span><div class="clear"></div>',array('controller' => 'InternalPhoneNumbers', 'action' => 'index'), array('escape'=>false))
            ?>
        </li>
        <li id="newInternalPhoneNumber" class="mainAction">
            <?php
            echo $this->Html->link('<span class="txt">New Internal Number</span><div class="clear"></div>',array('controller' => 'InternalPhoneNumbers', 'action' => 'add'), array('escape'=>false))
            ?>
        </li>
    </ul>
</div>
<div class="agents form left width50" style="padding: 8px;">
<?php echo $this->Form->create('Agent'); ?>
        <h2>Add New Agent:</h2>
        <div class="field width30 MB20">
            <?php echo $this->Form->input('client_id', array('class'=>'inputBox'));?>
        </div>
        <div class="field left MB5" style="width: 48%;">
            <?php echo $this->Form->input('first_name', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field right MB5" style="width: 50%;">
            <?php echo $this->Form->input('last_name', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field width60 left clear MB5">
            <?php echo $this->Form->input('email', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field right MB5" style="width: 38%;">
            <?php echo $this->Form->input('extension', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="clear MB20"></div>
        <div class="field left width40 MB10">
            <?php echo $this->Form->input('username', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field left width40 MB10 ML5">
            <?php echo $this->Form->input('password', array('class'=>'inputBox','label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div id="checks" class="field width100 MB20 clear">
            <?php
                echo $this->Form->input('is_active');
                echo $this->Form->input('can_change_password');
                echo $this->Form->input('must_change_password');
            ?>
        </div>
        <div class="clear"></div>
        <div class="field width30 left MB20">
            <?php echo $this->Form->input('facebook_name', array('class'=>'inputBox', 'label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field width30 left MB20 ML10">
            <?php echo $this->Form->input('twitter_name', array('class'=>'inputBox', 'label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field width30 left MB20 ML10">
            <?php echo $this->Form->input('linkedin_name', array('class'=>'inputBox', 'label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="field width40 clear">
            <?php echo $this->Form->input('role', array('class'=>'inputBox', 'label'=>array('class'=>'labelOver'))); ?>
        </div>
        <div class="MT20 textRight">
            <button id="addNewAgent_submit">Add New Agent</button>
        </div>
<?php echo $this->Form->end(); ?>
</div>
<div class="clear"></div>
<script type="text/javascript">
    $(function(){
        $('.labelOver').labelOver('over');
        $('#checks').buttonset();
        $('#addNewAgent_submit').button().click(function(){
            document.getElementById('AgentAddForm').submit();
        });
    })
</script>