ALTER TABLE `module` ADD `is_menu` BOOLEAN NOT NULL DEFAULT TRUE AFTER `sub_module`;

--MAJ

ALTER TABLE `users` ADD FOREIGN KEY (`type_agent`) REFERENCES `type_agent`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `users` ADD FOREIGN KEY (`role`) REFERENCES `roles`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `module_role` ADD FOREIGN KEY (`module`) REFERENCES `module`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `module_role` ADD FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `users` ADD `entity` INT NULL AFTER `password_`, ADD INDEX (`entity`);

ALTER TABLE `users` ADD FOREIGN KEY (`entity`) REFERENCES `entity`(`id_entity`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `entity` ADD FOREIGN KEY (`ville`) REFERENCES `ville`(`idVille`) ON DELETE RESTRICT ON UPDATE RESTRICT;

 ALTER TABLE `entity` ADD INDEX(`uniqueId`);

ALTER TABLE `model` ADD FOREIGN KEY (`entity`) REFERENCES `entity`(`uniqueId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `users` CHANGE `matricule` `matricule` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;