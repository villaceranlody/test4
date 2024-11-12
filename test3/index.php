<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My first Ubuntu Server PHP Deployment</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1>My first Ubuntu Server PHP Deployment</h1>

        <!-- Form for user sign-up -->
        <form method="POST" action="signup.php">
            <!-- Firstname Field -->
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>

            <!-- Middlename Field -->
            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label>
                <input type="text" name="middlename" id="middlename" class="form-control">
            </div>

            <!-- Lastname Field -->
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>

            <!-- Age Field -->
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>

            <!-- Address Field -->
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <!-- Name & Course Field -->
            <div class="mb-3">
                <label for="namecourse" class="form-label">Name & Course:</label>
                <input type="text" name="namecourse" id="namecourse" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Success/Error Message Section -->
        <?php
        // Display success or error message after form submission
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo '<div class="alert alert-success mt-3">Thank you! Your registration was successful.</div>';
            } else if ($_GET['status'] == 'error') {
                echo '<div class="alert alert-danger mt-3">Oops! Something went wrong. Please try again.</div>';
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>

</body>

</html>
