create database teste_feedz;
use teste_feedz;

CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(40) NOT NULL,
  email varchar(255) NOT NULL,
  fullname varchar(255) NOT NULL,
  pass varchar(255) NOT NULL,
  PRIMARY KEY (ID),
  UNIQUE (username)
);


INSERT INTO users (id, username, email, fullname, pass)
VALUES (null, 'whosminatti', 'minatti.leandro@gmail.com', 'Leandro Minatti de Souza', '987654321');
INSERT INTO users (id, username, email, fullname, pass)
VALUES (null, 'minatti', 'minatti.leandro@gmail.com', 'Leandro Minatti de Souza', '987654321');




SELECT * 
FROM users;

SELECT 
  id,
	username,
	email, 
  fullname
FROM users
WHERE username = ''
ORDER BY username;

UPDATE users
SET 
	username = ''
WHERE 
	username = '';
    
DELETE FROM users 
WHERE username = '';