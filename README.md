<!-- ABOUT THE PROJECT -->
## About The Project

Teacher dashboard application.
Teacher may assign students to groups for a project. Where teacher describes project title, selects number of groups which should be assigned to a project and student amount per group. 
Groups are automatically initialized when a project is created.
In the project itself, teacher may add students. Each student must have a unique full name.
All students are visible in table list.
Teacher can delete a student, in such case student is removed from group and project.

### Built With

* [Laravel](https://laravel.com)
* [Bootstrap](https://getbootstrap.com)
* [MySQL](https://www.mysql.com/)

## Installation

Project was made on Laravel 8, so below you will find instalation instruction.

Clone the repository:
* https://github.com/Ztva/teacher_dashboard.git

Switch to repository folder:
* cd teacher_dashboard

Install all the dependencies
* composer install

Copy the env.example database connection file and make required changes in .env file
Tip* Make sure your database is named teacher_dashboard
* cp .env.example .env

Run database migrations
* php artisan migrate

Start local development server
* php artisan serve

You can now access your local server via code editors supplied link, or at: http://localhost:8000
