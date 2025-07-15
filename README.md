# PHP CRUD App with MySQL and Bootstrap

A simple web-based **CRUD (Create, Read, Update, Delete)** application built using **PHP**, **MySQL**, and **Bootstrap 5**. It helps you manage student records with options to add, edit, and delete entries.

---

## 🔥 Features

- Add new students using a Bootstrap modal
- Display all students in a responsive Bootstrap table
- Edit student info on a separate update page
- Delete records directly from the list
- Feedback messages for successful actions

---

## 🖼️ Interface Preview

### 📊 Dashboard View

<img src="screenshots/dashboard.png" alt="Dashboard Screenshot" width="600"/>

Displays a full list of students with **Update** and **Delete** actions.

---

### ➕ Add Student Modal

<img src="screenshots/add-student-modal.png" alt="Add Student Modal" width="600"/>

Opens a Bootstrap modal form to enter new student details.

---

### ✏️ Update Page

<img src="screenshots/update-page.png" alt="Update Page" width="600"/>

Redirects to a separate form to update existing student data.

---

## 🛠️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/sheraz7355/Crud-App.git
cd Crud-App

```
### 2. Start XAMPP
Open the XAMPP Control Panel
Start both Apache and MySQL
3. Create MySQL Database
Go to: http://localhost/phpmyadmin
Create a database called: crudapp

### 3. Run this SQL query to create the table:
 ```
    CREATE TABLE student (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100),
  last_name VARCHAR(100),
  age INT
);

```
### 4. ▶️ Run the App

Move your project folder into:
macOS: /Applications/XAMPP/xamppfiles/htdocs/
Windows: C:\xampp\htdocs\
Then visit in your browser:

```
   http://localhost/crudapp/

```
### 5. 📁 Folder Structure
```
  crudapp/
├── add_student.php
├── connect.php
├── delete_page.php
├── footer.php
├── header.php
├── index.php
├── style.css
├── update_page.php
├── README.md
└── screenshots/
    ├── dashboard.png
    ├── add-student-modal.png
    └── update-page.png
```
# 👤 Author

 Muhammad Sheraz
GitHub: @sheraz7355
            
