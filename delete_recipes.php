<?php

include "db_connect.php";

$recipe_id = $_POST['recipe_id'];

$stmt = $conn->prepare("DELETE FROM recipes WHERE id = ?");

$stmt->bind_param("i", $recipe_id);

if ($stmt->execute()) {

    if ($stmt->affected_rows > 0) {
        echo "Recipe deleted successfully.";
    } else {
        echo "Recipe ID not found.";
    }

} else {
    echo "Error deleting recipe.";
}

$stmt->close();
$conn->close();

?>
