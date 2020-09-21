<?php
 require('config/db.php');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


 /*=============================================
                TRIDENT INSURANCE
   =============================================== */
 if(isset($_POST['submitTrident'])){
    $carValue = $_POST['carValue'];
    $politicalViolence = $_POST['politicalViolence'];
    $excessProtection =$_POST['excessProtection'];
    $lossOfUse = $_POST['lossOfUse'];
             /* value of car */
   if ( $carValue >= 500000){
    $tridentCoverPay = $carValue * 0.035;
    if ($tridentCoverPay < 20000){
        $tridentCoverPay = 20000;
    }  
} 
     /* ===============================
                RIDERS
        ===============================
             excess protector           */
if ( $excessProtection > 0){
     $tridentExcessProtectionRider = $carValue * 0.0025;
    if ($tridentExcessProtectionRider < 2500){
        $tridentExcessProtectionRider = 2500; 
    }
}   else if ($excessProtection < 1){
   $tridentExcessProtectionRider = 0;  
    }
            /*political violence*/
if ( $politicalViolence > 0){
     $tridentPoliticalViolenceRider = $carValue * 0.0025;
    if ($tridentPoliticalViolenceRider < 2500){
        $tridentPoliticalViolenceRider= 2500;
    }
}   else if ($politicalViolence < 1){
    $tridentPoliticalViolenceRider = 0;    
}
            /*Loss of Use*/

     $tridentLossOfUseRider = 'N/A';
 
$tridentTotalInsurable =  $tridentExcessProtectionRider + $tridentPoliticalViolenceRider + $tridentCoverPay;


       
$sql = "INSERT INTO `private` SET `names`='{$_POST['names']}',
`phone_number`='{$_POST['phoneNumber']}' ,
`reg_number`='{$_POST['numberPlate']}' ,
`email`='{$_POST['email']}' ,
`id_number`='{$_POST['idNumber']}' ,
`chasis_number`='{$_POST['chasisNumber']}',`company`='Trident' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`excess_protection`='{$tridentExcessProtectionRider}' ,`political_violence`='$tridentPoliticalViolenceRider',`loss_of_use`='{$tridentLossOfUseRider}',`kra_pin`='{$_POST['kraPin']}',`premium_total`='{$tridentTotalInsurable}',`current_status`='Pending Payment'";
 
$installment1 = $tridentTotalInsurable * 0.4;
$installment2 = $tridentTotalInsurable * 0.3;
$installment3 = $tridentTotalInsurable * 0.3;

$names=$_POST['names'];

$phone_number=$_POST['phoneNumber']; 

$reg_number=$_POST['numberPlate'] ;

$email=$_POST['email'];

$id_number=$_POST['idNumber'];
$chasis_number=$_POST['chasisNumber'];


$vehicle_value=$_POST['carValue'];

$year_manufacture = $_POST['yom'];

$db->query($sql);
if($db->error){
    echo $db->error;
}else{
   // header('Location: '.ROOT_URL.'private.php';

/*
 $to = $_POST['email'];
 $subject = "Comprehensive Private Cover | Pacis";
 $message =  $tridentCoverPay;


 mail($to,$subject,$message);
*/

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'kahenyaa@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '11march1996';

//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['names']);

//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['names']);

//Set who the message is to be sent to
$mail->addAddress($_POST['email'],  $_POST['names']);

//Set the subject line
$mail->Subject = 'TRIDENT | Comprehensive Cover';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body    = "This is a qoutation of your vehicle form Hedge Insurance Agents</b>
 
<br>company Trident <br>
Names: <b> $names </b> <br>
E-mail :<b> $email </b><br>
Phone Number :<b> $phone_number </b><br>
ID Number :<b> $id_number</b><br>
<br><br>
Reg_ Number :<b> $reg_number</b> <br>
Chasis Number :<b> $chasis_number</b> <br>
Vehicle Value :<b> $vehicle_value</b> <br>
Year of Manufacture :<b> $year_manufacture</b> <br>
<br><br>
Excess Protection Rider :<b> $tridentExcessProtectionRider</b> <br>
Political violence Rider : <b>$tridentPoliticalViolenceRider </b> <br>
Loss Of Use Rider :<b> $tridentLossOfUseRider </b> <br>
<br><br>
First Installment :<b> $installment1</b> <br>
Second Installment :<b> $installment2</b> <br>
Third Installment :<b> $installment3</b> <br>
<br><br><br>
Total Amount :<b> $tridentTotalInsurable </b> <br>
<br><br>
 Pending Payment 
";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}




}
 }

 /*
=========================================
            PACIS INNSURANCE COMPANY
=========================================
 */
 if(isset($_POST['submitPacis'])){  

    $carValue = $_POST['carValue'];
    $politicalViolence = $_POST['politicalViolence'];
    $excessProtection =$_POST['excessProtection'];
    $lossOfUse = $_POST['lossOfUse'];
 
      if ( $carValue >= 3000000){
         $pacisCoverPay = $carValue * 0.035;
        if ($pacisCoverPay < 25000){
            $pacisCoverPay = 25000;
        }
    } else if ($carValue >= 1000000){
         $pacisCoverPay = $carValue * 0.04;
        if ($pacisCoverPay < 25000){
            $pacisCoverPay = 25000;
        }    
    } else if ($carValue >= 500000){
         $pacisCoverPay = $carValue * 0.0425;
        if ($pacisCoverPay < 25000){
            $pacisCoverPay = 25000;
        }  
    } else if ($carValue < 500000){
         $pacisCoverPay = $carValue * 0.05;
        if ($pacisCoverPay < 25000){
            $pacisCoverPay = 25000;
        }
    }     
 /*
         ==============================
                    RIDERS
         ==============================
                political violence*/
   if ( $politicalViolence > 0){
      $pacisPoliticalViolenceRider = $carValue * 0.0035;
        if ($pacisPoliticalViolenceRider < 5000){
            $pacisPoliticalViolenceRider = 5000;
        } else{
             $pacisPoliticalViolenceRider = $carValue * 0.0035;
        }
    } else if ($politicalViolence < 1){
         $pacisPoliticalViolenceRider = 0;     
    }
                /* excess protector*/
   if ( $excessProtection > 0){
         $pacisExcessProtectionRider = $carValue * 0.0025;
         ($pacisExcessProtectionRider < 3000){
            $pacisExcessProtectionRider = 3000
        };
    }else if ($excessProtection < 1){
       $pacisExcessProtectionRider = 0;
      }
                /*Loss of Use*/
    if ( $lossOfUse > 0){
        $pacisLossOfUseRider = 3000; 
        }   else if ( $lossOfUse < 1){
        $pacisLossOfUseRider = 0;         
    }
            
    $pacisTotalInsurable =  $pacisCoverPay + $pacisPoliticalViolenceRider + $pacisExcessProtectionRider + $pacisLossOfUseRider;



      $sql = "INSERT INTO `private` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Pacis' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`excess_protection`='{$pacisExcessProtectionRider}' ,`political_violence`='$pacisPoliticalViolenceRider',`loss_of_use`='{$pacisLossOfUseRider}',`kra_pin`='{$_POST['kraPin']}',`premium_total`='{$pacisTotalInsurable}',`current_status`='Pending Payment'";


      
$installment1 = $pacisTotalInsurable * 0.4;
$installment2 = $pacisTotalInsurable * 0.3;
$installment3 = $pacisTotalInsurable * 0.3;

$names=$_POST['names'];

$phone_number=$_POST['phoneNumber']; 

$reg_number=$_POST['numberPlate'] ;

$email=$_POST['email'];

$id_number=$_POST['idNumber'];
$chasis_number=$_POST['chasisNumber'];


$vehicle_value=$_POST['carValue'];

$year_manufacture = $_POST['yom'];

      
      $db->query($sql);
  if($db->error){
      echo $db->error;
  }else{
      //echo  $premium_total;
      
/*
 $to = $_POST['email'];
 $subject = "Comprehensive Private Cover | Pacis";
 $message =  $tridentCoverPay;


 mail($to,$subject,$message);
*/
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'kahenyaa@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '11march1996';

//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['names']);

//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['names']);

//Set who the message is to be sent to
$mail->addAddress($_POST['email'],  $_POST['names']);

//Set the subject line
$mail->Subject = 'PACIS | Comprehensive Cover';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body    = "This is a qoutation of your vehicle form Hedge Insurance Agents</b><br>
 
Names: <b> $names </b> <br>
E-mail :<b> $email </b><br>
Phone Number :<b> $phone_number </b><br>
ID Number :<b> $id_number</b><br>
<br><br>
Reg_ Number :<b> $reg_number</b> <br>
Chasis Number :<b> $chasis_number</b> <br>
Vehicle Value :<b> $vehicle_value</b> <br>
Year of Manufacture :<b> $year_manufacture</b> <br>
<br><br>
Excess Protection Rider :<b> $pacisExcessProtectionRider</b> <br>
Political violence Rider : <b>$pacisPoliticalViolenceRider </b> <br>
Loss Of Use Rider :<b> $pacisLossOfUseRider </b> <br>
<br><br>
First Installment :<b> $installment1</b> <br>
Second Installment :<b> $installment2</b> <br>
Third Installment :<b> $installment3</b> <br>
<br><br><br>
Total Amount :<b> $pacisTotalInsurable </b> <br>
<br><br>
 Pending Payment 
";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
  }
     
   }

    /*=============================================
                SANLAM INSURANCE
     =============================================== */
   if(isset($_POST['submitSalaam'])){
    $carValue = $_POST['carValue'];
    $politicalViolence = $_POST['politicalViolence'];
    $excessProtection =$_POST['excessProtection'];
    $lossOfUse = $_POST['lossOfUse'];
              /* value of car */
    if ( $carValue >= 3000000){
        $salaamCoverPay = $carValue * 0.04;
        if ($salaamCoverPay < 25000){
            $salaamCoverPay = 25000;
        }
    }   else if ($carValue >= 1000000){
         $salaamCoverPay = $carValue * 0.04;
        if ($salaamCoverPay < 25000){
            $salaamCoverPay = 25000;
        }    
    } else if ($carValue >= 500000){
         $salaamCoverPay = $carValue * 0.04;
        if ($salaamCoverPay < 25000){
            $salaamCoverPay = 25000;
        }  
    }    
    /*=============================================
                RIDERS
    ===============================================  
                political violence  */
    if ( $politicalViolence > 0){
         $salaamPoliticalViolenceRider = $carValue * 0.0025;
        if ($salaamPoliticalViolenceRider < 3000){
            $salaamPoliticalViolenceRider = 3000;
        }  
    }   else if ($politicalViolence < 1){
         $salaamPoliticalViolenceRider = 0;   
    }   
             /* excess protector*/
    if ( $excessProtection > 0){
         $salaamExcessProtectionRider = $carValue * 0.0025;
        if ($salaamExcessProtectionRider < 3000){
            $salaamExcessProtectionRider = 3000; 
        }
    }   else if ($excessProtection < 1){
         $salaamExcessProtectionRider = 0;  
    }
             /*Loss of Use*/
     if ( $lossOfUse > 0){
     $salaamLossOfUseRider = 3000;     
    } else if ( $lossOfUse < 1){
        $salaamLossOfUseRider = 0;            
    } 
     $salaamTotalInsurable =  $salaamExcessProtectionRider + $salaamPoliticalViolenceRider + $salaamLossOfUseRider + $salaamCoverPay;
   
  
    
$sql = "INSERT INTO `private` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Sanlam' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`excess_protection`='{$salaamExcessProtectionRider}' ,`political_violence`='$salaamPoliticalViolenceRider',`loss_of_use`='{$salaamLossOfUseRider}',`kra_pin`='{$_POST['kraPin']}',`premium_total`='{$salaamTotalInsurable}',`current_status`='Pending Payment'";



$installment1 = $salaamTotalInsurable * 0.4;
$installment2 = $salaamTotalInsurable * 0.3;
$installment3 = $salaamTotalInsurable * 0.3;

$names=$_POST['names'];

$phone_number=$_POST['phoneNumber']; 

$reg_number=$_POST['numberPlate'] ;

$email=$_POST['email'];

$id_number=$_POST['idNumber'];
$chasis_number=$_POST['chasisNumber'];


$vehicle_value=$_POST['carValue'];

$year_manufacture = $_POST['yom'];



    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
    
/*
 $to = $_POST['email'];
 $subject = "Comprehensive Private Cover | Pacis";
 $message =  $tridentCoverPay;


 mail($to,$subject,$message);
*/
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'kahenyaa@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '11march1996';

//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['names']);

//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['names']);

//Set who the message is to be sent to
$mail->addAddress($_POST['email'],  $_POST['names']);

//Set the subject line
$mail->Subject = 'SANLAAM | Comprehensive Cover';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body    = "This is a qoutation of your vehicle form Hedge Insurance Agents</b><br>
 

Names: <b> $names </b> <br>
E-mail :<b> $email </b><br>
Phone Number :<b> $phone_number </b><br>
ID Number :<b> $id_number</b><br>
<br><br>
Reg_ Number :<b> $reg_number</b> <br>
Chasis Number :<b> $chasis_number</b> <br>
Vehicle Value :<b> $vehicle_value</b> <br>
Year of Manufacture :<b> $year_manufacture</b> <br>
<br><br>
Excess Protection Rider :<b> $salaamExcessProtectionRider</b> <br>
Political violence Rider : <b>$salaamPoliticalViolenceRider </b> <br>
Loss Of Use Rider :<b> $salaamLossOfUseRider </b> <br>
<br><br>
First Installment :<b> $installment1</b> <br>
Second Installment :<b> $installment2</b> <br>
Third Installment :<b> $installment3</b> <br>
<br><br><br>
Total Amount :<b> $salaamTotalInsurable </b> <br>
<br><br>
 Pending Payment 
";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
}
}



/*=============================================
                GA INSURANCE
   =============================================== */
   if(isset($_POST['submitGeneral'])){
    $carValue = $_POST['carValue'];
    $politicalViolence = $_POST['politicalViolence'];
    $excessProtection =$_POST['excessProtection'];
    $lossOfUse = $_POST['lossOfUse'];
             /* value of car */
   if ( $carValue >= 500000){
    $generalCoverPay = $carValue * 0.035;
    if ($generalCoverPay < 20000){
        $generalCoverPay = 20000;
    }  
} 
     /* ===============================
                RIDERS
        ===============================
             excess protector           */

     $generalExcessProtectionRider = 'Free';
  
     
            /*political violence*/

     $generalPoliticalViolenceRider = 'Free';
    
            /*Loss of Use*/

     $generalLossOfUseRider = 'N/A';

$generalTotalInsurable =  $generalCoverPay;
       
$sql = "INSERT INTO `private` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='GA Insurance' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`excess_protection`='{$generalExcessProtectionRider}' ,`political_violence`='$generalPoliticalViolenceRider',`loss_of_use`='{$generalLossOfUseRider}',`kra_pin`='{$_POST['kraPin']}',`premium_total`='{$generalTotalInsurable}',`current_status`='Pending Payment'";


$installment1 = $generalTotalInsurable * 0.4;
$installment2 = $generalTotalInsurable * 0.3;
$installment3 = $generalTotalInsurable * 0.3;

$names=$_POST['names'];

$phone_number=$_POST['phoneNumber']; 

$reg_number=$_POST['numberPlate'] ;

$email=$_POST['email'];

$id_number=$_POST['idNumber'];
$chasis_number=$_POST['chasisNumber'];


$vehicle_value=$_POST['carValue'];

$year_manufacture = $_POST['yom'];



    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
    
/*
 $to = $_POST['email'];
 $subject = "Comprehensive Private Cover | Pacis";
 $message =  $tridentCoverPay;


 mail($to,$subject,$message);
*/
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'kahenyaa@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '11march1996';

//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['names']);

//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['names']);

//Set who the message is to be sent to
$mail->addAddress($_POST['email'],  $_POST['names']);

//Set the subject line
$mail->Subject = 'GA INSURANCE | Comprehensive Cover';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body    = "This is a qoutation of your vehicle form Hedge Insurance Agents</b><BR>
 

Names: <b> $names </b> <br>
E-mail :<b> $email </b><br>
Phone Number :<b> $phone_number </b><br>
ID Number :<b> $id_number</b><br>
<br><br>
Reg_ Number :<b> $reg_number</b> <br>
Chasis Number :<b> $chasis_number</b> <br>
Vehicle Value :<b> $vehicle_value</b> <br>
Year of Manufacture :<b> $year_manufacture</b> <br>
<br><br>
Excess Protection Rider :<b> $generalExcessProtectionRider</b> <br>
Political violence Rider : <b>$generalPoliticalViolenceRider </b> <br>
Loss Of Use Rider :<b> $generalLossOfUseRider </b> <br>
<br><br>
First Installment :<b> $installment1</b> <br>
Second Installment :<b> $installment2</b> <br>
Third Installment :<b> $installment3</b> <br>
<br><br><br>
Total Amount :<b> $generalTotalInsurable </b> <br>
<br><br>
 Pending Payment 
";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
}

 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Vehicle</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
</head>
<style>
.insurance-name{
    height: 100vh;
}
.insurance-pay{
    height: 100vh;
    border-width: 1px;
    border-left: 1px;
    border-top-style: none;
    border-left-style: solid;
    border-right-style: none;
    border-bottom-style: none;
}

.insuranceType{
    position: absolute;
    bottom: 60px;
    font-weight: bolder;
    font-size: 2em;
    
}

.buyer-details{
    display: none;
}

.selected-company-general{
    display: none;
}

.selected-company-trident{
    display: none;
}

.selected-company-pacis{
    display: none;
}

.selected-company-salaam{
    display: none;
}

.process-complete{
    font-size: 1.5rem;
    display: none;
    font-weight: 600;
}

.submitPacis{
    display: none;
}

.submitTrident{
    display: none;
}


</style>
<body>
   <!--<div class="container-fluid d-sm-block d-lg-flex bg-warning">-->

    <div class="insurance-name container-fluid col-lg-4 col-sm-12 bg-warning d-inline-block float-left">
        <div class="insuranceType text-dark pl-5" >Private Vehicle<br>
        Comprehensive Cover</div>
    </div>

<form  method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="insurance-details container-fluid col-lg-4 col-sm-12 bg-white float-left">
        <!-- Car Details-->
        <div class="container w-75 car-details">
            <br><br>
    
            <label for="">Vehicle Value</label><br>
            <input type="number" min="500000" id="carValue" name="carValue" class="form-control" required>
            
            <br>
            <label for="">Year Of Manufacture</label><br>
            <input type="number" min="2008" max="2020" id="yom" name="yom"class="form-control">
    
         
            <br>
            <p>
                Riders <span class="font-italic">(Optional)</span> 
            </p>
    
           
                <div class="form-group">
                    <label for="excessProtection">Excess Protection</label><br>
                    <select id="excessProtection" class="custom-select" name="excessProtection">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                        
                    </select>
                </div>
                
               <div class="form-group">
                 <label for="politicalViolence">Political Violence</label><br>
                    <select id="politicalViolence" class="custom-select" name="politicalViolence">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                        
                    </select>
                
               </div>
                
            <div class="form-group">
                <label for="lossOfUse">Loss Of Use</label><br>
                 <select id="lossOfUse" class="custom-select" name="lossOfUse">
                 <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
            </div>
         
    
        <div class="text-center">
            <br>
            <button class="btn btn-warning " id="calculate" onclick="myFunction()">Calculate</button> 
        </div>
            <br>
           
    
    
            </div>
         
    <!--BUYER DETAILS-->
    <div class="container w-75 buyer-details">
        <br>
        <br>
        <label>First Name</label><br>
       <input type="text" class="form-control" name="names" id="names" autocomplete="given-name" placeholder=" First Name">
       
       <br>
       <label>Number Plate</label><br>
       <input type="text" class="form-control" name="numberPlate"   id="numberPlate" placeholder="numberPlate">
       <br>
       <label>Phone Number</label><br>
       <input type="tel"  class="form-control" id="phone" name="phoneNumber" autocomplete="mobile" placeholder="0700419377" required>
       <br>
       
       <label>Email</label><br>
       <input type="email"  class="form-control" id="email" name="email" autocomplete="email" placeholder="user@domain.com" required>
       <br>
       <label>ID Number</label><br>
       <input type="number" class="form-control" id="idNumber" name="idNumber"    placeholder="ID Card">
       <br>
       <label>Chasis Number </label><br>
       <input type="text" class="form-control" id="chasisNumber"  name="chasisNumber"  placeholder="Chasis Number">
       <br>
       <label>KRA PIN</label><br>
       <input type="text" class="form-control" id="kraPin"  name="kraPin"  placeholder="KRA PIN"><br>
       
       <div class="text-center">
           
        <button class="btn btn-warning submitTrident" type="submit" id="submitTrident" value="submit" name="submitTrident">Submit</button>
        <button class="btn btn-warning submitPacis" type="submit" name="submitPacis" id="submitPacis" value="submit">Submit</button> 
        <button class="btn btn-warning submitSalaam" type="submit" name="submitSalaam" id="submitSalaam" value="submit">Submit</button> 
        <button class="btn btn-warning submitGeneral" type="submit" name="submitGeneral" id="submitGeneral" value="submit">Submit</button>
        <button class="btn btn-primary" id="back" type="button" >Back</button>
       </div>
        <div class="mb-5"></div>   
     </div>

     <br>
     <br>
     <br>

     <div class="text-center process-complete">
        <br>
        <br>
        <br>

        
    </div>

    </div>


    <div class="insurance-pay col-lg-4 col-sm-12 bg-white float-right">

<br>
        <br>
        <!-- INSURANCE COMPANIES-->
        <div class="companies text-center ">        
            <div class="col-12 bg-white">
                <img height="50px" width="100px" src="img/retina-insurance.png" alt="">
                    <br>Pacis Insurance<br>
                    Ksh <span id="pacis">20,000 
                </span>
                <br>
                <button class="btn  btn-sm btn-outline-dark" id="pacisbuy" value="" >BUY</button>
            </div>

        <br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/cropped-logo-long-140x47.png" alt=""><br>
                Trident Insurance<br>
                Ksh <span id="trident" name="trident">20,000
            </span>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="tridentbuy">BUY</button>
        </div>
<br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/sanlam-logo.png" alt=""><br>
                Salaam Insurance<br>
                Ksh <span id="salaam" name="salaam">25,000
            </span>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="salaambuy">BUY</button>
        </div>
<br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/ga-logo-new.png" alt=""><br>
                General Insurance<br>
                Ksh <span id="general" name="general">20,000
            </span>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="generalbuy">BUY</button>
        </div>
<div><br></div>
        </div>

        <!-- SELECTED COMPANY -->
        <div class="selected-company-pacis text-center">
            <br>
            <img height="100px" width="200px" src="img/retina-insurance.png" alt="">
    <br>
            <h3>Pacis Insurance</h3>
            <br>
            <table class="table table-borderless table-striped col-8">
                <tr>
                    <td>Premium:</td>
                    <td>Ksh <span id="pacisPremium"></td>
                </tr>
                <tr>
                    <td>Excess Protection:</td>
                    <td>Ksh <span id="pacisExcess"></td>
                </tr>

                <tr class="success">
                    <td>Political Violence:</td>
                    <td>Ksh <span id="pacisPolitical"></td>
                </tr>
                <tr class="success">
                    <td>Loss Of Use:</td>
                    <td>Ksh <span id="pacisLoss"></td>
                </tr>

                <tr class="success">
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold">Ksh <span id="pacis1"></td>
                </tr>

            </table>
            
            
            
               
            <input type="hidden" id="amount" name="amount" value=""/>
            <br>
            <h4>Till Number: 516 2739</h4>

            <br>

           
            
        </div>

        <div class="selected-company-trident text-center">
            <br>
            <img height="60px" width="200px" src="img/cropped-logo-long-140x47.png" alt="">
    <br>
            <h3>Trident Insurance</h3>
            <br>
            <table class="table table-borderless table-striped col-8">
                <tr>
                    <td>Premium:</td>
                    <td>Ksh <span id="tridentPremium"></td>
                </tr>
                <tr>
                    <td>Excess Protection:</td>
                    <td>Ksh <span id="tridentExcess"></td>
                </tr>

                <tr class="success">
                    <td>Political Violence:</td>
                    <td>Ksh <span id="tridentPolitical"></td>
                </tr>
                <tr class="success">
                    <td>Loss Of Use:</td>
                    <td>N/A</td>
                </tr>

                <tr class="success">
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold">Ksh <span id="trident1"></td>
                </tr>

            </table>
            
            
           
            <br>
            <h4>Till Number: 516 2739</h4>
        </div>


        <div class="selected-company-salaam text-center">
            <br>
            <img height="60px" width="200px" src="img/sanlam-logo.png" alt="">
    <br>
            <h3>Sanlam Insurance</h3>
            <br>
            <table class="table table-borderless table-striped col-8">
                <tr>
                    <td>Premium:</td>
                    <td>Ksh <span id="salaamPremium"></td>
                </tr>
                <tr>
                    <td>Excess Protection:</td>
                    <td>Ksh <span id="salaamExcess"></td>
                </tr>

                <tr class="success">
                    <td>Political Violence:</td>
                    <td>Ksh <span id="salaamPolitical"></td>
                </tr>
                <tr class="success">
                    <td>Loss Of Use:</td>
                    <td>Ksh <span id="salaamLoss"></td>
                </tr>

                <tr class="success">
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold">Ksh <span id="salaam1"></td>
                </tr>

            </table>
            
            
           
            <br>
            <h4>Till Number: 516 2739</h4>
        </div>

        <div class="selected-company-general text-center">
            <br>
            <img height="60px" width="200px" src="img/ga-logo-new.png" alt="">
    <br>
            <h3>General Accident Insurance</h3>
            <br>
            <table class="table table-borderless table-striped col-8">
                <tr>
                    <td>Premium:</td>
                    <td>Ksh <span id="generalPremium"></td>
                </tr>
                <tr>
                    <td>Excess Protection:</td>
                    <td>Free</td>
                </tr>

                <tr class="success">
                    <td>Political Violence:</td>
                    <td>Free</td>
                </tr>
                <tr class="success">
                    <td>Loss Of Use:</td>
                    <td>N/A</td>
                </tr>

                <tr class="success">
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold">Ksh <span id="general1"></td>
                </tr>

            </table>
            
            
           
            <br>
            <h4>Till Number: 516 2739</h4>
        </div>

    </div>
    </div>
</form>
</div>



<script>


    function myFunction(){
    var carValue = parseInt(document.getElementById("carValue").value);
    var yom = parseInt( document.getElementById("yom").value );
    
    var excessProtection = parseInt( document.getElementById("excessProtection").value );
    var politicalViolence = parseInt( document.getElementById("politicalViolence").value );
    var lossOfUse = parseInt( document.getElementById("lossOfUse").value );
    
    
    
    
  


    /* ===========================================
                    PACIS INSURANCE 
    ==============================================*/
                    /* value of car */


      if ( carValue >= 3000000){
        var pacisCoverPay = carValue * 0.035;
        if (pacisCoverPay < 25000){
            pacisCoverPay = 25000;
        }
        console.log(pacisCoverPay);
    }   else if (carValue >= 1000000){
        var pacisCoverPay = carValue * 0.04;
        if (pacisCoverPay < 25000){
            pacisCoverPay = 25000;
        }
          console.log(pacisCoverPay);  


    } else if (carValue >= 500000){
        var pacisCoverPay = carValue * 0.0425;
        if (pacisCoverPay < 25000){
            pacisCoverPay = 25000;
        }
          console.log(pacisCoverPay); 
    } else if (carValue < 500000){
        var pacisCoverPay = carValue * 0.05;
        if (pacisCoverPay < 25000){
            pacisCoverPay = 25000;
        }
          console.log(pacisCoverPay);

    }

                  /*riders*/
                 /*political violence*/
   if ( politicalViolence > 0){
        var pacisPoliticalViolenceRider = carValue * 0.0035;
        if (pacisPoliticalViolenceRider < 5000){
            pacisPoliticalViolenceRider = 5000;
            console.log(pacisPoliticalViolenceRider);
        } else{
             var pacisPoliticalViolenceRider = carValue * 0.0035;
        }
       
        console.log(pacisPoliticalViolenceRider);


    } else if (politicalViolence < 1){
        var pacisPoliticalViolenceRider = 0;  
        console.log(pacisPoliticalViolenceRider);
          

    }
                /* excess protector*/
   if ( excessProtection > 0){
        var pacisExcessProtectionRider = carValue * 0.0025;
        if (pacisExcessProtectionRider < 3000){
            pacisExcessProtectionRider = 3000;
            console.log(pacisExcessProtectionRider);
        }
        console.log(pacisExcessProtectionRider);
    }   else if (excessProtection < 1){
        var pacisExcessProtectionRider = 0;  
        console.log(pacisExcessProtectionRider)  
    }



        /*Loss of Use*/
    if ( lossOfUse > 0){
        var pacisLossOfUseRider = 3000;
       
      
    }   else if ( lossOfUse < 1){
        var pacisLossOfUseRider = 0;
                  
    }
                     /* Pacis Total Pay */



    
     var pacisTotalInsurable =  pacisCoverPay + pacisPoliticalViolenceRider + pacisExcessProtectionRider + pacisLossOfUseRider;
    document.getElementById("pacis").innerHTML = pacisTotalInsurable.toFixed(0) ;
    document.getElementById("pacis1").innerHTML = pacisTotalInsurable.toFixed(0) ;
    document.getElementById("pacisPolitical").innerHTML = pacisPoliticalViolenceRider.toFixed(0);
    document.getElementById("pacisExcess").innerHTML =  pacisExcessProtectionRider.toFixed(0);
    document.getElementById("pacisLoss").innerHTML =  pacisLossOfUseRider.toFixed(0);
    document.getElementById("pacisPremium").innerHTML =  pacisCoverPay.toFixed(0);



    /*=============================================
                TRIDENT INSURANCE
     =============================================== */
                /* value of car */

   if ( carValue >= 500000){
    var tridentCoverPay = carValue * 0.035;
    if (tridentCoverPay < 20000){
        tridentCoverPay = 20000;
    }
    console.log(tridentCoverPay);
}   

  
            /*riders*/
            /* excess protector*/
if ( excessProtection > 0){
    var tridentExcessProtectionRider = carValue * 0.0025;
    if (tridentExcessProtectionRider < 2500){
        tridentExcessProtectionRider = 2500;
        console.log(tridentExcessProtectionRider);
    }
    console.log(tridentExcessProtectionRider);
}   else if (excessProtection < 1){
    var tridentExcessProtectionRider = 0;  
    console.log(tridentExcessProtectionRider)  
}

            /*political violence*/
if ( politicalViolence > 0){
    var tridentPoliticalViolenceRider = carValue * 0.0025;
    if (tridentPoliticalViolenceRider < 2500){
        tridentPoliticalViolenceRider= 2500;
    }

}   else if (politicalViolence < 1){
    var tridentPoliticalViolenceRider = 0;  
    console.log(tridentPoliticalViolenceRider)  
}


/*Loss of Use*/
 if ( lossOfUse > 0){
    var tridentLossOfUseRider = 0;
   
  
}   else if ( lossOfUse < 1){
    var tridentLossOfUseRider = 0;
              
}

        /* Trident Total Pay */
var tridentTotalInsurable =  tridentExcessProtectionRider + tridentPoliticalViolenceRider +tridentLossOfUseRider + tridentCoverPay;

document.getElementById("trident").innerHTML = tridentTotalInsurable.toFixed(0) ;
document.getElementById("trident1").innerHTML = tridentTotalInsurable.toFixed(0) ;
document.getElementById("tridentPolitical").innerHTML = tridentPoliticalViolenceRider.toFixed(0);
document.getElementById("tridentExcess").innerHTML =  tridentExcessProtectionRider.toFixed(0);
//document.getElementById("tridentLoss").innerHTML =  tridentLossOfUseRider.toFixed(0);
document.getElementById("tridentPremium").innerHTML =  tridentCoverPay.toFixed(0);




/*===========================================
    SALAAM INSURANCE
=============================================
*/

   /* value of car */

   if ( carValue >= 3000000){
    var salaamCoverPay = carValue * 0.04;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
    console.log(salaamCoverPay);
}   else if (carValue >= 1000000){
    var salaamCoverPay = carValue * 0.04;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
      console.log(salaamCoverPay);  


} else if (carValue >= 500000){
    var salaamCoverPay = carValue * 0.04;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
      console.log(salaamCoverPay); 
} 


/*riders*/


/*political violence*/
if ( politicalViolence > 0){
    var salaamPoliticalViolenceRider = salaamCoverPay * 0.0025;
    if (salaamPoliticalViolenceRider < 3000){
        salaamPoliticalViolenceRider = 3000;
        console.log(salaamPoliticalViolenceRider);
    }
    console.log(salaamPoliticalViolenceRider);
}   else if (politicalViolence < 1){
    var salaamPoliticalViolenceRider = 0;  
    console.log(salaamPoliticalViolenceRider)  
}



/* excess protector*/
if ( excessProtection > 0){
    var salaamExcessProtectionRider = salaamCoverPay * 0.0025;
    if (salaamExcessProtectionRider < 3000){
        salaamExcessProtectionRider = 3000;
        console.log(salaamExcessProtectionRider);
    }
    console.log(salaamExcessProtectionRider);
}   else if (excessProtection < 1){
    var salaamExcessProtectionRider = 0;  
    console.log(salaamExcessProtectionRider)  
}


 /*Loss of Use*/
 if ( lossOfUse > 0){
    var salaamLossOfUseRider = 3000;
   
  
} else if ( lossOfUse < 1){
    var salaamLossOfUseRider = 0;
              
}



/* Salaam Total Pay */

var salaamTotalInsurable =  salaamExcessProtectionRider + salaamPoliticalViolenceRider + salaamLossOfUseRider + salaamCoverPay;

document.getElementById("salaam").innerHTML = salaamTotalInsurable.toFixed(0) ;
document.getElementById("salaam1").innerHTML = salaamTotalInsurable.toFixed(0) ;
document.getElementById("salaamPolitical").innerHTML = salaamPoliticalViolenceRider.toFixed(0);
document.getElementById("salaamExcess").innerHTML =  salaamExcessProtectionRider.toFixed(0);
document.getElementById("salaamLoss").innerHTML =  salaamLossOfUseRider.toFixed(0);
document.getElementById("salaamPremium").innerHTML =  salaamCoverPay.toFixed(0);




/*=====================================
General Insurance
======================================*/


                /* value of car */

   if ( carValue >= 500000){
    var generalCoverPay = carValue * 0.04;
    if (generalCoverPay < 20000){
        generalCoverPay = 20000;
    }
    console.log(generalCoverPay);
}   

  
            /*riders*/
            /* excess protector*/
if ( excessProtection > 0){
    var generalExcessProtectionRider = 0;
  
    }else if (excessProtection < 1){
    var generalExcessProtectionRider = 0;  
    console.log(generalExcessProtectionRider)  
}

            /*political violence*/
if ( politicalViolence > 0){
    var generalPoliticalViolenceRider = 0;
    
}   else if (politicalViolence < 1){
    var generalPoliticalViolenceRider = 0;  
    console.log(generalPoliticalViolenceRider)  
}

/*Loss of Use*/
 if ( lossOfUse > 0){
    var generalLossOfUseRider = 0;
   
  
}   else if ( lossOfUse < 1){
    var generalLossOfUseRider = 0;
              
}

        /* trident Total Pay */
var generalTotalInsurable =  generalExcessProtectionRider + generalPoliticalViolenceRider +generalLossOfUseRider + generalCoverPay

document.getElementById("general").innerHTML = generalTotalInsurable.toFixed(0) ;
document.getElementById("general1").innerHTML = generalTotalInsurable.toFixed(0) ;
//document.getElementById("generalPolitical").innerHTML = generalPoliticalViolenceRider.toFixed(0);
//document.getElementById("generalExcess").innerHTML =  generalExcessProtectionRider.toFixed(0);
//document.getElementById("generalLoss").innerHTML =  generalLossOfUseRider.toFixed(0);
document.getElementById("generalPremium").innerHTML =  generalCoverPay.toFixed(0);






}


/*

function postAmount(){
    //e.preventDefault();

   
    var params = "amount="+ pacisTotalInsurable;

    var xhr = new XMLHttpRequest();
    xhr.open('POST','taxidb.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        console.log(this.responseText);
    }
    xhr.send(params);
}
*/




$(document).ready(function() {


$( '#pacisbuy' ).click(function () {
$('.car-details').hide();
$('.companies').hide();
$('.submitTrident').hide();
$('.submitSalaam').hide();
$('.submitGeneral').hide();
$('.buyer-details').show();
$('.submitPacis').show();
$('.selected-company-pacis').show();
});

$( '#tridentbuy' ).click(function () {
$('.car-details').hide();
$('.submitPacis').hide();
$('.submitSalaam').hide();
$('.submitGeneral').hide();
$('.companies').hide();
$('.submitTrident').show();
$('.buyer-details').show();
$('.selected-company-trident').show();
});

$( '#salaambuy' ).click(function () {
$('.car-details').hide();
$('.companies').hide();
$('.submitPacis').hide();
$('.submitTrident').hide();
$('.submitGeneral').hide();
$('.buyer-details').show();
$('.submitSalaam').show();
$('.selected-company-salaam').show();
});


$( '#generalbuy' ).click(function () {
$('.car-details').hide();
$('.companies').hide();
$('.submitPacis').hide();
$('.submitTrident').hide();
$('.submitGeneral').hide();
$('.buyer-details').show();
$('.submitSalaam').hide();
$('.submitGeneral').show();
$('.selected-company-general').show();
});

$( '#submitPacis' ).click(function () {
$('.car-details').hide();
$('.buyer-details').hide();
$('.selected-company').show();
$('.companies').hide();
$('.process-complete').show();
});

$( '#submitTrident' ).click(function () {
$('.car-details').hide();
$('.buyer-details').hide();
$('.selected-company').show();
$('.companies').hide();
$('.process-complete').show();
});

$( '#back' ).click(function () {
$('.car-details').show();
$('.buyer-details').hide();
$('.selected-company-pacis').hide();
$('.selected-company-trident').hide();
$('.selected-company-salaam').hide();
$('.selected-company-general').hide();
$('.companies').show();  
});

$( '#comp' ).click(function () {
$('.thirdParty').hide();
$('.thirdPartyCar').hide()
$('.carDetails').show();
$('.riders').show();  
});

});
    


</script>

</body>
</html>