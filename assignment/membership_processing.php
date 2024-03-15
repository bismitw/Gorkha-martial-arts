<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Include your database connection
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $membership = isset($_POST['membership']) ? $_POST['membership'] : '';
    $private_tuition = isset($_POST['private_tuition']) ? 1 : 0;
    $specialist_course = isset($_POST['selected_specialist_courses']) ? 1 : 0;
    $use_fitness_room = isset($_POST['use_fitness_room']) ? 1 : 0;
    $fitness_room_hours = isset($_POST['fitness_room_hours']) ? $_POST['fitness_room_hours'] : 1;
    $fitness_training_hours = isset($_POST['fitness_training_hours']) ? $_POST['fitness_training_hours'] : 1;

    // Initialize variables for fitness costs
    $fitness_room_cost = 0;
    $fitness_training_cost = 0;

    // Calculate the cost of fitness room visits if selected
    if ($use_fitness_room) {
        $fitness_room_cost = 6.00 * $fitness_room_hours;
    }

    // Calculate the cost of personal fitness training if selected
    if ($fitness_training_hours > 0) {
        $fitness_training_cost = 35.00 * $fitness_training_hours;
    }

    // Calculate the total amount including all costs
    $total_amount = 0;

    // Calculate the cost of the selected membership option
    switch ($membership) {
        case 'basic':
            $total_amount += 25.00;
            break;
        case 'intermediate':
            $total_amount += 35.00;
            break;
        case 'advanced':
            $total_amount += 45.00;
            break;
        case 'elite':
            $total_amount += 60.00;
            break;
        case 'junior':
            $total_amount += 25.00;
            break;
    }

    // Add the cost of private tuition if selected
    if ($private_tuition) {
        $total_amount += 15.00;
    }

    // Add the cost of the specialist course if selected
    if ($specialist_course) {
        // Assuming each specialist course costs £180.00
        $specialist_courses_cost = count($_POST['selected_specialist_courses']) * 180.00;
        $total_amount += $specialist_courses_cost;
    }

    // Add the cost of fitness room visits if selected
    if ($use_fitness_room) {
        $total_amount += $fitness_room_cost;
    }

    // Add the cost of personal fitness training if selected
    if ($fitness_training_hours > 0) {
        $total_amount += $fitness_training_cost;
    }

    // Get membership taken date (today)
    $membership_taken_date = date("Y-m-d");

    // Calculate membership expiry date (one month from now)
    $expiry_date = date("Y-m-d", strtotime("+1 month"));

    // Insert user and membership information into the database
    $insert_query = "INSERT INTO `membership` (fname, lname, phone, email, membership, ptuition, scourse, froom, tamount, takenmembership, expirymembership, fitnessamount, personalamount)
                     VALUES ('$first_name', '$last_name', '$phone', '$email', '$membership', $private_tuition, $specialist_course, $use_fitness_room, $total_amount, '$membership_taken_date', '$expiry_date', $fitness_room_cost, $fitness_training_cost)";

    if (mysqli_query($conn, $insert_query)) {
        // Store user data in session for generating the bill
        $_SESSION['user_data'] = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'email' => $email,
            'membership' => $membership,
            'total_amount' => $total_amount,
            'membership_taken_date' => $membership_taken_date,
            'membership_expiry_date' => $expiry_date,
            'fitness_room_cost' => $fitness_room_cost,
            'fitness_training_cost' => $fitness_training_cost,
            'fitness_room_hours' => $fitness_room_hours,
            'fitness_training_hours' => $fitness_training_hours,
            'use_fitness_room' => $use_fitness_room,
            'specialist_courses' => isset($_POST['selected_specialist_courses']) ? $_POST['selected_specialist_courses'] : []
        ];

        // Redirect to the membership details page
        header('Location: membership_details.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
