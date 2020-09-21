<?php
 require('config/db.php');

if (    $_REQUEST["amount"] ){
    $amount =$_REQUEST['amount'];
    echo "Welcome".$amount;
}




 if(isset($_POST['submitTrident'])){
    $carValue = $_POST['carValue'];
    $politicalViolence = $_POST['politicalViolence'];
    $excessProtection =$_POST['excessProtection'];
    $numberOfPassengers = $_POST['numberOfPassengers'];
    $pax = $numberOfPassengers *500;

    if ( $carValue >= 500000){
       $tridentCoverPay = $carValue * 0.035;
        if ($tridentCoverPay < 20000){
            $tridentCoverPay = 20000;
        }
    }   
    
      
                /*riders*/
                /* excess protector*/
    if ( $excessProtection > 0){
       $tridentExcessProtectionRider = $tridentCoverPay * 0.005;
        if ($tridentExcessProtectionRider < 5000){
            $tridentExcessProtectionRider = 5000;
           
        }
      
    }   else if ($excessProtection < 1){
         $tridentExcessProtectionRider = 0;
       
    }
    
                /*political violence*/
    if ( $politicalViolence > 0){
         $tridentPoliticalViolenceRider = $tridentCoverPay * 0.005;
        if ($tridentPoliticalViolenceRider < 2500){
            $tridentPoliticalViolenceRider= 2500;
        }
    
    }   else if ($politicalViolence < 1){
         $tridentPoliticalViolenceRider = 0;
       
    }
    
            /* Pacis Total Pay */
    
     $tridentTotalInsurable =  $tridentExcessProtectionRider + $tridentPoliticalViolenceRider + $pax + $tridentCoverPay;
   
  
    $sql = "INSERT INTO `taxis` SET `names`='{$_POST['firstName']}' ,`phone`='{$_POST['phone']}' ,`email`='{$_POST['email']}' ,`idNumber`='{$_POST['idNumber']}' ,`chasisNumber`='{$_POST['chasisNumber']}',`company`='Trident' ,`carValue`='{$_POST['carValue']}',`yom`='{$_POST['yom']}' ,`numberOfPassenger`='{$_POST['numberOfPassengers']}', `excessProtection`=' $tridentExcessProtectionRider' ,`politicalViolence`='$tridentPoliticalViolenceRider',`kraPin`='{$_POST['kraPin']}',`amount`='$tridentTotalInsurable',`insurancetype`='Comprehensive', `cstatus`='Pending Payment'";
    
    $db->query($sql);
if($db->error){
    echo $db->error;
}else{
    //echo "submitted";
}

 }

 if(isset($_POST['submitPacis'])){ 
       $carValue = 5000000;
        $politicalViolence = $_POST['politicalViolence'];
        $excessProtection =$_POST['excessProtection'];
        $numberOfPassengers = $_POST['numberOfPassengers'];
        $pax = $numberOfPassengers *500;
    
     
      /* ===========================================
                    PACIS INSURANCE 
    ==============================================*/
                    /* value of car */


    if ( $carValue >= $_POST['carValue']){
        $pacisCoverPay = $carValue * 0.055;
        if ($pacisCoverPay < 40000){
            $pacisCoverPay = 40000;
        }
        
    }   
                  /*riders*/
                 /*political violence*/
   if ( $politicalViolence > 0){
       $pacisPoliticalViolenceRider = $pacisCoverPay * 0.0035;
       if ($pacisPoliticalViolenceRider < 5000){
            $pacisPoliticalViolenceRider = 5000;
            
        } else{
           $pacisPoliticalViolenceRider = $pacisCoverPay * 0.0035;
       }
       
        
    } else if ($politicalViolence < 1){
       $pacisPoliticalViolenceRider = 0;
            
    }
                /* excess protector*/
    if ( $excessProtection > 0){
        $pacisExcessProtectionRider = $pacisCoverPay * 0.005;
        if ($pacisExcessProtectionRider < 5000){
            $pacisExcessProtectionRider = 5000;
        }

        
    }   else if ($excessProtection < 1){
        $pacisExcessProtectionRider = 0;
        
    }
                     /* Pacis Total Pay */
    
     $pacisTotalInsurable = $pax + $pacisCoverPay + $pacisPoliticalViolenceRider + $pacisExcessProtectionRider;

    
        
      $sql = "INSERT INTO `taxis` SET `names`='{$_POST['firstName']}' ,`phone`='{$_POST['phone']}' ,`email`='{$_POST['email']}' ,`idNumber`='{$_POST['idNumber']}' ,`chasisNumber`='{$_POST['chasisNumber']}',`company`='Pacis' ,`carValue`='{$_POST['carValue']}',`yom`='{$_POST['yom']}' ,`numberOfPassenger`='{$_POST['numberOfPassengers']}', `excessProtection`='$pacisExcessProtectionRider' ,`politicalViolence`='$pacisPoliticalViolenceRider',`kraPin`='{$_POST['kraPin']}',`amount`='$pacisTotalInsurable',`insurancetype`='Comprehensive', `cstatus`='Pending Payment'";
      
      $db->query($sql);
  if($db->error){
      echo $db->error;
  }else{
      //echo "submitted";
  }
     
   }
?>
