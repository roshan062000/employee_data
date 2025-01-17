<?php
include('employeeconn.php');
//print_r($_POST);

//to store the values
$employee_name=$_POST['employee_name'];
$employee_number=$_POST['employee_number'];
$employee_gender=$_POST['employee_gender'];
$employee_country=$_POST['employee_country'];
$employee_hobbies=implode(",",$_POST['employee_hobbies']);
$father_name=$_POST['father_name'];

//to insert into sql
$sql= "INSERT INTO `employee_details`( `name`, `contact`, `gender`, `country`, `hobbies`,`father_name`) VALUES ('$employee_name','$employee_number','$employee_gender','$employee_country','$employee_hobbies','$father_name')";
//echo $sql;
$insertData = mysqli_query($mysqli,$sql);
if($insertData)
{
    echo'Data inserted successfully';
}
else{
    echo'not successfull';
}
?>