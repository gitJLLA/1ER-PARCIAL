CREATE DATABASE crudphpmysql;

use crudphpmysql;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  producto VARCHAR(70) NOT NULL,
  cantidad DOUBLE,
  precio FLOAT
);

DESCRIBE task;
