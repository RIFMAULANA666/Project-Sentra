<?php

require 'koneksi.php';

if (isset($_POST["login"])){

    $username = $_POST["usernamae"];
    $password = $_POST["passsword"];

    mysqli_query($conn, "SELECT*FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (passsword_verify($password, $row["password"])){
            header ("location: index.php");
            exit;
        }
    }
}

?>



<html>
    <head>
        <title>

        </title>
        <style>
            label{
                display:block;
                text-align: center;
            }
            table{
                border-radius: 10%;
            }
        </style>
    </head>

    <br>
    <br>

    <body align=center bgcolor=navy>
        <h1>
            <font color=white face=arial>
               L O G I N
            </font>
        </h1>
    </body>

    <body>
        <table border=0 cellpadding=45 align=center bgcolor=white>
            <tr>
                <td>
                    <form action="" method="post">

                                
                        
                                <label for="username">Username</label>
                                <input type="text" name=username id=username>

                                <br>
                                <br>

                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">

                                <br>
                                <br>
                    

                            <center>
                                <button type="submit" name=login>Masuk!</button>
                            </center>

                            <br>
                            <br>

                            <center>
                                <a href="registrasi.php">Daftar</a>
                            </center>
                    </form>
                </td>
            </tr>
        </table>
    </body>