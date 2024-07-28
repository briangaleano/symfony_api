

# Prueba Telus

## Getting Started

Instructions on setting up your project locally. 

To install Symfony locally, follow these steps:

### Prerequisites

Before installing Symfony, make sure you have the following prerequisites installed on your machine:

1. **PHP**: Symfony requires PHP 8.2 or higher.
2. **Composer**: Dependency manager for PHP.
3. **Web Server**: You can use the built-in PHP web server, Apache, Nginx, etc.
4. **Database**: MySQL, PostgreSQL, or SQLite, depending on your application needs.

### Installation Steps

1. **Install Composer**: If you haven't installed Composer, you can install it by following the instructions on the [Composer website](https://getcomposer.org/).

2. **Install Symfony CLI**: The Symfony CLI tool helps you create new projects, manage dependencies, and more. You can install it using the following command:

   **On macOS and Linux**:
   ```sh
   curl -sS https://get.symfony.com/cli/installer | bash
   mv ~/.symfony*/bin/symfony /usr/local/bin/symfony
   ```

   **On Windows**:
   Download the installer from the [Symfony website](https://get.symfony.com/cli/setup.exe) and run it.

3. **Navigate to Your Project Directory**:
   ```sh
   cd my_project_name
   ```

4. **Start the Symfony Server**: Symfony comes with a local web server that you can use during development.

   ```sh
   symfony server:start
   ```

   This command will start a local web server and you can access your Symfony application at `http://127.0.0.1:8000`.

5. **Configure Your Database**: Open the `.env` file in the root of your project and configure the `DATABASE_URL` environment variable according to your database setup.

   For example, for MySQL:
   ```sh
   DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
   ```

6. **Install Dependencies**: Install the required dependencies using Composer.

   ```sh
   composer install
   ```

7. **Create the Database**: Run the following command to create the database.

   ```sh
   php bin/console doctrine:database:create
   ```

8. **Run Migrations**: If you have any database migrations, run them using:

   ```sh
   php bin/console doctrine:migrations:migrate
   ```


## Usage
1. **Run Schedule**: You need to run the followin command to run the Schedule require in the test. Run the code inside the folder of the project.
  **scheduler_getInfo** name of Schedule.

   ```sh
    php bin/console messenger:consume scheduler_getInfo
   ```

## Contact

Biran Galeano-  briangaleano11@gmail.com
