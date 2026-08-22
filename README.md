<div align="center">

# Laravel Omnichannel Notification Engine

Broadcast notifications across Email, SMS (Twilio), Telegram Bot, Discord Webhooks, and Web Push.

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.2-blue?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
![laravel](https://img.shields.io/badge/laravel-2563EB?style=for-the-badge&logo=laravel&logoColor=white) ![notifications](https://img.shields.io/badge/notifications-2563EB?style=for-the-badge&logo=notifications&logoColor=white) ![twilio](https://img.shields.io/badge/twilio-2563EB?style=for-the-badge&logo=twilio&logoColor=white) ![sms](https://img.shields.io/badge/sms-2563EB?style=for-the-badge&logo=sms&logoColor=white)

</div>

---

## ðŸŒŸ Key Features

- **Modern Architecture:** Built with clean OOP principles and modern PHP 8.2+ features (Typed properties, Match expressions, Enums, Readonly classes).
- **High Performance & Security:** Input sanitization, prepared statements, CSRF protection, and memory-safe design.
- **PSR Standards:** Complies with PSR-4 (Autoloading), PSR-7 / PSR-15 (HTTP Messages & Middleware), and PSR-12 (Coding Style).
- **Test-Driven:** Ready-to-run unit and integration test suite with PHPUnit.
- **Developer Friendly:** Comprehensive API documentation, typed methods, and instant Docker/Composer setup.

---

## ðŸš€ Getting Started

### Requirements
- PHP >= 8.2
- Composer 2.x
- MySQL 8.0+ / SQLite / Redis

### Installation

`ash
# Clone the repository
git clone https://github.com/code-with-rifat/laravel-multi-channel-notifications.git

# Navigate into project directory
cd laravel-multi-channel-notifications

# Install dependencies via Composer
composer install

# Copy environment configuration
cp .env.example .env

# Run database migrations or initial seeders (if applicable)
php cli.php migrate
`

---

## ðŸ“ Directory Structure

`	ext
â”œâ”€â”€ src/
â”‚   â”œâ”€â”€ Controllers/        # Request Handlers & Business Controllers
â”‚   â”œâ”€â”€ Models/             # Domain Entities & Database Wrappers
â”‚   â”œâ”€â”€ Services/           # Reusable Application Services & Logic
â”‚   â”œâ”€â”€ Middleware/         # HTTP Middleware & Request Filters
â”‚   â””â”€â”€ Config/             # System Configuration & Database Connector
â”œâ”€â”€ config/                 # Environment and App Config Files
â”œâ”€â”€ tests/                  # PHPUnit Test Suite
â”œâ”€â”€ public/                 # Web Entry Point (index.php)
â”œâ”€â”€ .env.example            # Environment variables template
â”œâ”€â”€ composer.json           # Dependency & Autoload definitions
â””â”€â”€ README.md               # Documentation
`

---

## ðŸ§ª Running Tests

Run the test suite using PHPUnit:

`ash
./vendor/bin/phpunit
`

---

## ðŸ‘¤ Author

**Riazul Islam Rifat**
* GitHub: [@code-with-rifat](https://github.com/code-with-rifat)
* Email: [hriazul45@gmail.com](mailto:hriazul45@gmail.com)

---

## ðŸ“„ License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
