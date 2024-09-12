-- MySQL Script generated by MySQL Workbench
-- Thu Sep 12 10:34:37 2024
-- Model: New Model    Version: 1.0
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
-- Table `mdl_`.`Tb_Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `senha` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `administrador` VARCHAR(45) NULL,
  `aluno` VARCHAR(45) NOT NULL,
  `professor` VARCHAR(45) NOT NULL,
  `tutor` VARCHAR(45) NOT NULL,
  `coordenador_tecnico` VARCHAR(45) NOT NULL,
  `gerente_cursos` VARCHAR(45) NOT NULL,
  `gerente_pagamentos` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `Senha` VARCHAR(45) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `fuso_horario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `Email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Curso` (
  `id_curso` INT NOT NULL AUTO_INCREMENT,
  `nome_curso` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `data_inicio` DATE NOT NULL,
  `data_termino` DATE NOT NULL,
  `fuso_horario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Matricula` (
  `id_matricula` INT NOT NULL,
  `FK_id_curso` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL AUTO_INCREMENT,
  `status_matricula` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_matricula`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_curso`
    FOREIGN KEY (`FK_id_curso`)
    REFERENCES `mdl_`.`Tb_Curso` (`id_curso`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Documento` (
  `id_documento` INT NOT NULL AUTO_INCREMENT,
  `FK_id_usuario` INT NOT NULL,
  `nome_documento` VARCHAR(50) NOT NULL,
  `tipo_documento` VARCHAR(50) NOT NULL,
  `data_armazenamento` DATE NOT NULL,
  `caminho_arquivo` VARCHAR(50) NOT NULL,
  `conteudo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_documento`),
  UNIQUE INDEX `id_documento_UNIQUE` (`id_documento` ASC) VISIBLE,
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Pagina_Inicial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Pagina_Inicial` (
  `id_pagina_inicial` INT NOT NULL AUTO_INCREMENT,
  `FK_id_usuario` INT NOT NULL,
  `config_pagina` VARCHAR(45) NOT NULL,
  `data_ultima_modificacao` DATE NOT NULL,
  PRIMARY KEY (`id_pagina_inicial`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Suporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Suporte` (
  `id_suporte` INT NOT NULL AUTO_INCREMENT,
  `FK_id_usuario` INT NOT NULL,
  `tipo_solicitacao` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `data_solicitacao` DATE NOT NULL,
  `status_solicitacao` VARCHAR(45) NOT NULL,
  `resposta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_suporte`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Certificado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Certificado` (
  `id_certificado` INT NOT NULL AUTO_INCREMENT,
  `FK_id_usuario` INT NOT NULL,
  `FK_id_curso` INT NOT NULL,
  `data_emissao` DATE NOT NULL,
  `codigo_rastreio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_certificado`),
  UNIQUE INDEX `codigo_rastreio_UNIQUE` (`codigo_rastreio` ASC) VISIBLE,
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_curso`
    FOREIGN KEY (`FK_id_curso`)
    REFERENCES `mdl_`.`Tb_Curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Backup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Backup` (
  `id_backup` INT NOT NULL AUTO_INCREMENT,
  `FK_id_curso` INT NOT NULL,
  `data_backup` DATE NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `status_backup` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_backup`),
  CONSTRAINT `id_curso`
    FOREIGN KEY (`FK_id_curso`)
    REFERENCES `mdl_`.`Tb_Curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Relatorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Relatorio` (
  `id_relatorio` INT NOT NULL AUTO_INCREMENT,
  `FK_id_curso` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL,
  `tipo_relatorio` VARCHAR(45) NOT NULL,
  `data_geracao` DATE NOT NULL,
  `conteudo_gerado` VARCHAR(45) NOT NULL,
  `arquivo_pdf` VARCHAR(45) NULL,
  PRIMARY KEY (`id_relatorio`),
  CONSTRAINT `id_curso`
    FOREIGN KEY (`FK_id_curso`)
    REFERENCES `mdl_`.`Tb_Curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Painel_Controle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Painel_Controle` (
  `id_Painel_Controle` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL,
  `FK_id_relatorio` INT NOT NULL,
  `aprovado` VARCHAR(45) NOT NULL,
  `reprovado` VARCHAR(45) NULL,
  `evadido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Painel_Controle`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `id_relatorio`
    FOREIGN KEY (`FK_id_relatorio`)
    REFERENCES `mdl_`.`Tb_Relatorio` (`id_relatorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_Perfil_Acesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_Perfil_Acesso` (
  `id_Perfil` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL,
  `nome_perfil` VARCHAR(45) NOT NULL,
  `permissoes` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Perfil`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_mensagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_mensagens` (
  `id_mensagens` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL,
  `assunto` VARCHAR(45) NOT NULL,
  `mensagem` VARCHAR(45) NOT NULL,
  `data_envio` DATE NOT NULL,
  PRIMARY KEY (`id_mensagens`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mdl_`.`Tb_pagamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mdl_`.`Tb_pagamentos` (
  `id_pagamento` INT NOT NULL,
  `FK_id_usuario` INT NOT NULL,
  `FK_id_relatorios` INT NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `data_pagamento` DATE NOT NULL,
  `forma_pagamento` VARCHAR(45) NOT NULL,
  `status_pagamento` VARCHAR(45) NOT NULL,
  `descrição` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pagamento`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`FK_id_usuario`)
    REFERENCES `mdl_`.`Tb_Usuario` (`id_usuario`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `id_relatorio`
    FOREIGN KEY (`FK_id_relatorios`)
    REFERENCES `mdl_`.`Tb_Relatorio` (`id_relatorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
