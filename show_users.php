<?php
include_once 'db_config.php';


$databaseConnection = new DatabaseConnection();
$databaseConnection->startConnection();

$showUsers = $databaseConnection->showUsers();


$users = $showUsers->getAllUsers();
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['surname']; ?></td>
                <td><?php echo $user['email']; ?></td>
               
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
