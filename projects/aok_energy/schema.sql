-- =========================================================
-- A.O.K Energy & Petroleum Solutions - Database Schema
-- Compatible with XAMPP MySQL / phpMyAdmin
-- =========================================================

CREATE DATABASE IF NOT EXISTS aok_energy;
USE aok_energy;

-- Table: quotes
-- Stores client quote inquiries from the web form
CREATE TABLE IF NOT EXISTS quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    company_name VARCHAR(100),
    service_type VARCHAR(50) NOT NULL,
    volume_bbl INT NOT NULL DEFAULT 50000,
    estimated_cost DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
