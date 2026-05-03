# Blood Bank Management System (BBMS)

## Description

The Blood Bank Management System (BBMS) is a web-based application designed to streamline the management of blood bank operations. It facilitates donor registration, blood donation requests, patient blood requests, and administrative oversight. The system supports three main user roles: Administrators, Donors, and Patients, each with specific functionalities to ensure efficient blood bank management.

## Features

### Admin Features

- Dashboard for overview of system activities
- Manage donor details (view, edit, delete)
- Manage patient details (view, edit, delete)
- Handle blood donation requests
- Handle blood request approvals
- Secure admin login

### Donor Features

- Donor registration and login
- Submit blood donation requests
- View and edit donation requests
- Dashboard for personal activities

### Patient Features

- Patient registration and login
- Submit blood requests
- View request history
- Edit and update requests
- Dashboard for personal activities

### General Features

- Secure authentication for all user types
- Database-driven storage for all data
- Responsive web interface with CSS styling

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS
- **Server**: Apache (or any PHP-compatible server)

## Installation

1. **Clone the Repository**:

   ```
   git clone <repository-url>
   cd blood-bank-system
   ```

2. **Database Setup**:
   - Create a MySQL database.
   - Import the `bbms_db.sql` file into your database:
     ```
     mysql -u username -p database_name < bbms_db.sql
     ```

3. **Configuration**:
   - Copy `config.example.php` to `config.php`.
   - Edit `config.php` to include your database credentials:
     ```php
     <?php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "your_database_name";
     ?>
     ```

4. **Server Setup**:
   - Ensure you have a PHP server (e.g., XAMPP, WAMP, or Apache with PHP).
   - Place the project files in the server's root directory (e.g., `htdocs` for XAMPP).
   - Start the server.

## Usage

- **Home Page**: Access `index.php` for the main landing page.
- **Admin Login**: Navigate to `admin/adminlogin.php` to log in as an administrator.
- **Donor Login**: Navigate to `donor/donorlogin.php` to log in as a donor.
- **Patient Login**: Navigate to `patients/patientlogin.php` to log in as a patient.
- Follow the respective dashboards for user-specific actions.

## Dummy Credentials

For testing purposes, the database includes the following dummy accounts:

### Admin Accounts

- Email: admin1@gmail.com, Password: admin1
- Email: admin2@gmail.com, Password: admin2

### Donor Accounts

- Email: donor1@gmail.com, Password: donor1
- Email: donor2@gmail.com, Password: donor2

### Patient Accounts

- Email: patient1@gmail.com, Password: patient1
- Email: patient2@gmail.com, Password: patient2

## Database Schema

The system uses a MySQL database with tables for admins, donors, patients, donation requests, and blood requests. Refer to `bbms_db.sql` for the complete schema.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

For questions or support, please contact [aniket.jas20@gmail.com].
