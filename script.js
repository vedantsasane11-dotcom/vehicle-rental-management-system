
// Load dashboard information from MySQL through PHP

async function loadDashboardStats() {

    try {

        // Request information from PHP API
        const response = await fetch("api/dashboard.php");

        if (!response.ok) {
            throw new Error("Unable to connect to dashboard API");
        }

        // Convert JSON response into JavaScript data
        const data = await response.json();

        if (!data.success) {
            throw new Error("Dashboard data could not be loaded");
        }

        // Update total customers
        document.getElementById("totalCustomers").textContent =
            data.total_customers;

        // Update total vehicles
        document.getElementById("totalVehicles").textContent =
            data.total_vehicles;

        // Update available vehicles
        document.getElementById("availableVehicles").textContent =
            data.available_vehicles;

        // Update rented vehicles
        document.getElementById("rentedVehicles").textContent =
            data.rented_vehicles;

        // Format revenue in Indian Rupees
        const revenue = new Intl.NumberFormat("en-IN", {
            style: "currency",
            currency: "INR",
            maximumFractionDigits: 0
        }).format(data.total_revenue);

        // Display total revenue
        document.getElementById("totalRevenue").textContent =
            revenue;

        console.log("Dashboard data loaded successfully!");

    } catch (error) {

        console.error("Dashboard Error:", error);

    }

}

// Load statistics when the page opens
loadDashboardStats();
