# php1-day10-project01

## sql commands
 
### create new databases
    Create DATABASE dbname

### Delete Database
    DROP DATABASE dbname

### Create Table 
      CREATE TABLE product(
    id INT(11) AUTO_INCREMENT PRIMARY KEY ,
    product_name VARCHAR(50) NOT NULL
    )

     
      CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NULL,
    email VARCHAR(50) NULL,
    created_at TIMESTAMP
    );

### Delete Table
    DROP TABLE table_name;

### Insert Data 
    INSERT INTO `product`(`id`, `product_name`) VALUES ('','Coffe Late');

### Update Data 
    UPDATE `product` SET `product_name`='Iced Tea' WHERE `id`=1;
### Delete Data
    DELETE FROM `product` WHERE `id`= 2;