-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:29 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weather`
--

-- --------------------------------------------------------

--
-- Table structure for table `weathers`
--

CREATE TABLE `weathers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Outfalls` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kmls` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profiles` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `circular` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxrougs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mnrougs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxenlefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mienlefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxeloefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mneloefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxaglefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miaglefs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxleths` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mileths` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totallgth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxslope` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mislope` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dryweaflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wetweaflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groundweaflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdiiflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exnalflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exnaloutflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floodloss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaloss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exfiltionloss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lnitialvols` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalvols` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conerrors` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeflows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dryweaflows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groundflows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdiiflows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grounwter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_aquifers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_snows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_rdiigraphs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_jundes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_outdes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_fldides` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_storaundes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_conlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_pumplinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_oriflinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_weirlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_outlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_transect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_polluts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complexity_landus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalcomity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_subments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_aquifers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_snows` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_rdiigraphs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_jundes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_outdes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_fldides` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_storaundes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_conlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_pumplinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_oriflinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_weirlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_outlinks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_treunits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_transect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_conruls` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_polluts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_landus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divsionves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pumpves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratingves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shapeves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strogves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tidalves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weirves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeseries` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timepatns` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxgroudev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mngroudev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxvertev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mnvertev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxdepth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midepth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flowunits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inftionmet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flowtingmet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkoffsetsned` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowding` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skipflowds` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inertialing` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defineflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forcetion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variable` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adjustment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conduit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startingdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endingdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antecedent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporttime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wettime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drytime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routingtime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimumtime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avgtime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimumcons` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgnoreofs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgnoremelt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgnoreter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgnoreing` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgnorety` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reportavgs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxpipeter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mnpipditer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalpipeth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalotherth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalpipth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxmg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcfs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcoeffnt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mxnode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surcharged` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nodesurched` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcrown` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minbelow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flooded` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flooding` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floodmg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pondedvolume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxvolume` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxperfull` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxfrecy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxoutfallmg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxpeak` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxlinkty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minpeakty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conduits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxconduits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lidstroage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snowcover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `runonin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evalossin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infitionloss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surfacein` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snowved` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalsnow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conerror` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxwidth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minwidth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxarea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minarea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalarea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `results_maxflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minflow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxslope` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minslope` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_maximpness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_minimpness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximpness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimpness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_maxperv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_minperv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxperv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minperv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gages` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aquifers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snowpacks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitgraphs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transects` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diverves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_pumpves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_ratingves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_shapeves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storageves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_tidalves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_weirves` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unused_timeseries` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timepatts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ3_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invertevsJ3_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ3_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rimJ3_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ3_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalmgJ3_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_generate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weathers`
--

INSERT INTO `weathers` (`id`, `created_at`, `updated_at`, `Outfalls`, `kmls`, `profiles`, `circular`, `mxrougs`, `mnrougs`, `mxenlefs`, `mienlefs`, `mxeloefs`, `mneloefs`, `mxaglefs`, `miaglefs`, `mxleths`, `mileths`, `totallgth`, `mxslope`, `mislope`, `dryweaflow`, `wetweaflow`, `groundweaflow`, `rdiiflow`, `exnalflow`, `exnaloutflow`, `floodloss`, `evaloss`, `exfiltionloss`, `lnitialvols`, `finalvols`, `conerrors`, `timeflows`, `dryweaflows`, `groundflows`, `rdiiflows`, `subments`, `grounwter`, `complexity_aquifers`, `complexity_snows`, `complexity_rdiigraphs`, `complexity_jundes`, `complexity_outdes`, `complexity_fldides`, `complexity_storaundes`, `complexity_conlinks`, `complexity_pumplinks`, `complexity_oriflinks`, `complexity_weirlinks`, `complexity_outlinks`, `complexity_transect`, `complexity_polluts`, `complexity_landus`, `totalcomity`, `raings`, `inventory_subments`, `inventory_aquifers`, `inventory_snows`, `inventory_rdiigraphs`, `inventory_jundes`, `inventory_outdes`, `inventory_fldides`, `inventory_storaundes`, `inventory_conlinks`, `inventory_pumplinks`, `inventory_oriflinks`, `inventory_weirlinks`, `inventory_outlinks`, `inventory_treunits`, `inventory_transect`, `inventory_conruls`, `inventory_polluts`, `inventory_landus`, `conves`, `divsionves`, `pumpves`, `ratingves`, `shapeves`, `strogves`, `tidalves`, `weirves`, `timeseries`, `timepatns`, `mxgroudev`, `mngroudev`, `mxvertev`, `mnvertev`, `mxdepth`, `midepth`, `flowunits`, `inftionmet`, `flowtingmet`, `linkoffsetsned`, `allowding`, `skipflowds`, `inertialing`, `defineflow`, `forcetion`, `variable`, `adjustment`, `conduit`, `surface`, `startingdate`, `endingdate`, `duration`, `antecedent`, `rain`, `reporttime`, `wettime`, `drytime`, `routingtime`, `minimumtime`, `avgtime`, `minimumcons`, `lgnoreofs`, `lgnoremelt`, `lgnoreter`, `lgnoreing`, `lgnorety`, `reportavgs`, `mxpipeter`, `mnpipditer`, `totalpipeth`, `totalotherth`, `totalpipth`, `maxmg`, `maxcfs`, `maxcoeffnt`, `maxin`, `minin`, `mxnode`, `surcharged`, `nodesurched`, `maxcrown`, `minbelow`, `flooded`, `flooding`, `floodmg`, `pondedvolume`, `maxvolume`, `maxperfull`, `maxfrecy`, `maxflow`, `maxoutfallmg`, `totalmg`, `maxpeak`, `maxlinkty`, `minpeakty`, `conduits`, `maxconduits`, `maxcapacity`, `lidstroage`, `snowcover`, `totalin`, `runonin`, `evalossin`, `infitionloss`, `surfacein`, `drainage`, `snowved`, `finalsnow`, `finalin`, `conerror`, `maxwidth`, `minwidth`, `maxarea`, `minarea`, `totalarea`, `results_maxflow`, `minflow`, `maxslope`, `minslope`, `subcat_maximpness`, `subcat_minimpness`, `maximpness`, `minimpness`, `subcat_maxperv`, `subcat_minperv`, `maximp`, `minimp`, `maxperv`, `minperv`, `gages`, `aquifers`, `snowpacks`, `unitgraphs`, `transects`, `curves`, `diverves`, `unused_pumpves`, `unused_ratingves`, `unused_shapeves`, `storageves`, `unused_tidalves`, `unused_weirves`, `unused_timeseries`, `timepatts`, `invertevsJ1`, `invertevsJ2`, `invertevsJ3`, `invertevsJ4`, `invertevsJ3_1`, `invertevsJ3_2`, `rimJ1`, `rimJ2`, `rimJ3`, `rimJ4`, `rimJ3_1`, `rimJ3_2`, `totalmgJ1`, `totalmgJ2`, `totalmgJ3`, `totalmgJ4`, `totalmgJ3_1`, `totalmgJ3_2`, `report_generate`) VALUES
(1, '2020-03-04 22:54:37', '2020-03-04 23:23:51', 'uploads/biyZoTjxLQeibY6vYcHC1jsVvfZotqeNhWTj3LFn.png', 'uploads/bRAl7WeFTAWEqB8WKAEaOYFNLSvSsmBYgUod4JOW.zip', 'uploads/JeTQX2J8i8hSQouGAK4VAA5Ej5zYSe954GWbJQtv.png', '783.79', '0.013', '0.013', '0', '0', '0', '0', '0', '0', '174.918', '64.477', '783.79', '0.0279', '0.0015', '0', '6.4', '0', '0', '0', '3.009', '3.391', '0', '0', '0', '0', '0', '0', '0', '0', '0', '66', '0', 'n/a', 'n/a', 'n/a', '12', '1', 'n/a', 'n/a', '24', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '2', '20', '125', '1', '4', '0', '0', '0', '6', '1', '0', '0', '6', '0', '0', '0', '0', '0', '0', '0', '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '19.5', '12.4', '10.2', '6.2', '11', '2.4', 'CFS', 'Horton', 'Dynamic Wave', 'Depth', 'No', 'No', 'Partial', 'Both', 'H-W', 'On', '75', '0', '0', 'Aug-29-2017 07:00:00 PM', 'Aug-31-2017 07:00:00 PM', '48', '0', '6:00', '0:15:00', '0:05:00', '0:05:00', '5', '2.24', '4.67', '0', 'No', 'No', 'No', 'No', 'No', 'No', '1', '0.2', '64.477', '719.313', '783.79', '2.81', '8.02', '0.848', '26.1', '26.1', '11', '6', '31.8', '10.8', '0', '3', '26.38', '1.348', '0', 'n/a', 'n/a', '95.24', '5:31', '0:12:58', '0:12:58', '5:31:12', '10.48', '0.9', '6', '32.52', '31.54', 'n/a', 'n/a', '26.1', 'n/a', '0', '6.381', '19.68', 'n/a', 'n/a', 'n/a', '0.046', '-0.029', '265.105', '96.06', '5.3021', '1.9212', '11.9753', '871.2', '871.2', '0.65', '0.65', '85', '60', '0.014', '0.014', '0.5', '0.5', '0.05', '0.05', '0:00', '0:00:00', '0', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', 'n/a', '8.5', '10', '10.2', '8', '8.4', '8.2', '19.5', '12.4', '13.6', '13', '12.9', '12.9', '0.937', '1.106', '1.348', '0', '0', '0', 'test.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weathers`
--
ALTER TABLE `weathers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weathers`
--
ALTER TABLE `weathers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
