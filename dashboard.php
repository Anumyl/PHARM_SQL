<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `pharmacy`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `medicine`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `stock`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
        
    <div class="title">
	<a href="dashboard.php"><img src="./images/pharmi.jpg" alt="" class="logo"></a>
	<span class="heading">DASHBOARD</span>
        <a href="logout.php" style="color: black"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Pharmacys &nbsp
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
                    <a href="add_medicine.php">Add Medicines</a>
                    <a href="manage_medicine.php">Manage Medicines</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Stocks &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_stock.php">Add Stock</a>
                    <a href="manage_stock.php">Manage Stocks</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
	<a href="dashboard.php"><img src="./images/phar.jpg" alt="" class="logo"></a>	
        <?php
            echo '<p>Number of pharmacy:'.$no_of_classes[0].'</p>';
            echo '<p>Number of medicines:'.$no_of_students[0].'</p>';
            echo '<p>In stock:'.$no_of_result[0].'</p>';
        ?>

    </div>

</body>
</html>

<?php
   include('session.php');
?>