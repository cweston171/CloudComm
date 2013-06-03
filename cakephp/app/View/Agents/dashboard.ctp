<div class="main_actions relative">
    <?php echo $this->element('agents/mainMenu'); ?>
</div>
<div id="screen" class="left ML10">

</div>

<div class="clear"></div>
<script type="text/javascript">
    $(function(){
        // summary
        $('#summary_btn').click(function(){
            $.fn.loader('show', 'Loading Agent Summary...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'summary'))?>', function(){
                $.fn.swapMainAction("#summary_btn");
                $.fn.loader('hide');
            });
        });
    });
</script>
