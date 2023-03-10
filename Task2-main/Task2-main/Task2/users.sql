CREATE TABLE IF NOT EXISTS users
(
	user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    pass CHAR(40) NOT NULL,
    Premium BOOLEAN,
    PRIMARY KEY (user_id),
    UNIQUE (email)
);