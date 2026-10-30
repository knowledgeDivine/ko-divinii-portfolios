<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name      = trim($_POST['full_name'] ?? '');
    $email          = trim($_POST['email'] ?? '');
    $company_name   = trim($_POST['company_name'] ?? '');
    $service_type   = trim($_POST['service_type'] ?? 'Upstream Drilling');
    $volume_bbl     = intval($_POST['volume_bbl'] ?? 50000);
    $estimated_cost = floatval($_POST['estimated_cost'] ?? 0.0);
    $message        = trim($_POST['message'] ?? '');

    if (empty($full_name) || empty($email)) {
        echo json_encode(["status" => "error", "message" => "Name and Email are required fields."]);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO quotes (full_name, email, company_name, service_type, volume_bbl, estimated_cost, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssids", $full_name, $email, $company_name, $service_type, $volume_bbl, $estimated_cost, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Quote request submitted successfully to database!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database Insert Error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid Request Method"]);
}
?>
