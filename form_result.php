<?php
	//Recipients of the email
	$email = 'tappertj@oregonstate.edu, gonzalky@oregonstate.edu, leaveyt@oregonstate.edu, wilsonja@oregonstate.edu';
	//Subject line on sent email
	$subject = 'Form Submission';
	//Content of the email
	$message = 'Form was successfully submitted.';
	//php function call to send email
	mail($email, $subject, $message);
?>
<html>
	<p><strong>Today's date:</strong> <?php echo $_POST["date"]; ?> </p>
	<p><strong>First Name:</strong> <?php echo $_POST["firstName"]; ?> </p>
	<p><strong>Last Name:</strong> <?php echo $_POST["lastName"]; ?> </p>
	<p><strong>Age:</strong> <?php echo $_POST["age"]; ?> </p>
	<p><strong>Date of Birth:</strong> <?php echo $_POST["birthday"]; ?> </p>
	<p><strong>Address:</strong> <?php echo $_POST["address"]; ?> </p>
	<p><strong>City:</strong> <?php echo $_POST["city"]; ?> </p>
	<p><strong>State:</strong> <?php echo $_POST["state"]; ?> </p>
	<p><strong>Zip:</strong> <?php echo $_POST["zip"]; ?> </p>
	<p><strong>Phone:</strong> <?php echo $_POST["phone"]; ?> </p>
	<p><strong>Message:</strong> <?php echo $_POST["message"]; ?> </p>
	<p><strong>Email:</strong> <?php echo $_POST["email"]; ?> </p>
	<p><strong>Occupation:</strong> <?php echo $_POST["occupation"]; ?> </p>
	<p><strong>Employer:</strong> <?php echo $_POST["employer"]; ?> </p>


	<h2>Employer</h2>
	<p><strong>Employer's Address:</strong> <?php echo $_POST["workAddress"]; ?> </p>
	<p><strong>Work Phone:</strong> <?php echo $_POST["workPhone"]; ?> </p>
	<p><strong>Work Message:</strong> <?php echo $_POST["workMessage"]; ?> </p>


	<h2>Spouse or Partner Information</h2>
	<p><strong>Name:</strong> <?php echo $_POST["partnerName"]; ?> </p>
	<p><strong>Age:</strong> <?php echo $_POST["partnerAge"]; ?> </p>
	<p><strong>Date of Birth:</strong> <?php echo $_POST["partnerBday"]; ?> </p>
	<p><strong>Occupation:</strong> <?php echo $_POST["partnerOcupation"]; ?> </p>
	<p><strong>Employer:</strong> <?php echo $_POST["partnerEmployer"]; ?> </p>
	<p><strong>Phone:</strong> <?php echo $_POST["partnerPhone"]; ?> </p>

	<h2>Other Members of Your Household</h2>
	<p><strong>First Name:</strong> <?php echo $_POST["relativeFirstName"]; ?> </p>
	<p><strong>Last Name:</strong> <?php echo $_POST["relativeLastName"]; ?> </p>
	<p><strong>Age:</strong> <?php echo $_POST["relativeAge"]; ?> </p>
	<p><strong>Date of Birth:</strong> <?php echo $_POST["relativeDate"]; ?> </p>
	<p><strong>Relation:</strong> <?php echo $_POST["relation"]; ?> </p>

	<h2>Emergency Contact</h2>
	<p><strong>Name:</strong> <?php echo $_POST["partnerEmployer"]; ?> </p>
	<p><strong>Relation:</strong> <?php echo $_POST["emergencyName"]; ?> </p>
	<p><strong>Employer:</strong> <?php echo $_POST["emergencyRelation"]; ?> </p>
	<p><strong>Employer:</strong> <?php echo $_POST["emergencyAddress"]; ?> </p>
	<p><strong>Employer:</strong> <?php echo $_POST["emergencyPhone"]; ?> </p>

	<h2>Health Insurance</h2>
	<p><strong>Do you have health insurance?:</strong> <?php echo $_POST["hasInsurance"]; ?> </p>
	<p><strong>If yes, what company?:</strong> <?php echo $_POST["insuranceCompany"]; ?> </p>

	<h2>Medical Information</h2>
	<p><strong>Primary Care Physician:</strong> <?php echo $_POST["PCP"]; ?> </p>
	<p><strong>Phone:</strong> <?php echo $_POST["PCPphone"]; ?> </p>
	<p><strong>Prescription Medications:</strong> <?php echo $_POST["medications"]; ?> </p>
	<p><strong>Have you ever seen a counselor before?:</strong> <?php echo $_POST["seenBefore"]; ?> </p>
	<p><strong>If yes, when and where?:</strong> <?php echo $_POST["previousCounselor"]; ?> </p>
	<p><strong>Reason for seeking help now?:</strong> <?php echo $_POST["reason"]; ?> </p>

<? include('footer.php') ?>