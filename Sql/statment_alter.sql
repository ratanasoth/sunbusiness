--Alter table career`--
ALTER TABLE `career` CHANGE `jobposition` `position` VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `career` ADD `orderno` TINYINT NULL AFTER `description`;
--Alter table customers`--
ALTER TABLE `customers` ADD `orderno` TINYINT NOT NULL AFTER `url`;
--Alter table partners--
ALTER TABLE `partners` ADD `orderno` TINYINT NULL AFTER `url`;