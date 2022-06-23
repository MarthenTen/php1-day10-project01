# php1-day10-project01

## sql commands ✅
 
### create conection #1 ✅
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php1_day10';

    // create conection 
    $connection = new mysqli($servername,$username,$password,$database);

    //check connection 
    if($connection->connect_error){
        // echo "Elor";
        die("Connection Failed".$connection->connect_error);
    }else{
        echo "Tra Elor";
    }

### create conection #2 ✅
    $comnect = new mysqli('localhost','root','','php1_day10');

    if (!$comnect->connect_error){
        echo "tra eror";
    }  else{
        echo"ada error";
    }




### create new databases ✅
    Create DATABASE dbname

### Delete Database✅
    DROP DATABASE dbname

### Create Table ✅
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

### Delete Table✅
    DROP TABLE table_name;

### Insert Data ✅
    INSERT INTO `product`(`id`, `product_name`) VALUES ('','Coffe Late');

### Update Data ✅
    UPDATE `product` SET `product_name`='Iced Tea' WHERE `id`=1;
### Delete Data ✅
    DELETE FROM `product` WHERE `id`= 2;

