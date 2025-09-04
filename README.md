# Demo Backend

<img src="https://cdn.simpleicons.org/laravel/E74430" height="32" alt="Laravel"/>
<img src="https://cdn.simpleicons.org/php/777BB4" height="32" alt="PHP"/>
<img src="https://cdn.simpleicons.org/node-dot-js/339933" height="32" alt="Node.js"/>
<img src="https://cdn.simpleicons.org/sqlite/003B57" height="32" alt="SQLite"/>
<img src="https://cdn.simpleicons.org/composer/885630" height="32" alt="Composer"/>

This repository contains the backend API for the Demo project. It is built using Laravel, providing RESTful endpoints for application data management.

## 🚀 Features

- 🔐 User authentication and authorization
- 🗄️ CRUD operations for core resources
- 🛡️ Secure API endpoints
- 📦 Integration with database (SQLite)
- ⚙️ Configurable environment variables
- 📋 Logging and error handling

## 🏁 Getting Started

### 🧰 Prerequisites

- <img src="https://cdn.simpleicons.org/php/777BB4" height="20" alt="PHP"/> PHP >= 8.x
- <img src="https://cdn.simpleicons.org/composer/885630" height="20" alt="Composer"/> Composer
- <img src="https://cdn.simpleicons.org/node-dot-js/339933" height="20" alt="Node.js"/> Node.js >= 16.x
- <img src="https://cdn.simpleicons.org/npm/CB3837" height="20" alt="npm"/> npm or <img src="https://cdn.simpleicons.org/yarn/2C8EBB" height="20" alt="yarn"/> yarn
- <img src="https://cdn.simpleicons.org/sqlite/003B57" height="20" alt="SQLite"/> Sqlite database (or update `.env` for your setup)

### 📦 Installation

Clone the repository:
```bash
git clone https://github.com/bainari8136/demo-backend.git
cd demo-backend
```

Install PHP dependencies with Composer:
```bash
composer install
```

Install Node dependencies:
```bash
npm install
# OR
yarn install
```

Configure environment variables by copying and editing `.env.example`:
```bash
cp .env.example .env
```

Generate the application key:
```bash
php artisan key:generate
```

Run database migrations:
```bash
php artisan migrate
```

### ▶️ Running the Laravel Application

Start the Laravel development server:
```bash
php artisan serve
```

The server will typically be available at [http://localhost:8000](http://localhost:8000).

### ▶️ Running the Node Server

Start the development server:
```bash
npm run dev
```

Start in production mode:
```bash
npm start
```

## 📚 API Documentation

The API exposes endpoints for authentication, user management, and CRUD operations for core resources. See the [docs](docs/) folder or access `/api/docs` if enabled.

## 🤝 Contributing

Contributions are welcome! Please submit issues and pull requests as needed.

## 📄 License

This project is licensed under the MIT License.

## 📬 Contact

For questions or support, open an issue or contact [bainari8136](https://github.com/bainari8136).
