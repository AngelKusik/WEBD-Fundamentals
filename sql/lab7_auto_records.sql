/*
* owner: angelica Kusik
* Date: march 27, 2022
* Course: WEBD2201
* File: lab7_auto_records.sql 
*/

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a owner
CREATE TABLE automobiles(
	id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT  NULL,
	model VARCHAR(20) NOT  NULL,
	year INTEGER NOT NULL,
	owner VARCHAR(128) NOT NULL,
	msrp NUMERIC(9,2) NOT NULL,
	purchase_date DATE NOT NULL
);
GRANT ALL ON automobiles TO faculty; 

--INSERT the info about your favorite cars into the table 

INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'Porsche',
	'Cayenne-Coupe',
    2022,
	'Diana Prince',
	88900.00,
	'2022-03-27');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'BMW',
	'X6 xDrive40i',
    2022,
	'Natasha Romanoff',
	88355.00,
	'2022-03-26');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'Jeep',
	'Wagoneer',
    2022,
	'Kate Bishop',
	86080.00,
	'2022-03-25');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'Hyundai',
	'Tucson',
    2020,
	'Yelena Belova',
	43750.00,
	'2022-03-24');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'Mini',
	'Cooper',
    2021,
	'Wanda Maximoff',
	40990.00,
	'2022-03-23');

--Queries
SELECT make, model, year, msrp FROM automobiles ORDER BY year ASC;

UPDATE automobiles SET owner = 'Angelica Kusik' WHERE model = 'Cayenne-Coupe';

DELETE FROM automobiles WHERE id = 5;

SELECT * FROM automobiles;