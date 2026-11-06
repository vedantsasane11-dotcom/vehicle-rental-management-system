
<?php

header("Content-Type: application/json; charset=UTF-8");

require_once "db.php";

try {

    // Total customers
    $result = $conn->query(
        "SELECT COUNT(*) AS total FROM CUSTOMERS"
    );
    $customers = (int)$result->fetch_assoc()["total"];


    // Vehicle statistics
    $result = $conn->query("
        SELECT
            COUNT(*) AS total_vehicles,
            SUM(CASE WHEN Vehicle_Status = 'Available'
                THEN 1 ELSE 0 END) AS available_vehicles,
            SUM(CASE WHEN Vehicle_Status = 'Rented'
                THEN 1 ELSE 0 END) AS rented_vehicles
        FROM VEHICLES
    ");

    $vehicles = $result->fetch_assoc();


    // Total rental revenue
    $result = $conn->query("
        SELECT COALESCE(SUM(Total_Payment), 0)
        AS total_revenue
        FROM BOOKINGS
    ");

    $revenue = $result->fetch_assoc();


    // Send data as JSON
    echo json_encode([
        "success" => true,
        "total_customers" => $customers,
        "total_vehicles" => (int)$vehicles["total_vehicles"],
        "available_vehicles" => (int)$vehicles["available_vehicles"],
        "rented_vehicles" => (int)$vehicles["rented_vehicles"],
        "total_revenue" => (float)$revenue["total_revenue"]
    ]);

    $conn->close();

} catch (Throwable $e) {

    error_log($e->getMessage());

    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Unable to load dashboard information."
    ]);

}

?>
