# 🎉 Eventopia – Symfony Event Planning Platform

![Symfony](https://img.shields.io/badge/Symfony-6.x-blue.svg)
![License](https://img.shields.io/github/license/your-username/eventopia)
![PHP](https://img.shields.io/badge/PHP-8.1%2B-blue)
![Status](https://img.shields.io/badge/status-in%20development-orange)

**Eventopia** is a modern, extensible web application designed to simplify and manage all aspects of event planning. Whether you're organizing conferences, private parties, or corporate meetings, Eventopia provides a scalable system for handling users, events, venues, and schedules—all built on the robust Symfony framework.

---

## 📌 Table of Contents

- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Screenshots](#-screenshots)
- [Getting Started](#-getting-started)
- [Configuration](#-configuration)
- [Roadmap](#-roadmap)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## ✨ Features

- ✅ Role-based access for Admins, Organizers, and Clients
- 📅 Event creation and schedule management
- 🏛 Venue and equipment reservation
- 🔔 Email notifications and automated reminders
- 📊 Custom dashboards with live metrics
- 🔐 Secure login and session management
- 📁 Modular Symfony architecture for easy scalability

---

## 🧰 Tech Stack

| Layer        | Technology             |
|--------------|------------------------|
| Framework    | Symfony 6              |
| Language     | PHP 8.1+               |
| Database     | MySQL / PostgreSQL     |
| ORM          | Doctrine ORM           |
| Frontend     | Twig, Bootstrap        |
| Mailer       | Symfony Mailer         |
| Auth System  | Symfony Security       |
| Deployment   | Docker, Symfony CLI    |

---

## 🖼 Screenshots

> *(Add real screenshots or UI previews of your application)*

![Event List](docs/screenshots/event-list.png)
![Dashboard](docs/screenshots/admin-dashboard.png)

---

## ⚙️ Getting Started

To get a local copy up and running:

### 1. Clone the Repository

```bash
git clone https://github.com/kthiriMohamedyoussef/PI-Project-Symfony.git
cd eventopia
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Environment Variables

Create your `.env.local` file:

```bash
cp .env .env.local
```

Update database credentials in `.env.local`:

```dotenv
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/eventopia"
```

### 4. Run Migrations

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

### 5. Start the Development Server

```bash
symfony server:start
```

> Visit `http://127.0.0.1:8000` in your browser.

---

## 🛠 Configuration

- **Mailer**: Update mailer settings in `.env.local`:
  ```dotenv
  MAILER_DSN=smtp://username:password@smtp.mailtrap.io:2525
  ```
- **Admin Access**: Default roles and users can be seeded or created via fixtures or the admin panel.

---

## 🚧 Roadmap

- [ ] User calendar with drag & drop events
- [ ] Payment gateway integration (Stripe, PayPal)
- [ ] QR code check-in system
- [ ] API support for mobile apps
- [ ] Multi-language support

---

## 🤝 Contributing

1. Fork the project
2. Create a new branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m 'Add your feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a Pull Request

---

## 📄 License

Distributed under the **MIT License**. See [`LICENSE`](LICENSE) for more information.

---

## 📬 Contact

**Project Maintainer**  
👤 CodeCatalyst 


---

> Built with ❤️ using Symfony – Making event planning smarter, faster, and easier.
