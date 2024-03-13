CREATE TABLE `formulario` (
  `idformulario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idformulario`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

  

SELECT * FROM formulario.formulario;
