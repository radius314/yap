CREATE TABLE `cache_call_events` (`id` int(11) NOT NULL,`parent_callsid` varchar(255),`callsid` varchar(255),`event_time` timestamp NULL,`event_id` int(11) NOT NULL,`service_body_id` int(11) NOT NULL,`meta` TEXT, guid varchar(36));
