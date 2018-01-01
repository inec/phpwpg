#phpwpg

a play ground for my php testing 

todomvc trial


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