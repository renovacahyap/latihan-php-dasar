<?php

require 'fregis.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST > 0)) {
        echo
        "<script>
            alert('user baru berhasil ditambah');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <!-- <style>
        label {

            display: block;
        }
    </style> -->
    <link rel="stylesheet" href="regis.css">
</head>

<body>


    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">A lightweight and simple sign-up form</h1>
        </header>

        <form action="" method="post" class="form">
            <div class="form__group">
                <label for="username">username : </label>
                <input type="text" name="username" id="username" class="form__input">
            </div>

            <div class="form__group">
                <label for="password">password :</label>
                <input type="password" name="password" id="password" class="form__input">
            </div>

            <div class="form__group">
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2" class="form__input">
            </div>
            <button type="submit" name="register" class="button">Register!</button>

        </form>
        <script>
            const button = document.querySelector('.btn')
            const form = document.querySelector('.form')

            button.addEventListener('click', function() {
                form.classList.add('form--no')
            });
        </script>
</body>

</html>