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
    </body>
</html>


