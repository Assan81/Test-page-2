for Data+Base  -   CREATE TABLE `practice`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `active` TINYINT(1) NOT NULL , PRIMARY KEY (`id`, `username`)) ENGINE = InnoDB;
