<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

<style>
.tbl-30{
    width: 30%;
}
.btn-secondary{
    background-color: #7bedaf;
    padding: 1%;
    color: black;
    text-decoration: none;
    font-weight: bold;
}
/*------these are styles or css for secondary update button hovering effect*/
.btn-secondary:hover{
   background-color: blue;
}
.tbl-30 tr td{
    padding: 1%;
}
.success{
    color:green;
}
.error{
    color: red;
}
</style>

<?php include('../config/constants.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Register Account</h1>
        
            <!------create message box to display  admin added successfully---------> 
    	    <?php
            if(isset($_SESSION['register']))
            {
                echo $_SESSION['register']; 
                // lets remove the message
                unset($_SESSION['register']);
            }
            ?>
            <br/>
        <!-------------lets create form to be filled to add admin to database-------->
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="username"required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email"required></td>
                </tr>
				<tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" required></td>
                </tr>
                <tr>
                     <td colspan="2">
                        <input type="submit" name="submit" value="Register" class="btn-secondary">
                     </td>
                 </tr>
                 <tr>
                    <td>Already Have Account?:</td>
                    <td>
                        <a href="../task/login.php">Sign In</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

<?php 
//process the values from the and asve it to database
// chech whether the button is clicked or not
if(isset($_POST['submit']))

{
    //button clicked
    //echo "button clicked";
     //1. we need to get the data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
	$password = md5($_POST['password']);
	

      //2. creating sql querry to save to database
      $sql ="INSERT INTO tbl_user SET 
      username='$username',
	  email = '$email',
	  password = '$password'
	
      ";

    //4. Executing querry and save data to database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    //5. check whether the (query is executed correctly) data inserted or not and display appropriate message
    if($res==TRUE)
    {
            //data inserted
           // echo "Admin Added Successfully!!";
           // create session variable to display message
           $_SESSION['register'] = "<div class='success'>Account Created successfully.</div>";
           // redirecting our page
           header("location:".SITEURL.'../task/register.php');
           
    }
    //else
    //{
             //echo "Failed to Add Task";
    //}
    else
             {
                 // create session variable to display message
           $_SESSION['add'] = "<div class='error'>Failed to Create Account. Try Again Later!!</div>";
           // redirecting our page
           header("location:".SITEURL.'task/register.php');
             }
}
?>
<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

