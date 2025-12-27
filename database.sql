CREATE DATABASE cyber_marketplace;
USE cyber_marketplace;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  email VARCHAR(100),
  password VARCHAR(255)
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  description TEXT,
  price VARCHAR(20)
);

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT
);
