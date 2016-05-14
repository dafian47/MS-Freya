CREATE TABLE `Users` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`username` varchar(8) NOT NULL DEFAULT '',
`password` varchar(8) NOT NULL DEFAULT '',
`level` varchar(5) NOT NULL DEFAULT '',
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=MyISAM;

CREATE TABLE `Customers` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_type` varchar(5) NULL DEFAULT '',
`full_name` varchar(255) NOT NULL DEFAULT '',
`nick_name` varchar(255) NOT NULL,
`birth_place` varchar(128) NULL,
`birth_date` datetime NULL,
`id_type` int NOT NULL,
`id_number` int NOT NULL,
`mothers_name` varchar(128) NOT NULL DEFAULT '',
`education_level` varchar(5) NULL,
`responsible_for` int NOT NULL DEFAULT 0,
`marriage_status` varchar(5) NULL,
`home_address` varchar(255) NOT NULL DEFAULT '',
`home_rtrw` varchar(255) NOT NULL DEFAULT '',
`home_zipcode` varchar(255) NULL,
`additional_address` varchar(255) NULL,
`home_phone` int NULL,
`celluler_phone` int NULL,
`email` varchar(100) NULL,
`gps_latitude` double NOT NULL DEFAULT 0,
`gps_longitude` double NOT NULL,
`surveyor_id` int UNSIGNED NOT NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `CustomersJob` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_id` int UNSIGNED NOT NULL,
`npk` int NULL,
`company_name` varchar(100) NOT NULL DEFAULT '',
`company_address` varchar(255) NOT NULL DEFAULT '',
`company_rtrw` varchar(100) NOT NULL DEFAULT '',
`company_zipcode` varchar(5) NOT NULL DEFAULT '',
`company_phone` int NOT NULL DEFAULT 62,
`company_fax` int NOT NULL DEFAULT 62,
`company_celluler` int NOT NULL DEFAULT 62,
`customer_job` varchar(5) NOT NULL DEFAULT '',
`job_description` varchar(255) NULL,
`line_of_bussines` varchar(5) NULL,
`surveyor_id` int NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `CustomersCompany` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_id` int UNSIGNED NOT NULL,
`company_name` varchar(255) NOT NULL DEFAULT '',
`company_address` varchar(255) NOT NULL DEFAULT '',
`company_rtrw` varchar(255) NOT NULL DEFAULT '',
`company_zipcode` int NULL DEFAULT 0,
`company_phone` int NOT NULL DEFAULT 62,
`company_fax` int NOT NULL DEFAULT 62,
`company_celluler` int NOT NULL DEFAULT 62,
`npwp` int NOT NULL DEFAULT 0,
`npwpd` int NULL,
`total_employee` int NULL DEFAULT 0,
`establisment_date` datetime NOT NULL,
`place_status` varchar(5) NOT NULL,
`net_profit` double NULL DEFAULT 0,
`line_of_bussines` varchar(5) NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `CustomersFinace` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_id` int UNSIGNED NOT NULL,
`monthly_income` double NULL,
`extra_income` double NULL,
`montly_expense` double NULL,
`spouse_income` double NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `Requests` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_id` int UNSIGNED NOT NULL,
`asset_type` varchar(5) NOT NULL DEFAULT '',
`asset_kind` varchar(5) NULL,
`year` int NULL,
`color` varchar(100) NULL,
`condition` varchar(5) NULL,
`bpkb_name` varchar(255) NOT NULL DEFAULT '',
`bpkb_number` int NULL,
`surveyor_id` int UNSIGNED NOT NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `UsersRequest` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`request_id` int UNSIGNED NOT NULL,
`user_name` varchar(255) NOT NULL DEFAULT '',
`user_relationship` varchar(5) NOT NULL DEFAULT '',
`user_address` varchar(255) NOT NULL DEFAULT '',
`user_rtrw` varchar(10) NULL,
`user_zipcode` int NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `Categories` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL DEFAULT '',
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=MyISAM;

CREATE TABLE `Codes` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`category_id` int UNSIGNED NOT NULL,
`description` varchar(255) NOT NULL DEFAULT '',
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=MyISAM;

CREATE TABLE `Surveyors` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`user_code` varchar(100) NOT NULL DEFAULT '',
`password` varchar(8) NOT NULL DEFAULT '',
`full_name` varchar(255) NULL,
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
)
ENGINE=InnoDB;

CREATE TABLE `Photos` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`customer_id` int UNSIGNED NOT NULL,
`type` varchar(5) NOT NULL,
`name` varchar(100) NULL,
`photo_path` varchar(255) NULL DEFAULT '',
`created_date` datetime NULL,
`last_upd_date` datetime NULL,
`deleted` int NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);


ALTER TABLE `CustomersJob` ADD CONSTRAINT `fk_customersjob_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);
ALTER TABLE `CustomersCompany` ADD CONSTRAINT `fk_customerscompany_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);
ALTER TABLE `CustomersFinace` ADD CONSTRAINT `fk_customersfinance_customers_id` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);
ALTER TABLE `Requests` ADD CONSTRAINT `fk_requests_customers_id` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);
ALTER TABLE `UsersRequest` ADD CONSTRAINT `fk_usersrequest_request_id` FOREIGN KEY (`request_id`) REFERENCES `Requests` (`id`);
ALTER TABLE `Codes` ADD CONSTRAINT `fk_codes_categories_id` FOREIGN KEY (`category_id`) REFERENCES `Categories` (`id`);
ALTER TABLE `Customers` ADD CONSTRAINT `fk_customers_surveyors_id` FOREIGN KEY (`surveyor_id`) REFERENCES `Surveyors` (`id`);
ALTER TABLE `Requests` ADD CONSTRAINT `fk_requests_surveyors_id` FOREIGN KEY (`surveyor_id`) REFERENCES `Surveyors` (`id`);
ALTER TABLE `Photos` ADD CONSTRAINT `fk_photos_customers_id` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);

