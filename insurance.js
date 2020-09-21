
function myFunction(){
    var carValue = parseFloat(document.getElementById("value").value);
    var excessProtection = parseFloat( document.getElementById("excessProtection").value );
    var politicalViolence = parseFloat( document.getElementById("politicalViolence").value );
    var lossOfUse = parseFloat( document.getElementById("lossOfUse").value )

/* pacis insurance */
   
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
        var pacisPoliticalViolenceRider = pacisCoverPay * 0.25;
        if (pacisPoliticalViolenceRider < 3000){
            pacisPoliticalViolenceRider = 3000;
            console.log(pacisPoliticalViolenceRider);
        }
        console.log(pacisPoliticalViolenceRider);
    }   else if (politicalViolence < 1){
        var pacisPoliticalViolenceRider = 0;  
        console.log(pacisPoliticalViolenceRider)  
    }



    /* excess protector*/
    if ( excessProtection > 0){
        var pacisExcessProtectionRider = pacisCoverPay * 0.25;
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
    
    var pacisTotalInsurable =  pacisExcessProtectionRider + pacisPoliticalViolenceRider + pacisLossOfUseRider + pacisCoverPay ;

    document.getElementById("pacis").innerHTML = pacisTotalInsurable.toFixed(0) ;
    document.getElementById("pacisComp").innerHTML = pacisTotalInsurable.toFixed(0) ;


    /** Salaam */

   /* value of car */

   if ( carValue >= 3000000){
    var salaamCoverPay = carValue * 0.035;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
    console.log(salaamCoverPay);
}   else if (carValue >= 1000000){
    var salaamCoverPay = carValue * 0.035;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
      console.log(salaamCoverPay);  


} else if (carValue >= 500000){
    var salaamCoverPay = carValue * 0.035;
    if (salaamCoverPay < 25000){
        salaamCoverPay = 25000;
    }
      console.log(salaamCoverPay); 
} 


/*riders*/


/*political violence*/
if ( politicalViolence > 0){
    var salaamPoliticalViolenceRider = salaamCoverPay * 0.25;
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
    var salaamExcessProtectionRider = salaamCoverPay * 0.25;
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
   
  
}   else if ( lossOfUse < 1){
    var salaamLossOfUseRider = 0;
              
}



/* Salaam Total Pay */

var salaamTotalInsurable =  salaamExcessProtectionRider + salaamPoliticalViolenceRider +salaamLossOfUseRider + salaamCoverPay

document.getElementById("salaam").innerHTML = salaamTotalInsurable.toFixed(0) ;
document.getElementById("salaamComp").innerHTML = salaamTotalInsurable.toFixed(0) ;








/** trident Instrident */


   /* value of car */

   if ( carValue >= 3000000){
    var tridentCoverPay = carValue * 0.035;
    if (tridentCoverPay < 20000){
        tridentCoverPay = 20000;
    }
    console.log(tridentCoverPay);
}   else if (carValue >= 1000000){
    var tridentCoverPay = carValue * 0.035;
    if (tridentCoverPay < 20000){
        tridentCoverPay = 20000;
    }
      console.log(tridentCoverPay);  


} else if (carValue >= 500000){
    var tridentCoverPay = carValue * 0.035;
    if (tridentCoverPay < 20000){
        tridentCoverPay = 20000;
    }
      console.log(tridentCoverPay); 
} 

  
/*riders*/


/*political violence*/
if ( politicalViolence > 0){
    var tridentPoliticalViolenceRider = tridentCoverPay * 0.25;
    if (tridentPoliticalViolenceRider < 2500){
        satridentliticalViolenceRider = 2500;
        console.log(tridentPoliticalViolenceRider);
    }
    console.log(tridentPoliticalViolenceRider);
}   else if (politicalViolence < 1){
    var tridentPoliticalViolenceRider = 0;  
    console.log(tridentPoliticalViolenceRider)  
}



/* excess protector*/
if ( excessProtection > 0){
    var tridentExcessProtectionRider = tridentCoverPay * 0.25;
    if (tridentExcessProtectionRider < 2500){
        tridentExcessProtectionRider = 2500;
        console.log(tridentExcessProtectionRider);
    }
    console.log(tridentExcessProtectionRider);
}   else if (excessProtection < 1){
    var tridentExcessProtectionRider = 0;  
    console.log(tridentExcessProtectionRider)  
}

 /*Loss of Use*/
 if ( lossOfUse > 0){
    var tridentLossOfUseRider = 0;
   
  
}   else if ( lossOfUse < 1){
    var tridentLossOfUseRider = 0;
              
}



/* Pacis Total Pay */

var tridentTotalInsurable =  tridentExcessProtectionRider + tridentPoliticalViolenceRider +tridentLossOfUseRider + tridentCoverPay

document.getElementById("trident").innerHTML = tridentTotalInsurable.toFixed(0) ;
document.getElementById("tridentComp").innerHTML = tridentTotalInsurable.toFixed(0) ;





}