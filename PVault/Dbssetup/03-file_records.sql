CREATE TABLE IF NOT EXISTS `file_records` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`userid` int(11) NOT NULL,
`file_name` varchar(60) NOT NULL,
`file_title` varchar(60) NOT NULL,
`file_size` int(11) NOT NULL,
`uploaded_date` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;