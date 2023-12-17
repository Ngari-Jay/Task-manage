
<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
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
.footer{
    color: purple;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
    font-weight: bold;
}

</style>

<?php include('../config/constants.php') ?>

<!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->
    <!-------menu section starts here--------->


 <!-----------/*Welcome to JAYSOFT ONLINE FOOD ORDERING SYSTEM
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->
    <!-------menu section starts here--------->

<div class="main-content">
    <div class="wrapper">
        <h1>Update Task</h1>
   
        <!-----------Lets get the current details in the database to update------->
        <?php 
        //1. Get id of selected admin
        $id = $_GET['id'];
        //2. Create SQL query to get the details 
        $sql = "SELECT * FROM tbl_task WHERE id= $id";
        //3. Execute the query
        $res = mysqli_query($conn, $sql);
        //4. checking whether the query is executing successfully or not
        if($res==TRUE)
        {
            //5. checking if there is data in the database or not available
            $count = mysqli_num_rows($res);  //function to Get all the admins data from the database
             // 6. check wether we have admins data or not in the database
             if($count==1)
             {
               // 7. Get the details of the admin
              // echo "Admin Available";
              $row=mysqli_fetch_assoc($res);
            // 8. Lets Get Individual data from the database
              $task_name = $row['task_name'];
              $description = $row['description'];
             }
             else
                    {
                //8. Redirecting to manage admin page
                header("location:".SITEURL.'task/manage-Admin.php');
                     }
        }
        ?>
        <form action="" method ="POST">

        <table class="tbl-30">
                <tr>
                    <td>Task Name:</td>
                    <td>
                        <input type="text" name="task_name" value="<?php echo $task_name; ?>"></td>
                </tr>
                <tr>
                    <td>Descriptions:</td>
                    <td>
                        <input type="text" name="description" value="<?php echo $description; ?>"></td>
                </tr>
                <tr>
                     <td colspan="2">
                        <!------lets hide the id of the admin if you want to understand well replace the text type in input to text not hiden--->
                     <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="Update Task" class="btn-secondary">
                     </td>
                 </tr>
                <tr>
                 
            </table>
        </form>
    </div>
</div>
<?php
// chech whether the button is clicked or not
if(isset($_POST['submit']))
{
    //button clicked
//echo "button clicked";
//1. Lets Get all  values from the form to update
$id =$_POST['id'];
$task_name =$_POST['task_name'];
$description =$_POST['description'];
//2. create SQL query to UPDATE ADMIN
$sql = "UPDATE tbl_task SET 
task_name = '$task_name',
description = '$description' 
WHERE id = '$id'
";

//Lets execute the query
$res = mysqli_query($conn, $sql);
//checking wether the query executed successfully or not
if($res==TRUE)
{
    //query executed and admin details updated Successfully
        // create session variable to display message
        $_SESSION['update'] = "<div class='success'>Task Details Updated Successfully.</div>";
        // redirecting our page
        header("location:".SITEURL.'../task/manage-Task.php');
}
else
{
            // create session variable to display message
            $_SESSION['update'] = "<div class='error'>Failed Task Details Not Update.Try Again.</div>";
            // redirecting our page
            header("location:".SITEURL.'task/manage-Task.php');
}
}
?>
        
        <!-------Footer section starts here--------->
        <div class="footer">
   <marquee behavior="blink" direction="left">Designed By:Jackson Ngari - Jaysoft Systems - +254702134979 | <a href="jacksonngari93@gmail.com">jacksonngari93@gmail.com</a></marquee>
   <marquee behavior="alternate" direction="right">Power Learn Project - Kilifi County @2023 Cohort</marquee>
</div>



