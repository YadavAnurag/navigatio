DROP DATABASE navigatio;
CREATE DATABASE navigatio;
USE navigatio;

CREATE TABLE countries(
id int unsigned NOT NULL auto_increment,
code varchar(2) NOT NULL,
name varchar(100) NOT NULL,
date_entered DATETIME NOT NULL DEFAULT now(),
PRIMARY KEY (id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;



INSERT INTO countries(id, code, name) VALUES 
	(null, 'IN', 'India'),
	(null, 'AQ', 'China'),
	(null, 'AG', 'Japan');




create table cities(
	id int unsigned not null auto_increment, 
	country_id int unsigned not null,
	name VARCHAR(200) NOT NULL,
	date_entered DATETIME NOT NULL DEFAULT now(),
	PRIMARY KEY(id),
	FOREIGN KEY (country_id) REFERENCES countries(id)
	)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO cities(id, country_id, name) VALUES
	(null, 1, 'lucknow'),
	(null, 1, 'tanda'),
	(null, 1, 'varanasi'),
	(null, 1, 'mumbai'),
	(null, 1, 'delhi'),
	(null, 1, 'bangalore'),
	(null, 1, 'kolkata');


	
CREATE TABLE meals_categories(
	id INT UNSIGNED NOT NULL auto_increment,
	category VARCHAR(100) NOT NULL,
	date_entered DATETIME NOT NULL DEFAULT now(),
	PRIMARY KEY(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO meals_categories(id, category) VALUES
	(null, 'breakfast'),
	(null, 'brunch'),
	(null, 'elevenses'),
	(null, 'lunch'),
	(null, 'tea'),
	(null, 'supper'),
	(null, 'dinner');


CREATE TABLE meals(
		id INT UNSIGNED NOT NULL auto_increment,
		city_id INT UNSIGNED NOT NULL,
		category_id INT UNSIGNED NOT NULL,
		name VARCHAR(100) NOT NULL,
		description VARCHAR(500) NOT NULL,
		price DECIMAL(5,2) NOT NULL,
		date_entered DATETIME NOT NULL DEFAULT now(),
		PRIMARY KEY(id),
		FOREIGN KEY(city_id) REFERENCES cities(id),
		FOREIGN KEY(category_id) REFERENCES meals_categories(id)
	);

INSERT INTO meals(id, city_id, category_id, name, description, price) VALUES
	(null, 1, 4, 'Galawati Kebab', 'Galawati Kebab or Galauti Kebab is a special delicacy which was once made exclusively for a Nawab in Lucknow. Galawati means melt in your mouth, and the dish does exactly that. Once finely ground meat and unripe papaya is marinated, a mixture of spices is added to the dish. This one must be high on your must try list when in Lucknow!', 550),
	(null, 1, 4, 'Boti Kabab', 'Tender pieces of meat heated under intense heat, Boti Kabab is one finger-licking starter you should definitely not miss! A popular Mughlai recipe, this is one the many famous kababs that Lucknow has to offer.', 200),
	(null, 1, 7, 'Tunday Kebab', " Over a 100 masalas go into the making of this royal kebab and they ensure that you don't feel uneasy after having them. They literally melt in your mouth like ice cream and are best served with rumali roti. ", 150),
	(null, 1, 7, 'Rogan Josh', "Rogan Josh - even the words make you go weak in the knees! Soft meat in spicy curry, this delicacy warms you up from the inside. Even though you might get it in Delhi or Mumbai, you haven't really tasted it if you haven't tried it in the City of Nawabs!", 400)
	;



CREATE TABLE meals_orders(
	id INT UNSIGNED NOT NULL auto_increment,
	country_id INT UNSIGNED NOT NULL,
	city_id INT UNSIGNED NOT NULL,
	meals_categories_id INT UNSIGNED NOT NULL,
	order_datetime DATETIME NOT NULL DEFAULT now(),
	adult INT UNSIGNED NOT NULL,
	date_entered DATETIME NOT NULL DEFAULT now(),
	PRIMARY KEY(id),
	FOREIGN KEY(country_id) REFERENCES countries(id),
	FOREIGN KEY(meals_categories_id) REFERENCES meals_categories(id),
	FOREIGN KEY(city_id) REFERENCES cities(id)
);


INSERT INTO meals_orders(id, country_id, city_id,  meals_categories_id, order_datetime,adult)VALUES
	(null, 1, 1, 1, '2018-09-03', 2)
	;

	