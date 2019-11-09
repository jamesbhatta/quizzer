-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 01:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `weight`, `course_id`, `deleted_at`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Computer Fundamentals', 4, 1, NULL, 1, 2, NULL, '2019-07-26 01:48:24', '2019-08-07 11:32:54'),
(2, 'Operating System', 4, 1, NULL, 3, 4, NULL, '2019-08-07 11:11:20', '2019-08-07 11:11:20'),
(3, 'Word Processing', 10, 1, NULL, 5, 6, NULL, '2019-08-07 11:11:33', '2019-11-04 04:35:05'),
(4, 'Electronic Spreadsheet', 10, 1, NULL, 7, 8, NULL, '2019-08-07 11:11:53', '2019-08-07 11:11:53'),
(5, 'Database Management System', 6, 1, NULL, 9, 10, NULL, '2019-08-07 11:12:21', '2019-08-07 11:12:21'),
(6, 'Presentation System', 2, 1, NULL, 11, 12, NULL, '2019-08-07 11:54:52', '2019-08-07 11:54:52'),
(7, 'Web Page Designing', 2, 7, NULL, 13, 14, NULL, '2019-08-07 11:59:39', '2019-08-08 11:49:41'),
(8, 'Web Page Designing', 2, 1, NULL, 15, 16, NULL, '2019-08-07 11:59:39', '2019-08-07 11:59:39'),
(9, 'Legislations & IT in Nepal', 4, 1, NULL, 17, 18, NULL, '2019-08-07 11:59:58', '2019-08-07 11:59:58'),
(10, 'Computer Fundamental', 14, 7, NULL, 19, 20, NULL, '2019-08-07 12:03:24', '2019-08-07 12:03:24'),
(11, 'Operating System', 4, 7, NULL, 21, 22, NULL, '2019-08-07 12:03:56', '2019-08-07 12:03:56'),
(12, 'Word Processing', 14, 7, NULL, 23, 24, NULL, '2019-08-07 12:04:19', '2019-08-07 12:04:19'),
(13, 'Mathematics', 20, 8, NULL, 25, 26, NULL, '2019-08-10 22:28:04', '2019-11-04 04:35:26'),
(14, 'English', 20, 8, '2019-10-31 20:29:30', 27, 28, NULL, '2019-08-10 22:29:26', '2019-10-31 20:29:30'),
(16, 'General Awareness', 20, 8, '2019-08-14 23:09:15', 31, 32, NULL, '2019-08-10 22:30:42', '2019-08-14 23:09:15'),
(17, 'Economics and accounting', 25, 8, '2019-08-14 23:08:46', 33, 34, NULL, '2019-08-10 22:31:05', '2019-08-14 23:08:46'),
(20, 'test chapter', 4, 11, NULL, 35, 36, NULL, '2019-11-06 02:46:39', '2019-11-06 02:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `chapter_id`, `excerpt`, `content`, `created_at`, `updated_at`) VALUES
(1, 12, 'Books are man’s best friends. Books are portable and so they are easy to carry around. And so books can be read at any time night or day, while travelling on a bus or train or flight, and at meal time too. Books are published in many languages and in varied genres. There are books in fiction and non-fiction categories. Each of these categories has many different sections and genres, and there are many thousands of titles in each type. Every book title has an International Standard Book Number (ISBN) that is unique to it, and helps in identifying it. Today books are available as web versions too so that they can be read on the internet. They may be read on the modern kindle or on the computer. And books are available in audio versions too so that you can hear an entire book being read out aloud.', '<p>Books are man&rsquo;s best friends. Books are portable and so they are easy to carry around. And so books can be read at any time night or day, while travelling on a bus or train or flight, and at meal time too. Books are published in many languages and in varied genres. There are books in fiction and non-fiction categories. Each of these categories has many different sections and genres, and there are many thousands of titles in each type. Every book title has an International Standard Book Number (ISBN) that is unique to it, and helps in identifying it. Today books are available as web versions too so that they can be read on the internet. They may be read on the modern kindle or on the computer. And books are available in audio versions too so that you can hear an entire book being read out aloud.</p>\r\n\r\n<h2>LONG AND SHORT PARAGRAPHS ON BOOKS</h2>\r\n\r\n<p>You will find here below a number of short paragraphs on the topic Books of varying word lengths.</p>\r\n\r\n<p>We hope these paragraphs on Books will help students in completing their school assignments.</p>\r\n\r\n<p>These will also help children write and read out paragraphs in simple words and with small sentences.</p>\r\n\r\n<p>Students can select any paragraph on Books according to their particular requirement.</p>\r\n\r\n<h3>PARAGRAPH ON BOOKS &ndash; 1 (100 WORDS)</h3>\r\n\r\n<p>Books are an important part of our life. We read many kinds of books. We study text books at school that are part of our syllabus.</p>\r\n\r\n<p>We also have story books that we read for leisure and fun. We can get them from the school library. We can also buy them from bookshops. Books are printed on paper, and can have pictures too that make them interesting. We can read books on the computer as well.</p>\r\n\r\n<p>I love reading children&rsquo;s stories published in colourful books, as they are beautifully presented. I have a nice collection of story books at home.</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h3>PARAGRAPH ON BOOKS &ndash; 2 (150 WORDS)</h3>\r\n\r\n<p>There are many different kinds of books that are published each year. These are the new titles available for us to read. Besides these, there are books that have been published through the years. Together, there are millions of books available throughout the world in as many languages as are spoken by people.</p>\r\n\r\n<p>There are different genres in which books are published. There are fiction and non-fiction categories in books, and each of these categories has many different genres of books.</p>\r\n\r\n<p>The academic books we study at school belong to the text book category. We study them to complete our syllabus and pass the examinations at the end of each academic session.</p>\r\n\r\n<p>There are other books that we read for our pleasure and enrichment. We read story books of different types. There are comedy, horror, detective and thriller stories in prose, plays and poetry forms. Books are our best friends.</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h3>PARAGRAPH ON BOOKS &ndash; 3 (200 WORDS)</h3>\r\n\r\n<p>Books are published in many different languages, and are read by people all over the world. Books are printed on paper, and are easy to carry around. So they can be read anywhere and at anytime. They can be read while travelling. We also have nice bedside books that we read before going to sleep.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Printed books are made available in libraries for reading. Books are also sold in book shops, where hundreds of recently published titles are usually displayed. Books are now available on the internet too. So they can be read on the computer or on the kindle. These are easy to read too. Books are also sometimes illustrated with beautiful colour pictures. Such pictorial books are interestingly designed and presented.</p>\r\n\r\n<p>I love reading fantasy stories like the Harry Potter series authored by JK Rowling. I have read all seven books in the Harry Potter series. JK Rowling is my favourite author, and I have read some of the other books written by her too. I bought all of these books, and they are part of the small collection of books that I have at home. Reading is my hobby, and I keep my books neat and clean.</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h3>PARAGRAPH ON BOOKS &ndash; 4 (250 WORDS)</h3>\r\n\r\n<p>Hundreds of books are published each year in many different languages around the world. Books are printed on paper, and are portable. They can be carried around anywhere, and be read at anytime.</p>\r\n\r\n<p>Books are a storehouse of knowledge. There are academic books on the various subjects. There are textbooks for the different levels of study right from school through college and on for higher studies.</p>\r\n\r\n<p>There are books in the fiction and non-fiction categories, and there are several genres in each of these categories. There are books in genres like health, nature, environment, spirituality, religion, self-help and history, besides many others, in the non-fiction category. Fiction may belong to horror, romance, comedy, thriller or fantasy genres, and may be in prose, poetry or drama forms. Books cater to different tastes and preferences of the people. Books are also translated into various languages so that knowledge and literary wealth is shared by everyone. Now books are available on the internet too.</p>\r\n\r\n<p>Books are our best friends. When I am sick and in bed, unable to play, books give me company. I also have nice bedside books that I read before I fall asleep at night. I love to read detective and fantasy stories in the English language. I like reading old books like the Sherlock Holmes series by Arthur Conan Doyle. I also like reading short stories in Tamil and Hindi. Sometimes when I am reading I get so enchanted and engrossed that I even forget to eat my dinner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>PARAGRAPH ON BOOKS &ndash; 5 (300 WORDS)</h3>\r\n\r\n<p>Books are our best friends. When we are lonely or unhappy a book can cheer us up. It can change our view of and give meaning to life. Books are a treasure house of knowledge. Through words and pictures books can take us anywhere in the universe. We can learn about the world of matter and spirit in reality and through the imagination of the author.</p>\r\n\r\n<p>We read many different books. There are books that belong to the categories of fiction and non-fiction. There are books that we study in school. These are text books. We study them to acquire knowledge on the various subjects like science, mathematics, geography and history, besides others. There are also reference and academic books on the various subjects that are scholastic in nature.</p>\r\n\r\n<p>There are books that we read for pleasure and entertainment too or for the enrichment of our lives. There are books on travels, adventure, history, spirituality, nature and health that are non-fiction.</p>\r\n\r\n<p>We also read works of fiction. The stories may belong to many different genres like comedy, romance, horror, fantasy, thriller and detective. Literary works in fiction could be in the form of prose or drama or poetry.</p>\r\n\r\n<p>Books are published in many different languages. Books are easy to carry around, and so they can be read anywhere and at any time. Books are also available for reading on the internet.</p>\r\n\r\n<p>I enjoy reading the abridged versions of the plays of Shakespeare. I have read Merchant of Venice, and As You Like it, a nice comedy. I also enjoy reading poetry by old British poets like Oliver Goldsmith, Robert Browning and William Wordsworth. I especially like to read the poem Pied Piper of Hamelin by Robert Browning. It is actually a poem that Browning wrote for his friend&rsquo;s little son.</p>', '2019-10-31 01:16:37', '2019-10-31 20:30:12'),
(3, 3, 'A word processor is software or a device that allows users to create, edit, and print documents. It enables you to write text, store it electronically, display it on a screen, modify it by entering commands and characters from the keyboard, and print it. \r\n\r\nOf all computer applications, word processing is the most common. Today, most word processors are delivered either as a cloud service or as software that users can install on a PC or mobile device.', '<p>Let us consider an office scene. Many letters are typed in the office. The officer dictates a letter. The typist first types a draft copy of the letter. The officer goes through it to check mistakes regarding spelling errors, missing words, etc. and suggests corrections. The typist changes the letter as suggested by the officer. This is a simple example of word processing.</p>\r\n\r\n<p>There are many software packages to do the job of word processing. Some of them work in DOS environment. Example are WordStar, Word Perfect and Professional Write. But in these days working in WINDOWS is becoming more and more popular. So let us consider software for word processing which works in WINDOWS. Our choice is MS-WORD because it is the most popular software in these days.</p>\r\n\r\n<p>MS-WORD is a part of the bigger package called MS OFFICE, which can do much more than word processing. In fact when you open up MS OFFICE you will find four main components in it. They are MS-WORD (for word processing), MS EXCEL (for spreadsheet), MS ACCESS (for database management) and MS POWERPOINT (for presentation purposes). However, we will limit ourselves to MS-WORD only in this lesson.</p>\r\n\r\n<p><strong><strong>WHAT IS WORD-PROCESSING?</strong></strong></p>\r\n\r\n<p>Word Processor is a Software package that enables you to create, edit, print and save documents for future retrieval and reference. Creating a document involves typing by using a keyboard and saving it. Editing a document involves correcting the spelling mistakes, if any, deleting or moving words sentences or paragraphs.</p>\r\n\r\n<p><strong><strong>(a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Advantages of Word Processing</strong></strong></p>\r\n\r\n<p>One of the main advantages of a word processor over a conventional typewriter is that a word processor enables you to make changes to a document without retyping the entire document.</p>\r\n\r\n<p><strong>(b)&nbsp;&nbsp;&nbsp;</strong><strong><strong>&nbsp;&nbsp;&nbsp;Features of Word Processing</strong></strong></p>\r\n\r\n<p>Most Word Processor available today allows more than just creating and editing documents. They have wide range of other tools and functions, which are used in formatting the documents. The following are the main features of a Word Processor</p>\r\n\r\n<p>i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text is typing into the computer, which allows alterations to be made easily.</p>\r\n\r\n<p>ii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Words and sentences can be inserted, amended or deleted.</p>\r\n\r\n<p>iii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paragraphs or text can be copied /moved throughout the document.</p>\r\n\r\n<p>iv)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Margins and page length can be adjusted as desired.</p>\r\n\r\n<p>v)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spelling can be checked and modified through the spell check facility.</p>\r\n\r\n<p>vi)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multiple document/files can be merged.</p>\r\n\r\n<p>vii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multiple copies of letters can be generated with different addresses through</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;the mail-merge facility.</p>\r\n\r\n<p><strong><strong>(c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Some Common Word Processing Packages</strong></strong></p>\r\n\r\n<p>The followings are examples of some popular word processor available</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Softword</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WordStar</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Word perfect</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Microsoft word</p>\r\n\r\n<p><strong><strong>IMPORTANT FEATURES OF MS-WORD</strong></strong></p>\r\n\r\n<p>Ms-Word not only supports word processing features but also DTP features. Some of the important features of Ms-Word are listed below:</p>\r\n\r\n<p>i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using word you can create the document and edit them later, as and when required, by adding more text, modifying the existing text, deleting/moving some part of it.</p>\r\n\r\n<p>ii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changing the size of the margins can reformat complete document or part of text.</p>\r\n\r\n<p>iii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font size and type of fonts can also be changed. Page numbers and Header and Footer can be included.</p>\r\n\r\n<p>iv)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spelling can be checked and correction can be made automatically in the entire document. Word count and other statistics can be generated.</p>\r\n\r\n<p>v)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text can be formatted in columnar style as we see in the newspaper. Text boxes can be made.</p>\r\n\r\n<p>vi)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tables can be made and included in the text.</p>\r\n\r\n<p>vii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Word also allows the user to mix the graphical pictures with the text. Graphical pictures can either be created in word itself or can be imported from outside like from Clip Art Gallery.</p>\r\n\r\n<p>viii)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Word also provides the mail-merge facility.&nbsp;&nbsp;</p>\r\n\r\n<p>ix)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Word also has the facility of macros. Macros can be either attached to some function/special keys or to a tool bar or to a menu.</p>\r\n\r\n<p>x)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It also provides online help of any option.</p>\r\n\r\n<p>&nbsp;</p>', '2019-11-04 03:28:59', '2019-11-04 03:36:14'),
(5, 20, 'Excerpt', '<p>Some content</p>', '2019-11-06 02:47:00', '2019-11-06 02:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT 1,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `visible`, `_lft`, `_rgt`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Computer Operator 5th Level', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, 2, NULL, NULL, '2019-07-26 01:42:40', '2019-11-01 00:02:56'),
(2, 'Some New Course', NULL, 1, 3, 4, NULL, '2019-11-04 04:25:44', '2019-07-27 06:48:35', '2019-11-04 04:25:44'),
(3, 'I am published', NULL, 1, 5, 6, NULL, '2019-11-04 04:25:37', '2019-07-27 07:06:29', '2019-11-04 04:25:37'),
(7, 'Computer Operator 4th Level', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 13, 14, NULL, NULL, '2019-08-07 12:00:49', '2019-11-04 10:44:54'),
(8, 'Bachelor of Business Administration 2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 15, 16, NULL, NULL, '2019-08-10 22:27:44', '2019-11-04 10:45:02'),
(11, 'Test Course', 'Just a test', 1, 17, 18, NULL, NULL, '2019-11-06 02:45:41', '2019-11-06 02:45:57'),
(12, 'delelte it', 'sfa', 1, 19, 20, NULL, NULL, '2019-11-06 02:53:07', '2019-11-06 02:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2019-11-04 09:49:02', '2019-11-04 09:49:02'),
(2, 3, 7, '2019-11-04 10:45:21', '2019-11-04 10:45:21');

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
(7, '2019_07_24_155619_create_courses_table', 2),
(8, '2019_07_25_170003_create_chapters_table', 3),
(14, '2019_08_08_042632_create_questions_table', 4),
(15, '2019_08_08_155622_create_options_table', 5),
(16, '2019_08_15_060825_create_contents_table', 6),
(17, '2019_11_01_060216_create_libraries_table', 7),
(20, '2019_11_04_022512_create_results_table', 8),
(23, '2019_11_04_063911_create_settings_table', 9),
(24, '2019_11_04_075712_add_full_marks_to_results', 10);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `answer`, `is_correct`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'Auto correct', '1', 3, NULL, NULL),
(2, 'Auto format', NULL, 3, NULL, NULL),
(3, 'Auto text', NULL, 3, NULL, NULL),
(4, 'All of the above', NULL, 3, NULL, NULL),
(13, 'Spelling suggestions', NULL, 6, NULL, NULL),
(14, 'Grammer Option', NULL, 6, NULL, NULL),
(15, 'Synomyms & antonyms words', '1', 6, NULL, NULL),
(16, 'All of the above', NULL, 6, NULL, NULL),
(17, 'Normal view', NULL, 7, NULL, NULL),
(18, 'Page layout view', '1', 7, NULL, NULL),
(19, 'Print layout view', NULL, 7, NULL, NULL),
(20, 'Draft view', NULL, 7, NULL, NULL),
(21, 'Watermark', '1', 8, NULL, NULL),
(22, 'Style', NULL, 8, NULL, NULL),
(23, 'Background Image', NULL, 8, NULL, NULL),
(24, 'Gutter', NULL, 8, NULL, NULL),
(25, '8.5x11 inches', NULL, 9, NULL, NULL),
(26, '8.5x11.5 inches', NULL, 9, NULL, NULL),
(27, '8.27x11.69 inches', '1', 9, NULL, NULL),
(28, '8.5x14 inches', NULL, 9, NULL, NULL),
(29, '<li>', NULL, 10, NULL, NULL),
(30, '<ul>', NULL, 10, NULL, NULL),
(31, '<dl>', NULL, 10, NULL, NULL),
(32, 'None of above', '1', 10, NULL, NULL),
(33, 'picture', NULL, 11, NULL, NULL),
(34, 'image', NULL, 11, NULL, NULL),
(35, 'img', '1', 11, NULL, NULL),
(36, 'src', NULL, 11, NULL, NULL),
(37, '400', NULL, 12, NULL, NULL),
(38, '495', '1', 12, NULL, NULL),
(39, '500', NULL, 12, NULL, NULL),
(40, '525', NULL, 12, NULL, NULL),
(41, '<strong>', '1', 13, NULL, NULL),
(42, '<dar>', NULL, 13, NULL, NULL),
(43, '<black>', NULL, 13, NULL, NULL),
(44, '<emp>', NULL, 13, NULL, NULL),
(45, '<html>', NULL, 14, NULL, NULL),
(46, '<head>', '1', 14, NULL, NULL),
(47, '<title>', NULL, 14, NULL, NULL),
(48, '<body>', NULL, 14, NULL, NULL),
(49, '<hr>', '1', 15, NULL, NULL),
(50, '<line>', NULL, 15, NULL, NULL),
(51, '<line direction=\"horizontal\">', NULL, 15, NULL, NULL),
(52, '<tr>', NULL, 15, NULL, NULL),
(53, '<head>', NULL, 16, NULL, NULL),
(54, '<document>', NULL, 16, NULL, NULL),
(55, '<html>', '1', 16, NULL, NULL),
(56, '<title>', NULL, 16, NULL, NULL),
(57, 'Ctrl + X', NULL, 17, NULL, NULL),
(58, 'Ctrl + Alt +C', NULL, 17, NULL, NULL),
(59, 'Ctrl + C', '1', 17, NULL, NULL),
(60, 'Shift + C', NULL, 17, NULL, NULL),
(61, 'F5', NULL, 18, NULL, NULL),
(62, 'Shift + F5', '1', 18, NULL, NULL),
(63, 'Ctrl + F5', NULL, 18, NULL, NULL),
(64, 'Alt + F5', NULL, 18, NULL, NULL),
(65, 'Titles', NULL, 19, NULL, NULL),
(66, 'Lists', NULL, 19, NULL, NULL),
(67, 'Charts', NULL, 19, NULL, NULL),
(68, 'Animations', '1', 19, NULL, NULL),
(69, 'Task Pane', '1', 20, NULL, NULL),
(70, 'Task Bar', NULL, 20, NULL, NULL),
(71, 'Control Panel', NULL, 20, NULL, NULL),
(72, 'None of above', NULL, 20, NULL, NULL),
(73, 'Control Toolbox', NULL, 21, NULL, NULL),
(74, 'Slides', '1', 21, NULL, NULL),
(75, 'Revisions', NULL, 21, NULL, NULL),
(76, 'Reviewing', NULL, 21, NULL, NULL),
(77, 'radio button', NULL, 22, NULL, NULL),
(78, 'textarea', NULL, 22, NULL, NULL),
(79, 'checkbox', '1', 22, NULL, NULL),
(80, 'radio or checkbox', NULL, 22, NULL, NULL),
(81, 'text', NULL, 23, NULL, NULL),
(82, 'textarea', NULL, 23, NULL, NULL),
(83, 'url', NULL, 23, NULL, NULL),
(84, 'password', '1', 23, NULL, NULL),
(85, 'Ctrl+N', NULL, 24, NULL, NULL),
(86, 'Ctrl+S', NULL, 24, NULL, NULL),
(87, 'Ctrl+M', '1', 24, NULL, NULL),
(88, 'All of above', NULL, 24, NULL, NULL),
(89, 'button', NULL, 25, NULL, NULL),
(90, 'Submit', '1', 25, NULL, NULL),
(91, 'Reset', NULL, 25, NULL, NULL),
(92, 'radio', NULL, 25, NULL, NULL),
(93, 'keep an account of money spent', NULL, 26, NULL, NULL),
(94, 'do a computer search in media center', NULL, 26, NULL, NULL),
(95, 'maintain an inventory', NULL, 26, NULL, NULL),
(96, 'type a biography', '1', 26, NULL, NULL),
(97, 'input type=\"text\" edit=\"false\"', NULL, 27, NULL, NULL),
(98, 'input type=\"text\" editable=\"false\"', NULL, 27, NULL, NULL),
(99, 'input type=\"text\" readonly=\"yes\"', '1', 27, NULL, NULL),
(100, 'input type=\"text\" readonly', NULL, 27, NULL, NULL),
(101, 'Status bar', NULL, 28, NULL, NULL),
(102, 'Tool bar', '1', 28, NULL, NULL),
(103, 'Menu bar', NULL, 28, NULL, NULL),
(104, 'Title bar', NULL, 28, NULL, NULL),
(105, '$', '1', 29, NULL, NULL),
(106, '%', NULL, 29, NULL, NULL),
(107, '^', NULL, 29, NULL, NULL),
(108, '&', NULL, 29, NULL, NULL),
(109, 'execute', NULL, 30, NULL, NULL),
(110, 'JSDynamic', NULL, 30, NULL, NULL),
(111, 'eval', NULL, 30, NULL, NULL),
(112, 'evaluate', '1', 30, NULL, NULL),
(113, 'Need for the commodity', NULL, 31, NULL, NULL),
(114, 'Desire for the commodity', NULL, 31, NULL, NULL),
(115, 'Amount of the commodity demanded at a particular price and at a particular time', '1', 31, NULL, NULL),
(116, 'Quantity demanded of that commodity', NULL, 31, NULL, NULL),
(117, 'Zero', NULL, 32, NULL, NULL),
(118, 'Infinite', '1', 32, NULL, NULL),
(119, 'Equal to one', NULL, 32, NULL, NULL),
(120, 'Greater than zero but less than infinity', NULL, 32, NULL, NULL),
(121, 'Quantity demanded to a change in income', '1', 33, NULL, NULL),
(122, 'Quantity demanded to a change in price', NULL, 33, NULL, NULL),
(123, 'Price to a change in income', NULL, 33, NULL, NULL),
(124, 'Income to a change in quantity demanded', NULL, 33, NULL, NULL),
(125, 'Remains constant', NULL, 34, NULL, NULL),
(126, 'Decreases', '1', 34, NULL, NULL),
(127, 'Increases', NULL, 34, NULL, NULL),
(128, 'First decreases and then rises', NULL, 34, NULL, NULL),
(129, 'Real cost', NULL, 35, NULL, NULL),
(130, 'Production cost', NULL, 35, NULL, NULL),
(131, 'Physical cost', NULL, 35, NULL, NULL),
(132, 'Opportunity cost', '1', 35, NULL, NULL),
(137, 'Supply of money', NULL, 37, NULL, NULL),
(138, 'Purchasing power of money', NULL, 37, NULL, NULL),
(139, 'Velocity of money', '1', 37, NULL, NULL),
(140, 'Value of money', NULL, 37, NULL, NULL),
(141, 'individual characters', NULL, 38, NULL, NULL),
(142, 'paragraphs', NULL, 38, NULL, NULL),
(143, 'complete documents', NULL, 38, NULL, NULL),
(144, 'all of these', '1', 38, NULL, NULL),
(145, 'Cost and income for managers', NULL, 39, NULL, NULL),
(146, 'Company\'s tax liability for a particular year', NULL, 39, NULL, NULL),
(147, 'Financial conditions of an institutions', NULL, 39, NULL, NULL),
(148, 'All of the above', '1', 39, NULL, NULL),
(149, '.wrd', NULL, 40, NULL, NULL),
(150, '.xls', NULL, 40, NULL, NULL),
(151, '.jpg', NULL, 40, NULL, NULL),
(152, '.doc', '1', 40, NULL, NULL),
(153, 'the Chinook', NULL, 41, NULL, NULL),
(154, 'the foehn', '1', 41, NULL, NULL),
(155, 'the sirocco', NULL, 41, NULL, NULL),
(156, 'the loo', NULL, 41, NULL, NULL),
(157, '13 वटा', '1', 42, NULL, NULL),
(158, '14 वटा', NULL, 42, NULL, NULL),
(159, '15 वटा', NULL, 42, NULL, NULL),
(160, '16 वटा', NULL, 42, NULL, NULL),
(161, 'हिमशिला ( Iceburg )', NULL, 43, NULL, NULL),
(162, 'हिमोड ( Moraine )', '1', 43, NULL, NULL),
(163, 'हिमतत्व ( Ice Element )', NULL, 43, NULL, NULL),
(164, 'कुनै पनि होइन ( Non of Them )', NULL, 43, NULL, NULL),
(165, '64 MW', NULL, 44, NULL, NULL),
(166, '65 MW', NULL, 44, NULL, NULL),
(167, '53 MW', NULL, 44, NULL, NULL),
(168, '36 MW', '1', 44, NULL, NULL),
(169, 'Bishnupal', NULL, 45, NULL, NULL),
(170, 'Rajpal', NULL, 45, NULL, NULL),
(171, 'Devpal', '1', 45, NULL, NULL),
(172, 'Dharmapal', NULL, 45, NULL, NULL),
(177, 'Operating System', '1', 47, NULL, NULL),
(178, 'Open Source', NULL, 47, NULL, NULL),
(179, 'Other Devices', NULL, 47, NULL, NULL),
(180, 'Optical Drive', NULL, 47, NULL, NULL),
(189, 'correct ans', '1', 50, NULL, NULL),
(190, 'something', NULL, 50, NULL, NULL),
(191, 'more', NULL, 50, NULL, NULL),
(192, 'nothing', NULL, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `chapter_id`, `created_at`, `updated_at`) VALUES
(3, 'The word processing feature that makes the correction while you type is ...', 12, '2019-08-08 13:26:29', '2019-08-08 13:26:29'),
(6, 'Thesarus too in MS-Word is used for ...', 12, '2019-08-08 13:50:22', '2019-08-08 13:50:22'),
(7, 'In which view Headers and Footers are available?', 12, '2019-08-08 19:30:24', '2019-08-08 19:30:24'),
(8, 'What do you call a faint image that you add to the background of a document report?', 12, '2019-08-09 10:27:28', '2019-08-09 10:27:28'),
(9, 'A4 size paper is:', 12, '2019-08-09 10:39:10', '2019-08-09 10:39:10'),
(10, 'The tag used for ordered list is', 8, '2019-08-10 22:23:02', '2019-08-10 22:23:02'),
(11, 'A webpage displays a picture. What﻿﻿﻿ ﻿﻿tag ﻿﻿﻿﻿﻿was used to display that picture?', 8, '2019-08-10 22:25:50', '2019-08-10 22:25:50'),
(12, 'A man has 12 friends. In how many ways he can invite 8 of them?', 13, '2019-08-10 22:39:00', '2019-08-10 22:39:00'),
(13, '. <b> tag makes the enclosed text bold. What is other tag to make text bold?', 8, '2019-08-10 22:47:23', '2019-08-10 22:47:23'),
(14, '3. Tags and text that are not directly displayed on the page are written in _____ section.', 8, '2019-08-10 22:50:59', '2019-08-10 22:50:59'),
(15, 'Which tag inserts a line horizontally on your web page?', 8, '2019-08-10 22:53:02', '2019-08-10 22:53:02'),
(16, 'What should be the first tag in any HTML document?', 8, '2019-08-10 22:54:52', '2019-08-10 22:54:52'),
(17, 'Which is correct key for copy text?', 12, '2019-08-11 22:09:39', '2019-08-11 22:09:39'),
(18, 'Which key is correct to show presentation from current slide?', 6, '2019-08-11 22:15:25', '2019-08-11 22:15:25'),
(19, 'Which of the following section does not exist in a slide layout?', 6, '2019-08-11 22:20:15', '2019-08-11 22:20:15'),
(20, '________ controls all the main slide control tasks for your presentation?', 6, '2019-08-11 22:27:13', '2019-08-11 22:27:13'),
(21, 'Which of the following cannot be toggled from View >> Toolbars?', 6, '2019-08-11 22:29:52', '2019-08-11 22:29:52'),
(22, 'Which input control is better suited for allowing users to make multiple selections?', 8, '2019-08-11 22:29:59', '2019-08-11 22:29:59'),
(23, 'Which input control is designed to allow users to enter secure information in a way that keeps others from seeing what is typed?', 8, '2019-08-11 22:31:57', '2019-08-11 22:31:57'),
(24, 'Which short cut key inserts a new slide in current presentation?', 6, '2019-08-11 22:34:16', '2019-08-11 22:34:16'),
(25, 'Which input control posts form data to a server?', 8, '2019-08-11 22:34:31', '2019-08-11 22:34:31'),
(26, 'A word processor would most likely be used to do', 12, '2019-08-11 22:38:56', '2019-08-11 22:38:56'),
(27, 'Which of the following declarations are valid ways to make a text control non-editable?', 8, '2019-08-11 22:40:41', '2019-08-11 22:40:41'),
(28, 'Which can be used for quick access to commonly used commands and tools?', 12, '2019-08-11 22:41:20', '2019-08-11 22:41:20'),
(29, 'Which of the following regular expression characters denote the end of the string?', 8, '2019-08-11 22:44:02', '2019-08-11 22:44:02'),
(30, 'Which function should never be used to run JavaScript?', 8, '2019-08-11 22:47:55', '2019-08-11 22:47:55'),
(31, 'Demand for a commodity refers to:', 17, '2019-08-12 22:01:35', '2019-08-12 22:01:35'),
(32, 'The horizontal demand curve parallel to x-axis implies that the elasticity of demand is:', 17, '2019-08-12 22:02:51', '2019-08-12 22:02:51'),
(33, 'Income elasticity of demand is defined as the responsiveness of:', 17, '2019-08-12 22:03:40', '2019-08-12 22:03:40'),
(34, 'In the short run, when the output of a firm increases, its average fixed cost:', 17, '2019-08-12 22:04:42', '2019-08-12 22:04:42'),
(35, 'The cost of one thing in terms of the alternative given up is called:', 17, '2019-08-12 22:05:52', '2019-08-12 22:05:52'),
(37, 'Number of times a unit of money changes hands in the course of a year is called_______', 17, '2019-08-12 22:07:26', '2019-08-12 22:07:26'),
(38, 'In modern computer, word processors allow users to control formats of', 3, '2019-08-12 22:09:19', '2019-08-12 22:09:19'),
(39, 'Accounting provides information on', 17, '2019-08-12 22:11:01', '2019-08-12 22:11:01'),
(40, 'Extension of MS-Word file is', 3, '2019-08-12 22:12:53', '2019-08-12 22:12:53'),
(41, 'The tertiary winds on the north of the Alps (Europe) are called', 16, '2019-08-12 22:18:19', '2019-08-12 22:18:19'),
(42, 'चिनको सिमालाइ मात्र छुने जिल्ला कतिवटा छन् ?', 16, '2019-08-12 22:19:29', '2019-08-12 22:19:29'),
(43, 'हिमनदीले बगाएर ल्याएको माटो, बालुवा, ढुंगा, झारपात आदि पदार्थलाई के भनिन्छ ?', 16, '2019-08-12 22:20:55', '2019-08-12 22:20:55'),
(44, 'भोटेकोशी जलबिध्युत आयोजनाको उत्पादन क्षमता ..... मेगावाट रहेको छ ।', 16, '2019-08-12 22:23:22', '2019-08-12 22:23:22'),
(45, 'सम्राट अशोक को छोरी चारुमती को बिबाह को सँग भएको थियो ?', 16, '2019-08-12 22:24:17', '2019-08-12 22:24:17'),
(47, 'What is the full form of OS in computer?', 11, '2019-11-03 12:45:07', '2019-11-03 12:45:07'),
(50, 'I am a sample question', 20, '2019-11-06 02:47:27', '2019-11-06 02:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `percentage` double(8,2) NOT NULL,
  `time_taken` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `unanswered` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `course_id`, `user_id`, `percentage`, `time_taken`, `score`, `correct`, `wrong`, `unanswered`, `total_questions`, `created_at`, `updated_at`, `full_marks`) VALUES
(1, 1, 3, 57.14, 30, 4, 4, 0, 3, 7, '2019-11-03 21:45:36', '2019-11-03 21:45:36', 7),
(2, 1, 3, 85.71, 30, 6, 6, 0, 1, 7, '2019-11-04 00:17:51', '2019-11-04 00:17:51', 7),
(3, 1, 3, 82.86, 28, 6, 6, 1, 0, 7, '2019-11-04 00:21:01', '2019-11-04 00:21:01', 7),
(4, 1, 3, 34.29, 22, 2, 3, 3, 1, 7, '2019-11-04 00:23:57', '2019-11-04 00:23:57', 7),
(5, 1, 3, 51.43, 20, 4, 4, 2, 1, 7, '2019-11-04 00:43:18', '2019-11-04 00:43:18', 7),
(6, 1, 3, 82.86, 25, 6, 6, 1, 0, 7, '2019-11-04 00:51:17', '2019-11-04 00:51:17', 7),
(7, 1, 3, 41.43, 36, 6, 6, 1, 0, 7, '2019-11-04 01:49:02', '2019-11-04 01:49:02', 7),
(8, 1, 3, 68.57, 17, 10, 5, 2, 0, 7, '2019-11-04 01:51:40', '2019-11-04 01:51:40', 14),
(9, 1, 3, 40.00, 60, 3, 3, 1, 3, 7, '2019-11-04 01:53:23', '2019-11-04 01:53:23', 7),
(10, 1, 3, 0.00, 3, 0, 0, 0, 7, 7, '2019-11-04 01:54:46', '2019-11-04 01:54:46', 7),
(11, 7, 3, 73.33, 25, 7, 7, 2, 0, 9, '2019-11-04 01:57:48', '2019-11-04 01:57:48', 7),
(12, 1, 3, 71.43, 32, 5, 5, 0, 2, 7, '2019-11-04 02:48:20', '2019-11-04 02:48:20', 7),
(13, 1, 3, 70.48, 19, 15, 5, 1, 1, 7, '2019-11-04 02:52:12', '2019-11-04 02:52:12', 21),
(16, 7, 3, 88.15, 24, 24, 8, 1, 0, 9, '2019-11-06 00:38:13', '2019-11-06 00:38:13', 27);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Quizzer',
  `marks_per_question` int(11) NOT NULL DEFAULT 1,
  `negative_mark_per_question` double(8,2) NOT NULL DEFAULT 0.20,
  `exam_duration` int(11) NOT NULL DEFAULT 3600,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `marks_per_question`, `negative_mark_per_question`, `exam_duration`, `created_at`, `updated_at`) VALUES
(1, 'Quizzer APP', 1, 0.20, 60, '2019-11-04 01:38:24', '2019-11-06 00:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'James Bhatta', 'jmsbhatta@gmail.com', NULL, '$2y$10$wER8njZrwcdSbRmplROPu.zv4ldvRH80ILMcdWmRtpA9/pjcx0SLi', 'FnzAWPt8iZI78jaq414oDhOOGheT4MHMtEjdrLcLAjfLRTelreWweyhHOIwT', '2019-07-23 08:55:14', '2019-07-23 08:55:14'),
(2, 'Ramesh Bag', 'ramesh@bag.com', NULL, '$2y$10$jOfNYcgtGvCxxBXgss1/2O02BmBE5ahVeDqR4kLB/u4saTxYbOj8a', NULL, '2019-08-10 22:15:59', '2019-08-10 22:15:59'),
(3, 'John Doe', 'john@example.com', NULL, '$2y$10$BO6mCTlSV/q5ZloD0ls1VOKFw1cYIYBMq4lAHSqvctYe9iSlAtcA.', 'QGaQrRaeW23yLyRcrhzdWgEVDMC5Tn0INHUASOH18DD0Jkeh3Hh5hB5Oq2bG', '2019-10-31 23:08:41', '2019-10-31 23:08:41'),
(4, 'Yogesh Joshi', 'yj@gmail.com', NULL, '$2y$10$WlmTRCoWdxajkTfjFviNzumHM1HH/ooZVe7ai/T7YI9NUayJih0gG', NULL, '2019-11-04 03:10:05', '2019-11-04 03:10:05'),
(5, 'Chiran Upadhyaya', 'cu@gmail.com', NULL, '$2y$10$9OuByChXwItm6yYLf8Gvke7/VsxNgoudH3GTpMik6kCVUo9YR2p12', NULL, '2019-11-04 03:10:42', '2019-11-04 03:10:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_course_id_foreign` (`course_id`),
  ADD KEY `chapters__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_chapter_id_foreign` (`chapter_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libraries_user_id_foreign` (`user_id`),
  ADD KEY `libraries_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_chapter_id_foreign` (`chapter_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_course_id_foreign` (`course_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `libraries`
--
ALTER TABLE `libraries`
  ADD CONSTRAINT `libraries_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `libraries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
