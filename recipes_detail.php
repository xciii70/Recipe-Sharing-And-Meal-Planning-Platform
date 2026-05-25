<?php

include "db_connect.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM recipes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$recipe = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recipe Detail</title>
</head>
<body>

    <h1><?php echo $recipe['title']; ?></h1>
    <p>
        <strong>Category:</strong>
        <?php echo $recipe['category']; ?>
    </p>
    <p>
        <strong>Ingredients:</strong><br>
        <?php echo nl2br($recipe['ingredients']); ?>
    </p>
    <p>
        <strong>Instructions:</strong><br>
        <?php echo nl2br($recipe['instructions']); ?>
    </p>
    <img
        src="uploads/<?php echo $recipe['image_path']; ?>"
        width="300">
</body>
</html>
