-- Create users table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'pegawai') NOT NULL
);

-- Insert dummy users
INSERT INTO users (username, password, role) VALUES
    ('admin', 'admin_password', 'admin'),
    ('pegawai1', 'pegawai1_password', 'pegawai'),
    ('pegawai2', 'pegawai2_password', 'pegawai');

-- Create pegawai table
CREATE TABLE pegawai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    role ENUM('admin', 'pegawai') NOT NULL
);

-- Insert dummy pegawai
INSERT INTO pegawai (name, role) VALUES
    ('Admin User', 'admin'),
    ('Pegawai One', 'pegawai'),
    ('Pegawai Two', 'pegawai');

-- Create departemen table
CREATE TABLE departemen (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Insert dummy departemen
INSERT INTO departemen (name) VALUES
    ('Departemen HR'),
    ('Departemen IT'),
    ('Departemen Finance');

-- Create proyek table
CREATE TABLE proyek (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Insert dummy proyek
INSERT INTO proyek (name) VALUES
    ('Proyek A'),
    ('Proyek B'),
    ('Proyek C');
