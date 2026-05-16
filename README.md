<div align="center">

<img src="https://img.icons8.com/fluency/120/mysql-logo.png" alt="MySQL" width="110"/>

# 🗄️ MySQL — Complete Reference & Practice Guide

**A structured collection of MySQL queries, concepts, and hands-on scripts**

[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![PHP](https://img.shields.io/badge/PHP-7.x+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![SQL](https://img.shields.io/badge/SQL-Standard-FF6B35?style=for-the-badge&logo=databricks&logoColor=white)]()
[![Status](https://img.shields.io/badge/Status-Active-22c55e?style=for-the-badge)]()
[![License](https://img.shields.io/badge/License-Open%20Source-3b82f6?style=for-the-badge)]()

<br/>

> A one-stop MySQL repository — covering everything from database fundamentals and DDL/DML operations to joins, subqueries, stored procedures, and performance optimization.

</div>

---

## 📋 Table of Contents

- [Overview](#-overview)
- [What's Inside](#-whats-inside)
- [Topics Covered](#-topics-covered)
- [Getting Started](#-getting-started)
- [Usage Examples](#-usage-examples)
- [Folder Structure](#-folder-structure)
- [Quick Cheatsheet](#-quick-sql-cheatsheet)
- [Resources](#-resources)
- [Author](#-author)

---

## 🔍 Overview

This repository is a **complete MySQL reference and practice kit** — built to serve both beginners learning SQL from scratch and developers who need a reliable reference for real-world database operations.

Every script is clean, well-commented, and structured around real use-cases. Whether you're preparing for interviews, working on a database-driven application, or brushing up on SQL concepts, this repo has you covered.

---

## 📦 What's Inside

| Category | Description |
|----------|-------------|
| 📁 `sql/` | Core SQL scripts organized by topic |
| 📄 `README.md` | This guide |

---

## 🧠 Topics Covered

### 🏗️ Database & Table Management (DDL)

```sql
-- Create a database
CREATE DATABASE college_db;
USE college_db;

-- Create a table
CREATE TABLE students (
    id         INT PRIMARY KEY AUTO_INCREMENT,
    name       VARCHAR(100) NOT NULL,
    age        INT,
    department VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### ✏️ Data Operations (DML)

```sql
-- Insert records
INSERT INTO students (name, age, department)
VALUES ('Pushpender Kumar', 21, 'CSE');

-- Update records
UPDATE students SET department = 'DevOps' WHERE id = 1;

-- Delete records
DELETE FROM students WHERE age < 18;
```

### 🔍 Querying Data (DQL)

```sql
-- Basic SELECT with filtering
SELECT name, department FROM students WHERE age > 20 ORDER BY name ASC;

-- Aggregate functions
SELECT department, COUNT(*) AS total, AVG(age) AS avg_age
FROM students
GROUP BY department
HAVING COUNT(*) > 2;
```

### 🔗 Joins

```sql
-- INNER JOIN — matching rows in both tables
SELECT s.name, c.course_name
FROM students s
INNER JOIN courses c ON s.id = c.student_id;

-- LEFT JOIN — all students, even without courses
SELECT s.name, c.course_name
FROM students s
LEFT JOIN courses c ON s.id = c.student_id;
```

### 🪆 Subqueries

```sql
-- Students older than the average age
SELECT name FROM students
WHERE age > (SELECT AVG(age) FROM students);
```

### ⚙️ Stored Procedures & Functions

```sql
-- Stored procedure to get students by department
DELIMITER //
CREATE PROCEDURE GetByDept(IN dept VARCHAR(50))
BEGIN
    SELECT * FROM students WHERE department = dept;
END //
DELIMITER ;

-- Call it
CALL GetByDept('CSE');
```

### 🔒 Constraints & Indexes

```sql
-- Unique constraint
ALTER TABLE students ADD CONSTRAINT uq_email UNIQUE (email);

-- Index for faster lookups
CREATE INDEX idx_department ON students(department);
```

### 🔄 Transactions

```sql
START TRANSACTION;
    UPDATE accounts SET balance = balance - 500 WHERE id = 1;
    UPDATE accounts SET balance = balance + 500 WHERE id = 2;
COMMIT;
-- Use ROLLBACK; to undo on error
```

---

## 🚀 Getting Started

### Prerequisites

| Tool | Version | Download |
|------|---------|----------|
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white) MySQL Server | 5.7+ / 8.x | [mysql.com](https://dev.mysql.com/downloads/) |
| ![XAMPP](https://img.shields.io/badge/XAMPP-F37623?style=flat&logo=xampp&logoColor=white) XAMPP / WAMP | Latest | [apachefriends.org](https://www.apachefriends.org/) |
| ![Workbench](https://img.shields.io/badge/MySQL_Workbench-4479A1?style=flat&logo=mysql&logoColor=white) MySQL Workbench | Latest | [mysql.com](https://dev.mysql.com/downloads/workbench/) |

### Setup

**1. Clone the repository**

```bash
git clone https://github.com/PushpenderKumar7505/MYSQL.git
cd MYSQL
```

**2. Open MySQL Workbench or phpMyAdmin**

**3. Run any script from the `sql/` folder**

```bash
mysql -u root -p < sql/your_script.sql
```

Or paste directly into MySQL Workbench / phpMyAdmin's SQL editor.

---

## 💡 Usage Examples

### Run a script via terminal

```bash
mysql -u root -p database_name < sql/joins_example.sql
```

### Import into phpMyAdmin

1. Open `http://localhost/phpmyadmin`
2. Select your database → click **Import**
3. Choose the `.sql` file → click **Go**

### Connect via PHP

```php
<?php
$conn = new mysqli("localhost", "root", "", "your_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
?>
```

---

## 📂 Folder Structure

```
MYSQL/
│
├── 📁 sql/                    # All SQL scripts organized by topic
│   ├── 01_ddl.sql             # CREATE, ALTER, DROP statements
│   ├── 02_dml.sql             # INSERT, UPDATE, DELETE
│   ├── 03_select.sql          # SELECT queries and filtering
│   ├── 04_joins.sql           # INNER, LEFT, RIGHT, FULL joins
│   ├── 05_subqueries.sql      # Nested queries and correlated subqueries
│   ├── 06_aggregates.sql      # GROUP BY, HAVING, COUNT, SUM, AVG
│   ├── 07_procedures.sql      # Stored procedures and functions
│   ├── 08_indexes.sql         # Index creation and optimization
│   ├── 09_transactions.sql    # BEGIN, COMMIT, ROLLBACK
│   └── 10_constraints.sql     # PRIMARY KEY, FOREIGN KEY, UNIQUE, CHECK
│
└── 📄 README.md               # This file
```

---

## 🔑 Quick SQL Cheatsheet

```sql
-- ─── DDL ──────────────────────────────────────────────
CREATE DATABASE db_name;
DROP DATABASE db_name;
CREATE TABLE t (id INT PRIMARY KEY, name VARCHAR(50));
ALTER TABLE t ADD COLUMN email VARCHAR(100);
DROP TABLE t;

-- ─── DML ──────────────────────────────────────────────
INSERT INTO t VALUES (1, 'Alice', 'alice@mail.com');
UPDATE t SET name = 'Bob' WHERE id = 1;
DELETE FROM t WHERE id = 1;

-- ─── DQL ──────────────────────────────────────────────
SELECT * FROM t WHERE id > 5 ORDER BY name DESC LIMIT 10;
SELECT dept, COUNT(*) FROM t GROUP BY dept HAVING COUNT(*) > 1;

-- ─── JOINS ────────────────────────────────────────────
SELECT a.name, b.score FROM a INNER JOIN b ON a.id = b.a_id;
SELECT a.name, b.score FROM a LEFT  JOIN b ON a.id = b.a_id;

-- ─── AGGREGATE FUNCTIONS ──────────────────────────────
SELECT COUNT(*), SUM(sal), AVG(sal), MAX(sal), MIN(sal) FROM emp;

-- ─── STRING & DATE FUNCTIONS ──────────────────────────
SELECT UPPER(name), LENGTH(name), NOW(), YEAR(dob) FROM users;
```

---

## 📚 Resources

| Resource | Link |
|----------|------|
| 📖 MySQL Official Docs | [dev.mysql.com/doc](https://dev.mysql.com/doc/) |
| 🎓 W3Schools SQL Tutorial | [w3schools.com/sql](https://www.w3schools.com/sql/) |
| 🧪 SQL Practice (LeetCode) | [leetcode.com/studyplan/top-sql-50](https://leetcode.com/studyplan/top-sql-50/) |
| 🔧 MySQL Workbench Guide | [dev.mysql.com/doc/workbench](https://dev.mysql.com/doc/workbench/en/) |
| 📝 SQLZoo Practice | [sqlzoo.net](https://sqlzoo.net/) |

---

## 👤 Author

<div align="center">

<img src="https://img.icons8.com/fluency/64/developer-mode.png" width="56"/>

**Pushpender Kumar**

*B.Tech Computer Science & Engineering — GLA University, Mathura*

[![GitHub](https://img.shields.io/badge/GitHub-PushpenderKumar7505-181717?style=for-the-badge&logo=github)](https://github.com/PushpenderKumar7505)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/pushpender-kumar-5280b7226/)

*Aspiring DevOps & Cloud Engineer | AWS · Docker · Kubernetes · Jenkins · Terraform · Ansible*

</div>

---

<div align="center">

### ⭐ Found this useful? Give it a star!

<img src="https://img.icons8.com/fluency/48/star.png" width="32"/>

*Fork it, use it, improve it — contributions are welcome!*

</div>
