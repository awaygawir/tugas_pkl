<?php
$username = $_POST["username"];
$password = $_POST["password"];

$sql_select = "SELECT users.*, taruna.*
               FROM users
               INNER JOIN taruna ON taruna.users_id = users.id
               WHERE users.username = :username AND users.password = :password";

$stmt_select = $conn->prepare($sql_select);
$stmt_select->bindParam(':username', $username, PDO::PARAM_STR);
$stmt_select->bindParam(':password', $password, PDO::PARAM_STR);

try { 
    $stmt_select->execute();
    $result = $stmt_select->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $_SESSION["user"] = $result;
        header('location: /absen_masuk');
    } else {
        $_SESSION["pesan_error"] = "username/password salah";
        header('location: /');
    }
} catch (PDOException $e) {
    echo "Gagal memproses data: " . $e->getMessage();
}
?>