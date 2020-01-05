-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Sample
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

drop database if exists Kazakhstan;

create database Kazakhstan;

use  Kazakhstan;
--
-- Table structure for table `Ethnic_groups`
--

DROP TABLE IF EXISTS `Ethnic_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ethnic_groups` (
  `nationality` varchar(64) DEFAULT NULL,
  `percent` varchar(32) DEFAULT NULL,
  `param1` varchar(128) DEFAULT NULL,
  `param2` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ethnic_groups`
--

LOCK TABLES `Ethnic_groups` WRITE;
/*!40000 ALTER TABLE `Ethnic_groups` DISABLE KEYS */;
INSERT INTO `Ethnic_groups` VALUES ('Kazakhsf','63',NULL,NULL),('Russian','23',NULL,NULL),('Uzbek','2.9',NULL,NULL),('Ukrainian','2',NULL,NULL),('Uyghur','1.4',NULL,NULL),('Tatar','1.2',NULL,NULL),('German','1.1',NULL,NULL),('others','4.5',NULL,NULL);
/*!40000 ALTER TABLE `Ethnic_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facts` (
  `title` varchar(64) DEFAULT NULL,
  `brief` varchar(256) DEFAULT NULL,
  `img` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facts`
--

LOCK TABLES `facts` WRITE;
/*!40000 ALTER TABLE `facts` DISABLE KEYS */;
INSERT INTO `facts` VALUES ('Territorial ranking','Kazahstan is the 9th largest country by size in the world. It’s a huge place with a very small population of only 16 million people.','images/HomeBrief/Provinces_du_Kazakhstan.png'),('Position on the map','It’s the largest landlocked country in the world, with Russian to its North, China to the West, Uzbekistan down South and the Caspian Sea on its Western Border.','images/Landscape/Kazakhstan_(orthographic_projection).svg.png'),('Capital','The capital of Kazakhstan is Astana, in the central Northern region of the country. It’s a relatively new city with a fancy, over-the-top skyline!','images/InterestingFacts/capital.jpg'),('Independence','Kazakhstan was part of the former USSR and has been independent since 1991. It is an authoritarian regime with the same man at the helm since that time. Opposition parties are squashed and freedom of the press is a foreign concept.','images/InterestingFacts/Independent_set_graph.svg.png'),('ethnicity','The country is a melting pot, in part because Stalin deported many different ethnicities here during his rule. There are more than 131 different ethnic groups living in Kazakhstan. Kazakhs are about 65% of the population, up from 40% in 1991.','images/InterestingFacts/ethnicity.gif'),('Situation after becoming independent','Russians have declined in numbers drastically since independence. Those that we spoke with said they feel less welcome and that it’s harder to get a job now (Kazakh language is a requirement for all government jobs and many others as well; it’s generally n','images/InterestingFacts/Independent_set_graph.svg.png'),('Soviet Union Monuments','The Soviet Union suffered greatly in WWII, with losses nearing 30 millions (soldiers and civilians), the most of any country. There are monuments everywhere in memory of the lost ones.','images/InterestingFacts/2164658-soviet_union.png'),('Baikonur Cosmodrome','Kazakhstan is home to the Baikonur Cosmodome, the world’s first and largest space launch facility. It is leased by the Russians until 2050.','images/InterestingFacts/Baikonur_Cosmodrome.png'),('Primary city','The primary city is not Astana but Almaty, in the SE. It’s a scenic city of 1.5 million people with snow-capped mountains on the horizon, beautiful buildings and modern conveniences.','images/InterestingFacts/Home_News1.png'),('Subway','Almaty has a brand-new Metro System that opened in 2011. There are currently seven stations and they are all individually decorated and designed. Very fancy for a subway! It was about 50 cents per ride for adults (all destinations are the same price).','images/InterestingFacts/subway.jpg'),('Fashion','The women of Kazakhstan are often dress very stylishly and in high heels.','images/InterestingFacts/chandelier_s_go_fashion_by_khiilver147-d614ktq.png'),('English language','Virtually nothing is written in English and very few people speak the language. If you don’t speak Russian, at least come with a phrasebook to help you get around.','images/InterestingFacts/language.jpeg'),('Pipes industry','Often times pipes for water and gas are above ground! This makes it easier to repair them if needed.','images/InterestingFacts/Pipes industry.jpg'),('Apples','Apples are reputedly to originate from Kazakhstan and there are still wild apple forests in the country','images/InterestingFacts/apples.jpg'),('Corruption','Corruption is an unfortunate way of life here and all the drivers who helped us out complained about the police. By the way it’s better to pay them off than get ticketed.','images/InterestingFacts/against-corruption-1-hi.png'),('Pickled vegetables','About 0.5% of the population are of Korean descent. Many women of all ethnicities set up market stands selling Korean salads and pickled vegetables. We loved making a lunch from these delicious offerings and the spicy carrots were amazing!','images/InterestingFacts/pickles.jpg'),('Landscape','Most of the country is extremely flat and barren. This is the famous “steppe” (semi-arid and generally without trees, this area is extremely hot in summer and very cold in winter).','images/InterestingFacts/landscape.jpg'),('Religion','The country is nominally Muslim, but there are few outward signs of this. Mosques are not frequently seen or heard. The many years of Soviet rule, when religion was downplayed, have diluted its importance in the country as a whole.','images/InterestingFacts/religion.jpg'),('Tourism','The tourist industry is very much in its infancy in Kazakhstan. There are few to no knick-knacks to buy, no Kazakhstan t-shirts and, sadly, not a postcard to be seen! We had a very authentic, unusual experience! (Did you read that we had an entire canyon t','images/InterestingFacts/tourism.jpeg');
/*!40000 ALTER TABLE `facts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `feedback` varchar(512) DEFAULT NULL,
  `insertDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('Anatoliy','khcx3wnm@nottingham.edu.my','This is my website about my local country Kazakhstan.\r\nPlease feel free to leave any comments here.\r\nThank you!','2014-04-17 09:35:24');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_title` varchar(32) NOT NULL,
  `description` varchar(512) NOT NULL,
  `img` varchar(128) NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` VALUES (0,'Beşbarmaq','Beşbarmaq, Beshbarmak (Kyrgyz: бешбармак, Kazakh: беcбармак, Bashkir: бишбармаҡ, bişbarmag, Tatar: бишбармак — five finger) is the national dish of some Turkic peoples.\n\nThe term Beshbarmak means \"five fingers\", because the dish is eaten with one\'s hands. The boiled meat is usually diced with knives, often mixed with boiled noodles, and spiced with onion sauce. It is usually served in a big round dish. Treating to beshbarmak is accompanied with an original ritual. The meat itself is served in large pieces. ','images/Food/Beshbarmak/beshbarmak-716x260.png'),(1,'Pilaf','Pilaf (also known as pilav, pilau, plov, pulao, polu and palaw) is a dish in which rice is cooked in a seasoned broth.[1] In some cases, the rice may also attain its brown color by being stirred with bits of cooked onion, as well as a large mix of spices. Depending on the local cuisine, it may also contain meat, fish, vegetables, and (dried) fruits.\n\nPilaf and similar dishes are common to Balkan, Middle Eastern, Caucasian, Central and South Asian, East African, Latin American, and Caribbean cuisines. It is ','images/Food/Pilaf/Azerbaijani_plov.JPG'),(2,'Kazy','Kazy or kazi (Kazakh: қазы, [qɑzə́]; Kyrgyz: казы, [qɑzɯ]; Tatar qazılıq, Bashkir Ҡаҙылыҡ. ķaźılıķ) is a traditional sausage-like food of Kazakhs, Tatars, Kyrgyz, and other ethnic groups mainly of Central Asia, particularly those of Turkic origin. Kazy is a common element on a dastarkhan, a table set for a festive meal.','images/Food/Kazy/Horsemeat_platter.jpg'),(3,'Manti (dumpling)','Manti or Mantu (Turkish: mantı; Uzbek: manti; Kazakh: мәнті; Kyrgyz: манту; Pashto, Persian, Arabic: منتو‎; Armenian: մանթի; Azerbaijani: xingəl) are dumplings popular in most Turkic cuisines, as well as in Caucasian, Central Asian, and Chinese Islamic cuisines. It is closely resembling the East Asian mandu, baozi (or buuz), and to the Nepali momo. Manti are also popular throughout the Commonwealth of Independent States, where the dish spread from the Central Asian republics. Manti dumplings typically consi','images/Food/Manty/kirgistan_manty.jpg');
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_detail`
--

DROP TABLE IF EXISTS `food_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_detail` (
  `food_detail_id` int(11) NOT NULL,
  `food_detail_img` varchar(128) NOT NULL,
  `food_id` int(11) NOT NULL,
  PRIMARY KEY (`food_detail_id`,`food_id`),
  KEY `food_id` (`food_id`) USING HASH,
  CONSTRAINT `food_id` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_detail`
--

LOCK TABLES `food_detail` WRITE;
/*!40000 ALTER TABLE `food_detail` DISABLE KEYS */;
INSERT INTO `food_detail` VALUES (0,'images/Food/Beshbarmak/1283492875_beshbarmak.jpg',0),(1,'images/Food/Beshbarmak/beshbarmak.jpeg',0),(2,'images/Food/Beshbarmak/c6116fbbb028.jpg',0),(3,'images/Food/Beshbarmak/Hauptgericht_BESHBARMAK_LightboxImage.jpg',0),(4,'images/Food/Pilaf/Meat-Pilaf-3.jpg',1),(5,'images/Food/Pilaf/Pilaf_with_chicken.jpg',1),(6,'images/Food/Pilaf/images.jpeg',1),(7,'images/Food/Pilaf/Meat-Pilaf-4.jpg',1),(8,'images/Food/Pilaf/Afghan_Palo.jpg',1),(9,'images/Food/Kazy/kazy-uzbekskie1.jpg',2),(10,'images/Food/Kazy/kazy337.jpg',2),(11,'images/Food/Kazy/stock-photo-kazy-horse-meat-is-a-traditional-food-in-central-asia-110184077.jpg',2),(12,'images/Food/Kazy/x_d7dd28e1.jpg',2),(13,'images/Food/Manty/manty-4.jpg',3),(14,'images/Food/Manty/manty-8313483.jpg',3),(15,'images/Food/Manty/uzbek-manty-at-the-PASHA.jpg',3),(16,'images/Food/Manty/manty.jpg',3);
/*!40000 ALTER TABLE `food_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgs`
--

DROP TABLE IF EXISTS `imgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imgs` (
  `path` varchar(128) DEFAULT NULL,
  `imgDesc` varchar(512) DEFAULT NULL,
  `param1` varchar(128) DEFAULT NULL,
  `param2` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgs`
--

LOCK TABLES `imgs` WRITE;
/*!40000 ALTER TABLE `imgs` DISABLE KEYS */;
INSERT INTO `imgs` VALUES ('./images/Food/Kazakh_beshbarmak.jpg','The term Beshbarmak means \"five fingers\", because the dish is eaten with one\'s hands. The boiled meat is usually diced with knives, often mixed with boiled noodles, and spiced with onion sauce. It is usually served in a big round dish. Treating to beshbarmak is accompanied with an original ritual. The meat itself is served in large pieces. Beshbarmak is usually served with shorpo – mutton broth in bowls called kese. \'Amen\' is always said at the end of the meal to give thanks to God.',NULL,NULL),('./images/HomeBrief/Pilaf.jpg','Pilaf is a dish in which rice is cooked in a seasoned broth. In some cases, the rice may also attain its brown color by being stirred with bits of cooked onion, as well as a large mix of spices','food.php',NULL),('./images/HomeBrief/Kaindy-lake-Kazakhstan-2048x2560.jpg','Lake Kaindy (Kazakh: Қайыңды көлі, Qayıñdı köli) is a 400-meter-long (1,300 ft) lake in Kazakhstan that reaches depths near 30 meters (98 ft) in some areas. It is located 129 kilometers (80 mi) east-southeast of the city of Almaty and is 2,000 meters (6,600 ft) above sea level.','landscape.php',NULL),('./images/HomeBrief/Provinces_du_Kazakhstan.png','As it extends across both sides of the Ural River, Kazakhstan one of only two landlocked countries in the world that lies on two continents.','facts.php',NULL);
/*!40000 ALTER TABLE `imgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature`
--

DROP TABLE IF EXISTS `nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nature` (
  `nature_id` int(11) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `description` varchar(512) DEFAULT NULL,
  `mainImgPath` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature`
--

LOCK TABLES `nature` WRITE;
/*!40000 ALTER TABLE `nature` DISABLE KEYS */;
INSERT INTO `nature` VALUES (0,'Lake Kaindy','Lake Kaindy (Kazakh: Қайыңды көлі, Qayıñdı köli) is a 400-meter-long (1,300 ft) lake in Kazakhstan that reaches depths near 30 meters (98 ft) in some areas. It is located 129 kilometers (80 mi) east-southeast of the city of Almaty and is 2,000 meters (6,600 ft) above sea level.\nThe lake was created as the result of an enormous limestone landslide, triggered by the 1911 Kebin earthquake.[1] The track to Lake Kaindy has many scenic views to the Saty Gorge, the Chilik Valley, and the Kaindy Gorge. Dried-out tr','images/Landscape/Kaindy-lake/Kaindy-lake-Kazakhstan-2048x2560.jpg'),(1,'Lake Alakol','Alakol Lake (Kazakh: Алакөл, Turkic \"motley lake\") is a lake located in the Almaty and Shyghyz provinces, east central Kazakhstan. Its elevation is 347 m (1,138 ft) above sea level.\n\nThe lake is the northwest extension of the region known as the Dzhungarian Gate (Alataw Pass), a narrow valley connects the southern uplands of Kazakhstan with arid northwest China. The Dzhungarian Gate is a fault-bounded valley (see vertical line on the image along the southwest side of the lake) where the elevation of the val','images/Landscape/Alakol/Lake_Alakol.jpg'),(2,'Turgen','Turgen ( Kazakh Түрген) is a municipality in Kazakhstan and belongs to the district JessiK (Russian Иссик).','images/Landscape/Turgen/big_d5e39f51672e533237c.jpg'),(3,'Kapchagay','Kapchagay (Kazakh: Қапшағай, Russian: Капчага́й) is a city in Almaty Province of Kazakhstan.[1] It is located on the Ili River, and has been built along with the construction of Kapchagay Dam on that river in the 1960s. The dam has formed Kapchagay Reservoir (a.k.a. Lake Kapchagay), a popular weekend destination for beach-goers from Almaty. Population: 39,855 (2009 Census results);[2] 33,428 (1999 Census results)','images/Landscape/Kapchagay/Kapchigai_lake.jpg');
/*!40000 ALTER TABLE `nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature_detail`
--

DROP TABLE IF EXISTS `nature_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nature_detail` (
  `nature_id` int(11) DEFAULT NULL,
  `imgPath` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature_detail`
--

LOCK TABLES `nature_detail` WRITE;
/*!40000 ALTER TABLE `nature_detail` DISABLE KEYS */;
INSERT INTO `nature_detail` VALUES (0,'images/Landscape/Kaindy-lake/foto-5.jpg'),(0,'images/Landscape/Kaindy-lake/kaindy-lake-kazakhstan-almaty-5.jpg'),(0,'images/Landscape/Kaindy-lake/lake-kaindy-11[5].jpg'),(0,'images/Landscape/Kaindy-lake/lake-kaindy-13[3].jpg'),(0,'images/Landscape/Kaindy-lake/lake-kaindy-14[2].jpg'),(1,'images/Landscape/Alakol/STS039-085-00E_Lake_Balkhash,_Kazakhstan_April_1991.jpg'),(1,'images/Landscape/Alakol/444966ab201e253d067be1682724051f.jpg'),(1,'images/Landscape/Alakol/57_big.jpg'),(1,'images/Landscape/Alakol/Ala-Kol.jpg'),(1,'images/Landscape/Alakol/AlaKol.jpg'),(2,'images/Landscape/Turgen/IMG_1684.jpg'),(2,'images/Landscape/Turgen/as45 copy_filtered.jpg'),(2,'images/Landscape/Turgen/kazahstan_003.jpg'),(2,'images/Landscape/Turgen/big_8b9b6d51672e6c0a0aa.jpg'),(2,'images/Landscape/Turgen/82676885_large_3925073_08.jpg'),(3,'images/Landscape/Kapchagay/pic_main.jpg'),(3,'images/Landscape/Kapchagay/photo_21970.jpg'),(3,'images/Landscape/Kapchagay/kp2.jpg'),(3,'images/Landscape/Kapchagay/12684922.jpg'),(3,'images/Landscape/Kapchagay/30486332.jpg');
/*!40000 ALTER TABLE `nature_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-17  9:52:30
