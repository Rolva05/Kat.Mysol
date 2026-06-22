CREATE DATABASE realestate;
USE realestate;
CREATE TABLE properties(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
price DECIMAL(12,2),
location VARCHAR(255),
description TEXT,
image VARCHAR(255)
);
CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
password VARCHAR(255),
role VARCHAR(50)
);