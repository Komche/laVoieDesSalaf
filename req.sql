ALTER TABLE `annonces` ADD `date_event` DATE NULL AFTER `users`, ADD `time_event` TIME NULL AFTER `date_event`;

ALTER TABLE `annonces` CHANGE `date_annonce` `date_annonce` TIMESTAMP NOT NULL;