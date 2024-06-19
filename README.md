# FakePro (A Laravel Project with Dropzone Integration)

This project is a Laravel application integrated with Dropzone for file uploads.

## Prerequisites

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [WampServer](http://www.wampserver.com/en/)
- [MySQL](https://www.mysql.com/)

## Setup Instructions

1. **Clone the Repository**

    ```bash
    git clone https://github.com/mihir1313/fakePro.git
    cd fakePro
    ```

2. **Install Dependencies**

    Install PHP dependencies via Composer:

    ```bash
    composer install
    ```

3. **Environment Setup**

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

    Generate the application key:

    ```bash
    php artisan key:generate
    ```

    Configure your `.env` file with your database and other credentials.

4. **Database Migration**

    Run the migrations to set up the database schema:

    ```bash
    php artisan migrate
    ```

5. **Serve the Application**

    Start the local development server:

    ```bash
    php artisan serve
    ```

6. **Access the Application**

    Open your browser and visit `http://localhost:8000` to see your Laravel application in action.

## Features

- Laravel framework
- Dropzone for file uploads
- Basic setup for web application

## Screenshots

![Screenshot1](path/to/screenshot1.png)
![Screenshot2](path/to/screenshot2.png)

## Contribution

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
