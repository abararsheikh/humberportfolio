-- change the deleted and update columns to NULL

ALTER TABLE `administrators` CHANGE `deleted_at` `deleted_at` DATETIME NULL;

ALTER TABLE `administrators` CHANGE `updated_at` `updated_at` DATETIME NULL;

ALTER TABLE `classes` CHANGE `deleted_at` `deleted_at` DATETIME NULL;

ALTER TABLE `classes` CHANGE `updated_at` `updated_at` DATETIME NULL;

ALTER TABLE `images` CHANGE `deleted_at` `deleted_at` DATETIME NULL;

ALTER TABLE `images` CHANGE `updated_at` `updated_at` DATETIME NULL;

ALTER TABLE `projects` CHANGE `deleted_at` `deleted_at` DATETIME NULL;

ALTER TABLE `projects` CHANGE `updated_at` `updated_at` DATETIME NULL;

ALTER TABLE `students` CHANGE `deleted_at` `deleted_at` DATETIME NULL;

ALTER TABLE `students` CHANGE `updated_at` `updated_at` DATETIME NULL;


-- INDICES
-- project name
-- image alt text
-- project link
-- email
-- project keywords as FULL TEXT

ALTER TABLE `projects` ADD FULLTEXT(`name`);

ALTER TABLE `images` ADD FULLTEXT(`alt`);

ALTER TABLE `students` ADD FULLTEXT(`website_link`);

ALTER TABLE `students` ADD INDEX(`email`);

ALTER TABLE `projects` ADD FULLTEXT(`keywords`);


-- CHECK CURRENT VERSION OF THE DB

CREATE TABLE IF NOT EXISTS `db_updates` (
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO db_updates (name) VALUES
('humberportfolio.sql'),
('update1.sql');