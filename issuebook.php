<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php $con=new mysqli("localhost","root","","gtbpilibrary");  ?>
<center>
    <h1>Issue/Return Book Detail</h1>
    <table width="100%" style="text-align: center;" >
        <tr><th></th><th>Student ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>issue date</th><th>return date</th><th>Fine Fee</th></tr>
    <?php
   $sql="select i.studentid,i.bookname,i.author,i.publication,i.issuedate,r.returndate from issuebook i,returnbook r where i.studentid=r.studentid and i.bookname=r.bookname and i.author=r.author and i.publication=r.publication";
   //echo $sql;
    $re=$con->query($sql);
   while($row=  mysqli_fetch_array($re))
    {
    echo"<tr><td><studentid=".$row[0]."'></td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";

       }
    ?>
    </table>
</center>

