<?php
include("editUserC.php");
include_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
    $user_id_edit = $_POST['user_id_edit'];
    $new_name = $_POST['new_name'];
    $new_surname = $_POST['new_surname'];
    $new_email = $_POST['new_email'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    $databaseConnection = new DatabaseConnection();
    $databaseConnection->startConnection(); 

    $editUser = $databaseConnection->editUser();

    $editUser->updateUser($user_id_edit, $new_name, $new_surname, $new_email, $new_password);
}
?>
