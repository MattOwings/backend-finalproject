DROP DATABASE IF EXISTS instructor;
CREATE DATABASE instructor;
USE instructor;

CREATE TABLE register (
    username VARCHAR(16) NOT NULL,
    pass VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    connectID INT(11) NOT NULL AUTO_INCREMENT,

    PRIMARY KEY (email)

);

CREATE TABLE instructorProfile (
    firstname VARCHAR(30),
    middlename VARCHAR(30),
    lastname VARCHAR(30) NOT NULL,
    birthday VARCHAR(30),
    gender VARCHAR(12) NOT NULL,
    mainID INT(11) NOT NULL AUTO_INCREMENT,
    connectID INT(11) NOT NULL AUTO_INCREMENT,

    PRIMARY KEY (ID),
    FOREIGN KEY (connectID) REFERENCES register(connectID)

);

CREATE TABLE courses (
    courseID VARCHAR(30) NOT NULL,
    courseName VARCHAR(40) NOT NULL,
    courseTime VARCHAR(30) NOT NULL,
    courseClassroom VARCHAR(30) NOT NULL,
    courseSemester VARCHAR(30) NOT NULL,
    PRIMARY KEY (courseID)
);

CREATE TABLE students (
    firstname VARCHAR(16) NOT NULL,
    studentID VARCHAR(11) NOT NULL AUTO_INCREMENT,
    finalGrade VARCHAR(5) NOT NULL,

    PRIMARY KEY (studentID)
);