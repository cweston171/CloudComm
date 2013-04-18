<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Chase
 * Date: 6/4/13
 * Time: 6:46 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="ui-box-content left width50">
    <h2>Call Details</h2>
    <div id="currentCallTabs">
        <ul class="tabs">
            <li><a href="#general-cont">General</a></li>
            <li><a href="#call-history-cont">Call History</a></li>
            <li><a href="#script-cont">Script</a></li>
            <li><a href="#preview-cont">Preview</a></li>
            <li><a href="#browser-cont">Browser</a></li>
        </ul>
        <div id="general-cont">
            <?php // if no active call show: ?>
            <div id="general-cont-feedback" class="error feedback" style="display:none;">
                There is no active call. No data to display.
            </div>
            <?php // else show call info ?>
            <fieldset id="general-caller-details" class="width55 left">
                <legend>Personal Info:</legend>
                <div>
                    <div class="truncate MB10" style="font-size: 14px;font-weight:bold;width:222px;" title="<?php echo "client name";?>">
                        <?php echo "Curr Client Name"; ?>
                    </div>
                    <div style="font-size: 10px;">
                        <div class="truncate" style="width: 222px;" title="<?php echo "Company Name"; ?>">
                            <?php echo "Company Name"; ?>
                        </div>
                        <div class="truncate" style="width: 222px;" title="<?php echo "1234 S. State St"; ?>">
                            <?php echo "1234 S. State St."; ?>
                        </div>
                        <div class="truncate" style="width: 222px;" title="<?php echo "Salt Lake City, UT 84104"; ?>">
                            <?php echo "Salt Lake City, UT 84104"; ?>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div id="general-line-buttons" class="right">
                <button id="line-1" class="regbutton MT3 MB3">(801) 555-5555</button>
                <button id="line-2" class="regbutton MB3">(801) 555-5555</button>
                <button id="line-3" class="regbutton">(801) 555-5555</button>
            </div>
            <div class="clear"></div>
        </div>
        <div id="call-history-cont">
            Call history tab
        </div>
        <div id="script-cont">
            script content
        </div>
        <div id="preview-cont">
            preview content
        </div>
        <div id="browser-cont">
            browser content
        </div>
    </div>
</div>
<div class="clear"></div>

<script type="text/javascript">
    $(function(){
       $('#currentCallTabs').tabs();
        $('.regbutton').button();
    });
</script>