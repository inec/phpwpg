#phpwpg

a play ground for my php testing 

todomvc trial

v1.0;
CREATE TABLE `todos` (
  `completed` varchar(4) NOT NULL,
  `order` int(11) default NULL,
  `title` varchar(50) default NULL,
  `url` varchar(4) ,
  `done` tinyint(1) unsigned zerofill default NULL,
  `uid` varchar(36) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT
  PRIMARY KEY  (`id`)
) ;


 INSERT INTO todos VALUES ("true", 1, "Code new website",  "",1,"uid1","1");


old version :v0.1; 
drop table todos;
CREATE TABLE `todos` (
  `uid` varchar(36) NOT NULL,
  `order` int(11) default NULL,
  `title` varchar(50) default NULL,
  `completed` varchar(4) NOT NULL,
  `url` varchar(4) NOT NULL,
  `done` tinyint(1) unsigned zerofill default NULL,
  PRIMARY KEY  (`uid`)
) ;


 INSERT INTO todos VALUES ("EQtest", 1, "Code new website", "true", "",1);