CREATE TABLE IF NOT EXISTS users
(
	user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL,
    pass CHAR(40) NOT NULL,
    Premium VARCHAR(40) NOT NULL,
    PRIMARY KEY (user_id),
    UNIQUE (email)
);