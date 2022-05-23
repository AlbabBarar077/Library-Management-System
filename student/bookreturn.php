<?php include'header.php';?>        
<?php include'menu.php';?>    
<div id="main">
        <h1> Book Return</h1>
        <form method="POST">
             <table>
        <tr><td> Student id</td><td><input type="text" name="t1"/></td></tr>
        <tr><td>Book Name</td><td><input type="text" name="t2"/></td></tr>
         <tr><td>Author</td><td><input type="text" name="t3"/></td></tr>
        <tr><td>Publication</td><td><input type="text" name="t4"/></td></tr>
        <tr><td>Return Date</td><td><input type="date" name="t5"/></td></tr>
         <td><th colspan="2"><input type="submit" name="submit" value="Save"/></th></td>  
    </table>
    </form>

<?php
if(isset($_POST['submit']))
{
    $studentid=$_POST['t1'];
    $bookname=$_POST['t2'];
    $author=$_POST['t3'];
    $publication=$_POST['t4'];
    $returndate=$_POST['t5'];
    $con=new mysqli("localhost","root","","gtbpilibrary"); 
    $sql="insert into returnbook(studentid,bookname,author,publication,returndate )values('".$studentid."','".$bookname."','".$author."','".$publication."','".$returndate."')";
            $re=$con->query($sql);
            if($re==True)
            {
              echo"Save Successfully<BR><BR>"; 
                
            }
        }
          ?>
</div>
<?php include 'footer.php';?>
