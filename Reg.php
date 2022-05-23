<?php include'header.php';?>
<?php include'menu.php';?>
<div id="main">
        <h1> Registration Form</h1>
        
        <form method="POST">
            <table>
        <tr><td> M.No/Userid</td><td><input type="text" name="t1"/></td></tr>
        <tr><td>Name</td><td><input type="text" name="t2"/></td></tr>
        <tr><td>Branch</td><td><select name="t3"/>
        <option>AUTOMOBILE ENGG</option>
        <option>COMPUTER ENGG</option>
        <option>ELECTRONIC ENGG</option>
        </select></td></tr>
        <tr><td>Year</td><td><select name="t4"/>
        <option>1st Year</option>
        <option>2nd Year</option>
        <option>3rd Year</option>
        </select></td></tr>
        <tr><td> Address</td><td><input type="text" name="t5"/></td></tr>
        <tr><td>Password</td><td><input type="password" name="t6"/></td></tr>
        <tr><td>Confirm Password</td><td><input type="password" name="t7"/></td></tr>
         <td><th colspan="2"><input type="submit" name="submit" value="Save"/></th></td>  
    </table>
    </form>

<?php
if(isset($_POST['submit']))
{
    $userid=$_POST['t1'];
    $name=$_POST['t2'];
    $branch=$_POST['t3'];
    $year=$_POST['t4'];
    $address=$_POST['t5'];
    $password=$_POST['t6'];
    $con=new mysqli("localhost","root","","gtbpilibrary"); 
    $sql="insert into systemuser(userid,name,branch,year,address,password ) values ( '".$userid."','".$name."','".$branch."','".$year."','".$address."','".$password."')";
            $re=$con->query($sql);
            if($re==True)
            {
              echo"Save Successfully<BR><BR>"; 
                
            }
        }
          ?>

 
        
       </div>


          <?php include 'footer.php'; ?>