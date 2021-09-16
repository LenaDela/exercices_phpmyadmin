
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `title`, `description`) VALUES (NULL, 'Do homework', 'sffhsdkhdsdgkhdslmd');

SELECT title FROM `tasks` WHERE id = 1;
SELECT title FROM `tasks`;

UPDATE `tasks` SET `title` = 'Clean Clothes' WHERE `tasks`.`id` = 2;

DELETE FROM `tasks` WHERE `tasks`.`id` = 1;