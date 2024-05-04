-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 28, 2024 alle 18:40
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
-- Struttura della tabella `amici`
--

CREATE TABLE `amici` (
  `utente` varchar(191) NOT NULL,
  `punteggioTotale` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `amici`
--

INSERT INTO `amici` (`utente`, `punteggioTotale`) VALUES
('AdviceLOL', 45),
('Francesco', 35),
('Il Papa', 106),
('Taylor Swift', 10),
('Tommaso', 23);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `amici`
--
ALTER TABLE `amici`
  ADD PRIMARY KEY (`utente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
