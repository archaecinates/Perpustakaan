<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-image: url('img/register.jpg');
            background-position: right; 
            background-size: 40% 100%; 
            background-repeat: no-repeat; 
        }


        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-register {
            width: 60%; 
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: -8px;
        }

        .wrap-register {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 30px 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .register-form-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }

        .input100 {
            width: 100%;
            border: none;
            border-bottom: 2px solid #ccc; 
            padding: 10px 15px;
            font-size: 16px;
            margin-bottom: 12px;
            margin-top: 12px;
            transition: border-bottom-color 0.3s ease;
        }

        .input100:focus{
            border-bottom-color: #83B4FF;
            outline: none;
        }

        .register-form-btn {
            width: 100%;
            padding: 10px 0;
            background-color: #83B4FF;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-form-btn:hover {
            background-color: #5A72A0;
        }


        .alert {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        .role-container {
            margin-bottom: 20px;
        }

        .role-container label {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="limiter">
        <div class="container-register">
            <div class="wrap-register">
                <span class="register-form-title">Register</span>
                <form action="proses_register.php" method="POST">
                    <?php if (isset($_GET['message'])) : ?>
                        <div class="alert">
                            <?= $_GET['message']; ?>
                        </div>
                    <?php endif; ?>

                    <input class="input100" type="text" name="namalengkap" placeholder="Nama Lengkap" required>
                    <input class="input100" type="text" name="username" placeholder="Username" required>
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <input class="input100" type="password" name="password" placeholder="Password" required>
                    <input class="input100" type="text" name="alamat" placeholder="Alamat" required>

                    <!-- Pilihan Role -->
                    <div class="role-container">
                        <label><input type="radio" name="role" value="admin" required> Admin</label>
                        <label><input type="radio" name="role" value="pengguna" required> Pengguna</label>
                    </div>

                    <button class="register-form-btn" type="submit">Register</button>
                    <p> Sudah punya akun? <a href="login.php">Log In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
