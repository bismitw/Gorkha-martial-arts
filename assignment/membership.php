<!DOCTYPE html>
<html>
<head>
    <title>Membership Selection</title>
    <style>

        /* Reset default margin and padding */
        body, h1, h2, p, form {
            margin: 0;
            padding: 0;
        }

        /* Style the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
        }

        /* Style the form header */
        .membership-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style form groups */
        .form-group {
            margin-bottom: 15px;
        }

        /* Style form labels */
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style form input fields */
        .form-group input[type="text"],
        .form-group input[type="tel"],
        .form-group input[type="email"],
        .form-group input[type="number"],
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style form radio buttons and checkboxes */
        .form-group input[type="radio"],
        .form-group input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Style the submit button */
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the submit button */
        .btn-submit:hover {
            background-color: #0056b3;
        }

        /* Add space between options */
        .form-group label,
        .form-group input,
        .form-group select {
            display: block;
        }

        /* Center the form in the container */
        .membership-form {
            text-align: center;
            margin: 0 auto;
        }
    </style>
    
</head>
<body>
    <?php require('header.php'); ?>
    <div class="container">
    <form action="membership_processing.php" method="post" class="membership-form" onsubmit="return validateForm();">
            <h2>Select Your Membership</h2>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Select Membership:</label><br>
                <input type="radio" name="membership" value="basic"> Basic (£25.00/month)<br>
                <input type="radio" name="membership" value="intermediate"> Intermediate (£35.00/month)<br>
                <input type="radio" name="membership" value="advanced"> Advanced (£45.00/month)<br>
                <input type="radio" name="membership" value="elite"> Elite (£60.00/month)<br>
                <input type="radio" name="membership" value="junior"> Junior (£25.00)<br>
            </div>
            <div class="form-group">
                <input type="checkbox" name="private_tuition" value="yes"> Include Private Martial Arts Tuition (£15.00/hour)<br>
            </div>
            
                
                <div class="form-group">
    <label>Select Specialist Courses:</label><br>
    <input type="checkbox" name="selected_specialist_courses[]" value="self_defence">Six-week beginners/self-defence course (2 × 1-hour session per week) £180.00<br>
</div>

               <div class="form-group">
               <input type="checkbox" name="use_fitness_room" value="yes"> Use Fitness Room (£6.00/Visit)<br>
               <label for="fitness_room_hours">Quantity:</label>
               <input type="number" id="fitness_room_hours" name="fitness_room_hours" value="1" min="1">
</div>

<div class="form-group">
    <input type="checkbox" name="personal_fitness_training" value="yes"> Personal Fitness Training – Per Hour £35.00<br>
    <label for="fitness_training_hours">Quantity:</label>
    <input type="number" id="fitness_training_hours" name="fitness_training_hours" value="1" min="1">
</div>
            <div class="form-group">
    <label for="membership_taken_date">Date of Membership Taken:</label>
    <input type="date" id="membership_taken_date" name="membership_taken_date" required>
</div>
            <input type="submit" value="Purchase" class="btn-submit">
        </form>
        <script>
    // Set the default value of membership_taken_date input field to the current date
    const membershipTakenDateInput = document.getElementById('membership_taken_date');
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().substr(0, 10); // Convert to YYYY-MM-DD format
    membershipTakenDateInput.value = formattedDate;

      // Set the default value of expiry_date input field to 1 month after the current date
</script>
<script>
      function validateForm() {
                // Validate required fields
                const firstName = document.getElementById("first_name").value;
                const lastName = document.getElementById("last_name").value;
                const phone = document.getElementById("phone").value;
                const email = document.getElementById("email").value;
                const membershipTakenDate = document.getElementById("membership_taken_date").value;

      }  
</script>
<script>
        function validateForm() {
            var membership = document.querySelector('input[name="membership"]:checked');
            if (!membership) {
                alert("Please select a membership option.");
                return false;
            }

            // Add other validation checks for required fields here
            var requiredFields = document.querySelectorAll('.required');
            for (var i = 0; i < requiredFields.length; i++) {
                if (requiredFields[i].value.trim() === '') {
                    alert("Please fill in all required fields.");
                    return false;
                }
            }

            return true; // Allow form submission
        }
        
    
    </script>
  

</body>
</html>
