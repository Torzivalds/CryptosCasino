CREATE TABLE `BCH` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `BCN` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `BTC` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `DASH` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `DOGE` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `ETC` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `ETH` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `LTC` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `Messages` (
  `ID` int(11) NOT NULL,
  `Coin` varchar(5) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `AdresseMail` varchar(125) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `Stats` (
  `NbUsers` int(11) NOT NULL COMMENT 'Nombre de visites',
  `Quand` varchar(100) NOT NULL COMMENT 'La date de la dernière visite'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `XMR` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `XRP` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `ZEC` (
  `ID` int(11) NOT NULL,
  `WalletAdress` varchar(255) NOT NULL,
  `IDTransaction` varchar(100) NOT NULL,
  `Resultat` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateJeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `BCH`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `BCN`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `BTC`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `DASH`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `DOGE`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `ETC`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `ETH`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `LTC`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `XMR`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `XRP`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `ZEC`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `BCH`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `BCN`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `BTC`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `DASH`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `DOGE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `ETC`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `ETH`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `LTC`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `Messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `XMR`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `XRP`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `ZEC`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;