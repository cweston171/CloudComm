<?php
    // stuff
?>
<ul>
    <li id="summary_btn" class="mainAction">
        <a href="#" onClick="return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/summary.png', array('alt' => 'Summary', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Summary
            </span>
            <div class="clear"></div>
        </a>
    </li>
    <li id="currCall_btn" class="mainAction">
        <a href="#" onClick="$.fn.loadCurrCall();return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/currentCall.png', array('alt' => 'Current Call', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Current Call
            </span>
            <div class="clear"></div>
        </a>
    </li>
    <li id="callBacks_btn" class="mainAction">
        <a href="#" onClick="$.fn.loadCallbacks();return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/callback.png', array('alt' => 'Callbacks', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Callbacks
            </span>
            <div class="clear"></div>
        </a>
    </li>
    <li id="voicemail_btn" class="mainAction">
        <a href="#" onClick="$.fn.loadVoicemail();return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/voicemail.png', array('alt' => 'Voicemail', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Voicemail
            </span>
            <div class="clear"></div>
        </a>
    </li>
    <li id="sessHistory_btn" class="mainAction">
        <a href="#" onClick="$.fn.loadSessHistory();return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/sessionHistory.png', array('alt' => 'Session History', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Session <br/>History
            </span>
            <div class="clear"></div>
        </a>
    </li>
    <li id="contacts_btn" class="mainAction">
        <a href="#" onClick="$.fn.loadContacts();return false;">
            <span class="img">
                <?php echo $this->Html->image('icons/contactsCRM.png', array('alt' => 'Contacts (CRM)', 'style' => 'margin-top: 3px;'));?>
            </span>
            <span class="txt">
                Contacts <br/>[CRM]
            </span>
            <div class="clear"></div>
        </a>
    </li>
</ul>