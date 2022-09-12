<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 9;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        ul, li {
            list-style: none;
        }

        button {
            border: none;
            padding: 1em 2em;
            margin-top: 1em;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* box-shadow: 0 3px 3px 0 black; */
        }

        .main {
            border: 2px solid black;
            padding-right: 2.3em;
        }

        
        input {
            /* padding: 7px 4em; */
            width: 17em;
            height: 1.5em;
        }
        
        .container {
            /* display: flex;
            justify-content: center; */
            display: grid;
            place-items: center;
            margin-top: 8em;   
            /* border: 2px solid black; */
        }

        hr {
            border-top: 2px solid #0275d8;
        }

        #login {
            background-color: #5cb85c;
            transition: 1.6s;
        }

        #login:hover {
            background-color: #d9534f;
            border-radius: 5em;
            transition: 1.8s;
            box-shadow: 2px black;
        }

        #logout {
            background-color: #d9534f;
            transition: 1.6s;
        }

        #logout:hover {
            background-color: #5cb85c;
            border-radius: 5em;
            transition: 1.8s;
            box-shadow: 2px black;
        }

        .tombol {
            display: flex;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .cb {
            margin-top: 1em;
        }

        .bungkus {
            border: 2px solid black;
        }

        input[type=text]:focus {
            border: 3px solid #0275d8;
        }

    </style>
</head>
<body>  
    <div class="container">
        <h3>Register</h3>
        <div class="main">
            <ul>
                <li>
                    <label for="nama">Nama</label>
                    <br>
                    <hr>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="password">Password</label>
                    <br>
                    <hr>
                    <input type="text" name="password" id="password">
                </li>
                <div class="tombol">
                    <button id="login"><a href="">Log-in</a></button>
                    <button id="logout"><a href="">Buat Akun</a></button>
                </div>
            </ul>
        </div>
    </div>

</body>
</html>
