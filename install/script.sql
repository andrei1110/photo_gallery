CREATE TABLE user (
					id int NOT NULL AUTO_INCREMENT,
					name varchar(40) NOT NULL,
					email varchar(65) NOT NULL,
					password varchar(128) NOT NULL,
					avatar varchar(50),
					PRIMARY KEY (id)
);

CREATE TABLE file(
					id int NOT NULL AUTO_INCREMENT,
					name varchar(64) NOT NULL,
					local varchar(100) NOT NULL,
					type varchar(10) NOT NULL,
					user int NOT NULL,
					size float,
					img_h int,
					img_w int,
					date_file timestamp,
					FOREIGN KEY (user) REFERENCES user(id),
					PRIMARY KEY (id)
);

INSERT INTO user (name, email, password) VALUES ('admin', 'admin@admin.com', 'admin01');