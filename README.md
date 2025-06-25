# Real Estate Management System

A comprehensive real estate management system built with CodeIgniter 4 framework. This application allows administrators to manage properties and handle property bookings from potential buyers/renters.

## Features

### Admin Features
- **Property Management**: Add, view, and manage property listings
- **Booking Management**: View and manage property booking requests
- **Image Upload**: Upload property images with automatic handling
- **Dashboard**: Admin dashboard with property overview

### User Features
- **Property Browsing**: View available properties with details
- **Property Booking**: Book property viewings with contact information
- **Responsive Design**: Mobile-friendly interface

## Tech Stack

- **Backend**: CodeIgniter 4 (PHP Framework)
- **Frontend**: Bootstrap 5, HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Server**: Apache (XAMPP)

## Prerequisites

Before installing this application, make sure you have:

- **XAMPP** (or LAMP/WAMP) installed
- **PHP 7.4+** 
- **MySQL 5.7+**
- **Composer** (for dependency management)
- **Git** (for cloning the repository)

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/shyam9493/Real-Estate-Mini-Project.git
cd Real-Estate-Mini-Project
```

### 2. Move to XAMPP Directory

Move the project to your XAMPP htdocs folder:

```bash
# Windows
move real-estate C:\xampp\htdocs\

# Linux/Mac
sudo mv real-estate /opt/lampp/htdocs/
```

### 3. Install Dependencies

Navigate to the project directory and install Composer dependencies:

```bash
cd C:\xampp\htdocs\real-estate
composer install
```

### 4. Database Setup

1. **Start XAMPP Services**:
   - Start Apache and MySQL from XAMPP Control Panel

2. **Create Database**:
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `real_estate`

3. **Import Database**:
   - Import the `real-estate.sql` file included in the project root
   - Or create tables manually using the structure below

### 5. Environment Configuration

1. **Copy Environment File**:
   ```bash
   copy env .env
   ```

2. **Configure Database** in `.env` file:
   ```
   database.default.hostname = localhost
   database.default.database = real_estate
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   ```

3. **Set Base URL**:
   ```
   app.baseURL = 'http://localhost/Real-Estate-Mini-Project/'
   ```

### 6. Create Upload Directory

Create the uploads directory for property images:

```bash
mkdir public\uploads
```

## Database Schema

### Properties Table
```sql
CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type ENUM('flat', 'villa', 'plot') NOT NULL,
    price DECIMAL(15,2) NOT NULL,
    area_sqft DECIMAL(10,2),
    address TEXT,
    description TEXT,
    image_path VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Bookings Table
```sql
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    datetime DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (property_id) REFERENCES properties(id)
);
```

## Usage

### 1. Access the Application

Open your web browser and navigate to:
- **Main Site**: http://localhost/real-estate/
- **Admin Panel**: http://localhost/real-estate/admin

### 2. Admin Functions

**Add Property**:
1. Go to `/admin`
2. Fill in the property form
3. Upload property image
4. Submit to add property

**View Bookings**:
1. Go to `/admin/view_bookings`
2. View all property booking requests

### 3. User Functions

**Browse Properties**:
1. Visit the homepage
2. View available properties
3. Click on property for details

**Book Property**:
1. Go to property details page
2. Fill in booking form
3. Submit booking request

## Project Structure

```
Real-Estate-Mini-Project/
├── app/
│   ├── Controllers/
│   │   ├── BookingController.php
│   │   ├── Home.php
│   │   └── PropertyController.php
│   ├── Models/
│   │   ├── BookingModel.php
│   │   └── PropertyModel.php
│   ├── Views/
│   │   ├── Admin/
│   │   │   ├── Index.php
│   │   │   └── View_Bookings.php
│   │   ├── User/
│   │   │   └── view_property.php
│   │   └── Index.php
│   └── Config/
│       └── Routes.php
├── public/
│   ├── uploads/
│   └── index.php
├── real-estate.sql
└── README.md
```

## Key Routes

| Route | Method | Description |
|-------|--------|-------------|
| `/` | GET | Homepage |
| `/admin` | GET | Admin dashboard |
| `/admin/add_property` | POST | Add new property |
| `/admin/view_bookings` | GET | View bookings |
| `/book_now/view_property/{id}` | GET | Property details |
| `/book_property` | POST | Submit booking |



**Happy Coding! 🏠✨**
