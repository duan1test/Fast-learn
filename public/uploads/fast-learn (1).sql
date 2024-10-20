-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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


-- Dumping database structure for fast-learn
CREATE DATABASE IF NOT EXISTS `fast-learn` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fast-learn`;

-- Dumping structure for table fast-learn.attachments
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filepath` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filetype` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesize` int unsigned NOT NULL,
  `key` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(92) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `preview_url` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int unsigned DEFAULT NULL,
  `model_type` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_uuid_index` (`uuid`),
  KEY `attachments_model_id_index` (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.attachments: ~19 rows (approximately)
INSERT INTO `attachments` (`id`, `uuid`, `disk`, `filepath`, `filename`, `filetype`, `filesize`, `key`, `group`, `title`, `description`, `preview_url`, `model_id`, `model_type`, `metadata`, `created_at`, `updated_at`) VALUES
	(1, '3rwiaeckc4e03lxqcw9j26o91', 'local', 'attachments/3rw/iae/ckc/3rwiaeckc4e03lxqcw9j26o91.xlsx', 'QlYDAGGHwwfWrvdNvCu41iW9I8TnwS76WACgk6i5.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb62748ccbc', NULL, 'LIPFvYxmw0Udu7SI7dWk4iSoBtJripQXy5WXVjq9 (1).xlsx', NULL, NULL, 4, 'App\\Models\\Course', NULL, '2024-09-30 19:46:12', '2024-09-30 19:46:12'),
	(2, '2alxvygecykxt61q1ydqzw3g9', 'local', 'attachments/2al/xvy/gec/2alxvygecykxt61q1ydqzw3g9.xlsx', 'TLExHf2SDBqI8s3YiDIpBOqspxSp6g6bIB09vG3P.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb627490234', NULL, 'ehTxdNmSyYqmdM2Hb4R5iLImBimJEe197BNgnD8J (4) (1).xlsx', NULL, NULL, 4, 'App\\Models\\Course', NULL, '2024-09-30 19:46:12', '2024-09-30 19:46:12'),
	(3, 'kybi0gy5l9bmlseuz3p3qlan', 'local', 'attachments/kyb/i0g/y5l/kybi0gy5l9bmlseuz3p3qlan.xlsx', 'OWT4bRUwOYKO7KsHjX57bt5TxZBDC1opRGAg8DuX.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb6274924ab', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (5).xlsx', NULL, NULL, 4, 'App\\Models\\Course', NULL, '2024-09-30 19:46:12', '2024-09-30 19:46:12'),
	(4, '74l3d3k57qh8q9atenaz21t2', 'local', 'attachments/74l/3d3/k57/74l3d3k57qh8q9atenaz21t2.xlsx', '4O1ElIoKpaJacuQRw2q1tKGkDhAVEyoK17APwC3p.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb6274949c8', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (4).xlsx', NULL, NULL, 4, 'App\\Models\\Course', NULL, '2024-09-30 19:46:12', '2024-09-30 19:46:12'),
	(5, 'erexaqp56x7fbk4g8w72xyvdm', 'local', 'attachments/ere/xaq/p56/erexaqp56x7fbk4g8w72xyvdm.xlsx', 'YRwKKzKh93Qwzx4WZBbHKvkKw0wMP0iekhJJbsV4.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb627496ca4', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (3).xlsx', NULL, NULL, 4, 'App\\Models\\Course', NULL, '2024-09-30 19:46:12', '2024-09-30 19:46:12'),
	(6, '2ruyye3n4qj7hy8j6tr1uwdd1', 'local', 'attachments/2ru/yye/3n4/2ruyye3n4qj7hy8j6tr1uwdd1.xlsx', '8L8IPZId4mryqmmrdKrkWaDjtcpwTwQ4YZPtf4fQ.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb62804f990', NULL, 'ehTxdNmSyYqmdM2Hb4R5iLImBimJEe197BNgnD8J (4) (1).xlsx', NULL, NULL, 3, 'App\\Models\\Course', NULL, '2024-09-30 19:46:24', '2024-09-30 19:46:24'),
	(7, 'ifxv5lwdxpuqccyj7w1q0rik', 'local', 'attachments/ifx/v5l/wdx/ifxv5lwdxpuqccyj7w1q0rik.xlsx', 'Mbhl85wBeaNtfUFXgHOXOa4nv5xgix8kMDlT9Gp7.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb628052a06', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (5).xlsx', NULL, NULL, 3, 'App\\Models\\Course', NULL, '2024-09-30 19:46:24', '2024-09-30 19:46:24'),
	(8, 'f1nz070nr7an4kn0q9209c6b2', 'local', 'attachments/f1n/z07/0nr/f1nz070nr7an4kn0q9209c6b2.xlsx', '9fYUX5GAfHroZpHURvoi9MBrHQgdz5jKJHpUilKd.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb628054f5d', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (4).xlsx', NULL, NULL, 3, 'App\\Models\\Course', NULL, '2024-09-30 19:46:24', '2024-09-30 19:46:24'),
	(13, '4rad3uej9zvpmsbuaawalhd4y', 'local', 'attachments/4ra/d3u/ej9/4rad3uej9zvpmsbuaawalhd4y.xlsx', '5g4A2j82LV8UsJskpxNLoPWLOKbUEURFHsCxmWPD.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb62962766f', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (3).xlsx', NULL, NULL, 1, 'App\\Models\\Course', NULL, '2024-09-30 19:46:46', '2024-09-30 19:46:46'),
	(14, 'e2zd9skp6dddpb3p2j43mookm', 'local', 'attachments/e2z/d9s/kp6/e2zd9skp6dddpb3p2j43mookm.xlsx', 'wwno0jN3Y6wNg2ilMxuUWTFfaJy1ZET8FOG2eUfi.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb62962bfa9', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (2).xlsx', NULL, NULL, 1, 'App\\Models\\Course', NULL, '2024-09-30 19:46:46', '2024-09-30 19:46:46'),
	(15, '6p046tznupjl7ujt5btpdeke5', 'local', 'attachments/6p0/46t/znu/6p046tznupjl7ujt5btpdeke5.xlsx', 'SVJq5UsMR30zbSVFLuJnZPpOK8vxGPDM5GtJHMVW.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb6296343cb', NULL, '84nd3cc4lxtugp6howy3f80a1.xlsx', NULL, NULL, 1, 'App\\Models\\Course', NULL, '2024-09-30 19:46:46', '2024-09-30 19:46:46'),
	(16, '73jqcblfy6istyb5uq7xdx11t', 'local', 'attachments/73j/qcb/lfy/73jqcblfy6istyb5uq7xdx11t.xlsx', '7S9rMA1OMag78ZyIId6o4oY4odLPciyWb1xsxGuG.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fb62963c744', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (1).xlsx', NULL, NULL, 1, 'App\\Models\\Course', NULL, '2024-09-30 19:46:46', '2024-09-30 19:46:46'),
	(23, '2nmsqeyem6agh7548vxraplg3', 'local', 'attachments/2nm/sqe/yem/2nmsqeyem6agh7548vxraplg3.xlsx', 'bwyqo2DIv4YAUReqk8FeaVZMYT0wgbsnZHLt96iD.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fbcad7b44a7', NULL, 'ehTxdNmSyYqmdM2Hb4R5iLImBimJEe197BNgnD8J (4) (1) (2).xlsx', NULL, NULL, 3, 'App\\Models\\Post', NULL, '2024-10-01 03:11:35', '2024-10-01 03:11:35'),
	(24, 'yoppzlm41bfbnc4l6kfeq1nf', 'local', 'attachments/yop/pzl/m41/yoppzlm41bfbnc4l6kfeq1nf.xlsx', 'BDu2U8JsGMxRMA2yNGeblHYiaSgTmqiHvb4KW9Ny.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fbcad7b6e86', NULL, 'ehTxdNmSyYqmdM2Hb4R5iLImBimJEe197BNgnD8J (4) (1) (1).xlsx', NULL, NULL, 3, 'App\\Models\\Post', NULL, '2024-10-01 03:11:35', '2024-10-01 03:11:35'),
	(25, '8t350a9ekiv88ny4rtslk8qjk', 'local', 'attachments/8t3/50a/9ek/8t350a9ekiv88ny4rtslk8qjk.xlsx', 'YHy6XapIMqTXNRjQUlTHiDat99KsjzLwyiii2A21.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fbcad7b97e8', NULL, 'gyhR5eraD4Rlg7SxVsSbAiS0OMulla7W8Ino34ju (13).xlsx', NULL, NULL, 3, 'App\\Models\\Post', NULL, '2024-10-01 03:11:35', '2024-10-01 03:11:35'),
	(34, 'dlgiuftgjfwtcbve41xopvnmx', 'local', 'attachments/dlg/iuf/tgj/dlgiuftgjfwtcbve41xopvnmx.xlsx', 'zVy2l30g049R8HU6vJN49UDXtLlB0RbTx1Kg1jrt.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fd12e1412f7', NULL, '84nd3cc4lxtugp6howy3f80a1.xlsx', NULL, NULL, 2, 'App\\Models\\Course', NULL, '2024-10-02 02:31:13', '2024-10-02 02:31:13'),
	(35, '4ti1fo2luts2iuqvye7c6ecpn', 'local', 'attachments/4ti/1fo/2lu/4ti1fo2luts2iuqvye7c6ecpn.xlsx', 'J64tHPERUJUTryROIY26qqoWGLwH5FZjKYPnSHM8.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fd12e143bb2', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (2).xlsx', NULL, NULL, 2, 'App\\Models\\Course', NULL, '2024-10-02 02:31:13', '2024-10-02 02:31:13'),
	(36, 'a0c89234ysd8tgnwk0xauh5a1', 'local', 'attachments/a0c/892/34y/a0c89234ysd8tgnwk0xauh5a1.xlsx', 'okFykao2NhjZzDQoyzaz352l5NlkmDJgwMmvJDLG.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fd12e145f84', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (3).xlsx', NULL, NULL, 2, 'App\\Models\\Course', NULL, '2024-10-02 02:31:13', '2024-10-02 02:31:13'),
	(37, 'btdgn88w279qtkp60ulf9g2x1', 'local', 'attachments/btd/gn8/8w2/btdgn88w279qtkp60ulf9g2x1.xlsx', 'esTlGLGBp0b2Y0MlwBOFlvtE0PeexcU3rgm0KM3B.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 7704, '66fd12e148a20', NULL, 'e4ul9tnv5gcjs5nt5ulgdqzde (4).xlsx', NULL, NULL, 2, 'App\\Models\\Course', NULL, '2024-10-02 02:31:13', '2024-10-02 02:31:13');

-- Dumping structure for table fast-learn.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.categories: ~15 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Khoa học công nghệ', '2024-09-30 18:57:07', '2024-09-30 18:57:07'),
	(2, 'Quản trị kinh doanh', '2024-09-30 18:57:07', '2024-09-30 18:57:07'),
	(3, 'Du lịch dịch vụ', '2024-09-30 18:57:07', '2024-09-30 18:57:07'),
	(4, 'Ngoại ngữ', '2024-09-30 18:57:07', '2024-09-30 18:57:07'),
	(5, 'Tin học', '2024-09-30 18:57:07', '2024-09-30 18:57:07'),
	(6, 'Khoa học công nghệ', '2024-09-30 19:01:34', '2024-09-30 19:01:34'),
	(7, 'Quản trị kinh doanh', '2024-09-30 19:01:34', '2024-09-30 19:01:34'),
	(8, 'Du lịch dịch vụ', '2024-09-30 19:01:34', '2024-09-30 19:01:34'),
	(9, 'Ngoại ngữ', '2024-09-30 19:01:34', '2024-09-30 19:01:34'),
	(10, 'Tin học', '2024-09-30 19:01:34', '2024-09-30 19:01:34'),
	(11, 'Khoa học công nghệ', '2024-10-01 20:53:22', '2024-10-01 20:53:22'),
	(12, 'Quản trị kinh doanh', '2024-10-01 20:53:22', '2024-10-01 20:53:22'),
	(13, 'Du lịch dịch vụ', '2024-10-01 20:53:22', '2024-10-01 20:53:22'),
	(14, 'Ngoại ngữ', '2024-10-01 20:53:22', '2024-10-01 20:53:22'),
	(15, 'Tin học', '2024-10-01 20:53:22', '2024-10-01 20:53:22');

-- Dumping structure for table fast-learn.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `course_id` bigint NOT NULL,
  `parent_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.comments: ~18 rows (approximately)
INSERT INTO `comments` (`id`, `message`, `user_id`, `course_id`, `parent_id`, `created_at`, `updated_at`) VALUES
	(1, 'Tôi nghĩ rằng điều khó khăn nhất trong công việc hiện tại không phải là kỹ thuật, mà chính là việc quản lý thời gian. Có quá nhiều thứ diễn ra cùng lúc, đôi khi thật khó để giữ mọi thứ trong tầm kiểm soát. Mỗi ngày tôi đều lập kế hoạch, nhưng đến cuối ngày thì dường như tôi chỉ hoàn thành được một phần nhỏ so với dự định. Bạn có gặp phải tình trạng tương tự không?', 4, 1, NULL, '2024-10-01 21:28:25', NULL),
	(2, 'Ồ, tôi hiểu cảm giác đó chứ! Đôi khi tôi cảm thấy mình như đang cố gắng bắt kịp dòng chảy của công việc, và nếu lỡ chậm một nhịp, tất cả sẽ trở nên hỗn loạn. Tôi cũng đã thử rất nhiều phương pháp quản lý thời gian như Pomodoro hay Eisenhower Matrix, nhưng rồi kết quả vẫn phụ thuộc vào sự linh hoạt và khả năng ưu tiên các nhiệm vụ một cách liên tục. Bạn có nghĩ rằng việc phân chia thời gian chặt chẽ quá đôi khi lại tạo ra áp lực không cần thiết không?', 1, 1, 1, '2024-10-01 21:28:25', NULL),
	(3, 'Chính xác! Đó cũng là vấn đề tôi đang gặp phải. Khi lập kế hoạch quá chi tiết, tôi cảm thấy như bị gò bó bởi lịch trình mà mình tự đặt ra. Mọi thứ phải tuân thủ chặt chẽ theo khung giờ, và nếu có điều gì bất ngờ xảy ra – ví dụ như một cuộc họp đột xuất – tất cả kế hoạch trong ngày sẽ sụp đổ. Tôi cũng đã thử Pomodoro, nhưng thường thì tôi phải dừng giữa chừng để xử lý một vấn đề khẩn cấp. Bạn có mẹo gì để xử lý những tình huống như vậy không', 2, 3, NULL, '2024-10-01 21:28:25', NULL),
	(4, 'Một mẹo mà tôi học được là thay vì cố gắng lên kế hoạch quá chi tiết, tôi chỉ đặt ra ba nhiệm vụ quan trọng nhất mỗi ngày. Điều đó giúp tôi giữ sự tập trung vào những gì thực sự cần hoàn thành, và phần còn lại thì linh hoạt điều chỉnh tùy vào tình hình thực tế. Ngoài ra, tôi cũng tạo ra những khoảng thời gian \'dự phòng\' giữa các nhiệm vụ, điều này giúp tôi có thời gian xử lý các tình huống phát sinh mà không bị lỡ nhịp công việc. Bạn thử phương pháp này chưa', 2, 1, NULL, '2024-10-01 21:28:25', NULL),
	(5, 'Nghe có vẻ hợp lý đấy! Tôi nghĩ mình sẽ thử cách này, tập trung vào ba nhiệm vụ chính thay vì cố gắng hoàn thành một danh sách dài. Có lẽ nó sẽ giúp tôi giảm bớt áp lực khi làm việc. Bạn có nhận thấy rằng đôi khi việc nghỉ ngơi và tạo khoảng trống trong lịch trình lại giúp chúng ta làm việc hiệu quả hơn không? Tôi đã từng nghe nói rằng khi đầu óc được thư giãn, các ý tưởng sáng tạo thường đến một cách tự nhiên hơn', 1, 1, 4, '2024-10-01 21:28:25', '2024-10-01 21:28:25'),
	(6, 'Đây là demo', 1, 1, 1, '2024-10-02 00:35:43', '2024-10-02 00:35:43'),
	(7, 'Chắc chắn rồi! Tôi hoàn toàn đồng ý với điều đó. Khi bạn cho phép bản thân nghỉ ngơi, thậm chí chỉ trong vài phút ngắn, bộ não sẽ có thời gian tái tạo năng lượng và xử lý các thông tin một cách tự nhiên hơn. Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đơn giản là uống một cốc cà phê trong vài phút khi cảm thấy bế tắc. Bạn có bao giờ thử phương pháp này chưa?', 1, 1, 1, '2024-10-02 00:36:23', '2024-10-02 00:36:23'),
	(8, 'Có, tôi đã thử và nó thực sự hiệu quả. Đôi khi, chỉ cần rời khỏi bàn làm việc trong vài phút và hít thở không khí ngoài trời cũng đủ để giúp tôi có những ý tưởng mới mẻ. Có lẽ, quản lý thời gian không chỉ là việc sắp xếp công việc hợp lý, mà còn là việc chăm sóc bản thân, giúp tâm trí được nghỉ ngơi và sẵn sàng đối mặt với những thách thức tiếp theo', 1, 1, 4, '2024-10-02 00:36:32', '2024-10-02 00:36:32'),
	(9, 'Đúng vậy. Cuối cùng thì tất cả chúng ta đều cần phải tìm ra cách cân bằng giữa công việc và cuộc sống. Khi tâm trí bạn thoải mái, công việc sẽ trở nên nhẹ nhàng hơn nhiều. Tôi tin rằng nếu chúng ta biết cách chăm sóc bản thân, thành công sẽ tự đến một cách tự nhiên hơn', 1, 1, NULL, '2024-10-02 00:37:35', '2024-10-02 00:37:35'),
	(10, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đơn giản là uống một cốc cà phê trong vài phút khi cảm thấy bế tắc. Bạn có bao giờ thử phương pháp này chưa?"', 1, 1, 9, '2024-10-02 00:37:49', '2024-10-02 00:37:49'),
	(11, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đơn giản là uống một cốc cà phê trong vài phút khi cảm thấy bế tắc. Bạn có bao giờ thử phương pháp này chưa?"', 1, 2, NULL, '2024-10-02 00:40:46', '2024-10-02 00:40:46'),
	(12, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đơn giản là uống một cốc cà phê trong vài phút khi cảm thấy bế tắc. Bạn có bao giờ thử phương pháp này chưa?"', 1, 2, 11, '2024-10-02 00:40:52', '2024-10-02 00:40:52'),
	(13, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đơn giản là uống một cốc cà phê trong vài phút khi cảm thấy bế tắc. Bạn có bao giờ thử phương pháp này chưa?"', 1, 2, NULL, '2024-10-02 00:50:55', '2024-10-02 00:50:55'),
	(14, 'Chắc chắn rồi! Tôi hoàn toàn đồng ý với điều đó. Khi bạn cho phép bản thân nghỉ ngơi, thậm chí chỉ trong vài phút ngắn, bộ não sẽ có thời gian tái tạo năng lượng và xử lý các thông tin một cách tự nhiên hơn. Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo.', 6, 1, 1, '2024-10-02 02:25:03', '2024-10-02 02:25:03'),
	(15, 'Chắc chắn rồi! Tôi hoàn toàn đồng ý với điều đó. Khi bạn cho phép bản thân nghỉ ngơi, thậm chí chỉ trong vài phút ngắn, bộ não sẽ có thời gian tái tạo năng lượng và xử lý các thông tin một cách tự nhiên hơn. Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo.', 6, 1, NULL, '2024-10-02 02:25:10', '2024-10-02 02:25:10'),
	(16, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đ', 7, 2, 11, '2024-10-02 02:31:52', '2024-10-02 02:31:52'),
	(17, 'Điều này đặc biệt quan trọng khi làm việc trong các dự án sáng tạo. Tôi thường đi bộ ngắn hoặc đ', 7, 2, NULL, '2024-10-02 02:31:55', '2024-10-02 02:31:55'),
	(18, '123', 7, 2, 17, '2024-10-02 02:32:17', '2024-10-02 02:32:17');

-- Dumping structure for table fast-learn.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `dateCreate` datetime DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `teacher_id` bigint NOT NULL,
  `category_id` bigint NOT NULL,
  `duration` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.courses: ~4 rows (approximately)
INSERT INTO `courses` (`id`, `code`, `name`, `price`, `dateCreate`, `description`, `note`, `teacher_id`, `category_id`, `duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'CSDL', 'Cơ sở dữ liệu', 123.00, '2024-10-01 00:00:00', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 1, 6, 123, '2024-09-30 19:02:21', '2024-09-30 19:46:46', NULL),
	(2, 'GIAITHUAT', 'Cấu trúc dữ liệu và giải thuật', 123.00, '2024-10-01 00:00:00', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 7, 6, 123, '2024-09-30 19:02:37', '2024-10-02 02:31:13', NULL),
	(3, 'PTTK', 'Phân tích và thiết kế hệ thống', 123.00, '2024-10-01 00:00:00', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 7, 4, 12, '2024-09-30 19:03:01', '2024-09-30 19:46:24', NULL),
	(4, 'NMCNPM', 'Nhập môn công nghệ phần mềm', 213.00, '2024-10-01 00:00:00', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', 5, 6, 123, '2024-09-30 19:03:21', '2024-09-30 19:46:09', NULL);

-- Dumping structure for table fast-learn.course_user
CREATE TABLE IF NOT EXISTS `course_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `course_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.course_user: ~2 rows (approximately)
INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 1, '2024-09-30 20:03:21', '2024-09-30 20:03:21', NULL),
	(2, 1, 2, '2024-09-30 20:28:49', '2024-09-30 20:28:49', NULL),
	(3, 6, 1, '2024-10-02 02:24:20', '2024-10-02 02:24:20', NULL);

-- Dumping structure for table fast-learn.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table fast-learn.feedbacks
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.feedbacks: ~1 rows (approximately)
INSERT INTO `feedbacks` (`id`, `title`, `email`, `feedback_level`, `feedback_content`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Đánh giá chất lượng khóa học', '1@gmail.com', 'Rất hài lòng', 'When typed using free-text, Amoxicillin and moAcXllicin appear the same to the computer -- both letter groupings are equally meaningless. In contrast, objects in SOAPware can include multiple letters and/or numbers that as a group have been identified and are recognizable to the computer. SOAPware displays the start and end points of a SMARText item (i.e. object) with an open bracket followed by a close bracket. Everything inside those brackets  is considered to be part of the item.', '2024-09-30 23:43:10', '2024-09-30 23:43:10', NULL),
	(2, '123', 'thang@gmail.com', 'Rất hài lòng', '123', '2024-10-02 02:25:39', '2024-10-02 02:25:39', NULL);

-- Dumping structure for table fast-learn.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.migrations: ~17 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(11, '2014_10_12_000000_create_users_table', 1),
	(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(14, '2019_08_19_000000_create_failed_jobs_table', 1),
	(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(16, '2024_09_28_154200_create_sessions_table', 1),
	(17, '2024_09_29_112109_create_courses_table', 1),
	(18, '2024_09_29_112624_create_course_user_table', 1),
	(19, '2024_09_29_140428_create_attachments_table', 1),
	(20, '2024_09_29_141613_create_permission_tables', 1),
	(21, '2024_09_30_152442_create_categories_table', 1),
	(22, '2024_10_01_063453_create_feedback_table', 2),
	(23, '2024_10_01_063454_create_feedback_table', 3),
	(24, '2024_10_01_063455_create_feedback_table', 4),
	(25, '2024_10_01_072019_create_posts_table', 5),
	(26, '2024_10_01_072018_create_posts_table', 6),
	(27, '2024_10_01_145455_create_commments_table', 7);

-- Dumping structure for table fast-learn.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table fast-learn.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.model_has_roles: ~2 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(2, 'App\\Models\\User', 1),
	(3, 'App\\Models\\User', 6),
	(4, 'App\\Models\\User', 7);

-- Dumping structure for table fast-learn.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table fast-learn.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.permissions: ~28 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'read-users', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(2, 'create-users', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(3, 'update-users', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(4, 'delete-users', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(5, 'read-roles', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(6, 'create-roles', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(7, 'update-roles', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(8, 'delete-roles', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(9, 'read-courses', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(10, 'create-courses', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(11, 'update-courses', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(12, 'delete-courses', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(13, 'read-feedbacks', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(14, 'create-feedbacks', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(15, 'update-feedbacks', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(16, 'delete-feedbacks', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(17, 'read-posts', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(18, 'create-posts', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(19, 'update-posts', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22'),
	(20, 'delete-posts', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(21, 'read-courseUsers', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(22, 'create-courseUsers', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(23, 'update-courseUsers', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(24, 'delete-courseUsers', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(25, 'read-comments', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(26, 'create-comments', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(27, 'update-comments', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23'),
	(28, 'delete-comments', 'web', '2024-10-02 02:19:23', '2024-10-02 02:19:23');

-- Dumping structure for table fast-learn.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table fast-learn.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_child` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_1` text COLLATE utf8mb4_unicode_ci,
  `content_2` text COLLATE utf8mb4_unicode_ci,
  `content_3` text COLLATE utf8mb4_unicode_ci,
  `content_4` text COLLATE utf8mb4_unicode_ci,
  `content_5` text COLLATE utf8mb4_unicode_ci,
  `viewer` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.posts: ~4 rows (approximately)
INSERT INTO `posts` (`id`, `title`, `title_child`, `tag`, `content`, `content_1`, `content_2`, `content_3`, `content_4`, `content_5`, `viewer`, `created_at`, `updated_at`) VALUES
	(1, 'Thông báo về việc thực hiện chế độ chính sách miễn, giảm học phí, trợ cấp xã hội và hỗ trợ chi phí học tập trong học kỳ 1 năm học 2024 - 2025', 'Căn cứ hướng dẫn số 2768/HD-ĐHM ngày 11 tháng 08 năm 2023, bản hướng dẫn số 2767/HD-ĐHM-CTSV ngày 11 tháng 08 năm 2023 và hướng dẫn số 2765/HD-ĐHM ngày 11 tháng 08 năm 2023 của Trường ĐH Mở Hà Nội về việc thực hiện chế độ chính sách miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập, Khoa CNTT triển khai việc thực hiện chế độ chính sách miễn, giảm học phí, trợ cấp xã hội và hỗ trợ chi phí học tập HK1 năm học 2024-2025.', 'học phí, học bổng', 'I. Chuẩn bị hồ sơ xét hưởng chế độ chính sách\r\n\r\nĐối tượng được miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập căn cứ:\r\nHướng dẫn miễn giảm học phí 2767/HD-ĐHM và Quyết định số 612/QĐ-UBDT,  QĐ 861 phê duyệt ds các xã, khu vực\r\n\r\nHướng dẫn hỗ trợ 2768/HD-ĐHM\r\n\r\nHướng dẫn trợ cấp 2765/HD-ĐHM', 'Các mẫu đơn xét hưởng chế độ chính sách:\r\n\r\n- Đơn đề nghị miễn, giảm học phí. \r\n\r\n- Đơn đề nghị hỗ trợ chi phí học tập\r\n\r\n- Đơn đề nghị hưởng trợ cấp xã hội \r\n\r\nSinh viên chuẩn bị hồ sơ như các văn bản hướng dẫn ở trên', NULL, NULL, NULL, NULL, 8, '2024-10-01 03:01:57', '2024-10-02 02:29:19'),
	(3, 'Thông báo TechTalk "Định hướng phát triển trong lĩnh vực Kiểm Thử Phần Mềm - Kỹ năng cần có"', 'Căn cứ hướng dẫn số 2768/HD-ĐHM ngày 11 tháng 08 năm 2023, bản hướng dẫn số 2767/HD-ĐHM-CTSV ngày 11 tháng 08 năm 2023 và hướng dẫn số 2765/HD-ĐHM ngày 11 tháng 08 năm 2023 của Trường ĐH Mở Hà Nội về việc thực hiện chế độ chính sách miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập, Khoa CNTT triển khai việc thực hiện chế độ chính sách miễn, giảm học phí, trợ cấp xã hội và hỗ trợ chi phí học tập HK1 năm học 2024-2025.', 'Học', '123', NULL, NULL, NULL, NULL, NULL, 0, '2024-10-01 03:04:47', '2024-10-01 03:11:35'),
	(4, '\r\nThông báo Công văn số 4167/ĐHM ngày 10/9/2024 của trường Đại học Mở Hà Nội v/v Khung thời gian nộp học phí bằng mã QR', 'Căn cứ hướng dẫn số 2768/HD-ĐHM ngày 11 tháng 08 năm 2023, bản hướng dẫn số 2767/HD-ĐHM-CTSV ngày 11 tháng 08 năm 2023 và hướng dẫn số 2765/HD-ĐHM ngày 11 tháng 08 năm 2023 của Trường ĐH Mở Hà Nội về việc thực hiện chế độ chính sách miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập, Khoa CNTT triển khai việc thực hiện chế độ chính sách miễn, giảm học phí, trợ cấp xã hội và hỗ trợ chi phí học tập HK1 năm học 2024-2025.', 'Học', '123', NULL, NULL, NULL, NULL, NULL, 0, '2024-10-01 03:04:47', '2024-10-01 03:11:35'),
	(5, '\r\nThông báo danh sách (dự kiến) xét cấp Khoa về việc cấp học bổng KKHT học kỳ 2 năm học 2023-2024', 'Căn cứ hướng dẫn số 2768/HD-ĐHM ngày 11 tháng 08 năm 2023, bản hướng dẫn số 2767/HD-ĐHM-CTSV ngày 11 tháng 08 năm 2023 và hướng dẫn số 2765/HD-ĐHM ngày 11 tháng 08 năm 2023 của Trường ĐH Mở Hà Nội về việc thực hiện chế độ chính sách miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập, Khoa CNTT triển khai việc thực hiện chế độ chính sách miễn, giảm học phí, trợ cấp xã hội và hỗ trợ chi phí học tập HK1 năm học 2024-2025.', 'học phí, học bổng', 'I. Chuẩn bị hồ sơ xét hưởng chế độ chính sách\r\n\r\nĐối tượng được miễn, giảm học phí và hỗ trợ, trợ cấp chi phí học tập căn cứ:\r\nHướng dẫn miễn giảm học phí 2767/HD-ĐHM và Quyết định số 612/QĐ-UBDT,  QĐ 861 phê duyệt ds các xã, khu vực\r\n\r\nHướng dẫn hỗ trợ 2768/HD-ĐHM\r\n\r\nHướng dẫn trợ cấp 2765/HD-ĐHM', 'Các mẫu đơn xét hưởng chế độ chính sách:\r\n\r\n- Đơn đề nghị miễn, giảm học phí. \r\n\r\n- Đơn đề nghị hỗ trợ chi phí học tập\r\n\r\n- Đơn đề nghị hưởng trợ cấp xã hội \r\n\r\nSinh viên chuẩn bị hồ sơ như các văn bản hướng dẫn ở trên', NULL, NULL, NULL, NULL, 0, '2024-10-01 03:01:57', '2024-10-01 03:01:57');

-- Dumping structure for table fast-learn.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.roles: ~3 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'admin', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(2, 'Super Admin', 'web', '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(3, 'Quyền sinh viên', 'web', '2024-10-02 02:19:46', '2024-10-02 02:19:46', NULL),
	(4, 'Quyền giảng viên', 'web', '2024-10-02 02:26:56', '2024-10-02 02:26:56', NULL);

-- Dumping structure for table fast-learn.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.role_has_permissions: ~16 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(14, 3),
	(17, 3),
	(21, 3),
	(22, 3),
	(26, 3),
	(9, 4),
	(11, 4),
	(17, 4),
	(21, 4),
	(25, 4),
	(26, 4);

-- Dumping structure for table fast-learn.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('ayOy5zQHFrxydm2slRH32meMC3UcWwYK4SF41QGz', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYmp5RFc5UmN2RUM3dTg4eTFPUDRKVjg2Uk02aHcwaERPbkhjVnVTNCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb3Vyc2VVc2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7fQ==', 1727861753),
	('BT8YvGMOZzR9djMGYOr8uji4IzkAUkJasOPMdatL', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic29RV05ZQkJHVndFU0ZUMjRXU2ZMVnpPSjBJeVYwZWdGdUxiOG1lSSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvY291cnNlVXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1727861769),
	('mFoxiNCFqB4A4HxVL3rgCiLHUoD6L5aIzZVSFptl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSWZvYVFtVDhHT3hUcFF2blVjVEJJbkFHUzR5NVpKU3hCZWhEaXRqciI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJExqTm1GbUxXUUhJZVZDeGo5Z1dSUi40OFIvZWt5SlVaU0VXY0xxS0ZyeGdXRkwyVkQ4Uzd1Ijt9', 1727862049);

-- Dumping structure for table fast-learn.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int DEFAULT NULL,
  `dateStart` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table fast-learn.users: ~7 rows (approximately)
INSERT INTO `users` (`id`, `code`, `name`, `role_name`, `class`, `specialized`, `phone`, `active`, `dateStart`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'A11', 'ADMIN', 'admin', NULL, NULL, NULL, NULL, NULL, 'super.admin@admin.com', NULL, '$2y$10$qyRszK/aZrwzJ.6cLO4L.u6bEtc06RLNq9h11wkG9VMM.hkB5ury.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:19:21', '2024-10-02 02:19:21', NULL),
	(2, 'A12', 'ADMIN1', 'student', NULL, NULL, NULL, NULL, NULL, 'super1.admin@admin.com', NULL, '$2y$10$Yu.8Aqy8RjGF0qR.QSIxPe.7KXD1f.nMkzgT6zwYWEGVq5Uso30NK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(3, 'A13', 'ADMIN2', 'student', NULL, NULL, NULL, NULL, NULL, 'super2.admin@admin.com', NULL, '$2y$10$.wwwO2OiuUDL1rNo/H6Cduok80.LtABLlCJD9x5lGEnR.3oUZ1Nce', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(4, 'A14', 'ADMIN3', 'teacher', NULL, NULL, NULL, NULL, NULL, 'super3.admin@admin.com', NULL, '$2y$10$.jxexTAgBPE7wfrfBRIUpOMrth40fgJunc4xLuZ.RyxAkloxGlpju', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(5, 'A15', 'ADMIN4', 'teacher', NULL, NULL, NULL, NULL, NULL, 'super4.admin@admin.com', NULL, '$2y$10$mYkcq8NL9bFDk/8HUnAUgeBJmVS7sA.s3ZcOqQak5/9/zPSXRASLK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:19:22', '2024-10-02 02:19:22', NULL),
	(6, 'MAY1', 'Lại Quang Thắng', 'student', '123', '123', '0328394132', 1, '2024-10-02 00:00:00', 'thang@gmail.com', NULL, '$2y$10$IjoQ5EgfdvT43IvZCWwY.enHjFMLlZCxfLUZyWiRp2hNyUlF/d/yK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:20:17', '2024-10-02 02:20:17', NULL),
	(7, 'MAY12', 'Giảng viên A', 'teacher', NULL, NULL, NULL, 1, NULL, 'thanglai038@gmail.com', NULL, '$2y$10$wTV2t8y4ELuMpF12kMFYk.3aMI0Td2C3KxY36w3neZ7NOjIHtQF66', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:27:36', '2024-10-02 02:28:27', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
