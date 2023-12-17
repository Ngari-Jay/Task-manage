<!----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/------>


<?php 
// include constants.php here for database connection
include('../config/constants.php');
// here we do not need the menu or the footer we only dealing with data processing that is delete admin
//get the id of the admin to be delete
 $id = $_GET['id'];
// create the SQL to Delete Task
$sql = "DELETE FROM tbl_task WHERE  id=$id";
//Lets execute the query
$res = mysqli_query($conn, $sql);
//checking wether the query executed successfully
if($res==TRUE)
{
    //Query Executed successfully and Admin Deleted
    //echo "Task Deleted Succesfully!!";
    // create session variable to display message
    $_SESSION['delete'] = "<div class='error'>Task Deleted successfully.</div>";
    // redirecting our page
   header("location:".SITEURL.'../task/manage-Task.php');
}
else
{
   // Failed to Delete Task
   // echo "Failed To Delete Admin!!";
     // create session variable to display message
     $_SESSION['delete'] = "<div class='error'>Failed to Delete Task. Try Again</div>";
     // redirecting our page
     header("location:".SITEURL.'task/manage-Task.php');
}
// get message that admin is deleted successfully
/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/