<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>

        *{
            
            font-family: monospace;
        }
        body {
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .Login {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .Login button {
            background-color: #6a0dad;
            color: white;
            padding: 15px 30px;
            margin: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .Login button a {
            color: white;
            text-decoration: none;
        }
        .Login button:hover {
            background-color: #5a0cb3;
        }
        .Login h2 {
            color: #6a0dad;
            margin-bottom: 20px;
        }
        h1 {
            color: #6a0dad;
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    
    <section class="Login">
        <h1>Bem Vindo Ao BritoFlix</h1>
        <form method="post">
            <h2>Deseja Fazer o Login Como?</h2>
            <button type="submit"><a href="login-page-usuario.php">LOGIN USUARIO</a></button>
            <button type="submit"><a href="login-page-adm.php">LOGIN ADM</a></button>
        </form>
    </section>
</body>
</html>
