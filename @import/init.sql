CREATE TABLE IF NOT EXISTS `[DB_PREFIX]_authlog` (
	`no` int(4) NOT NULL,
	`problem_no` int(4) NOT NULL,
	`username` varchar(20) NOT NULL,
	`auth_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `[DB_PREFIX]_problem` (
	`no` int(4) NOT NULL,
	`category` varchar(20) NOT NULL,
	`title` varchar(50) NOT NULL,
	`contents` text NOT NULL,
	`score` int(4) NOT NULL,
	`flag` binary(64) NOT NULL,
	`author` varchar(20) NOT NULL,
	`register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `[DB_PREFIX]_user` (
	`no` int(4) NOT NULL,
	`username` varchar(20) NOT NULL,
	`email` varchar(320) NOT NULL,
	`open_email` tinyint(1) NOT NULL,
	`password` binary(64) NOT NULL,
	`comment` varchar(30) NOT NULL,
	`ploshadka` varchar(64) NOT NULL,
	`score` int(4) NOT NULL,
	`join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `[DB_PREFIX]_writeup` (
	`no` int(4) NOT NULL,
	`problem_no` int(4) NOT NULL,
	`contents` text NOT NULL,
	`author` varchar(20) NOT NULL,
	`register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


ALTER TABLE `[DB_PREFIX]_authlog`
ADD PRIMARY KEY (`no`);

ALTER TABLE `[DB_PREFIX]_problem`
ADD PRIMARY KEY (`no`);

ALTER TABLE `[DB_PREFIX]_user`
ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `[DB_PREFIX]_writeup`
ADD PRIMARY KEY (`no`);


ALTER TABLE `[DB_PREFIX]_authlog`
MODIFY `no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `[DB_PREFIX]_problem`
MODIFY `no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `[DB_PREFIX]_user`
MODIFY `no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `[DB_PREFIX]_writeup`
MODIFY `no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
