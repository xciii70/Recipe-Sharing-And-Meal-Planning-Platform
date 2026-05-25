# Recipe-Sharing-Platform

## Project Description
This project is a lightweight, community-driven web application designed for sharing home recipes. Built entirely using **native PHP** without any external frameworks, the system focuses heavily on fundamental web structures, server-side rendering (SSR), and secure CRUD manipulation to strictly limit client-side scripting. 

The application is specifically optimized to run efficiently on a hardware-constrained **Raspberry Pi Zero 2W** environment using link-local networking (WiFi WAN off for demo). It implements an integrated in-app page for member introductions and a streamlined **3rd Normal Form (3NF)** relational database structure (MariaDB/PostgreSQL) optimized for low memory overhead.

## Tech Stack & Runtime
- **Hardware Platform:** Raspberry Pi Zero 2W
- **Web Server:** HTTP Server (Apache/Nginx)
- **Backend Scripting:** Native PHP Engine (Server-Side Rendering)
- **Database:** MariaDB / PostgreSQL (3NF Schema, `utf8mb4` encoding)
- **Network Configuration:** Link-local networking (WiFi off for demo)

## Repository File Structure
- `db_connect.php` - Database connection configuration.
- `login.php` - User authentication page.
- `index.php` - Home dashboard showing the recipe directory.
- `recipe_detail.php` - Single recipe detailed view panel.
- `add_recipe.html` - User interface for the add function.
- `add_recipe.php` - Server-side data processing and insertion logic.
- `delete_html` - User interface for the delete function.
- `delete_php` - Backend side for delete function. 
- `members.php` - Integrated team profile presentation page.
- `database.sql` - Exported MariaDB database creation schema.

## Project Documentation
Please refer to the following mandatory files for full configurations:
- `README.md` - Project description.
- `Contributors.md` - List of the members.
- `Installation.md` - Setup and deployment instructions for verification.
- `UserGuide.md` - Instructions on how to use the application.
- `AdminGuide.md` - Guidelines to configure and maintain the application.
