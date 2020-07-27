CREATE DATABASE IF NOT EXISTS cms_rigz;
USE cms_rigz;

-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS users (
  user_id INT(10) NOT NULL AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(200) NOT NULL,
  PRIMARY KEY (user_id)
)ENGINE=InnoDB DEFAULT CHARSET="utf8";

--
-- insert data for table "users"
--

INSERT INTO users (username, password, email) VALUES
("Billy123", sha1("123"), "Ben@gmail.com"),
("jenny456", sha1("123"), "jenny@gmail.com");
