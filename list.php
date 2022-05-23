<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php $con=new mysqli("localhost","root","","gtbpilibrary");  ?>
<center>
    <h1>Student List</h1>
    <table width="100%" style="text-align: center;" >
        <tr><th>M.no/Userid</th><th>Name</th><th>Branch</th><th>Year</th><th>Address</th></tr>
    <?php
   $sql="select s.userid,S.name,s.Branch,s.year,s.address from systemuser s ";
   // echo $sql;
    $re=$con->query($sql);
   while($row=  mysqli_fetch_array($re))
    {
    echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";

       }
    ?>
    </table>
</center>

