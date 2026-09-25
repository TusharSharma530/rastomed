-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2026 at 02:44 PM
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
  `country` varchar(255) NOT NULL DEFAULT '',
  `job_function` varchar(255) NOT NULL DEFAULT '',
  `applyfor` int(11) NOT NULL DEFAULT 0,
  `degree` varchar(255) NOT NULL DEFAULT '',
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `name`, `email`, `contactno`, `country`, `job_function`, `applyfor`, `degree`, `file`) VALUES
(280, 'dwdewd wdwed', 'tbjs@gmail.com', '12345673', 'India', 'Marketing', 0, '', ''),
(282, 'test99 kumars', 'test22@gmail.com', '8888888888', 'India', 'Operations', 0, '', 'uploads/resumes/resume_1790336900_654ff6e2.docx'),
(283, 'test99 kumars', 'test22@gmail.com', '8888888888', 'India', 'Operations', 0, '', 'uploads/resumes/resume_1790336968_b9cf6313.docx');

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
(30, 0, 'Paralysis: Causes, Symptoms, Treatment & Recovery', 'paralysis-causes-symptoms-treatment-recovery', 'Paralysis: Causes, Symptoms, Treatment & Recovery\n\n\r\nBy Dr. Dinesh Singh – Neurosurgeon in Meerut\n\n\r\nParalysis is a serious neurological condition that affects a person\'s ability to move certain parts of the body. It can occur suddenly or gradually depending on the underlying cause. Early diagnosis and timely neurological treatment are extremely important for improving recovery and quality of life.\n\n\r\nDr. Dinesh Singh, a leading neurologist in Meerut, provides advanced diagnosis and treatment for paralysis, stroke, nerve disorders, and other neurological conditions with personalized patient care.\n\n\r\n\nWhat is Paralysis?\n\n\r\nParalysis refers to the loss of muscle function in one or more parts of the body. It occurs when communication between the brain, spinal cord, and muscles is disrupted due to damage to the nervous system.\n\n\r\nParalysis may affect:\n\n\r\n\r\n- One side of the body\n\r\n- Both legs\n\r\n- One arm or leg\n\r\n- Facial muscles\n\r\n- Entire body in severe conditions\n\r\n\n\r\nThe condition can be temporary or permanent depending on the cause and severity.\n\n\r\n\nCommon Causes of Paralysis\n\n\r\n\n1. Stroke\n\n\r\nStroke is one of the most common causes of paralysis. Reduced blood supply to the brain can damage brain cells responsible for movement and coordination.\n\n\r\n\n2. Spinal Cord Injury\n\n\r\nAccidents, trauma, or injuries to the spinal cord can interrupt nerve signals and cause paralysis.\n\n\r\n\n3. Brain Injury\n\n\r\nSevere head injuries may affect the areas of the brain that control body movements.\n\n\r\n\n4. Neurological Disorders\n\n\r\nConditions like multiple sclerosis, Guillain-Barre syndrome, and motor neuron disease can lead to muscle weakness and paralysis.\n\n\r\n\n5. Infections\n\n\r\nCertain infections affecting the brain or spinal cord may also result in paralysis.\n\n\r\n\nSymptoms of Paralysis\n\n\r\nCommon symptoms include:\n\n\r\n\r\n- Sudden weakness in arms or legs\n\r\n- Loss of movement\n\r\n- Difficulty walking\n\r\n- Numbness or tingling\n\r\n- Facial drooping\n\r\n- Difficulty speaking\n\r\n- Loss of bladder or bowel control\n\r\n- Muscle stiffness or spasms\n\r\n\n\r\n\nTypes of Paralysis\n\n\r\n\nMonoplegia\n\n\r\nParalysis affecting one limb.\n\n\r\n\nHemiplegia\n\n\r\nParalysis affecting one side of the body, commonly seen after stroke.\n\n\r\n\nParaplegia\n\n\r\nParalysis affecting both legs and lower body.\n\n\r\n\nQuadriplegia\n\n\r\nParalysis affecting all four limbs and the body below the neck.\n\n\r\n\nDiagnosis of Paralysis\n\n\r\nDr. Dinesh Singh uses advanced neurological evaluation and investigations such as:\n\n\r\n\r\n- MRI Brain and Spine\n\r\n- CT Scan\n\r\n- Nerve Conduction Studies\n\r\n- EMG Tests\n\r\n- Blood Tests\n\r\n- Neurological Examination\n\r\n\n\r\n\nParalysis Treatment Options\n\n\r\n\nMedications\n\n\r\nMedicines may be prescribed to reduce inflammation, manage stroke, control infections, or improve nerve function.\n\n\r\n\nPhysiotherapy and Rehabilitation\n\n\r\nPhysical therapy plays a major role in improving muscle strength, movement, and coordination.\n\n\r\n\nOccupational Therapy\n\n\r\nHelps patients regain independence in daily activities.\n\n\r\n\nSpeech Therapy\n\n\r\nBeneficial for patients with speech and swallowing difficulties after stroke or brain injury.\n\n\r\n\nSurgical Treatment\n\n\r\nIn some cases, surgery may be required for spinal cord injuries or nerve compression.\n\n\r\n\nCan Paralysis Be Recovered?\n\n\r\nRecovery depends on cause of paralysis, severity of nerve damage, time taken to start treatment, rehabilitation support, and patient\'s overall health. Many patients show significant improvement with early neurological care and regular physiotherapy.\n\n\r\n\nTips to Reduce the Risk of Paralysis\n\n\r\n\r\n- Control high blood pressure and diabetes\n\r\n- Maintain healthy cholesterol levels\n\r\n- Avoid smoking and excessive alcohol\n\r\n- Exercise regularly\n\r\n- Eat a balanced diet\n\r\n- Seek immediate treatment for stroke symptoms\n\r\n\n\r\n\nConclusion\n\n\r\nParalysis can significantly affect daily life, but timely diagnosis and expert neurological treatment can improve recovery and restore independence. Early medical care, rehabilitation, and proper lifestyle management are essential for better outcomes. Dr. Dinesh Singh provides comprehensive paralysis treatment and neurological care to help patients achieve improved mobility and quality of life.', '', 'branch/assets/blogs/img1789992531.png', 'Dr Sonali Kataria (MBBS, MD, DNB, MNAMS, Autism Specialist)', '1', '2026-09-21', 0, '', '', '', '', ''),
(31, 0, 'Summer Heat and Neurological Health: Protect Your Brain This Summer', 'summer-heat-and-neurological-health-protect-your-brain-this-summer', 'As temperatures rise during the summer season, many people experience health issues related to excessive heat and dehydration. While most individuals focus on preventing heatstroke and dehydration, few realize that extreme heat can also affect the brain and nervous system. According to Dr. Dinesh Singh, Best Neurologist in Meerut, summer heat can trigger headaches, dizziness, sleep disturbances, and worsen existing neurological conditions.\n\n\r\n\nHow Summer Heat Affects Neurological Health\n\n\r\nThe brain requires proper hydration and blood circulation to function efficiently. During hot weather, excessive sweating can lead to dehydration and electrolyte imbalance, affecting normal brain function. This may result in symptoms such as headaches, fatigue, dizziness, poor concentration, and sleep problems.\n\n\r\n\nCommon Neurological Problems During Summer\n\n\r\n\n1. Headaches and Migraines\n\n\r\nDehydration is one of the leading causes of headaches during summer. Individuals suffering from migraines may notice more frequent and severe attacks due to excessive heat exposure.\n\n\r\n\n2. Neck and Back Pain\n\n\r\nSummer travel, prolonged screen time, poor posture, and muscle fatigue can contribute to neck and back pain. Dehydration may also increase muscle stiffness and discomfort.\n\n\r\n\n3. Sleep Disorders\n\n\r\nHot and humid nights can disrupt sleep quality, leading to insomnia, daytime fatigue, irritability, and reduced concentration.\n\n\r\n\n4. Dizziness and Brain Fog\n\n\r\nLoss of fluids and minerals due to excessive sweating can cause dizziness, weakness, confusion, and difficulty concentrating.\n\n\r\n\n5. Increased Challenges for Paralysis Patients\n\n\r\nPatients recovering from stroke or paralysis may face greater difficulty managing heat exposure due to reduced mobility and impaired body temperature regulation.\n\n\r\n\nWarning Signs That Require Immediate Medical Attention\n\n\r\nContact a neurologist immediately if you experience:\n\n\r\n\r\n- Sudden severe headache\n\r\n- Persistent dizziness\n\r\n- Difficulty speaking\n\r\n- Weakness or numbness in the face, arm, or leg\n\r\n- Loss of balance or coordination\n\r\n- Confusion or altered consciousness\n\r\n- Seizures\n\r\n\n\r\n\nTips to Protect Your Brain During Summer\n\n\r\n\r\n- Drink plenty of water throughout the day\n\r\n- Avoid direct sun exposure during peak afternoon hours\n\r\n- Maintain a regular sleep schedule\n\r\n- Eat hydrating fruits and vegetables\n\r\n- Avoid excessive caffeine and alcohol\n\r\n- Take prescribed medications regularly\n\r\n- Seek medical advice for recurring headaches, dizziness, or sleep disturbances\n\r\n\n\r\n\nConclusion\n\n\r\nIf you are experiencing headaches, migraines, neck pain, back pain, paralysis-related concerns, dizziness, or sleep disorders, timely neurological care is essential. Dr. Dinesh Singh, a trusted Neurologist in Meerut, offers comprehensive diagnosis and treatment for a wide range of neurological conditions, helping patients maintain optimal brain and nervous system health throughout the year.', '', 'branch/assets/blogs/img1789993339.png', 'Dr Sonali Kataria (MBBS, MD, DNB, MNAMS, Autism Specialist)', '2', '2026-09-22', 0, '', '', '', '', '');

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
  `c_page` varchar(255) NOT NULL DEFAULT '',
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

INSERT INTO `category` (`id`, `c_name`, `c_type`, `c_url`, `c_page`, `c_desc`, `sdesc`, `featured_img`, `meta_title`, `meta_keywords`, `meta_desc`, `card_heading`, `card_data`, `section_heading`, `status`, `order`) VALUES
(68, 'Home', '1', 'home', 'index.php', '', '', '', '', '', '', NULL, NULL, NULL, 1, 1),
(69, 'About Us', '1', 'about-us', 'about.php', 'RastoMed Pharma was founded with a simple yet meaningful purpose — to contribute to better healthcare by providing quality-driven and scientifically focused pharmaceutical solutions.\r\n\r\nFrom the beginning, our approach has been centered on understanding evolving healthcare needs and developing solutions with a strong emphasis on quality, safety, innovation, and patient well-being.\r\n\r\nAt RastoMed, we believe that healthcare is not only about products; it is about trust, responsibility, and making a meaningful difference in people\'s lives. We are committed to working closely with healthcare professionals, partners, and stakeholders to create solutions that add value to modern healthcare.\r\n\r\nAs we continue to grow, our focus remains clear: to build a trusted pharmaceutical organization driven by science, integrity, continuous improvement, and a commitment to better health outcomes.\r\n\r\nThis is the story of RastoMed Pharma — a journey of purpose, progress, and a commitment to advancing healthcare.', '', 'branch/assets/category/img1789967080.webp', '', '', '', NULL, NULL, NULL, 1, 2),
(70, 'Products', '1', 'products', 'products.php', '', '', '', '', '', '', NULL, NULL, NULL, 1, 3),
(71, 'Carrers', '1', 'carrers', 'careers.php', '', '', '', '', '', '', NULL, NULL, NULL, 1, 4),
(72, 'Contact Us', '1', 'contact-us', 'contact.php', '', '', '', '', '', '', NULL, NULL, NULL, 1, 6),
(73, 'Our Mission', '69', 'our-mission', '', 'To improve lives by delivering high-quality, safe, and innovative healthcare solutions that address evolving medical needs. We are committed to excellence in quality, scientific advancement, and ethical practices while building lasting trust with healthcare professionals, partners, and the communities we serve.', '', '', '', '', '', NULL, NULL, NULL, 1, 2),
(75, 'Blogs', '1', 'blogs', 'blogs.php', '', '', '', '', '', '', NULL, NULL, NULL, 1, 5),
(76, 'Advancing Health with Purposes', '68', 'advancing-health-with-purposes', '', '', 'RastoMed Pharma Private Limited is committed to improving lives by delivering high-quality, effective, and affordable pharmaceutical products that are trusted worldwide.', '', '', '', '', NULL, NULL, NULL, 1, 1),
(77, 'RastoMed Pharma Private Limited', '68', 'rastomed-pharma-private-limited', '', 'RastoMed Pharma Pvt. Ltd. is a growing pharmaceutical marketing company focused on providing quality and reliable healthcare solutions. Our portfolio includes Tablets, Capsules, Syrups, and other pharmaceutical formulations, marketed through trusted manufacturing and distribution partnerships.\r\n\r\nWe are committed to maintaining high standards of quality, safety, efficacy, and regulatory compliance, while building trusted brands and long-lasting relationships with healthcare professionals, business partners, and customers.', '', 'branch/assets/category/img1790157036.png', '', '', '', NULL, NULL, NULL, 1, 3),
(78, 'Our Vision', '69', 'our-vision', '', 'To emerge as a trusted and progressive pharmaceutical company, recognized for quality, innovation, integrity, and our commitment to improving patient health and well-being.', '', '', '', '', '', NULL, NULL, NULL, 1, 4);

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `enquiry_type`, `name`, `email`, `state`, `phone`, `message`, `status`) VALUES
(38, 'Contact Form', 'test2', 'testing@gmail.com', '', '+91123456789', 'test mail', 0),
(39, 'Website Enquiry', 'test equiry form', 'equiryform@gmail.com', '', '+91123456789', 'test equiry form', 0),
(40, 'Website Enquiry', 'test', 'testing12@gmailcom', '', '+91123456789', 'test', 0),
(41, 'Contact Form', 'test35', 'ts@gmail.com', '', '+91123456756', 'last test mail', 0),
(43, 'Contact Form', 'test32', 'rsssk@gmail.com', '', '+911298767889', 'hi', 0),
(44, 'Contact Form', 'test 45', 'tks@gmail.com', '', '+91123456789', 'test', 0),
(45, 'Website Enquiry', 'test42', 'test42@gmail.com', '', '+91123456789', 'hii', 0),
(46, 'Contact Form', 'test final', 'testfinal@gmail.com', '', '+91123498789', 'hii', 0);

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
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(500) NOT NULL DEFAULT '',
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `subtitle`, `description`) VALUES
(1, 'privacy-policy', 'Privacy Policy', 'We are committed to protecting personal data in accordance with the Digital Personal Data Protection Act, 2023 (“DPDP Act”) and other applicable laws in India.', '<p class=\"legal-page__intro\">At RastoMed Pharma, we respect your privacy and are committed to handling your personal information responsibly. This Privacy Policy explains how we collect, use, protect, and manage personal information when you visit our website, contact us, or submit information through our online forms.</p>\n<p class=\"legal-page__intro\">By using our website or voluntarily providing your information, you acknowledge the practices described in this Privacy Policy.</p>\n<article class=\"legal-page__section\">\n<h2>1. About This Policy</h2>\n<p>For the purpose of this Privacy Policy, \"RastoMed Pharma,\" \"we,\" \"our,\" or \"us\" refers to RastoMed Pharma.</p>\n<p>This Privacy Policy applies to personal information collected through our website, contact forms, career forms, emails, and other direct interactions with us.</p>\n<p>Where applicable, we handle personal data in accordance with the Digital Personal Data Protection Act, 2023 (DPDP Act) and other applicable laws and regulations.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>2. Information We May Collect</h2>\n<p>Depending on how you interact with us, we may collect the following information:</p>\n<h3>Information You Provide</h3>\n<ul class=\"legal-arrow-list\">\n<li>Full name</li>\n<li>Email address</li>\n<li>Phone or mobile number</li>\n<li>Company or organisation name</li>\n<li>Designation or job title</li>\n<li>Business or product enquiry details</li>\n<li>Information submitted through contact, enquiry, career, or other website forms</li>\n<li>Any other information you voluntarily provide to us</li>\n</ul>\n<h3>Information Collected Automatically</h3>\n<p>When you visit our website, certain technical information may be collected automatically, including:</p>\n<ul class=\"legal-arrow-list\">\n<li>IP address</li>\n<li>Browser type and version</li>\n<li>Device information</li>\n<li>Operating system</li>\n<li>Pages visited and time spent on the website</li>\n<li>Website usage and interaction information</li>\n<li>Cookies and similar technologies</li>\n</ul>\n<p>This information helps us maintain, improve, and secure our website.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>3. How We Use Your Information</h2>\n<p>RastoMed Pharma may use personal information for legitimate business and operational purposes, including:</p>\n<ul class=\"legal-arrow-list\">\n<li>Responding to enquiries and requests</li>\n<li>Communicating with you about products, services, or business matters</li>\n<li>Managing business and professional enquiries</li>\n<li>Responding to career applications and employment-related communications</li>\n<li>Improving our website, content, and user experience</li>\n<li>Maintaining website functionality and security</li>\n<li>Meeting applicable legal and regulatory requirements</li>\n<li>Protecting our legal rights and legitimate business interests</li>\n</ul>\n<p>We seek to use personal information only for purposes that are relevant to the reason for which it was collected or as otherwise permitted by applicable law.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>4. Consent and Your Choices</h2>\n<p>Where consent is required by applicable law, we will seek your consent before processing your personal data for the relevant purpose.</p>\n<p>Where processing is based on consent, you may withdraw your consent by contacting us using the details provided in this Privacy Policy.</p>\n<p>Withdrawal of consent will not affect the lawfulness of processing carried out before such withdrawal. Certain information may also need to be retained where required by law, regulation, security requirements, or legitimate business purposes.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>5. Sharing of Personal Information</h2>\n<p>RastoMed Pharma does not sell or commercially trade your personal information.</p>\n<p>Where necessary, we may share personal information with trusted third parties that support our business operations, including:</p>\n<ul class=\"legal-arrow-list\">\n<li>Website hosting and technology service providers</li>\n<li>IT and technical support providers</li>\n<li>CRM and communication platforms</li>\n<li>Professional consultants and advisors</li>\n<li>Service providers working on our behalf</li>\n<li>Government, regulatory, or law-enforcement authorities where required by applicable law</li>\n</ul>\n<p>Where third parties process personal information on our behalf, we expect them to maintain appropriate confidentiality and security measures.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>6. Data Retention</h2>\n<p>We retain personal information only for as long as reasonably necessary to fulfil the purpose for which it was collected or to meet applicable legal, regulatory, accounting, or other obligations.</p>\n<p>When personal information is no longer required, we take reasonable steps to securely delete, dispose of, or anonymise it, as appropriate.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>7. Data Security</h2>\n<p>We take reasonable and appropriate measures to protect personal information against unauthorised access, misuse, alteration, disclosure, loss, or destruction.</p>\n<p>Our safeguards may include:</p>\n<ul class=\"legal-arrow-list\">\n<li>Access controls and authorisation measures</li>\n<li>Appropriate technical and organisational security measures</li>\n<li>Secure website and hosting infrastructure</li>\n<li>Encryption or other protective technologies where appropriate</li>\n<li>Periodic review of our security practices</li>\n</ul>\n<p>Although we take reasonable measures to protect your information, no method of electronic transmission or storage can be guaranteed to be completely secure.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>8. Your Privacy Rights</h2>\n<p>Subject to applicable law and any conditions or limitations prescribed by law, you may have certain rights regarding your personal information, including the right to:</p>\n<ul class=\"legal-arrow-list\">\n<li>Request information about the personal data we process</li>\n<li>Request correction of inaccurate or incomplete information</li>\n<li>Request deletion of personal information where applicable</li>\n<li>Withdraw consent where processing is based on consent</li>\n<li>Raise a grievance regarding the processing of your personal information</li>\n<li>Nominate another individual to exercise applicable rights on your behalf</li>\n</ul>\n<p>To exercise an applicable right or raise a privacy concern, please contact us using the details provided below.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>9. Cookies and Similar Technologies</h2>\n<p>Our website may use cookies and similar technologies to enhance your browsing experience, understand website traffic, remember preferences, improve website functionality, and analyse website usage.</p>\n<p>You may manage or disable cookies through your browser settings. However, disabling certain cookies may affect the functionality of some parts of our website.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>10. Grievance Redressal</h2>\n<p>If you have any question, concern, or grievance regarding the collection or handling of your personal information, you may drop us mail.</p>\n<ul class=\"legal-arrow-list\">\n<li><strong>Email:</strong> <a href=\"mailto:info@rastomedpharma.com\">info@rastomedpharma.com</a></li>\n</ul>\n<p>We will make reasonable efforts to review and address privacy-related concerns in accordance with applicable laws and requirements.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>11. Cross-Border Processing</h2>\n<p>Depending on the technology, hosting infrastructure, and service providers used by RastoMed Pharma, personal information may be processed or stored on systems located outside India.</p>\n<p>Where applicable, such processing will be carried out in accordance with applicable data protection requirements and appropriate safeguards.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>12. Children\'s Privacy</h2>\n<p>Our website and services are primarily intended for adults and are not specifically directed toward children.</p>\n<p>We do not knowingly seek to collect personal information from children except where permitted or required under applicable law.</p>\n<p>If you believe that a child has provided personal information to us without appropriate consent, please contact us so that we can take appropriate steps.</p>\n</article>\n<article class=\"legal-page__section\">\n<h2>13. Changes to This Privacy Policy</h2>\n<p>RastoMed Pharma may update this Privacy Policy from time to time to reflect changes in our business practices, website functionality, or applicable legal and regulatory requirements.</p>\n<p>Any updated version will be published on this page. We encourage you to review this page periodically to remain informed about how we handle personal information.</p>\n</article>\n<div class=\"legal-page__divider\">&nbsp;</div>\n<article class=\"legal-page__section\">\n<h2>Contact Us</h2>\n<p>If you have any questions regarding this Privacy Policy or the way RastoMed Pharma handles personal information, please contact us:</p>\n<p><strong>RastoMed Pharma</strong><br />Email: <a href=\"mailto:info@rastomedpharma.com\">info@rastomedpharma.com</a><br />Website: <a href=\"https://www.rastomedpharma.com/\">www.rastomedpharma.com</a></p>\n</article>\n<p>`</p>'),
(2, 'disclaimer', 'Disclaimer', '', '<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; line-height: 1.18; letter-spacing: -0.64px; color: #212529; font-size: clamp(1.3rem, 2.5vw, 1.6rem); background-color: rgba(255, 255, 255, 0.92);\">Legal Disclaimer</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem); font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: rgba(255, 255, 255, 0.92);\">We make every reasonable effort to ensure that the information published on the RastoMed Pharma website is accurate, relevant, and regularly updated. However, we do not guarantee that the information is complete, accurate, or free from errors or omissions.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem); font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: rgba(255, 255, 255, 0.92);\">The information provided on this website is intended for general informational purposes only and should not be considered a substitute for professional medical, healthcare, legal, or other specialist advice. Users should seek appropriate professional advice before making decisions based on information available on this website.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem); font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: rgba(255, 255, 255, 0.92);\">To the extent permitted by applicable law, RastoMed Pharma shall not be responsible for any direct, indirect, incidental, or consequential loss or damage arising from the use of, or reliance upon, information available on this website.</p>\n<article class=\"legal-page__section\" style=\"margin: 0px 0px 0.5rem; padding: 0px; box-sizing: border-box; color: #212529; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; background-color: rgba(255, 255, 255, 0.92);\">\n<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.18; letter-spacing: -0.64px; font-size: clamp(1.3rem, 2.5vw, 1.6rem);\">Business information and product information</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">The business and product information presented on this website is provided for general reference and may be subject to change without prior notice</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Information relating to pharmaceutical products, ingredients, formulations, health conditions, or other healthcare matters should not be interpreted as medical advice, a diagnosis, or a recommendation for treatment. Product availability, composition, indications, usage, and regulatory status may vary depending on the applicable market and regulations.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Users should always refer to the relevant product information and consult a qualified healthcare professional before using any pharmaceutical or healthcare product</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">RastoMed Pharma is not responsible for information, content, or materials provided by third parties that may be referenced or linked through this website.</p>\n</article>\n<article class=\"legal-page__section\" style=\"margin: 0px 0px 0.5rem; padding: 0px; box-sizing: border-box; color: #212529; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; background-color: rgba(255, 255, 255, 0.92);\">\n<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.18; letter-spacing: -0.64px; font-size: clamp(1.3rem, 2.5vw, 1.6rem);\">Rights of use</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Unless otherwise stated, the content available on the RastoMed Pharma website, including text, logos, graphics, images, product information, designs, and other materials, is owned by or licensed to RastoMed Pharma and is protected by applicable intellectual property laws.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">The content of this website may be viewed and accessed for personal and informational purposes. Any unauthorised reproduction, modification, distribution, publication, commercial use, or other exploitation of the website content is prohibited without prior written permission from RastoMed Pharma.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Nothing on this website should be interpreted as granting any licence or right to use RastoMed Pharma\'s trademarks, copyrights, patents, designs, or other intellectual property without appropriate authorisation.</p>\n<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.18; letter-spacing: -0.64px; font-size: clamp(1.3rem, 2.5vw, 1.6rem);\">Non-commitment - applicable law</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">The information and product details displayed on this website are intended primarily for users accessing the website in India. Product availability, registration, indications, and regulatory requirements may differ from one country or jurisdiction to another.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">The appearance of a product or service on this website does not necessarily mean that it is available, approved, or authorised for use in every location. Users outside India should verify the applicable local requirements before relying on information relating to any product or service.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Any matters arising from the use of this website shall be subject to the applicable laws of India, unless otherwise required by applicable law.</p>\n<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.18; letter-spacing: -0.64px; font-size: clamp(1.3rem, 2.5vw, 1.6rem);\">Hyperlinks</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Our website may contain links to third-party websites for additional information or convenience. These external websites are operated independently and are beyond the control of RastoMed Pharma.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">We do not guarantee the accuracy, reliability, availability, security, or completeness of information provided on third-party websites. The inclusion of any external link does not imply endorsement, sponsorship, recommendation, or approval of the linked website or its content</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">Users access third-party websites at their own discretion and should review the applicable terms, privacy policies, and other conditions of those websites before using them or providing personal information.</p>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">RastoMed Pharma shall not be responsible for any loss or damage arising from your use of, or reliance upon, third-party websites or their content, to the extent permitted by applicable law.</p>\n<h2 style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.18; letter-spacing: -0.64px; font-size: clamp(1.3rem, 2.5vw, 1.6rem);\">Updates</h2>\n<p style=\"margin: 0px 0px 12px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: clamp(0.95rem, 1.4vw, 1.05rem);\">RastoMed Pharma may update this Disclaimer from time to time. Any changes will be published on this page.</p>\n</article>'),
(3, 'fraud-policy', 'Recruitment Fraud Policy', '', '<p>At RastoMed Pharma, we are committed to maintaining a fair, transparent, and professional recruitment process. We have become aware that individuals may misuse company names, logos, or recruitment information to make fraudulent job offers or request money and personal information from job seekers.</p>\n<h2>Please take note of the following:</h2>\n<p>1. RastoMed Pharma does not charge any fee for job applications, interviews, recruitment, training, or employment.</p>\n<p>2. We will never ask candidates to make payments to secure a job or receive an appointment letter.</p>\n<p>3. Be cautious of unsolicited job offers, messages, or interview invitations received through unofficial channels.</p>\n<p>4. Do not share sensitive information such as bank account details, passwords, OTPs, or other financial information with unknown individuals.</p>\n<p>5. Candidates should verify recruitment-related communication through our official website or authorised RastoMed Pharma communication channels.</p>\n<p>6. Any job offer or recruitment communication that appears suspicious should be independently verified before taking further action.</p>\n<h2>Important Notice</h2>\n<p>RastoMed Pharma will not be responsible for any loss, damage, or consequences resulting from fraudulent communications or transactions made by individuals falsely claiming to represent the company.</p>\n<p>If you receive a suspicious recruitment communication using the name or identity of RastoMed Pharma, please report it to us at:</p>\n<p><strong>Email:</strong> <a href=\"mailto:info@rastomedpharma.com\">info@rastomedpharma.com</a></p>');

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
(5, 70, 0, 0, 'CoRast-Q10', '655', '', '<p style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: 1rem; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: #ffffff;\">CoRast-Q10 is an advanced liposomal Coenzyme Q10 (CoQ10) formulation designed to support cellular energy production and antioxidant defense. Its liposomal delivery system is designed to enhance the bioavailability of CoQ10.</p>\r\n<p style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: 1rem; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: #ffffff;\">CoRast-Q10 is formulated with complementary nutrients to support cardiovascular health, energy metabolism, muscle function and overall cellular wellness.</p>\r\n<h3 style=\"margin: 8px 0px 12px; padding: 0px; box-sizing: border-box; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; line-height: 1.18; letter-spacing: -0.44px; color: #1565c0; font-size: 1.1rem; background-color: #ffffff;\">Key Benefits:</h3>\r\n<ul style=\"margin: 0px 0px 20px; padding: 0px 0px 0px 24px; box-sizing: border-box; list-style: disc; color: #212529; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; font-size: 14.4px; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 4px; padding: 0px; box-sizing: border-box; font-size: 1rem; color: #495057; line-height: 1.8;\">Supports cellular energy production</li>\r\n<li style=\"margin: 0px 0px 4px; padding: 0px; box-sizing: border-box; font-size: 1rem; color: #495057; line-height: 1.8;\">Provides antioxidant support</li>\r\n<li style=\"margin: 0px 0px 4px; padding: 0px; box-sizing: border-box; font-size: 1rem; color: #495057; line-height: 1.8;\">Supports cardiovascular health</li>\r\n<li style=\"margin: 0px 0px 4px; padding: 0px; box-sizing: border-box; font-size: 1rem; color: #495057; line-height: 1.8;\">Helps maintain healthy muscle function</li>\r\n<li style=\"margin: 0px 0px 4px; padding: 0px; box-sizing: border-box; font-size: 1rem; color: #495057; line-height: 1.8;\">Supports energy and vitality</li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: 1rem; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: #ffffff;\"><strong style=\"margin: 0px; padding: 0px; box-sizing: border-box;\">Composition:</strong> Liposomal Coenzyme Q10 with complementary nutritional ingredients.</p>\r\n<p style=\"margin: 0px 0px 16px; padding: 0px; box-sizing: border-box; line-height: 1.8; color: #495057; font-size: 1rem; font-family: \'Plus Jakarta Sans\', Inter, -apple-system, BlinkMacSystemFont, \'Segoe UI\', sans-serif; background-color: #ffffff;\"><strong style=\"margin: 0px; padding: 0px; box-sizing: border-box;\">Recommended Use:</strong> As directed by a healthcare professional.</p>', '<p>What is CoQ10?</p>\r\n<p>Coenzyme Q10 (CoQ10) is a naturally occurring compound found in the body and is involved in mitochondrial energy production and antioxidant defense.</p>\r\n<p>What is the advantage of liposomal CoQ10?</p>\r\n<p>Liposomal delivery uses lipid-based structures to facilitate the delivery of CoQ10 and is designed to support its oral bioavailability.</p>\r\n<p>Who can use CoRast-Q10?</p>\r\n<p>CoRast-Q10 may be used by adults who require nutritional support with CoQ10, as recommended by a healthcare professional.</p>\r\n<p>Can CoRast-Q10 be used by people taking statins?</p>\r\n<p>Individuals receiving statin therapy should discuss CoQ10 supplementation with their healthcare professional, particularly if they experience muscle-related symptoms. CoRast-Q10 should not be used as a substitute for prescribed statin therapy or other medical treatment.</p>\r\n<p>How should CoRast-Q10 be taken?</p>\r\n<p>Use CoRast-Q10 according to the dosage instructions on the product label or as recommended by your healthcare professional.</p>\r\n<p>How should CoRast-Q10 be stored?</p>\r\n<p>Store according to the conditions specified on the product packaging, generally in a cool, dry place away from direct sunlight and moisture.</p>', 'branch/assets/products/img1790241289.png', '', '', '', 'corast-q10', 3, 1);

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
  `headercenterline` varchar(255) NOT NULL,
  `opening_hour` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `web_name`, `email_id`, `alternate_email_id`, `contact_no`, `alternate_no`, `whatsapp_no`, `address`, `youtubelink`, `map_iframe`, `facebook`, `youtube`, `instagram`, `twitter`, `linkedin`, `logo`, `meta_title`, `meta_keywords`, `meta_desc`, `smart_classroom_desc`, `smart_classroom_text`, `brochure_file`, `footerdesc`, `googletag`, `headercenterline`, `opening_hour`) VALUES
(1, 'Rastomed', 'info@rastomedpharma.com', '', '9410666599', ' 7906752047', '9410666599', ' 353, Shivaji Road, Meerut, Uttar Pradesh-250001       ', '        ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7107!3d28.9845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974b6a0b0b0b0b0%3A0x0b0b0b0b0b0b0b0b!2sShivaji+Road%2C+Meerut%2C+Uttar+Pradesh+250001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin', '', '', ' https://www.instagram.com/rastomedpharma?igsh=MTZqa3VmNWljNXBuYQ%3D%3D       ', 'https://x.com/RastoMedPharma', 'https://www.linkedin.com/company/rastomed-pharma/', 'branch/assets/logo/logoImg1789968960.png', '', '', '', '', '', 'branch/images/brochure_1788931594.pdf', 'We are dedicated to providing high-quality medicines that improve lives and build a healthier tomorrow.', '', '', 'Monday - Saturday, 9 AM – 6 PM');

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
(8, '', 'Senior Consultant', 'Dr. Rakesh Sharma', 'dr-rakesh-sharma', 'RastoMed Pharma has been our trusted partner for years. Their quality and commitment are truly exceptional.', '', '1', 1),
(9, '', 'MD, Physician', 'Dr. Anjali Verma', 'dr-anjali-verma', 'The quality of their products and timely delivery helps us serve our patients better every day.', '', '2', 1),
(10, '', 'Distributor', 'Mr. Sandeep Patel', 'mr-sandeep-patel', 'Excellent services, wide product range and strong support team. Highly recommended.', '', '3', 1);

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
(8, '', 'branch/assets/banner/video1790142979182.mp4', '', '', '', 7, 68, 1),
(9, 'branch/assets/banner/img1790330798.webp', '', '', '', '', 8, 71, 1);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
