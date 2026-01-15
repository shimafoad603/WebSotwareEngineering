
<?php

if (isset($_POST['aid_name']) && isset($_POST['quantity'])) {

    $aidName = $_POST['aid_name'];
    $quantity = $_POST['quantity'];

    echo "Aid added successfully <br>";
    echo "Aid Name: " . $aidName . "<br>";
    echo "Quantity: " . $quantity;

} else {
    echo "Error: Data not received from form.";
}

?>
