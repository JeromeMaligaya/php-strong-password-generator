<?php
require __DIR__ . '/functions/functions.php';

// session
session_start();

// collected data from from
$user_password = $_GET['user-password'];

// validation of $user_password
if (isset($user_password) && !empty($user_password) && is_numeric($user_password) && $user_password > 0) {
    $user_password =  getRandomPassword($user_password);
    $message = 'This is your new password:' . ' ' . $user_password;
    $_SESSION['user_random_password'] = $user_password;
} else {
    $message = 'type a correct value!';
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
    <main class="bg-primary-subtle py-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 mb-1">
                    <h1 class="fw-bolder text-center text-secondary">Strong Password Generator</h1>
                    <h3 class="fw-bolder text-center text-white">Genera una password sicura</h3>
                </div>
                <div class="col-12 mb-2 py-3 rounded bg-info">
                    <p class="text-info-emphasis m-0"><?php echo $message ?></p>
                </div>
                <div class="col-12 bg-white py-4 rounded">
                    <form action="index.php" method="GET" class="col-12 row">
                        <div class="col-12 row mb-5">
                            <label class="col-7" for="user-password">Lunghezza password:</label>
                            <input class="col-5" type="text" name="user-password" id="user-password" placeholder="...">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">Invia</button>
                            <button type="reset" class="btn btn-sm btn-secondary">Annulla</button>
                        </div>
                    </form>
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