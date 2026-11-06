# 🚗 Vehicle Rental Management System

A DBMS Mini Project developed using **HTML, CSS, JavaScript, PHP and MySQL** to demonstrate the management of customers, vehicles and rental bookings through a web-based interface.

## 📌 Project Overview

The Vehicle Rental Management System is designed to simplify the basic operations of a vehicle rental business. It provides a dashboard to view rental statistics and an interface to manage vehicle and customer information.

The system uses a MySQL relational database to store customer details, vehicle information and booking records.

## ✨ Features

- **Dashboard:** Displays total customers, total vehicles, available vehicles, rented vehicles and total rental revenue.
- **Vehicle Management:** Displays vehicle details, registration numbers, categories, rental rates and availability.
- **Customer Management:** Displays registered customer information and driving licence details.
- **Recent Bookings:** Displays booking information, customer names, vehicle models and rental payments.
- **Database Integration:** PHP connects the application to MySQL and retrieves dashboard statistics dynamically.

*Note: The dashboard statistics are connected to MySQL. The vehicle, customer and recent booking tables currently use demonstration records in the frontend.*

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Website structure |
| CSS3 | Website styling and layout |
| JavaScript | Frontend interactions and API requests |
| PHP | Backend and database connectivity |
| MySQL 8.0 | Relational database |
| XAMPP | Local Apache and PHP environment |
| Git & GitHub | Version control and source-code hosting |

## 🗄️ Database Design

Database Name: `vehicle_rental`

The project contains three main relational tables:

### 1. CUSTOMERS

- Customer_ID (Primary Key)
- Customer_Name
- Phone_Number
- Driving_License (Unique)

### 2. VEHICLES

- Vehicle_ID (Primary Key)
- Model_Name
- Registration_Number (Unique)
- Category
- Daily_Rate
- Vehicle_Status

### 3. BOOKINGS

- Booking_ID (Primary Key)
- Customer_ID (Foreign Key)
- Vehicle_ID (Foreign Key)
- Rental_Days
- Total_Payment

**Relationships:**
- One customer can make multiple bookings.
- One vehicle can appear in multiple bookings over time.
- Each booking belongs to one customer and one vehicle.

## 📂 Project Structure

```text
vehicle-rental-system/
│
├── api/
│   ├── dashboard.php
│   ├── db.example.php
│   └── db.php (private, not uploaded)
│
├── index.html
├── style.css
├── script.js
├── .gitignore
└── README.md
```

## ⚙️ How to Run the Project Locally

1. Install XAMPP and MySQL Server.
2. Clone or download this repository.
3. Place the project folder inside `C:\xampp\htdocs`.
4. Create the `vehicle_rental` database in MySQL Workbench.
5. Create the CUSTOMERS, VEHICLES and BOOKINGS tables.
6. Insert the sample records into the database.
7. Copy `api/db.example.php` to `api/db.php`.
8. Configure your local MySQL username, password and database details in `api/db.php`.
9. Start Apache using XAMPP.
10. Open the following address in your browser:

```text
http://localhost/vehicle-rental-system/
```

## 🔗 API Endpoint

The application uses a PHP API to retrieve dashboard statistics from MySQL.

```text
GET /api/dashboard.php
```

It returns:
- Total customers
- Total vehicles
- Available vehicles
- Rented vehicles
- Total rental revenue

## 🔐 Security

- Database credentials are kept in a private configuration file.
- The actual `api/db.php` file is excluded using `.gitignore`.
- The repository contains `api/db.example.php` as a configuration template.
- Never upload database passwords or private credentials to GitHub.

## 🔗 Project Links

**GitHub Repository:**

https://github.com/vedantsasane11-dotcom/vehicle-rental-management-system

**Live Website:** 
https://vedantsasane11-dotcom.github.io/vehicle-rental-management-system/

The frontend and PHP/MySQL backend require separate hosting for a fully functional online deployment. GitHub Pages alone cannot execute PHP or connect to MySQL.

## 🎓 Academic Project

**Project:** Vehicle Rental Management System Database  
**Subject:** Database Management System (DBMS)  
**Academic Year:** 2026–2027  
**Department:** Information Technology  
**Institute:** AISSMS Institute of Information Technology, Pune

**Developed by:**
- Vedant Sasane
- Hitesh Shinde
