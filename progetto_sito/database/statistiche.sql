-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 23, 2024 alle 10:40
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.0.30

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
-- Struttura della tabella `fanta`
--

CREATE TABLE `fanta` (
  `cognome` varchar(191) NOT NULL,
  `posizione` int(191) NOT NULL,
  `gare` int(191) NOT NULL,
  `vittorie` int(191) NOT NULL,
  `podi` int(191) NOT NULL,
  `fastLap` int(191) NOT NULL,
  `mediaGriglia` decimal(65,3) NOT NULL,
  `mediaFinale` decimal(65,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fanta`
--

INSERT INTO `fanta` (`cognome`, `posizione`, `gare`, `vittorie`, `podi`, `fastLap`, `mediaGriglia`, `mediaFinale`) VALUES
('Albon', 13, 21, 0, 0, 0, 11.950, 11.110),
('Alonso', 5, 24, 0, 8, 1, 6.050, 5.600),
('Bottas', 15, 23, 0, 0, 0, 13.000, 13.370),
('Gasly', 11, 24, 0, 1, 0, 11.140, 10.240),
('Hamilton', 3, 23, 0, 6, 5, 6.090, 4.900),
('Hulkenberg', 16, 25, 0, 0, 0, 9.680, 14.290),
('Leclerc', 4, 21, 0, 8, 2, 4.430, 4.065),
('Magnussen', 19, 22, 0, 0, 0, 12.550, 14.890),
('Norris', 6, 25, 0, 8, 2, 7.950, 7.430),
('Ocon', 12, 20, 0, 1, 0, 10.410, 9.310),
('Perez', 2, 24, 2, 10, 2, 5.725, 3.625),
('Piastri', 9, 23, 0, 2, 2, 7.820, 7.810),
('Ricciardo', 18, 10, 0, 0, 0, 13.710, 12.710),
('Russell', 8, 23, 0, 2, 2, 6.450, 6.630),
('Sainz', 7, 23, 2, 4, 0, 4.550, 4.315),
('Sargeant', 20, 20, 0, 0, 0, 15.910, 15.000),
('Stroll', 10, 20, 0, 0, 0, 10.090, 9.330),
('Tsunoda', 14, 24, 0, 0, 2, 13.820, 12.550),
('Verstappen', 1, 25, 21, 2, 13, 2.095, 1.135),
('Zhou', 17, 22, 0, 0, 1, 14.770, 13.420);

-- --------------------------------------------------------

--
-- Struttura della tabella `prezzi`
--

CREATE TABLE `prezzi` (
  `tipo` varchar(191) NOT NULL,
  `nome` varchar(191) NOT NULL,
  `prezzo` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prezzi`
--

INSERT INTO `prezzi` (`tipo`, `nome`, `prezzo`) VALUES
('Pilota', 'Albon', 3200),
('Pilota', 'Alonso', 5800),
('Scuderia', 'Alpha Tauri', 2100),
('Scuderia', 'Alpine', 3300),
('Scuderia', 'Aston Martin', 5100),
('Pilota', 'Bottas', 3200),
('Scuderia', 'Ferrari', 5700),
('Pilota', 'Gasly', 3200),
('Scuderia', 'Haas', 2200),
('Pilota', 'Hamilton', 5900),
('Pilota', 'Hulkenberg', 2200),
('Pilota', 'Leclerc', 6000),
('Pilota', 'Magnussen', 2100),
('Scuderia', 'McLaren', 5100),
('Scuderia', 'Mercedes', 5200),
('Pilota', 'Norris', 5700),
('Pilota', 'Ocon', 3200),
('Pilota', 'Perez', 6100),
('Pilota', 'Piastri', 4400),
('Scuderia', 'RedBull', 6900),
('Pilota', 'Ricciardo', 2100),
('Pilota', 'Russell', 4500),
('Pilota', 'Sainz', 5900),
('Pilota', 'Sargeant', 2200),
('Scuderia', 'Sauber', 2700),
('Pilota', 'Stroll', 4300),
('Pilota', 'Tsunoda', 3200),
('Pilota', 'Verstappen', 8100),
('Scuderia', 'Williams', 2700),
('Pilota', 'Zhou', 2100);

-- --------------------------------------------------------

--
-- Struttura della tabella `scuderie`
--

CREATE TABLE `scuderie` (
  `nome` varchar(191) NOT NULL,
  `position` int(191) NOT NULL,
  `prezzoP1` int(191) NOT NULL,
  `prezzoP2` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `scuderie`
--

INSERT INTO `scuderie` (`nome`, `position`, `prezzoP1`, `prezzoP2`) VALUES
('Alpha Tauri', 8, 2100, 2100),
('Alpine', 6, 3200, 3300),
('Aston Martin', 5, 5800, 4300),
('Ferrari', 3, 5800, 5600),
('Haas', 10, 2100, 2200),
('McLaren', 4, 5700, 4400),
('Mercedes', 2, 5900, 4500),
('RedBull', 1, 7800, 5900),
('Sauber', 9, 2200, 3200),
('Williams', 7, 3200, 2100);

-- --------------------------------------------------------

--
-- Struttura della tabella `squadra`
--

CREATE TABLE `squadra` (
  `utente` varchar(191) NOT NULL,
  `scuderia` varchar(191) NOT NULL,
  `pilota1` varchar(191) NOT NULL,
  `pilota2` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `squadra`
--

INSERT INTO `squadra` (`utente`, `scuderia`, `pilota1`, `pilota2`) VALUES
('AdviceLOL', 'RedBull', 'Charles Leclerc', 'Daniel Ricciardo');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `email`, `password`) VALUES
('AdviceLOL', 'dariodisanto19@gmail.com', 'Stocazzo5');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `fanta`
--
ALTER TABLE `fanta`
  ADD PRIMARY KEY (`cognome`);

--
-- Indici per le tabelle `prezzi`
--
ALTER TABLE `prezzi`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `scuderie`
--
ALTER TABLE `scuderie`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `squadra`
--
ALTER TABLE `squadra`
  ADD PRIMARY KEY (`utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
