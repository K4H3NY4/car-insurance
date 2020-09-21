<?php
require('config/db.php');

$id = mysqli_real_escape_string($db, $_GET['id']);

$query = 'SELECT * FROM private_tp WHERE id = '.$id;


$result = mysqli_query($db,$query);

$private = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $update_id = mysqli_real_escape_string($db, $_POST['update_id']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    $query = "UPDATE private_tp SET
        current_status='$status'
        WHERE id = {$update_id}
    ";

$db->query($query);
if($db->error){
    echo $db->error;
}else{
    header('Location: '.ROOT_URL.'editCoverPrivateTP.php?id='.$id);

}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inc/css/bootstrap.css">
    <link rel="stylesheet" href="inc/css/mdb.css">
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
                <input type="text" id="myInput" class="form-control w-75" onkeyup="myFunction()" placeholder="Search By Reg Number">
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
            <h3 class="text-white text-center">Edit Private Third Party Cover</h3>
    <div class="container d-flex pt-5">

        <div class="container col-5 bg-transparent">
        <table class="table table-borderless table-hover table-sm bg-transparent table-hover text-white">
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $private ["names"]; ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo $private ["phone_number"]; ?></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><?php echo $private ["email"]; ?></td>
                </tr>
                <tr>
                    <td>ID Number</td>
                    <td><?php echo $private ["id_number"]; ?></td>
                </tr>
                <tr>
                    <td>Reg Number</td>
                    <td><?php echo $private ["reg_number"]; ?></td>
                </tr>
                <tr>
                    <td>Chasis Number</td>
                    <td><?php echo $private ["chasis_number"]; ?></td>
                </tr>
                <tr>
                    <td>KRA Pin</td>
                    <td><?php echo $private ["kra_pin"]; ?></td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><?php echo $private ["company"]; ?></td>
                </tr>
                <tr>
                    <td>Vehicle Value</td>
                    <td><?php echo $private ["vehicle_value"]; ?></td>
                </tr>
            
                <tr>
                    <td>Total Premium</td>
                    <td><?php echo $private ["premium_total"]; ?></td>
                </tr>
                <tr>
                    <td>Current Status</td>
                    <td><?php echo $private ["current_status"]; ?></td>
                </tr>
                <tr>
                    <td>Created at</td>
                    <td><?php echo $private ["created_at"]; ?></td>
                </tr>
                             
    
            </tbody>
        </table>
        </div>
        
        <div class="col-5 bg-light">
            <h4 class="pt-2">Edit Status</h4>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="my-select">Status</label>
                    <select id="my-select" class="custom-select" name="status">
                        <option value="<?php echo $private['current_status']; ?>"><?php echo $private['current_status']; ?></option>
                        
                        <option value="Canceled">Canceled</option>
                        <option value="Complete">Complete </option>
                        <option value="Pending Payment">Pending Payment </option>
                    </select>
                    <input type="hidden" name="update_id" value="<?php echo $private['id']; ?>">
                    <input type="submit" name="submit" value="submit" class="btn btn-sm btn-warning">
                </div>
                <a class="btn btn-sm " href="dashdesign.php">Back</a>




            </form>
        
        </div>


        </div>
</body> 
</html>
