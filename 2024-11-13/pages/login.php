<div class="login">
    <h1>Login</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="masukkan email" id="">
        <input type="password" name="password" required placeholder="masukkan password" id="">
        <input type="submit" name="login" value="login">
    </form>

    <?php
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM customer WHERE email = '$email' AND password = 'password'";
        // echo $sql;
        $hasil = mysqli_query($konveksi, $sql);
        $baris = mysqli_num_rows($hasil);
        echo $baris;

        if ($baris >0 ){
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
        else {
            echo "<h1>Email atau password anda salah</h1>";
        } 
    }
    ?>
</div>