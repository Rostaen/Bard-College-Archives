<script type="text/javascript">
	window.location.replace("https://goo.gl/forms/6Aulkz1lnZGz6I3C2");
</script>

<?php
	require("template.php");

	// create page object
	$page = new Template();
	$page->setTitle('Contact Form | Sussman | Special Collection | Bard College');
	$page->setSubHeading('Sussman Request Form');

	// print page header
	$page->open();
?>
<form id="rForm" action="verify-request-form-sussman.php" method="post">
	<div class="request-form">
		<h2>Personal Information:</h2>
		<div class="left-container">
			<div class="description-line">Name<span class="required">*</span></div>
			<div class="description-line">Address 1</div>
			<div class="description-line">Address 2</div>
			<div class="description-line">City</div>
			<div class="description-line">State</div>
			<div class="description-line">Zip Code</div>
			<div class="description-line">Email Address<span class="required">*</span></div>
			<div class="description-line">Phone Number</div>
			<div class="description-line more-space">Are you affiliated with Bard College?<span class="required">*</span></div>
			<div class="description-line with-bard hide">How are you affiliated?</div>
			<div class="description-line not-with-bard hide more-space">What institution are you affiliated with?</div>
		</div>
		<div class="right-container">
			<div class="input-line"><input type="text" name="name" class="req name" ></div>
			<div class="input-line"><input type="text" name="address1" ></div>
			<div class="input-line"><input type="text" name="address2" ></div>
			<div class="input-line"><input type="text" name="city" ></div>
			<div class="input-line">
				<select id="state-selector">
					<option value="blank" selected="selected"></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
				</select>
				<input type="hidden" class="hidden-state" name="state" value="">
			</div>
			<div class="input-line"><input type="text" name="zip-code" ></div>
			<div class="input-line"><input type="email" name="email" class="req email" ></div>
			<div class="input-line"><input type="tel" name="phone" ></div>
			<div class="input-line more-space"><input type="radio" name="affiliation" class="req affiliation yes" value="yes" >Yes <input type="radio" name="affiliation" class="affiliation no" value="no" >No</div>
			<div class="input-line with-bard hide"><input type="radio" name="affil-true" value="faculty" >Faculty <input type="radio" name="affil-true" value="student">Student <input type="radio" name="affil-true" value="staff">Staff <input type="radio" name="affil-true" value="alumni-ae">Alumni/ae <input type="radio" name="affil-true" value="other">Other</div>
			<div class="input-line not-with-bard hide more-space"><input type="text" name="affil-false" ></div>
		</div>
		<div class="clear"></div>
		<h2>Research Request:</h2>
		<div class="left-container">
			<div class="description-line more-space-l">Would you like to make an appointment with the archives?<span class="required">*</span></div>
			<div class="description-line when hide">When?</div>
			<div class="description-line more-space-xl">Please enter your inquiry or comments in the space provided. Please be as specific as possible.<span class="required">*</span></div>
		</div>
		<div class="right-container">
			<div class="input-line more-space-l"><input type="radio" name="appointment" value="yes" class="req appointment yes">Yes <input type="radio" name="appointment" value="no" class="appointment no">No</div>
			<div class="input-line when hide"><input type="date" name="date"></div>
			<div class="input-line more-space-xl"><textarea rows="5" cols="40" name="comments" class="req comments"></textarea></div>
		</div>
		<div class="">
			<div class="">Please enter the captcha image<span class="required">*</span></div>
			<div class="" style="float: left; margin: 15px 10px 15px 0px;">
				<input type="text" size="25" name="captcha" id="captcha" class="req captcha" placeholder="Enter the image here">
			</div>
			<div>
				<?
					$random = rand(1, 4);
					switch ($random) {
						case '1': ?><img src="../library/images/verify/numbers.jpg"><? break;
						case '2': ?><img src="../library/images/verify/numbers1.jpg"><? break;
						case '3': ?><img src="../library/images/verify/numbers2.jpg"><? break;
						case '4': ?><img src="../library/images/verify/numbers3.jpg"><? break;
						default: ?><img src="../library/images/verify/numbers.jpg"><? break;
					}
				?>
			</div>
		</div>
		<div class="submit-button">
			<input type="submit" value="Submit" id="submit-form"/>
			<input type="reset" value="Reset" />
		</div>
		<div class="small-text" style="margin-top: 10px;"><span class="required">*</span> Required Field</div>
	</div>
</form>

<?
	// close page
	$page->close();
?>

<script src="../../library/js/jQuery-v1_11_0.js"></script>
<!-- <script src="../../library/js/jQuery-UI-v1_10_4.js"></script> -->
<script type="text/javascript">
	var firstClick = false;
	var previousClick = "none";
	jQuery('input.affiliation').click(function(){
		if(firstClick == true){
			if(previousClick === 'yes'){ jQuery('.with-bard').fadeOut(); jQuery('.not-with-bard').delay(270).fadeIn(); previousClick = 'no'; }
			else{ jQuery('.not-with-bard').fadeOut(); jQuery('.with-bard').delay(270).fadeIn(); previousClick = 'yes'; }
		}else{
			firstClick = true;
			if(jQuery(this).hasClass('yes')){ jQuery('.with-bard').fadeIn(); previousClick = 'yes'; }
			else{ jQuery('.not-with-bard').fadeIn(); previousClick = 'no';	}
		}
	});
	jQuery('input.appointment').click(function(){ if(jQuery(this).hasClass('yes')) jQuery('.when').fadeIn(); else jQuery('.when').fadeOut(); });
	jQuery('input#submit-form').click(function(event){
		var missingArray = [false, false, false, false, false, false]; var missingInput = false;		
		if(!jQuery('input.name').val()){ jQuery('input.name').addClass('warning'); missingArray[0] = true; }
		else{ jQuery('input.name').removeClass('warning'); missingArray[0] = false; }
		if(!jQuery('input.email').val()){ jQuery('input.email').addClass('warning'); missingArray[1] = true; }
		else{ jQuery('input.email').removeClass('warning'); missingArray[1] = false; }
		if(!jQuery('input.affiliation.yes').is(':checked') && !jQuery('input.affiliation.no').is(':checked')){ jQuery('input.affiliation.yes, input.affiliation.no').addClass('warning'); missingArray[2] = true; }
		else{ jQuery('input.affiliation.yes, input.affiliation.no').removeClass('warning'); missingArray[2] = false; }
		if(!jQuery('input.appointment.yes').is(':checked') && !jQuery('input.appointment.no').is(':checked')){ jQuery('input.appointment.yes, input.appointment.no').addClass('warning'); missingArray[2] = true; }
		else{ jQuery('input.appointment.yes, input.appointment.no').removeClass('warning'); missingArray[2] = false; }
		if(!jQuery('textarea.comments').val()){ jQuery('textarea.comments').addClass('warning'); missingArray[4] = true; }
		else{ jQuery('textarea.comments').removeClass('warning'); missingArray[4] = false; }
		if(!jQuery('input.captcha').val()){ jQuery('input.captcha').addClass('warning'); missingArray[5] = true; }
		else{ jQuery('input.captcha').removeClass('warning'); missingArray[5] = false; }
		for(var x = 0; x < 6; x++){
			if(missingArray[x] == true){ missingInput = true; break; }
		}
		if(missingInput == false){
			jQuery('input.hidden-state').val(jQuery('select#state-selector option:selected').val());
			jQuery('form#rForm').submit();
		}else{
			event.preventDefault();
			alert('You are missing required fields, please enter the required information.\n\nThank you,\nBard College Archives');
		}
	});
</script>