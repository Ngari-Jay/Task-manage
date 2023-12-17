<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

<?php include('../config/constants.php');?>
<style>
    /*css for menu for aligning the text*/
.menu{
    border-bottom: 3px solid blue;/*css for drawing the line at bottom of menues*/
    text-align: center;
}
/*css for menu for removing list type*/
.menu ul{
    list-style: none;
}
/*css for menu for menus to align inline*/
.menu ul li{
    display: inline;
    padding: 1%;

}
/*css for menu for removing underlining of menus*/
.menu ul li a{
    text-decoration: none;
    font-weight: bold;
    color: #ff4757;
}
/*css for hovering effect*/
.menu ul li a:hover{
    color: blue;
}
</style>
<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->
<div class="menu">
        <div class="wrapper">
       <ul>
        <li><a href="logout.php">Logout</a></li>
       </ul>
        </div>
    </div>

        <!------Main content starts here--------->
        <div class="main-content">
            <div class="wrapper">
                <!------for te dashboard title--------->
           <center><h1>Manage Task</h1></center>


           <br/><br/>
            <!------create message box to display  admin added successfully---------> 
    	    <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                // lets remove the message
                unset($_SESSION['add']);
            }
            //<!------create message box to display  admin deleted successfully---------> 

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                // lets remove the message
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update']; 
                // lets remove the message
                unset($_SESSION['update']);
            }
            ?>
            <br/><br/>


            <!------create button to add admin---------> 
               <a href="Add-Task" class= "btn-primary">Add Task</a>
               <br/>
               <br/>
<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->


           <!------these are styles or css for the table tr th and td--------->
           <style>
            .tbl-full {
    width: 100%;
}
table tr th{
    border-bottom: 3px solid blue;
    padding: 1%;
    text-align: left;
}
table tr td{
    padding: 1%;
}
/*------these are styles or css for primary button*/
.btn-primary{
    background-color: blue;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
/*------these are styles or css for primary button hovering effect*/
.btn-primary:hover{
   background-color: #ff4757;
}
/*------these are styles or css for secondary update button*/
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
/*------these are styles or css for secondary delete admin button*/
.btn-delete{
    background-color: red;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
/*------these are styles or css for primary button hovering effect*/
.btn-delete:hover{
   background-color: blue;
}
.success{
    color: green;
}
.error{
    color: red;
}
.footer{
    color: purple;
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
    font-weight: bold;
}
           </style>

<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->



           <!------lets create table--------->
                    <table class= "tbl-full">
                        <tr>
                            <!------lets create table headers--------->
                            <th>S.No.</th>
                            <th>Task Name</th>
                            <th>Descriptions</th>
                            <th>Actions</th>
                        </tr>
<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->


                        <!------LETS DISPLAY THE LIST OF TASK FROM DATABASE--------->

                        <?php 
                        // query to Get  all admin
                        $sql = "SELECT * FROM tbl_task";
                        //Lets Execute the Query
                        $res = mysqli_query($conn, $sql);
                        //checking whether the query is executing successfully or not
                        if($res==TRUE)
                        {
                                //count rows checking whether we have data in the database or not having
                                $count = mysqli_num_rows($res);  //function to Get all the rows from the database

                                //this is the declared variable for sorting the numbers on id 

                                            $sn=1;

                                // check the number of rows
                                if($count>0)
                                {
                                    //this means we have data in the database
                                    // lets use while loop to get the data from database
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                         // lets use while loop to get the data from database
                                          // while loop will execute only if we have data in the database
                                          // Lets Get Individual data from the database
                                          $id=$rows['id'];
                                          $task_name=$rows['task_name'];
                                          $description=$rows['description'];
                                          

                                          // displaying our data in our table now ( we shall have to break the php loop and use an HTML)

                                          ?>

<tr>
                            <!------lets create table data--------->
                            <td><?php echo $sn++ ?></td> <!-----it run successfully but fail to sort the numbers as 1, 2, 3---
                            to solve this lets declare variable before the while loop---->
                            <td><?php echo $task_name ?></td>
                            <td><?php echo $description ?></td>
                            <!------After inserting the php code then remove all the remaining tr int table-------->
                            <td>
                                 <!------create two buttons--------->
                                <a href="<?php echo SITEURL; ?>../task/update-Task.php?id= <?php echo $id; ?> " class="btn-secondary">Update Task</a>
                                <a href="<?php echo SITEURL; ?>../task/delete-Task.php?id= <?php echo $id; ?> "class="btn-delete">Delete Task</a>
                            </td>
</tr>
<?php
                                          
                                    }
                                }
                                else
                                {
                                    // No data in the database
                                }
                        }
                        
                        ?>
                     </table>

    </div>
</div>
<div class="footer">
   <marquee behavior="" direction="left">Designed By: Jackson Ngari - Jaysoft Systems - +254702134979 | <a href="jacksonngari93@gmail.com">jacksonngari93@gmail.com</a></marquee>
   <marquee behavior="alternate" direction="right">Power Learn Project - Kilifi County @2023 Cohort</marquee>
</div>

    <!-------Main  content Ends  here--------->


<!-----------/*Welcome to PLP TASK MANAGEMENT PROJECT
Designed by JACKSON NGARI YAA an ICT Expert From Malindi 
alSO dOUBLED to be ManAGING Director Of Jaysoft Systems
which is a Technology Company owned by HIm*/
/* Rich him through Email: jacksonngari93@gmail.com
Company Email: jaysoftsystems93@gmail.com
Secondary Email: systemsjaysoft@gmail.com
Call or Whatsapp: +254702134979 AVAILABLE AT ALL TIMES*/----->

