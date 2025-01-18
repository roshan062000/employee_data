<?php
include('employeeconn.php');
$editid=$_GET['editid'];

$sqledit="SELECT * FROM `employee_details` WHERE id=$editid";
$editData=mysqli_query($mysqli,$sqledit);

$single_employee_values=$editData->fetch_assoc();
print_r($single_employee_values);

?>
<html>
    <title>Edit page</title>
    <body>
        <form action="update.php" method="POST">
            <div class="employee_name">
                <label>Name</label>
                <input type="text" name="employee_name" placeholder="Enter your name" value="<?php echo $single_employee_values['name'];  ?>" required>
            </div>
            <div class="employee_contact">
                <label>Contact Number</label>
                <input type="number" name="employee_contact" placeholder="Enter your contact number" value="<?php echo $single_employee_values['contact'];?>" required>

            </div>
            <div class="employee_gender">
                <label>Gender</label>
                <input type="radio" name="employee_gender" value="Male" <?php if($single_employee_values['gender'] == "Male") { echo "checked"; } ?> >Male
                <input type="radio" name="employee_gender" value="Female" <?php if($single_employee_values['gender'] == "Female") { echo "checked"; } ?> >Female

            </div>
            <div class="employee_country">
                <label>Country</label>
                <select name="employee_country">
                    <option value="India" <?php if($single_employee_values['country'] == "India") { echo "selected"; } ?>>India</option>
                    <option value="Pakistan" <?php if($single_employee_values['country'] == "Pakistan") { echo "selected"; } ?>>Pakistan</option>
                    <option value="China" <?php if($single_employee_values['country'] == "China") { echo "selected"; } ?> >China</option>
                </select>
                <div class="employee_hobbies">
                    <label>Hobbies</label>
                    <input type="checkbox" name="employee_hobbies[]" value="Golf">Golf
                    <input type="checkbox" name="employee_hobbies[]" value="Singing">Singing
                    <input type="checkbox" name="employee_hobbies[]" value="Acting">Acting
                    <input type="checkbox" name="employee_hobbies[]" value="Writing">Writing

                </div>
                <input type="hidden" name="update_employee_id" value="<?php echo  $single_employee_values['id']; ?>">
                <div class="father_name">
                    <label>Father name</label>
                    <input type="text" name="father_name" placeholder="Enter your fathe's name" value="<?php echo  $single_employee_values['father_name']; ?>" required>

                </div>
                <div class="button">
                    <input type="submit">
                </div>
        </form>
    </body>

</html>
