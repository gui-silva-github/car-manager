<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Car Manager

**Car Manager** is a Laravel-based project designed for managing car data efficiently. The system provides a complete CRUD functionality, allowing users to:

- Add new cars with details like name, brand, engine, and fuel type.
- View a comprehensive list of cars with advanced filtering and search options.
- Edit car details seamlessly.
- Remove cars from the database.

<hr>

<img src="https://github.com/gui-silva-github/car-manager/blob/main/public/rud.png">

<img src="https://github.com/gui-silva-github/car-manager/blob/main/public/c.png">

<hr>

## Recursos

### Integração Livewire

Utilized for building dynamic, reactive components, enhancing user interactivity without needing full page reloads.

### Datatables with jQuery

Powered by Datatables, the project supports advanced pagination, sorting, and filtering for a superior data navigation experience.

<hr>

## Instalação do Projeto

Follow the steps below to install and configure the FreelanceHours project on your local machine:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/gui-silva-github/car-manager.git
   cd car-manager
   ```

2. **Install PHP dependencies: Run the following command to install the necessary dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies: After installing the PHP dependencies, run:**
   ```bash
   npm install
   ```

4. **Create the .env file**
   If the .env file does not exist, create it based on the example file:
   ```bash
   cp .env.example .env
   ```
   Then, edit the .env file to configure the environment variables, especially the database settings.

5. **Generate the application key:**
   Run the following command to generate the application key:
   ```bash
   php artisan key:generate
   ```

6. **Run the migrations:**
   To create the tables in the database, run:
   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed the database with sample data:**
   If you want to seed the database with example data, run:
   ```bash
   php artisan migrate:fresh --seed
   ```

8. **Start the server:**
    Finally, start the Laravel built-in server:
    ```bash
    php artisan serve
    ```
The application will be available at http://localhost:8000/cars.

<hr>

## Tecnologias

![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Livewire](https://img.shields.io/badge/livewire-%234e56a6.svg?style=for-the-badge&logo=livewire&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)

<hr>

## Licença

Este projeto está licenciado sob a [MIT license](https://opensource.org/licenses/MIT).
