<div id="login-block" class="center">
    <div class="tplc"></div><div class="tprc"></div><div class="btlc"></div><div class="btrc"></div>
    <div class="form">
        <?php echo $this->Form->create('Agent'); ?>
        <div class="notice"><?php echo $this->Session->flash(); ?></div>
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
<!--
    <div class="form">
        <form>
            <div class="notice">Your session has expired. Log in now...</div>
            <h2>Account Log In:</h2>
            <div class="formfields">
                <div class="field width70 center MB5">
                    <label for="username" class="over">Username:</label>
                    <input id="username" name="username" type="text" value="" class="inputBox" />
                </div>
                <div class="field width70 center MB30">
                    <label for="password" class="over">Password:</label>
                    <input id="password" name="password" type="password" value="" class="inputBox" />
                </div>
                <button id="login_btn">Log In Now</button>
            </div>
        </form>
    </div>-->
</div>
 