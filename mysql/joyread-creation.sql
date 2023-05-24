Drop database if exists joyread;

CREATE DATABASE IF NOT EXISTS joyread;
USE joyread;
DROP TABLE IF EXISTS reviews;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS books;

-- more info table for books
CREATE TABLE books(
 id INT NOT NULL  AUTO_INCREMENT, 
title VARCHAR(55) NOT NULL,
pages INT DEFAULT NULL,
published INT,
image_url varchar(300) DEFAULT NULL,
description varchar(300) NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB;


-- USERS table

CREATE TABLE users(
 id INT NOT NULL  AUTO_INCREMENT,
 first_name varchar(40),
 last_name varchar(40),
email VARCHAR(45),
password VARCHAR(200),
 PRIMARY KEY (id)
) ENGINE=InnoDB;


-- REVIEWS TABLE

CREATE TABLE reviews(
 id INT NOT NULL  AUTO_INCREMENT, 
userId INT NOT NULL,
bookId INT NOT NULL,
pages INT ,
comment varchar(300),
 PRIMARY KEY (id),
 FOREIGN KEY(userId) REFERENCES users(id),
 foreign key(bookId) REFERENCES books(id)
 
) ENGINE=InnoDB;




-- INSERT Books

 INSERT INTO books(Title,Pages,Published,image_URL,Description)
VALUES("Me Before you", 480,"2012",  "https://s1.adlibris.com/images/78628/me-before-you.jpg", "Lou Clark knows lots of things. She knows how many footsteps there are between the bus stop and home. She knows she likes working in The Buttered Bun tea shop and she knows she might not love her boyfriend Patrick. What Lou doesn't know is she's about to lose her job or that knowing what's"),

(
"Rich Dad Poor Dad",
336 , 
"1997",
"https://s1.adlibris.com/images/28226190/rich-dad-poor-dad.jpg",  "Rich Dad Poor Dad is Robert's story of growing up with two dads his real father and the father of his best friend, his rich dad  and the ways in which both men shaped his thoughts about money and investing"

 ),
 (  "Where the Crawdads Sing",500, "2018",  "https://s2.adlibris.com/images/49550148/where-the-crawdads-sing.jpg","Perfect for fans of Barbara Kingsolver and Celeste Ng, Where the Crawdads Sing is at once an exquisite ode to the natural world, a heartbreaking coming-of-age story, and a surprising tale of possible murder"),
 ( "Gone  Girl", 470, "2015","https://s2.adlibris.com/images/574787/gone-girl.jpg","'What are you thinking, Amy? The question I've asked most often during our marriage, if not out loud, if not to the person who could answer"),
 (   "12 Rules for Life", 380, "2018","https://s1.adlibris.com/images/41715874/12-rules-for-life.jpg","Acclaimed psychologist Jordan Peterson has become one of the most influential public thinkers to emerge on the world stage for many years, with his lectures on topics from the Bible to romantic relationships to mythology drawing an unprecedented following of tens of millions of viewers"),
 (  "The Girl on the Train", 490, "2014",  "https://s1.adlibris.com/images/23855003/the-girl-on-the-train-a-novel---reviewed.jpg","Rachel catches the same commuter train every morning. She knows it will wait at the same signal each time, overlooking a row of back gardens. She's even started to feel like she knows the people who live in one of the houses. 'Jess and Jason', she calls them. Their life - as she sees it - is perfect"),
 
 ( "It Starts with Us", 432,"2021", "https://s2.adlibris.com/images/62721802/it-starts-with-us.jpg","Before It Ends with Us, it started with Atlas. Colleen Hoover tells fan favourite Atlas' side of the story and shares what comes next in this long-anticipated sequel to the #1 Sunday Times bestseller It Ends with Us"),
 (  "It Ends With Us ", 500, "2016","https://s2.adlibris.com/images/21518819/it-ends-with-us.jpg", "'A brave and heartbreaking novel that digs its claws into you and doesn't let go, long after you've finished it' Anna Todd, author of the After series");
 


--  INSERT USERS 


 INSERT INTO users (First_name, Last_name, email, password) 

VALUES 

("Nicklas", "Söderlund", "nicklassoderlund96@gmail.com", "pass123"),

("Conny", "Segerström", "hatagais@yahoo.se", "sarrrr321"),

("Remy", "Raggarsträng", "raggarremy@live.se", "pass123"),

("Gordon", "Smith", "gsmith@hotmail.com", "sah123") ,

("Mia", "Bush", "miabush@blogspot.com", " banan1") ,

("Tove", "Lissner", "tove.lissner@medieinstitutet.se", "20321"); 





