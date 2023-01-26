CREATE TABLE admin(
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
) ENGINE = InnoDB;
CREATE TABLE comments(
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    comment TEXT,
    PRIMARY KEY(id)
) ENGINE = InnoDB;
-- insert statement
INSERT INTO admin(username, password)
VALUES('admin1', 'admin1');
-- Select statement
SELECT *
FROM admin;
SELECT *
FROM customers;
SELECT *
FROM comments;