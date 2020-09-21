<?php
 require('config/db.php');

 if(isset($_POST['submitTrident'])){
    $carValue = $_POST['carValue'];
    
    $numberOfPassengers = $_POST['numberOfPassengers'];
    $pax = $numberOfPassengers *500;
    $tridentCoverPay = 7500;

    
    
     
            /* Pacis Total Pay */
    
     $tridentTotalInsurable =  $pax + $tridentCoverPay;
   
  
    $sql = "INSERT INTO `taxis_tp` SET `names`='{$_POST['firstName']}' ,`phone`='{$_POST['phone']}' ,`email`='{$_POST['email']}' ,`idNumber`='{$_POST['idNumber']}' ,`chasisNumber`='{$_POST['chasisNumber']}',`company`='Trident' ,`carValue`='{$_POST['carValue']}',`yom`='{$_POST['yom']}' ,`numberOfPassenger`='{$_POST['numberOfPassengers']}',`kraPin`='{$_POST['kraPin']}',`amount`='$tridentTotalInsurable',`insurancetype`='Third Party', `cstatus`='Pending Payment'";
    
    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
}

 }

 if(isset($_POST['submitPacis'])){ 
      
        
        $numberOfPassengers = $_POST['numberOfPassengers'];
        $pax = $numberOfPassengers *500;
        $pacisCoverPay = 7500;
     
      /* ===========================================
                    PACIS INSURANCE 
    ==============================================*/
                    /* value of car */


   
  
                     /* Pacis Total Pay */
    
     $pacisTotalInsurable = $pax + $pacisCoverPay;

    
        
      $sql = "INSERT INTO `taxis_tp` SET `names`='{$_POST['firstName']}' ,`phone`='{$_POST['phone']}' ,`email`='{$_POST['email']}' ,`idNumber`='{$_POST['idNumber']}' ,`chasisNumber`='{$_POST['chasisNumber']}',`company`='Pacis' ,`carValue`='{$_POST['carValue']}',`yom`='{$_POST['yom']}' ,`numberOfPassenger`='{$_POST['numberOfPassengers']}',`kraPin`='{$_POST['kraPin']}',`amount`='$pacisTotalInsurable',`insurancetype`='Third Party', `cstatus`='Pending Payment'";
      
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
    <title>Template</title>
    <link rel="stylesheet" href="inc/css/bootstrap.css">
    <script src="inc/js/jquery.js"></script>
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

.selected-company-trident{
    display: none;
}

.selected-company-pacis{
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
   <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="insurance-name container-fluid col-lg-4 col-sm-12 bg-warning d-inline-block float-left">
        <div class="insuranceType text-dark pl-5" >PSV Chauffeur driven<br>
       Third Party Cover</div>
    </div>


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
                <label for="my-select">Number of Passengers</label>
                <select id="numberOfPassengers" name="numberOfPassengers" class="custom-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <br>
           
                
    
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
       <input type="text" class="form-control" name="firstName" id="firstName" autocomplete="given-name" placeholder=" First Name">
       
       <br>
       <label>Last Name</label><br>
       <input type="text" class="form-control" name="lastName" autocomplete="cc-family-name"  id="lastName" placeholder="Last Name">
       <br>
       <label>Phone Number</label><br>
       <input type="tel"  class="form-control" id="phone" name="phone" autocomplete="mobile" placeholder="0700419377" required>
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
           
        <button class="btn btn-success submitTrident" type="submit" id="submitTrident" value="submit" name="submitTrident">Submit</button>
        <button class="btn btn-warning submitPacis" type="submit" name="submitPacis" id="submitPacis" value="submit">Submit</button> 
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
        <br>
        <!-- INSURANCE COMPANIES-->
        <div class="companies text-center">        
            <div class="col-8 btn btn-light">
                    Pacis Insurance<br>
                    Ksh <span id="pacis">7500
                </span>
              
                <br>
                <button class="btn  btn-sm btn-outline-dark" id="pacisbuy" value="" >BUY</button>
            </div>

        <br>
      <br>
        <br>
            <div class="col-8 btn btn-light ">
                Trident Insurance<br>
                Ksh <span id="trident" name="trident">7500
            </span>
            <br>
            <button class="btn  btn-sm btn-outline-dark" id="tridentbuy">BUY</button>
        </div>

        </div>

        <!-- SELECTED COMPANY -->
        <div class="selected-company-pacis text-center">
            <br>
            image
    <br>
            <h3>Pacis Insurance</h3>
            <br>
            <h4>Ksh <span id="pacis1"></h4>
            <input type="hidden" id="amount" name="amount" value=""/>
            <br>
            <h4>Till Number: 516 2739</h4>
        </div>

        <div class="selected-company-trident text-center">
            <br>
            image
    <br>
            <h3>Trident Insurance</h3>
            <br>
            <h4>Ksh <span id="trident1" name="trident1">7500
            </span></h4>
           
            <br>
            <h4>Till Number: 516 2739</h4>
        </div>


    </div>



       <script>
    var pacisTotalInsurable;

    function myFunction(){
    var pacisPoliticalViolenceRider;
    var carValue = parseInt(document.getElementById("carValue").value);
    var yom = parseInt(document.getElementById("yom").value);
    var numberOfPassengers = parseInt( document.getElementById("numberOfPassengers").value );

    var pax = (numberOfPassengers * 500);
    
    
  


    /* ===========================================
                    PACIS INSURANCE 
    ==============================================*/
                    /* value of car */


        var pacisCoverPay = 7500;
        

                     /* Pacis Total Pay */
    
     pacisTotalInsurable = pax + pacisCoverPay;

    

    document.getElementById("pacis").innerHTML = pacisTotalInsurable.toFixed(0) ;
    document.getElementById("pacis1").innerHTML = pacisTotalInsurable.toFixed(0) ;
            
    



    /*=============================================
                TRIDENT INSURANCE
     =============================================== */
                /* value of car */

   
    var tridentCoverPay = 7500;
  

  
        /* Pacis Total Pay */

var tridentTotalInsurable =  pax + tridentCoverPay;
console.log(tridentTotalInsurable);

document.getElementById("trident").innerHTML = tridentTotalInsurable.toFixed(0) ;
document.getElementById("trident1").innerHTML = tridentTotalInsurable.toFixed(0) ;
document.getElementById("trident2").innerHTML = tridentTotalInsurable.toFixed(0) ;






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
$('.buyer-details').show();
$('.submitPacis').show();
$('.selected-company-pacis').show();

});

$( '#tridentbuy' ).click(function () {
$('.car-details').hide();
$('.submitPacis').hide();
$('.companies').hide();
$('.submitTrident').show();
$('.buyer-details').show();
$('.selected-company-trident').show();
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
</form>
</body>
</html>