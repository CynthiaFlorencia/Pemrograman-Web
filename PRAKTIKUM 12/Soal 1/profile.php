<?
$name = htmlspecialchars($_POST['name']);
$position = htmlspecialchars($_POST['position']);
$password = htmlspecialchars($_POST['password']);
$confirmPassword = htmlspecialchars($_POST['confirmPassword']);

if (empty($name)) {
    $errorMessage = "Input Nama belum di isi!";
} elseif (empty($password)) {
    $errorMessage = "Input Password belum di isi!";
} elseif (empty($confirmPassword)) {
    $errorMessage = "Input Confirm Password belum di isi!";
} elseif ($password !== $confirmPassword) {
    $errorMessage = "Password dan Confirm Password belum sama!";
} else {
    $successMessage = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373016 - Cynthia Florencia</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: start;
        }
        table{
            border-collapse: collapse;
            border: 0;
            width: 50%;
        }
        td{
            border: 0;
            padding: 8px;
        }
        .error{
            color: red;
            margin: 20px 0;
        }
        a{
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php if (isset($errorMessage)): ?>
        <div class="error"><?php echo $errorMessage; ?></div>
        <a href="soal_1.html">Back to form</a>
    <?php elseif (isset($successMessage)): ?>
        <table>
            <tr>
                <td colspan="3" style="background-color: lightgray">
                    <div>Data yang Anda Masukkan!</div>
                </td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td><strong>Position</strong></td>
                <td>:</td>
                <td><?php echo $position; ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <a href="soal_1.html">Back</a>
                </td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>