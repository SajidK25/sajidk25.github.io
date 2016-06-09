<?php 
if (isset($_POST['maxmin'])) {
    $fNumber=$_POST['first_number'];
    $sNumber=$_POST['second_number'];
    $tNumber=$_POST['third_number'];
    $frNumber=$_POST['forth_number'];
    $maxmin=$_POST['maxmin'];
    switch ($maxmin) {
        case 'max':
            $result=max($fNumber,$sNumber,$tNumber,$frNumber);
            break;
        
        case 'min':
            $result=min($fNumber,$sNumber,$tNumber,$frNumber);
            break;
    }
}
 ?>

<form action="" method="post">
<table>
    <tr>
        <td>First Number : </td>
        <td><input type="text" name="first_number" placeholder="First Number " ></td>
    </tr>
    <tr>
        <td>Second Number : </td>
        <td><input type="text " name="second_number" placeholder="Second Number"</td>
    </tr>
    <tr>
        <td>Third Number : </td>
        <td><input type="text " name="third_number" placeholder="Third Number"</td>
    </tr>

     <tr>
        <td>Forth Number : </td>
        <td><input type="text " name="forth_number" placeholder="Forth Number"</td>
    </tr>
        <td>Result : </td>
        <td><textarea rows="5" cols="50"><?php  echo  $result; ?></textarea></td>
    </tr>
    
    <tr>
        <td><input type="submit" name="maxmin" value="max"></td>
        <td><input type="submit" name="maxmin" value="min"></td>
    </tr>
</table>
</form>