<?php
session_start();

$first_name = $_SESSION['user_data']['first_name'];
$last_name = $_SESSION['user_data']['last_name'];
$phone = $_SESSION['user_data']['phone'];
$email = $_SESSION['user_data']['email'];
$membership = $_SESSION['user_data']['membership'];
$total_amount = $_SESSION['user_data']['total_amount'];
$membership_taken_date = $_SESSION['user_data']['membership_taken_date'];
$membership_expiry_date = $_SESSION['user_data']['membership_expiry_date'];
$specialist_courses = $_SESSION['user_data']['specialist_courses'];
$use_fitness_room = $_SESSION['user_data']['use_fitness_room'];
$fitness_room_hours = $_SESSION['user_data']['fitness_room_hours'];
$fitness_training_hours = $_SESSION['user_data']['fitness_training_hours'];
$fitness_room_cost = $_SESSION['user_data']['fitness_room_cost'];
$fitness_training_cost = $_SESSION['user_data']['fitness_training_cost'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Membership Details</title>
    <!-- Include your CSS styles -->
</head>
<body>
    <h2>Your Membership Details</h2>
    <p><strong>Name:</strong> <?php echo $first_name . ' ' . $last_name; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Selected Membership:</strong> <?php echo $membership; ?></p>
    
    <p><strong>Membership Taken Date:</strong> <?php echo $membership_taken_date; ?></p>
    <p><strong>Membership Expiry Date:</strong> <?php echo $membership_expiry_date; ?></p>

    <?php if ($use_fitness_room) : ?>
        <p><strong>Number of Visits to Fitness Room:</strong> <?php echo $fitness_room_hours; ?></p>
        <p><strong>Fitness Room Cost:</strong> £<?php echo number_format($fitness_room_cost, 2); ?></p>
    <?php endif; ?>

    <?php if ($fitness_training_hours > 0) : ?>
        <p><strong>Number of Personal Fitness Training Classes:</strong> <?php echo $fitness_training_hours; ?></p>
        <p><strong>Personal Fitness Training Cost:</strong> £<?php echo number_format($fitness_training_cost, 2); ?></p>
    <?php endif; ?>
    <p><strong>Total Amount:</strong> £<?php echo number_format($total_amount, 2); ?></p>
    <!-- Add any additional content or styling you want -->
</body>
</html>
