<ul id="options_menu">
    <?php
        // Display Admin Options if account has admin privledges
        if($this->Session->read() && $this->Session->read('Agent.role') == "Admin") {
            echo "<li>Admin Menu";
                echo "<ul>";
                    echo "<li>". $this->Html->link('Manage Agents', array('controller'=>'agents','action'=>'manager')) ."</li>";
                    echo "<li>Manage Phone Numbers</li>";
                    echo "<li>Manage Campaigns</li>";
                    echo "<li>Manage Lists</li>";
                echo "</ul>";
            echo "</li>";
        }
    ?>
    
    <li>
        Options
        <ul>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
        </ul>
    </li>
    <li>Help</li>
    <li>
        Accnt: <?php if($this->Session->read()) {
            echo $this->Session->read('Agent.first_name') . " " . $this->Session->read('Agent.last_name');
        }
        ?>
        <ul>
            <li><?php echo $this->Html->link("Logout", array('controller' => 'agents', 'action' => 'logout')); ?></li>
            <li>Test</li>
            <li>Test</li>
        </ul>
    </li>
</ul>