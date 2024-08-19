<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex Dashboard with Table and Input</title>
    <link rel="stylesheet" href="capstonehomepagecss.css">
</head>
<body>
    <div class="top-nav">
        <h1>My Dashboard</h1>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="Transactions.html">Transactions</a></li>
            <li><a href="Ledger.html">Ledgers</a></li>
            <li><a href="#settings">Balance Sheets</a></li>
            <li><a href="#settings">Settings</a></li>
            <button type="button" id="logoutButton" class="logout">Log out</button>

        </ul>
    </div>
    
    <div class="container">
        <nav class="sidebar">
            <h2>Hotel</h2>
            <ul>
                <li><a href="home/eventhosting.html">Event Hosting</a></li>
                <li><a href="#reports">Package Deals</a></li>
                <li><a href="#sales">Room Upgrades</a></li>
                <li><a href="#support">Meals Package</a></li>
                <li><a href="#billing">Billing</a></li>
            </ul>
            <h2>Restaurant</h2>
            <ul>
                <li><a href="#overview">Catering Services</a></li>
                <li><a href="#reports">Takeout and Delivery Services</a></li>
                <li><a href="#sales">Food and Beverage</a></li>
                <li><a href="#support">Meals Package</a></li>
                <li><a href="#order">Online Ordering</a></li>
            </ul>
            
    
        </nav>
        <main class="content">
            <header>
                <h1>Data Table with Input</h1>
            </header>
            
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>60</td>
                            <td>Chicken with rice</td>
                            <td>2</td>
                            <td>P 120.00</td>
                            <td><button class="edit">Edit</button> <button class="delete">Delete</button></td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Pork Adobo</td>
                            <td>3</td>
                            <td>p 150.00</td>
                            <td><button class="edit">Edit</button> <button class="delete">Delete</button></td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>Chrispy Pata</td>
                            <td>2</td>
                            <td>P 140.00</td>
                            <td><button class="edit">Edit</button> <button class="delete">Delete</button></td>
                        </tr>
                        <!-- Input row -->
                        <tr>
                            <td><input type="text" id="inputID" placeholder="Enter ID"></td>
                            <td><input type="text" id="inputName" placeholder="Enter Name"></td>
                            <td><input type="number" id="inputAge" placeholder="Enter Age"></td>
                            <td><input type="email" id="inputEmail" placeholder="Enter Email"></td>
                            <td><button id="addButton">Add</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
