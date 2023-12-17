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
.footer{
    color: purple;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
    font-weight: bold;
}

</style>

<?php include('../config/constants.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Task</h1>
        
            <!------create message box to display  admin added successfully---------> 
    	    <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add']; 
                // lets remove the message
                unset($_SESSION['add']);
            }
            ?>
            <br/>
        <!-------------lets create form to be filled to add admin to database-------->
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Task Name:</td>
                    <td>
                        <input type="text" name="task_name"placeholder="Enter task Name" required></td>
                </tr>
                <tr>
                    <td>Descriptions:</td>
                    <td>
                        <input type="text" name="description"placeholder="Description" required></td>
                </tr>
                <tr>
                     <td colspan="2">
                        <input type="submit" name="submit" value="Add Task" class="btn-secondary">
                     </td>
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
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
  
      //2. creating sql querry to save to database
      $sql ="INSERT INTO tbl_task SET 
      task_name='$task_name',
      description='$description'
      ";

    //4. Executing querry and save data to database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    //5. check whether the (query is executed correctly) data inserted or not and display appropriate message
    if($res==TRUE)
    {
            //data inserted
           // echo "Admin Added Successfully!!";
           // create session variable to display message
           $_SESSION['add'] = "<div class='success'>Task added successfully.</div>";
           // redirecting our page
           header("location:".SITEURL.'../task/manage-Task.php');
           
    }
    //else
    //{
             //echo "Failed to Add Task";
    //}
    else
             {
                 // create session variable to display message
           $_SESSION['add'] = "<div class='error'>Failed to Add Task. Try Again Later!!</div>";
           // redirecting our page
           header("location:".SITEURL.'task/Add-Task.php');
             }
}
?>
<div class="footer">
   <marquee behavior="blink" direction="left">Designed By:Jackson Ngari - Jaysoft Systems - +254702134979 | <a href="jacksonngari93@gmail.com">jacksonngari93@gmail.com</a></marquee>
   <marquee behavior="alternate" direction="right">Power Learn Project - Kilifi County @2023 Cohort</marquee>
</div>



<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->