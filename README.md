# Laravel PayPal Integration

This project demonstrates the integration of PayPal payment gateway into a Laravel application.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Make sure you have the following installed on your local machine:

- PHP >= 7.3
- Composer
- Laravel CLI

### Installing

1. Clone the repository:

    ```bash
    git clone https://github.com/your/repository.git
    ```

2. Navigate into the project directory:

    ```bash
    cd laravel-paypal-integration
    ```

3. Install Composer dependencies:

    ```bash
    composer install
    ```

4. Copy `.env.example` to `.env` and configure your database and PayPal credentials:

    ```bash
    cp .env.example .env
    ```

    Update `.env` file with your database and PayPal credentials:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

    PAYPAL_SANDBOX_CLIENT_ID=your_sandbox_client_id
    PAYPAL_SANDBOX_CLIENT_SECRET=your_sandbox_client_secret
    PAYPAL_LIVE_CLIENT_ID=your_live_client_id
    PAYPAL_LIVE_CLIENT_SECRET=your_live_client_secret
    PAYPAL_MODE=sandbox
    ```

    Replace `your_sandbox_client_id`, `your_sandbox_client_secret` with your PayPal sandbox credentials. For live mode, use `PAYPAL_MODE=live` and provide live credentials.

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database:

    ```bash
    php artisan migrate
    ```

7. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

8. Access the application in your web browser:

    ```bash
    http://localhost:8000
    ```

## Usage

- Navigate to the application in your web browser.
- Use the provided interface to initiate payments via PayPal.
- Check database records and transaction logs to verify successful transactions.

## Contributing

Feel free to contribute to this project by forking the repository and submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
