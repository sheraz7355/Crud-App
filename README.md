# 📝 PHP CRUD Application with MySQL and XAMPP

This is a simple web-based **CRUD application** built using **PHP**, **MySQL**, and **Bootstrap 5**, designed to manage student records. The application allows users to create, read, update, and delete data in a clean, responsive interface.

---

## 📌 Features

- View all student records in a table  
- Add a new student using a Bootstrap modal  
- Edit student information  
- Delete student entries with confirmation  
- Success message display after each action  

---

## 🛠 Technologies Used

- PHP (Core logic)  
- MySQL (Database)  
- HTML/CSS (Frontend)  
- Bootstrap 5 (Styling and responsiveness)  
- XAMPP (Local server environment)  

---

## 🖥️ How to Set Up Locally

### ✅ 1. Install XAMPP

- Download and install from: [https://www.apachefriends.org](https://www.apachefriends.org)  
- Launch XAMPP and start:
  - **Apache**
  - **MySQL**

---

### ✅ 2. Create the Database

1. Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
2. Click **"New"** and create a database named:
   ```
   crudapp
   ```
3. Run this SQL to create the `student` table:
   ```sql
   CREATE TABLE student (
       id INT AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(100),
       last_name VARCHAR(100),
       age INT
   );
   ```

---

### ✅ 3. Project Folder Structure

Place your project folder inside:

```
C:\xampp\htdocs\
```

Your project directory should look like this:

```
crudapp/
├── index.php
├── update_page.php
├── delete_page.php
├── add_student.php
├── connect.php
├── header.php
├── footer.php
├── style.css
└── README.md
```

---

### ✅ 4. Run the App

Open your browser and go to:

```
http://localhost/crudapp/index.php
```

---

## 🧠 File Descriptions

- `index.php` – Displays student records + modal form to add new student  
- `add_student.php` – Handles form submission and inserts data  
- `update_page.php` – Shows update form and performs update  
- `delete_page.php` – Deletes student record  
- `connect.php` – MySQL connection script  
- `header.php` / `footer.php` – Common page layout  
- `style.css` – Custom styles for layout  
- `README.md` – This instruction file  

---

## 🔐 Security Recommendations

- Use **prepared statements** to prevent SQL injection  
- Sanitize and validate all form input  
- Escape output using `htmlspecialchars()` to prevent XSS  

---

## 🙌 Author

Developed by **[Muhammad-Sheraz ]**

---

## 📜 License

This project is for educational purposes. Free to use, modify, and share.
