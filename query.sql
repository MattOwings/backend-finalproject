DROP DATABASE IF EXISTS instructor;
CREATE DATABASE instructor;
USE instructor;

CREATE TABLE register (
    firstname VARCHAR(30),
    middlename VARCHAR(30),
    lastname VARCHAR(30) NOT NULL,
    gender VARCHAR(12) NOT NULL,
    ID INT(6) NOT NULL AUTO_INCREMENT,
    pass VARCHAR(40) NOT NULL,

    email VARCHAR(40) NOT NULL,

    PRIMARY KEY (ID)

);

CREATE TABLE courses (
    courseID VARCHAR(30) NOT NULL,
    courseName VARCHAR(40) NOT NULL,
    courseTime VARCHAR(30) NOT NULL,
    courseClassroom VARCHAR(30) NOT NULL,
    courseSemester VARCHAR(30) NOT NULL,
    PRIMARY KEY (courseID)
);