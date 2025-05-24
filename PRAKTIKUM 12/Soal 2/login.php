<?
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin') {
    echo "<h1>Login berhasil!</h1>";
    echo "<h2>Selamat datang, <span style='color: blue; font-size: 40px'>$username</span>.</h2>";
    echo "<a href='soal_2.html' style='color: purple;'>kembali ke halaman login</a>";
} else {
    echo "<h1 style='color: red;'>Username : <span style='color: black'>$username</span> Tidak Terdaftar!</h1>";
    echo "<a href='soal_2.html' style='color: purple;'>kembali ke halaman login</a>";
}
?>