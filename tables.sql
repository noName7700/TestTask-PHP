CREATE TABLE `urls`.`urls` 
(`id` INT NOT NULL AUTO_INCREMENT , 
`url` VARCHAR(255) NOT NULL , 
`short` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), 
UNIQUE `urls_url_uindex` (`url`), 
UNIQUE `urls_short_uindex` (`short`)) 
ENGINE = InnoDB;

CREATE DEFINER=`root`@`%` EVENT `delete_old_rows` 
ON SCHEDULE EVERY 1 MINUTE STARTS '2024-03-06 18:43:43' 
ON COMPLETION NOT PRESERVE ENABLE 
DO DELETE FROM urls WHERE time_delete <= DATE_ADD(NOW(), INTERVAL 2 HOUR)