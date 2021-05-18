-- -----------------------------------------------------
-- Schema iline
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `iline` DEFAULT CHARACTER SET utf8 ;
USE `iline` ;

-- -----------------------------------------------------
-- Table `iline`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL UNIQUE,
  `cpf` CHAR(14) NOT NULL UNIQUE,
  `senha` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `iline`.`cantina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`cantina` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_instituicao` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL UNIQUE,
  `senha` VARCHAR(100) NOT NULL,
  `cnpj` CHAR(18) NOT NULL UNIQUE,
  `cep` CHAR(9) NOT NULL,
  `estado` CHAR(2) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `numero` INT NOT NULL,
  `bairro` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `iline`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` ENUM('Pizza','Salgado','Lanche','Doces','Bebidas') NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `qtd` INT NOT NULL,
  `descricao` TEXT NULL,
  `preco` DECIMAL(7,2) NOT NULL,
  `cantina_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`cantina_id`) REFERENCES `iline`.`cantina` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `iline`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`pedido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pagamento` VARCHAR(50) NOT NULL,
  `troco` DECIMAL(7,2) NULL,
  `status` VARCHAR(20) NOT NULL,
  `aluno_id` INT NOT NULL,
  `cantina_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`aluno_id`) REFERENCES `iline`.`aluno` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`cantina_id`) REFERENCES `iline`.`cantina` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `iline`.`horario_funcionamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`horario_funcionamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `periodo` ENUM('M', 'T', 'N') NOT NULL,
  `abertura` TIME,
  `fechamento` TIME,
  `cantina_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`cantina_id`) REFERENCES `iline`.`cantina` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `iline`.`pedido_itens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `iline`.`pedido_itens` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pedido_id` INT NOT NULL,
  `produto_id` INT NOT NULL,
  `qtd` INT NOT NULL,
  `preco` DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`pedido_id`) REFERENCES `iline`.`pedido` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`produto_id`) REFERENCES `iline`.`produto` (`id`)
    ON DELETE CASCADE ON UPDATE CASCADE)
ENGINE = InnoDB;