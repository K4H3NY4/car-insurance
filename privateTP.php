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
    
 
    $sql = "INSERT INTO `private_tp` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Trident' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`kra_pin`='{$_POST['kraPin']}',`premium_total`='7500',`current_status`='Pending Payment'";
    
$db->query($sql);
if($db->error){
    echo $db->error;
}else{
   // header('Location: '.ROOT_URL.'private.php';
}




 }

 /*
=========================================
            PACIS INNSURANCE COMPANY
=========================================
 */
 if(isset($_POST['submitPacis'])){  


    $sql = "INSERT INTO `private_tp` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Pacis' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`kra_pin`='{$_POST['kraPin']}',`premium_total`='7500',`current_status`='Pending Payment'";
      
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
    
  
    $sql = "INSERT INTO `private_tp` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='Sanlam' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`kra_pin`='{$_POST['kraPin']}',`premium_total`='7500',`current_status`='Pending Payment'";
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
  
       
$sql = "INSERT INTO `private_tp` SET `names`='{$_POST['names']}',`phone_number`='{$_POST['phoneNumber']}' ,`reg_number`='{$_POST['numberPlate']}' ,`email`='{$_POST['email']}' ,`id_number`='{$_POST['idNumber']}' ,`chasis_number`='{$_POST['chasisNumber']}',`company`='GA Insurance' ,`vehicle_value`='{$_POST['carValue']}',`year_manufacture`='{$_POST['yom']}' ,`kra_pin`='{$_POST['kraPin']}',`premium_total`='7500',`current_status`='Pending Payment'";
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
        Third Party Cover</div>
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
                      
                <div class="form-group">
                    <label for="installments">Would you like to pay in installments?</label><br>
                    <select id="installments" class="custom-select" name="excessProtection">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                        
                    </select>
                   <p class="text-center "><span id="installmentsRate"></p>
                </div>
                
                
                <!--
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
         
-->
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
                    <span>Ksh 7,500</span><BR>
                    <small class="font-italic sm">Installment
                    Ksh <span id="installmentsRatePacis">0
                </span></small>
                <br>
                <button class="btn  btn-sm btn-outline-dark" id="pacisbuy" value="" >BUY</button>
            </div>

        <br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/cropped-logo-long-140x47.png" alt=""><br>
                Trident Insurance<br>
                <span>Ksh 7,500</span><BR>
                    <small class="font-italic sm">Installment
                    Ksh <span id="installmentsRateTrident">0
                </span></small>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="tridentbuy">BUY</button>
        </div>
<br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/sanlam-logo.png" alt=""><br>
                Salaam Insurance<br>
                <span>Ksh 7,500</span><BR>
                    <small class="font-italic sm">Installment
                    Ksh <span id="installmentsRateSanlam">0
                </span></small>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="salaambuy">BUY</button>
        </div>
<br>
        <br>
            <div class="col-12 bg-white ">
                <img height="50px" width="100px" src="img/ga-logo-new.png" alt=""><br>
                General Insurance<br>
                <span>Ksh 7,500</span><BR>
                    <small class="font-italic sm">Installment
                    Ksh <span id="installmentsRateGeneral">0
                </span></small>
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
                    <td>First Installment:</td>
                    <td>Ksh <span id="installmentsRatePacis1"></td>
                </tr>
                <tr>
                    <td>Second Installment:</td>
                    <td>Ksh <span id="installmentsRatePacis2"></td>
                </tr>
                <tr>
                    <td>Third Installment:</td>
                    <td>Ksh <span id="installmentsRatePacis3"></td>
                </tr>
                <tr>
                <td class="font-weight-bold">Insurance Cover</td>
                    <td class="font-weight-bold">Ksh 7,500</td>
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
                    <td>First Installment:</td>
                    <td>Ksh <span id="installmentsRateTrident1"></td>
                </tr>
                <tr>
                    <td>Second Installment:</td>
                    <td>Ksh <span id="installmentsRateTrident2"></td>
                </tr>
                <tr>
                    <td>Third Installment:</td>
                    <td>Ksh <span id="installmentsRateTrident3"></td>
                </tr>
                <tr>
                <td class="font-weight-bold">Insurance Cover</td>
                    <td class="font-weight-bold">Ksh 7,500</td>
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
                    <td>First Installment:</td>
                    <td>Ksh <span id="installmentsRateSanlam1"></td>
                </tr>
                <tr>
                    <td>Second Installment:</td>
                    <td>Ksh <span id="installmentsRateSanlam2"></td>
                </tr>
                <tr>
                    <td>Third Installment:</td>
                    <td>Ksh <span id="installmentsRateSanlam3"></td>
                </tr>
                <tr>
                <td class="font-weight-bold">Insurance Cover</td>
                    <td class="font-weight-bold">Ksh 7,500</td>
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
                    <td>First Installment:</td>
                    <td>Ksh <span id="installmentsRateGeneral1"></td>
                </tr>
                <tr>
                    <td>Second Installment:</td>
                    <td>Ksh <span id="installmentsRateGeneral2"></td>
                </tr>
                <tr>
                    <td>Third Installment:</td>
                    <td>Ksh <span id="installmentsRateGeneral3"></td>
                </tr>
                <tr>
                <td class="font-weight-bold">Insurance Cover</td>
                    <td class="font-weight-bold">Ksh 7,500</td>
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
    
    var installments = parseInt( document.getElementById("installments").value );
    


    if ( installments > 0){
    var installmentsRate = 7500/3;
   
    }   else if ( installments < 1){ 
        var installmentsRate = 0;   
        var coverRate =7500;             
    }

    document.getElementById("installmentsRatePacis").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRatePacis1").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRatePacis2").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRatePacis3").innerHTML =  installmentsRate.toFixed(0);

    document.getElementById("installmentsRateTrident").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateTrident1").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateTrident2").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateTrident3").innerHTML =  installmentsRate.toFixed(0);
    
    document.getElementById("installmentsRateSanlam").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateSanlam1").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateSanlam2").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateSanlam3").innerHTML =  installmentsRate.toFixed(0);

    document.getElementById("installmentsRateGeneral").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateGeneral1").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateGeneral2").innerHTML =  installmentsRate.toFixed(0);
    document.getElementById("installmentsRateGeneral3").innerHTML =  installmentsRate.toFixed(0);
    
    

}




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