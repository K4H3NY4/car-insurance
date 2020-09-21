<?php
 require('config/db.php');

//ALL INSURANCE COMPANIES
$query = 'SELECT * FROM private ORDER BY id DESC';
$query_pending = 'SELECT * FROM private  WHERE current_status = "Pending Payment" ORDER BY id DESC';
$query_complete = 'SELECT * FROM private  WHERE current_status = "Complete" ORDER BY id DESC';
$query_canceled = 'SELECT * FROM private  WHERE current_status = "Canceled" ORDER BY id DESC';

$result = mysqli_query($db,$query);
$result_pending = mysqli_query($db,$query_pending);
$result_complete = mysqli_query($db,$query_complete);
$result_canceled = mysqli_query($db,$query_canceled);


$privates = mysqli_fetch_all($result, MYSQLI_ASSOC);
$privates_pending = mysqli_fetch_all($result_pending, MYSQLI_ASSOC);
$privates_complete = mysqli_fetch_all($result_complete, MYSQLI_ASSOC);
$privates_canceled = mysqli_fetch_all($result_canceled, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_free_result($result_pending);
mysqli_free_result($result_complete);
mysqli_free_result($result_canceled);


//PACIS INSURANCE COMAPANY
$query_pacis = 'SELECT * FROM private WHERE company = "Pacis" ORDER BY id DESC';
$query_pending_pacis = 'SELECT * FROM private  WHERE current_status = "Pending Payment" AND company = "Pacis" ORDER BY id DESC';
$query_complete_pacis = 'SELECT * FROM private  WHERE current_status = "Complete" AND company = "Pacis" ORDER BY id DESC';
$query_canceled_pacis = 'SELECT * FROM private  WHERE current_status = "Canceled" AND company = "Pacis" ORDER BY id DESC';

$result_pacis = mysqli_query($db,$query_pacis);
$result_pending_pacis = mysqli_query($db,$query_pending_pacis);
$result_complete_pacis = mysqli_query($db,$query_complete_pacis);
$result_canceled_pacis = mysqli_query($db,$query_canceled_pacis);


$privates_pacis = mysqli_fetch_all($result_pacis, MYSQLI_ASSOC);
$privates_pending_pacis = mysqli_fetch_all($result_pending_pacis, MYSQLI_ASSOC);
$privates_complete_pacis = mysqli_fetch_all($result_complete_pacis, MYSQLI_ASSOC);
$privates_canceled_pacis = mysqli_fetch_all($result_canceled_pacis, MYSQLI_ASSOC);

mysqli_free_result($result_pacis);
mysqli_free_result($result_pending_pacis);
mysqli_free_result($result_complete_pacis);
mysqli_free_result($result_canceled_pacis);


//SANLAM INSURANCE COMPANIES
$query_sanlam = 'SELECT * FROM private WHERE company="Sanlam" ORDER BY id DESC';
$query_pending_sanlam = 'SELECT * FROM private  WHERE current_status = "Pending Payment" AND company = "Sanlam" ORDER BY id DESC';
$query_complete_sanlam = 'SELECT * FROM private  WHERE current_status = "Complete" AND company = "Sanlam" ORDER BY id DESC';
$query_canceled_sanlam = 'SELECT * FROM private  WHERE current_status = "Canceled" AND company = "Sanlam" ORDER BY id DESC';

$result_sanlam = mysqli_query($db,$query_sanlam);
$result_pending_sanlam = mysqli_query($db,$query_pending_sanlam);
$result_complete_sanlam = mysqli_query($db,$query_complete_sanlam);
$result_canceled_sanlam = mysqli_query($db,$query_canceled_sanlam);


$privates_sanlam = mysqli_fetch_all($result_sanlam, MYSQLI_ASSOC);
$privates_pending_sanlam = mysqli_fetch_all($result_pending_sanlam, MYSQLI_ASSOC);
$privates_complete_sanlam = mysqli_fetch_all($result_complete_sanlam, MYSQLI_ASSOC);
$privates_canceled_sanlam = mysqli_fetch_all($result_canceled_sanlam, MYSQLI_ASSOC);

mysqli_free_result($result_sanlam);
mysqli_free_result($result_pending_sanlam);
mysqli_free_result($result_complete_sanlam);
mysqli_free_result($result_canceled_sanlam);


//TRIDENT INSURANCE COMPANIES
$query_trident = 'SELECT * FROM private WHERE company = "Trident" ORDER BY id DESC';
$query_pending_trident = 'SELECT * FROM private  WHERE current_status = "Pending Payment" AND company = "Trident" ORDER BY id DESC';
$query_complete_trident = 'SELECT * FROM private  WHERE current_status = "Complete" AND company = "Trident" ORDER BY id DESC';
$query_canceled_trident = 'SELECT * FROM private  WHERE current_status = "Canceled" AND company = "Trident" ORDER BY id DESC';

$result_trident = mysqli_query($db,$query_trident);
$result_pending_trident = mysqli_query($db,$query_pending_trident);
$result_complete_trident = mysqli_query($db,$query_complete_trident);
$result_canceled_trident = mysqli_query($db,$query_canceled_trident);


$privates_trident = mysqli_fetch_all($result_trident, MYSQLI_ASSOC);
$privates_pending_trident = mysqli_fetch_all($result_pending_trident, MYSQLI_ASSOC);
$privates_complete_trident = mysqli_fetch_all($result_complete_trident, MYSQLI_ASSOC);
$privates_canceled_trident = mysqli_fetch_all($result_canceled_trident, MYSQLI_ASSOC);

mysqli_free_result($result_trident);
mysqli_free_result($result_pending_trident);
mysqli_free_result($result_complete_trident);
mysqli_free_result($result_canceled_trident);



//GA INSURANCE COMPANIES
$query_ga = 'SELECT * FROM private WHERE company = "GA Insurance" ORDER BY id DESC';
$query_pending_ga = 'SELECT * FROM private  WHERE current_status = "Pending Payment" AND company = "GA Insurance" ORDER BY id DESC';
$query_complete_ga = 'SELECT * FROM private  WHERE current_status = "Complete" AND company = "GA Insurance" ORDER BY id DESC';
$query_canceled_ga = 'SELECT * FROM private  WHERE current_status = "Canceled" AND company = "GA Insurance" ORDER BY id DESC';

$result_ga = mysqli_query($db,$query_ga);
$result_pending_ga = mysqli_query($db,$query_pending_ga);
$result_complete_ga = mysqli_query($db,$query_complete_ga);
$result_canceled_ga = mysqli_query($db,$query_canceled_ga);


$privates_ga = mysqli_fetch_all($result_ga, MYSQLI_ASSOC);
$privates_pending_ga = mysqli_fetch_all($result_pending_ga, MYSQLI_ASSOC);
$privates_complete_ga = mysqli_fetch_all($result_complete_ga, MYSQLI_ASSOC);
$privates_canceled_ga = mysqli_fetch_all($result_canceled_ga, MYSQLI_ASSOC);

mysqli_free_result($result_ga);
mysqli_free_result($result_pending_ga);
mysqli_free_result($result_complete_ga);
mysqli_free_result($result_canceled_ga);


//var_dump($privates);


//ALL THIRD PARTY INSURANCE COMPANIES
$query_tp = 'SELECT * FROM private_tp ORDER BY id DESC';
$query_pending_tp = 'SELECT * FROM private_tp  WHERE current_status = "Pending Payment" ORDER BY id DESC';
$query_complete_tp = 'SELECT * FROM private_tp  WHERE current_status = "Complete" ORDER BY id DESC';
$query_canceled_tp = 'SELECT * FROM private_tp  WHERE current_status = "Canceled" ORDER BY id DESC';

$result_tp = mysqli_query($db,$query_tp);
$result_pending_tp = mysqli_query($db,$query_pending_tp);
$result_complete_tp = mysqli_query($db,$query_complete_tp);
$result_canceled_tp = mysqli_query($db,$query_canceled_tp);


$privates_tp = mysqli_fetch_all($result_tp, MYSQLI_ASSOC);
$privates_pending_tp = mysqli_fetch_all($result_pending_tp, MYSQLI_ASSOC);
$privates_complete_tp = mysqli_fetch_all($result_complete_tp, MYSQLI_ASSOC);
$privates_canceled_tp = mysqli_fetch_all($result_canceled_tp, MYSQLI_ASSOC);

mysqli_free_result($result_tp);
mysqli_free_result($result_pending_tp);
mysqli_free_result($result_complete_tp);
mysqli_free_result($result_canceled_tp);


//PACIS INSURANCE COMAPANY
$query_pacis_tp = 'SELECT * FROM private_tp WHERE company = "Pacis" ORDER BY id DESC';
$query_pending_pacis_tp = 'SELECT * FROM private_tp  WHERE current_status = "Pending Payment" AND company = "Pacis" ORDER BY id DESC';
$query_complete_pacis_tp = 'SELECT * FROM private_tp  WHERE current_status = "Complete" AND company = "Pacis" ORDER BY id DESC';
$query_canceled_pacis_tp = 'SELECT * FROM private_tp  WHERE current_status = "Canceled" AND company = "Pacis" ORDER BY id DESC';

$result_pacis_tp = mysqli_query($db,$query_pacis_tp);
$result_pending_pacis_tp = mysqli_query($db,$query_pending_pacis_tp);
$result_complete_pacis_tp = mysqli_query($db,$query_complete_pacis_tp);
$result_canceled_pacis_tp = mysqli_query($db,$query_canceled_pacis_tp);


$privates_pacis_tp = mysqli_fetch_all($result_pacis_tp, MYSQLI_ASSOC);
$privates_pending_pacis_tp = mysqli_fetch_all($result_pending_pacis_tp, MYSQLI_ASSOC);
$privates_complete_pacis_tp = mysqli_fetch_all($result_complete_pacis_tp, MYSQLI_ASSOC);
$privates_canceled_pacis_tp = mysqli_fetch_all($result_canceled_pacis_tp, MYSQLI_ASSOC);

mysqli_free_result($result_pacis_tp);
mysqli_free_result($result_pending_pacis_tp);
mysqli_free_result($result_complete_pacis_tp);
mysqli_free_result($result_canceled_pacis_tp);


//SANLAM INSURANCE COMPANIES
$query_sanlam_tp = 'SELECT * FROM private_tp WHERE company="Sanlam" ORDER BY id DESC';
$query_pending_sanlam_tp = 'SELECT * FROM private_tp  WHERE current_status = "Pending Payment" AND company = "Sanlam" ORDER BY id DESC';
$query_complete_sanlam_tp = 'SELECT * FROM private_tp  WHERE current_status = "Complete" AND company = "Sanlam" ORDER BY id DESC';
$query_canceled_sanlam_tp = 'SELECT * FROM private_tp  WHERE current_status = "Canceled" AND company = "Sanlam" ORDER BY id DESC';

$result_sanlam_tp = mysqli_query($db,$query_sanlam_tp);
$result_pending_sanlam_tp = mysqli_query($db,$query_pending_sanlam_tp);
$result_complete_sanlam_tp = mysqli_query($db,$query_complete_sanlam_tp);
$result_canceled_sanlam_tp = mysqli_query($db,$query_canceled_sanlam);


$privates_sanlam_tp = mysqli_fetch_all($result_sanlam_tp, MYSQLI_ASSOC);
$privates_pending_sanlam_tp = mysqli_fetch_all($result_pending_sanlam_tp, MYSQLI_ASSOC);
$privates_complete_sanlam_tp = mysqli_fetch_all($result_complete_sanlam_tp, MYSQLI_ASSOC);
$privates_canceled_sanlam_tp = mysqli_fetch_all($result_canceled_sanlam_tp, MYSQLI_ASSOC);

mysqli_free_result($result_sanlam_tp);
mysqli_free_result($result_pending_sanlam_tp);
mysqli_free_result($result_complete_sanlam_tp);
mysqli_free_result($result_canceled_sanlam_tp);


//TRIDENT INSURANCE COMPANIES
$query_trident_tp = 'SELECT * FROM private_tp WHERE company = "Trident" ORDER BY id DESC';
$query_pending_trident_tp = 'SELECT * FROM private_tp  WHERE current_status = "Pending Payment" AND company = "Trident" ORDER BY id DESC';
$query_complete_trident_tp = 'SELECT * FROM private_tp  WHERE current_status = "Complete" AND company = "Trident" ORDER BY id DESC';
$query_canceled_trident_tp = 'SELECT * FROM private_tp  WHERE current_status = "Canceled" AND company = "Trident" ORDER BY id DESC';

$result_trident_tp = mysqli_query($db,$query_trident_tp);
$result_pending_trident_tp = mysqli_query($db,$query_pending_trident_tp);
$result_complete_trident_tp = mysqli_query($db,$query_complete_trident_tp);
$result_canceled_trident_tp = mysqli_query($db,$query_canceled_trident_tp);


$privates_trident_tp = mysqli_fetch_all($result_trident_tp, MYSQLI_ASSOC);
$privates_pending_trident_tp = mysqli_fetch_all($result_pending_trident_tp, MYSQLI_ASSOC);
$privates_complete_trident_tp = mysqli_fetch_all($result_complete_trident_tp, MYSQLI_ASSOC);
$privates_canceled_trident_tp = mysqli_fetch_all($result_canceled_trident_tp, MYSQLI_ASSOC);

mysqli_free_result($result_trident_tp);
mysqli_free_result($result_pending_trident_tp);
mysqli_free_result($result_complete_trident_tp);
mysqli_free_result($result_canceled_trident_tp);



//GA INSURANCE COMPANIES
$query_ga_tp = 'SELECT * FROM private_tp WHERE company = "GA Insurance" ORDER BY id DESC';
$query_pending_ga_tp = 'SELECT * FROM private_tp  WHERE current_status = "Pending Payment" AND company = "GA Insurance" ORDER BY id DESC';
$query_complete_ga_tp = 'SELECT * FROM private_tp  WHERE current_status = "Complete" AND company = "GA Insurance" ORDER BY id DESC';
$query_canceled_ga_tp = 'SELECT * FROM private_tp  WHERE current_status = "Canceled" AND company = "GA Insurance" ORDER BY id DESC';

$result_ga_tp = mysqli_query($db,$query_ga_tp);
$result_pending_ga_tp = mysqli_query($db,$query_pending_ga_tp);
$result_complete_ga_tp = mysqli_query($db,$query_complete_ga_tp);
$result_canceled_ga_tp = mysqli_query($db,$query_canceled_ga_tp);


$privates_ga_tp = mysqli_fetch_all($result_ga_tp, MYSQLI_ASSOC);
$privates_pending_ga_tp = mysqli_fetch_all($result_pending_ga_tp, MYSQLI_ASSOC);
$privates_complete_ga_tp = mysqli_fetch_all($result_complete_ga_tp, MYSQLI_ASSOC);
$privates_canceled_ga_tp = mysqli_fetch_all($result_canceled_ga_tp, MYSQLI_ASSOC);

mysqli_free_result($result_ga_tp);
mysqli_free_result($result_pending_ga_tp);
mysqli_free_result($result_complete_ga_tp);
mysqli_free_result($result_canceled_ga_tp);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="inc/css/mdb.css">
    <link rel="stylesheet" href="inc/css/bootstrap.css">
    <script src="inc/js/jquery.js"></script>

    <style>
        .tall{
            height: 100px;
            
        }

        .details{
            height: 100vh;

        }
        .all_comp{
            display:none;
        }

        .all_comp_complete{
            display:none;
        }
       
        .all_comp_pending{
            
        }

        .all_comp_canceled{
            display:none;
        }

        .all_ins{
            display: none ;
        }

        .ins_pacis{
            display: none;
        }

        .ins_sanlam{
            display: none;
        }
        .ins_trident{
            display: none;
        }
        .ins_ga{
            display: none;
        }
        .d-fixed{
            position:fixed;
            width: 16.3%;

        }

    </style>
</head>
<body>
    <div class="d-flex bg-info">
        <div class="col-2 bg-info details">
           
            <div class="d-fixed">
                <h2 class="text-center">Hedge<br>Insurance</h2>
                <nav class="nav">
                    Private Vehicles
                    <br>
                    Motor Commercial
                    <br>
                    Cranes
                    <br>
                </nav>
                
               
             </div>
        </div>
        <div class="col-10 bg-dark">
            <div class="d-lg-flex d-md-inline">
            <div class="col-lg-3 col-md-6 p-3 bg-transparent">
               <div class="card tall aqua-gradient">
                Private Vehicles
               </div>
            </div>
            <div class="col-lg-3 col-md-6 p-3 bg-transparent">
                <div class="col-12 purple-gradient card tall">
                    Motor Commercial
                   </div>
            </div>
            <div class="col-lg-3 col-md-6 p-3 bg-transparent">
                <div class="card tall peach-gradient">
                    Cranes
                   </div>                            
            </div>
            <div class="col-lg-3 p-3 col-md-6 bg-transparent">
                <div class="card tall warm-flame-gradient">
                    PSV
                   </div>                 
            </div>
            </div>
            <hr class="bg-light">
            <div class=" text-center">
        <h2 class="text-white">Private Vehicles</h2>
        <button class="btn btn-elegant" id="ins_all">ALL</button>
        <button class="btn btn-elegant" id="ins_pacis">Pacis</button>
        <button class="btn btn-elegant" id="ins_sanlam">Sanlam</button>
        <button class="btn btn-elegant" id="ins_trident">Trident</button>
        <button class="btn btn-elegant" id="ins_ga">GA Insurance</button>       
        <br>
        <br>
                <button class="btn btn-sm btn-amber" id="all_comp">All</button>
                <button class="btn btn-sm btn-green" id="all_comp_pending">Pending Payments</button>
                <button class="btn btn-sm btn-cyan" id="all_comp_complete">Complete</button>
                <button class="btn btn-sm btn-danger" id="all_comp_canceled">Cancelled</button> 
                <a class="btn btn-sm btn-brown " href="dashdesign.php">Refresh</a>              
        <br><br>        
    </div> 
        <!-- 
        =======================
        ALL COMPANIES
        =======================
         -->
         <div class="all_ins">
            <div class="d-lg-flex d-md-block">
                <div class="col-lg-6  col-md-12 bg-transparent">
                <h4 class="text-white">Third Party</h4>
                <input type="text" id="myInput" class="form-control-sm mb-2 w-50" onkeyup="myFunction()" placeholder="Search By Reg Number Third Party">               
                <!--
                ============================
                THIRD PARTY ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable_tp" class="table table-sm  table-hover table-borderless all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                THIRD PARTY ALL 
                COMPLETE
                ===========================
                -->           
                 <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL 
                PENDING
                ===========================
                -->          
                <table id="myTable" class="table table-sm  table-hover table-borderless all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL 
                CANCLED
                ===========================
                -->                              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         
         <!--
         ========================
         END OF ALL COMPANIES
         ======================= 
            </div>-->
            <hr class="d-lg-none bg-white">
            <div class="col-lg-6 col-md-12 bg-transparent">
                <h4 class="text-white ">Comprehensive Covers</h4> 
                <input type="text" id="searchComp" class=" form-control-sm mb-2 w-50" onkeyup="searchComp()" placeholder="Search By Reg Number Comprehensive">               
                 
               <!--
                 ============================
                COMPREHENSIVE ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="compAll" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                -->           
                 <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->          
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                -->                              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         </div>
        </div>
         <!--
         ========================
         END OF ALL COMPANIES
         =======================    
         --->
         <!-- 
        =======================
        PACIS COMPANIES
        =======================
         -->
         <div class="ins_pacis">
         <div class="d-lg-flex d-md-block">
                <div class="col-lg-6  col-md-12 bg-transparent">
                <h4 class="text-white">Third Party</h4>                
                <!--
                ============================
                THIRD PARTY ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pacis_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                THIRD PARTY ALL 
                COMPLETE
                ===========================
                -->          
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_pacis_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL 
                PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_pacis_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                       
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL 
                CANCLED
                ===========================
                -->           
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_pacis_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
            <hr class="d-lg-none bg-white">
            <div class="col-lg-6 col-md-12 bg-transparent">
            <h4 class="text-white">Comprehensive Covers</h4>          
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pacis as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                -->          
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_pacis as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_pacis as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                       
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                -->           
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_pacis as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         </div>
      </div>
         <!--
         ========================
         END OF PACIS COMPANIES
         =======================    
         --->
         <!-- 
        =======================
        SANLAM COMPANIES
        =======================
         -->
         <div class="ins_sanlam">
         <div class="d-lg-flex d-md-block">
                <div class="col-lg-6  col-md-12 bg-transparent">
                <h4 class="text-white">Third Party</h4>                
                <!--
                ============================
                THIRD PARTY ALL
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_sanlam_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                THIRD PARTY ALL COMPLETE
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_sanlam_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_sanlam_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL CANCLED
                ===========================
                -->             
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_sanlam_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
            <hr class="d-lg-none bg-white">
            <div class="col-lg-6 col-md-12 bg-transparent">
                <h4 class="text-white">Comprehensive Covers</h4>
                <!--
                COMPREHENSIVE ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_sanlam as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_sanlam as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_sanlam as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                -->             
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_sanlam as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         </div>
        </div>
         <!--
         ========================
         END OF ALL COMPANIES
         =======================    
         --->
         <!-- 
        =======================
        TRIDENT COMPANIES
        =======================
         -->
         <div class="ins_trident">
         <div class="d-lg-flex d-md-block ins_trident">
                <div class="col-lg-6  col-md-12 bg-transparent">
                <h4 class="text-white">Third Party</h4>
               <!--
                 ============================
                THIRD PARTY ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_trident_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                THIRD PARTY ALL 
                COMPLETE
                ===========================
                --> 
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_trident_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
               THIRD PARTY ALL 
                PENDING
                ===========================
                -->             
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_trident_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                THIRD PARTY ALL 
                CANCLED
                ===========================
                -->               
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_trident_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
            <hr class="d-lg-none bg-white">
            <div class="col-lg-6 col-md-12 bg-transparent">
                <h4 class="text-white">Comprehensive Covers</h4>                
               <!--
                 ============================
                COMPREHENSIVE ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_trident as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                --> 
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_trident as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->             
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_trident as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                -->               
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_trident as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         </div>
        </div>
         <!--
         ========================
         END OF TRIDENT COMPANIES
         =======================    
         --->
         <!-- 
        =======================
        GA COMPANIES
        =======================
         -->
         <div class="ins_ga">
         <div class="d-lg-flex d-md-block ins_ga">
                <div class="col-lg-6  col-md-12 bg-transparent">
                <h4 class="text-white">Third Party</h4>                
                <!--
                ============================
                THIRD PARTY ALL
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_ga_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_ga_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_ga_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                --> 
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_ga_tp as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCoverPrivateTP.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
            <hr class="d-lg-none bg-white">
            <div class="col-lg-6 col-md-12 bg-transparent">
                <h4 class="text-white ">Comprehensive Covers</h4>               
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING PAYMENT
                ===========================
                -->
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_ga as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                <!--
                ============================
                COMPREHENSIVE ALL 
                COMPLETE
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_complete" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_complete_ga as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                PENDING
                ===========================
                -->              
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_pending" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_pending_ga as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
                 <!--
                ============================
                COMPREHENSIVE ALL 
                CANCLED
                ===========================
                --> 
                <table id="myTable" class="table table-sm  table-hover table-borderless   all_comp_canceled" >
                    <thead class="bg-warning">
                        <tr class="header">
                            <th>Reg Number</th>
                            <th>Phone Number</th>
                            <th>Vehicle Value</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    <?php foreach ( $privates_canceled_ga as $private) :?>         
                <tbody class="text-white text-sm-left">
                    <tr>                      
                        <td><?php echo $private ["reg_number"]; ?></td>
                        <td><?php echo $private ["phone_number"]; ?></td>
                        <td><?php echo $private ["vehicle_value"]; ?></td>
                        <td><?php echo $private ["company"]; ?></td>
                        <td><?php echo $private ["current_status"]; ?></td>
                        <td><?php echo $private ["created_at"]; ?></td>
                        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
                    </tr>                                        
                </tbody>
                <?php endforeach  ;?>
                </tbody>
                </table>
            </div>
         </div>
        </div>
         <!--
         ========================
         END OF GA COMPANIES
         =======================    
         --->
        </div>
    </div>

<script>
    
$(document).ready(function() {
$( '#all_comp' ).click(function () {
$('.all_comp_pending').hide();
$('.all_comp_complete').hide();
$('.all_comp_canceled').hide();
$('.all_comp').show();
});

$( '#all_comp_pending' ).click(function () {
$('.all_comp').hide();
$('.all_comp_complete').hide();
$('.all_comp_canceled').hide();
$('.all_comp_pending').show();
});

$( '#all_comp_complete' ).click(function () {
$('.all_comp').hide();
$('.all_comp_pending').hide();
$('.all_comp_canceled').hide();
$('.all_comp_complete').show();
});

$( '#all_comp_canceled' ).click(function () {
$('.all_comp').hide();
$('.all_comp_pending').hide();
$('.all_comp_complete').hide();
$('.all_comp_canceled').show();
});

$( '#ins_all' ).click(function () {
$('.ins_pacis').hide();
$('.ins_ga').hide();
$('.ins_sanlam').hide();
$('.ins_trident').hide();
$('.all_ins').show();
});

$( '#ins_pacis' ).click(function () {
$('.all_ins').hide();
$('.ins_ga').hide();
$('.ins_sanlam').hide();
$('.ins_trident').hide();
$('.ins_pacis').show();
});

$( '#ins_sanlam' ).click(function () {
$('.all_ins').hide();
$('.ins_pacis').hide();
$('.ins_trident').hide();
$('.ins_ga').hide();
$('.ins_sanlam').show();
});

$( '#ins_trident' ).click(function () {
$('.all_ins').hide();
$('.ins_pacis').hide();
$('.ins_sanlam').hide();
$('.ins_ga').hide();
$('.ins_trident').show();
});

$( '#ins_ga' ).click(function () {
$('.all_ins').hide();
$('.ins_pacis').hide();
$('.ins_sanlam').hide();
$('.ins_trident').hide();
$('.ins_ga').show();
})
});

function myFunction(){
    var input, filter, table, tr, td, i ,txtValue;
    input=document.getElementById("myInput");
    
    filter=input.value.toUpperCase();
    table=document.getElementById("myTable_tp");
    tr=table.getElementsByTagName("tr");

    for (i=0; i < tr.length; i++){
        td=tr[i].getElementsByTagName("td")[0];
        if(td){
            txtValue=td.textContent || td.innerText;
            if(txtValue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display="";
            }else{
                tr[i].style.display="none";
            }
        }
    }
}

function searchComp(){
    var input, filter, table, tr, td, i ,txtValue;
    input=document.getElementById("searchComp");
    filter=input.value.toUpperCase();
    table=document.getElementById("compAll");
    tr=table.getElementsByTagName("tr");

    for (i=0; i < tr.length; i++){
        td=tr[i].getElementsByTagName("td")[0];
        if(td){
            txtValue=td.textContent || td.innerText;
            if(txtValue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display="";
            }else{
                tr[i].style.display="none";
            }
        }
    }
}


    </script>
</body>
</html>