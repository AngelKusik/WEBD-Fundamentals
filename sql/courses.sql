/*
*  Name: Angelica Kusik
*  Date: April 19, 2022
*  Course: WEBD2201
*  Description: courses.sql 
*/

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS courses; 

-- CREATE the table, note that id has to the primary key and both id and password must be unique.
CREATE TABLE courses(        
	code VARCHAR(8) PRIMARY KEY,
	title VARCHAR(64) NOT NULL,
	weighting NUMERIC(3,2)    
);

--this will change the owner to your userid on your local/laptop database (over riding the default owner of postgres)
ALTER TABLE courses OWNER TO kusika;   

--required when running the script on opentech to allow faculty members to access your databsae table
GRANT ALL ON courses TO faculty;   

--populate the table with some fake users
INSERT INTO courses(code, title, weighting) VALUES(
	'COMM1801',
	'Communication Foundations',
	'3.00');
INSERT INTO courses(code, title, weighting) VALUES(
	'CSYS1122',
	'Computer Systems - Hardware',
	'4.00');
INSERT INTO courses(code, title, weighting) VALUES(
	'PROG1205',
	'Introduction to Programming',
	'4.00');
INSERT INTO courses(code, title, weighting) VALUES(
	'DCOM1100',
	'Data Communications & Networking I',
	'4.00');
INSERT INTO courses(code, title, weighting) VALUES(
	'DBAS1201',
	'Introduction to Databases',
	'4.00');
INSERT INTO courses(code, title, weighting) VALUES(
	'MATH1110',
	'Mathematics for IT',
	'3.00');

	
SELECT * FROM courses; 