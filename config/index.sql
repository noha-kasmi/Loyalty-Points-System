CREATE TABLE users (

id INT PRIMARY KEY AUTO_INCREMENT,

email VARCHAR(100) UNIQUE NOT NULL,

password_hash VARCHAR(255) NOT NULL,

name VARCHAR(100),

total_points INT DEFAULT 0,

createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE points_transactions (

id INT PRIMARY KEY AUTO_INCREMENT,

user_id INT NOT NULL,

type ENUM('earned', 'redeemed', 'expired') NOT NULL,

amount INT NOT NULL,

description VARCHAR(255),

balance_after INT NOT NULL,

createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE

);

CREATE TABLE rewards (

id INT PRIMARY KEY AUTO_INCREMENT,

name VARCHAR(100) NOT NULL,

points_required INT NOT NULL,

description TEXT,

stock INT DEFAULT -1 -- -1 = unlimited

);


-- insertion des données 
INSERT INTO users (email, password_hash, name, total_points) VALUES
('noha@example.com', 'noha123abs', 'Noha', 1200),
('amine@example.com', 'amin12', 'Amine', 450),
('sara@example.com', 'sarA456', 'Sara', 300);

INSERT INTO points_transactions (user_id, type, amount, description, balance_after) VALUES
(1, 'earned', 500, 'Inscription bonus', 500),
(1, 'earned', 700, 'Achat commande #1023', 1200),

(2, 'earned', 300, 'Achat commande #1024', 300),
(2, 'earned', 150, 'Promotion spéciale', 450),

(3, 'earned', 300, 'Achat commande #1025', 300),
(3, 'redeemed', 100, 'Récompense café gratuit', 200);


INSERT INTO rewards (name, points_required, description, stock) VALUES
('Cafe gratuit', 100, 'Un cafe offert dans nos magasins partenaires', -1),
('Bon d achat 10', 500, 'Bon de reduction valable 30 jours', 50),
('T-shirt ShopEasy', 1000, 'T-shirt officiel ShopEasy', 20),
('Livraison gratuite', 300, 'Livraison gratuite sur une commande', -1);
