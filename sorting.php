<form action="" method="post">
<table>
    <tr>
        <td>Start Point: </td>
        <td><input type="number" name="start_point" placeholder="Start Point " ></td>
    </tr>
    
   
   <tr>
        <td>End Point: </td>
        <td><input type="number" name="end_point" placeholder="End Point " ></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Asc"></td>
        <td><input type="submit" name="submit" value="Dsc"></td>
    </tr>
    <tr>
        
        <td>
        <?php 

            if (isset($_POST['submit'])) {
                $start=$_POST['start_point'];
                $end=$_POST['end_point'];
                $submit=$_POST['submit'];

                switch ($submit) {
                    case 'Asc':
                        for ($i=$start; $i <= $end; $i++) { 
                            echo $i.'<br/>';
                        }
                        break;
                    
                    case 'Dsc':
                        for ($i=$end; $i >= $start; $i--) { 
                            echo $i.'<br/>';
                        }
                        break;
                }
            }


         ?>
        </td>
    </tr>
</table>
</form>