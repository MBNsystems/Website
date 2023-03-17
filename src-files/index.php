<?php
// Подключаемся к базе данных MySQL
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "mbnsite";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем, удалось ли подключение
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Если форма отправлена
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получаем данные из формы
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Создаем SQL-запрос на добавление нового пользователя в базу данных
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "User registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!-- Форма регистрации -->
<form method="post">
  <label>Name:</label>
  <input type="text" name="name" required><br>

  <label>Email:</label>
  <input type="email" name="email" required><br>

  <label>Password:</label>
  <input type="password" name="password" required><br>

  <button type="submit">Register</button>
</form>
