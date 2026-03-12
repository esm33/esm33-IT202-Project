-- Name: Emily Morales Medina
-- Date: 3/11/2026
-- Course: IT202-006
-- Assignment Name: Skincare Inventory PHASE 02
-- email: esm33@njit.edu

-- This file will contain the SQL statements for your skincare_types table
-- Skincare_types Table
CREATE TABLE skincare_types (
    skincare_type_id    INT             NOT NULL,
    skincare_type_code  VARCHAR(255)    NOT NULL UNIQUE,
    skincare_type_name  VARCHAR(255)    NOT NULL,
    skincare_shelfnumber  INT             NOT NULL,
    date_time_created TIMESTAMP       DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP       DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY ( skincare_type_id )
);



-- Moisturizer, Serum, Sunscreen, Skin Type, SPF
INSERT INTO skincare_types (skincare_type_id, skincare_type_code, skincare_type_name, skincare_shelfnumber)
VALUES (1, 'MOIS', 'Moisturizer', 1);

INSERT INTO skincare_types (skincare_type_id, skincare_type_code, skincare_type_name, skincare_shelfnumber)
VALUES (2, 'SERN', 'Serum', 2);

INSERT INTO skincare_types (skincare_type_id, skincare_type_code, skincare_type_name, skincare_shelfnumber)
VALUES (3, 'SUNS', 'Sunscreen', 3);

select * from skincare_types;