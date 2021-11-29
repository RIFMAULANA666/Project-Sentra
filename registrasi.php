<?php

require 'koneksi';

if (isset($_POST["register"])) {
    if ( registrasi($_POST) > 0) {
        echo "<script>
                alert ('Daftar Berhasil')
                </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>
	<style>
		label{
                display:block;
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
                R E G I S T R A S I
            </font>
        </h1>
    </body>

    <body>
        <table border=0 cellpadding=45 align=center bgcolor=white>
            <tr>
                <td>
                    <form action="" method="post">

                                <label for="email">Email :</label>
                                <input type="text" name=email id=email>

                                <br>
                                <br>
                        
                                <label for="username">Username :</label>
                                <input type="text" name=username id=username>

                                <br>
                                <br>

                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password">

                                <br>
                                <br>

                                <label for="password2">Konfirmasi Password :</label>
                                <input type="password" name="password2" id="password2">

                                <br>
                                <br>
                    

                            <center>
                                <button type="submit" name=register>Daftar!</button>
                            </center>

                            <br>
                            <br>

                            <center>
                                <a href="login.php">Kembali</a>
                            </center>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>