
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#contact");
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if (
    $name === "" ||
    strlen($name) > 100 ||
    strlen($email) > 190 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $message === "" ||
    strlen($message) > 3000
) {
    exit("Please enter valid details. Go back and try again.");
}

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=portfolio_db;charset=utf8mb4",
        "root",
        ""
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare(
        "INSERT INTO messages (name, email, message)
         VALUES (:name, :email, :message)"
    );

    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":message" => $message
    ]);

    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    echo "<title>Message Sent</title><link rel='stylesheet' href='style.css'>";
    echo "</head><body><section class='section'>";
    echo "<h2>Thank you!</h2><p>Your message was saved successfully.</p>";
    echo "<a class='btn' href='index.php'>Back to Portfolio</a>";
    echo "</section></body></html>";

} catch (PDOException $e) {
    http_response_code(500);
    error_log($e->getMessage());
    echo "Sorry, your message could not be saved. Please try again later.";
}
