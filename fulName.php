<?php 
if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $fname=$_POST['first_name'];
    $mname=$_POST['middle_name'];
    $lname=$_POST['last_name'];

    $name=$fname.' '.$mname.' '.$lname;
}
 ?>

<form action="" method="post">
<table>
    <tr>
        <td>First Name : </td>
        <td><input type="text" name="first_name" placeholder="First Name " ></td>
    </tr>
    <tr>
        <td>Middle Name : </td>
        <td><input type="text " name="middle_name" placeholder="Middle Name"</td>
    </tr>
    <tr>
        <td>Last Name : </td>
        <td><input type="text" name="last_name" placeholder="Last Name" ></td>
    </tr>
    <tr>
        <td>Result : </td>
        <td><textarea rows="5" cols="50"><?php  echo  $name; ?></textarea></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="SUBMIT"></td>
    </tr>
</table>
</form>