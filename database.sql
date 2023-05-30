
-- Creating Register Table

CREATE TABLE register_table(ID int(150) PRIMARY KEY, 
 email varchar(255),
 password varchar(255),
 cpassword varchar(255));




-- Creating Information Table 

CREATE TABLE info_tablee(ID int(150) PRIMARY KEY, 
 full_name varchar(255),
 class varchar(50), 
 section char(1), 
 father_name varchar(255), 
 father_occupation varchar(255), 
 mother_name varchar(255),
 mother_occupation varchar(255), 
 present_address varchar(255), 
 permanent_address varchar(255), 
 religion varchar(100), 
 phone_no varchar(100), 
 date_of_birth date, 
 FOREIGN KEY(ID) REFERENCES register_table(ID));




-- Creating Contact Table

CREATE TABLE contact_tablee(ID int(150) PRIMARY KEY, 
 name varchar(150),
 email varchar(150),
 subject varchar(150)
 message varchar(255),
 FOREIGN KEY(ID) REFERENCES register_table(ID));