-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 11:25 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complainbooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `service`, `coupons`, `shipping`, `blog`, `setting`, `complainbooking`, `review`, `bookings`, `stock`, `reports`, `alluser`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@gmail.com', '2021-10-30 18:32:44', '$2y$10$eOPLe22Barv7aevmNxGoE.FjWv52Yh7NuvDPrSlcSgABUSbUQWfLy', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, 'QlsbUWV2awo6WJ5Qzp8mj7WHM6tMX8dKFBET7qLqS2V0hQqGxYHsrQ96c5AF', NULL, 'upload/admin_images/1715324604446033.JPG', '2021-10-30 18:32:44', '2021-11-02 07:57:06'),
(17, 'Tahmid Hasan', 'tahmid@gmail.com', NULL, '$2y$10$GmJdzVbZC4mGeNN4vqcdaOrh5AiuA9HsRMhlLowpsY9KF30CM.Hti', '01681827733', NULL, '1', '1', NULL, '1', '1', NULL, '1', NULL, '1', NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1715276617095420.JPG', '2021-11-01 19:07:35', '2021-11-01 19:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title_en`, `post_title_bn`, `post_slug_en`, `post_slug_bn`, `post_image`, `post_details_en`, `post_details_bn`, `created_at`, `updated_at`) VALUES
(3, 5, 'Info Marketing vs. Entertainment Marketing – Which One Wins?', 'তথ্য বিপণন বনাম বিনোদন বিপণন - কোনটি জিতেছে?', 'info-marketing-vs.-entertainment-marketing-–-which-one-wins?', 'তথ্য-বিপণন-বনাম-বিনোদন-বিপণন---কোনটি-জিতেছে?', 'upload/post/1701933352345844.jpg', '<p>Post Details English</p>', '<p>Post Details Bangla</p>', '2021-06-07 12:22:06', NULL),
(4, 4, 'Info Marketing vs. Entertainment Marketing – Which One Wins?', 'তথ্য বিপণন বনাম বিনোদন বিপণন - কোনটি জিতেছে?', 'info-marketing-vs.-entertainment-marketing-–-which-one-wins?', 'তথ্য-বিপণন-বনাম-বিনোদন-বিপণন---কোনটি-জিতেছে?', 'upload/post/1701950290888177.png', '<h1><span style=\"font-size:14px\">TOP 80 BLOGS FOR CLEANING INSPIRATION</span></h1>\r\n\r\n<p>If you&rsquo;re looking for some great blogs for cleaning inspiration, you&rsquo;ve come to the right place!</p>\r\n\r\n<p>We at Microfiber Wholesale love cleaning &ndash; if it isn&rsquo;t obvious enough. Lucky for us, there are hundreds of blogs about cleaning and organizing on the web. Here, we&rsquo;ve rounded up the blogs that we read and get inspiration from.</p>\r\n\r\n<p>This list covers the best of the best when it comes to cleaning hacks, orderliness tricks, tips on where to start de-cluttering. We&rsquo;ve also included blogs showcasing beautiful designs of clean homes.</p>\r\n\r\n<p>Whether you&rsquo;re a cleaning buff looking to add more cleaning resources to your list or a busy mom who needs the extra push to keep the home organized, these blogs do an excellent job of turning cleaning into a faster and, if you&rsquo;re anything like us, a more fun experience.</p>\r\n\r\n<h2>CLEANING &amp; ORGANIZING BLOGS</h2>\r\n\r\n<h2><a href=\"http://organizingmadefun.blogspot.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Organizing Made Fun \">ORGANIZING MADE FUN</a></h2>\r\n\r\n<p>In Organizing Made Fun, Founder Becky shares insights on how to make cleaning and home keeping a better experience. She also touches on her passion for DIY, decorating, and natural living. She believes that if you came here looking for inspiration, you are bound to get some. If motivation is what you are looking for, she guarantees that she&rsquo;s your girl.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/ab1e98df-9310-4d04-a7b9-2440ea5353b3/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.cleanandscentsible.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Clean and Scentsible \">CLEAN AND SCENTSIBLE</a></h2>\r\n\r\n<p>Jenn is a wife of 10 years and proud mom to two beautiful boys living in British Columbia. Working part time as a pediatric physiotherapist and full time as a mom and homemaker, she is also the creator of Clean and Scentsible. Initially, she used the blog to showcase some of her favorite Norwex and Scentsy products, but she quickly became obsessed with all the creative inspiration out there in the blog world and decided to spend more time on the crafty end of things, sharing insights through this blog.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/74fdde6a-01b4-45ae-bc5f-b28f4f94bda3/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.iheartorganizing.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"IHeart Organizing \">IHEART ORGANIZING</a></h2>\r\n\r\n<p>Jen can find no other way of better enjoying her passion for organizing than through this blog. She loves trying out new systems and sharing her successes along with lessons learned along the way. With a few DIY projects thrown in the site, Jen hopes that there will be something for everyone to pop by and see.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/cb01435b-ebfb-403e-bc49-d41c66f0885a/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"https://www.cleanmama.net/blog\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Clean Mama \">CLEAN MAMA</a></h2>\r\n\r\n<p>Clean Mama was found by Becky, a cleaning and home keeping expert, business owner and author of the books Simply Clean, Touchstone (Simon &amp; Schuster), March 2017, and (The Organically Clean Home, Adams Media, 2014). She is also a wife and mom to three, a business owner, and a former art teacher. She writes to help her readers discover new ways to do the mundane tasks of home keeping and to bring a little more fun in the cleaning process.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/453dd012-0d13-41aa-9798-73ef4377a413/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.abowlfulloflemons.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"A Bowl Full of Lemons \">A BOWL FULL OF LEMONS</a></h2>\r\n\r\n<p>A Bowl Full of Lemons is a growing community of people with a shared goal to get their lives in order. They offer tips and advice on topics such as organization, budgeting, and cleaning. The site also has a shop that showcases the best products you can use for the job when doing so.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/44c7e915-2b51-42b8-bf3b-0de2bdc0d68b/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://askannamoseley.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Ask Anna \">ASK ANNA</a></h2>\r\n\r\n<p>Founder of Ask Anna, Anna Moseley, has always loved to help people and aid her family and friends clean, organize and decorate their homes &ndash; so she put that all together on the pages of her blog. Through her tips, she hopes to help people that visit her site and is open to any related questions.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/bd4c985e-7187-429a-b826-f3cff96c3388/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.aslobcomesclean.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"A Slob Comes Clean \">A SLOB COMES CLEAN</a></h2>\r\n\r\n<p>A Slob Comes Clean is the completely honest (and never-ending) story of Dana&rsquo;s personal deslobification process. As she finds ways to keep her home under control, she shares the truth about cleaning and organizing strategies that actually work in real life for real people &ndash; people who don&rsquo;t like cleaning or organizing.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/d20191ea-3b36-4ac5-a131-ba2ca1c76b68/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.organizedmom.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"The Organized Mom \">THE ORGANIZED MOM</a></h2>\r\n\r\n<p>The Organized Mom is a lifestyle website with a goal to keep today&rsquo;s mothers organized. With topics such as family life and cleaning to recipes and fitness, it contains articles and tips that are bound to help the everyday mom.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/3ab447cc-157b-4c92-b74d-b395dfda16fe/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://organizedcharm.blogspot.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Organized Charm \">ORGANIZED CHARM</a></h2>\r\n\r\n<p>Kirsten Horton is the founder of Organized Charm. She is an organization-obsessed kindergarten teacher who believes in making life as bright, cheery, and orderly as possible! Through weekly blog posts about decluttering, daily social media updates, and answering reader updates, her site aims to help you achieve your goal.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/7e4805cf-c63f-4e03-8d99-aeb57a450374/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"https://www.getorganizedwizard.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Get Organized Wizard \">GET ORGANIZED WIZARD</a></h2>\r\n\r\n<p>In Get Organized Wizard, Michele Connolly teaches readers how to take action and get rid of the clutter in one&rsquo;s life, as a result making them happier overall. She believes that being organized is great resource for living happy, effective life. She created this site in hope of guiding people to get organized.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/0974ec2d-5457-49e6-81e1-4c3f41742db8/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2>HOME &amp; LIVING BLOGS</h2>\r\n\r\n<h2><a href=\"http://www.apartmenttherapy.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Apartment Therapy \">APARTMENT THERAPY</a></h2>\r\n\r\n<p>Apartment Therapy is a blog with a goal to help people make their homes more beautiful, organized and healthy by connecting them to a wealth of resources, ideas and community online. They point out that creating a calm, healthy, and beautiful home doesn&rsquo;t require large amounts of money or space. It requires inspiration, connection to resources and motivation to do something about it.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/28221aa4-38ce-448f-84f4-4a8e517fff04/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.housebeautiful.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"House Beautiful \">HOUSE BEAUTIFUL</a></h2>\r\n\r\n<p>House Beautiful is a digital lifestyle magazine that focuses on home improvement, decorating ideas, DIY projects, and gardening tips. From what kind of paint you should be using to the best brunch ideas, it is bound to equip its readers with the right information to having a more beautiful home and life.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/1aefd6a6-71c5-4b61-bc2b-f8aeafeb5572/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://theinspiredroom.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"The Inspired Room \">THE INSPIRED ROOM</a></h2>\r\n\r\n<p>Melissa Michaels is the creator of The Inspired Room, a decorating blog designed to help you love the home you have. She was honored two years in a row, 2015 and 2014 to be voted the Reader&rsquo;s Favorite Decorating Blogger at Better Homes &amp; Gardens magazine! She is budget conscious but also appreciate good design and a well-kept home.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/ccb424a7-246d-45fc-b5d6-f081d424d436/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.onegoodthingbyjillee.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"One Good Thing by Jillee \">ONE GOOD THING BY JILLEE</a></h2>\r\n\r\n<p>One Good Thing by Jillee is a home and lifestyle blog. Jillee Nystul, founder of the blog, shares tips, advice, and articles revolving around recipes, homemaking, gardening, cleaning, and just about anything that will make life a bit more enjoyable and easier.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/b71e531d-a6bb-4c4a-ae61-ccc546acba45/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>', '<h1><span style=\"font-size:14px\">TOP 80 BLOGS FOR CLEANING INSPIRATION</span></h1>\r\n\r\n<p>If you&rsquo;re looking for some great blogs for cleaning inspiration, you&rsquo;ve come to the right place!</p>\r\n\r\n<p>We at Microfiber Wholesale love cleaning &ndash; if it isn&rsquo;t obvious enough. Lucky for us, there are hundreds of blogs about cleaning and organizing on the web. Here, we&rsquo;ve rounded up the blogs that we read and get inspiration from.</p>\r\n\r\n<p>This list covers the best of the best when it comes to cleaning hacks, orderliness tricks, tips on where to start de-cluttering. We&rsquo;ve also included blogs showcasing beautiful designs of clean homes.</p>\r\n\r\n<p>Whether you&rsquo;re a cleaning buff looking to add more cleaning resources to your list or a busy mom who needs the extra push to keep the home organized, these blogs do an excellent job of turning cleaning into a faster and, if you&rsquo;re anything like us, a more fun experience.</p>\r\n\r\n<h2>CLEANING &amp; ORGANIZING BLOGS</h2>\r\n\r\n<h2><a href=\"http://organizingmadefun.blogspot.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Organizing Made Fun \">ORGANIZING MADE FUN</a></h2>\r\n\r\n<p>In Organizing Made Fun, Founder Becky shares insights on how to make cleaning and home keeping a better experience. She also touches on her passion for DIY, decorating, and natural living. She believes that if you came here looking for inspiration, you are bound to get some. If motivation is what you are looking for, she guarantees that she&rsquo;s your girl.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/ab1e98df-9310-4d04-a7b9-2440ea5353b3/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.cleanandscentsible.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Clean and Scentsible \">CLEAN AND SCENTSIBLE</a></h2>\r\n\r\n<p>Jenn is a wife of 10 years and proud mom to two beautiful boys living in British Columbia. Working part time as a pediatric physiotherapist and full time as a mom and homemaker, she is also the creator of Clean and Scentsible. Initially, she used the blog to showcase some of her favorite Norwex and Scentsy products, but she quickly became obsessed with all the creative inspiration out there in the blog world and decided to spend more time on the crafty end of things, sharing insights through this blog.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/74fdde6a-01b4-45ae-bc5f-b28f4f94bda3/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.iheartorganizing.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"IHeart Organizing \">IHEART ORGANIZING</a></h2>\r\n\r\n<p>Jen can find no other way of better enjoying her passion for organizing than through this blog. She loves trying out new systems and sharing her successes along with lessons learned along the way. With a few DIY projects thrown in the site, Jen hopes that there will be something for everyone to pop by and see.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/cb01435b-ebfb-403e-bc49-d41c66f0885a/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"https://www.cleanmama.net/blog\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Clean Mama \">CLEAN MAMA</a></h2>\r\n\r\n<p>Clean Mama was found by Becky, a cleaning and home keeping expert, business owner and author of the books Simply Clean, Touchstone (Simon &amp; Schuster), March 2017, and (The Organically Clean Home, Adams Media, 2014). She is also a wife and mom to three, a business owner, and a former art teacher. She writes to help her readers discover new ways to do the mundane tasks of home keeping and to bring a little more fun in the cleaning process.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/453dd012-0d13-41aa-9798-73ef4377a413/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.abowlfulloflemons.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"A Bowl Full of Lemons \">A BOWL FULL OF LEMONS</a></h2>\r\n\r\n<p>A Bowl Full of Lemons is a growing community of people with a shared goal to get their lives in order. They offer tips and advice on topics such as organization, budgeting, and cleaning. The site also has a shop that showcases the best products you can use for the job when doing so.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/44c7e915-2b51-42b8-bf3b-0de2bdc0d68b/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://askannamoseley.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Ask Anna \">ASK ANNA</a></h2>\r\n\r\n<p>Founder of Ask Anna, Anna Moseley, has always loved to help people and aid her family and friends clean, organize and decorate their homes &ndash; so she put that all together on the pages of her blog. Through her tips, she hopes to help people that visit her site and is open to any related questions.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/bd4c985e-7187-429a-b826-f3cff96c3388/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.aslobcomesclean.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"A Slob Comes Clean \">A SLOB COMES CLEAN</a></h2>\r\n\r\n<p>A Slob Comes Clean is the completely honest (and never-ending) story of Dana&rsquo;s personal deslobification process. As she finds ways to keep her home under control, she shares the truth about cleaning and organizing strategies that actually work in real life for real people &ndash; people who don&rsquo;t like cleaning or organizing.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/d20191ea-3b36-4ac5-a131-ba2ca1c76b68/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.organizedmom.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"The Organized Mom \">THE ORGANIZED MOM</a></h2>\r\n\r\n<p>The Organized Mom is a lifestyle website with a goal to keep today&rsquo;s mothers organized. With topics such as family life and cleaning to recipes and fitness, it contains articles and tips that are bound to help the everyday mom.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/3ab447cc-157b-4c92-b74d-b395dfda16fe/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://organizedcharm.blogspot.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Organized Charm \">ORGANIZED CHARM</a></h2>\r\n\r\n<p>Kirsten Horton is the founder of Organized Charm. She is an organization-obsessed kindergarten teacher who believes in making life as bright, cheery, and orderly as possible! Through weekly blog posts about decluttering, daily social media updates, and answering reader updates, her site aims to help you achieve your goal.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/7e4805cf-c63f-4e03-8d99-aeb57a450374/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"https://www.getorganizedwizard.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Get Organized Wizard \">GET ORGANIZED WIZARD</a></h2>\r\n\r\n<p>In Get Organized Wizard, Michele Connolly teaches readers how to take action and get rid of the clutter in one&rsquo;s life, as a result making them happier overall. She believes that being organized is great resource for living happy, effective life. She created this site in hope of guiding people to get organized.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/0974ec2d-5457-49e6-81e1-4c3f41742db8/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2>HOME &amp; LIVING BLOGS</h2>\r\n\r\n<h2><a href=\"http://www.apartmenttherapy.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Apartment Therapy \">APARTMENT THERAPY</a></h2>\r\n\r\n<p>Apartment Therapy is a blog with a goal to help people make their homes more beautiful, organized and healthy by connecting them to a wealth of resources, ideas and community online. They point out that creating a calm, healthy, and beautiful home doesn&rsquo;t require large amounts of money or space. It requires inspiration, connection to resources and motivation to do something about it.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/28221aa4-38ce-448f-84f4-4a8e517fff04/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.housebeautiful.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"House Beautiful \">HOUSE BEAUTIFUL</a></h2>\r\n\r\n<p>House Beautiful is a digital lifestyle magazine that focuses on home improvement, decorating ideas, DIY projects, and gardening tips. From what kind of paint you should be using to the best brunch ideas, it is bound to equip its readers with the right information to having a more beautiful home and life.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/1aefd6a6-71c5-4b61-bc2b-f8aeafeb5572/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://theinspiredroom.net/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"The Inspired Room \">THE INSPIRED ROOM</a></h2>\r\n\r\n<p>Melissa Michaels is the creator of The Inspired Room, a decorating blog designed to help you love the home you have. She was honored two years in a row, 2015 and 2014 to be voted the Reader&rsquo;s Favorite Decorating Blogger at Better Homes &amp; Gardens magazine! She is budget conscious but also appreciate good design and a well-kept home.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/ccb424a7-246d-45fc-b5d6-f081d424d436/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>\r\n\r\n<h2><a href=\"http://www.onegoodthingbyjillee.com/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"One Good Thing by Jillee \">ONE GOOD THING BY JILLEE</a></h2>\r\n\r\n<p>One Good Thing by Jillee is a home and lifestyle blog. Jillee Nystul, founder of the blog, shares tips, advice, and articles revolving around recipes, homemaking, gardening, cleaning, and just about anything that will make life a bit more enjoyable and easier.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.shgcdn.com/b71e531d-a6bb-4c4a-ae61-ccc546acba45/-/format/auto/-/preview/3000x3000/-/quality/lighter/\" /></p>', '2021-06-07 16:51:20', '2021-06-08 17:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_bn`, `blog_category_slug_en`, `blog_category_slug_bn`, `created_at`, `updated_at`) VALUES
(4, 'Cleaning', 'poriskarok', 'cleaning', 'poriskarok', '2021-06-07 12:18:13', '2021-06-07 12:18:13'),
(5, 'Technology', 'প্রযুক্তি', 'technology', 'প্রযুক্তি', '2021-06-07 12:11:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `booking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complain_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complain_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `complain_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `division_id`, `district_id`, `city_id`, `name`, `email`, `phone`, `post_code`, `notes`, `address`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `booking_number`, `invoice_no`, `booking_date`, `booking_month`, `booking_year`, `confirmed_date`, `processing_date`, `shipped_date`, `delivered_date`, `cancel_date`, `complain_date`, `complain_booking`, `complain_reason`, `status`, `created_at`, `updated_at`) VALUES
(18, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'card_1Iz2zeHTV7vFUfhUbBJEn9Fe', 'Stripe', 'txn_1Iz2zgHTV7vFUfhUKBnUo4Iy', 'bdt', 3267.00, '60bbafb31a87f', 'HSS12206409', '05 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, '10 June 2021', '2', 'bad Behaviour', 'delivered', '2021-06-05 11:09:09', '2021-06-09 19:55:04'),
(19, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Bdt', 2904.00, NULL, 'HSS85454519', '06 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'delivered', '2021-06-05 22:06:24', '2021-06-05 22:19:10'),
(20, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'card_1IzFujHTV7vFUfhULECwOMax', 'Stripe', 'txn_1IzFukHTV7vFUfhUhMgAfsbk', 'bdt', 1452.00, '60bc71b6620d9', 'HSS15568708', '06 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'confirmed', '2021-06-06 00:56:55', '2021-06-09 20:49:35'),
(21, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Bdt', 3267.00, NULL, 'HSS73645793', '06 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, '10 June 2021', '3', 'Wrong Service', 'delivered', '2021-06-06 00:57:26', '2021-06-09 20:50:58'),
(22, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Bdt', 5445.00, NULL, 'HSS83033318', '06 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, '10 June 2021', '3', 'Not Perfectly Done', 'delivered', '2021-06-06 00:58:03', '2021-06-09 20:44:00'),
(23, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'card_1J1hTRHTV7vFUfhUgQ9tzKgV', 'Stripe', 'txn_1J1hTTHTV7vFUfhUi2yquK3y', 'bdt', 1089.00, '60c55579e08ae', 'HSS49616768', '13 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, '02 November 2021', '1', 'I have complains. Worker time sense is not very good', 'delivered', '2021-06-12 18:46:52', '2021-11-02 13:38:14'),
(24, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'card_1JqPGNHTV7vFUfhUtiN5Wdu7', 'Stripe', 'txn_3JqPGPHTV7vFUfhU0tNQO2EU', 'bdt', 4356.00, '617dbb6e7ce69', 'HSS30808298', '30 October 2021', 'October', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'confirmed', '2021-10-30 15:38:57', '2021-10-30 15:41:31'),
(25, 1, 2, 2, 4, 'tahmidhasanmunna@gmail.com', 'tahmidhasanmunna@gmail.com', '01681827733', 1230, NULL, 'Sector-6,Uttara,Dhaka-1230', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Bdt', 2904.00, NULL, 'HSS92471458', '31 October 2021', 'October', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'pending', '2021-10-31 14:19:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_items`
--

CREATE TABLE `booking_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_items`
--

INSERT INTO `booking_items` (`id`, `booking_id`, `service_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(17, 18, 7, '1', 1200.00, '2021-06-05 11:09:14', NULL),
(18, 18, 8, '1', 1200.00, '2021-06-05 11:09:14', NULL),
(19, 18, 9, '1', 1200.00, '2021-06-05 11:09:14', NULL),
(20, 19, 7, '2', 1200.00, '2021-06-05 22:06:27', NULL),
(21, 20, 9, '1', 1200.00, '2021-06-06 00:56:59', NULL),
(22, 21, 7, '3', 1200.00, '2021-06-06 00:57:29', NULL),
(23, 22, 9, '2', 1200.00, '2021-06-06 00:58:06', NULL),
(24, 22, 8, '1', 1200.00, '2021-06-06 00:58:06', NULL),
(25, 22, 7, '2', 1200.00, '2021-06-06 00:58:06', NULL),
(26, 23, 7, '1', 1200.00, '2021-06-12 18:46:57', NULL),
(27, 24, 9, '2', 1200.00, '2021-10-30 15:39:01', NULL),
(28, 24, 8, '1', 1200.00, '2021-10-30 15:39:01', NULL),
(29, 25, 9, '1', 1200.00, '2021-10-31 14:19:46', NULL),
(30, 25, 8, '1', 1200.00, '2021-10-31 14:19:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_bn`, `brand_slug_en`, `brand_slug_bn`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'ACI Limited', 'এ.সি.আই লিমিটেড', 'aci-limited', 'এ.সি.আই-লিমিটেড', 'upload/brand/1701930886473079.png', NULL, '2021-06-07 11:42:54'),
(15, 'ACI Ltd.', 'এ.সি.আই লিমিটেড', 'aci-ltd.', 'এ.সি.আই-লিমিটেড', 'upload/brand/1699819366785448.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_bn`, `category_slug_en`, `category_slug_bn`, `category_icon`, `created_at`, `updated_at`) VALUES
(11, 'AC Repair', 'শীতাতপনিয়ন্ত্রক মেরামত সেবা', 'ac-repair', 'শীতাতপনিয়ন্ত্রক-মেরামত-সেবা', 'fa fa-wrench', NULL, '2021-05-17 10:02:46'),
(12, 'Appliance Repair', 'সরঞ্জাম মেরামত', 'appliance-repair', 'সরঞ্জাম-মেরামত', 'fa fa-wrench', NULL, NULL),
(13, 'painting & renovation', 'চিত্রাঙ্কন ও সংস্কার', 'painting-&-renovation', 'চিত্রাঙ্কন-ও-সংস্কার', 'fa fa-paint-brush', NULL, NULL),
(14, 'Shifting', 'স্থানান্তরিত', 'shifting', 'স্থানান্তরিত', 'fa fa-truck', NULL, '2021-05-17 05:20:18'),
(15, 'Cleaning & Pest Control', 'পরিষ্কার এবং কীটপতঙ্গ নিয়ন্ত্রণ', 'cleaning-&-pest-control', 'পরিষ্কার-এবং-কীটপতঙ্গ-নিয়ন্ত্রণ', 'fa fa-trash', NULL, NULL),
(17, 'Men\'s Care & Salon', 'পুরুষদের যত্ন এবং সেলুন', 'men\'s-care-&-salon', 'পুরুষদের-যত্ন-এবং-সেলুন', 'fa fa-scissors', NULL, NULL),
(18, 'Driver Service', 'ড্রাইভার পরিষেবা', 'driver-service', 'ড্রাইভার-পরিষেবা', 'fa fa-car', NULL, NULL),
(19, 'Emergency Services', 'জরুরী সেবা', 'emergency-services', 'জরুরী-সেবা', 'fa fa-ambulance', NULL, NULL),
(20, 'Electronics & Gadgets Repair', 'ইলেকট্রনিক্স এবং গ্যাজেটস মেরামত', 'electronics-&-gadgets-repair', 'ইলেকট্রনিক্স-এবং-গ্যাজেটস-মেরামত', 'fa fa-desktop', NULL, NULL),
(21, 'Electric & Plumbing', 'বৈদ্যুতিক ও নদীর গভীরতানির্ণয়', 'electric-&-plumbing', 'বৈদ্যুতিক-ও-নদীর-গভীরতানির্ণয়', 'fa fa-wrench', NULL, NULL),
(22, 'Maid Servant', 'পরিষ্কারক', 'maid-servant', 'পরিষ্কারক', 'fa fa-user', NULL, NULL),
(23, 'Plumber', 'Plumber', 'plumber', 'Plumber', 'fa fa-asterisk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(3, 'HAPPYNEWYEAR', 25, '2021-07-07', 1, '2021-05-27 11:39:18', '2021-05-27 11:39:18'),
(4, 'EIDOFFER', 34, '2021-05-29', 1, '2021-05-28 05:25:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(8, '2021_05_12_120726_create_brands_table', 2),
(9, '2021_05_13_173804_create_categories_table', 3),
(10, '2021_05_14_054651_create_sub_categories_table', 4),
(11, '2021_05_14_172925_create_services_table', 5),
(12, '2021_05_15_073632_create_multi_imgs_table', 6),
(13, '2021_05_18_142344_create_reviews_table', 7),
(14, '2021_05_26_200907_create_wishlists_table', 8),
(15, '2021_05_27_145637_create_coupons_table', 9),
(19, '2021_05_28_055202_create_ship_divisions_table', 10),
(20, '2021_05_28_055239_create_ship_districts_table', 10),
(21, '2021_05_28_055304_create_ship_cities_table', 10),
(23, '2021_05_28_210905_create_orders_table', 11),
(27, '2021_05_29_204312_create_bookings_table', 12),
(28, '2021_05_29_204922_create_booking_items_table', 12),
(29, '2021_06_06_204619_create_blog_post_categories_table', 13),
(30, '2021_06_07_011559_create_blog_posts_table', 14),
(31, '2021_06_09_001623_create_site_settings_table', 15),
(32, '2021_06_09_022121_create_newsletter_emails_table', 16),
(33, '2021_06_09_122456_create_seos_table', 17),
(34, '2021_02_02_212221_create_admins_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `service_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(17, 4, 'upload/services/multi-image/1700007682413044.jpg', '2021-05-17 06:14:24', NULL),
(18, 5, 'upload/services/multi-image/1700008064284852.jpg', '2021-05-17 06:20:28', NULL),
(19, 6, 'upload/services/multi-image/1700306684898216.jpeg', '2021-05-17 06:32:25', '2021-05-20 13:26:55'),
(20, 7, 'upload/services/multi-image/1700310737544961.jpg', '2021-05-20 14:31:20', NULL),
(21, 7, 'upload/services/multi-image/1700310737657301.jpg', '2021-05-20 14:31:20', NULL),
(22, 7, 'upload/services/multi-image/1700310737776794.jpg', '2021-05-20 14:31:20', NULL),
(23, 8, 'upload/services/multi-image/1700372888701110.jpeg', '2021-05-21 06:59:12', NULL),
(24, 8, 'upload/services/multi-image/1700372889078376.jpg', '2021-05-21 06:59:12', NULL),
(25, 8, 'upload/services/multi-image/1700372889201567.jpg', '2021-05-21 06:59:12', NULL),
(26, 8, 'upload/services/multi-image/1700372889340464.jpg', '2021-05-21 06:59:13', NULL),
(27, 9, 'upload/services/multi-image/1700446832617160.jpg', '2021-05-22 02:34:30', NULL),
(28, 9, 'upload/services/multi-image/1700446832759516.jpg', '2021-05-22 02:34:30', NULL),
(29, 9, 'upload/services/multi-image/1700446832867600.jpg', '2021-05-22 02:34:31', NULL),
(30, 9, 'upload/services/multi-image/1700446833024992.png', '2021-05-22 02:34:31', NULL),
(31, 9, 'upload/services/multi-image/1700446833923173.jpg', '2021-05-22 02:34:32', NULL),
(32, 9, 'upload/services/multi-image/1700446834086445.jpg', '2021-05-22 02:34:32', NULL),
(33, 10, 'upload/services/multi-image/1700446902571032.jpg', '2021-05-22 02:35:37', NULL),
(34, 10, 'upload/services/multi-image/1700446902694838.jpg', '2021-05-22 02:35:37', NULL),
(35, 10, 'upload/services/multi-image/1700446902831997.jpg', '2021-05-22 02:35:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

CREATE TABLE `newsletter_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'tahmidhasanmunna@gmail.com', NULL, NULL),
(2, 'miamimob2176@gmail.com', NULL, NULL),
(3, 'mredul@dev.com', NULL, NULL),
(4, 'tahmidhasanmunna@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('maruf@dev.com', '$2y$10$GUyJo1jZ0Iu8s8pPBxlmreYigSj2m4x2/.dMshveZMVeTlRmesQfi', '2021-11-01 13:17:09'),
('firstaffiliatemarketingproject@gmail.com', '$2y$10$Ep4h1RdG6F7xBmkEYo1VfOmfGJMegPaVhcRK4FMFu9k/VFLd.Mami', '2021-11-01 13:21:12'),
('tahmidhasanmunna@gmail.com', '$2y$10$D/v4DILlveW.GINTWs43COUCnso6ht9rCYpHiYtp/Gj7ElRDz2dQu', '2021-11-02 09:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(5) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `service_id`, `user_id`, `comment`, `summary`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'dhhdhtdhdh', 'hsdrhdhfhhh', 0, '1', '2021-06-12 00:02:59', '2021-06-12 01:43:39'),
(3, 9, 1, 'Service is Very Good', 'Expert Plumber', 3, '1', '2021-06-14 06:24:52', '2021-06-14 06:34:03'),
(4, 10, 1, 'Service is very good.', 'Expert Plumber', 3, '1', '2021-06-14 06:32:54', '2021-06-14 06:34:01'),
(5, 5, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by Englis', 'Expert Plumber', 3, '0', '2021-11-02 13:36:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Home Service Solution', 'Home Service', 'online service, home service, cleaner, maid, online household worker', 'HomeServiceSolution, largest service marketplace & one-stop solution for your home services in Bangladesh. Order any service, anytime from HomeServiceSolution  or call +8801700000000.', '<script type=\"text/javascript\">\r\nwindow.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if(\"function\"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t(\"ee\"),a=t(15),s={};try{o=localStorage.getItem(\"__nr_flags\").split(\",\"),console&&\"function\"==typeof console.log&&(s.console=!0,o.indexOf(\"dev\")!==-1&&(s.dev=!0),o.indexOf(\"nr_dev\")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on(\"internal-error\",function(t){r(t.stack)}),s.dev&&i.on(\"fn-err\",function(t,n,e){r(e.stack)}),s.dev&&(r(\"NR AGENT IN DEVELOPMENT MODE\"),r(\"flags: \"+a(s,function(t,n){return t}).join(\", \")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i(\"ierr\",[f,c.now(),!0])}catch(d){}}return\"function\"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||\"Uncaught error with no additional information\",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i(\"err\",[t,e])}var i=t(\"handle\"),a=t(16),s=t(\"ee\"),c=t(\"loader\"),f=t(\"gos\"),u=window.onerror,d=!1,l=\"nr@seenError\",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){\"stack\"in h&&(t(8),t(7),\"addEventListener\"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on(\"fn-start\",function(t,n,e){d&&(p+=1)}),s.on(\"fn-err\",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on(\"fn-end\",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on(\"internal-error\",function(t){i(\"ierr\",[t,c.now(),!0])})},{}],3:[function(t,n,e){t(\"loader\").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t(\"ee\"),i=t(\"handle\"),a=t(8),s=t(7),c=\"learResourceTimings\",f=\"addEventListener\",u=\"resourcetimingbufferfull\",d=\"bstResource\",l=\"resource\",p=\"-start\",h=\"-end\",m=\"fn\"+p,w=\"fn\"+h,v=\"bstTimer\",y=\"pushState\",g=t(\"loader\");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i(\"bst\",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),\"requestAnimationFrame\"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i(\"bstHist\",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance[\"c\"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance[\"c\"+c]()},!1):window.performance[f](\"webkit\"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance[\"webkitC\"+c]()},!1)),document[f](\"scroll\",r,{passive:!0}),document[f](\"keypress\",r,!1),document[f](\"click\",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],\"-\",i)}function i(t,n){return t[1]}var a=t(\"ee\").get(\"events\"),s=t(18)(a,!0),c=t(\"gos\"),f=XMLHttpRequest,u=\"addEventListener\",d=\"removeEventListener\";n.exports=a,\"getPrototypeOf\"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+\"-start\",function(t,n){var e=t[1],r=c(e,\"nr@wrapped\",function(){function t(){if(\"function\"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,\"function\":e}[typeof e];return n?s(n,\"fn-\",null,n.name||\"anonymous\"):e});this.wrapped=t[1]=r}),a.on(d+\"-start\",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t(\"ee\").get(\"history\"),o=t(18)(r);n.exports=r,o.inPlace(window.history,[\"pushState\",\"replaceState\"],\"-\")},{}],7:[function(t,n,e){var r=t(\"ee\").get(\"raf\"),o=t(18)(r),i=\"equestAnimationFrame\";n.exports=r,o.inPlace(window,[\"r\"+i,\"mozR\"+i,\"webkitR\"+i,\"msR\"+i],\"raf-\"),r.on(\"raf-start\",function(t){t[0]=o(t[0],\"fn-\")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],\"fn-\",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],\"fn-\",this,e)}var i=t(\"ee\").get(\"timer\"),a=t(18)(i),s=\"setTimeout\",c=\"setInterval\",f=\"clearTimeout\",u=\"-start\",d=\"-\";n.exports=i,a.inPlace(window,[s,\"setImmediate\"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,\"clearImmediate\"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,[\"onreadystatechange\"],\"fn-\",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit(\"xhr-resolved\",[],t)),d.inPlace(t,y,\"fn-\",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t(\"ee\"),u=f.get(\"xhr\"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v=\"readystatechange\",y=[\"onload\",\"onerror\",\"onabort\",\"onloadstart\",\"onloadend\",\"onprogress\",\"ontimeout\"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit(\"new-xhr\",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit(\"internal-error\",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,[\"open\",\"send\"],\"-xhr-\",s),u.on(\"send-xhr-start\",function(t,n){r(t,n),i(n)}),u.on(\"open-xhr-start\",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on(\"fn-end\",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader(\"X-NewRelic-App-Data\");c&&(n.cat=c.split(\", \").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit(\"xhr-done\",[t],t),s(\"xhr\",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if(\"json\"===e&&null!==n)return n;var r=\"arraybuffer\"===e||\"blob\"===e||\"json\"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+\":\"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t(\"loader\");if(a.xhrWrappable){var s=t(\"handle\"),c=t(11),f=t(\"ee\"),u=[\"load\",\"error\",\"abort\",\"timeout\"],d=u.length,l=t(\"id\"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on(\"new-xhr\",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener(\"progress\",function(t){n.lastSize=t.loaded},!1)}),f.on(\"open-xhr-start\",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on(\"open-xhr-end\",function(t,n){\"loader_config\"in NREUM&&\"xpid\"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader(\"X-NewRelic-ID\",NREUM.loader_config.xpid)}),f.on(\"send-xhr-start\",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{\"abort\"===t.type&&(o.params.aborted=!0),(\"load\"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||\"function\"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit(\"internal-error\",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on(\"xhr-cb-time\",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&\"function\"==typeof e.onload||this.end(e)}),f.on(\"xhr-load-added\",function(t,n){var e=\"\"+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on(\"xhr-load-removed\",function(t,n){var e=\"\"+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on(\"addEventListener-end\",function(t,n){n instanceof m&&\"load\"===t[0]&&f.emit(\"xhr-load-added\",[t[1],t[2]],n)}),f.on(\"removeEventListener-end\",function(t,n){n instanceof m&&\"load\"===t[0]&&f.emit(\"xhr-load-removed\",[t[1],t[2]],n)}),f.on(\"fn-start\",function(t,n,e){n instanceof m&&(\"onload\"===e&&(this.onload=!0),(\"load\"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on(\"fn-end\",function(t,n){this.xhrCbStart&&f.emit(\"xhr-cb-time\",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement(\"a\"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split(\"://\");!r.port&&o[1]&&(r.port=o[1].split(\"/\")[0].split(\"@\").pop().split(\":\")[1]),r.port&&\"0\"!==r.port||(r.port=\"https\"===o[0]?\"443\":\"80\"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],\"/\"!==r.pathname.charAt(0)&&(r.pathname=\"/\"+r.pathname);var i=!n.protocol||\":\"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t(\"handle\"),a=t(15),s=t(16),c=t(\"ee\").get(\"tracer\"),f=t(\"loader\"),u=NREUM;\"undefined\"==typeof window.newrelic&&(newrelic=u);var d=[\"setPageViewName\",\"setCustomAttribute\",\"setErrorHandler\",\"finished\",\"addToTrace\",\"inlineHit\",\"addRelease\"],l=\"api-\",p=l+\"ixn-\";a(d,function(t,n){u[n]=o(l+n,!0,\"api\")}),u.addPageAction=o(l+\"addPageAction\",!0),u.setCurrentRouteName=o(l+\"routeName\",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o=\"function\"==typeof n;return i(p+\"tracer\",[f.now(),t,e],r),function(){if(c.emit((o?\"\":\"no-\")+\"fn-start\",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit(\"fn-err\",[arguments,this,t],e),t}finally{c.emit(\"fn-end\",[f.now()],e)}}}};a(\"setName,setAttribute,save,ignore,onEnd,getContext,end,get\".split(\",\"),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){\"string\"==typeof t&&(t=new Error(t)),i(\"err\",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if(\"string\"==typeof t&&t.length)return t.length;if(\"object\"==typeof t){if(\"undefined\"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if(\"undefined\"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!(\"undefined\"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\\/\\s](\\d+\\.\\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r=\"\",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),\"undefined\"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:\"undefined\"!=typeof window.performance&&window.performance.timing&&\"undefined\"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t(\"ee\"),i=t(16),a=\"nr@original\",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s=\"function\"==typeof e?e(r,a):e||{}}catch(f){l([f,\"\",[r,a,o],s])}u(n+\"start\",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+\"err\",[r,a,d],s),d}finally{u(n+\"end\",[r,a,c],s)}}return r(t)?t:(n||(n=\"\"),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o=\"\");var a,s,c,f=\"-\"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit(\"internal-error\",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||\"feature\",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s=\"nr@context\",c=t(\"gos\"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t(\"ee\").get(\"handle\");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||\"object\"!==n&&\"function\"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i=\"nr@id\",a=t(\"gos\");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName(\"script\")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c(\"mark\",[\"onload\",a()+b.offset],null,\"api\");var e=l.createElement(\"script\");e.src=\"https://\"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){\"complete\"===l.readyState&&i()}function i(){c(\"mark\",[\"domContent\",a()+b.offset],null,\"api\")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t(\"handle\"),f=t(15),u=t(\"ee\"),d=window,l=d.document,p=\"addEventListener\",h=\"attachEvent\",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=\"\"+location,y={beacon:\"bam.nr-data.net\",errorBeacon:\"bam.nr-data.net\",agent:\"js-agent.newrelic.com/nr-1071.min.js\"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p](\"DOMContentLoaded\",i,!1),d[p](\"load\",r,!1)):(l[h](\"onreadystatechange\",o),d[h](\"onload\",r)),c(\"mark\",[\"firstbyte\",s],null,\"api\");var x=0,E=t(17)},{}]},{},[\"loader\",2,10,4,3]);\r\n;NREUM.info={beacon:\"bam.nr-data.net\",errorBeacon:\"bam.nr-data.net\",licenseKey:\"fee8387e35\",applicationID:\"133284765\",sa:1}\r\n</script>', NULL, '2021-06-09 06:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `service_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_tags_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_bn` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_bn` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `subcategory_id`, `service_name_en`, `service_name_bn`, `service_slug_en`, `service_slug_bn`, `service_code`, `service_qty`, `service_tags_en`, `service_tags_bn`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_bn`, `long_descp_en`, `long_descp_bn`, `service_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(4, 11, 14, 'Total Clean', 'Total Clean', 'total-clean', 'Total-Clean', '01', '100', 'Cleaning', 'Cleaning', '21312', '231', 'awdfawfsef', 'sefsefswef', '<p>Long Description Englishasefdswef</p>', '<p>Long Description Banglasefsef</p>', 'upload/services/thambnail/1700007681493729.jpeg', 1, NULL, NULL, NULL, 1, '2021-05-17 06:14:24', NULL),
(5, 13, 43, 'AC Basic Service', 'এসি বেসিক পরিষেবা', 'ac-basic-service', 'এসি-বেসিক-পরিষেবা', '01', '100', 'Ac Service', 'Ac Service', '21312', '0', '<p>editor1</p>', '<p>gfdergxdg</p>', '<p>Long Description English</p>', '<p>Long Description Bangla</p>', 'upload/services/thambnail/1700008064147486.jpg', 1, 1, 1, 1, 1, '2021-05-21 00:00:06', '2021-05-21 00:00:06'),
(6, 11, 13, 'Total Clean', 'এসি বেসিক পরিষেবা', 'total-clean', 'এসি-বেসিক-পরিষেবা', '2', '100', 'Cleaning', 'Cleaning', '21312', NULL, 'desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'upload/services/thambnail/1700008815501879.jpg', 1, 1, NULL, NULL, 1, '2021-05-20 14:20:34', '2021-05-20 14:20:34'),
(7, 21, 24, 'Water Meter Servicing', 'ওয়াটার মিটার সার্ভিসিং', 'water-meter-servicing', 'ওয়াটার-মিটার-সার্ভিসিং', '04', '7', 'water meter servicing', 'পানির পরিমাপক', '2000', '1200', 'What\'s included?\r\nWell-trained plumber\r\n\r\nSafety Assurance\r\n\r\nWhat\'s excluded?\r\nExcludes all components and parts (if used)\r\n\r\nExcludes Transportation cost (if applied)', '<pre>\r\nকি অন্তর্ভুক্ত?\r\nপ্রশিক্ষিত প্লাম্বার\r\n\r\nসুরক্ষা নিশ্চয়তা\r\n\r\nবাদ কি?\r\nসমস্ত উপাদান এবং অংশগুলি বাদ দেয় (যদি ব্যবহৃত হয়)\r\n\r\nপরিবহন ব্যয় বাদ পড়ে (যদি প্রয়োগ করা হয়)</pre>', '<h3>Details</h3>\r\n\r\n<p>All your Plumbing and Sanitary-related problems will be taken care of by Sheba.xyz marketplace. We have trusted professionals who are experts in fitting, installations, and drainage related issues.<br />\r\n<br />\r\n<br />\r\n<strong>Service Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Well-trained Workmen.</li>\r\n	<li>7 Days Service Warranty</li>\r\n	<li>Doorstep service</li>\r\n	<li>Safety Assurance</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Pricing:</strong></p>\r\n\r\n<ul>\r\n	<li>Only Service Charge</li>\r\n	<li>Visiting Charges is BDT 100 if no service is availed</li>\r\n	<li>Excludes all components and parts (if used)</li>\r\n	<li>Excludes Transportation cost (if applied)</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Payment:</strong><br />\r\nAfter service completion, customer will pay through Sheba.xyz app or Cash on Delivery.&nbsp;<br />\r\n<br />\r\n<br />\r\n<strong>Warranty:</strong></p>\r\n\r\n<ul>\r\n	<li>Warranty on consumables and parts will be as per manufacturer.</li>\r\n	<li>7 Days Service Warranty will be given by Sheba.xyz.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Terms &amp; Conditions</h2>\r\n\r\n<ul>\r\n	<li>Sheba.xyz or its representatives are not liable for any direct or incidental loss or damage of the client&rsquo;s property or personal security during availing the service, caused by accident, theft, burglary or any other type of incidental damages.</li>\r\n	<li>The client is singularly responsible for monitoring, using and supervising the activities of the resource provided by service providers.</li>\r\n	<li>By availing the service, the client automatically discharge Sheba.xyz from any claims or legal/moral liabilities other than stated in the details of service specified by Sheba.xyz.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Night Shift Service</strong></h2>\r\n\r\n<ul>\r\n	<li>Night Shift Service period starts from 10.00 pm to 8.00 am.</li>\r\n	<li>Minimum 4 hours lead time after service booking.</li>\r\n	<li>In excess of BDT 500 will be charged as Emergency Support Service Charge for availing this service at night shift service period.</li>\r\n	<li>If for any reason the customer refuses to take service after order confirmation, only the Emergency Support Service Charge will be applicable.</li>\r\n</ul>', '<pre>\r\nবিশদ\r\nআপনার সমস্ত নদীর গভীরতানির্ণয় এবং স্যানিটারি সম্পর্কিত সমস্যাগুলি শেবা.অ্যাকিজ মার্কেটপ্লেস দ্বারা যত্ন নেওয়া হবে। আমাদের কাছে বিশ্বস্ত পেশাদাররা আছেন যারা ফিটিং, ইনস্টলেশন এবং নিকাশী সংক্রান্ত সমস্যায় বিশেষজ্ঞ।\r\n\r\n\r\nপরিষেবা বৈশিষ্ট্য:\r\nপ্রশিক্ষিত কর্মী।\r\n7 দিনের পরিষেবা ওয়্যারেন্টি\r\nদোরগোড়ায় পরিষেবা\r\nসুরক্ষা নিশ্চয়তা\r\n\r\nমূল্য নির্ধারণ:\r\nকেবল পরিষেবা চার্জ\r\nকোনও পরিষেবা ব্যবহার না করা হলে ভিজিটিং চার্জ 100 টাকা\r\nসমস্ত উপাদান এবং অংশগুলি বাদ দেয় (যদি ব্যবহৃত হয়)\r\nপরিবহন ব্যয় বাদ পড়ে (যদি প্রয়োগ করা হয়)\r\n\r\nঅর্থ প্রদান:\r\nপরিষেবা সমাপ্তির পরে, গ্রাহক শিবা.অ্যাকিজ অ্যাপ বা ক্যাশ অন ডেলিভারির মাধ্যমে অর্থ প্রদান করবেন।\r\n\r\n\r\nওয়্যারেন্টি:\r\nভোক্তা ও যন্ত্রাংশের ওয়্যারেন্টি প্রস্তুতকারক হিসাবে থাকবে।\r\n7 দিনের পরিষেবা ওয়্যারেন্টি শেবা.অক্সিজ প্রদান করবে।\r\n\r\nশর্তাবলী\r\nশেবা.অক্সিজ বা এর প্রতিনিধিরা পরিষেবাটি গ্রহণের সময় ক্লায়েন্টের সম্পত্তি বা ব্যক্তিগত সুরক্ষার কোনও প্রত্যক্ষ বা ঘটনাগত ক্ষতি বা ক্ষয়ক্ষতির জন্য দায়বদ্ধ নয়, দুর্ঘটনা, চুরি, চুরি বা অন্য কোনও ধরণের ঘটনামূলক ক্ষতির কারণে ঘটে।\r\nক্লায়েন্ট পরিষেবা সরবরাহকারীদের দ্বারা সরবরাহিত সংস্থার ক্রিয়াকলাপ পর্যবেক্ষণ, ব্যবহার এবং তদারকির জন্য এককভাবে দায়বদ্ধ।\r\nপরিষেবাটি গ্রহণের মাধ্যমে ক্লায়েন্ট শেবা.অ্যাকিজ দ্বারা নির্দিষ্ট করা পরিষেবার বিবরণে বর্ণিত ব্যতীত অন্য যে কোনও দাবি বা আইনগত / নৈতিক দায়বদ্ধতা থেকে শেবা.অ্যাকিজকে স্বয়ংক্রিয়ভাবে ছাড়িয়ে দেয়।\r\n\r\nনাইট শিফট পরিষেবা\r\nনাইট শিফট পরিষেবাদির সময়কাল রাত ১০ টা থেকে সকাল ৮.০০ টা পর্যন্ত শুরু হয়।\r\nপরিষেবা বুকিংয়ের পরে সর্বনিম্ন 4 ঘন্টা নেতৃত্বের সময়।\r\nনাইট শিফট পরিষেবাদির সময় এই পরিষেবাটি গ্রহণের জন্য 500 টাকারও বেশি জরুরী জরুরী সহায়তা পরিষেবা চার্জ হিসাবে নেওয়া হবে।\r\nকোনও কারণে যদি গ্রাহক আদেশের নিশ্চয়তার পরে পরিষেবা নিতে অস্বীকার করে তবে কেবল জরুরি সহায়তা পরিষেবা চার্জ প্রযোজ্য হবে।</pre>', 'upload/services/thambnail/1700310737380211.jpg', 1, 1, 1, 1, 1, '2021-05-21 00:00:14', '2021-06-12 20:32:14'),
(8, 12, 17, 'AC Basic Service', 'এসি বেসিক পরিষেবা', 'ac-basic-service', 'এসি-বেসিক-পরিষেবা', '10', '17', 'Ac Service', 'Ac Service', '2000', '1200', '<p>ns of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be s</p>', '<p>ns of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be s</p>', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from</p>', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from</p>', 'upload/services/thambnail/1700372888546556.jpg', 1, 1, 1, 1, 1, '2021-05-21 06:59:12', '2021-06-09 19:07:27'),
(9, 15, 35, 'Total Clean', 'এসি বেসিক পরিষেবা', 'total-clean', 'এসি-বেসিক-পরিষেবা', '2', '-1', 'cleaning', 'cleaning', '2000', '1200', '<p>dadcasd</p>', '<p>daswda</p>', '<p>Long Description Englishadaswd</p>', '<p>Long Description Banglaadwada</p>', 'upload/services/thambnail/1700446832232676.jpg', NULL, 1, NULL, NULL, 1, '2021-05-22 02:34:30', '2021-06-09 19:07:27'),
(10, 15, 35, 'AC Basic Service', 'Total Clean', 'ac-basic-service', 'Total-Clean', '01', '0', 'cleaning', 'cleaning', '21312', '231', '<p>dad</p>', '<p>adw</p>', '<p>Long Description English</p>', '<p>Long Description Bangla</p>', 'upload/services/thambnail/1700446902419412.jpg', NULL, 1, NULL, NULL, 1, '2021-05-25 09:46:42', '2021-05-25 09:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DuRDfq9PEkJ7gxjUfNU7eDzB5ctXw2cMKb7IhXHR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVpTbktmT3NUeGRnaXhWRnRPdDFLNWllRG9tNVZ1ZFFMcHlTOE02bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9fQ==', 1636366977),
('jtOArDA1AMqgz4cVcbFRaxVrePH1XoEf6Z6s4VlQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibk9jUWFxRnRIRmJwR3BHeGp1U1didzhQSjlJMUo2THR3cDZ4eGJWSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1635898203);

-- --------------------------------------------------------

--
-- Table structure for table `ship_cities`
--

CREATE TABLE `ship_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_cities`
--

INSERT INTO `ship_cities` (`id`, `division_id`, `district_id`, `city_name`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Gazipur', '2021-05-28 00:16:52', NULL),
(3, 2, 1, 'Dhanmondi', '2021-05-28 00:17:28', '2021-05-28 00:17:28'),
(4, 2, 2, 'Kalkini', '2021-05-28 23:33:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dhaka', '2021-05-28 00:13:17', NULL),
(2, 2, 'Madaripur', '2021-05-28 00:13:25', NULL),
(3, 2, 'Faridpur', '2021-05-28 00:13:33', NULL),
(4, 4, 'Khulna', '2021-05-28 00:13:52', NULL),
(5, 6, 'Barisal', '2021-05-28 00:14:00', NULL),
(6, 6, 'Patuakhali', '2021-05-28 00:14:08', NULL),
(7, 6, 'Pirojpur', '2021-05-28 00:14:17', NULL),
(8, 6, 'Jalkhathi', '2021-05-28 00:14:26', NULL),
(9, 9, 'Pabna', '2021-05-28 00:14:35', NULL),
(10, 9, 'Rajshahi', '2021-05-28 00:14:44', NULL),
(11, 7, 'Rangpur', '2021-05-28 00:14:52', NULL),
(12, 7, 'Kurigram', '2021-05-28 00:15:04', NULL),
(13, 5, 'Sylhet', '2021-05-28 00:15:25', NULL),
(14, 9, 'Natore', '2021-05-28 00:15:36', NULL),
(15, 3, 'Chittagong', '2021-05-28 00:15:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(2, 'Dhaka', '2021-05-28 00:12:14', NULL),
(3, 'Chittagong', '2021-05-28 00:12:18', NULL),
(4, 'Khulna', '2021-05-28 00:12:25', NULL),
(5, 'Sylhet', '2021-05-28 00:12:30', NULL),
(6, 'Barisal', '2021-05-28 00:12:35', NULL),
(7, 'Rangpur', '2021-05-28 00:12:40', NULL),
(8, 'Mymensingh', '2021-05-28 00:12:48', NULL),
(9, 'Rajshahi', '2021-05-28 00:12:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1715257762792240.png', '+8801700000000', 'Support@HomeServiceSolution.com', 'HomeServiceSolution', 'Pabna University Of Science & Technology,Pabna', 'www.facebook.com/HomeServiceSolution', 'www.twitter.com/HomeServiceSolution', 'www.linkedin.com/HomeServiceSolution', 'HomeServiceSolution', NULL, '2021-11-01 14:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_bn`, `subcategory_slug_en`, `subcategory_slug_bn`, `created_at`, `updated_at`) VALUES
(12, 11, 'AC Servicing', 'শীতাতপনিয়ন্ত্রক সেবা', 'ac-servicing', 'শীতাতপনিয়ন্ত্রক-সেবা', NULL, NULL),
(13, 11, 'AC Cooling Problem', 'এসি কুলিংয়ের সমস্যা', 'ac-cooling-problem', 'এসি-কুলিংয়ের-সমস্যা', NULL, NULL),
(14, 11, 'AC Installation & Uninstallation', 'এসি ইনস্টলেশন ও আনইনস্টল করা', 'ac-installation-&-uninstallation', 'এসি-ইনস্টলেশন-ও-আনইনস্টল-করা', NULL, NULL),
(15, 11, 'Buy AC with Free Installation', 'ফ্রি ইনস্টলেশন সহ এসি কিনুন', 'buy-ac-with-free-installation', 'ফ্রি-ইনস্টলেশন-সহ-এসি-কিনুন', NULL, NULL),
(16, 12, 'Branding Package', 'ব্র্যান্ডিং প্যাকেজ', 'branding-package', 'ব্র্যান্ডিং-প্যাকেজ', NULL, NULL),
(17, 12, 'Microwave Oven Repair Services', 'মাইক্রোওয়েভ ওভেন মেরামত পরিষেবা', 'microwave-oven-repair-services', 'মাইক্রোওয়েভ-ওভেন-মেরামত-পরিষেবা', NULL, NULL),
(18, 12, 'TV Repair Services', 'টিভি মেরামত সেবা', 'tv-repair-services', 'টিভি-মেরামত-সেবা', NULL, NULL),
(19, 12, 'Refrigerator Repair Services', 'ফ্রিজ মেরামত পরিষেবা', 'refrigerator-repair-services', 'ফ্রিজ-মেরামত-পরিষেবা', NULL, NULL),
(20, 12, 'Washing Machine Repair Services', 'ওয়াশিং মেশিন মেরামত পরিষেবা', 'washing-machine-repair-services', 'ওয়াশিং-মেশিন-মেরামত-পরিষেবা', NULL, NULL),
(21, 12, 'Kitchen Hood Repair Services', 'রান্নাঘর হুড মেরামত সেবা', 'kitchen-hood-repair-services', 'রান্নাঘর-হুড-মেরামত-সেবা', NULL, NULL),
(22, 12, 'IPS Repair Services', 'আইপিএস মেরামত সেবা', 'ips-repair-services', 'আইপিএস-মেরামত-সেবা', NULL, NULL),
(23, 12, 'Treadmill Repair', 'ট্রেডমিল মেরামত', 'treadmill-repair', 'ট্রেডমিল-মেরামত', NULL, NULL),
(24, 21, 'Plumbing & Sanitary Services', 'নদীর গভীরতানির্ণয় এবং স্যানিটারি পরিষেবাদি', 'plumbing-&-sanitary-services', 'নদীর-গভীরতানির্ণয়-এবং-স্যানিটারি-পরিষেবাদি', NULL, NULL),
(25, 21, 'Electricians for Electrical Service', 'বৈদ্যুতিক পরিষেবা জন্য বৈদ্যুতিন', 'electricians-for-electrical-service', 'বৈদ্যুতিক-পরিষেবা-জন্য-বৈদ্যুতিন', NULL, NULL),
(26, 20, 'Desktop Services', 'ডেস্কটপ পরিষেবা', 'desktop-services', 'ডেস্কটপ-পরিষেবা', NULL, NULL),
(27, 20, 'Laptop Servicing', 'ল্যাপটপ সার্ভিসিং', 'laptop-servicing', 'ল্যাপটপ-সার্ভিসিং', NULL, NULL),
(28, 20, 'CCTV Camera Servicing', 'সিসিটিভি ক্যামেরা সার্ভিসিং', 'cctv-camera-servicing', 'সিসিটিভি-ক্যামেরা-সার্ভিসিং', NULL, NULL),
(29, 19, 'Ambulance Service', 'অ্যাম্বুলেন্স পরিষেবা', 'ambulance-service', 'অ্যাম্বুলেন্স-পরিষেবা', NULL, NULL),
(30, 18, 'Monthly Driver Service', 'মাসিক ড্রাইভার পরিষেবা', 'monthly-driver-service', 'মাসিক-ড্রাইভার-পরিষেবা', NULL, NULL),
(31, 18, 'On Demand Driver', 'ডিমান্ড ড্রাইভারের উপর', 'on-demand-driver', 'ডিমান্ড-ড্রাইভারের-উপর', NULL, NULL),
(32, 17, 'Salon Services for Men', 'পুরুষদের জন্য সেলুন পরিষেবাদি', 'salon-services-for-men', 'পুরুষদের-জন্য-সেলুন-পরিষেবাদি', NULL, NULL),
(33, 17, 'Facial for Men', 'পুরুষদের জন্য ফেসিয়াল', 'facial-for-men', 'পুরুষদের-জন্য-ফেসিয়াল', NULL, NULL),
(34, 17, 'Pedicure & Manicure for Men', 'পুরুষদের জন্য পেডিকিউর এবং ম্যানিকিউর', 'pedicure-&-manicure-for-men', 'পুরুষদের-জন্য-পেডিকিউর-এবং-ম্যানিকিউর', NULL, NULL),
(35, 15, 'Cleaning Packages', 'প্যাকেজগুলি পরিষ্কার করা হচ্ছে', 'cleaning-packages', 'প্যাকেজগুলি-পরিষ্কার-করা-হচ্ছে', NULL, NULL),
(36, 15, 'Home Cleaning', 'বাড়ি পরিষ্কার করা', 'home-cleaning', 'বাড়ি-পরিষ্কার-করা', NULL, NULL),
(37, 15, 'Furniture Cleaning', 'আসবাবপত্র পরিষ্কার', 'furniture-cleaning', 'আসবাবপত্র-পরিষ্কার', NULL, NULL),
(38, 14, 'House Shifting Services', 'বাড়ি স্থানান্তর সেবা', 'house-shifting-services', 'বাড়ি-স্থানান্তর-সেবা', NULL, NULL),
(39, 14, 'Commercial Shifting Service', 'বাণিজ্যিক স্থানান্তর পরিষেবা', 'commercial-shifting-service', 'বাণিজ্যিক-স্থানান্তর-পরিষেবা', NULL, NULL),
(40, 14, 'Pickup & Truck Rental', 'পিকআপ এবং ট্রাক ভাড়া', 'pickup-&-truck-rental', 'পিকআপ-এবং-ট্রাক-ভাড়া', NULL, NULL),
(41, 13, 'Furniture', 'আসবাবপত্র', 'furniture', 'আসবাবপত্র', NULL, NULL),
(42, 13, 'Painting Services', 'পেন্টিং পরিষেবা', 'painting-services', 'পেন্টিং-পরিষেবা', NULL, NULL),
(43, 13, 'Carpentry Services', 'কার্পেন্ট্রি পরিষেবাদি', 'carpentry-services', 'কার্পেন্ট্রি-পরিষেবাদি', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_login`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Tahmid Hasan', 'tahmidhasanmunna@gmail.com', '01710231324', '2021-11-02 20:54:57', NULL, '$2y$10$umbIat6/DWOHceLx0rnjvumcCsWq0UsEdKIzPEJz8tbTrv1MFqYOi', NULL, NULL, NULL, NULL, '202105262322b834338199d37523281c73b277dbfcbe.jpg', '2021-05-10 00:27:49', '2021-11-02 14:54:57'),
(2, 'Maruf Bongobashi', 'maruf@dev.com', '01710231324', NULL, NULL, '$2y$10$ve0QJheZMHQHxyG0z4sTiObG6jW0Jxcr5BH5tn7LqfS4pGRrecHmy', NULL, NULL, 't8OTc9v3dCi8ZUYTGB7gxewzXmgi05g52OtRHee6DgA0xmFV2GzvT2qB2fVA', NULL, '202106061427qualit_work.png', '2021-05-10 05:40:08', '2021-06-06 08:27:46'),
(3, 'Mredul Jaman', 'mredul@dev.com', '01681827733', '2021-11-01 19:56:02', NULL, '$2y$10$Qi40bZc40pVCIhykhsCtqeZmcGIsG7sazGEtejaxTn0IeQ2UWfuRy', NULL, NULL, NULL, NULL, NULL, '2021-06-06 08:30:47', '2021-11-01 13:56:02'),
(4, 'Munzir Khan Rahi', 'rahi@dev.com', '01681827733', '2021-06-17 06:14:08', NULL, '$2y$10$iRXdaNIPupuwWPf3QYzBdOe4IqKbv1024utHt3IezmiRfBcBr9F1e', NULL, NULL, NULL, NULL, NULL, '2021-06-17 00:11:42', '2021-06-17 00:14:08'),
(5, 'Gazi Alamin', 'alamin@dev.com', '01681827733', NULL, NULL, '$2y$10$jAEHCbc3hPZpfwgxIepTZuqk0vu6oMukddTORfBcl01k9qxVFBuvu', NULL, NULL, NULL, NULL, NULL, '2021-06-17 00:14:39', '2021-06-17 00:14:39'),
(6, 'Saiful islam', 'saiful@dev.com', '01681827733', '2021-06-17 08:10:37', NULL, '$2y$10$bFnt5IKnkKyx1sevQF.bZuIzn3CE6KEwrCsIiLsxkg4UvrOUMoOL6', NULL, NULL, NULL, NULL, NULL, '2021-06-17 00:17:11', '2021-06-17 02:10:37'),
(7, 'tahmid', 'firstaffiliatemarketingproject@gmail.com', '01681827733', NULL, NULL, '$2y$10$znWevvsXo9LH6OQR0.ag5.YyheyMJy4JG7E3roRZdCPn7mRYAqQLy', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:02:32', '2021-11-01 13:02:32'),
(8, 'rasel@gmail.com', 'rasel@gmail.com', '01681827733', '2021-11-02 02:22:14', NULL, '$2y$10$CnhTrBNrI7GCtOt9kw480OK3BWBM13Xmte/Aomr/SzmdhCOC3NWLq', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:12:20', '2021-11-01 20:22:14'),
(9, 'afadfsd', 'adsafefc@gmail.com', '01681827733', NULL, NULL, '$2y$10$JXneFVg6RA0x8IAPmW9XquhFlSeVtMhlo53x7dx1Ty3KlZPBov5Ui', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:17:46', '2021-11-01 13:17:46'),
(10, 'asikvai', 'asikvai@gmail.com', '01681827733', '2021-11-01 19:18:26', NULL, '$2y$10$PklAkIif6p5RJq97WokueeIDP3L7Hz2cBt.cOEAvb6BeS0KjMrBP6', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:18:25', '2021-11-01 13:18:26'),
(11, 'mredul@dev.com', 'sfsvfds@gmail.com', '01681827733', NULL, NULL, '$2y$10$nUFDMSwYASTzwdaH1ApHkeR5CqhwHNy78xo7qEAWaRZGNLD9GJQvG', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:22:19', '2021-11-01 13:22:19'),
(12, 'adaefafe', 'dafeafasf@gmail.com', '01681827733', '2021-11-01 19:22:42', NULL, '$2y$10$Y04BUo7dngt.EgZeGbwnAO.WYabCvSN24SdH56vhDHdz45WHZA3Re', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:22:41', '2021-11-01 13:22:42'),
(13, 'dfhjwefhjbf', 'faefjnajfn@gmail.com', '01681827733', '2021-11-01 19:25:21', NULL, '$2y$10$IZat8Kd7JnWGUbA2Uyy4TuqredtCi0DikHJqzxVeZAsfXQ5fQg6qq', NULL, NULL, NULL, NULL, NULL, '2021-11-01 13:24:33', '2021-11-01 13:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `service_id`, `created_at`, `updated_at`) VALUES
(13, 6, 7, '2021-06-17 01:37:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_items`
--
ALTER TABLE `booking_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_items_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_service_id_foreign` (`service_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ship_cities`
--
ALTER TABLE `ship_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `booking_items`
--
ALTER TABLE `booking_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ship_cities`
--
ALTER TABLE `ship_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_items`
--
ALTER TABLE `booking_items`
  ADD CONSTRAINT `booking_items_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
