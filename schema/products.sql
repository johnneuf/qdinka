CREATE TABLE `qdinka3`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `productType` INT NOT NULL COMMENT '',
  `sellerID` INT NOT NULL COMMENT '',
  `price` DECIMAL(6,2) NOT NULL DEFAULT 0 COMMENT '',
  `inStock` BINARY(1) NOT NULL DEFAULT 1 COMMENT '',
  `availible` INT(11) NOT NULL DEFAULT 0 COMMENT '',
  `condition` INT(1) NOT NULL COMMENT '',
  `description` TEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `seller` (`sellerID` ASC)  COMMENT '',
  INDEX `type` (`productType` ASC)  COMMENT '')
COMMENT = 'Table that stores all of the customers products';