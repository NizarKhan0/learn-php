-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.3.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table job_listings.job_listings: ~0 rows (approximately)
INSERT INTO `job_listings` (`id`, `user_id`, `title`, `description`, `salary`, `tags`, `company`, `address`, `city`, `state`, `phone`, `email`, `requirements`, `benefits`, `created_at`) VALUES
	(1, 1, 'Software Engineer', 'We are seeking a skilled software engineer to develop high-quality software solutions', 90000.00, 'development, coding, java, python', 'Tech Solutions Inc.', '123 Main St', 'Albany', 'NY', '348-334-3949', 'info@techsolutions.com', 'Bachelors degree in Computer Science or related field, 3+ years of software development experience', 'Healthcare, 401(k) matching, flexible work hours', '2025-02-10 10:07:43'),
	(2, 2, 'Marketing Specialist', 'We are looking for a Marketing Specialist to create and manage marketing campaigns', 70000.00, 'marketing, advertising', 'Marketing Pros', '456 Market St', 'San Francisco', 'CA', '454-344-3344', 'info@marketingpros.com', 'Bachelors degree in Marketing or related field, experience in digital marketing', 'Health and dental insurance, paid time off, remote work options', '2025-02-10 10:07:43'),
	(3, 3, 'Web Developer', 'Join our team as a Web Developer and create amazing web applications', 85000.00, 'web development, programming', 'WebTech Solutions', '789 Web Ave', 'Chicago', 'IL', '456-876-5432', 'info@webtechsolutions.com', 'Bachelors degree in Computer Science or related field, proficiency in HTML, CSS, JavaScript', 'Competitive salary, professional development opportunities, friendly work environment', '2025-02-10 10:07:43'),
	(4, 1, 'Data Analyst', 'We are hiring a Data Analyst to analyze and interpret data for insights', 75000.00, 'data analysis, statistics', 'Data Insights LLC', '101 Data St', 'Chicago', 'IL', '444-555-5555', 'info@datainsights.com', 'Bachelors degree in Data Science or related field, strong analytical skills', 'Health benefits, remote work options, casual dress code', '2025-02-10 10:07:43'),
	(5, 2, 'Graphic Designer', 'Join our creative team as a Graphic Designer and bring ideas to life', 70000.00, 'graphic design, creative', 'CreativeWorks Inc.', '234 Design Blvd', 'Albany', 'NY', '499-321-9876', 'info@creativeworks.com', 'Bachelors degree in Graphic Design or related field, proficiency in Adobe Creative Suite', 'Flexible work hours, creative work environment, opportunities for growth', '2025-02-10 10:07:43'),
	(6, 1, 'Data Scientist', 'We\'re looking for a Data Scientist to analyze complex data and generate insights', 100000.00, 'data science, machine learning', 'DataGenius Corp', '567 Data Drive', 'Boston', 'MA', '684-789-1234', 'info@datagenius.com', 'Masters or Ph.D. in Data Science or related field, experience with machine learning algorithms', 'Competitive salary, remote work options, professional development', '2025-02-10 10:07:43');

-- Dumping data for table job_listings.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `state`, `city`, `created_at`) VALUES
	(1, 'Admin', 'admin@demo.com', '$2y$12$RN92ueU6ayfLJ/flARzfp.xJBX04UEiKWuB1SIOfVsJxunlB5x/Ra', 'Johor', 'Pontian', '2025-02-10 05:43:58');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
