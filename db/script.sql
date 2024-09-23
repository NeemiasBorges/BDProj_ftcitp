

CREATE TABLE funcao (
  id INT AUTO_INCREMENT PRIMARY KEY, 
  descricao VARCHAR(100), 
  salario DECIMAL(10, 2)
) ENGINE = INNODB;

CREATE TABLE enfermeiro (
  matricula INT AUTO_INCREMENT PRIMARY KEY, 
  nome VARCHAR(100), 
  data_nasc DATE, 
  endereco VARCHAR(255), 
  bairro VARCHAR(100), 
  cidade VARCHAR(100), 
  estado CHAR(2), 
  telefone VARCHAR(20), 
  email VARCHAR(100), 
  cod_funcao INT, 
  FOREIGN KEY (cod_funcao) REFERENCES funcao(id)
) ENGINE = INNODB;
