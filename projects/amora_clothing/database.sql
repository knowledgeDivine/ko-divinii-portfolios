CREATE DATABASE IF NOT EXISTS amora_fashion CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE amora_fashion;
CREATE TABLE IF NOT EXISTS products (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(120) NOT NULL,category VARCHAR(50) NOT NULL,price DECIMAL(12,2) NOT NULL,image TEXT NOT NULL,tag VARCHAR(30) DEFAULT 'ESSENTIAL',sizes VARCHAR(100) DEFAULT 'XS,S,M,L,XL',description TEXT,featured TINYINT(1) DEFAULT 0,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO products (name,category,price,image,tag,sizes,description,featured) VALUES
('Noir Sculpt Dress','Dresses',185000,'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?auto=format&fit=crop&w=900&q=85','NEW','XS,S,M,L','A fluid black silhouette cut to move through the room with you.',1),
('After Hours Blazer','Outerwear',220000,'https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=900&q=85','SIGNATURE','S,M,L,XL','Sharp shoulders, relaxed body and a finish made for after-dark.',1),
('Muse Draped Top','Tops',98000,'https://images.unsplash.com/photo-1564257577054-9e2e8d7b1a7f?auto=format&fit=crop&w=900&q=85','NEW','XS,S,M,L','A soft drape with an architectural neckline.',1),
('Sienna Column Skirt','Bottoms',135000,'https://images.unsplash.com/photo-1583496661160-fb5886a13d27?auto=format&fit=crop&w=900&q=85','EDIT','XS,S,M,L,XL','A long, clean line designed to elongate the silhouette.',1),
('Obsidian Slip','Dresses',145000,'https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=900&q=85','ESSENTIAL','XS,S,M,L','Minimal from the front, unforgettable in motion.',0),
('Form Trousers','Bottoms',125000,'https://images.unsplash.com/photo-1506629905607-d9b1f4f7f0f1?auto=format&fit=crop&w=900&q=85','ESSENTIAL','S,M,L,XL','High-waisted tailored trousers with a generous, modern leg.',0),
('Aster Knit','Tops',89000,'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?auto=format&fit=crop&w=900&q=85','LIMITED','XS,S,M,L','A tactile knit with an effortless sculptural fit.',0),
('Dune Trench','Outerwear',245000,'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=900&q=85','NEW','S,M,L,XL','A statement trench built for changing skies and changing plans.',0)
ON DUPLICATE KEY UPDATE name=VALUES(name);
