<?php
require_once 'connection.php';

$response = array('success' => false);

if (isset($_POST['hitung'])) {

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response['success'] = true;
        $response['harga'] = $row['harga'];
    }
    $conn->close();

    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Metode request tidak diizinkan."));
}

?>