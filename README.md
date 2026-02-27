# School Management System (SMS Pro)

A modern, premium School Management System built with PHP, Oracle Database, and Vanilla CSS/JS.

## Features
- **Modern UI**: Dark theme with glassmorphism effects and Inter typography.
- **Role-Based Access**: Specialized dashboards and permissions for Admins, Teachers, and Students.
- **Oracle Integration**: Fully connected to your `schema.sql`.
- **Responsive Design**: Works across different screen sizes.

## Setup Instructions
1. **Database**: 
   - Ensure your Oracle Database is running.
   - Run the provided `schema.sql` to create the tables.
   - Update `config/db.php` with your connection details (user, password, host).

2. **PHP Extension**:
   - Ensure `extension=oci8` is enabled in your `php.ini`.

3. **Web Server**:
   - Host the files on a server like Apache or Nginx.
   - Access via `http://localhost/SMS`.

4. **Default Login**:
   - Since no users are in the schema initially, you'll need to insert an admin user manually:
     ```sql
     INSERT INTO USERS (USER_ID, USERNAME, PASSWORD, ROLE) 
     VALUES (1, 'admin', 'admin123', 'admin');
     COMMIT;
     ```
     *(Note: The login script also supports hashed passwords via `password_verify` for higher security)*.

## Directory Structure
- `/admin`: Administrator specific pages.
- `/teacher`: Teacher specific pages.
- `/student`: Student specific pages.
- `/auth`: Login/Logout logic.
- `/config`: Database connection.
- `/assets`: CSS and Javascript files.
- `/includes`: Shared UI components (header/footer).
