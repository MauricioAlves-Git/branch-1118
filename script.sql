-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mdl_
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mdl_
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mdl_` DEFAULT CHARACTER SET utf8 ;
USE `mdl_` ;

-- -----------------------------------------------------
-- Table `mdl_`.`tb_backup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_backup` (
  `id_backup` INT(11) NOT NULL AUTO_INCREMENT,
  `data_backup` DATE NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `status_backup` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_backup`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_certificado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_certificado` (
  `id_certificado` INT(11) NOT NULL AUTO_INCREMENT,
  `data_emissao` DATE NOT NULL,
  `codigo_rastreio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_certificado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_curso` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `data_inicio` DATE NOT NULL,
  `data_termino` DATE NOT NULL,
  `fuso_horario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_documento` (
  `id_documento` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_documento` VARCHAR(50) NOT NULL,
  `tipo_documento` VARCHAR(50) NOT NULL,
  `data_armazenamento` DATE NOT NULL,
  `caminho_arquivo` VARCHAR(50) NOT NULL,
  `conteudo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_documento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_grupo_acesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_grupo_acesso` (
  `id_Grupo_Acesso` INT(11) NOT NULL,
  `administrador` TINYINT(4) NOT NULL,
  `professor` VARCHAR(45) NOT NULL,
  `tutor` VARCHAR(45) NOT NULL,
  `coordenador_tecnico` VARCHAR(45) NOT NULL,
  `gerente_cursos` VARCHAR(45) NOT NULL,
  `gerente_pagamentos` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Grupo_Acesso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(45) NOT NULL,
  `fuso_horario` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `funcionario` TINYINT(4) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_matricula` (
  `id_matricula` INT(11) NOT NULL,
  `FK_id_curso` INT(11) NOT NULL,
  `FK_id_usuario` INT(11) NOT NULL,
  `status_matricula` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_matricula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_mensagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_mensagens` (
  `id_mensagens` INT(11) NOT NULL,
  `assunto` VARCHAR(45) NOT NULL,
  `mensagem` VARCHAR(45) NOT NULL,
  `data_envio` DATE NOT NULL,
  PRIMARY KEY (`id_mensagens`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_pagamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_pagamentos` (
  `id_pagamento` INT(11) NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `data_pagamento` DATE NOT NULL,
  `forma_pagamento` VARCHAR(45) NOT NULL,
  `status_pagamento` VARCHAR(45) NOT NULL,
  `descrição` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pagamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_pagina_inicial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_pagina_inicial` (
  `id_pagina_inicial` INT(11) NOT NULL AUTO_INCREMENT,
  `config_pagina` VARCHAR(45) NOT NULL,
  `data_ultima_modificacao` DATE NOT NULL,
  PRIMARY KEY (`id_pagina_inicial`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_painel_controle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_painel_controle` (
  `id_Painel_Controle` INT(11) NOT NULL,
  `aprovado` VARCHAR(45) NOT NULL,
  `reprovado` VARCHAR(45) NULL DEFAULT NULL,
  `evadido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Painel_Controle`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_perfil_acesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_perfil_acesso` (
  `id_Perfil` INT(11) NOT NULL,
  `nome_perfil` VARCHAR(45) NOT NULL,
  `permissoes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Perfil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_relatorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_relatorio` (
  `id_relatorio` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_relatorio` VARCHAR(45) NOT NULL,
  `data_geracao` DATE NOT NULL,
  `conteudo_gerado` VARCHAR(45) NOT NULL,
  `arquivo_pdf` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_relatorio`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mdl_`.`tb_suporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`tb_suporte` (
  `id_suporte` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_solicitacao` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `data_solicitacao` DATE NOT NULL,
  `status_solicitacao` VARCHAR(45) NOT NULL,
  `resposta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_suporte`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;