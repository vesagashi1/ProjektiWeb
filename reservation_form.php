<?php
include 'db_config.php';

$reservations = $databaseConnection->getAllReservations();

if ($reservations !== false) {
    foreach ($reservations as $reservation) {
        echo "<tr>";
        echo "<td>{$reservation->getId()}</td>";
        echo "<td>{$reservation->getName()}</td>";
        echo "<td>{$reservation->getSurname()}</td>";
        echo "<td>{$reservation->getTel()}</td>";
        echo "<td>{$reservation->getEmail()}</td>";
        echo "<td>{$reservation->getDate()}</td>";
        echo "<td>{$reservation->getMessage()}</td>";
        echo "</tr>";
    }
} else {
    echo "Error fetching reservations.";
}
?>
