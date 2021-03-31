DROP DATABASE IF EXISTS  my_DanielJasinski_final;
CREATE DATABASE my_DanielJasinski_final; 
USE my_DanielJasinski_final; 

CREATE TABLE brands (
brandID    INT       NOT NULL    AUTO_INCREMENT,
brandName  VARCHAR(45) NOT NULL, 
PRIMARY KEY (brandID),
INDEX brandName (brandName)
); 

CREATE TABLE products (
productID    INT       NOT NULL    AUTO_INCREMENT,
brandID      INT       NOT NULL, 
productType  VARCHAR(45) DEFAULT 'N/A', 
productName  VARCHAR(45) NOT NULL,
PRIMARY KEY (productID)
); 

CREATE TABLE specs (
specID     INT       NOT NULL    AUTO_INCREMENT,
productID  INT       NOT NULL, 
RAMAmount  INT, 
processor  VARCHAR(45),
PRIMARY KEY (specID),
INDEX productID (productID)
); 

GRANT SELECT, INSERT, UPDATE, DELETE 
ON*
TO final_user@localhost
IDENTIFIED BY 'final';

INSERT INTO brands
(brandName)
VALUES
('Apple'),
('Dell'),
('Microsoft'); 

INSERT INTO products
(brandID, productType, productName)
VALUES
(1, 'Desktop', 'iMac'), 
(1, 'Desktop', 'Mac mini'),
(1, 'Laptop', 'MacBook Pro'),
(2, 'Desktop', 'Aurora R11'),
(2, 'Desktop', 'Inspiron 3000'),
(2, 'Laptop', 'Area 51M'),
(3, 'Desktop', 'Surface Studio 2'),
(3, 'Laptop', 'Surface Laptop Go'),
(3, 'Laptop', 'Surface Laptop 3'); 

INSERT INTO specs
(productID, RAMAmount, processor)
VALUES
(1, 8, 'i5'),
(2, 8, 'i3'),
(3, 8, 'i5'),
(4, 16, 'i7'),
(5, 12, 'i7'),
(6, 16, 'i7'),
(7, 32, 'i7'),
(8, 4, 'i5'),
(9, 4, 'Ryzen 5');