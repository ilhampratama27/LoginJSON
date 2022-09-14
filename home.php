<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    Hi... <?php session_start(); echo $_SESSION['username']; ?>
</body>
</html>
