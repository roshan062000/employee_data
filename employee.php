<?php 
    include('employeeconn.php');?>
    <html>
    <head></head>
    <title>Employee Details</title>
    <body>
        <form action="employeesave.php"  method="POST">
            <div class="employee_name">
                <label>Employee Name</label>
                <input type="text" name="employee_name" placeholder="Enter your name">
                <br>
            </div>
            <div class="employee_number">
                <label>Enter contact Number</label>
                <input type="number" name="employee_number" placeholder="Enter your Number">
            </div>
            <div class="employee_gender">
                <label>Gender</label>
                <input type="radio" name="employee_gender" value="Male" >Male
                <input type="radio" name="employee_gender" value="Female" >Female
                
            </div>
            <div class="employee_country">
                <label>Choose Country</label>
                
                <select name="employee_country">
                    <option value="india">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="China">China</option>
                </select>
            </div>
            <div class="employee_hobbies">
                <label>Hobbies</label>
                <input type="checkbox" name="employee_hobbies[]" value="Singing" >Singing
                <input type="checkbox" name="employee_hobbies[]" value="Writing" >Writing
                <input type="checkbox" name="employee_hobbies[]" value="Acting" >Acting
                <input type="checkbox" name="employee_hobbies[]" value="Golf" >Golf

            </div>
            <div class="father_name">
                <label>Fathers Name</label>
                <input type="text" name="father_name" placeholder="Enter your father name" required>

            </div>
            <div class="button">
                <input type="submit">

            </div>
            
        </form>
        <h4>Employee Data Table</h4>
        <style> table, th, td{border:1px solid blue; }
        </style>
        <table style="width:50%">
           <td>
            <th>Employee Name</th>
            <th>Employee Number</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Hobbies</th>
            <th>Father Name</th>
            <th>Action</th>
            </td>
    
            <?php
            $sql_fetchdata="SELECT * FROM `employee_details`";
            $result=mysqli_query($mysqli,$sql_fetchdata);
            while($rows=$result->fetch_assoc())
            { ?>
            <tr>
                <td><?php echo $rows['id'] ;?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['contact'] ;?></td>
                <td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['country']; ?></td>
                <td><?php echo $rows['hobbies']; ?></td>
                <td><?php echo $rows['father_name']; ?></td>
                <td><a href="editdata.php?editid=<?php echo $rows['id'] ;?>">Edit</a> <a href="deletedata.php?deleteid=<?php echo $rows['id'] ;?>">Delete</a></td>

             </tr>
                
            <?php } ?>
        </table>
    </body>
</html>


