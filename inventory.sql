/* db : live */
CREATE TABLE inventory (
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(128),
    price DECIMAL(8,2)
);

INSERT INTO inventory VALUES(NULL, 'Lucky Guitar', 123);
INSERT INTO inventory VALUES(NULL, 'Rock Guitar', 45);
INSERT INTO inventory VALUES(NULL, 'Haha Guitar', 67,);