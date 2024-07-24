<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'restaurant-2.0';

// Establish the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Erreur de connexion : ' . $conn->connect_error);  // Arrêter l'exécution si la connexion échoue
} else {
    echo 'Connexion réussie<br>';  // Afficher un message si la connexion est réussie
}

// Ajouter un message pour indiquer que la connexion est réussie et la requête SQL est en cours de préparation
echo 'Préparation de la requête SQL<br>';


// Correct SQL statement with backticks for table and column names
$sql = "INSERT INTO `tabl_guestbook`(`date_visit`, `customer_name`, `visited_restaurant`, `contenu_message`) VALUES ('[2024-07-24]','[nametest]','[restauranttest]','[messagetest]')";

// Ajouter un message pour indiquer que la requête SQL est prête à être exécutée
echo 'Requête SQL préparée : ' . $sql . '<br>';


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
