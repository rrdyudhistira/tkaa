
CREATE DATABASE IF NOT EXISTS tka_db;
USE tka_db;

CREATE TABLE peserta_tka (
    id INT PRIMARY KEY,
    nomor_peserta VARCHAR(50),
    kolom_2 VARCHAR(255),
    nisn BIGINT,
    nama VARCHAR(255),
    kolom_5 VARCHAR(255),
    tempat_tanggal_lahir VARCHAR(255),
    kolom_7 VARCHAR(255),
    nilai_literasi VARCHAR(50),
    nilai_numerasi VARCHAR(50),
    kolom_10 VARCHAR(255),
    kolom_11 VARCHAR(255),
    kolom_12 VARCHAR(255)
);
