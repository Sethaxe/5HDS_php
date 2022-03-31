-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2022 at 10:46 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `api_5HDS_gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `token` varchar(256) NOT NULL,
  `price` int(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `reference` varchar(256) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `token`, `price`, `stock`, `reference`, `created_at`, `update_at`, `modified`) VALUES
(2, 'THE BOTTLE OF COCA', 'this is the bottle of coca that everyone want ! ', '3dQGgufAhCsp276a6Nh2', 11, 1, '#12COCA42', '2022-03-31 12:13:32', '2022-03-31 12:18:28', '2022-03-31 10:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `roleUsers` varchar(256) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `token`, `roleUsers`, `created_at`, `update_at`) VALUES
(3, 'lalalalala', 'land', 'dazhdziaudazbduazb', 'danceur', '2022-03-31 11:17:18', '2022-03-31 12:31:09'),
(5, 'Besnard', 'adrien', 'GFtfYIjXRqkdAmssaEhU', 'developpeur', '2022-03-31 11:56:58', '2022-03-31 11:56:58'),
(4, 'Besnard', 'adrien', 'OkEvnqrL6FoJYVdj5w7I', 'developpeur', '2022-03-31 11:22:40', '2022-03-31 11:22:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;