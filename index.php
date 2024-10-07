<?php
require __DIR__ . '/functions/functions.php';

// collected data from from
$user_password = $_GET['user-password'];

// validation of $user_password
if (isset($user_password) && !empty($user_password) && is_numeric($user_password) && $user_password > 0) {
    $new_password = 'This is your new password:' . ' ' . getRandomPassword($user_password);
} else {
    $new_password = 'type a correct value!';
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>php-strong-password-generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1 class="fw-bolder text-center">php-strong-password-generator</h1>
                </div>
                <div class="col-12 mb-5">
                    <form action="index.php" method="GET" class="col-12 row">
                        <div class="col-4 mb-3">
                            <label for="user-password">Type the length of the password:</label>
                            <input type="text" name="user-password" id="user-password" placeholder="...">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <h4><?php echo $new_password ?></h4>
                </div>
            </div>
        </div>
    </main>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>