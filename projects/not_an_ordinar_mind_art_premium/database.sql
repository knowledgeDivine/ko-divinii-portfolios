-- NOT AN ORDINARY MIND — Art Gallery Database
-- Import this file in phpMyAdmin.
CREATE DATABASE IF NOT EXISTS naom_art CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE naom_art;

CREATE TABLE IF NOT EXISTS artworks (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(160) NOT NULL,
  category VARCHAR(80) NOT NULL,
  image_url TEXT NOT NULL,
  source VARCHAR(60) NOT NULL DEFAULT 'Pexels',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(category)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS messages (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(190) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS favorites (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  artwork_id INT UNSIGNED NOT NULL,
  visitor_token VARCHAR(120) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY unique_favorite (artwork_id, visitor_token),
  CONSTRAINT fk_favorite_artwork FOREIGN KEY (artwork_id) REFERENCES artworks(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO artworks (id,title,category,image_url,source) VALUES
(1, 'Ethereal Bloom', 'Digital Art', 'https://images.pexels.com/photos/1108701/pexels-photo-1108701.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(2, 'Ethereal Bloom — Study', 'Digital Art', 'https://images.pexels.com/photos/1108701/pexels-photo-1108701.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(3, 'Golden Silence', 'Abstract', 'https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(4, 'Golden Silence — Study', 'Abstract', 'https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(5, 'Neon Dreams', 'Digital Art', 'https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(6, 'Neon Dreams — Study', 'Digital Art', 'https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(7, 'Blue Geometry', 'Abstract', 'https://images.pexels.com/photos/1557238/pexels-photo-1557238.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(8, 'Blue Geometry — Study', 'Abstract', 'https://images.pexels.com/photos/1557238/pexels-photo-1557238.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(9, 'Midnight Portrait', 'Portrait', 'https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(10, 'Midnight Portrait — Study', 'Portrait', 'https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(11, 'Cosmic Ocean', 'Surreal', 'https://images.pexels.com/photos/1169754/pexels-photo-1169754.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(12, 'Cosmic Ocean — Study', 'Surreal', 'https://images.pexels.com/photos/1169754/pexels-photo-1169754.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(13, 'Quiet Architecture', 'Architecture', 'https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(14, 'Quiet Architecture — Study', 'Architecture', 'https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(15, 'Red Frequency', 'Abstract', 'https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(16, 'Red Frequency — Study', 'Abstract', 'https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(17, 'Human / Nature', 'Conceptual', 'https://images.pexels.com/photos/1671325/pexels-photo-1671325.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(18, 'Human / Nature — Study', 'Conceptual', 'https://images.pexels.com/photos/1671325/pexels-photo-1671325.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(19, 'Velvet Light', 'Portrait', 'https://images.pexels.com/photos/154147/pexels-photo-154147.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(20, 'Velvet Light — Study', 'Portrait', 'https://images.pexels.com/photos/154147/pexels-photo-154147.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(21, 'Liquid Form', 'Abstract', 'https://images.pexels.com/photos/1025469/pexels-photo-1025469.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(22, 'Future City', 'Architecture', 'https://images.pexels.com/photos/466685/pexels-photo-466685.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(23, 'Soft Rebellion', 'Conceptual', 'https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(24, 'Solar Memory', 'Surreal', 'https://images.pexels.com/photos/35537/child-children-girl-happy.jpg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(25, 'Infinite Blue', 'Digital Art', 'https://images.pexels.com/photos/998641/pexels-photo-998641.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(26, 'Shadow Study', 'Photography', 'https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(27, 'Paper Universe', 'Conceptual', 'https://images.pexels.com/photos/268415/pexels-photo-268415.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels'),
(28, 'Afterglow', 'Surreal', 'https://images.pexels.com/photos/132037/pexels-photo-132037.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pexels')
ON DUPLICATE KEY UPDATE title=VALUES(title), category=VALUES(category), image_url=VALUES(image_url), source=VALUES(source);
