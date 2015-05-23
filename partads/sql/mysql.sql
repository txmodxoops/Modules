#
# Table structure for table `partads_pards`
#
		
CREATE TABLE  `partads_pards` (
`pards_id` int (8) unsigned NOT NULL  auto_increment,
`pards_title` varchar (155)   NOT NULL ,
`pards_desc` varchar (255)   NOT NULL ,
`pards_url` varchar (150)   NOT NULL ,
`pards_image` varchar (150)   NOT NULL ,
`pards_weight` int (10)   NOT NULL ,
`pards_hits` int (10)   NOT NULL ,
`pards_status` tinyint (1)   NOT NULL ,
`pards_date_expired` int (10)   NOT NULL ,
`pards_submitter` int (10)   NOT NULL default '0',
`pards_date_created` int (10)   NOT NULL default '0',
`pards_online` tinyint (1)   NOT NULL default '0',
PRIMARY KEY (`pards_id`),
KEY `pards_status` (`pards_status`)
) ENGINE=MyISAM;

