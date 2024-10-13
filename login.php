<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS langsung di sini -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-image: url('img/bg.jpg');
            background-position: right; 
            background-size: 30% 100%; 
            background-repeat: no-repeat; 
        }

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 60%; 
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .wrap-login100 {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            overflow: hidden;
            padding: 30px 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .login100-form-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }

        .input100 {
              width: 100%;
              border: none;
              border-bottom: 2px solid #ccc; /* Garis bawah */
              padding: 10px 15px;
              font-size: 16px;
              margin-bottom: 20px;
              margin-top: 24px;
              border-radius: 0; /* Hapus radius */
              transition: border-bottom-color 0.3s ease; /* Smooth transition saat fokus */
        }

       .input100:focus {
            border-bottom-color: #83B4FF; /* Warna garis saat input difokus */
            outline: none; /* Hapus outline hitam default */
        }

        

        .login100-form-btn {
            width: 100%;
            padding: 10px 0;
            background-color: #83B4FF;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login100-form-btn:hover {
            background-color: #5A72A0;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
        }

        .focus-input100 {
            position: absolute;
            left: 10px;
            font-size: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <span class="login100-form-title">
                    Perpustakaan Digital
                </span>
                <form class="login100-form" action="cek_login.php" method="post">
                    <?php if (isset($_GET['message'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['message']; ?>
                        </div>
                    <?php endif ?>
                    
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" placeholder="User name">
                        <span class="focus-input100">&#xe82a;</span>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100">&#xe80f;</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <p> Belum punya akun? <a href="register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
