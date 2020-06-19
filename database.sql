CREATE TABLE tb_author(
		author_id INT(11) NOT NULL AUTO_INCREMENT,
		author_name VARCHAR(100) NOT NULL,
		author_password VARCHAR(100) NOT NULL,
		author_email VARCHAR(100) NOT NULL,
		PRIMARY KEY(author_id)
);

CREATE TABLE tb_category(
		cat_id INT(11) NOT NULL AUTO_INCREMENT,
		cat_name VARCHAR(100) NOT NULL,
		cat_text VARCHAR(100) NOT NULL,
		PRIMARY KEY(cat_id)
);

CREATE TABLE tb_post(
		post_id INT(11) NOT NULL AUTO_INCREMENT,
		post_date DATE NOT NULL,
		post_slug VARCHAR(25) NOT NULL,
		post_title VARCHAR(100) NOT NULL,
		post_text TEXT NOT NULL,
		cat_id INT(11) NOT NULL,
		PRIMARY KEY(post_id),
		FOREIGN KEY(cat_id) REFERENCES tb_category(cat_id)
);

CREATE TABLE tb_photos(
		photo_id INT(11) NOT NULL AUTO_INCREMENT,
		photo_date DATE NOT NULL,
		photo_title VARCHAR(100) NOT NULL,
		photo_text TEXT NOT NULL,
		post_id INT(11) NOT NULL,
		PRIMARY KEY(photo_id),
		FOREIGN KEY(post_id) REFERENCES tb_post(post_id)
);

CREATE TABLE tb_album(
		album_id INT(11) NOT NULL AUTO_INCREMENT,
		album_nama VARCHAR(100) NOT NULL,
		album_text VARCHAR(100) NOT NULL,
		photo_id INT(11) NOT NULL,
		PRIMARY KEY(album_id),
		FOREIGN KEY(photo_id) REFERENCES tb_photos(photo_id)
);
