<!-- curr screen content -->
<div class="curr_screen_content left" align="left">
	<div class="curr_screen_content_container">
    	<div style="padding: 8px;">
            <div id="callDetailsTabs">
            	 <ul class="tabs">
                    <li><a href="#tabs-1">General</a></li>
                    <li><a href="#tabs-2">Script</a></li>
                    <li><a href="#tabs-3">Preview</a></li>
                    <li><a href="#tabs-4">Browser</a></li>
                </ul>
                <div id="tabs-1">
                	<form action="#" method="post">
                    	<div id="callerDetails" style="height: 210px;width: 98%;">
                            <h2 style="margin-bottom: 10px;">Call Details:</h2>
                            <!-- call form -->
                            <div class="field width50 left">
                                <label for="FirstName" class="over">First Name:</label>
                                <input id="FirstName" type="text" name="FirstName" value="" class="inputBox" />
                            </div>
                            <div class="field width50 left">
                                <label for="LastName" class="over">Last Name:</label>
                                <input id="LastName" type="text" name="LastName" value="" class="inputBox" />
                            </div>
                            <div class="clear MB10"></div>
                            <div class="field width50 left">
                                <label for="PrimaryPhone" class="over">Primary Phone:</label>
                                <input id="PrimaryPhone" type="text" name="PrimaryPhone" value="" class="inputBox" />
                            </div>
                            <div class="field width50 left">
                                <label for="AltPhone1" class="over">Alt. Phone 1:</label>
                                <input id="AltPhone1" type="text" name="AltPhone1" value="" class="inputBox" />
                            </div>
                            <div class="clear MB10"></div>
                            <div class="field width50 left">
                                <label for="AltPhone2" class="over">Alt. Phone 2:</label>
                                <input id="AltPhone2" type="text" name="AltPhone2" value="" class="inputBox" />
                            </div>
                            <div class="field width50 left">
                                <label for="EmailAddress" class="over">Email Address:</label>
                                <input id="EmailAddress" type="text" name="EmailAddress" value="" class="inputBox" />
                            </div>
                            <div class="clear MB10"></div>
                            <div class="field width100 left">
                                <label for="MailingAddress" class="over">Mailing Address:</label>
                                <input id="MailingAddress" type="text" name="MailingAddress" value="" class="inputBox" />
                            </div>
                            <div class="clear MB10"></div>
                            <div class="field width40 left">
                                <label for="City" class="over">City:</label>
                                <input id="City" type="text" name="City" value="" class="inputBox" />
                            </div>
                            <div class="field width40 left">
                                <label for="State" class="over">State:</label>
                                <select id="State" name="State" class="inputBox">
                                    <option value="" selected="selected"></option>
                                </select>
                            </div>
                            <div class="field width20 left">
                                <label for="Zipcode" class="over">Zipcode:</label>
                                <input id="Zipcode" type="text" name="Zipcode" value="" class="inputBox" />
                            </div>
                            <div class="clear MB10"></div>
                            <!-- /call form -->
                        </div>
                		
                    	<div class="left width50">
                        	<h2>Comments</h2>
                            <textarea id="comments" disabled cols="35" rows="6" style="padding: 5px;">Establish call to add comments.</textarea>
                        </div>
                        <div class="left width50">
                        	<h2>Conference Participants:</h2>
                            <textarea id="conferenceParticipants" disabled cols="35" rows="6" style="padding: 5px;"></textarea>
                        </div>
                    	
                        <div class="clear"></div>
                    </form>
                </div>
                <div id="tabs-2">
                	tab 2 content
                </div>
                <div id="tabs-3">
                 	tab 3 content
                </div>
                <div id="tabs-4">
                	tab 4 content
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- /curr screen content -->
<div class="clear"></div>
<script type="text/javascript">
	$(function(){
		$('#callDetailsTabs').tabs();
		
		$('label').labelOver('over');
		
		$('#callerDetails').jScrollPane({
			horizontalDragMaxWidth: 0	
		});
	});
</script>