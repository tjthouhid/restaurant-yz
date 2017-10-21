-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2017 at 01:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant-yz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `arabic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) NOT NULL,
  `is_img` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `english`, `arabic`, `img`, `is_img`) VALUES
(1, 'the-breakfast', 'THE BREAKFAST', 'الإفطار', 'brekfast-pancake.jpg', '1'),
(2, 'cold-appetizers-and-salads', 'Cold Appetizers And Salads', 'المقبلات الباردة والسلطات', 'cold-apitizer.jpg', '1'),
(3, 'charcoal-grills\r\n', 'CHARCOAL GRILLS', 'مشاوي على الفحم', 'charcoal-chicken.jpg', '1'),
(4, 'our-special-dishes', 'OUR SPECIAL DISHES', 'اطباقنا المميزة', 'special-dish.jpg', '1'),
(5, 'from-our-fishermans-wraf', 'FROM OUR FISHERMANS WRAF', 'الاسماك والمأكولات البحرية', 'fisherman.jpg', '1'),
(6, 'pasta-and-pizza', 'PASTA AND PIZZA', 'بيتزا وباستا', 'pizza.jpg', '1'),
(7, 'soup', 'SOUP', 'شوربة', '', '0'),
(8, 'hot-appetizers', 'HOT APPETIZERS', 'مقبلات ساخنة', '', '0'),
(9, 'sides', 'SIDES', 'الاطباق الجانبية', '', '0'),
(10, 'desserts', 'DESSERTS', 'الحلويات', '', '0'),
(11, 'freshly-squeed-juice', 'FRESHLY SQUEED JUICE', 'العصائر الطازجة', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `detail_en` text NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `cat_id`, `title_en`, `detail_en`, `title`, `detail`, `price`, `img`) VALUES
(1, 1, 'The Mangiamo Platter', 'Hommous, Lebneh, Black and Green Olives and pickles served with seasonal fresh vegetables\r\nwith your choice of Foul Medames and boiled eggs finished with soft dates\r\n', 'طبق مانجيامو', 'حمص , لبنة , زيتون مشكل ومخلل يقدم مع صحن من خضار الموسم بالإضافة الى طبق الفول المدمس والبيض المسلوق مع تحلية من التمر الشهي .', '42 AED', 'the-mangiamo-platter.jpg'),
(2, 1, 'Zaatar Crisp with Labneh', 'Oven roasted zaater crisp bread served with labneh and olives\r\nFreshly baked bread with seasonal vegetables .', 'خبز بالزعتر مقرمش باللبنة', 'خبز مخبوز مقرمش بالزعتر يقدم مع اللبنة والزيتون يرافقه خبز طازج وخضار الموسم', '28 AED', 'zaatar-crisp-with-labneh.jpg'),
(3, 1, 'Foul Medames', 'cooked beans with garlic and lemon juice topped with olive oil and condiments', 'الفول المدمس', 'طبق من الفول المدمس والممزوج مع الثوم المطحون , عصير الليمون , زيت الزيتون والتوابل', '28 AED', 'foul-medames.jpg'),
(4, 1, 'Hummus', 'Fine blend of mashed chick peas\r\nin tahini with olive oil served with Arabic bread', 'حمص', 'مزيج من الحمص المطحون مع الطحينة وزيت الزيتون يقدم مع الخبز العربي\r\n', '26 AED', ''),
(5, 1, 'Lebneh', 'Strained yogurt served with cucumber and olives', 'لبنة\r\n', 'صحن لبنة يقدم مع الخيار والزيتون', '28 AED', ''),
(6, 1, 'The Eggs Corner', 'SCRAMBLED     25 AED<br>\r\nFRIED      25 AED<br>\r\nFRIED WITH SOJOUK     32 AED<br>\r\n\r\nOMELETTES either plain or with the choice of cheese and mushrooms, cheese and tomato, spanich or sausages<br>\r\n\r\nFried tomato and garlic<br>\r\n\r\nall the above served with Arabic bread a side salad\r\n', 'قسم البيض', '\r\nمخفوق<br>\r\nمقلي<br>\r\nمقلي مع السجق<br>\r\n\r\nعجة البيض على أنواعها : دون أية اضافات , مع الجبنة والفطر , الجبنة والطماطم , السبانخ والسجق<br>\r\n\r\nقلاية الطماطم والثوم<br>\r\n\r\nجميع أنواع البيض والعجة تقدم مع الخبز العربي وسلطة جانبية\r\n', '30 AED', 'the-eggs-corner.jpg'),
(7, 1, 'Fatteh', 'Levantine dish with yougurt and toasted bread with the choie of either chickpeas or meat\r\n', 'الفتة', 'طبق شهير في بلاد الشام ومصر\r\nيتكون من اللبن والثوم المطحون مع الخبز المحمر\r\nويقدم مع الحمص او اللحم', '28 AED', ''),
(8, 1, 'Croissants', 'A selection of freshly baked croissants of plain, zaatar and cheese\r\nwith freshly brewed coffee or tea', 'الكرواسان', 'تشكيلة من الكرواسان المخبوزة طازجاً بأنواع الزعتر , الجبنة أو العادي تقدم مع قهوة طازجة او شاي', '28 AED', ''),
(9, 1, 'Vanilla or Chocolate Butter Milk Pancake', 'Vanilla or Chocolate Pancake served with fresh fruits and topped with maple syrup', 'البان كيك باللبن بمذاق الفانيليا او الشوكولاتة', 'البان كيك باللبن الرائب بمذاق الفانيليا او الشوكولاتة يقدم مع الفاكهة الطازجة وتشبع بشراب القوقب', '28 AED', 'vanilla-or-chocolate-butter-milk-pancake.jpg'),
(10, 1, 'French toast with custard', 'Custard toasted slices of bread sprinkled with cinnamon and dolloped with maple syrup', 'الخبز الفرنسي المحمص مع الكاسترد', 'شرائح من الخبز الفرنسي بكريما الكاسترد مزين بالقرفة وشراب القوقب', '28 AED', ''),
(11, 2, 'Arabic Salad', 'a mix of lettuce, tomato and cucumber tossed in lemon juice and olive oil', 'سلطة عربية', 'سلطة الخس , الطماطم و الخيار متبلة بعصير الليمون وزيت الزيتون', '34 AED', ''),
(12, 2, 'Rocca Salad', 'Fresh Rocca leaves salad tossed with lemon vinaigrette dressing topped with pomegranate molasses', 'سلطة الجرجير', 'سلطة الجرجير الطازجة تقدم مع خليط الليمون والخل وتزين بدبس الرمان', '32 AED', ''),
(13, 2, 'Classic Niciose Salad', 'Flaked tuna served on fresh bad of lettuce with boiled potato ,tomato and hard - boiled eggs and dressing of oil, vinegar and mustard', 'سلطة النيسواز', 'خس طازج مزين بقطع التونا\r\n مع البطاطا المسلوقة , الطماطم وقطع من البيض المسلوق تقدم مع خلطة زيت الزيتون , خل ومسترد', '36 AED', ''),
(14, 2, 'Tabouleh', 'Finely chopped fresh parsley , with diced tomatoes and onion , freshly cut mint sprinkled with cracked wheat bulgur and dressed in lemon juice and olive oil', 'تبولة', 'قطع من البقدونس الناعم مع الطماطم والبصل والنعناع المفروم مزينة بالبرغل الناعم ومتبلة بمزيج عصير الليمون\r\nوزيت الزيتون\r\n\r\n', '36 AED', 'tabouleh.jpg'),
(15, 2, 'Greek Salad', 'Fresh lettuce mix topped with ball pepper, tomato , feta cheese crumble and sliced black olives , garnished with oregano and a dressing of apple vinegar and olive oil', 'سلطة يونانية', 'قطع الخس والفلفل الأخضر والطماطم مزينة بجبنة الفيتا وشرائح من الزيتون الأسود مع رشة من الزعتر\r\nأو الاريجانو وتتبيلة خل التفاح وزيت الزيتون', '36 AED', 'greek-salad.jpg'),
(16, 2, 'Fatoush', 'A mix of chopped lettuce , tomato  and cucumber tossed in lemon juice and olive oil sprinkled with sumac and topped with arabic bread croutons', 'فتوش', 'قطع من الخس , الطماطم والخيار مزينة بالسماق وقطع الخبز العربي المحمص ومتبلة بمزيج عصير الليمون وزيت الزيتون\r\n', '34 AED', 'fatoush.jpg'),
(17, 2, 'Caesar Salad ( chicken or Shrimps )', 'Roman lettuce topped with parmesan and croutons with our chef\'s speacial dressing with your choice of grilled chicken or shrimps', 'سلطة السيزر مع الدجاج او الروبيان', 'خس روماني , جبنة بارميزان وقطع الخبز المحمر مع خلطة مميزة من التوابل واختيارك : الدجاج المشوي او الروبيان\r\n', '42 AED', ''),
(18, 2, 'Hummus', 'Puree of chickpeas mixed with tahini and lemon juice using our special spices', 'حمص', 'حمص مع الطحينة وعصير الليمون بالإضافة الى خلطة التوابل المميزة', '26 AED', ''),
(19, 2, 'Mutabbal', 'Mashed char grilled eggplant blended with tahini and lemon juice', 'متبل', 'باذنجان مشوي مطحون مع الطحينية وعصير الليمون\r\n', '26 AED', ''),
(20, 2, 'Vine Leaves', 'Vine leaves stuffed with a blend of rice , tomatoand spices', 'ق عنب بالزيت', 'ورق عنب محشي بالأرز والبندورة مع خليط من التوابل\r\n', '28 AED', 'vine-leaves.jpg'),
(21, 3, 'Arayes', 'Pita bread stuffed with grilled spiced minced lamb', 'عرايس', 'خبز محشو بلحم الغنم المفروم والغني بالتوابل', '46 AED', 'arayes.jpg'),
(22, 3, 'Half Grilled Chicken', 'Half grilled chicken in our special marinade served with french fries and grilled tomatoes', 'نصف دجاجة مشوية', 'نصف دجاجة مشوية مشبعة بالتوابل تقدم مع البطاطا المقلية وشرحات من الطماطم المشوية', '51 AED', 'half-grilled-chicken.jpg'),
(23, 3, 'Shish Tawouk', 'Marinated grilled chicken cubes served with French fries', 'شيش طاووق', 'قطع متبلة من الدجاج المشوي تقدم مع البطاطا المقلية', '59 AED', 'shish-tawouk.jpg'),
(24, 3, 'Grilled Kabab', 'Grilled spiced ground lamb meat served with French fries', 'كباب مشوي', 'كباب لحم غنم مشوي يقدم مع البطاطا المقلية', '59 AED', 'grilled-kabab.jpg'),
(25, 3, 'Grilled Lamb Tikka', 'Grilled marinated lamb tikka served with french fries', 'لحم تكه مشوي:', 'قطع لحم غنم متبلة بتوابل التكه ومشوية تقدم مع البطاطا المقلية', '62 AED', 'grilled-lamb-tikka.jpg'),
(26, 3, 'Lebanese Mixed Grill', 'A generous selection of grilled lamp kabab, tikka , tawouk and arayes served with tomato,onions and french fries', 'مشاوي مشكل', 'تشكيلة غنية من مشاوي الكباب , التكه , شيش طاووق والعرايس تقدم مع الطماطم والبطاطا المقلية', '64 AED', ''),
(27, 3, 'Mix Seafood Grill', 'A mix of grilled shrimps , hamour fish and crab meat baked with Mozzarella cheese and served with avocado, peppers and tomato', 'طبق من ثمار البحر المشكل', 'طبق مشكل من مشاوي الروبيان , سمك الهامور , السلطعون مخبوز مع جبنة الموزاريلا يقدم مع الافوكادو , الفلفل والطماطم.', '', ''),
(28, 4, 'Biryani ( Lamp or Chicken )', 'Saffron flavored Basmati rice mixed with exoric indian spices with the choice of boiled spieces of juicy lamb or tender pieces of chicken', 'برياني دجاج او لحم', 'أرز بسمتي بالزعفران مع خلطة مميزة من التوابل يقدم مع لحم الغنم اللين أو قطع الدجاج', '45 AED', ''),
(29, 4, 'Shrimp Biryani', 'Saffron flevored Basmati rice mixed with exotic indian spices with cooked tiger shrimps', 'برياني الروبيان', 'أرز بسمتي بالزعفران مع خلطة مميزة من التوابل مع الروبيان', '58 AED', ''),
(30, 4, 'Chicken Escalope', 'Breaded fried chicken breast served with vegetables and potato wedges', 'سكالوب دجاج:', 'صدر دجاج مقلي ومغطى بكعك الخبز المطحون يقدم مع الخضار والبطاطا المقلية', '62 AED', 'chicken-escalope.jpg'),
(31, 4, 'Roasted Lamb', 'Oven roasted lamb on oriental rice and nuts served with plain yogurt', 'خروف محشي', 'لحم خروف مشوي ومحشي بالارز والمكسرات , يقدم مع لبن .', '72 AED', 'roasted-lamb.jpg'),
(32, 4, 'Wagyu Steak', 'Grilled Wagyu beef steak topped with green peppercon sauce', 'لحم الواغيو', 'لحم عجل الواغيو مع صلصة الفلفل الاخضر .', '135 AED', 'wagyu-steak.jpg'),
(33, 5, 'Grilled wild salmon fillet', 'Grilled wild salmon fillet served with lemon butter sauce and mashed potato', 'فيليه سمك السلمون المشوي', 'فيليه سمك السلمون المشوي مع صلصة الليمون بالزبدة يقدم مع البطاطا المهروسة', '68 AED', 'grilled-wild-salmon-fillet.jpg'),
(34, 5, 'Grilled Shrimps', 'Marinated grilled tiger shrimps topped with lemon butter sauce served with rice and vegetables', 'روبيان مشوي', 'روبيان متبل ومشوي على الفحم مع صلصة الليمون بالزبدة يقدم مع الارز والخضار', '92 AED', 'grilled-shrimps.jpg'),
(35, 6, 'Chicken Piccato Milanese', 'Pan-fried chicken breast layered with crispy parmesan crust on a bed of spaghetti tossed with tomato and Italian herbs', 'دجاج بيكاتا ميلانيز', 'صدر دجاج مقلي مقرمش بجبنة البارميزان ويقدم مع السباغيتي وصلصة الطماطم بالاعشاب الايطالية', '63 AED', ''),
(36, 6, 'Meat Lasagna', 'Lasagna pasta layered with Bolognese sauce and bechamel baked with Mozzarella and Parmesan cheese', 'لازانيا باللحم', 'طبقات من باستا اللازانيا مع صلصتي الطماطم باللحم المفروم والبشاميل مخبوزة مع جبنة الموزاريلا والبارميزان', '62 AED', ''),
(37, 6, 'Margherita', 'Thin crusted oven baked pizza topped with homemade tomato sauce and Mozzarella cheese', 'مارغريتا:', 'عجينة البيتزا الرقيقة بالفرن مع صلصة الطماطم وجبنة الموزاريلا', '45 AED', 'margherita.jpg'),
(38, 6, 'Vegi Pizza', 'Thin crusted oven baked Pizza with tomato sauce  and Mozzarella cheese topped with green bell pepper, tomato, onion , mushrooms, avocado , eggplant and zucchini with a sprinkle of oregano\r\n', 'بيتزا بالخضار', 'عجينة البيتزا الرقيقة بالفرن مع صلصة الطماطم وجبنة الموزاريلا مزينة بالفلفل الأخضر , الطماطم , البصل , الأفوكادو , الباذنجان والكوسا مع الاريجانو', '47 AED', 'vegi-pizza.jpg'),
(39, 6, 'Chicken Pizza', 'Chicken strips cooked with tomato, peppers and mushrooms topped  with olives and mozzarella cheese', 'بيتزا الدجاج', 'شرائح دجاج مع الطماطم, الفلفل والفطر مزينة بالزيتون وجبنة الموزاريلا', '49 AED', ''),
(40, 7, 'Lentil Soup', 'Yellow lentil simmered and blended with onion and garlic, served croutons and lemon slices', 'شوربة عدس', 'عدس أصفر مطحون مع البصل والثوم , يقدم مع الخبز المقلي المقرمش وشرائح الليمون', '28 AED', ''),
(41, 7, 'Creamy Chicken Soup', 'A creany blend of chicken cooked with fresh cream', 'شوربة الدجاج بالكريمة', 'خليط الدجاج المطهو مع الكريمة الطازجة', '32 AED', 'creamy-chicken-soup.jpg'),
(42, 7, 'Vegetable Soup', 'A rich mix of freshly cooked vegetables with cream and cheese topped with croutons', 'شوربة الخضار', 'خليط غني بخضار الموسم المطبوخة والممزوجة بالكريمة والجبنة ,يقدم مع شرائح من الخبز المحمر', '28 AED', ''),
(43, 7, 'Mashroom Soup', 'A mix of cooked mushrooms and onions blend and served with cheese and crouton', 'شوربة الفطر', 'مزيج مطحون من الفطر المطبوخ مع البصل يقدم مع الجبنة وشرائح الخبز المحمر', '34 AED', ''),
(44, 8, 'Hummus Meat', 'Puree of chickpeas topped with ground lamb meat and fried pine nuts in olive oil', 'ص باللحمة', 'حمص يقدم مع لحم الغنم المفروم والصنوبر المقلي مع زيت الزيتون', '36 AED', 'hummas-meat.jpg'),
(45, 8, 'Pan Sauteed beef', 'strips of beef cooked with pepper and tomato', 'قلاية اللحمة', 'شرائح لحم العجل مع الفلفل والطماطم', '36 AED', 'pan-sauteed-beef.jpg'),
(46, 8, 'Dynamite Shrimps', 'Fried tiger shrimps served on a bed of lettuce topped with our dynamite chili sauce', 'ديناميت الروبيان', 'روبيان مقلي يقدم مع الخس وصلصة الديناميت الحارة', '52 AED', ''),
(47, 8, 'Mix Fatayer', 'Mixed Arabic fried pastries filled with spinach , meat or cheese', 'فطاير مشكلة', 'فطاير مقلية مشكلة محشوة بالسبانخ , اللحم أو الجبنة', '36 AED', ''),
(48, 8, 'Soujok', 'Spicy soujok sausages with lemon and garlic', 'سجق', 'سجق يقدم مع الليمون والثوم', '38 AED', ''),
(49, 8, 'Chicken Liver', 'Fried chicken liver glazed in lemon juice or pomegranate molasses\r\n\r\n\r\n', 'كبدة دجاج', 'كبدة دجاج مقلية مع عصير الليمون أو دبس الرمان', '36 AED', 'chicken-liver.jpg'),
(50, 9, 'French Fries', '', 'بطاطا مقلية', '', '20 AED', ''),
(51, 9, 'French fries with dynamite sauce', '', 'بطاطا مقلية مع صلصة الديناميت', '', '24 AED', ''),
(52, 9, 'Potato Wedges', '\r\n', 'بطاطا ودجز', '', '22 AED', ''),
(53, 9, 'Potato Wedges with dynamite sauce', '', 'بطاطا ودجز مع صلصة الديناميت', '', '24 AED', ''),
(54, 10, 'Banana Split', 'Banana boat topped with vanilla, chocolate and mango ice cream', 'بنانا سبليت', 'قطعة موز مزينة بتشكيلة من الآيس كريم بنكهات الفانيليا , الشوكولاتة والمانجا .', '32 AED', ''),
(55, 10, 'Fruit Salad with Ice Cream', 'Fresh seasonal fruit salad topped with mint leaves and a scoop of ice cream', 'سلطة الفواكه مع الآيس كريم', 'فاكهة الموسم الطازجة مع النعناع المنعش والآيس كريم', '34 AED', ''),
(56, 10, 'Umm Ali', 'Arabic pudding dessert baked with puff pastry in sweetened cream topped with nuts and raisins\r\n\r\n\r\n', 'ام علي', 'حلوى البودينغ العربية المشبعة بالكريمة والمخبوزة بعجينة البف باستري الهشة مزينة بالمكسرات والزبيب', '32 AED', ''),
(57, 10, 'Kunafa', 'Lebanese stretchy white cheese covered in a crispy pastry cryst and soaked in sweet sugary syrup', 'كنافة', 'حلوى الكنافة اللبنانية مكونة من جبنة العكاوي الذائبة المغطاة بعجينة من السميد ومشبعة بالقطر', '34 AED', 'kunafa.jpg'),
(58, 10, 'Chocolate Blast', 'Warm lava cake with dewy center topped with chocolate sauce', 'شوكولاتة بليست', 'كيك سائل وطري الوسط تضاف عليه صلصة الشوكولاتة', '42 AED', ''),
(59, 10, 'Arabic Ice Cream with angel hair', 'Arabic ice cream topped with strands of angel hair and delicious fruit', 'بوظة عربية مع غزل البنات', 'بوظة عربية مزينة بخيوط غزل البنات والفواكه الشهية', '42 AED', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoy_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `categoy_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
