CREATE DATABASE IF NOT EXISTS feetfit DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE feetfit;

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  image VARCHAR(255) NOT NULL,
  alt VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO products (title, price, image, alt) VALUES
('Gym Outfit For Female', 3500.00, 'OIP%20(5).webp', 'female outfit'),
('Gym Outfit For Men', 1800.00, 'OIP%20(11).webp', 'male outfit'),
('Yoga Mat', 2000.00, 'enquirenowpopup.webp', 'yoga mat');
