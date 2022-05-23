
<?php include'header.php';?>        
<?php include'menu.php';?>
<div id="main"> 
       <table>
   <form method="POST"/>
   <h1>Login Page</h1>        
   <tr><td>M.No/Userid</td><td><input type="text" name="t1"/></td></tr>
   <tr><td>Password</td><td><input type="password" name="t2"/></td></tr>
   <td><th colspan="2"><input type="submit" name="submit" value="Login"/></th></td>
    </table>
    </form>
</div>
<?php
if (isset($_POST['submit'])) {
    $userid = $_POST['t1'];
    $password = $_POST['t2'];
    $con = new mysqli("localhost", "root", "", "gtbpilibrary");
    $sql = "select * from systemuser where userid='".$userid."' and password='".$password."'";
    $re = $con->query($sql);
    if ($row = mysqli_fetch_array($re)) {
    header("Location:student/index.php");
}
}
?>
  <?php include 'footer.php'; ?>

