CREATE TABLE `cache_records_conference_participants` (parent_callsid varchar(100), callsid varchar(100), guid varchar(36));
CREATE TABLE `cache_records_records_conference_participants` (`id` int(11) NOT NULL,`callsid` varchar(255),`start_time` timestamp,`end_time` timestamp,`from_number` varchar(255),`to_number` varchar(255),`duration` int(11),`parent_callsid` varchar(100), guid varchar(36));
