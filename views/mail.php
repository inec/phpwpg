
<div class="bgColor4 head-set arror_box shadow-bot1 ">
		 <div class="row colorGray head-set">


			
        </div>
<?php
 //form('Contact');
cockpit('forms:form', 'Contact', ['id' => 'contact_form', 'class'=>'form-horizontal head-set colorGray'])

 ?>
<div class="form-message-success">
   				<div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissible" role="alert">
						<strong>Thanks!</strong> Your message sent successfully.</div>
				</div>
  </div>
                    <fieldset>

					<div class="col-md-6 head-set">
                        <div class=" form-group ">
                            <span class="col-md-6  text-right">First Name</span>
                            <div class="col-md-6">
                                <input id="fname" name="form[FirstName]" type="text" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
				
                        <div class="form-group">
                            <span class="col-md-6  text-right">Last Name</span>
                            <div class="col-md-6">
                                <input id="lname" name="form[LastName]" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
				

                        <div class="form-group">
                            <span class="col-md-6  text-right">Email</span>
                            <div class="col-md-6">
                                <input id="email" name="form[_replyto]" type="email" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-6  text-right">Phone Number</span>
                            <div class="col-md-6">
                                <input id="phone" name="form[phone]" type="tel" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>

						<div class="form-group">
						      <span class="col-md-6  text-right">How would you like to be contacted?</span>
      <div class="col-md-6">
	
<div class=" radio radio-inline">
                        <input type="radio" id="inlineCheckbox1" name="form[contactBy]" value="email" >
                        <label for="inlineCheckbox1"> email </label>
                    </div>
		<div class="radio radio-inline">
                        <input type="radio" id="inlineCheckbox3"  name="form[contactBy]" value="phone" checked="checked" >
                        <label for="inlineCheckbox3"> phone</label>
                    </div>
    </div>
  </div>
                        <div class="form-group">
                            <span class="col-md-6  text-right">Are you a client of Brio Insurance?</span>
                            <div class="col-md-6">
                             
					<div class="radio radio-inline">
                        <input type="radio" id="inlineRadio1" value="yes" name="form[existingClient]"  >
                        <label for="inlineRadio1"> yes </label>
						  </div>
						<div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="no" name="form[existingClient]" checked="checked" >
                        <label for="inlineRadio2"> no </label>
                    </div>
                  
                            </div>
                        </div>

								</div>
								
								
								<div class="col-md-6 head-set">
				    <div class="form-group">
					<div class="col-md-9 col-md-offset-1">
								<span class="text-left">Question, comment, or friendly hello:</span>
								
									<textarea class="form-control" id="message" name="form[message]" placeholder="" rows="8" required></textarea>
                            </div>
                        </div>
					   <div class="form-group">
                   	<div class="col-md-9 col-md-offset-1">
                                <button type="submit" class="btn btn-default col-md-10 col-md-offset-1">Submit</button>
                     </div>
					 
                        </div>
						

						
                    </fieldset>
</form>

</div>
<?php 

/*
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
$mail->Host = 'HO12MX.sicu.mb.ca';  
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'MANDRILL_USERNAME';                // SMTP username
$mail->Password = 'MANDRILL_APIKEY';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'ylu@sunovacu';
$mail->FromName = 'Your From name';
$mail->AddAddress('luyege+pp1@gmail.com', 'Josh Adams');  // Add a recipient
$mail->AddAddress('luyege+pp2@gmail.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';*/
?>

