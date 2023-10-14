create database training;

create table training.enrolled(
id int not null auto_increment,
fname varchar(55) NOT NULL,
lname varchar(55) NOT NULL,
email varchar(55) NOT NULL,
phone varchar(12) NOT NULL,
coursehours int NOT NULL,
primary key (id)
);

insert into enrolled (fname, lname, email, phone, coursehours) values
    ('john', 'doe', 'john.doe@example.com', '123-456-7890', 20);

insert into enrolled (fname, lname, email, phone, coursehours) values
    ('jane', 'smith', 'jane.smith@example.com', '987-654-3210', 25);

insert into enrolled (fname, lname, email, phone, coursehours) values
    ('michael', 'johnson', 'michael.johnson@example.com', '555-555-5555', 15);
