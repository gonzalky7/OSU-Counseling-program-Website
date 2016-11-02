<?php include('header.php') ?>	
		<div class="main-content">

			<form method="post" action="form_result.php">
				<fieldset>
				<div class="centerTitle"><legend><h1 id="header">OSU Cascades Counseling Practicum <br> Client Information Form<h1></legend></div>
					<br>
					<div class="boxed">
						<label for="date">Today's Date</label>
						<input type="date" name="date" placeholder="YYYYMMDD"/>

						<label for="firstName">First Name</label>
						<input type="text" name="firstName" />
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName"/>
					<br>
						<label for="age">Age</label>
						<input type="text" name="age"/>
						<label for="birthday">Date of Birth</label>
						<input type="date" name="birthday" placeholder="YYYYMMDD"/>
					<br>
						<label for="address">Address</label>
						<input type="text" name="address"/>
						<label for="city">City</label>
						<input type="text" name="city"/>
						<label for="state">State</label>
						<input type="text" name="state"/>
						<label for="zip">Zip</label>
						<input type="text" name="zip"/>
					<br>
						<label for="phone">Phone</label>
						<input type="text" name="phone"/>
						<label for="message">May we contact you at this number if necessary?</label>
					<br>
						<div class="radioButton">
							<label for="option1">Yes</label>
							<input type="radio" name="message" value="yes" />
							<label for="option1">No</label>
							<input type="radio" name="message" value="no" />
						</div>
					
					
					<br>
						<label for="email">Email</label>
						<input type="email" name="email" size="40"/>
					<br>
						<label for="occupation">Occupation</label>
						<input type="text" name="occupation"/>
						<label for="employer">Employer</label>
						<input type="text" name="employer"/>
					<br>
						<label for="workAddress">Employer's address</label>
						<input type="text" name="workAddress"/>
						<label for="workPhone">Work Phone</label>
						<input type="text" name="workPhone"/>
						<label for="workMessage">May we contact this person if necessary?</label>
						<input type="radio" name="workMessage" value="yes" />Yes
						<input type="radio" name="workMessage" value="no" />No
					</div>

					<div class="box"><h2 class="form-header">Spouse or Partner Information</h2></div>

						<label for="partnerName">Name</label>
						<input type="text" name="partnerName"/>
						<label for="partnerAge">Age</label>
						<input type="text" name="partnerAge"/>
						<label for="partnerBday">Date of Birth</label>
						<input type="date" name="partnerBday" placeholder="MM/DD/YYYY"/>
						<label for="partnerOcupation">Ocupation</label>
						<input type="text" name="partnerOcupation"/>
						<label for="partnerEmployer">Employer</label>
						<input type="text" name="partnerEmployer"/>
						<label for="partnerPhone">Phone</label>
						<input type="text" name="partnerPhone"/>

					<div class="box"><h2 class="form-header">Other Members of Your Household</h2></div>

					 <!-- Want to do like select a number of members of house -->
						<label for="relativeFirstName">First Name</label>
						<input type="text" name="relativeFirstName">
						<label for="relativeLastName">Last Name</label>
						<input type="text" name="relativeLastName">
						<label for="relativeAge">Age</label>
						<input type="number" name="relativeAge">
						<label for="relativeDate">Date of Birth</label>
						<input type="date" name="relativeDate" placeholder="MM/DD/YYYY">
						<label for="relation">Relation</label>
						<input type="text" name="relation">

					<div class="box"><h2 class="form-header">Emergency Contact</h2></div>

						<label for="emergencyName">Name</label>
						<input type="text" name="emergencyName">
						<label for="emergencyRelation">Relation</label>
						<input type="text" name="emergencyRelation">
						<label for="emergencyAddress">Address</label>
						<input type="text" name="emergencyAddress">
						<label for="emergencyPhone">Phone</label>
						<input type="text" name="emergencyPhone">

					<div class="box"><h2 class="form-header">Health Insurance</h2></div>

						<label for="hasInsurance">Do you have health insurance?</label>
						<input type="radio" name="hasInsurance" value="yes" />Yes
						<input type="radio" name="hasInsurance" value="no" />No
						<label for="insuranceCompany">If yes, what company?</label>
					<br>
						<input type="text" name="insuranceCompany">

					<div class="box"><h2 class="form-header"> Medical Information</h2></div>

						<label for="PCP">Primary Care Physician</label>
						<input type="text" name="PCP"/>
						<label for="PCPphone">Phone</label>
						<input type="text" name="PCPphone"/>
					<br>
						<label for="medications">Prescription Medications</label>
						<input type="text" name="medications"/>
					<br>
						<label for="seenBefore">Have you ever seen a counselor before?</label>
						<input type="radio" name="seenBefore" value="yes" />Yes
						<input type="radio" name="seenBefore" value="no" />No
						<br>
						<label for="previousCounselor">If yes, when and where?</label>
						<input type="text" name="previousCounselor"/>
					<br>
						<label for="reason">Reason for seeking help now?</label>
					<br>
						<textarea rows="5" cols="50">Reason for your visit.</textarea>
					<br>
						
						<input type="submit" name ="Submit" />
						
				</fieldset>
			</form>
		</div>

<?php include('footer.php') ?>
