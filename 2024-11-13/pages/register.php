<div class="register">
    <h1>Register</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="masukkan email" id="">
        <input type="password" name="password" required placeholder="masukkan password" id="">
        <input type="submit" name="register" value="register">
    </form>
</div>

<?php
if (isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email, $password;

    $sql = "INSERT INTO customer (email, password) VALUES ('$email','$password')";
    echo $sql;
    mysqli_query($konveksi, $sql);
    header('location:index.php?menu=login');
}
?>