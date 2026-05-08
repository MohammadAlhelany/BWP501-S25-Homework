-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2026 at 02:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events_ar`
--

CREATE TABLE `events_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `Full Description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_ar`
--

INSERT INTO `events_ar` (`id`, `name`, `date`, `location`, `address`, `tag`, `summary`, `Full Description`, `img`, `img2`) VALUES
(1, 'الذكاء الاصطناعي ', '2026-05-20 10:00 AM → 2026-05-22 06:00 PM', 'Syrian Virtual University – Online Collaboration Platform', 'Damascus, Syria – Syrian Virtual University (Virtual Hackathon Environment)', 'ابداعي', 'هاكاثون إبداعي يعتمد على الذكاء الاصطناعي لتطوير حلول رقمية مبتكرة خلال 48 ساعة.', 'تُعد هذه الفعالية واحدة من أهم الأحداث التقنية الإبداعية داخل الجامعة الافتراضية السورية، حيث تجمع الطلاب من مختلف التخصصات للعمل ضمن فرق تطوير مكثفة تعتمد على تقنيات الذكاء الاصطناعي.\r\nيمتد الحدث لمدة 48 ساعة متواصلة، يتم خلالها تقديم مشكلة واقعية لكل فريق تتعلق بمجالات متعددة مثل التعليم الذكي، تحليل البيانات، تحسين الخدمات الرقمية، أو دعم المدن الذكية.\r\nيعمل الطلاب على تحليل المشكلة، تصميم الحل، وبناء نموذج أولي باستخدام أدوات وتقنيات مثل Python، Machine Learning Libraries، وواجهات برمجية جاهزة (APIs).\r\nكما تتضمن الفعالية جلسات إرشاد مباشرة مع خبراء في البرمجة والذكاء الاصطناعي، إضافة إلى ورشات قصيرة تساعد الفرق على تحسين جودة مشاريعهم أثناء العمل.\r\nفي نهاية الحدث، يتم عرض المشاريع أمام لجنة تحكيم مختصة تقوم بتقييمها بناءً على الابتكار، جودة التنفيذ، ومدى قابلية التطبيق العملي، مع منح جوائز لأفضل المشاريع المميزة.\r\n', 'hackatho1.jpg', 'hackathon2.jpg'),
(2, 'ورشة الأمن السيبراني ', '2026-06-25 05:00 PM → 2026-06-25 09:00 PM', 'SVU Online Training Environment', 'Damascus, Syria – Virtual Security Training Room (SVU Platform)', 'ابداعي', 'ورشة إبداعية لتعريف الطلاب بأساسيات الأمن السيبراني وحماية الأنظمة من الهجمات الرقمية.', 'تهدف هذه الورشة إلى تعزيز الوعي الرقمي لدى الطلاب حول أهمية الأمن السيبراني في العصر الحديث، وكيفية حماية البيانات الشخصية والأنظمة من التهديدات الإلكترونية المتزايدة.\r\nتبدأ الورشة بمقدمة حول مفهوم الأمن السيبراني وأهميته، ثم يتم شرح أشهر أنواع الهجمات الإلكترونية مثل التصيد الاحتيالي (Phishing) ، البرمجيات الخبيثة (Malware)، وهجمات حجب الخدمة (DDoS) \r\nكما يتم تقديم أمثلة واقعية لكيفية حدوث هذه الهجمات وتأثيرها على الأنظمة، مع شرح خطوات الوقاية الأساسية مثل استخدام كلمات مرور قوية، التحقق الثنائي، وتحديث الأنظمة بشكل دوري.\r\nتتضمن الورشة أيضاً جزءاً عملياً يتم فيه محاكاة هجوم إلكتروني بسيط وكيفية اكتشافه والتعامل معه باستخدام أدوات تحليل أمنية.\r\nيشرف على الورشة مختصون في مجال أمن المعلومات، وتهدف إلى تزويد الطلاب بمهارات أساسية تساعدهم في حماية أنفسهم وأنظمتهم الرقمية في الحياة الأكاديمية والمهنية.\r\n', 'cyber img.jpg', 'cyber img2.jpg'),
(3, 'معرض المشاريع الرقمية', '2026-06-10 12:00 PM → 2026-06-12 08:00 PM', 'SVU Virtual Exhibition Hall', 'Damascus, Syria – Virtual Exhibition Center (SVU Digital Campus)', 'تعليمي', 'معرض تعليمي لعرض مشاريع الطلاب في البرمجة والتصميم والتطبيقات الرقمية.', 'يُعتبر هذا المعرض منصة تعليمية تفاعلية تهدف إلى عرض مشاريع الطلاب الرقمية بطريقة احترافية داخل بيئة افتراضية تحاكي المعارض الحقيقية.\r\nيشارك الطلاب في عرض مشاريعهم التي تشمل تطبيقات الويب، تطبيقات الهاتف المحمول، أنظمة قواعد البيانات، ألعاب رقمية، ومشاريع تصميم واجهات المستخدم وتجربة المستخدم (UI/UX).\r\nيتم إنشاء \"أجنحة افتراضية\" لكل مشروع تحتوي على شرح تفصيلي، صور، فيديو توضيحي، وأحياناً نموذج حي للتجربة.\r\nيمكن للزوار التنقل بين المشاريع بحرية والتفاعل مع أصحابها من خلال جلسات نقاش مباشرة، مما يعزز تبادل الخبرات بين الطلاب.\r\nكما تتضمن الفعالية عروض تقديمية مباشرة (Live Presentations) يتم فيها شرح فكرة المشروع، التقنيات المستخدمة، والتحديات التي واجهها الفريق أثناء التطوير.\r\nفي نهاية المعرض يتم تقييم المشاريع واختيار الأفضل منها بناءً على الإبداع، جودة التصميم، وقابلية الاستخدام.\r\n', 'digital project1.jpg', 'digital project2.jpg'),
(4, 'مسابقة أفق للابتكار القرائي والمعرفي', '2026-06-10 12:00 PM → 2026-06-12 08:00 PM', 'Cultural Center _ Damascus', 'Abu Rummaneh Cultural Center, Al-Jalaa Street, Damascus', 'تعليمي', 'مسابقة “أفق” للابتكار القرائي والمعرفي تقيمها الجامعة الافتراضية السورية بالتعاون مع وزارة الثقافة، بهدف إحياء الشغف بالقراءة وتطوير حلول وبرمجيات تركز على تقنيات البرمجة والذكاء الاصطناعي لتعزيز القراءة التفاعلية، وجعل المحتوى الثقافي يواكب العصر الحديث ', 'تركز المسابقة على بناء منصات تجمع الطلبة والكتاب والمثقفين ورواد الأعمال من الجامعة للعمل ضمن إطار يهدف إلى تطوير حلول لتعزيز المكتبة الرقمية وتسهيل الوصول إلى الكتاب الورقي والالكتروني، اقتراح أدوات ذكية تقيس أثر القراءة وتطوير المهارات النقدية للقراء. \r\nمسابقة افق للابتكار القرائي والمعرفي الابتكار في تقنيات التعليم بالجامعة الافتراضية السورية يقيمها فرع الهندسة المعلوماتية بالتعاون مع وزارة الثقافة بهدف تمكين تطوير حلول نوعية ترتكز على الذكاء الاصطناعي والتقنيات الناشئة، وتحويلها إلى تطبيقات عملية ذات أثر ملموس على منظومة التعليم العالي. تركز المسابقة على بناء برمجيات ابتكار تشاركية تجمع الطلبة وأعضاء هيئة التدريس والمطورين ورواد الأعمال من الجامعة للعمل ضمن إطار منظم يركز على تطوير نماذج أولية قابلة للتنفيذ، وصولًا إلى تبني الحلول الواعدة وتطبيقها داخل بيئة الجامعة، بما يسهم في تحسين جودة المخرجات التعليمية، ورفع كفاءة الأداء المؤسسي، وتسريع وتيرة التحول الرقمي.\r\n', 'ofok1.jpg', 'ofok2.jpg'),
(5, 'بطولة الجامعة الافتراضية الرياضية', '2026-05-01 04:00 PM → 2026-05-15 10:00 PM', 'SVU Sports Competition System – Online Tournament Platform', 'Damascus, Syria – Virtual Sports League Administration Center', 'رياضي', 'بطولة رياضية تجمع طلاب الجامعة في منافسات كرة القدم وكرة السلة بنظام تصفيات رسمي.', 'تُعد هذه البطولة من أبرز الفعاليات الرياضية داخل الجامعة الافتراضية السورية، وتهدف إلى تعزيز روح المنافسة والعمل الجماعي بين الطلاب ضمن بيئة منظمة.\r\nتشمل البطولة نوعين من المنافسات: كرة القدم وكرة السلة، حيث يتم تسجيل الفرق إلكترونياً وتوزيعها على مجموعات وفق نظام قرعة عادل.\r\nتبدأ المنافسات بدور المجموعات، ثم تنتقل الفرق المتأهلة إلى مرحلة التصفيات الإقصائية وصولاً إلى المباراة النهائية.\r\nيتم تحديث النتائج بشكل مستمر عبر نظام إلكتروني يعرض ترتيب الفرق، النقاط، وعدد الانتصارات، بالإضافة إلى إحصائيات فردية للاعبين مثل عدد الأهداف أو السلات ونسبة الأداء.\r\nكما يتم تنظيم البطولة بطريقة تحاكي البطولات الاحترافية من حيث الجدولة، التحكيم، وإدارة النتائج.\r\nفي نهاية الحدث يتم تتويج الفرق الفائزة وتكريم أفضل اللاعبين، بهدف تعزيز الروح الرياضية وتشجيع المشاركة الطلابية.\r\n', 'sport1.jpg', 'sport2.jpg'),
(6, 'الماراثون البرمجي للأطفال واليافعين', 'time\r\n2026-05-15 09:00 AM → 2026-05-21 03:00 PM\r\n', 'Syrian Virtual University (SVU) centers in various Syrian governorates ', 'Syrian Virtual University (SVU) centers in various Syrian governorates', 'رياضي', 'أحد أبرز الفعاليات الذهنية والتقنية السنوية التي تنظمها هيئة التميز والإبداع بالتعاون مع الجامعة الافتراضية السورية (SVU) ومركز التعلم مدى الحياة. يهدف الماراثون إلى تنمية مهارات حل المشكلات والتفكير المنطقي لدى الجيل الناشئ، ويستهدف الطلاب من الصف الثاني', 'الفئات المستهدفة: يقسم المشاركون إلى ثلاث فئات عمرية (صغار مبتدئ، صغار متقدم، يافعين) تغطي الصفوف من الثاني إلى الثامن.\r\n•	أهداف الماراثون: تعزيز التفكير التحليلي، البرمجة، وبناء قدرات الجيل الرقمي الناشئ في بيئة تعليمية تنافسية.\r\n•	التسجيل والمواعيد: يتم الإعلان عن الماراثون سنوياً، وعادة ما يفتح باب التسجيل في فترات الربيع (مثال: مستمر لغاية 21 مايو 2026 لموسم 2026) عبر روابط التسجيل الرسمية.\r\n•	المسار: يعتبر الماراثون بداية الطريق للمشاركة في الأولمبياد العلمي السوري. \r\nيساهم هذا الماراثون في نشر الثقافة البرمجية في سوريا ويعتبر \"رياضة عقلية\" بامتياز.\r\n', 'teen&kid1.jpg', 'teen&kid2.jpg'),
(7, 'حفل التخرج للعام 2026م', '2026-06-07 01:00 PM  ', 'Damascus, Syria – Damascus Opera House', 'Damascus Opera House (Dar al-Assad for Culture and Arts), \r\nUmayyad Square, Damascus\r\n', 'عائلي', 'تنظيم حفلة التخرج للعام الجامعي 2026م', 'تعلن إدارة الجامعة الافتراضية السورية عن الاستعداد لتنظيم حفل التخرج في هذا العام الجامعي 2026م لجميع الطلبة الذين تخرجوا؛ وعليه يطلب منهم الأمور التالية:\r\n\r\n•	تعبئة استمارة المشاركة في حفلة التخرج، الموجودة في موقع الجامعة.\r\n\r\n•	تقديم البحث للمناقشة لمن لم يناقش بعد، قبل نهاية شهر مايو 2026م.\r\n\r\n•	إرسال رقم واتساب إلى المسؤول عن شؤون الطلبة عن طريق الإيميل الجامعي للانضمام في مجموعة خاصة بالخريجين للعام 2026م, وذلك لتيسير نشر الأخبار والمعلومات المتعلقة بهم.\r\n\r\nملاحظة:\r\n\r\n•	تعتبر المناقشة شرط للمشاركة في الحفل.\r\n\r\n•	في حال وجود أي مشكلة الرجاء التواصل مع المسؤول.\r\n\r\n•	ستنشر قائمة الطلاب المشاركين.\r\n\r\n•	المناقشات متوقعة في نهاية شهر مايو 2026م. \r\n', 'Graduation1.jpg', 'Graduation2.jpg'),
(8, 'مهرجان الجامعة الافتراضية العائلي – فعاليات ترفيهية وألعاب تفاعلية', '2026-05-15  04:00 PM → 08:00 PM', 'SVU Family Festival Platform – Virtual Event', 'Damascus, Syria – Saadallah Al-Jabiri Cultural Complex, Conference \r\nHall\r\n', 'عائلي', 'مهرجان يجمع طلاب الجامعة وأسرهم في فعاليات ترفيهية وألعاب تفاعلية ممتعة لجميع \r\nالأعمار.\r\n', 'يُعد هذا المهرجان من أبرز الفعاليات العائلية داخل الجامعة الافتراضية السورية، ويهدف إلى تعزيز روح المرح والتواصل بين الطلاب وأفراد أسرهم ضمن بيئة منظمة وممتعة.\r\nيشمل المهرجان مجموعة متنوعة من الأنشطة مثل الألعاب التفاعلية، مسابقات المعرفة، ورش العمل الإبداعية، بالإضافة إلى عروض ترفيهية مباشرة، حيث يتم تسجيل العائلات إلكترونيًا وتوزيعها على مجموعات وفق نظام تنظيم يضمن مشاركة عادلة للجميع.\r\nنظام المهرجان:\r\n•	تبدأ الفعاليات بأنشطة تعريفية وألعاب جماعية.\r\n•	تُقام مسابقات ترفيهية تتضمن تحديات معلوماتية وفنية بين الفرق العائلية.\r\n•	يتم تحديث النقاط والنتائج بشكل مباشر عبر النظام الإلكتروني، مع إبراز أفضل المشاركين وأبرز العائلات في كل فئة.\r\n', 'family1.jpg', 'family2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events_en`
--

CREATE TABLE `events_en` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_en`
--

INSERT INTO `events_en` (`id`, `name`, `date`, `location`, `address`, `tag`, `summary`, `img`, `img2`) VALUES
(1, 'AI Innovation Challenge Hackathon', ' 2026-05-20 10:00 AM → 2026-05-22 06:00 PM', ' Syrian Virtual University – Online Collaboration Platform', ' Damascus, Syria – Syrian Virtual University (Virtual Hackathon Environment)\r\n', ' Creative', ' A creative hackathon based on artificial intelligence to develop innovative digital\r\nsolutions within 48 hours.', 'hackatho1.jpg', 'hackathon2.jpg'),
(2, 'Cyber Security Basics Workshop', '2026-06-25 05:00 PM → 2026-06-25 09:00 PM', ' SVU Online Training Environment', 'Damascus, Syria – Virtual Security Training Room (SVU Platform)', ' Creative', ' A creative workshop to introduce students to the basics of cybersecurity and\r\nprotecting systems from digital attacks.', 'cyber img.jpg', 'cyber img2.jpg'),
(3, 'Digital Projects Exhibition\r\n', '2026-06-10 12:00 PM → 2026-06-12 08:00 PM', 'SVU Virtual Exhibition Hall', ' Damascus, Syria – Virtual Exhibition Center (SVU Digital Campus)', ' Educational\r\n', ' An educational exhibition showcasing students\' projects in programming, design,\r\nand digital applications.', 'digital project1.jpg', 'digital project2.jpg'),
(4, 'Ofoq Competition for Reading and Cognitive\r\nInnovation\r\n', ' 2026-06-10 12:00 PM → 2026-06-12 08:00 PM\r\n', 'Cultural Center _ Damascus', 'Abu Rummaneh Cultural Center, Al-Jalaa Street, Damascus\r\n', 'Educational\r\n', 'The \'Ofoq\' competition for reading and cognitive innovation is organized by the\r\nSyrian Virtual University in cooperation with the Ministry of Culture, aiming to revive the passion for\r\nreading and develop solutions and software focusing on programming te', 'ofok1.jpg', 'ofok2.jpg'),
(5, 'Virtual University Sports Championship – Football\r\nand Basketball\r\n', '2026-05-01 04:00 PM → 2026-05-15 10:00 PM', ' SVU Sports Competition System – Online Tournament Platform', ' Damascus, Syria – Virtual Sports League Administration Center', ' Sports', 'A sports championship gathering university students in football and basketball\r\ncompetitions under an official knockout system', 'sport1.jpg', 'sport2.jpg'),
(6, 'Kids & Teens Programming Marathon (KPM)\r\n', ' 2026-05-15 09:00 AM → 2026-05-21 03:00 PM', 'Syrian Virtual University (SVU) centers in various Syrian governorates\r\n', 'Syrian Virtual University (SVU) centers in various Syrian governorates', 'Sports\r\n', 'One of the most prominent annual mental and technical events organized by the\r\nDistinction and Creativity Agency in cooperation with the Syrian Virtual University (SVU) and the\r\nLifelong Learning Center. The marathon aims to develop problem-solving and lo', 'teen&kid1.jpg', 'teen&kid2.jpg'),
(7, 'Graduation Ceremony 2026\r\n', ' 2026-06-07 01:00 PM', 'Damascus, Syria – Damascus Opera House', ' Damascus Opera House (Dar al-Assad for Culture and Arts), Umayyad Square,\r\nDamascus\r\n', ' Family', 'Organization of the graduation ceremony for the academic year 2026.', 'Graduation1.jpg', 'Graduation2.jpg'),
(8, 'Virtual University Family Festival\r\n', ' 2026-05-15 04:00 PM → 08:00 PM\r\n', ' SVU Family Festival Platform – Virtual Event\r\n', 'Damascus, Syria – Saadallah Al-Jabiri Cultural Complex, Conference Hall', ' Family', 'A festival bringing together university students and their families in entertaining\r\nactivities and interactive games suitable for all ages.', 'family1.jpg', 'family2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2026-05-03 17:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events_ar`
--
ALTER TABLE `events_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_en`
--
ALTER TABLE `events_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_ar`
--
ALTER TABLE `events_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events_en`
--
ALTER TABLE `events_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
