<?php
include("configure.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table class="table table-bordered">
                      <thead> 
                        
                        <tr>
                          <th>
                            ID </th>
                          <th>
                            firstname
                          </th>
                          <th>
                          lastname
                          </th>
                       
                        </tr>
                      </thead>
                      <?php 
                        
                        $sql=mysqli_query($conn,"select * from abhi");
                        $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                        <tbody>
                          <tr>
                          <td> <?php echo $count;?></td>
                            <td> <?php echo $arr['fname'];?> </td>
                            <td> <?php echo $arr['lname'];?></td>
                         
      
                
  
                          </a>      
                                                 <!-- <button type="button" class="btn btn-primary btn-rounded btn-icon" style="color: aliceblue"> <i class="mdi mdi-file-pdf"></i> </button>--></td>
                          </tr>
                        </tbody>
                        <?php $count++;} ?>
                    </table>
</body>
</html>