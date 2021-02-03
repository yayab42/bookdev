-- MySQL Script generated by MySQL Workbench
-- Tue Feb  2 16:37:46 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bookdev
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bookdev
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bookdev` DEFAULT CHARACTER SET utf8 ;
USE `bookdev` ;

-- -----------------------------------------------------
-- Table `bookdev`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookdev`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookdev`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookdev`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT(500) NULL DEFAULT NULL,
  `price_ht` DECIMAL UNSIGNED NOT NULL,
  `weight` INT UNSIGNED NOT NULL,
  `vat` DECIMAL NOT NULL,
  `stock` INT NOT NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_products_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `bookdev`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_products_categories1_idx` ON `bookdev`.`products` (`categories_id` ASC) ;


-- -----------------------------------------------------
-- Table `bookdev`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookdev`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lastname` VARCHAR(100) NOT NULL,
  `firstname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `email_UNIQUE` ON `bookdev`.`users` (`email` ASC) ;

CREATE UNIQUE INDEX `username_UNIQUE` ON `bookdev`.`users` (`firstname` ASC) ;


-- -----------------------------------------------------
-- Table `bookdev`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookdev`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order_create` DATETIME NULL,
  `number` INT UNSIGNED NOT NULL,
  `order_delivery` DATETIME NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_orders_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `bookdev`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `number_UNIQUE` ON `bookdev`.`orders` (`number` ASC) ;

CREATE INDEX `fk_orders_users_idx` ON `bookdev`.`orders` (`users_id` ASC) ;


-- -----------------------------------------------------
-- Table `bookdev`.`order_lines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookdev`.`order_lines` (
  `orders_id` INT NOT NULL,
  `products_id` INT NOT NULL,
  `quantity` INT UNSIGNED NOT NULL,
  `price` DECIMAL NOT NULL,
  `weight` DECIMAL NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT(500) NULL,
  `vat` DECIMAL NOT NULL,
  PRIMARY KEY (`orders_id`, `products_id`),
  CONSTRAINT `fk_products_has_orders_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `bookdev`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_orders_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `bookdev`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_products_has_orders_orders1_idx` ON `bookdev`.`order_lines` (`orders_id` ASC) ;

CREATE INDEX `fk_products_has_orders_products1_idx` ON `bookdev`.`order_lines` (`products_id` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;