-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2026 at 02:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rastomed`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dump_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dump_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `applyfor` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogarticles`
--

CREATE TABLE `blogarticles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `blogid` int(11) NOT NULL,
  `blogtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metakeywords` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `card_heading` varchar(255) DEFAULT '',
  `card_data` longtext DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `type`, `title`, `url`, `desc`, `sdesc`, `file`, `author`, `order`, `date`, `status`, `metatitle`, `metakeywords`, `metadesc`, `card_heading`, `card_data`) VALUES
(30, 0, 'Paralysis: Causes, Symptoms, Treatment & Recovery', 'paralysis-causes-symptoms-treatment-recovery', '<h1 style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.4; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis: Causes, Symptoms, Treatment &amp; Recovery</h1>\r\n<p class=\"blog-author\" style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 20px; font-size: 15px; color: #444444; border-bottom: 1px solid #eeeeee; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">By Dr. Dinesh Singh &ndash; Neurosurgeon in Meerut</p>\r\n<p class=\"blog-author\" style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 20px; font-size: 15px; color: #444444; border-bottom: 1px solid #eeeeee; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis is a serious neurological condition that affects a person\'s ability to move certain parts of the body. It can occur suddenly or gradually depending on the underlying cause. Early diagnosis and timely neurological treatment are extremely important for improving recovery and quality of life.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Dr. Dinesh Singh, a leading neurologist in Meerut, provides advanced diagnosis and treatment for paralysis, stroke, nerve disorders, and other neurological conditions with personalized patient care.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">What is Paralysis?</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis refers to the loss of muscle function in one or more parts of the body. It occurs when communication between the brain, spinal cord, and muscles is disrupted due to damage to the nervous system.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis may affect:</p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">One side of the body</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Both legs</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">One arm or leg</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Facial muscles</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Entire body in severe conditions</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">The condition can be temporary or permanent depending on the cause and severity.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Common Causes of Paralysis</h2>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">1. Stroke</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Stroke is one of the most common causes of paralysis. Reduced blood supply to the brain can damage brain cells responsible for movement and coordination.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">2. Spinal Cord Injury</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Accidents, trauma, or injuries to the spinal cord can interrupt nerve signals and cause paralysis.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">3. Brain Injury</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Severe head injuries may affect the areas of the brain that control body movements.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">4. Neurological Disorders</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Conditions like multiple sclerosis, Guillain-Barre syndrome, and motor neuron disease can lead to muscle weakness and paralysis.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">5. Infections</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Certain infections affecting the brain or spinal cord may also result in paralysis.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Symptoms of Paralysis</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Common symptoms include:</p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Sudden weakness in arms or legs</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Loss of movement</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Difficulty walking</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Numbness or tingling</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Facial drooping</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Difficulty speaking</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Loss of bladder or bowel control</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Muscle stiffness or spasms</li>\r\n</ul>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Types of Paralysis</h2>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Monoplegia</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis affecting one limb.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Hemiplegia</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis affecting one side of the body, commonly seen after stroke.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paraplegia</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis affecting both legs and lower body.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Quadriplegia</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis affecting all four limbs and the body below the neck.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Diagnosis of Paralysis</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Dr. Dinesh Singh uses advanced neurological evaluation and investigations such as:</p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">MRI Brain and Spine</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">CT Scan</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Nerve Conduction Studies</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">EMG Tests</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Blood Tests</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Neurological Examination</li>\r\n</ul>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis Treatment Options</h2>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Medications</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Medicines may be prescribed to reduce inflammation, manage stroke, control infections, or improve nerve function.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Physiotherapy and Rehabilitation</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Physical therapy plays a major role in improving muscle strength, movement, and coordination.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Occupational Therapy</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Helps patients regain independence in daily activities.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Speech Therapy</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Beneficial for patients with speech and swallowing difficulties after stroke or brain injury.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Surgical Treatment</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">In some cases, surgery may be required for spinal cord injuries or nerve compression.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Can Paralysis Be Recovered?</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Recovery depends on cause of paralysis, severity of nerve damage, time taken to start treatment, rehabilitation support, and patient\'s overall health. Many patients show significant improvement with early neurological care and regular physiotherapy.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Tips to Reduce the Risk of Paralysis</h2>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Control high blood pressure and diabetes</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Maintain healthy cholesterol levels</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Avoid smoking and excessive alcohol</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Exercise regularly</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Eat a balanced diet</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Seek immediate treatment for stroke symptoms</li>\r\n</ul>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Conclusion</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Paralysis can significantly affect daily life, but timely diagnosis and expert neurological treatment can improve recovery and restore independence. Early medical care, rehabilitation, and proper lifestyle management are essential for better outcomes. Dr. Dinesh Singh provides comprehensive paralysis treatment and neurological care to help patients achieve improved mobility and quality of life.</p>', '', 'branch/assets/blogs/img1789992531.png', 'Dr Sonali Kataria (MBBS, MD, DNB, MNAMS, Autism Specialist)', '1', '2026-09-21', 0, '', '', '', '', ''),
(31, 0, 'Summer Heat and Neurological Health: Protect Your Brain This Summer', 'summer-heat-and-neurological-health-protect-your-brain-this-summer', '<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">As temperatures rise during the summer season, many people experience health issues related to excessive heat and dehydration. While most individuals focus on preventing heatstroke and dehydration, few realize that extreme heat can also affect the brain and nervous system. According to Dr. Dinesh Singh, Best Neurologist in Meerut, summer heat can trigger headaches, dizziness, sleep disturbances, and worsen existing neurological conditions.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">How Summer Heat Affects Neurological Health</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">The brain requires proper hydration and blood circulation to function efficiently. During hot weather, excessive sweating can lead to dehydration and electrolyte imbalance, affecting normal brain function. This may result in symptoms such as headaches, fatigue, dizziness, poor concentration, and sleep problems.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Common Neurological Problems During Summer</h2>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">1. Headaches and Migraines</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Dehydration is one of the leading causes of headaches during summer. Individuals suffering from migraines may notice more frequent and severe attacks due to excessive heat exposure.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">2. Neck and Back Pain</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Summer travel, prolonged screen time, poor posture, and muscle fatigue can contribute to neck and back pain. Dehydration may also increase muscle stiffness and discomfort.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">3. Sleep Disorders</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Hot and humid nights can disrupt sleep quality, leading to insomnia, daytime fatigue, irritability, and reduced concentration.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">4. Dizziness and Brain Fog</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Loss of fluids and minerals due to excessive sweating can cause dizziness, weakness, confusion, and difficulty concentrating.</p>\r\n<h3 style=\"box-sizing: border-box; margin: 20px 0px 10px; padding: 0px; line-height: 1.2; color: #333333; font-size: 18px; font-family: Poppins, sans-serif; background-color: #ffffff;\">5. Increased Challenges for Paralysis Patients</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Patients recovering from stroke or paralysis may face greater difficulty managing heat exposure due to reduced mobility and impaired body temperature regulation.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Warning Signs That Require Immediate Medical Attention</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">Contact a neurologist immediately if you experience:</p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Sudden severe headache</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Persistent dizziness</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Difficulty speaking</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Weakness or numbness in the face, arm, or leg</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Loss of balance or coordination</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Confusion or altered consciousness</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Seizures</li>\r\n</ul>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Tips to Protect Your Brain During Summer</h2>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px 0px 0px 20px; color: #173b5e; font-family: Poppins, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Drink plenty of water throughout the day</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Avoid direct sun exposure during peak afternoon hours</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Maintain a regular sleep schedule</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Eat hydrating fruits and vegetables</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Avoid excessive caffeine and alcohol</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Take prescribed medications regularly</li>\r\n<li style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8;\">Seek medical advice for recurring headaches, dizziness, or sleep disturbances</li>\r\n</ul>\r\n<h2 style=\"box-sizing: border-box; margin: 30px 0px 15px; padding: 0px; line-height: 1.2; color: #173b5e; font-size: 34px; font-family: Poppins, sans-serif; background-color: #ffffff;\">Conclusion</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 18px; padding: 0px; font-size: 15px; color: #444444; line-height: 1.8; font-family: Poppins, sans-serif; background-color: #ffffff;\">If you are experiencing headaches, migraines, neck pain, back pain, paralysis-related concerns, dizziness, or sleep disorders, timely neurological care is essential. Dr. Dinesh Singh, a trusted Neurologist in Meerut, offers comprehensive diagnosis and treatment for a wide range of neurological conditions, helping patients maintain optimal brain and nervous system health throughout the year.</p>', '', 'branch/assets/blogs/img1789993339.png', 'Dr Sonali Kataria (MBBS, MD, DNB, MNAMS, Autism Specialist)', '2', '2026-09-22', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `short_desc` longtext NOT NULL,
  `long_desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `c_url` varchar(255) NOT NULL,
  `c_desc` text NOT NULL,
  `sdesc` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `card_heading` text DEFAULT NULL,
  `card_data` longtext DEFAULT NULL,
  `section_heading` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `c_type`, `c_url`, `c_desc`, `sdesc`, `featured_img`, `meta_title`, `meta_keywords`, `meta_desc`, `card_heading`, `card_data`, `section_heading`, `status`, `order`) VALUES
(68, 'Home', '1', 'home', '', '', '', '', '', '', NULL, NULL, NULL, 1, 1),
(69, 'About Us', '1', 'about-us', 'Our Story\r\nRastoMed Pharma was founded with a simple yet meaningful purpose — to contribute to better healthcare by providing quality-driven and scientifically focused pharmaceutical solutions.\r\n\r\nFrom the beginning, our approach has been centered on understanding evolving healthcare needs and developing solutions with a strong emphasis on quality, safety, innovation, and patient well-being.\r\n\r\nAt RastoMed, we believe that healthcare is not only about products; it is about trust, responsibility, and making a meaningful difference in people\'s lives. We are committed to working closely with healthcare professionals, partners, and stakeholders to create solutions that add value to modern healthcare.\r\n\r\nAs we continue to grow, our focus remains clear: to build a trusted pharmaceutical organization driven by science, integrity, continuous improvement, and a commitment to better health outcomes.\r\n\r\nThis is the story of RastoMed Pharma — a journey of purpose, progress, and a commitment to advancing healthcare.', '', 'branch/assets/category/img1789967080.webp', '', '', '', NULL, NULL, NULL, 1, 2),
(70, 'Products', '1', 'products', '', '', '', '', '', '', NULL, NULL, NULL, 1, 3),
(71, 'Carrers', '1', 'carrers', '', '', '', '', '', '', NULL, NULL, NULL, 1, 4),
(72, 'Contact Us', '1', 'contact-us', '', '', '', '', '', '', NULL, NULL, NULL, 1, 6),
(73, 'Mission & Vision', '69', 'mission-vision', 'Our Vision\nTo emerge as a trusted and progressive pharmaceutical company, recognized for quality, innovation, integrity, and our commitment to improving patient health and well-being', 'Our Mission\nTo improve lives by delivering high-quality, safe, and innovative healthcare solutions that address evolving medical needs. We are committed to excellence in quality, scientific advancement, and ethical practices while building lasting trust with healthcare professionals, partners, and the communities we serve.', '', '', '', '', NULL, NULL, NULL, 1, 2),
(75, 'Blogs', '1', 'blogs', '', '', '', '', '', '', NULL, NULL, NULL, 1, 5),
(76, 'Advancing Health with Purposes', '68', 'advancing-health-with-purposes', '', 'RastoMed Pharma Private Limited is committed to improving lives by delivering high-quality, effective, and affordable pharmaceutical products that are trusted worldwide.', '', '', '', '', NULL, NULL, NULL, 1, 1),
(77, 'RastoMed Pharma Private Limited', '68', 'rastomed-pharma-private-limited', 'RastoMed Pharma Pvt. Ltd. is a growing pharmaceutical marketing company focused on providing quality and reliable healthcare solutions. Our portfolio includes Tablets, Capsules, Syrups, and other pharmaceutical formulations, marketed through trusted manufacturing and distribution partnerships.\r\n\r\nWe are committed to maintaining high standards of quality, safety, efficacy, and regulatory compliance, while building trusted brands and long-lasting relationships with healthcare professionals, business partners, and customers.', '', 'branch/assets/category/img1790157036.png', '', '', '', NULL, NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `childcategory`
--

CREATE TABLE `childcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `childcat` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cdesc` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `order` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `enquiry_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creativity`
--

CREATE TABLE `creativity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `redirect_url` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metakeywords` varchar(255) NOT NULL,
  `metadesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculumimg`
--

CREATE TABLE `curriculumimg` (
  `id` int(11) NOT NULL,
  `cum_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events_img`
--

CREATE TABLE `events_img` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `eventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_imgs`
--

CREATE TABLE `gallery_imgs` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media1`
--

CREATE TABLE `media1` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `years` varchar(255) NOT NULL,
  `faculties` varchar(255) NOT NULL,
  `students` varchar(255) NOT NULL,
  `alumni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `childcat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(100) DEFAULT '',
  `sdesc` text DEFAULT NULL,
  `cdesc` text DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT '',
  `meta_title` varchar(255) DEFAULT '',
  `meta_keywords` varchar(255) DEFAULT '',
  `meta_desc` text DEFAULT NULL,
  `url` varchar(255) DEFAULT '',
  `order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `childcat_id`, `name`, `price`, `sdesc`, `cdesc`, `faq`, `featured_img`, `meta_title`, `meta_keywords`, `meta_desc`, `url`, `order`, `status`) VALUES
(1, 70, 0, 0, 'CoRast-Q10', '655', '', '<p>CoRast-Q10</p>\r\n<p>CoRast-Q10 is an advanced liposomal Coenzyme Q10 (CoQ10) formulation designed to support cellular energy production and antioxidant defense. Its liposomal delivery system is designed to enhance the bioavailability of CoQ10.</p>\r\n<p>CoRast-Q10 is formulated with complementary nutrients to support cardiovascular health, energy metabolism, muscle function and overall cellular wellness.</p>\r\n<p><strong>Key Benefits:</strong></p>\r\n<ul>\r\n<li>Supports cellular energy production</li>\r\n<li>Provides antioxidant support</li>\r\n<li>Supports cardiovascular health</li>\r\n<li>Helps maintain healthy muscle function</li>\r\n<li>Supports energy and vitality</li>\r\n</ul>\r\n<p><strong>Composition:</strong> Liposomal Coenzyme Q10 with complementary nutritional ingredients.</p>\r\n<p><strong>Recommended</strong> Use: As directed by a healthcare professional.</p>', '<p>What is CoQ10?</p>\r\n<p>Coenzyme Q10 (CoQ10) is a naturally occurring compound found in the body and is involved in mitochondrial energy production and antioxidant defense.</p>\r\n<p>What is the advantage of liposomal CoQ10?</p>\r\n<p>Liposomal delivery uses lipid-based structures to facilitate the delivery of CoQ10 and is designed to support its oral bioavailability.</p>\r\n<p>Who can use CoRast-Q10?</p>\r\n<p>CoRast-Q10 may be used by adults who require nutritional support with CoQ10, as recommended by a healthcare professional.</p>\r\n<p>Can CoRast-Q10 be used by people taking statins?</p>\r\n<p>Individuals receiving statin therapy should discuss CoQ10 supplementation with their healthcare professional, particularly if they experience muscle-related symptoms. CoRast-Q10 should not be used as a substitute for prescribed statin therapy or other medical treatment.</p>\r\n<p>How should CoRast-Q10 be taken?</p>\r\n<p>Use CoRast-Q10 according to the dosage instructions on the product label or as recommended by your healthcare professional.</p>\r\n<p>How should CoRast-Q10 be stored?</p>\r\n<p>Store according to the conditions specified on the product packaging, generally in a cool, dry place away from direct sunlight and moisture.</p>', 'branch/assets/products/img1789989789.png', '', '', '', 'corast-q10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quickaccess`
--

CREATE TABLE `quickaccess` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `passingyear` varchar(255) NOT NULL,
  `entranceexam` varchar(255) NOT NULL,
  `aadharno` varchar(255) NOT NULL,
  `examentrance` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `courseapply` int(11) NOT NULL,
  `certificatecourse` varchar(255) NOT NULL,
  `per10` varchar(255) NOT NULL,
  `per12` int(11) NOT NULL,
  `perug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `web_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `alternate_email_id` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `alternate_no` varchar(255) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `youtubelink` varchar(255) NOT NULL,
  `map_iframe` longtext NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `smart_classroom_desc` text DEFAULT NULL,
  `smart_classroom_text` varchar(255) DEFAULT '1st Smart Classroom',
  `brochure_file` varchar(500) DEFAULT '',
  `footerdesc` text NOT NULL,
  `googletag` text NOT NULL,
  `headercenterline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `web_name`, `email_id`, `alternate_email_id`, `contact_no`, `alternate_no`, `whatsapp_no`, `address`, `youtubelink`, `map_iframe`, `facebook`, `youtube`, `instagram`, `twitter`, `linkedin`, `logo`, `meta_title`, `meta_keywords`, `meta_desc`, `smart_classroom_desc`, `smart_classroom_text`, `brochure_file`, `footerdesc`, `googletag`, `headercenterline`) VALUES
(1, 'Rastom', 'info@rastomedpharma.com', '', '9410666599', ' 7906752047', '9410666599', ' 353, Shivaji Road, Meerut, Uttar Pradesh-250001    ', '     ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7107!3d28.9845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974b6a0b0b0b0b0%3A0x0b0b0b0b0b0b0b0b!2sShivaji+Road%2C+Meerut%2C+Uttar+Pradesh+250001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin', '', '', ' https://www.instagram.com/rastomedpharma?igsh=MTZqa3VmNWljNXBuYQ%3D%3D    ', 'https://x.com/RastoMedPharma', 'https://www.linkedin.com/company/rastomed-pharma/', 'branch/assets/logo/logoImg1789968960.png', '', '', '', '', '', 'branch/images/brochure_1788931594.pdf', 'We are dedicated to providing high-quality medicines that improve lives and build a healthier tomorrow.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `sc_name` varchar(255) NOT NULL,
  `sc_url` varchar(255) NOT NULL,
  `sc_desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `features` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `featured_img1` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `heading` text NOT NULL DEFAULT '',
  `title` text NOT NULL,
  `url` text NOT NULL,
  `desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `category`, `heading`, `title`, `url`, `desc`, `file`, `order`, `status`) VALUES
(8, '', 'Senior Consultant', 'Dr. Rakesh Sharma', 'dr-rakesh-sharma', '<p><span style=\"color: #495057; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; font-style: italic; background-color: #ffffff;\">RastoMed Pharma has been our trusted partner for years. Their quality and commitment are truly exceptional.</span></p>', '', '1', 1),
(9, '', 'MD, Physician', 'Dr. Anjali Verma', 'dr-anjali-verma', '<p><span style=\"color: #495057; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; font-style: italic; background-color: #ffffff;\">The quality of their products and timely delivery helps us serve our patients better every day.</span></p>', '', '2', 1),
(10, '', 'Distributor', 'Mr. Sandeep Patel', 'mr-sandeep-patel', '<p><span style=\"color: #495057; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; font-style: italic; background-color: #ffffff;\">Excellent services, wide product range and strong support team. Highly recommended.</span></p>', '', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

CREATE TABLE `toppers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_add` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` int(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `board10` varchar(255) NOT NULL,
  `marks10` varchar(255) NOT NULL,
  `percentage10` varchar(255) NOT NULL,
  `board12` varchar(255) NOT NULL,
  `marks12` varchar(255) NOT NULL,
  `percentage12` varchar(255) NOT NULL,
  `board_g` varchar(255) NOT NULL,
  `marks_g` varchar(255) NOT NULL,
  `percentage_g` varchar(255) NOT NULL,
  `board_pg` varchar(255) NOT NULL,
  `marks_pg` varchar(255) NOT NULL,
  `percentage_pg` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `skills_training` varchar(255) NOT NULL,
  `total_exp` varchar(255) NOT NULL,
  `relevant_exp` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `class10` varchar(255) NOT NULL,
  `class12` varchar(255) NOT NULL,
  `class_graduation` varchar(255) NOT NULL,
  `class_postgraduation` varchar(255) NOT NULL,
  `accept_declaration` int(11) NOT NULL,
  `accept_understanding` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_banner`
--

CREATE TABLE `web_banner` (
  `id` int(11) NOT NULL,
  `wb_img` varchar(255) NOT NULL,
  `wb_video` varchar(255) NOT NULL DEFAULT '',
  `wb_heading` varchar(255) NOT NULL,
  `wb_subheading` text NOT NULL,
  `featuredimg` varchar(255) NOT NULL,
  `wb_order` int(11) NOT NULL,
  `category_id` int(11) DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_banner`
--

INSERT INTO `web_banner` (`id`, `wb_img`, `wb_video`, `wb_heading`, `wb_subheading`, `featuredimg`, `wb_order`, `category_id`, `status`) VALUES
(4, 'branch/assets/banner/img1789991010.webp', '', '', '', '', 1, 69, 1),
(5, 'branch/assets/banner/img1789991212.webp', '', '', '', '', 2, 70, 1),
(6, 'branch/assets/banner/img1789991574.webp', '', '', '', '', 3, 72, 1),
(7, 'branch/assets/banner/img1789993557.webp', '', '', '', '', 5, 75, 1),
(8, '', 'branch/assets/banner/video1790142979182.mp4', '', '', '', 7, 68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `youtubeurl` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogarticles`
--
ALTER TABLE `blogarticles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategory`
--
ALTER TABLE `childcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creativity`
--
ALTER TABLE `creativity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculumimg`
--
ALTER TABLE `curriculumimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_img`
--
ALTER TABLE `events_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_imgs`
--
ALTER TABLE `gallery_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media1`
--
ALTER TABLE `media1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickaccess`
--
ALTER TABLE `quickaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppers`
--
ALTER TABLE `toppers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_banner`
--
ALTER TABLE `web_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogarticles`
--
ALTER TABLE `blogarticles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `childcategory`
--
ALTER TABLE `childcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `creativity`
--
ALTER TABLE `creativity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `curriculumimg`
--
ALTER TABLE `curriculumimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_img`
--
ALTER TABLE `events_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_imgs`
--
ALTER TABLE `gallery_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;

--
-- AUTO_INCREMENT for table `media1`
--
ALTER TABLE `media1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quickaccess`
--
ALTER TABLE `quickaccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `toppers`
--
ALTER TABLE `toppers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_banner`
--
ALTER TABLE `web_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
