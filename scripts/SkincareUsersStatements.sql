-- Name: Emily
-- UCID: esm33
-- Course: IT202
-- Date: February 12, 2026


--CREATE database + users
CREATE DATABASE skincare;
CREATE USER 'skincare_ceo'@'localhost' IDENTIFIED BY 'skincare_ceo_password';
GRANT SELECT, INSERT, UPDATE, DELETE ON skincare.* TO 'skincare_ceo'@'localhost';
-- Create the SkincareUsers table

USE skincare;
CREATE TABLE skincare_users ( 
    skincare_user_id INT NOT NULL AUTO_INCREMENT,
    email_address VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    pronouns VARCHAR(60) NOT NULL,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (skincare_user_id)
);

-- Inserting users into the SkincareUsers table
INSERT INTO skincare_users 
(email_address, password, pronouns, first_name, last_name, phone_number) 
VALUES
('emily@skincare.com', SHA2('1stpassword',256), 'she/her', 'Emily', 'Villanueva', '123-456-7890');

INSERT INTO skincare_users 
(email_address, password, pronouns, first_name, last_name, phone_number) 
VALUES
('mimi@skincare.com', SHA2('2ndpassword',256), 'she/her', 'Mimi', 'Valentines', '234-567-8901');

INSERT INTO skincare_users 
(email_address, password, pronouns, first_name, last_name, phone_number) 
VALUES
('luna@skincare.com', SHA2('3rdpassword',256), 'she/her', 'Luna', 'Soleil', '345-678-9012');

SELECT * FROM skincare_users;