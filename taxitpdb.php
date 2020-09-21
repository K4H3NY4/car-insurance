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
