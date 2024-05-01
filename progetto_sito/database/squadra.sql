-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 28, 2024 alle 18:41
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistiche`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `squadra`
--

CREATE TABLE `squadra` (
  `utente` varchar(191) NOT NULL,
  `scuderia` varchar(191) NOT NULL,
  `pilota1` varchar(191) NOT NULL,
  `pilota2` varchar(191) NOT NULL,
  `punteggioTotale` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `squadra`
--

INSERT INTO `squadra` (`utente`, `scuderia`, `pilota1`, `pilota2`, `punteggioTotale`) VALUES
('AdviceLOL', 'McLaren', 'Sergio Perez', 'Pierre Gasly', 45),
('Francesco', 'Ferrari', 'Charles Leclerc', 'Alexander Albon', 35),
('Il Papa', 'RedBull', 'Fernando Alonso', 'Max Verstappen', 106),
('Taylor Swift', 'Mercedes', 'Lewis Hamilton', 'Sergio Perez', 10),
('Tommaso', 'RedBull', 'Lando Norris', 'Daniel Ricciardo', 23);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `squadra`
--
ALTER TABLE `squadra`
  ADD PRIMARY KEY (`utente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
