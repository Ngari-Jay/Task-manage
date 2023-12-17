<style>
.success{
    color: green;
}
.error{
    color: red;
}
</style>

<!------------------check whether the user logged in or not------>
<?php 
// AUTHORIZATION ACCESS CONTROL TOOL
if(!isset($_SESSION['user'])) //IF SESSION not set
{
 //User not logged in
 // direct us to login page with a message
 $_SESSION['no-login-message'] = "<div class='error'>Please Login To Access Admin Panel</div>";
 //redirect to login
 header("location:".SITEURL.'task/login.php');
}
?>