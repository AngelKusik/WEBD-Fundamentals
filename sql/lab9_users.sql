/*
*  Name: Angelica Kusik
*  Date: April 6, 2022
*  Course: WEBD2201
*  Description: lab9_users.sql
*/

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS users;

-- CREATE the table, note that id has to the primary key and both id and password must be unique.
CREATE TABLE users(
	id VARCHAR(20) PRIMARY KEY,
	password VARCHAR(15) NOT NULL,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email_address VARCHAR(255) NOT NULL,
	enrol_date DATE NOT NULL,
	last_access DATE NOT NULL DEFAULT CURRENT_DATE
);

--this will change the owner to your userid on your local/laptop database (over riding the default owner of postgres)
ALTER TABLE users OWNER TO kusika;

--required when running the script on opentech to allow faculty members to access your databsae table
GRANT ALL ON users TO faculty;  

--populate the table with some fake users
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jdoe',
	'testpass',
	'John',
	'Doe',
	'jdoe@durhamcollege.ca',
	'2022-1-1',
	'2022-2-1');
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'akusik',
	'testpass2',
	'Angelica',
	'Kusik',
	'akusik@durhamcollege.ca',
	'2021-1-1',
	'2021-2-1');
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'wmaximoff',
	'testpass3',
	'Wanda',
	'Maximoff',
	'wm@yahoo.com',
	'2020-3-1',
	'2020-5-10');
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'drstrange',
	'crazypassword',
	'Stephen',
	'Strange',
	'ss@outlook.com',
	'1990-1-1',
	'2022-4-6');
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jfoster',
	'testpass4',
	'Jane',
	'Foster',
	'jf@yahoo.com',
	'2019-3-1',
	'2022-2-3');
	
SELECT * FROM users;