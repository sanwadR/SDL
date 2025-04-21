CREATE DATABASE IF NOT EXISTS complaints;
USE complaints;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    title VARCHAR(100),
    description TEXT,
    status VARCHAR(20) DEFAULT 'Pending'
);
