-- MySQL Database Setup for CPCS403 Final Project
-- This script creates the database and tables required for the project

-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS cpcs403_project;

-- Use the database
USE cpcs403_project;

-- Create feedback table
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    gender VARCHAR(10) NOT NULL,
    city VARCHAR(50) NOT NULL,
    interests TEXT NOT NULL,
    feedback_text TEXT NOT NULL,
    rating INT NOT NULL,
    submission_date DATETIME NOT NULL,
    CONSTRAINT check_rating CHECK (rating >= 1 AND rating <= 5)
);

-- Create courses table (primary table)
CREATE TABLE IF NOT EXISTS courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(10) NOT NULL,
    course_name VARCHAR(100) NOT NULL,
    credit_hours INT NOT NULL,
    department VARCHAR(50) NOT NULL,
    description TEXT,
    CONSTRAINT unique_course_code UNIQUE (course_code)
);

-- Create students table (related table with foreign key)
CREATE TABLE IF NOT EXISTS students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    enrollment_date DATE NOT NULL,
    course_id INT NOT NULL,
    grade VARCHAR(2),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);

-- Insert sample data into courses table
INSERT INTO courses (course_code, course_name, credit_hours, department, description) VALUES
('CPCS 403', 'Internet Application Programming', 3, 'Computer Science', 'This course covers web development technologies including HTML, CSS, JavaScript, PHP, and MySQL.'),
('CPCS 361', 'Database Systems', 3, 'Computer Science', 'This course covers database design, SQL, normalization, and database management systems.'),
('CPCS 351', 'System Analysis', 3, 'Computer Science', 'This course covers system analysis and design methodologies, tools, and techniques.'),
('CPCS 331', 'Artificial Intelligence', 3, 'Computer Science', 'This course covers AI concepts, problem-solving, knowledge representation, and machine learning.'),
('CPCS 371', 'Computer Networks', 3, 'Computer Science', 'This course covers network architectures, protocols, and network security.');

-- Insert sample data into students table
INSERT INTO students (first_name, last_name, email, enrollment_date, course_id, grade) VALUES
('Ahmed', 'Ali', 'ahmed.ali@example.com', '2024-09-01', 1, 'A'),
('Fatima', 'Mohammed', 'fatima.m@example.com', '2024-09-01', 1, 'B+'),
('Omar', 'Abdullah', 'omar.a@example.com', '2024-09-01', 2, 'A-'),
('Layla', 'Ibrahim', 'layla.i@example.com', '2024-09-01', 2, 'B'),
('Khalid', 'Hassan', 'khalid.h@example.com', '2024-09-01', 3, 'A'),
('Noor', 'Saeed', 'noor.s@example.com', '2024-09-01', 3, 'C+'),
('Yusuf', 'Ahmed', 'yusuf.a@example.com', '2024-09-01', 4, 'B-'),
('Aisha', 'Mahmoud', 'aisha.m@example.com', '2024-09-01', 4, 'A'),
('Mohammed', 'Saleh', 'mohammed.s@example.com', '2024-09-01', 5, 'B+'),
('Sara', 'Khalid', 'sara.k@example.com', '2024-09-01', 5, 'A-');
