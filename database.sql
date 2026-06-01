CREATE DATABASE IF NOT EXISTS db_tka2026;
USE db_tka2026;

CREATE TABLE siswa (
id INT AUTO_INCREMENT PRIMARY KEY,
nomor_peserta VARCHAR(30),
nisn VARCHAR(20) UNIQUE,
nama VARCHAR(150),
ttl VARCHAR(150),
matematika DECIMAL(5,2),
bahasa_indonesia DECIMAL(5,2)
);

INSERT INTO siswa
(nomor_peserta,nisn,nama,ttl,matematika,bahasa_indonesia)
VALUES
('T2-26-02-06-0007-0001-8','0117567689','AMIRAH SHOFIYAWATI','Cirebon, 8 Maret 2011',56.67,73.33);
