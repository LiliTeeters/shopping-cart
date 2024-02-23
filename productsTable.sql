CREATE TABLE books (
	`productID` int(11) NOT NULL AUTO_INCREMENT,
	`productName` varchar(200) NOT NULL,
	`description` text NOT NULL,
	`price` decimal(7, 2) NOT NULL,
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	PRIMARY KEY (id)
);
INSERT INTO books
VALUES (
		1,
		'Psilocybin Mushrooms of the World: An Identification Guide',
		'From the author of GROWING GOURMET AND MEDICINAL MUSHROOMS comes the only identification guide exclusively devoted to the worlds psilocybin-containing mushrooms. Detailed descriptions and color photographs for over 100 species are provided, as well as an exploration of their long-standing (and often religious) use by ancient peoples and their continued significance to modern-day culture. Some of the species included have just been discovered in the past year or two, and still others have never before been photographed in their natural habitats.',
		'16.99',
		10,
		'mushrooms.jpg'
	),
	(
		2,
		'Mycelium Running: How Mushrooms Can Help Save the World',
		'Mycelium Running is a manual for the mycological rescue of the planet. That’s right: growing more mushrooms may be the best thing we can do to save the environment, and in this groundbreaking text from mushroom expert Paul Stamets, you’ll find out how.',
		'26.95',
		10,
		'myceliumRunning.jpg'
	),
	(
		3,
		'Spark: The Revolutionary New Science of Exercise and the Brain',
		'A groundbreaking and fascinating investigation into the transformative effects of exercise on the brain, from the bestselling author and renowned psychiatrist John J. Ratey, MD.',
		'12.99',
		10,
		'spark.jpg'
	),
	(
		4,
		'Pluto -- Never Forget! Beaded Bookmark',
		'Discovered in 1930, Pluto was quickly included in the pantheon of planets that make up our solar system. In August 2006, however, the International Astronomical Union downgraded the status of Pluto to that of a mere dwarf planet -- Asteroid Number 134340. To this day, many of us refuse to forget this unhappy reclassification. Show your respect for the celestial body formerly known as Pluto with this appealing bookmark!
',
		'2.95',
		10,
		'pluto.jpg'
	);