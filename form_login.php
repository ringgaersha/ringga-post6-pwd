<?php
    echo"<h2>Login</h2>
    <form method=post action=cek_login.php>
    <table>
        <tr>
            <td>Username</td>
            <td> : <input name='id_users' type='text'></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input name='nama_lengkap' type='text'></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <input name='email' type='text'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : <input name='password' type='text'></td>
        </tr>
        <tr>
            <td>Captcha<br>
                <img src='captcha.php'></td>
            <td>: <input name='captcha_code' type='text'></td>
        </tr>
        <tr>
            <td colspan=2><input type='submit' value='LOGIN'></td>
        </tr>    
    </table>
    </form>";    
?>