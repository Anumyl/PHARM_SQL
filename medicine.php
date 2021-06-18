<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Medicine Stock</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }

        .button{
            padding:20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="title">
	<a href="dashboard.php"><img src="./images/pharmi.jpg" alt="" class="logo"></a>
	<span class="heading">STOCK</span>
    </div>
    <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn'];

        // validation
        if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
            if(empty($class))
                echo '<p class="error">Select pharmacy</p>';
            if(empty($rn))
                echo '<p class="error">Enter medicine ID</p>';
            if(preg_match("/[a-z]/i",$rn))
                echo '<p class="error">Enter valid medicine ID</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `m_name` FROM `medicine` WHERE `m_id`='$rn' and `p_name`='$class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['m_name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `qty`, `price`, `date` FROM `stock` WHERE `med_id`='$rn' and `phar_name`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['qty'];
            $p2 = $row['price'];
            $p3 = $row['date'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no stock";
            exit();
        }
    ?>
    <div class="main">
	<a href="dashboard.php"><img src="./images/phar.jpg" alt="" class="logo"></a>	
        <?php
            echo '<p>Medicine name : '.$name.'</p>';
            echo '<p>Pharmacy name : '.$class.'</p>';
            echo '<p>Medicine ID : '.$rn.'</p>';
            echo '<p>Quantity : '.$p1.'</p>';
            echo '<p>Price : '.$p2.'</p>';
            echo '<p>Date : '.$p3.'</p>';
        ?>

    </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
</body>
</html>