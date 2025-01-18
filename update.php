<?php
include('employeeconn.php');

print_r($_REQUEST);

//print_r($_POST);

//to store the values
$employee_name=$_POST['employee_name'];
$employee_contact=$_POST['employee_contact'];
$employee_gender=$_POST['employee_gender'];
$employee_country=$_POST['employee_country'];
$employee_hobbies=implode(",",$_POST['employee_hobbies']);
$father_name=$_POST['father_name'];
$update_employee_id = $_POST['update_employee_id'];
//to insert into sql
 $sql= "UPDATE `employee_details` SET `name`='$employee_name',`contact`='$employee_contact',`gender`='$employee_gender',`country`='$employee_country',`hobbies`='$employee_hobbies',`father_name`='$father_name' WHERE id = ".$update_employee_id."";
echo $sql;
$updateData = mysqli_query($mysqli,$sql);
if($updateData)
{
    echo'Data inserted successfully';
    header("Location:employee.php");

}
else{
    echo'not successfull';
}
?>