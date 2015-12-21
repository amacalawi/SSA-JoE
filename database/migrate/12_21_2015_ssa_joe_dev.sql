-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2015 at 08:07 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssa_joe_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `joe_postmeta`
--

CREATE TABLE IF NOT EXISTS `joe_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=572 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joe_postmeta`
--

INSERT INTO `joe_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(4, 5, '_edit_last', '1'),
(5, 5, '_edit_lock', '1450671304:1'),
(6, 7, '_menu_item_type', 'post_type'),
(7, 7, '_menu_item_menu_item_parent', '0'),
(8, 7, '_menu_item_object_id', '5'),
(9, 7, '_menu_item_object', 'page'),
(10, 7, '_menu_item_target', ''),
(11, 7, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(12, 7, '_menu_item_xfn', ''),
(13, 7, '_menu_item_url', ''),
(25, 11, '_edit_last', '1'),
(26, 11, '_edit_lock', '1450241597:1'),
(31, 11, '_wp_trash_meta_status', 'publish'),
(32, 11, '_wp_trash_meta_time', '1450241746'),
(33, 1, '_wp_trash_meta_status', 'publish'),
(34, 1, '_wp_trash_meta_time', '1450241746'),
(35, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:"1";}'),
(45, 16, '_edit_last', '1'),
(46, 16, '_edit_lock', '1450246323:1'),
(47, 16, '_wp_trash_meta_status', 'publish'),
(48, 16, '_wp_trash_meta_time', '1450248673'),
(49, 19, '_edit_last', '1'),
(50, 19, '_edit_lock', '1450319444:1'),
(62, 22, '_wp_attached_file', '2015/12/about-banner.png'),
(63, 22, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1600;s:6:"height";i:767;s:4:"file";s:24:"2015/12/about-banner.png";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:24:"about-banner-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:24:"about-banner-300x144.png";s:5:"width";i:300;s:6:"height";i:144;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:24:"about-banner-768x368.png";s:5:"width";i:768;s:6:"height";i:368;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:25:"about-banner-1024x491.png";s:5:"width";i:1024;s:6:"height";i:491;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(64, 19, '_thumbnail_id', '22'),
(67, 19, 'heading', 'ENTREPRENEURIAL QUALITIES'),
(72, 24, '_edit_last', '1'),
(73, 24, '_edit_lock', '1450252808:1'),
(76, 26, '_wp_attached_file', '2015/12/about-phase1.png'),
(77, 26, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:586;s:6:"height";i:504;s:4:"file";s:24:"2015/12/about-phase1.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:24:"about-phase1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:24:"about-phase1-300x258.png";s:5:"width";i:300;s:6:"height";i:258;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(78, 24, '_thumbnail_id', '26'),
(83, 29, '_edit_last', '1'),
(84, 29, '_edit_lock', '1450252805:1'),
(89, 31, '_wp_attached_file', '2015/12/stars-bg.jpg'),
(90, 31, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1366;s:6:"height";i:768;s:4:"file";s:20:"2015/12/stars-bg.jpg";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:20:"stars-bg-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:20:"stars-bg-300x169.jpg";s:5:"width";i:300;s:6:"height";i:169;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:20:"stars-bg-768x432.jpg";s:5:"width";i:768;s:6:"height";i:432;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:21:"stars-bg-1024x576.jpg";s:5:"width";i:1024;s:6:"height";i:576;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(91, 29, '_thumbnail_id', '31'),
(94, 33, '_edit_last', '1'),
(95, 33, '_edit_lock', '1450254561:1'),
(96, 34, '_wp_attached_file', '2015/12/slide1.png'),
(97, 34, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1599;s:6:"height";i:768;s:4:"file";s:18:"2015/12/slide1.png";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:18:"slide1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:18:"slide1-300x144.png";s:5:"width";i:300;s:6:"height";i:144;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:18:"slide1-768x369.png";s:5:"width";i:768;s:6:"height";i:369;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:19:"slide1-1024x492.png";s:5:"width";i:1024;s:6:"height";i:492;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(98, 35, '_wp_attached_file', '2015/12/slide2.png'),
(99, 35, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1599;s:6:"height";i:768;s:4:"file";s:18:"2015/12/slide2.png";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:18:"slide2-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:18:"slide2-300x144.png";s:5:"width";i:300;s:6:"height";i:144;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:18:"slide2-768x369.png";s:5:"width";i:768;s:6:"height";i:369;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:19:"slide2-1024x492.png";s:5:"width";i:1024;s:6:"height";i:492;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(100, 33, '_thumbnail_id', '34'),
(101, 33, 'heading', '<color class="theme-color dosis-reg">YOUR <strong class="dosis-bold">CHILD</strong> HAS WHAT IT TAKE TO START HIS</span> <color class="bcolor dosis-bold"><strong>JOURNEY</strong> OF ENTERPRENEURSHIP NOW.</span>'),
(104, 37, '_edit_last', '1'),
(105, 37, '_edit_lock', '1450254833:1'),
(106, 37, 'heading', '<color class="theme-color dosis-reg">YOUR <strong class="dosis-bold">CHILD</strong> HAS WHAT IT TAKE TO START HIS</span> <color class="bcolor dosis-bold"><strong>JOURNEY</strong> OF ENTERPRENEURSHIP NOW.</span>'),
(113, 33, 'parent_class', 'col-sm-offset-1 col-sm-6'),
(116, 37, 'parent_class', 'col-sm-offset-6 col-sm-6'),
(119, 37, '_thumbnail_id', '35'),
(124, 39, '_edit_last', '1'),
(125, 39, '_edit_lock', '1450255048:1'),
(126, 40, '_wp_attached_file', '2015/12/earth.png'),
(127, 40, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:478;s:6:"height";i:485;s:4:"file";s:17:"2015/12/earth.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"earth-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:17:"earth-296x300.png";s:5:"width";i:296;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(128, 39, '_thumbnail_id', '40'),
(131, 42, '_edit_last', '1'),
(132, 42, '_edit_lock', '1450255114:1'),
(133, 42, '_thumbnail_id', '31'),
(136, 44, '_edit_last', '1'),
(137, 44, '_edit_lock', '1450257251:1'),
(144, 44, 'heading', '<color class="theme-color">Junior Edition</color><br/> 9 to 12 years old'),
(147, 46, '_wp_attached_file', '2015/12/stud1.png'),
(148, 46, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:375;s:6:"height";i:478;s:4:"file";s:17:"2015/12/stud1.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"stud1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:17:"stud1-235x300.png";s:5:"width";i:235;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(149, 47, '_wp_attached_file', '2015/12/stud2.png'),
(150, 47, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:375;s:6:"height";i:478;s:4:"file";s:17:"2015/12/stud2.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"stud2-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:17:"stud2-235x300.png";s:5:"width";i:235;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(151, 44, '_thumbnail_id', '46'),
(154, 48, '_edit_last', '1'),
(155, 48, '_edit_lock', '1450318159:1'),
(156, 48, '_thumbnail_id', '47'),
(157, 48, 'heading', 'Teen Edition</color><br/> 13 to 16 years old'),
(162, 5, 'blanket_carousel', 'a:2:{i:0;a:4:{s:5:"image";s:52:"http://joe.dev/wp-content/uploads/2015/12/slide1.png";s:7:"heading";s:0:"";s:10:"subheading";s:210:"<color class="theme-color dosis-reg">YOUR <strong class="dosis-bold">CHILD</strong> HAS WHAT IT TAKE TO START HIS</span> <color class="bcolor dosis-bold"><strong>JOURNEY</strong> OF ENTERPRENEURSHIP NOW.</span>";s:15:"subheadingclass";s:24:"col-sm-offset-1 col-sm-6";}i:1;a:4:{s:5:"image";s:52:"http://joe.dev/wp-content/uploads/2015/12/slide2.png";s:7:"heading";s:0:"";s:10:"subheading";s:210:"<color class="theme-color dosis-reg">YOUR <strong class="dosis-bold">CHILD</strong> HAS WHAT IT TAKE TO START HIS</span> <color class="bcolor dosis-bold"><strong>JOURNEY</strong> OF ENTERPRENEURSHIP NOW.</span>";s:15:"subheadingclass";s:24:"col-sm-offset-6 col-sm-6";}}'),
(163, 5, '_thumbnail_id', '40'),
(164, 48, '_wp_trash_meta_status', 'publish'),
(165, 48, '_wp_trash_meta_time', '1450325190'),
(166, 44, '_wp_trash_meta_status', 'publish'),
(167, 44, '_wp_trash_meta_time', '1450325190'),
(168, 42, '_wp_trash_meta_status', 'publish'),
(169, 42, '_wp_trash_meta_time', '1450325190'),
(170, 37, '_wp_trash_meta_status', 'publish'),
(171, 37, '_wp_trash_meta_time', '1450325191'),
(172, 33, '_wp_trash_meta_status', 'publish'),
(173, 33, '_wp_trash_meta_time', '1450325191'),
(174, 5, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:54:"http://joe.dev/wp-content/uploads/2015/12/stars-bg.jpg";s:7:"heading";s:84:"In order to facilitate effective learning, the programme is available in two levels:";s:7:"content";s:0:"";s:13:"section_class";s:5:"stars";}}'),
(175, 5, 'blanket_parts', 'a:2:{i:0;a:4:{s:5:"image";s:51:"http://joe.dev/wp-content/uploads/2015/12/stud1.png";s:7:"heading";s:72:"<color class="theme-color">Junior Edition</color><br/> 9 to 12 years old";s:7:"content";s:0:"";s:10:"part_class";s:7:"student";}i:1;a:4:{s:5:"image";s:51:"http://joe.dev/wp-content/uploads/2015/12/stud2.png";s:7:"heading";s:71:"<color class="theme-color">Teen Edition</color><br/> 13 to 16 years old";s:7:"content";s:0:"";s:10:"part_class";s:7:"student";}}'),
(176, 51, '_edit_last', '1'),
(177, 51, '_edit_lock', '1450333022:1'),
(178, 51, '_thumbnail_id', '40'),
(179, 52, '_edit_last', '1'),
(180, 52, '_edit_lock', '1450333564:1'),
(181, 52, '_thumbnail_id', '26'),
(182, 53, '_edit_last', '1'),
(183, 53, '_edit_lock', '1450333831:1'),
(184, 53, '_thumbnail_id', '40'),
(185, 54, '_edit_last', '1'),
(186, 54, '_edit_lock', '1450333901:1'),
(187, 54, '_thumbnail_id', '46'),
(188, 55, '_edit_last', '1'),
(189, 55, '_edit_lock', '1450338924:1'),
(190, 56, '_wp_attached_file', '2015/12/gallery1.png'),
(191, 56, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:276;s:6:"height";i:276;s:4:"file";s:20:"2015/12/gallery1.png";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:20:"gallery1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(192, 57, '_wp_attached_file', '2015/12/gallery2.png'),
(193, 57, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:276;s:6:"height";i:276;s:4:"file";s:20:"2015/12/gallery2.png";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:20:"gallery2-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(194, 58, '_wp_attached_file', '2015/12/gallery3.png'),
(195, 58, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:276;s:6:"height";i:276;s:4:"file";s:20:"2015/12/gallery3.png";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:20:"gallery3-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(196, 55, 'wp_owl_images', 'a:3:{i:56;s:54:"http://joe.dev/wp-content/uploads/2015/12/gallery1.png";i:57;s:54:"http://joe.dev/wp-content/uploads/2015/12/gallery2.png";i:58;s:54:"http://joe.dev/wp-content/uploads/2015/12/gallery3.png";}'),
(197, 55, 'wp_owl_image_size', '3'),
(198, 55, 'wp_owl_rel', 'lightbox'),
(199, 55, 'wp_owl_link_to_size', '4'),
(200, 55, 'wp_owl_items', '3'),
(201, 55, 'wp_owl_itemsDesktop', '4'),
(202, 55, 'wp_owl_itemsDesktopSmall', '3'),
(203, 55, 'wp_owl_itemsTablet', '2'),
(204, 55, 'wp_owl_itemsMobile', '1'),
(205, 55, 'wp_owl_slideSpeed', '200'),
(206, 55, 'wp_owl_paginationSpeed', '800'),
(207, 55, 'wp_owl_rewindSpeed', '1000'),
(208, 55, 'wp_owl_rewindNav', 'on'),
(210, 55, 'wp_owl_navigationTextNext', 'Next'),
(211, 55, 'wp_owl_navigationTextPrev', 'Prev'),
(212, 55, 'wp_owl_pagination', 'on'),
(213, 55, 'wp_owl_responsive', 'on'),
(214, 55, 'wp_owl_responsiveRefreshRate', '200'),
(215, 55, 'wp_owl_lazyFollow', 'on'),
(216, 55, 'wp_owl_dragBeforeAnimFinish', 'on'),
(217, 55, 'wp_owl_mouseDrag', 'on'),
(218, 55, 'wp_owl_touchDrag', 'on'),
(219, 55, 'wp_owl_stopOnHover', 'on'),
(220, 55, 'wp_owl_navigation', 'on'),
(221, 55, 'wp_owl_itemsScaleUp', 'on'),
(222, 55, 'wp_owl_addClassActive', 'on'),
(223, 59, '_edit_last', '1'),
(224, 59, '_edit_lock', '1450334835:1'),
(225, 59, '_wp_trash_meta_status', 'draft'),
(226, 59, '_wp_trash_meta_time', '1450334926'),
(227, 81, '_edit_last', '1'),
(228, 81, '_edit_lock', '1450431696:1'),
(229, 81, 'pms_photos', 'a:1:{s:8:"carousel";a:4:{i:0;a:3:{s:5:"image";s:53:"http://joe.dev/wp-content/uploads/2015/12/gallery.png";s:7:"heading";s:0:"";s:10:"subheading";s:0:"";}i:1;a:3:{s:5:"image";s:53:"http://joe.dev/wp-content/uploads/2015/12/gallery.png";s:7:"heading";s:0:"";s:10:"subheading";s:0:"";}i:2;a:3:{s:5:"image";s:53:"http://joe.dev/wp-content/uploads/2015/12/gallery.png";s:7:"heading";s:0:"";s:10:"subheading";s:0:"";}i:3;a:3:{s:5:"image";s:53:"http://joe.dev/wp-content/uploads/2015/12/gallery.png";s:7:"heading";s:7:"Heaidng";s:10:"subheading";s:10:"headinasub";}}}'),
(230, 81, 'pms_photo_options', 'a:1:{s:8:"per_item";s:1:"3";}'),
(231, 82, '_edit_last', '1'),
(232, 82, '_edit_lock', '1450344045:1'),
(233, 83, '_wp_attached_file', '2015/12/avatar.png'),
(234, 83, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:122;s:6:"height";i:122;s:4:"file";s:18:"2015/12/avatar.png";s:5:"sizes";a:0:{}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(235, 82, '_thumbnail_id', '83'),
(236, 82, 'pms_photos', 'a:1:{s:8:"carousel";a:1:{i:0;a:1:{s:5:"image";s:0:"";}}}'),
(237, 84, '_edit_last', '1'),
(238, 84, '_edit_lock', '1450663698:1'),
(239, 84, '_thumbnail_id', '83'),
(240, 85, '_edit_last', '1'),
(241, 85, '_edit_lock', '1450347123:1'),
(242, 85, '_thumbnail_id', '83'),
(243, 86, '_edit_last', '1'),
(244, 86, '_edit_lock', '1450670790:1'),
(245, 87, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(246, 87, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(247, 87, '_menu_item_type', 'post_type'),
(248, 87, '_menu_item_menu_item_parent', '0'),
(249, 87, '_menu_item_object_id', '86'),
(250, 87, '_menu_item_object', 'page'),
(251, 87, '_menu_item_target', ''),
(252, 87, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(253, 87, '_menu_item_xfn', ''),
(254, 87, '_menu_item_url', ''),
(255, 86, 'blanket_sections', 'a:2:{i:0;a:4:{s:5:"image";s:58:"http://joe.dev/wp-content/uploads/2015/12/about-phase1.png";s:7:"heading";s:21:"At the age of 9 to 16";s:7:"content";s:271:"children''s personalities are known to be malleable which allows education to play an important role in developing personality traits and acquiring entrepreneurial skills. The programme will have various focal points based on the children''s age group and education levels.";s:13:"section_class";s:12:"about-phase1";}i:1;a:4:{s:5:"image";s:54:"http://joe.dev/wp-content/uploads/2015/12/stars-bg.jpg";s:7:"heading";s:231:"<strong>The mission of JoE</strong> is to provide a unique learning experience to children in helping them to develop an entrepreneurial mindset through experiential learning in order for them to add significant value to the world.";s:7:"content";s:0:"";s:13:"section_class";s:5:"stars";}}'),
(256, 86, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(257, 86, 'blanket_heading', 'a:3:{s:7:"heading";s:9:"ABOUT JoE";s:10:"subheading";s:25:"ENTREPRENEURIAL QUALITIES";s:7:"content";s:123:"are already present in every individual and can be developed further through education.\r\nJoE serves to realise this belief.";}'),
(258, 89, '_edit_last', '1'),
(270, 89, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(271, 89, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(272, 89, 'blanket_heading', 'a:3:{s:7:"heading";s:10:"PROGRAMMES";s:10:"subheading";s:0:"";s:7:"content";s:302:"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim, facilisis at vero eros et accumsan et iusto odio dignissim, facilisis at vero eros et accumsan et iusto odio dignissim.";}'),
(273, 89, '_edit_lock', '1450662808:1'),
(274, 94, '_wp_attached_file', '2015/12/programmes-banner.jpg'),
(275, 94, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1598;s:6:"height";i:768;s:4:"file";s:29:"2015/12/programmes-banner.jpg";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:29:"programmes-banner-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:29:"programmes-banner-300x144.jpg";s:5:"width";i:300;s:6:"height";i:144;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:29:"programmes-banner-768x369.jpg";s:5:"width";i:768;s:6:"height";i:369;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:30:"programmes-banner-1024x492.jpg";s:5:"width";i:1024;s:6:"height";i:492;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(276, 89, '_thumbnail_id', '94'),
(277, 86, '_thumbnail_id', '22'),
(278, 39, '_wp_trash_meta_status', 'publish'),
(279, 39, '_wp_trash_meta_time', '1450407402'),
(280, 29, '_wp_trash_meta_status', 'publish'),
(281, 29, '_wp_trash_meta_time', '1450407402'),
(282, 24, '_wp_trash_meta_status', 'publish'),
(283, 24, '_wp_trash_meta_time', '1450407402'),
(284, 19, '_wp_trash_meta_status', 'publish'),
(285, 19, '_wp_trash_meta_time', '1450407402'),
(286, 96, '_edit_last', '1'),
(287, 96, '_edit_lock', '1450666566:1'),
(288, 96, '_thumbnail_id', '83'),
(289, 96, 'phasems_heading', 'a:2:{s:7:"heading";s:35:"SOFT SKILLS:<br>MINDSET DEVELOPMENT";s:10:"subheading";s:10:"(3 Months)";}'),
(299, 99, '_edit_last', '1'),
(300, 99, '_edit_lock', '1450666828:1'),
(301, 99, 'phasems_heading', 'a:2:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";}'),
(302, 99, '_thumbnail_id', '58'),
(303, 100, '_edit_last', '1'),
(304, 100, '_edit_lock', '1450666560:1'),
(305, 100, '_thumbnail_id', '57'),
(306, 102, '_wp_attached_file', '2015/12/gallery.png'),
(307, 102, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:241;s:6:"height";i:240;s:4:"file";s:19:"2015/12/gallery.png";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:19:"gallery-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(308, 103, '_edit_last', '1'),
(309, 103, '_edit_lock', '1450666573:1'),
(310, 103, '_thumbnail_id', '22'),
(405, 118, '_menu_item_type', 'post_type'),
(406, 118, '_menu_item_menu_item_parent', '0'),
(407, 118, '_menu_item_object_id', '89'),
(408, 118, '_menu_item_object', 'page'),
(409, 118, '_menu_item_target', ''),
(410, 118, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(411, 118, '_menu_item_xfn', ''),
(412, 118, '_menu_item_url', ''),
(423, 120, '_edit_last', '1'),
(424, 120, '_edit_lock', '1450663725:1'),
(425, 120, '_thumbnail_id', '83'),
(426, 121, '_edit_last', '1'),
(427, 121, '_edit_lock', '1450664311:1'),
(428, 121, '_thumbnail_id', '83'),
(429, 122, '_edit_last', '1'),
(430, 122, '_edit_lock', '1450665510:1'),
(431, 122, '_thumbnail_id', '83'),
(443, 124, '_edit_last', '1'),
(444, 125, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(445, 125, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(446, 125, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(447, 125, '_menu_item_type', 'post_type'),
(448, 125, '_menu_item_menu_item_parent', '0'),
(449, 125, '_menu_item_object_id', '124'),
(450, 125, '_menu_item_object', 'page'),
(451, 125, '_menu_item_target', ''),
(452, 125, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(453, 125, '_menu_item_xfn', ''),
(454, 125, '_menu_item_url', ''),
(455, 124, 'blanket_sections', 'a:4:{i:0;a:4:{s:5:"image";s:50:"http://joe.dev/wp-content/uploads/2015/12/exp1.png";s:7:"heading";s:7:"PHASE I";s:7:"content";s:231:"<h1>SOFT SKILLS: <br/>MINDSET DEVELOPMENT</h1>\r\n<p>is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.</p>";s:13:"section_class";s:6:"phase1";}i:1;a:5:{s:5:"image";s:50:"http://joe.dev/wp-content/uploads/2015/12/exp2.png";s:11:"parentclass";s:9:"undefined";s:7:"heading";s:8:"Phase II";s:7:"content";s:289:"<h1 class="text-right">SOFT SKILLS: COMMUNICATION <br/> &amp; BEHAVIOURAL SKILLS</h1>\r\n<p class="text-right">is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.</p>";s:13:"section_class";s:6:"phase2";}i:2;a:5:{s:5:"image";s:50:"http://joe.dev/wp-content/uploads/2015/12/exp3.png";s:11:"parentclass";s:9:"undefined";s:7:"heading";s:9:"Phase III";s:7:"content";s:231:"<h1>SOFT SKILLS: <br/>MINDSET DEVELOPMENT</h1>\r\n<p>is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.</p>";s:13:"section_class";s:6:"phase3";}i:3;a:5:{s:5:"image";s:50:"http://joe.dev/wp-content/uploads/2015/12/exp4.png";s:11:"parentclass";s:9:"undefined";s:7:"heading";s:8:"Phase IV";s:7:"content";s:273:"<h1 class="text-right">FINAL PROJECT &amp; <br/>MINI-MARKET FAIR</h1>\r\n<p class="text-right">is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.</p>";s:13:"section_class";s:6:"phase4";}}'),
(456, 124, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(457, 124, 'blanket_heading', 'a:3:{s:7:"heading";s:28:"EXPERIENCING JoE IN 4 PHASES";s:10:"subheading";s:49:"JoE HAS BEEN DESIGNED TO BE DELIVERED IN 4 PHASES";s:7:"content";s:327:"to incorporate both soft skills and technical skills. In JoE, we believe that entreprenuership is not just about financial literacy. If it was that simple, then why do 99% of busienss ventures fail? There''s so much more to that! Which is why JoE includes soft skills such as creativity, problem solving and innovative thinking.";}'),
(458, 124, '_edit_lock', '1450667644:1'),
(459, 127, '_wp_attached_file', '2015/12/exp-banner.png'),
(460, 127, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1600;s:6:"height";i:769;s:4:"file";s:22:"2015/12/exp-banner.png";s:5:"sizes";a:4:{s:9:"thumbnail";a:4:{s:4:"file";s:22:"exp-banner-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:22:"exp-banner-300x144.png";s:5:"width";i:300;s:6:"height";i:144;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:22:"exp-banner-768x369.png";s:5:"width";i:768;s:6:"height";i:369;s:9:"mime-type";s:9:"image/png";}s:5:"large";a:4:{s:4:"file";s:23:"exp-banner-1024x492.png";s:5:"width";i:1024;s:6:"height";i:492;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(461, 124, '_thumbnail_id', '127'),
(462, 128, '_wp_attached_file', '2015/12/exp1.png'),
(463, 128, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:328;s:6:"height";i:328;s:4:"file";s:16:"2015/12/exp1.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"exp1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:16:"exp1-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(464, 129, '_wp_attached_file', '2015/12/exp2.png'),
(465, 129, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:328;s:6:"height";i:328;s:4:"file";s:16:"2015/12/exp2.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"exp2-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:16:"exp2-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(466, 130, '_wp_attached_file', '2015/12/exp3.png'),
(467, 130, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:328;s:6:"height";i:328;s:4:"file";s:16:"2015/12/exp3.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"exp3-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:16:"exp3-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(468, 131, '_wp_attached_file', '2015/12/exp4.png'),
(469, 131, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:328;s:6:"height";i:328;s:4:"file";s:16:"2015/12/exp4.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"exp4-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:16:"exp4-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;s:8:"keywords";a:0:{}}}'),
(470, 132, '_edit_last', '1'),
(471, 133, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(472, 133, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(473, 133, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(474, 133, '_menu_item_type', 'post_type'),
(475, 133, '_menu_item_menu_item_parent', '0'),
(476, 133, '_menu_item_object_id', '132'),
(477, 133, '_menu_item_object', 'page'),
(478, 133, '_menu_item_target', ''),
(479, 133, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(480, 133, '_menu_item_xfn', ''),
(481, 133, '_menu_item_url', ''),
(482, 132, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(483, 132, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(484, 132, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(485, 132, '_edit_lock', '1450673349:1'),
(486, 135, '_edit_last', '1'),
(487, 135, '_edit_lock', '1450670775:1'),
(489, 135, '_thumbnail_id', '46'),
(490, 132, 'blanket_contact', 'a:10:{s:7:"company";s:33:"Journey of Entrepreneurship (JoE)";s:4:"unit";s:43:"11 Eunos Road 8 Lifelong Learning Institute";s:6:"street";s:0:"";s:4:"brgy";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:3:"zip";s:0:"";s:7:"country";s:23:"#06-01 Singapore 408601";s:3:"map";a:2:{s:4:"long";s:7:"44.5403";s:3:"lat";s:8:"-78.5463";}s:6:"social";a:3:{s:8:"facebook";s:23:"http://www.facebook.com";s:7:"twitter";s:22:"http://www.twitter.com";s:4:"site";s:19:"http://linkedin.com";}}'),
(491, 137, '_edit_last', '1'),
(492, 137, '_edit_lock', '1450677728:1'),
(493, 137, '_thumbnail_id', '83'),
(494, 138, '_edit_last', '1'),
(495, 138, '_edit_lock', '1450677758:1'),
(496, 138, '_thumbnail_id', '83'),
(497, 139, '_edit_last', '1'),
(498, 139, '_edit_lock', '1450678287:1'),
(510, 139, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(511, 139, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(512, 139, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(513, 142, '_edit_last', '1'),
(514, 142, '_edit_lock', '1450678306:1'),
(526, 142, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(527, 142, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(528, 142, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(529, 145, '_edit_last', '1'),
(530, 145, '_edit_lock', '1450678319:1'),
(542, 145, 'blanket_sections', 'a:1:{i:0;a:4:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:7:"content";s:0:"";s:13:"section_class";s:0:"";}}'),
(543, 145, 'blanket_parts', 'a:2:{i:0;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}i:1;a:3:{s:5:"image";s:0:"";s:7:"heading";s:0:"";s:10:"part_class";s:0:"";}}'),
(544, 145, 'blanket_heading', 'a:3:{s:7:"heading";s:0:"";s:10:"subheading";s:0:"";s:7:"content";s:0:"";}'),
(545, 148, '_menu_item_type', 'post_type'),
(546, 148, '_menu_item_menu_item_parent', '0'),
(547, 148, '_menu_item_object_id', '145'),
(548, 148, '_menu_item_object', 'page'),
(549, 148, '_menu_item_target', ''),
(550, 148, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(551, 148, '_menu_item_xfn', ''),
(552, 148, '_menu_item_url', ''),
(554, 149, '_menu_item_type', 'post_type'),
(555, 149, '_menu_item_menu_item_parent', '0'),
(556, 149, '_menu_item_object_id', '142'),
(557, 149, '_menu_item_object', 'page'),
(558, 149, '_menu_item_target', ''),
(559, 149, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(560, 149, '_menu_item_xfn', ''),
(561, 149, '_menu_item_url', ''),
(563, 150, '_menu_item_type', 'post_type'),
(564, 150, '_menu_item_menu_item_parent', '0'),
(565, 150, '_menu_item_object_id', '139'),
(566, 150, '_menu_item_object', 'page'),
(567, 150, '_menu_item_target', ''),
(568, 150, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(569, 150, '_menu_item_xfn', ''),
(570, 150, '_menu_item_url', '');

-- --------------------------------------------------------

--
-- Table structure for table `joe_posts`
--

CREATE TABLE IF NOT EXISTS `joe_posts` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joe_posts`
--

INSERT INTO `joe_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2015-12-16 04:38:58', '2015-12-16 04:38:58', 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!', 'Hello world!', '', 'trash', 'open', 'open', '', 'hello-world', '', '', '2015-12-16 12:55:46', '2015-12-16 04:55:46', '', 0, 'http://joe.dev/?p=1', 0, 'post', '', 1),
(3, 1, '2015-12-16 04:39:17', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2015-12-16 04:39:17', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?p=3', 0, 'post', '', 0),
(5, 1, '2015-12-16 04:43:35', '2015-12-16 04:43:35', 'is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.', 'Journey of Enterepreneurship (JoE)', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2015-12-17 14:09:54', '2015-12-17 06:09:54', '', 0, 'http://joe.dev/?page_id=5', 1, 'page', '', 0),
(6, 1, '2015-12-16 04:43:35', '2015-12-16 04:43:35', '', 'Home', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2015-12-16 04:43:35', '2015-12-16 04:43:35', '', 5, 'http://joe.dev/uncategorized/5-revision-v1', 0, 'revision', '', 0),
(7, 1, '2015-12-16 04:43:49', '2015-12-16 04:43:49', '', 'Home', '', 'publish', 'closed', 'closed', '', '7', '', '', '2015-12-21 14:14:40', '2015-12-21 06:14:40', '', 0, 'http://joe.dev/?p=7', 1, 'nav_menu_item', '', 0),
(11, 1, '2015-12-16 12:55:13', '2015-12-16 04:55:13', '', 'Phase 1', '', 'trash', 'open', 'open', '', 'phase-1', '', '', '2015-12-16 12:55:46', '2015-12-16 04:55:46', '', 0, 'http://joe.dev/?p=11', 0, 'post', '', 0),
(12, 1, '2015-12-16 12:55:13', '2015-12-16 04:55:13', '', 'Phase 1', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2015-12-16 12:55:13', '2015-12-16 04:55:13', '', 11, 'http://joe.dev/uncategorized/11-revision-v1', 0, 'revision', '', 0),
(13, 1, '2015-12-16 12:55:46', '2015-12-16 04:55:46', 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!', 'Hello world!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2015-12-16 12:55:46', '2015-12-16 04:55:46', '', 1, 'http://joe.dev/uncategorized/1-revision-v1', 0, 'revision', '', 0),
(15, 1, '2015-12-16 12:57:42', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2015-12-16 12:57:42', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?p=15', 0, 'post', '', 0),
(16, 1, '2015-12-16 14:14:14', '2015-12-16 06:14:14', 'asd', 'Pjask', '', 'trash', 'open', 'open', '', 'pjask', '', '', '2015-12-16 14:51:13', '2015-12-16 06:51:13', '', 0, 'http://joe.dev/?p=16', 0, 'post', '', 0),
(17, 1, '2015-12-16 14:14:14', '2015-12-16 06:14:14', 'asd', 'Pjask', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2015-12-16 14:14:14', '2015-12-16 06:14:14', '', 16, 'http://joe.dev/uncategorized/16-revision-v1', 0, 'revision', '', 0),
(18, 1, '2015-12-16 14:16:30', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2015-12-16 14:16:30', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?p=18', 0, 'post', '', 0),
(19, 1, '2015-12-16 14:52:51', '2015-12-16 06:52:51', 'are already present in every individual and can be developed further through education.\r\nJoE serves to realise this belief.', 'ABOUT JoE', '', 'trash', 'open', 'open', '', 'about-joe', '', '', '2015-12-18 10:56:42', '2015-12-18 02:56:42', '', 0, 'http://joe.dev/?p=19', 0, 'post', '', 0),
(20, 1, '2015-12-16 14:52:51', '2015-12-16 06:52:51', 'ENTREPRENEURIAL QUALITIES\r\nare already present in every individual and can be developed further through education.\r\nJoE serves to realise this belief.', 'ABOUT JoE', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2015-12-16 14:52:51', '2015-12-16 06:52:51', '', 19, 'http://joe.dev/19-revision-v1', 0, 'revision', '', 0),
(22, 1, '2015-12-16 15:08:09', '2015-12-16 07:08:09', '', 'about-banner', '', 'inherit', 'open', 'closed', '', 'about-banner', '', '', '2015-12-16 15:08:09', '2015-12-16 07:08:09', '', 19, 'http://joe.dev/wp-content/uploads/2015/12/about-banner.png', 0, 'attachment', 'image/png', 0),
(23, 1, '2015-12-16 15:31:28', '2015-12-16 07:31:28', 'are already present in every individual and can be developed further through education.\r\nJoE serves to realise this belief.', 'ABOUT JoE', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2015-12-16 15:31:28', '2015-12-16 07:31:28', '', 19, 'http://joe.dev/uncategorized/19-revision-v1', 0, 'revision', '', 0),
(24, 1, '2015-12-16 15:41:25', '2015-12-16 07:41:25', 'children''s personalities are known to be malleable which allows education to play an important role in developing personality traits and acquiring entrepreneurial skills. The programme will have various focal points based on the children''s age group and education levels.', 'At the age of 9 to 16', '', 'trash', 'open', 'open', '', 'about-phase-1', '', '', '2015-12-18 10:56:42', '2015-12-18 02:56:42', '', 0, 'http://joe.dev/?p=24', 0, 'post', '', 0),
(25, 1, '2015-12-16 15:41:25', '2015-12-16 07:41:25', '', 'About Phase 1', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2015-12-16 15:41:25', '2015-12-16 07:41:25', '', 24, 'http://joe.dev/uncategorized/24-revision-v1', 0, 'revision', '', 0),
(26, 1, '2015-12-16 15:41:40', '2015-12-16 07:41:40', '', 'about-phase1', '', 'inherit', 'open', 'closed', '', 'about-phase1', '', '', '2015-12-16 15:41:40', '2015-12-16 07:41:40', '', 24, 'http://joe.dev/wp-content/uploads/2015/12/about-phase1.png', 0, 'attachment', 'image/png', 0),
(27, 1, '2015-12-16 15:41:58', '2015-12-16 07:41:58', '', 'At the age of 9 to 16', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2015-12-16 15:41:58', '2015-12-16 07:41:58', '', 24, 'http://joe.dev/uncategorized/24-revision-v1', 0, 'revision', '', 0),
(28, 1, '2015-12-16 15:42:14', '2015-12-16 07:42:14', 'children''s personalities are known to be malleable which allows education to play an important role in developing personality traits and acquiring entrepreneurial skills. The programme will have various focal points based on the children''s age group and education levels.', 'At the age of 9 to 16', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2015-12-16 15:42:14', '2015-12-16 07:42:14', '', 24, 'http://joe.dev/uncategorized/24-revision-v1', 0, 'revision', '', 0),
(29, 1, '2015-12-16 15:59:31', '2015-12-16 07:59:31', '<strong>The mission of JoE</strong> is to provide a unique learning experience to children in helping them to develop an entrepreneurial mindset through experiential learning in order for them to add significant value to the world.', 'The Mission of JoE', '', 'trash', 'open', 'open', '', 'the-mission-of-joe', '', '', '2015-12-18 10:56:42', '2015-12-18 02:56:42', '', 0, 'http://joe.dev/?p=29', 0, 'post', '', 0),
(30, 1, '2015-12-16 15:59:31', '2015-12-16 07:59:31', '', 'The Mission of JoE', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2015-12-16 15:59:31', '2015-12-16 07:59:31', '', 29, 'http://joe.dev/uncategorized/29-revision-v1', 0, 'revision', '', 0),
(31, 1, '2015-12-16 16:00:39', '2015-12-16 08:00:39', '', 'stars-bg', '', 'inherit', 'open', 'closed', '', 'stars-bg', '', '', '2015-12-16 16:00:39', '2015-12-16 08:00:39', '', 29, 'http://joe.dev/wp-content/uploads/2015/12/stars-bg.jpg', 0, 'attachment', 'image/jpeg', 0),
(32, 1, '2015-12-16 16:00:44', '2015-12-16 08:00:44', '<strong>The mission of JoE</strong> is to provide a unique learning experience to children in helping them to develop an entrepreneurial mindset through experiential learning in order for them to add significant value to the world.', 'The Mission of JoE', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2015-12-16 16:00:44', '2015-12-16 08:00:44', '', 29, 'http://joe.dev/uncategorized/29-revision-v1', 0, 'revision', '', 0),
(33, 1, '2015-12-16 16:18:35', '2015-12-16 08:18:35', '', 'Home Carousel Slide 1', '', 'trash', 'open', 'open', '', 'home-carousel-slide-1', '', '', '2015-12-17 12:06:31', '2015-12-17 04:06:31', '', 0, 'http://joe.dev/?p=33', 0, 'post', '', 0),
(34, 1, '2015-12-16 16:16:54', '2015-12-16 08:16:54', '', 'slide1', '', 'inherit', 'open', 'closed', '', 'slide1', '', '', '2015-12-16 16:16:54', '2015-12-16 08:16:54', '', 33, 'http://joe.dev/wp-content/uploads/2015/12/slide1.png', 0, 'attachment', 'image/png', 0),
(35, 1, '2015-12-16 16:16:56', '2015-12-16 08:16:56', '', 'slide2', '', 'inherit', 'open', 'closed', '', 'slide2', '', '', '2015-12-16 16:16:56', '2015-12-16 08:16:56', '', 33, 'http://joe.dev/wp-content/uploads/2015/12/slide2.png', 0, 'attachment', 'image/png', 0),
(36, 1, '2015-12-16 16:18:35', '2015-12-16 08:18:35', '', 'Home Carousel Slide 1', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2015-12-16 16:18:35', '2015-12-16 08:18:35', '', 33, 'http://joe.dev/uncategorized/33-revision-v1', 0, 'revision', '', 0),
(37, 1, '2015-12-16 16:25:41', '2015-12-16 08:25:41', '', 'Home Carousel Slide 2', '', 'trash', 'open', 'open', '', 'home-carousel-slide-2', '', '', '2015-12-17 12:06:31', '2015-12-17 04:06:31', '', 0, 'http://joe.dev/?p=37', 0, 'post', '', 0),
(38, 1, '2015-12-16 16:25:41', '2015-12-16 08:25:41', '', 'Home Carousel Slide 2', '', 'inherit', 'closed', 'closed', '', '37-revision-v1', '', '', '2015-12-16 16:25:41', '2015-12-16 08:25:41', '', 37, 'http://joe.dev/uncategorized/37-revision-v1', 0, 'revision', '', 0),
(39, 1, '2015-12-16 16:36:56', '2015-12-16 08:36:56', 'is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.', 'Journey of Enterepreneurship (JoE)', '', 'trash', 'open', 'open', '', 'journey-of-enterepreneurship-joe', '', '', '2015-12-18 10:56:42', '2015-12-18 02:56:42', '', 0, 'http://joe.dev/?p=39', 0, 'post', '', 0),
(40, 1, '2015-12-16 16:36:50', '2015-12-16 08:36:50', '', 'earth', '', 'inherit', 'open', 'closed', '', 'earth', '', '', '2015-12-16 16:36:50', '2015-12-16 08:36:50', '', 39, 'http://joe.dev/wp-content/uploads/2015/12/earth.png', 0, 'attachment', 'image/png', 0),
(41, 1, '2015-12-16 16:36:56', '2015-12-16 08:36:56', 'is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.', 'Journey of Enterepreneurship (JoE)', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2015-12-16 16:36:56', '2015-12-16 08:36:56', '', 39, 'http://joe.dev/uncategorized/39-revision-v1', 0, 'revision', '', 0),
(42, 1, '2015-12-16 16:40:42', '2015-12-16 08:40:42', 'In order to facilitate effective learning, the programme is available in two levels:', 'Home Heading with Background', '', 'trash', 'open', 'open', '', 'home-heading-with-background', '', '', '2015-12-17 12:06:30', '2015-12-17 04:06:30', '', 0, 'http://joe.dev/?p=42', 0, 'post', '', 0),
(43, 1, '2015-12-16 16:40:42', '2015-12-16 08:40:42', 'In order to facilitate effective learning, the programme is available in two levels:', 'Home Heading with Background', '', 'inherit', 'closed', 'closed', '', '42-revision-v1', '', '', '2015-12-16 16:40:42', '2015-12-16 08:40:42', '', 42, 'http://joe.dev/uncategorized/42-revision-v1', 0, 'revision', '', 0),
(44, 1, '2015-12-16 16:46:51', '2015-12-16 08:46:51', '', 'Home Section 4 Left Side', '', 'trash', 'open', 'open', '', 'home-section-4-left-side', '', '', '2015-12-17 12:06:30', '2015-12-17 04:06:30', '', 0, 'http://joe.dev/?p=44', 0, 'post', '', 0),
(45, 1, '2015-12-16 16:46:51', '2015-12-16 08:46:51', '', 'Home Section 4 Left Side', '', 'inherit', 'closed', 'closed', '', '44-revision-v1', '', '', '2015-12-16 16:46:51', '2015-12-16 08:46:51', '', 44, 'http://joe.dev/uncategorized/44-revision-v1', 0, 'revision', '', 0),
(46, 1, '2015-12-16 17:00:39', '2015-12-16 09:00:39', '', 'stud1', '', 'inherit', 'open', 'closed', '', 'stud1', '', '', '2015-12-16 17:00:39', '2015-12-16 09:00:39', '', 44, 'http://joe.dev/wp-content/uploads/2015/12/stud1.png', 0, 'attachment', 'image/png', 0),
(47, 1, '2015-12-16 17:00:40', '2015-12-16 09:00:40', '', 'stud2', '', 'inherit', 'open', 'closed', '', 'stud2', '', '', '2015-12-16 17:00:40', '2015-12-16 09:00:40', '', 44, 'http://joe.dev/wp-content/uploads/2015/12/stud2.png', 0, 'attachment', 'image/png', 0),
(48, 1, '2015-12-16 17:02:11', '2015-12-16 09:02:11', '', 'Home Section 4 Right Side', '', 'trash', 'open', 'open', '', 'home-section-4-right-side', '', '', '2015-12-17 12:06:30', '2015-12-17 04:06:30', '', 0, 'http://joe.dev/?p=48', 0, 'post', '', 0),
(49, 1, '2015-12-16 17:02:11', '2015-12-16 09:02:11', '', 'Home Section 4 Right Side', '', 'inherit', 'closed', 'closed', '', '48-revision-v1', '', '', '2015-12-16 17:02:11', '2015-12-16 09:02:11', '', 48, 'http://joe.dev/uncategorized/48-revision-v1', 0, 'revision', '', 0),
(50, 1, '2015-12-17 11:53:01', '2015-12-17 03:53:01', 'is a 4-phased programme which endeavours to enlighten its learners of aged 9 to 16 on concepts related to entrepreneurship and financial literacy through experiential learning.', 'Journey of Enterepreneurship (JoE)', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2015-12-17 11:53:01', '2015-12-17 03:53:01', '', 5, 'http://joe.dev/uncategorized/5-revision-v1', 0, 'revision', '', 0),
(51, 1, '2015-12-17 14:17:45', '2015-12-17 06:17:45', '', 'Photo Gallery', '', 'publish', 'closed', 'closed', '', 'photo-gallery', '', '', '2015-12-17 14:19:23', '2015-12-17 06:19:23', '', 0, 'http://joe.dev/?post_type=flexslider&#038;p=51', 0, 'flexslider', '', 0),
(52, 1, '2015-12-17 14:19:39', '2015-12-17 06:19:39', '', 'Photo gallery 1', '', 'publish', 'closed', 'closed', '', 'photo-gallery-1', '', '', '2015-12-17 14:19:39', '2015-12-17 06:19:39', '', 0, 'http://joe.dev/?post_type=flexslider&#038;p=52', 0, 'flexslider', '', 0),
(53, 1, '2015-12-17 14:32:44', '2015-12-17 06:32:44', '', 'Photo 1', '', 'publish', 'closed', 'closed', '', 'photo-1', '', '', '2015-12-17 14:32:44', '2015-12-17 06:32:44', '', 0, 'http://joe.dev/?post_type=ocw_carousel&#038;p=53', 1, 'ocw_carousel', '', 0),
(54, 1, '2015-12-17 14:33:07', '2015-12-17 06:33:07', '', 'Photo 2', '', 'publish', 'closed', 'closed', '', 'photo-2', '', '', '2015-12-17 14:33:07', '2015-12-17 06:33:07', '', 0, 'http://joe.dev/?post_type=ocw_carousel&#038;p=54', 2, 'ocw_carousel', '', 0),
(55, 1, '2015-12-17 14:40:10', '2015-12-17 06:40:10', '', 'Photo Gallery', '', 'publish', 'closed', 'closed', '', 'photo-gallery', '', '', '2015-12-17 15:57:43', '2015-12-17 07:57:43', '', 0, 'http://joe.dev/?post_type=wp_owl&#038;p=55', 0, 'wp_owl', '', 0),
(56, 1, '2015-12-17 14:39:03', '2015-12-17 06:39:03', '', 'gallery1', '', 'inherit', 'open', 'closed', '', 'gallery1', '', '', '2015-12-17 14:39:03', '2015-12-17 06:39:03', '', 0, 'http://joe.dev/wp-content/uploads/2015/12/gallery1.png', 0, 'attachment', 'image/png', 0),
(57, 1, '2015-12-17 14:39:13', '2015-12-17 06:39:13', '', 'gallery2', '', 'inherit', 'open', 'closed', '', 'gallery2', '', '', '2015-12-17 14:39:13', '2015-12-17 06:39:13', '', 0, 'http://joe.dev/wp-content/uploads/2015/12/gallery2.png', 0, 'attachment', 'image/png', 0),
(58, 1, '2015-12-17 14:39:13', '2015-12-17 06:39:13', '', 'gallery3', '', 'inherit', 'open', 'closed', '', 'gallery3', '', '', '2015-12-17 14:39:13', '2015-12-17 06:39:13', '', 0, 'http://joe.dev/wp-content/uploads/2015/12/gallery3.png', 0, 'attachment', 'image/png', 0),
(59, 1, '2015-12-17 14:47:15', '2015-12-17 06:47:15', '', 'Testimonials', '', 'trash', 'closed', 'closed', '', 'testimonials', '', '', '2015-12-17 14:48:47', '2015-12-17 06:48:47', '', 0, 'http://joe.dev/?post_type=wp_owl&#038;p=59', 0, 'wp_owl', '', 0),
(60, 1, '2015-12-17 15:09:25', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:09:25', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=60', 0, 'gallery', '', 0),
(61, 1, '2015-12-17 15:09:48', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:09:48', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=61', 0, 'gallery', '', 0),
(62, 1, '2015-12-17 15:10:41', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:10:41', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=62', 0, 'gallery', '', 0),
(63, 1, '2015-12-17 15:12:49', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:12:49', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=63', 0, 'gallery', '', 0),
(64, 1, '2015-12-17 15:13:29', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:13:29', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=64', 0, 'gallery', '', 0),
(65, 1, '2015-12-17 15:13:37', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:13:37', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=65', 0, 'gallery', '', 0),
(66, 1, '2015-12-17 15:13:54', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:13:54', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=66', 0, 'gallery', '', 0),
(67, 1, '2015-12-17 15:13:59', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:13:59', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=67', 0, 'gallery', '', 0),
(68, 1, '2015-12-17 15:14:04', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:14:04', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=68', 0, 'gallery', '', 0),
(69, 1, '2015-12-17 15:14:25', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:14:25', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=69', 0, 'gallery', '', 0),
(70, 1, '2015-12-17 15:14:44', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:14:44', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=70', 0, 'gallery', '', 0),
(71, 1, '2015-12-17 15:15:26', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:15:26', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=71', 0, 'gallery', '', 0),
(72, 1, '2015-12-17 15:15:52', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:15:52', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=72', 0, 'gallery', '', 0),
(73, 1, '2015-12-17 15:16:02', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:16:02', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=73', 0, 'gallery', '', 0),
(74, 1, '2015-12-17 15:16:21', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:16:21', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=74', 0, 'gallery', '', 0),
(75, 1, '2015-12-17 15:16:29', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:16:29', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=75', 0, 'gallery', '', 0),
(76, 1, '2015-12-17 15:16:53', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:16:53', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=76', 0, 'gallery', '', 0),
(77, 1, '2015-12-17 15:17:06', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:17:06', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=77', 0, 'gallery', '', 0),
(78, 1, '2015-12-17 15:17:11', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:17:11', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=78', 0, 'gallery', '', 0),
(79, 1, '2015-12-17 15:17:23', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:17:23', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=79', 0, 'gallery', '', 0),
(80, 1, '2015-12-17 15:17:50', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-17 15:17:50', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=gallery&p=80', 0, 'gallery', '', 0),
(81, 1, '2015-12-17 15:18:43', '2015-12-17 07:18:43', 'delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option', 'Photo Gallery', '', 'publish', 'closed', 'closed', '', 'photo-gallery', '', '', '2015-12-18 17:12:52', '2015-12-18 09:12:52', '', 0, 'http://joe.dev/?post_type=gallery&#038;p=81', 0, 'gallery', '', 0),
(82, 1, '2015-12-17 16:32:24', '2015-12-17 08:32:24', 'delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option', 'John Doe', '', 'publish', 'closed', 'closed', '', 'john-doe', '', '', '2015-12-17 16:32:24', '2015-12-17 08:32:24', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=82', 0, 'testimonial', '', 0),
(83, 1, '2015-12-17 16:32:21', '2015-12-17 08:32:21', '', 'avatar', '', 'inherit', 'open', 'closed', '', 'avatar', '', '', '2015-12-17 16:32:21', '2015-12-17 08:32:21', '', 82, 'http://joe.dev/wp-content/uploads/2015/12/avatar.png', 0, 'attachment', 'image/png', 0),
(84, 1, '2015-12-17 17:23:38', '2015-12-17 09:23:38', 'What URL do I need to type in to show ALL my posts belonging to that custom post type?', 'January Jones', '', 'publish', 'closed', 'closed', '', 'january-jones', '', '', '2015-12-17 17:23:38', '2015-12-17 09:23:38', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=84', 0, 'testimonial', '', 0),
(85, 1, '2015-12-17 18:01:08', '2015-12-17 10:01:08', 'delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleife.', 'Timothy Turk', '', 'publish', 'closed', 'closed', '', 'timothy-turk', '', '', '2015-12-17 18:02:16', '2015-12-17 10:02:16', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=85', 0, 'testimonial', '', 0),
(86, 1, '2015-12-17 18:14:49', '2015-12-17 10:14:49', '', 'About', '', 'publish', 'closed', 'closed', '', 'about', '', '', '2015-12-21 12:08:54', '2015-12-21 04:08:54', '', 0, 'http://joe.dev/?page_id=86', 2, 'page', '', 0),
(87, 1, '2015-12-17 18:14:49', '2015-12-17 10:14:49', ' ', '', '', 'publish', 'closed', 'closed', '', '87', '', '', '2015-12-21 14:14:40', '2015-12-21 06:14:40', '', 0, 'http://joe.dev/uncategorized/87', 2, 'nav_menu_item', '', 0),
(88, 1, '2015-12-17 18:14:49', '2015-12-17 10:14:49', '', 'About', '', 'inherit', 'closed', 'closed', '', '86-revision-v1', '', '', '2015-12-17 18:14:49', '2015-12-17 10:14:49', '', 86, 'http://joe.dev/uncategorized/86-revision-v1', 0, 'revision', '', 0),
(89, 1, '2015-12-18 10:15:12', '2015-12-18 02:15:12', '[phase]', 'Programmes', '', 'publish', 'closed', 'closed', '', 'programmes', '', '', '2015-12-18 11:04:29', '2015-12-18 03:04:29', '', 0, 'http://joe.dev/?page_id=89', 3, 'page', '', 0),
(91, 1, '2015-12-18 10:15:12', '2015-12-18 02:15:12', '', 'Programme', '', 'inherit', 'closed', 'closed', '', '89-revision-v1', '', '', '2015-12-18 10:15:12', '2015-12-18 02:15:12', '', 89, 'http://joe.dev/uncategorized/89-revision-v1', 0, 'revision', '', 0),
(92, 1, '2015-12-18 10:16:28', '2015-12-18 02:16:28', '', 'Programmes', '', 'inherit', 'closed', 'closed', '', '89-revision-v1', '', '', '2015-12-18 10:16:28', '2015-12-18 02:16:28', '', 89, 'http://joe.dev/uncategorized/89-revision-v1', 0, 'revision', '', 0),
(93, 1, '2015-12-18 10:17:42', '2015-12-18 02:17:42', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim, facilisis at vero eros et accumsan et iusto odio dignissim, facilisis at vero eros et accumsan et iusto odio dignissim.', 'Programmes', '', 'inherit', 'closed', 'closed', '', '89-revision-v1', '', '', '2015-12-18 10:17:42', '2015-12-18 02:17:42', '', 89, 'http://joe.dev/uncategorized/89-revision-v1', 0, 'revision', '', 0),
(94, 1, '2015-12-18 10:18:25', '2015-12-18 02:18:25', '', 'programmes-banner', '', 'inherit', 'open', 'closed', '', 'programmes-banner', '', '', '2015-12-18 10:18:25', '2015-12-18 02:18:25', '', 89, 'http://joe.dev/wp-content/uploads/2015/12/programmes-banner.jpg', 0, 'attachment', 'image/jpeg', 0),
(95, 1, '2015-12-18 10:56:05', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2015-12-18 10:56:05', '0000-00-00 00:00:00', '', 0, 'http://joe.dev/?post_type=phase&p=95', 0, 'phase', '', 0),
(96, 1, '2015-12-18 10:58:11', '2015-12-18 02:58:11', 'lorem ipsum dolor sit amet.  lorem ipsum dolor sit amet.  lorem ipsum dolor sit amet.  lorem ipsum dolor sit amet.  lorem ipsum dolor sit amet.', 'Phase Title Here', '', 'publish', 'closed', 'closed', '', 'phase-title-here', '', '', '2015-12-21 10:58:29', '2015-12-21 02:58:29', '', 0, 'http://joe.dev/?post_type=phase&#038;p=96', 0, 'phase', '', 0),
(97, 1, '2015-12-18 11:04:29', '2015-12-18 03:04:29', '[phase]', 'Programmes', '', 'inherit', 'closed', 'closed', '', '89-revision-v1', '', '', '2015-12-18 11:04:29', '2015-12-18 03:04:29', '', 89, 'http://joe.dev/uncategorized/89-revision-v1', 0, 'revision', '', 0),
(99, 1, '2015-12-18 14:54:23', '2015-12-18 06:54:23', '<ul>\r\n	<li>dolor ganar takar wereya sitanss sasa s</li>\r\n	<li>dolor ganar takar wereya sitan</li>\r\n	<li>dolor ganar takar wereya sitan</li>\r\n	<li>dolor ganar takar wereya sitan</li>\r\n</ul>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae tenetur rem minima, reprehenderit velit molestias voluptates hic suscipit, vero eius est id dolores vel dolorem nemo. Reiciendis expedita architecto corrupti.', 'Phase Title 2', '', 'publish', 'closed', 'closed', '', 'phase-title-2', '', '', '2015-12-21 11:02:41', '2015-12-21 03:02:41', '', 0, 'http://joe.dev/?post_type=phase&#038;p=99', 0, 'phase', '', 0),
(100, 1, '2015-12-18 14:56:19', '2015-12-18 06:56:19', '', 'Phase Title 3', '', 'publish', 'closed', 'closed', '', 'phase-title-3', '', '', '2015-12-21 10:58:21', '2015-12-21 02:58:21', '', 0, 'http://joe.dev/?post_type=phase&#038;p=100', 0, 'phase', '', 0),
(101, 1, '2015-12-18 14:57:44', '2015-12-18 06:57:44', 'dolor ganar takar wereya sitanss sasa s\ndolor ganar takar wereya sitan\ndolor ganar takar wereya sitan\ndolor ganar takar wereya sitan', 'Phase Title 2', '', 'inherit', 'closed', 'closed', '', '99-autosave-v1', '', '', '2015-12-18 14:57:44', '2015-12-18 06:57:44', '', 99, 'http://joe.dev/uncategorized/99-autosave-v1', 0, 'revision', '', 0),
(102, 1, '2015-12-18 15:11:03', '2015-12-18 07:11:03', '', 'gallery', '', 'inherit', 'open', 'closed', '', 'gallery', '', '', '2015-12-18 15:11:03', '2015-12-18 07:11:03', '', 81, 'http://joe.dev/wp-content/uploads/2015/12/gallery.png', 0, 'attachment', 'image/png', 0),
(103, 1, '2015-12-18 17:44:41', '2015-12-18 09:44:41', 'lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.\r\n\r\nlorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet....', 'Phase Title Phase 2', '', 'publish', 'closed', 'closed', '', 'phase-title-here-2', '', '', '2015-12-21 10:58:35', '2015-12-21 02:58:35', '', 0, 'http://joe.dev/?post_type=phase&#038;p=103', 0, 'phase', '', 0),
(118, 1, '2015-12-21 10:06:34', '2015-12-21 02:06:34', ' ', '', '', 'publish', 'closed', 'closed', '', '118', '', '', '2015-12-21 14:14:40', '2015-12-21 06:14:40', '', 0, 'http://joe.dev/?p=118', 3, 'nav_menu_item', '', 0),
(120, 1, '2015-12-21 10:11:07', '2015-12-21 02:11:07', 'good', 'The Prestine Potato', '', 'publish', 'closed', 'closed', '', 'the-prestine-potato', '', '', '2015-12-21 10:11:07', '2015-12-21 02:11:07', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=120', 0, 'testimonial', '', 0),
(121, 1, '2015-12-21 10:11:29', '2015-12-21 02:11:29', 'lo!', 'The Sandman', '', 'publish', 'closed', 'closed', '', 'the-sandman', '', '', '2015-12-21 10:11:29', '2015-12-21 02:11:29', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=121', 0, 'testimonial', '', 0),
(122, 1, '2015-12-21 10:21:17', '2015-12-21 02:21:17', 'Kazam!!!!', 'Ms. Marvel', '', 'publish', 'closed', 'closed', '', 'ms-marvel', '', '', '2015-12-21 10:21:17', '2015-12-21 02:21:17', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=122', 0, 'testimonial', '', 0),
(124, 1, '2015-12-21 11:04:17', '2015-12-21 03:04:17', '', 'Experience', '', 'publish', 'closed', 'closed', '', 'experience', '', '', '2015-12-21 11:11:02', '2015-12-21 03:11:02', '', 0, 'http://joe.dev/?page_id=124', 4, 'page', '', 0),
(125, 1, '2015-12-21 11:04:17', '2015-12-21 03:04:17', ' ', '', '', 'publish', 'closed', 'closed', '', '125', '', '', '2015-12-21 14:14:40', '2015-12-21 06:14:40', '', 0, 'http://joe.dev/uncategorized/125', 4, 'nav_menu_item', '', 0),
(126, 1, '2015-12-21 11:04:17', '2015-12-21 03:04:17', '', 'Experience', '', 'inherit', 'closed', 'closed', '', '124-revision-v1', '', '', '2015-12-21 11:04:17', '2015-12-21 03:04:17', '', 124, 'http://joe.dev/uncategorized/124-revision-v1', 0, 'revision', '', 0),
(127, 1, '2015-12-21 11:05:00', '2015-12-21 03:05:00', '', 'exp-banner', '', 'inherit', 'open', 'closed', '', 'exp-banner', '', '', '2015-12-21 11:05:00', '2015-12-21 03:05:00', '', 124, 'http://joe.dev/wp-content/uploads/2015/12/exp-banner.png', 0, 'attachment', 'image/png', 0),
(128, 1, '2015-12-21 11:07:47', '2015-12-21 03:07:47', '', 'exp1', '', 'inherit', 'open', 'closed', '', 'exp1', '', '', '2015-12-21 11:07:47', '2015-12-21 03:07:47', '', 124, 'http://joe.dev/wp-content/uploads/2015/12/exp1.png', 0, 'attachment', 'image/png', 0),
(129, 1, '2015-12-21 11:07:47', '2015-12-21 03:07:47', '', 'exp2', '', 'inherit', 'open', 'closed', '', 'exp2', '', '', '2015-12-21 11:07:47', '2015-12-21 03:07:47', '', 124, 'http://joe.dev/wp-content/uploads/2015/12/exp2.png', 0, 'attachment', 'image/png', 0),
(130, 1, '2015-12-21 11:07:48', '2015-12-21 03:07:48', '', 'exp3', '', 'inherit', 'open', 'closed', '', 'exp3', '', '', '2015-12-21 11:07:48', '2015-12-21 03:07:48', '', 124, 'http://joe.dev/wp-content/uploads/2015/12/exp3.png', 0, 'attachment', 'image/png', 0),
(131, 1, '2015-12-21 11:07:48', '2015-12-21 03:07:48', '', 'exp4', '', 'inherit', 'open', 'closed', '', 'exp4', '', '', '2015-12-21 11:07:48', '2015-12-21 03:07:48', '', 124, 'http://joe.dev/wp-content/uploads/2015/12/exp4.png', 0, 'attachment', 'image/png', 0),
(132, 1, '2015-12-21 11:16:37', '2015-12-21 03:16:37', 'Claritas est etiam processus dynamicus, qui sequitur ngak mutationem consuetudium lectorum.', 'Contact Us', '', 'publish', 'closed', 'closed', '', 'contact-us', '', '', '2015-12-21 12:49:29', '2015-12-21 04:49:29', '', 0, 'http://joe.dev/?page_id=132', 5, 'page', '', 0),
(133, 1, '2015-12-21 11:16:37', '2015-12-21 03:16:37', ' ', '', '', 'publish', 'closed', 'closed', '', '133', '', '', '2015-12-21 14:14:40', '2015-12-21 06:14:40', '', 0, 'http://joe.dev/uncategorized/133', 5, 'nav_menu_item', '', 0),
(134, 1, '2015-12-21 11:16:37', '2015-12-21 03:16:37', '', 'Contact Us', '', 'inherit', 'closed', 'closed', '', '132-revision-v1', '', '', '2015-12-21 11:16:37', '2015-12-21 03:16:37', '', 132, 'http://joe.dev/uncategorized/132-revision-v1', 0, 'revision', '', 0),
(135, 1, '2015-12-21 12:06:17', '2015-12-21 04:06:17', 'Get the lead out.', 'Jimmy Page', '', 'publish', 'closed', 'closed', '', 'jimmy-page', '', '', '2015-12-21 12:06:17', '2015-12-21 04:06:17', '', 0, 'http://joe.dev/?post_type=testimonial&#038;p=135', 0, 'testimonial', '', 0),
(136, 1, '2015-12-21 12:19:51', '2015-12-21 04:19:51', 'Claritas est etiam processus dynamicus, qui sequitur ngak mutationem consuetudium lectorum.', 'Contact Us', '', 'inherit', 'closed', 'closed', '', '132-revision-v1', '', '', '2015-12-21 12:19:51', '2015-12-21 04:19:51', '', 132, 'http://joe.dev/uncategorized/132-revision-v1', 0, 'revision', '', 0),
(137, 1, '2015-12-21 14:04:29', '2015-12-21 06:04:29', '', 'Phase Title Here', '', 'publish', 'closed', 'closed', '', 'phase-title-here-3', '', '', '2015-12-21 14:04:29', '2015-12-21 06:04:29', '', 0, 'http://joe.dev/?post_type=phase&#038;p=137', 0, 'phase', '', 0),
(138, 1, '2015-12-21 14:04:44', '2015-12-21 06:04:44', '', 'Phase Title Here', '', 'publish', 'closed', 'closed', '', 'phase-title-here-4', '', '', '2015-12-21 14:04:44', '2015-12-21 06:04:44', '', 0, 'http://joe.dev/?post_type=phase&#038;p=138', 0, 'phase', '', 0),
(139, 1, '2015-12-21 14:13:47', '2015-12-21 06:13:47', '', 'Terms of Use', '', 'publish', 'closed', 'closed', '', 'terms-of-use', '', '', '2015-12-21 14:13:47', '2015-12-21 06:13:47', '', 0, 'http://joe.dev/?page_id=139', 6, 'page', '', 0),
(141, 1, '2015-12-21 14:13:47', '2015-12-21 06:13:47', '', 'Terms of Use', '', 'inherit', 'closed', 'closed', '', '139-revision-v1', '', '', '2015-12-21 14:13:47', '2015-12-21 06:13:47', '', 139, 'http://joe.dev/uncategorized/139-revision-v1', 0, 'revision', '', 0),
(142, 1, '2015-12-21 14:14:06', '2015-12-21 06:14:06', '', 'Privacy Policy', '', 'publish', 'closed', 'closed', '', 'privacy-policy', '', '', '2015-12-21 14:14:06', '2015-12-21 06:14:06', '', 0, 'http://joe.dev/?page_id=142', 7, 'page', '', 0),
(144, 1, '2015-12-21 14:14:06', '2015-12-21 06:14:06', '', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '142-revision-v1', '', '', '2015-12-21 14:14:06', '2015-12-21 06:14:06', '', 142, 'http://joe.dev/uncategorized/142-revision-v1', 0, 'revision', '', 0),
(145, 1, '2015-12-21 14:14:20', '2015-12-21 06:14:20', '', 'We''re Hiring', '', 'publish', 'closed', 'closed', '', 'were-hiring', '', '', '2015-12-21 14:14:20', '2015-12-21 06:14:20', '', 0, 'http://joe.dev/?page_id=145', 8, 'page', '', 0),
(147, 1, '2015-12-21 14:14:20', '2015-12-21 06:14:20', '', 'We''re Hiring', '', 'inherit', 'closed', 'closed', '', '145-revision-v1', '', '', '2015-12-21 14:14:20', '2015-12-21 06:14:20', '', 145, 'http://joe.dev/uncategorized/145-revision-v1', 0, 'revision', '', 0),
(148, 1, '2015-12-21 14:15:43', '2015-12-21 06:15:43', '', 'We''re Hiring', '', 'publish', 'closed', 'closed', '', 'were-hiring', '', '', '2015-12-21 14:15:50', '2015-12-21 06:15:50', '', 0, 'http://joe.dev/?p=148', 1, 'nav_menu_item', '', 0),
(149, 1, '2015-12-21 14:15:44', '2015-12-21 06:15:44', ' ', '', '', 'publish', 'closed', 'closed', '', '149', '', '', '2015-12-21 14:15:50', '2015-12-21 06:15:50', '', 0, 'http://joe.dev/?p=149', 2, 'nav_menu_item', '', 0),
(150, 1, '2015-12-21 14:15:44', '2015-12-21 06:15:44', ' ', '', '', 'publish', 'closed', 'closed', '', '150', '', '', '2015-12-21 14:15:50', '2015-12-21 06:15:50', '', 0, 'http://joe.dev/?p=150', 3, 'nav_menu_item', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `joe_termmeta`
--

CREATE TABLE IF NOT EXISTS `joe_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `joe_terms`
--

CREATE TABLE IF NOT EXISTS `joe_terms` (
  `term_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joe_terms`
--

INSERT INTO `joe_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'Main Menu', 'main-menu', 0),
(16, 'Phase 1', 'phase-1', 0),
(17, 'Phase', 'phase', 0),
(18, 'Programmes', 'programmes', 0),
(19, 'Phase', 'phase', 0),
(20, 'Phase 1', 'phase-1', 0),
(21, 'Phase 2', 'phase-2', 0),
(22, 'Programmes', 'programmes', 0),
(23, 'Phase 3', 'phase-3', 0),
(24, 'Phase 4', 'phase-4', 0),
(25, 'Other Links', 'other-links', 0);

-- --------------------------------------------------------

--
-- Table structure for table `joe_term_relationships`
--

CREATE TABLE IF NOT EXISTS `joe_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joe_term_relationships`
--

INSERT INTO `joe_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(7, 2, 0),
(11, 1, 0),
(16, 1, 0),
(19, 1, 0),
(24, 1, 0),
(29, 1, 0),
(33, 1, 0),
(37, 1, 0),
(39, 1, 0),
(42, 1, 0),
(44, 1, 0),
(48, 1, 0),
(87, 2, 0),
(96, 19, 0),
(96, 20, 0),
(96, 22, 0),
(99, 16, 0),
(99, 19, 0),
(99, 20, 0),
(99, 22, 0),
(100, 19, 0),
(100, 20, 0),
(100, 22, 0),
(103, 19, 0),
(103, 21, 0),
(103, 22, 0),
(118, 2, 0),
(125, 2, 0),
(133, 2, 0),
(137, 23, 0),
(138, 24, 0),
(148, 25, 0),
(149, 25, 0),
(150, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `joe_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `joe_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joe_term_taxonomy`
--

INSERT INTO `joe_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'nav_menu', '', 0, 5),
(16, 16, 'category', '', 17, 1),
(17, 17, 'category', '', 18, 0),
(18, 18, 'category', '', 0, 0),
(19, 19, 'phasems_phases_categories', '', 22, 4),
(20, 20, 'phasems_phases_categories', '', 19, 3),
(21, 21, 'phasems_phases_categories', '', 19, 1),
(22, 22, 'phasems_phases_categories', '', 0, 4),
(23, 23, 'phasems_phases_categories', '', 19, 1),
(24, 24, 'phasems_phases_categories', '', 19, 1),
(25, 25, 'nav_menu', '', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joe_postmeta`
--
ALTER TABLE `joe_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `joe_posts`
--
ALTER TABLE `joe_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `joe_termmeta`
--
ALTER TABLE `joe_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `joe_terms`
--
ALTER TABLE `joe_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `joe_term_relationships`
--
ALTER TABLE `joe_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `joe_term_taxonomy`
--
ALTER TABLE `joe_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joe_postmeta`
--
ALTER TABLE `joe_postmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=572;
--
-- AUTO_INCREMENT for table `joe_posts`
--
ALTER TABLE `joe_posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `joe_termmeta`
--
ALTER TABLE `joe_termmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `joe_terms`
--
ALTER TABLE `joe_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `joe_term_taxonomy`
--
ALTER TABLE `joe_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
