<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Chase
 * Date: 6/4/13
 * Time: 6:43 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<script type="text/javascript">
    $(function(){
       // main action button methods
        // summary
        $('#summary_btn').click(function(){
            $.fn.loader('show', 'Loading Agent Summary...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'summary'))?>', function(){
                $.fn.swapMainAction("#summary_btn");
                $.fn.loader('hide');
            });
        });
        // current call
        $('#currCall_btn').click(function(){
            $.fn.loader('show', 'Loading Current Call...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'current_call'))?>', function(){
                $.fn.swapMainAction("#currCall_btn");
                $.fn.loader('hide');
            });
        });
        // callbacks
        $('#callBacks_btn').click(function(){
            $.fn.loader('show', 'Loading Callbacks...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'callback'))?>', function(){
                $.fn.swapMainAction("#callBacks_btn");
                $.fn.loader('hide');
            });
        });
        // voicemail
        $('#voicemail_btn').click(function(){
            $.fn.loader('show', 'Loading Voicemail...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'voicemail'))?>', function(){
                $.fn.swapMainAction("#voicemail_btn");
                $.fn.loader('hide');
            });
        });
        // session history
        $('#sessHistory_btn').click(function(){
            $.fn.loader('show', 'Loading Session History...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'session_history'))?>', function(){
                $.fn.swapMainAction("#sessHistory_btn");
                $.fn.loader('hide');
            });
        });
        // contacts crm
        $('#contacts_btn').click(function(){
            $.fn.loader('show', 'Loading Contacts [CRM]...');

            $('#screen').load('<?php echo Router::url(array('controller' => 'agents', 'action' => 'contact_crm'))?>', function(){
                $.fn.swapMainAction("#contacts_btn");
                $.fn.loader('hide');
            });
        });
    });
</script>