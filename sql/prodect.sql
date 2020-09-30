-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 02:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronictrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodect`
--

CREATE TABLE `prodect` (
  `idprodect` int(11) NOT NULL,
  `nameprodect` varchar(100) NOT NULL,
  `imageprodect` text NOT NULL,
  `priceprodect` int(11) NOT NULL,
  `decprodect` varchar(1000) NOT NULL,
  `HS` text NOT NULL,
  `vendorname` int(11) NOT NULL,
  `catid` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `statuss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`idprodect`, `nameprodect`, `imageprodect`, `priceprodect`, `decprodect`, `HS`, `vendorname`, `catid`, `size`, `statuss`) VALUES
(346, ' E.L.F., Poreless Putty Primer, Universal Sheer, 0.74 oz (21 g)', '0 (1).jpg', 12, 'No Animal Testing\r\nThis perfecting putty primer smoothes the skin and preps it with Squalane to help moisturize and grip makeup for all-day wear. The velvety texture glides over the skin, smoothing over imperfections for a poreless effect.\r\nSuggested Use\r\nApply a thin, even amount to moisturized skin prior to makeup application. Allow to set for 30 seconds before applying foundation.', 'sale', 12, '31', 'S', 'allowed'),
(349, 'Ara Organics Tea Tree Oil Face Cream - For Oily, Acne Prone Skin, ', '71NyqcSaYqL._SL1500_.jpg', 12, 'Using tea tree oil for acne is a centuries old natural remedy that still works today. Our face moisturizer for oily skin is perfect for blemishes, blackheads, cystic acne, redness and combination skin. Get balanced, smoother & clearer skin!\r\nExtra Strength Nourishing Formula- Most acne treatments are too harsh on the skin, leading to irritation, redness or dry skin that needs support. Our facial cream is formulated to soothe, nourish and balance oily skin, dry skin or combination skin to support your skin in fighting blemishes. Gentle facial moisturizer perfect for men, women and teens!', 'hot', 12, '30', 'S,M', 'allowed'),
(352, 'E.L.F., Poreless Face Primer, 0.47 fl oz (14 mlE.L.F., Poreless ', '6.jpg', 9, 'Fills in Fine Lines and Minimizes the Appearance of Pores\r\nPoreless Primer\r\nIdeal for All Skin Tones\r\nPump Applicator\r\nBecome Your Own Makeup Artist\r\nNo Animal Testing\r\nReduces the appearance of enlarged pores, fine lines, and shine for a gorgeous airbrushed look\r\n\r\nInfused with Tea Tree, and Vitamins A & E to keep skin looking youthful\r\n\r\nThis multipurpose skin primer transforms you face into a flawless and smooth canvas so makeup goes on evenly and has a long-lasting matte finish', 'hot', 12, '31', 'S', 'allowed'),
(353, 'Maybelline, FaceStudio Primer Cream, Master Prime, Smoothing ', '3.jpg', 12, 'Water, polybutene, paraffin, potassium cetyl phosphate, beeswax, copernicia cerifera / carnauba wax, steareth-2, cetyl alcohol, alcohol denat., phenoxyethanol, hydroxyethylcellulose, acacia senegal gum, panthenol, ethylenediamine/stearyl, dimer dilinoleate copolymer, caprylyl glycol, hydrogenated jojoba oil, hydrogenated palm oil, 2-oleamido-1,3 octadecanediol, disodium EDTA, BHT, rosa canina fruit oil, stearyl alcohol, myristyl alcohol, pentaerythrityl tetra-di-t-butyl hydroxyhydrocinnamate, propylene glycol, propyl gallate, citric acid.', 'hot', 12, '30', 'S', 'allowed'),
(357, 'LOreal Elvive Colour Protect Purple Hair Mask 250ml', '0 (3).jpg', 5, 'LOreal Elvive Colour Protect Purple Hair Mask 250mlLOreal Elvive Colour Protect Purple Hair Mask 250mlLOreal Elvive Colour Protect Purple Hair Mask 250ml', 'hot', 12, '32', 'S,M,L', 'allowed'),
(360, 'SheaMoisture, Jamaican Black Castor Oilamaican Black ', '13.jpg', 12, 'The best oils for all products are hair warrior raghad and protect hair from breakageThe best oils for all products are hair warrior raghad and protect hair from breakageThe best oils for all products are hair warrior raghad and protect hair from breakageSheaMoisture, Jamaican Black Castor Oil, Strengthen & Restore Hair Serum, 2 fl oz (59 ml)', 'hot', 13, '32', 'S,M,L', 'allowed'),
(365, 'Original FormulaOriginal Formula\r\nOriginal Formula\r\n', '1.jpg', 16, 'Original Formula\r\nA Beauty Legacy Since 1935\r\nLong Lasting\r\nDermatologically Tested\r\nFeaturing on exclusive Microspun formula where loose powder particles are spun and swirled until they reach a cloudlike softness. This ultra smooth powder hides tiny lines, wrinkles and blemishes and gives a new softness to your skin.', 'hot', 13, '30', 'S,M', 'allowed'),
(366, 'Revlon, Ultra HD Matte, Lip Mousse, 815 Red Hot, 0.2 fl oz (5.9 ml)', '0 (4).jpg', 12, 'While iHerb strives to ensure the accuracy of its product images and information, some manufacturing changes to packaging and/or ingredients may be pending update on our site. Although items may occasionally ship with alternate packaging, freshness is always guaranteed. We recommend that you read labels, warnings and directions of all products before use and not rely solely on the information provided by iHer', 'hot', 13, '31', 'S,M', 'allowed'),
(367, 'E.L.F., Flawless Finish Foundation, Oil Free, Natural, 0.68 fl oz (20 ml)', '19.jpg', 20, 'No Animal Testing\r\nThis oil-free, medium to full coverage foundation achieves a flawless, even, satin-matte base. Flawless Finish Foundation delivers comfortable coverage with lasting wear. The creamy, blendable formula melts into the skin for a flawless looking complexion all day long.', 'hot', 13, '31', 'S,M', 'allowed'),
(368, 'Laura Geller, The Delectables Eye Shadow Palette, Smokey Neutrals, 14 Well Palette', '0 (5).jpg', 10, 'Disclaimer\r\nWhile iHerb strives to ensure the accuracy of its product images and information, some manufacturing changes to packaging and/or ingredients may be pending update on our site. Although items may occasionally ship with alternate packaging, freshness is always guaranteed. We recommend that you read labels, warnings and directions of all products before use and not rely solely on the information provided by iHerb.', 'sale', 13, '31', 'S,M', 'allowed'),
(369, 'Real Techniques by Samantha Chapman, Miracle Complexion Sponge, 1 Sponge', '13 (1).jpg', 3, 'Dab\r\nBounce\r\nBlend \r\nRounded Side for Blending \r\nFlat Edge for Contouring \r\nPointed Tip for Concealing \r\nUse Damp or Dry with Liquid, Cream, or Powder Foundation ', 'sale', 12, '31', 'S', 'allowed'),
(371, ' E.L.F. Tone Adjusting Face Primer, Neutralizing Green, 0.48 oz (13.7 g)', '11.jpg', 6, 'Cyclopentasiloxane, cyclohexasiloxane, dimethicone crosspolymer, dimethicone, dimethicone/vinyl dimethicone crosspolymer, silica, silica dimethyl silylate, phenoxyethanol. May Contain: mica, titanium dioxide (Cl 77891), iron oxides (Cl 77491, Cl 77492, Cl 77499), manganese violet (Cl 77742), red no 40 lake (Cl 16035), blue no 1 lake (Cl 42090), ultramarines (Cl 77007), chromium oxide greens (Cl 77288).', 'new', 12, '31', 'S,M', 'allowed'),
(372, 'Shiseido, VisionAiry Gel Lipstick, 208 Streaming Mauve, .05 oz (1.6 g)', '0 (6).jpg', 12, 'Hydrogenated polyisobutene, water, synthetic wax, polyethylene, isododecane, c9-12 alkane, titanium dioxide (ci 77891), lauroyl lysine, jojoba esters, silica, hdi/trimethylol hexyllactone crosspolymer, mica, red 7 lake (ci 15850), helianthus annuus (sunflower) seed wax, ethylene/propylene/styrene copolymer, peg-12 dimethicone, iron oxides (ci 77491), phenoxyethanol, coco-caprylate/caprate, disteardimonium hectorite, peg-10 dimethicone, glycerin, agar, iron oxides (ci 77499), propylene carbonate, isopropyl titanium triisostearate, blue 1 lake (ci 42090), red 6 (ci 15850), acacia decurrens flower wax, polyglycerin-3, butylene/ethylene/styrene copolymer, simethicone, bht, tocopherol, [+/-(may contain) iron oxides (ci 77492), yellow 5 lake (ci 19140), yellow 6 lake (ci 15985).', 'new', 12, '31', 'S', 'allowed'),
(373, 'W7, Seduced, Provocative Pressed Pigment Palette, 0.39 oz (11.2 g)', '2.jpg', 4, 'While iHerb strives to ensure the accuracy of its product images and information, some manufacturing changes to packaging and/or ingredients may be pending update on our site. Although items may occasionally ship with alternate packaging, freshness is always guaranteed. We recommend that you read labels, warnings and directions of all products before use and not rely solely on the information provided by iHerb.', 'new', 12, '31', 'S', 'allowed'),
(374, 'Heimish, All Clean, White Clay Foam, 150 gHeimish, All Clean, White Clay Foam, 150 g', '1 (1).jpg', 12, 'Water, glycerin, stearic acid, myristic acid, PEG-32, potassium hydroxide, lauric acid, bentonite, potassium cocoate, butylene glycol, cocamidopropyl betaine, potassium cocoyl glycinate, glyceryl Ssearate, PEG-100 stearate , kaolin (1500 mg), citrus aurantium dulcis (orange) peel oil, lavandula angustifolia (lavender) oil  , amyris balsamifera bark oil, pelargonium graveolens flower oil, cocos nucifera (coconut) oil, citrus paradisi (grapefruit) peel oil, litsea cubeba fruit oil, eucalyptus globulus leaf oil, melaleuca alternifolia (tea tree) leaf oil, mentha arvensis leaf oil, boswellia carterii oil, citrus aurantium bergamia (bergamot) fruit oil, juniperus mexicana oil, myristica fragrans (nutmeg) kernel oil, tagetes minuta flower oil, jasminum officinale (jasmine) flower/leaf extract, nelumbo nucifera flower extract, freesia refracta extract, iris versicolor extract, leontopodium alpinum flower/leaf extract, lilium candidum bulb extract, narcissus pseudo – narcissus flower extract, ', 'new', 13, '30', 'S,M,L', 'allowed'),
(375, ' Garden of Life, Dr. Formulated Probiotics, Organic Kids Heimish, All Clean, White ', '0 (7).jpg', 12, 'While iHerb strives to ensure the accuracy of its product images and information, some manufacturing changes to packaging and/or ingredients may be pending update on our site. Although items may occasionally ship with alternate packaging, freshness is always guaranteed. We recommend that you read labels, warnings and directions of all products before use and not rely solely on the information provided by iHerb.', 'new', 13, '30', 'S', 'allowed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodect`
--
ALTER TABLE `prodect`
  ADD PRIMARY KEY (`idprodect`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodect`
--
ALTER TABLE `prodect`
  MODIFY `idprodect` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
