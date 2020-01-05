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
INSERT INTO `Ethnic_groups` VALUES ('Kazakh','63',NULL,NULL),('Russian','23',NULL,NULL),('Uzbek','2.9',NULL,NULL),('Ukrainian','2',NULL,NULL),('Uyghur','1.4',NULL,NULL),('Tatar','1.2',NULL,NULL),('German','1.1',NULL,NULL),('others','4.5',NULL,NULL);
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
INSERT INTO `feedback` VALUES ('asdasd','asdasd','asdasdasd','2014-04-12 06:52:37'),('asdasd','asdasd','asdasdasd','2014-04-12 06:52:37');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-12  9:39:07
