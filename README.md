# Student-Management-System-using-PHP
Simple PHP Project

This is a Simple Project using PHP and MySql.
I have used Xampp Server, Sublime Text Editor, and phpmyadmin.

Tables:
Login Table : CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ;
Student: CREATE TABLE `students` (`s_no` int(11) NOT NULL, `roll_no` int(11) NOT NULL, `name` varchar(100) NOT NULL,
`father_name` varchar(100) NOT NULL, `class` int(11) NOT NULL, `mobile` varchar(25) NOT NULL, `email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL, `remark` varchar(250) NOT NULL
) ;
