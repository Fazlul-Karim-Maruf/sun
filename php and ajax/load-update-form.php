<?php 
$student_id = $_POST['id'];
$conn = mysqli_connect("localhost","root","","test")or die('connection failed');
$sql = "SELECT * FROM students WHERE id = {$student_id};";
$result = mysqli_query($conn,$sql);
$output ="";

if (mysqli_num_rows($result) > 0) {
 
while($row=mysqli_fetch_assoc($result)){
    $output.= "<tr> <tr>

                    <td>
                        First name
                    </td>
                    
                    <td><input type='text' id='edit-fname' value='{$row['first_name']}'></td>
                    <td><input type='text' id='edit-id'  hidden value='{$row['id']}'></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><input type='text' id='edit-lname' value='{$row['last_name']}'></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' id='edit-submit' value='save'></td>
                </tr>
     </tr>";
}
 
mysqli_close($conn);
echo $output;
} else {
    echo '<h2> no record found</h2>';
}




?>