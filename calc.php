<?php 
if (isset($_POST['btn'])) {
	# code...
	$fNumber=$_POST['first_number'];
	$lNaumber=$_POST['second_number'];
	$btn=$_POST['btn'];	

	switch ($btn) {
		case '+':
			$result=$fNumber+$lNaumber;
			break;
		case '-':
			$result=$fNumber-$lNaumber;
			break;
		case '*':
			$result=$fNumber*$lNaumber;
			break;
		case '/':
			if (lNaumber==0) {
				$result="zero divide invalid";
			}
			else{
				$result=$fNumber/$lNaumber;
			}
		case '%':
			$result=$fNumber$lNaumber;
			break;
			
	}

}

 ?>


<form action="" method="post">
    <table>
        <tr>
            <td>First Number : </td>
            <td><input type="number" name="first_number"></td>
        </tr>
        <tr>
            <td>Last Number : </td>
            <td><input type="number" name="second_number"</td>
        </tr>
        <tr>
            <td>Result : </td>
            <td><input type="text" value="<?php echo $result; ?>" ></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btn" value="+" >
                <input type="submit" name="btn" value="-" >
                <input type="submit" name="btn" value="*" >
                <input type="submit" name="btn" value="/" >
                <input type="submit" name="btn" value="%" >
            </td>
            <td></td>
        </tr>
    </table>
</form>