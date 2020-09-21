<?php
 
 require('inc/config.php');
 require('inc/style.php');
 


$query = 'SELECT * FROM private ORDER BY id DESC';


$result = mysqli_query($db,$query);

$privates = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//var_dump($privates);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<style>
#myInput{
    width:100%;

}

#myTable{
    border-collapse: collapse;
    width: 100%;

}

#myTable th, #myTable td{
    
}




</style>
<body class="container">
    
<h1>Privates</h1>
<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search By Reg Number">
<br>
<table id="myTable" class="table table-sm  table-hover table-borderless " >
    <thead class="bg-warning">
        <tr class="header">
            <th>Names</th>
            <th>Reg Number</th>
            <th>Phone Number</th>
            <th>E-mail</th>
            <th>ID Number</th>
            <th>Vehicle Value</th>
            <th>Company</th>
            <th>Total Premium</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
<?php foreach ( $privates as $private) :?>

<tbody class="">
    <tr>
        <td><?php echo $private ["names"]; ?></td>
        <td><?php echo $private ["reg_number"]; ?></td>
        <td><?php echo $private ["phone_number"]; ?></td>
        <td><?php echo $private ["email"]; ?></td>
        <td><?php echo $private ["id_number"]; ?></td>
        <td><?php echo $private ["vehicle_value"]; ?></td>
        <td><?php echo $private ["company"]; ?></td>
        <td><?php echo $private ["premium_total"]; ?></td>
        <td><?php echo $private ["current_status"]; ?></td>
        <td><?php echo $private ["created_at"]; ?></td>
        <td><a class="btn btn-sm deep-blue-gradient" href="editCover.php?id=<?php echo $private['id']; ?>">Edit</a></td>
    </tr>
</tbody>
<?php endforeach  ;?>
</table>


<script>

function myFunction(){
    var input, filter, table, tr, td, i ,txtValue;

    input=document.getElementById("myInput");
    filter=input.value.toUpperCase();
    table=document.getElementById("myTable");
    tr=table.getElementsByTagName("tr");


    for (i=0; i < tr.length; i++){
        td=tr[i].getElementsByTagName("td")[1];
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