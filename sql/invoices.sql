-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 10, 2020 alle 17:30
-- Versione del server: 10.1.36-MariaDB
-- Versione PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoices`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`, `invoice_date`, `client_id`) VALUES
(1, 1, '2020-03-10', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `invoice_rows`
--

CREATE TABLE `invoice_rows` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `value` decimal(12,2) NOT NULL,
  `vat` decimal(12,2) DEFAULT NULL,
  `total_value` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `invoice_rows`
--

INSERT INTO `invoice_rows` (`id`, `invoice_id`, `description`, `quantity`, `value`, `vat`, `total_value`) VALUES
(1, 1, 'Fattura di prova', 1, '12.50', '0.00', '12.50');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `invoice_rows`
--
ALTER TABLE `invoice_rows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `invoice_rows`
--
ALTER TABLE `invoice_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
