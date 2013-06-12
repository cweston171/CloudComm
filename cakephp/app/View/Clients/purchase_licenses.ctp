<h1>Purchase Agent Licenses</h1>

<fieldset>
    <legend>Billing Info:</legend>
    Name: <?php echo $client['Client']['name']; ?><br>
    Card Number: ending in <?php echo substr($client['Client']['credit_card_number'],-4,4); ?><br>
    Expiration: <?php echo $client['Client']['credit_card_expiration_month']; ?> / <?php echo $client['Client']['credit_card_expiration_year']; ?><br>
    Billing Zip: <?php echo $client['Client']['billing_postcode']; ?>    
</fieldset>
<br><br>

<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
    <fieldset>
        <legend><?php echo __('Purchase Agent Licenses'); ?></legend>
        How many additional licenses would you like to purchase?
        <?php
            $x=1;
            while($x<=25){$qtyOptionsArray[$x] = $x;$x++;}
            echo $this->Form->input('purchase_qty',array('options'=>$qtyOptionsArray));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>