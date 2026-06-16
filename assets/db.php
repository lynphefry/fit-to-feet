<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'feet_to_fit';

/* ---------------- CONNECT ---------------- */
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');

/* ---------------- HELPERS ---------------- */
function ensure_table($sql) {
    global $conn;
    mysqli_query($conn, $sql);
}

function seed_table_once($table, $seedSqls) {
    global $conn;

    $check = mysqli_query($conn, "SELECT COUNT(*) AS c FROM $table");
    if ($check) {
        $row = mysqli_fetch_assoc($check);
        if ($row['c'] == 0) {
            foreach ($seedSqls as $sql) {
                mysqli_query($conn, $sql);
            }
        }
    }
}

/* ---------------- MEMBERS TABLE (FIXED) ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) DEFAULT '',
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(50) DEFAULT '',
    password VARCHAR(255) NOT NULL,
    plan VARCHAR(50) DEFAULT '',
    join_date DATE DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

/* ---------------- CONTACTS ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

/* ---------------- CLASSES ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    time_slot VARCHAR(100) NOT NULL,
    trainer VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('classes', [
    "INSERT INTO classes (title, description, time_slot, trainer, image) VALUES
        ('Yoga', 'Improve flexibility, posture, balance, and mental relaxation.', '6:00 AM - 7:30 AM', 'Sarah', 'OIP%20(8).webp'),
        ('Boxing', 'Professional boxing and strength training sessions.', '10:00 AM - 12:00 PM', 'Benji', 'trainer%204.webp'),
        ('Cardio', 'High intensity fat burning and endurance workouts.', '5:00 PM - 6:30 PM', 'Mercy', 'oya.jpg'),
        ('CrossFit', 'Full body strength and conditioning workouts.', '1:00 PM - 2:30 PM', 'John', 'trainer%203.jpg')"
]);

/* ---------------- EVENTS ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    event_date DATE NOT NULL,
    event_time VARCHAR(50) NOT NULL,
    location VARCHAR(150) NOT NULL,
    image VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('events', [
    "INSERT INTO events (title, description, event_date, event_time, location, image) VALUES
        ('Fitness Bootcamp', 'Outdoor high-intensity training with professionals.', '2026-06-15', '8:00 AM', 'Nairobi Gym Arena', 'bootcamp.webp'),
        ('Zumba Party', 'Dance fitness with music.', '2026-06-20', '5:00 PM', 'FEET TO FIT Studio', 'event%202.webp'),
        ('Yoga Retreat', 'Meditation and relaxation.', '2026-07-01', '7:00 AM', 'Karura Forest', 'OIP%20(18).webp'),
        ('Boxing Championship', 'Competitive boxing event.', '2026-07-10', '10:00 AM', 'Central Arena', 'boxing-player-event.avif')"
]);

/* ---------------- TRAINERS ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS trainers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL,
    bio TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('trainers', [
    "INSERT INTO trainers (name, role, image, bio) VALUES
        ('John Fitness', 'Strength Coach', 'trainer%203.jpg', 'Builds muscle and endurance.'),
        ('Sarah Yoga', 'Yoga Instructor', 'black%20yoga.webp', 'Flexibility and breath work expert.'),
        ('Mike Gymnastics', 'Gymnastics Trainer', 'gymnastics.webp', 'Balance and body control.'),
        ('Andy', 'Pilates Trainer', 'pilates.jpg', 'Core strength specialist.'),
        ('Amelia', 'Zumba Instructor', 'mirror.jpg', 'High-energy dance fitness.'),
        ('Benji', 'Boxing Instructor', 'trainer%204.webp', 'Boxing technique coach.')"
]);

/* ---------------- TESTIMONIALS ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('testimonials', [
    "INSERT INTO testimonials (name, image, message) VALUES
        ('Mercy', 'OIP%20(4).webp', 'Amazing trainers and equipment.'),
        ('Joan', 'OIP%20(16).webp', 'Lost weight and gained confidence.'),
        ('Kevin', 'OIP%20(17).webp', 'Best gym experience ever.')"
]);

/* ---------------- SCHEDULE ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(20) NOT NULL,
    morning VARCHAR(255) NOT NULL,
    afternoon VARCHAR(255) NOT NULL,
    evening VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('schedule', [
    "INSERT INTO schedule (day, morning, afternoon, evening) VALUES
        ('Monday', 'Yoga 6:00 AM', 'Boxing 12:00 PM', 'Cardio 6:00 PM'),
        ('Tuesday', 'Pilates 6:00 AM', 'Strength 12:00 PM', 'Zumba 6:00 PM'),
        ('Wednesday', 'HIIT 6:00 AM', 'Core 12:00 PM', 'CrossFit 6:00 PM'),
        ('Thursday', 'Spin 6:00 AM', 'Core 12:00 PM', 'Yoga 6:00 PM'),
        ('Friday', 'Cardio 6:00 AM', 'Bootcamp 12:00 PM', 'Boxing 6:00 PM')"
]);

/* ---------------- PRODUCTS ---------------- */
ensure_table("CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    alt VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

seed_table_once('products', [
    "INSERT INTO products (title, price, image, alt) VALUES
        ('Gym Outfit For Female', 3500.00, 'OIP%20(5).webp', 'female outfit'),
        ('Gym Outfit For Men', 1800.00, 'OIP%20(11).webp', 'male outfit'),
        ('Yoga Mat', 2000.00, 'enquirenowpopup.webp', 'yoga mat')"
]);
?>