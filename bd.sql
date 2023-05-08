
create database dbos;
use dbos;

CREATE TABLE `tbclientes` (
  'idcliente' INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome_cli` varchar(50) NOT NULL,
  `endereço_cli` varchar(100) DEFAULT NULL,
  `fone_cli` varchar(50) NOT NULL,
  `email_cli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbos` (
  `idos` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `data_os` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `equipamento` varchar(100) NOT NULL,
  `defeito` varchar(100) NOT NULL,
  `serviço` varchar(50) NOT NULL,
  `tecnico` varchar(30) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbusuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usuario` varchar(50) NOT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `perfil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tbos;
select * from tbusuarios;
describe tbusuarios;
select * from tbclientes;

INSERT INTO `tbusuarios` (`iduser`, `usuario`, `fone`, `login`, `senha`, `perfil`) VALUES
(1, 'dom', '4455-5555', 'root', 'admin', 'admin');

INSERT INTO `tbclientes` (`idcliente`, `nome_cli`, `endereço_cli`, `fone_cli`, `email_cli`) VALUES	
(2, 'coordenador', 'algeria - 550', '4455-2418', 'coordena@hotmail.com');
         








DELETE FROM `dbos`.`tbusuarios`
WHERE iduser = 6;


-- trazer dados duplicados
SELECT DISTINCT iduser,usuario,perfil FROM tbusuarios;

-- atualizando registro
update tbos set defeito = "resolda"  where os = 3 and idcliente = 2;
update tbusuarios set perfil = "tecnico"  where iduser = 3;


-- order by
SELECT usuario, fone, perfil, iduser FROM tbusuarios ORDER BY iduser asc;


-- join
SELECT  os, equipamento, defeito, tecnico, nome_cli, data_os
		FROM tbos ts
		INNER JOIN tbclientes tc
		ON (ts.os = tc.idcliente) 
		where defeito = "resolda";
        
SELECT login, senha, perfil
FROM tbusuarios
where senha = "admin" and perfil = "admin";
       
        
-- union
select usuario from tbusuarios 
union 
select fone_cli from tbclientes;

-- procedures
create procedure orcamento (preco smallint)
	select concat('orçamento e', preco) as valor
    from tbos
	where os = preco;

call dbos.orcamento(130);
