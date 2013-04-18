<div id="login-block" class="center">
    <div class="tplc"></div><div class="tprc"></div><div class="btlc"></div><div class="btrc"></div>
    <div class="form">
        <?php echo $this->Form->create('Agent'); ?>
        <div class="notice">
            <?php
                echo $this->Session->flash('good');
                echo $this->Session->flash('bad');
            ?>
        </div>
        <h2 style="text-align: center;">Account Log In:</h2>
        <div class="formfields">
            <div class="field width70 center MB5">
                <?php echo $this->Form->input('username', array('class'=>'inputBox','label' => array('class'=>'labelOver'))); ?>
            </div>
            <div class="field width70 center MB30">
                <?php echo $this->Form->input('password', array('class'=>'inputBox', 'label'=>array('class'=>'labelOver'))); ?>
            </div>
            <button id="login_btn">Log In Now</button>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <script type="text/javascript">
        $(function(){
            $.fn.initCloudCommLogin();
        })
    </script>
</div>
 