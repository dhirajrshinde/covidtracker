<?php
    if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $to='_mainaccount@covidtimes.xyz';
            $sub='Feedback Received';
            $message="Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Subject: ".$subject."\n"."Wrote the following Message: ". "\n".$message;
            $headers="From: ".$email;

            if(mail($to, $sub, $message, $headers))
                {
                    echo "<div class='inner success'><p class='success'>Thanks for contacting us. We will contact you ASAP!</p></div><!-- /.inner -->";
                }
            else {
                    echo "<div class='inner error'><p class='error'>Something went wrong. Please try again.</p></div><!-- /.inner -->";
                }
        }
?>
