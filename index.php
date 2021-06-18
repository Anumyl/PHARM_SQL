<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./styles/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Homepage</title>
</head>
<body>
    
    <div class="container">
        <div class="title">
            <span class="heading">PHARMACY MANAGEMENT SYSTEM</span>
        </div>
        
        <div class="nav">
            <ul>
                
                <li>
                    <a href="login.php">Admin Login</a>
                </li>

       		<li>
                    <a href="login.php">Pharmacy</a>
                </li>
            </ul>
        </div>
    
        <div class="slider">
            <img src="images/pharmi.jpg" class="slider-image" alt="img">
        </div>

        <div class="main">
            <span>About the Project</span>
            <p>The objective of the project, titled “Pharmacy Management System”, is to improve the efficiency of record maintenance [medicine stock] at pharmacies. The project aims at reducing the time and manual effort, thereby increasing security and digitalizes records. Invoice generation is a part of the project where the stock of the medicine shall be updated and invoice shall be printed. Admin login shall be used with email id and password. The webpage serves user friendly and reduces work-load of the pharmacists.</p>
   	    <span>Features of the Project</span>
	<br></br>
            <div class="info">
                <div>
                    <span>Login Page</span> <hr>
                    <p>The login page consists of the admin login and medicine login. The admin login requires email id and password to access pharmacy records. In the medicine login, medicine stock along with purchase invoice can be viewed by selecting corresponding pharmacy and medicine ID.</p>
                </div>
                <div>
                    <span>Dashboard Page</span> <hr>
                    <p>This dashboard page displays list of the number of pharmacies, number of medicines, and number of medicines in stock. Also dropdown bars to select options that include add/manage pharmacy/medicine/stock.</p>
                </div>
                
		<div>
                    <span>Add Pharmacy/Medicine/Stock</span> <hr>
                    <p>The Add Pharmacy/Medicine/Stock page is used to add new records. New pharmacy is added by entering the name and ID of the pharmacy. New medicine is added by entering medicine name, medicine ID and selecting corresponding pharmacy from dropdown list. To add stock, the medicine id, quantity, price of the medicine, and date of stock purchased are entered, and the pharmacy is selected from the dropdown list.</p>
                </div>
                <div>
                    <span>Manage Pharmacy/Medicine/Stock</span> <hr>
                    <p>The Manage Pharmacy/Medicine page displays the list of Pharmacies/Medicines. The Manage stock is used to update Stock information or delete stock in the database.</p>
                </div>
		
		
            </div>
        </div>

        <div class="footer">
            <div class="footer--contact">
                <span>CONTACT US</span>
                <p>@ GROUP 6 :)</p>
            </div>
                
        </div>

    </div>

</body>
</html>