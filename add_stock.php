<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./styles/formfinal.css">
    <title>Dashboard</title>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/pharmi.jpg" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Pharmacy &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_pharmacy.php">Add Pharmacy</a>
                    <a href="manage_pharmacy.php">Manage Pharmacy</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Medicines &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_medicine.php">Add Medicine</a>
                    <a href="manage_medicine.php">Manage Medicines</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Stock &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_stock.php">Add Stock</a>
                    <a href="manage_stock.php">Manage Stock</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <form action="" method="post">
            <fieldset>
            <legend>Enter Details</legend>

                <?php
                    include("init.php");
                    include("session.php");

                    $select_class_query="SELECT `name` from `pharmacy`";
                    $class_result=mysqli_query($conn,$select_class_query);
                    //select class
                    echo '<select name="class_name">';
                    echo '<option selected disabled>Select Class</option>';
                    
                        while($row = mysqli_fetch_array($class_result)) {
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';                      
                ?>

                <input type="text" name="rno" placeholder="Medicine ID">
                <input type="text" name="p1" id="" placeholder="Quantity">
                <input type="text" name="p2" id="" placeholder="Price">
                <input type="text" name="p3" id="" placeholder="Date">
                <input type="submit" value="Add stock">
            </fieldset>
        </form>
    </div>

</body>
</html>

<?php
    if(isset($_POST['rno'],$_POST['p1'],$_POST['p2'],$_POST['p3']))
    {
        $rno=$_POST['rno'];
        if(!isset($_POST['class_name']))
            $class_name=null;
        else
            $class_name=$_POST['class_name'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(string)$_POST['p3'];


        // validation
        if (empty($class_name) or empty($rno) or $p1<0 or  $p2<0 or $p3<0 ) {
            if(empty($class_name))
                echo '<p class="error">Please select pharmacy</p>';
            if(empty($rno))
                echo '<p class="error">Please enter medicine ID</p>';
            if(preg_match("/[a-z]/i",$rno))
                echo '<p class="error">Please enter valid medicine ID</p>';
            if(preg_match("/[a-z]/i",$marks))
                echo '<p class="error">Please enter valid marks</p>';
            if($p1<0 or  $p2<0 or $p3<0)
                echo '<p class="error">Please enter valid details</p>';
            exit();
        }

        $name=mysqli_query($conn,"SELECT `m_name` FROM `medicine` WHERE `m_id`='$rno' and `p_name`='$class_name'");
        while($row = mysqli_fetch_array($name)) {
            $display=$row['m_name'];
            echo $display;
         }

        $sql="INSERT INTO `stock` (`med_name`, `med_id`, `phar_name`, `qty`, `price`, `date`) VALUES ('$display', '$rno', '$class_name', '$p1', '$p2', '$p3')";
        $sql=mysqli_query($conn,$sql);

        if (!$sql) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }
?>