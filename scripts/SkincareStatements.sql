-- Name: Emily Morales Medina
-- Date: 3/11/2026
-- Course: IT202-006
-- Assignment Name: Skincare Inventory PHASE 02
-- email: esm33@njit.edu

-- This file will contain the SQL statements for your skincare "product" table 
-- skincare product Table
CREATE TABLE skincare (
    skincare_id          INT             NOT NULL,
    skincare_code        VARCHAR(10)     NOT NULL UNIQUE,
    skincare_name        VARCHAR(255)    NOT NULL,
    skincare_description TEXT            NOT NULL,
    skincare_brand       VARCHAR(50)     NOT NULL,
    skincare_dosage_form   VARCHAR(60)     NOT NULL,
    skincare_type_id     INT             DEFAULT 0,
    skincare_buy_price   DECIMAL(10,2)   NOT NULL,
    skincare_sell_price  DECIMAL(10,2)   NOT NULL,
    date_time_created  TIMESTAMP       DEFAULT CURRENT_TIMESTAMP,
    date_time_updated  TIMESTAMP       DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (skincare_id),
    FOREIGN KEY (skincare_type_id)
      REFERENCES skincare_types(skincare_type_id)
      ON DELETE SET NULL
      ON UPDATE CASCADE
);


INSERT INTO skincare (skincare_id, skincare_code, skincare_name, skincare_description, skincare_brand, skincare_dosage_form, skincare_type_id, skincare_buy_price, skincare_sell_price)
VALUES
(1, 'MOIS', 'CeraVe Moisturizing Cream',
'A lightweight moisturizer that provides long-lasting hydration for all skin types.', 
'CeraVe', 'Cream', 1, 1.00, 5.00);

INSERT INTO skincare (skincare_id, skincare_code, skincare_name, skincare_description, skincare_brand, skincare_dosage_form, skincare_type_id, skincare_buy_price, skincare_sell_price)
VALUES
(2, 'SERN', 'The Ordinary Niacinamide 10% + Zinc 1%',
'A serum that helps reduce the appearance of blemishes and congestion.', 
'The Ordinary', 'Serum', 2, 2.00, 10.00);

select * from skincare;