<div class="main_actions relative">
    <?php echo $this->element('agents/mainMenu'); ?>
</div>
<div id="screen" class="left ML15" style="width: 824px;">

</div>

<div class="clear"></div>
<script type="text/javascript">
    $(function(){
        // start with summary loaded
        $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'summary'))?>', function(){
            $.fn.swapMainAction("#summary_btn");
            $.fn.loader('hide');
        });
    });
</script>
<?php echo $this->element('agents/mainMenuAction'); ?>
