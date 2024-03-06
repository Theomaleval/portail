-- Création de la BDD
CREATE DATABASE IF NOT EXISTS `portail`;
USE `portail`;

-- Création de la table users
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `full_name` varchar(64) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `age` INT NOT NULL,
    PRIMARY KEY (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

delete from `users`;
insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (20, 'theo.maleval@exemple.com', 'Theo Maleval', 'test', 1);
insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (66, 'pierre.paul@exemple.com', 'Pierre Paul', 'jacque', 2);
insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (46, 'emmanuel.macron@exemple.com', 'Emmanuel Macron', 'president', 3);
