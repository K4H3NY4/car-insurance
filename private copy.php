<?php
 require('config/db.php');
use PHPMailer\PHPMailer\PHPMailer;
require_once "inc/PHPMailer.php";
require_once "inc/SMTP.php";
require_once "inc/Exception.php";



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
       
$sql = "INSERT INTO `private` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Trident' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`excess_protection`='{$tridentExcessProtectionRider}' ,`political_violence`='$tridentPoliticalViolenceRider',`loss_of_use`='{$tridentLossOfUseRider}',`kra_pin`='{$_POST['kraPin']}',`premium_total`='{$tridentTotalInsurable}',`current_status`='Pending Payment'";
    
$db->query($sql);
if($db->error){
    echo $db->error;
}else{
   // header('Location: '.ROOT_URL.'private.php';
}
/*
 $to = $_POST['email'];
 $subject = "Comprehensive Private Cover | Pacis";
 $message =  $tridentCoverPay;


 mail($to,$subject,$message);
*/

$mail = new PHPMailer();


$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "kahenyaa@gmail.com";
$mail->Password = "11march1996";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

$mail->isHTML(true);
$mail->setFrom($_POST['email'],$_POST['names']);
$mail->addAdress("php.dev.js@gmail.com");
$mail->Subject = $_POST['carValue'];

$mail->send();





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
      
      $db->query($sql);
  if($db->error){
      echo $db->error;
  }else{
      //echo  $premium_total;
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
    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
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
    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
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
    
	<link rel="stylesheet" href="assets/css/flexslider.css">
	
	<link rel="stylesheet" href="assets/css/style.css">
	<!--<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">-->
	<link rel="stylesheet" href="bootstrap.css">

   
	<script type="text/javascript" src="assets/js/animated-headline.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="assets/js/numscroller.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

</head>
<style>
.insurance-name{
   
}
.insurance-pay{
    float: left;
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

<body class="animsition">
	<!-- Border -->
	<span class="frame-line top-frame visible-lg"></span>
	<span class="frame-line right-frame visible-lg"></span>
	<span class="frame-line bottom-frame visible-lg"></span>
	<span class="frame-line left-frame visible-lg"></span>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container-fluid">
				<!-- box header -->
				<div class="box-header">
						<div class="box-logo">
								<a href="index.html"><img src="assets/img/logo.png" width="80" alt="Logo"></a>
						</div>
						<!-- box-nav -->
						<a class="box-primary-nav-trigger" href="#0">
								<span class="box-menu-icon"></span>
						</a>
						<!-- box-primary-nav-trigger -->
				</div>
				<!-- end box header -->

				<!-- nav -->
				<nav>
						<ul class="box-primary-nav">
								<li class="box-label">About me</li>

								<li><a href="index.html">Home</a> <i class="ion-ios-circle-filled color"></i></li>
								<li><a href="services.html">services</a></li>
								<li><a href="single-project.html">single project</a></li>
								<li><a href="contact.html">contact</a></li>

								<li class="box-label">Follow us</li>

								<li class="box-social"><a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
				</nav>
				<!-- end nav -->
		</div>
	</header>

	<!-- HERO SECTION  -->
	<div class="site-hero_2 text-center">
		<div class="section-overlay"></div>
		<div class="page-title">
			<h2>motor private</h2>
			<div class="small-title">home / cover / private-vehicle</div>
		</div>
	</div>


	<section class="project_descr">
		<div class="container mt-100">
			<div class="row center">
			<div class="col-md-8 offset-md-2 col-sm-12 bg-white">
				<div class="section-title">
					<h2 class="mb-50">private vehicle</h2>
					<p class="module-subtitle">Latest project we have made. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			</div>
	</section>

   <!--<div class="container-fluid d-sm-block d-lg-flex bg-warning">-->

    <div class="insurance-name container col-lg-2 offset-md-1 col-sm-12 bg-white d-flex float-left">
        
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


    <div class="insurance-pay container  col-lg-3  col-sm-12 bg-white pl-5">

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
        <div class="selected-company-pacis text-left">
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