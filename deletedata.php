

<?php
//this is for including the connection in the page
include('employeeconn.php');


   $deleteid = $_GET['deleteid'];
   //echo $deleteid;

//to delete data
$sqlDelete= "DELETE FROM `employee_details` WHERE id = $deleteid";
//echo $sqlDelete;
//execustion is being done here
$deleteData = mysqli_query($mysqli,$sqlDelete);

if($deleteData){
    echo'Deleted successfully';
    header("Location:employee.php");

}
else{
echo'not deleted';
}

?>