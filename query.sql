DROP DATABASE IF EXISTS instructor;
CREATE DATABASE instructor;
USE instructor;

CREATE TABLE instRegister (
    username VARCHAR(16) NOT NULL,
    firstname VARCHAR(16) NOT NULL,
    lastname VARCHAR(16) NOT NULL,
    gender VARCHAR(16) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(35) NOT NULL,
    ID INT(200) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (ID)
);

CREATE TABLE myCourses (
    courseName VARCHAR(50) NOT NULL,
    courseID INT(11) NOT NULL AUTO_INCREMENT,
    courseTime VARCHAR(16) NOT NULL,
    courseRoom VARCHAR(16) NOT NULL,
    courseSemester VARCHAR(16) NOT NULL,
    PRIMARY KEY (courseID)
);

CREATE TABLE students (
    firstname VARCHAR(16) NOT NULL,
    lastname VARCHAR(16) NOT NULL,
    studentID INT(11) NOT NULL AUTO_INCREMENT,
    finalGradeLetter VARCHAR(3) NOT NULL,
    PRIMARY KEY (studentID)
);

INSERT INTO myCourses (courseName, courseTime, courseRoom, courseSemester) VALUES 
('Backend Web Dev', 'MW 9:25am - 10:50pm', 'GW205', "Spring 2022"),
('Data Structures', 'TH 2:10pm - 3:25pm', 'GW303', "Spring 2022"),
('Linux for Cybersecurity', 'F 12:45pm - 2:00pm', 'Library 208', "Summer 2022"),
('Object Oriented Programming', 'MT 8:00am - 9:25pm', 'B532', 'Spring 2022');

INSERT INTO students (firstname, lastname, finalGradeLetter) VALUES 
('Matt', 'Owings', 'A'),
('Dalton', 'Lee', 'B'),
('Logon', "Alan", 'F'),
('Joshua', 'Paul', 'D'),
('Desmond', 'White', 'C');

CREATE USER 'mowings'@'localhost' IDENTIFIED BY 'mowings';
GRANT ALL PRIVILEGES ON instructor.* TO 'mowings'@'localhost';
