
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <header>
        <div class="headeri">
            <h1 class="emri">Sage & Salt Admin</h1>
            <div class="linkk">
                <a class="linqet" href="index.php">Home</a>
                <a class="linqet scroll-link" href="#abUs">About Us</a>
                <a class="linqet" href="menu.php">Menu</a>
                <a class="linqet scroll-link" href="#contact-section">Contact Us</a>
                <a class="linqet" href="register.php">Register</a>
               
            </div>
        </div>
    </header>

    <div class="first">
    
                <h2 class="user">User Management</h2>
            
        <div class="forms-container">
         

            <div class="p1">
            <form action="adduser.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <!-- ... existing fields ... -->
                <button type="submit">Add User</button>
            </form>
            </div>

            <div class="p1">
                <form action="deleteuser.php" method="post">
                    <label for="user_id">User ID to Delete:</label>
                    <input type="text" id="user_id" name="user_id" required>

                    <button type="submit">Delete User</button>
                </form>
            </div>

            <div class="p1">
    <form action="editusers.php" method="post">
        <label for="user_id_edit">User ID to Edit:</label>
        <input type="text" id="user_id_edit" name="user_id_edit" required>

        <label for="new_name">New Name:</label>
        <input type="text" id="new_name" name="new_name" required>

        <label for="new_surname">New Surname:</label>
        <input type="text" id="new_surname" name="new_surname" required>

        <label for="new_email">New Email:</label>
        <input type="email" id="new_email" name="new_email" required>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>

        <button type="submit">Edit User</button>
    </form>
</div>


            <div class="p1">
            <button id="showUsersBtn">Show Users</button>
            <div id="userTable" class="table-container"></div>
        </div>
        </div>
    </div>

    <div class="second">
    <h2>Menu Management</h2>
        <div class="form-conatiner2">
        
            <div class="p1">

            <form action="add_item.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="image_path">Image Path:</label>
            <input type="text" id="image_path" name="image_path" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>

            <button type="submit">Add Item</button>
        </form>
            </div>

            <div class="p1">
                <form action="delete_item.php" method="post">
                    <label for="item_id">Item ID to Delete:</label>
                    <input type="text" id="item_id" name="item_id" required>

                    <button type="submit">Delete Item</button>
                </form>
            </div>

            <div class="p1">
                <form action="edit_items.php" method="post">
                    <label for="item_id">Item ID to Edit:</label>
                    <input type="text" id="item_id" name="item_id" required>

                    <label for="new_name">New Name:</label>
                    <input type="text" id="new_name" name="new_name" required>

                    <label for="new_image_path">New Image Path:</label>
                    <input type="text" id="new_image_path" name="new_image_path" required>

                    <label for="new_category">New Category:</label>
                    <input type="text" id="new_category" name="new_category" required>

                    <button type="submit">Edit Item</button>
                </form>
            </div>
          
</div>  <br>
<div class="p1">
    <button id="showItemsBtn">Show Menu Items</button>
    <div id="menuItemTable" class="table-container"></div>
           

           
        </div>
    </div>

   

 
    <div class="reservation-section">
    <h2>Reservations</h2>
    <table class="reservations-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody id="reservation-data"></tbody>
    </table>
</div>
<br>

    <footer>
        <p>&copy; 2024 Sage & Salt. All Rights Reserved.</p>
    </footer>
    <script src="dashboard.js"></script>
</body>

</html>
