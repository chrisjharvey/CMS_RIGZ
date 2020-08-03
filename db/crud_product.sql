

--
-- Table structure for table 'product'
--

CREATE TABLE IF NOT EXISTS product (
  product_id INT(10) NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(100) NOT NULL,
  description TEXT,
  price DECIMAL(6,2) NOT NULL DEFAULT 0.00,
  stock INT(10) NOT NULL DEFAULT 0,
  image VARCHAR(50) DEFAULT 'default.png',
  PRIMARY KEY(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- --------------------------------------------------------

--
-- Dumping data for table 'product' 
--

  
INSERT INTO product (product_name, description, price ,stock) VALUES
("rig-1", "HP Laptop", 399.99, 10),
("rig-2",  "Dell Laptop", 299.99, 10),
("rig-3", "IBM Laptop", 499.99, 10),
("rig-4", "HP Desktop", 599.99, 10),
("rig-5", "Dell Desktop", 699.99, 10);



-- --------------------------------------------------------
