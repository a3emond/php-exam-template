
# 📚 PHP Exam Template - Winter 2025

This project serves as a structured template for organizing and presenting answers to the **PHP Server-Side Web Development** exam for the **Winter 2025** session at **LaSalle College, Montreal**.

It is designed as a **Single Page Application (SPA)** using PHP for server-side routing, combined with JavaScript for dynamic content loading. The project is containerized using **Docker** for easy setup and deployment.

---

## ⚙️ Features

- ✅ **Dynamic Routing:** The `index.php` acts as the main router, dynamically loading pages into the main content area.
- ✅ **SPA Behavior:** JavaScript handles navigation, loading content without full page reloads.
- ✅ **Responsive Design:** Fully responsive layout with a collapsible navigation menu for smaller devices.
- ✅ **Localization:** Language toggle for English and French.
- ✅ **Dockerized:** Easy to run using Docker with pre-configured Apache and PHP settings.

---

## 📁 Project Structure

```
project-root/
│
├── apache/               # Apache & PHP configs
├── www/
│   ├── components/       # Reusable components (navbar, header, footer)
│   ├── pages/            # Exam answers (ex1.php, ex2.php, etc.)
│   ├── static/           # Static assets (CSS, JS)
│   ├── index.php         # Main router
│   └── .htaccess         # Apache routing rules
│
├── docker-compose.yml    # Docker setup
├── Dockerfile            # Apache + PHP image configuration
└── README.md             # Project documentation
```

---

## 🚀 Getting Started

### ✅ **Prerequisites**
- **Docker** installed on your machine. [Get Docker](https://www.docker.com/get-started)

---

### 📦 **Run the Project**
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/a3emond/php-exam-template.git
   cd php-exam-template
   ```

2. **Build and Run the Containers:**
   ```bash
   docker-compose up --build -d
   ```

3. **Access the Application:**
   - Open your browser and navigate to: [http://localhost:8080](http://localhost:8080)

4. **Stop the Application:**
   ```bash
   docker-compose down
   ```

---

## 🧑‍💻 Usage

- Navigate through exam exercises using the navigation bar.
- Use the **language toggle** to switch between **English** and **French**.
- Add new exercises by creating PHP files in the `/pages/` directory and linking them in the navbar.

---

## 💡 Tips

- **Docker Logs:** If you encounter issues, check logs with:
  ```bash
  docker-compose logs
  ```
- **Rebuild the Containers** (if changes are made to Docker configs):
  ```bash
  docker-compose up --build -d
  ```

---

## 📄 License

This project is developed for educational purposes as part of the **PHP Server-Side Web Development** course at **LaSalle College, Montreal**.

© 2025 Alexandre Emond. All Rights Reserved.
