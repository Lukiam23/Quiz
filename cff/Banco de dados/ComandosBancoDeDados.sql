drop database exemplo_ntwi;
CREATE DATABASE exemplo_ntwi;
use exemplo_ntwi;
CREATE TABLE exemplo_ntwi . usuarios
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Chave primaria.",
login VARCHAR(30) NOT NULL,
senha VARCHAR(60) NOT NULL,
nome VARCHAR(50) NOT NULL,
sexo INT NOT NULL COMMENT '1. Feminino ; 2. Masculino .',
identidade VARCHAR(20) NULL COMMENT "Apenas numeros .",
cpf VARCHAR(11) NOT NULL COMMENT "Apenas numeros .",
nascimento DATE NOT NULL,
estado_civil INT NOT NULL COMMENT "1. Solteiro ; 2. Casado ; 3. Separado ;
4. Divorciado ; 5. Viuvo ; 6. Uniao estavel .",
funcao_empresa VARCHAR(40) NOT NULL,
star_coins VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
telefone VARCHAR(8) NOT NULL COMMENT "Apenas numeros .",
perfil INT NOT NULL COMMENT "1. Padrao ; 2. Administrador .",
cad_usuario INT NOT NULL COMMENT "Id do usuario que efetuou o cadastro .",
cad_datahora DATETIME NOT NULL COMMENT 'Data e hora de efetivacao do cadastro .',
UNIQUE (login , identidade , cpf)
);

INSERT INTO exemplo_ntwi . usuarios
(
id , login , senha , nome , sexo , identidade , cpf , nascimento ,
estado_civil , funcao_empresa , email , telefone , perfil , cad_usuario ,
cad_datahora
)
VALUES
(
NULL, "admin", "admin", "Administrador", "2", NULL,
 "00000000000 ", "2011-08-09 ", "1", " Administracao ", "admin@minhaempresa.com.br ",
 "00000000 ", "2", "1", "2011-08-09 17:44:54 "
 );
 
CREATE TABLE exemplo_ntwi.receitasdespesas
(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Chave primaria.",
nome VARCHAR( 50 ) NOT NULL COMMENT "Ex .: conta de telefone .",
tipo INT(1) NOT NULL COMMENT "1. Receita ; 2. Despesa .",
classe INT(1) NOT NULL COMMENT "1. variavel ; 2. Fixo .",
datahora DATETIME NOT NULL,
valor FLOAT NOT NULL,
usuario INT NOT NULL COMMENT "Id do usuario a quem pertence .",
descricao TEXT NULL COMMENT "Comentarios adicionais .",
mes_referencia VARCHAR(30) NOT NULL COMMENT "Ex .: JANEIRO."
);