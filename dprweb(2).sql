-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 11:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dprweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `created` date DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `created`, `online`, `image`) VALUES
(52, 'Export', 'An export in international trade is a good or service produced in one country that is sold into another country.[1] The seller of such goods and services is an exporter; the foreign buyer is an importer.[2]\r\nExport and import\r\n\r\nExport of goods often requires the involvement of customers authorities. From the buyer\'s point of view an export is an import. \r\n\r\nFirms\r\nMany manufacturing firms begin their global expansion as exporters and only later switch to another mode for serving a foreign market.\r\n\r\nProcess\r\n\r\nMethods of exporting a product, goods or information include mail, hand delivery, air shipping, shipping by vessel, uploading to the Internet, or downloading from a website.\r\nBarriers\r\n\r\nExport barriers are divided into four large categories: motivational, informational, operational/resource-based, and knowledge.\r\n\r\nTrade barriers are government laws, regulations, policy, or practices that protect domestically made products from foreign competition. While restrictive business practices sometimes have a similar effect, they are not usually regarded as trade barriers. The most common foreign trade barriers are government-imposed measures and policies that restrict, prevent, or impede the international exchange of goods and services.\r\n\r\nTariffs\r\n\r\nA tariff is a tax placed on a specific good or set of goods exported from or imported to a countryside, creating an economic barrier to trade.[7] A tariff may be used when domestic producers are having difficulty competing with imports. Tariffs may also be used to protect an industry that the country views as a matter of its national security.\r\nSome industries receive protection that has a similar effect to subsidies; tariffs reduce the industry\'s incentives to produce goods quicker, cheaper, and more efficiently, becoming ever less competitive.\r\n\r\nThe third basis for a tariff involves dumping. When a producer exports at a loss, its competitors may term this dumping. Another case is when the exporter prices a good lower in the export market than in its domestic market.[8] The purpose and expected outcome of a tariff is to encourage spending on domestic goods and services rather than their imported equivalents.\r\n\r\nTariffs can create tension between countries. Examples include the United States steel tariff of 2002, and when China placed a 14% tariff on imported auto parts. Such tariffs usually lead to a complaint with the World Trade Organization (WTO) which sets rules and attempts to resolve trade conflicts.[9] If that is unsatisfactory, the exporting country may choose to put a tariff of its own on imports from the other nation.\r\nVessel at Altenwerder Container Terminal (Hamburg)\r\nAdvantages\r\n\r\nExporting avoids the cost of establishing manufacturing operations in the target country.[10]\r\n\r\nExporting may help a company achieve experience curve effects and location economies in their home country.[10] Ownership advantages include the firm\'s assets, international experience, and the ability to develop either low-cost or differentiated products. The locational advantages of a particular market are a combination of costs, market potential and investment risk. Internationalization advantages are the benefits of retaining a core competence within the company and threading it though the value chain rather than to license, outsource, or sell it.\r\n\r\nIn relation to the eclectic paradigm, companies with meager ownership advantages do not enter foreign markets. If the company and its products are equipped with ownership advantage and internalization advantage, they enter through low-risk modes such as exporting. Exporting requires significantly less investment than other modes, such as direct investment. Export\'s lower risk typically reduces the rate of return on sales versus other modes. Exporting allows managers to exercise production control, but does not provide them the option to exercise as much marketing control. An exporter enlists various intermediaries to manage marketing management and marketing activities. Exports also has effect on the Economy. Businesses export goods and services where they have a competitive advantage. This means they are better than any other country at providing that product or have a natural ability to produce either due to their climate or geographical location etc.[11]\r\nDisadvantages\r\n\r\nExporting may not be viable unless appropriate locations can be found abroad.[3]\r\n\r\nHigh transport costs can make exporting uneconomical, particularly for bulk products.[3]\r\n\r\nAnother drawback is that trade barriers can make exporting uneconomical and risky.[3]\r\n\r\nFor small and medium-sized enterprises (SMEs) with fewer than 250 employees, export is generally more difficult than serving the domestic market. The lack of knowledge of trade regulations, cultural differences, different languages and foreign-exchange situations, as well as the strain of resources and staff, complicate the process. Two-thirds of SME exporters pursue only one foreign market.[12]\r\n\r\nExports could also devalue a local currency to lower export prices. It could also lead to imposition of tariffs on imported goods.', '2020-10-13', 1, 'Export.jpg'),
(53, 'Market intelligence', 'Market intelligence is the information relevant to a company\'s market - trends, competitor and customer (existing, lost and targeted) monitoring, gathered and analyzed specifically for the purpose of accurate and confident decision-making in determining strategy in areas such as market opportunity, market penetration strategy, and market development.[1]\r\n\r\nMarket intelligence includes the process of gathering data from the company\'s external environment like online sources - news websites, company websites, secondary data sources, social media, RSS feeds, etc., whereas the business intelligence process is based primarily on internal recorded events – such as sales, shipments, and purchases. The purpose of incorporating Market Information or intelligence into the Business Intelligence process is to provide decision-makers with a more “complete picture” of ongoing corporate performance in a set of given market conditions.[2]\r\nGathering market intelligence data\r\n\r\nMarket intelligence needs accurate market information that is gathered with curated Market and Competitive Intelligence tools and methods. To gather information companies can conduct surveys, interviews, visit and monitor competitors outlets or gather and buy data from different sources.\r\n\r\nTraditional interviews and surveys can be done either in-house or by using specialist agencies. As more and more markets are digitalized the market intelligence space has seen a lot of new digital tools that companies can use. There are tools such as Google Consumer Survey that enable companies to ask web users a question through Google network of online publishers. There are also specialist sites companies can buy market intelligence information and market intelligence software like Contify that companies can use to collect and monitor data from the internet.\r\nReferences\r\n\r\nCornish, S. L. “Product Innovation and the Spatial Dynamics of Market Intelligence: Does Proximity to Markets Matter?” Economic Geography. Volume: 73, Issue 2 (April 1997)\r\nPrescott, John and others, Proven Strategies in Competitive Intelligence (Wiley, 2001)', '2020-10-13', 1, 'Market intelligence.jpg'),
(54, 'Residential Real estate', 'Residential real estate may contain either a single family or multifamily structure that is available for occupation or for non-business purposes.[3]\r\n\r\nResidences can be classified by and how they are connected to neighbouring residences and land. Different types of housing tenure can be used for the same physical type. For example, connected residences might be owned by a single entity and leased out, or owned separately with an agreement covering the relationship between units and common areas and concerns.[4] ', '2020-10-13', 1, 'Residential Real estate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `online`) VALUES
(1, 'admin1', 'db95ae09cc5d94af24b8b5c9f542a657', 1),
(2, '', 'db95ae09cc5d94af24b8b5c9f542a657', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
