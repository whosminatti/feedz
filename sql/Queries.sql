create database teste_feedz;
use teste_feedz;

CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  fullname varchar(255) NOT NULL,
  pass varchar(255) NOT NULL,
  PRIMARY KEY (ID),
  UNIQUE (email)
);


INSERT INTO users (id, email, fullname, pass)
VALUES (null, 'minatti.leandro@gmail.com', 'Leandro Minatti de Souza', '987654321');
INSERT INTO users (id, email, fullname, pass)
VALUES (null, 'minatti.leandro@gmail.com', 'Leandro Minatti de Souza', '987654321');




SELECT * 
FROM users;

SELECT 
  id,
	email, 
  fullname
FROM users
WHERE email =''
ORDER BY fullname;

UPDATE users
SET 
	email = ''
WHERE 
	id = ;
    
DELETE FROM users 
WHERE id = ;