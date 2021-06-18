<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/layout.css">
    <link rel="stylesheet" href="./styles/formfinal.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Add Class</title>
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
                    <a href="manage_pharmacy.php">Manage Pharmacys</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Medicines &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_medicine.php">Add Medicines</a>
                    <a href="manage_medicine.php">Manage Medicines</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Stock &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_stock.php">Add Stocks</a>
                    <a href="manage_stock.php">Manage Stocks</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <form action="" method="post">
            <fieldset>
                <legend>Add Pharmacy</legend>
                <input type="text" name="class_name" placeholder="Pharmacy Name">
                <input type="text" name="class_id" placeholder="Pharmacy ID">
                <input type="submit" value="Add">
            </fieldset>        
        </form>
    </div>


</body>
</html>

<?php 
	include('init.php');
    include('session.php');

    if (isset($_POST['class_name'],$_POST['class_id'])) {
        $name=$_POST["class_name"];
        $id=$_POST["class_id"];

        // validation
        if (empty($name) or empty($id) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter pharmacy</p>';
            if(empty($id))
                echo '<p class="error">Please enter pharmacy id</p>';
            if(preg_match("/[a-z]/i",$id))
                echo '<p class="error">Please enter valid pharmacy id</p>';
            exit();
        }

        $sql = "INSERT INTO `pharmacy` (`name`, `id`) VALUES ('$name', '$id')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid pharmacy name or pharmacy id")';
            echo '</script>';
        } else{
            echo '<script language="javascript">';
            echo 'alert("Successful)';
            echo '</script>';
        }
    }

?>