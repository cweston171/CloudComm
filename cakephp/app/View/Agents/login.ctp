<div id="login-block" class="center">
    <div class="tplc"></div><div class="tprc"></div><div class="btlc"></div><div class="btrc"></div>
    <div class="form">
        <?php echo $this->Form->create('Agent'); ?>
        <div class="notice">Your session has expired. Log in now...</div>
        <h2>Account Log In:</h2>
        <div class="formfields">
            <div class="field width70 center MB5">
                <?php echo $this->Form->input('username'); ?>
            </div>
            <div class="field width70 center MB5">
                <?php echo $this->Form->input('password'); ?>
            </div>
        </div>
        <?php echo $this->Form->end(__('Login')); ?>
    </div>


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
    </div>
</div>

<div class="agents form">
<?php echo $this->Form->create('Agent'); ?>
    <fieldset>
        <legend><?php echo __('Agent Login'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
 