ALTER DATABASE iLinks CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) NOT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics_name` varchar(200) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `visited_at` timestamp NULL DEFAULT NULL COMMENT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE links ADD index FK36ILUS16335B86 (created_by),
ADD CONSTRAINT FK36ILUS16335B86
FOREIGN KEY (created_by) REFERENCES users(id);

ALTER TABLE links ADD COLUMN tags varchar(255) DEFAULT NULL;
ALTER TABLE links CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE links ADD COLUMN status int(11) DEFAULT 1;
ALTER TABLE links ADD COLUMN add_to_fav int(1) DEFAULT 0;

INSERT INTO `users` (`id`, `full_name`, `email_id`, `username`, `password`, `status`, `roles`, `created`) VALUES
(1, 'MR Taumal', 'taumal@qmail.com.bd', 'taumal', '$2y$10$LTT6oO0UKKh.Ua3MF1Ua6.40JrAEFWMe4caBhlEZ4ufAKr4TD92rm', 1, 'admin', '2017-09-20 10:36:20'),
(2, 'Abadul Islam', 'eban@qmail.com.bd', 'eban', '$2y$10$kT9P/r0tfd2hglBKGQiHceupTWf8MfE7xjRH0PgnJE02jwXs7OJyK', 0, 'user', '2017-09-22 08:59:09'),
(3, 'Sohel Ahmed', 'sohel@qmail.com.bd', 'sohel', '$2y$10$zJXIWdH9s9Y.wsQFesuspO/YGW1M9qxPhdV1YNoNsMk15j/61tnvu', 1, 'user', '2017-09-21 03:35:05'),
(4, 'Sayed Nasrul Islam', 'anom@qmail.com.bd', 'anam', '$2y$10$1Q3Oy8Yj5tGTQNPA9qKSuOd2Joj4sHx9wODCJypHqupLvAuWrrrfC', 1, 'user', '2017-09-24 09:49:40');