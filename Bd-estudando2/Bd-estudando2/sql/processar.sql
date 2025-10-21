Create database bdteste;

use bdteste;
 
CREATE TABLE clientes (
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    pais VARCHAR(50) NOT NULL,
	id INT PRIMARY KEY AUTO_INCREMENT
);

select *from clientes; 

ALTER TABLE clientes DROP COLUMN senha;

