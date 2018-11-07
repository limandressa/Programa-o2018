-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2018 às 12:39
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `descricao`) VALUES
(1, 'Animais', 'Vida animal'),
(2, 'Pessoas', 'Sociologia e estudo comportamental'),
(3, 'Carros', 'Automobilistico'),
(4, 'Tecnologia', 'Computador e parecidos'),
(5, 'Televisao', 'Televisao e seus programas'),
(6, 'Gatos', 'Gatos fazendo coisas'),
(7, 'Cachorros', 'Cachorros fazendo coisas'),
(8, 'Escola', 'Estudantes e afins'),
(9, 'Familia', 'Estresse'),
(10, 'Internet', 'Tlkjahskajhds'),
(11, 'Coisas', 'sadsa'),
(12, 'Mais', 'sakjdha'),
(13, 'Celulares', 'dsalkfa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `autor` varchar(75) NOT NULL,
  `dt_criacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `titulo`, `texto`, `id_categoria`, `autor`, `dt_criacao`) VALUES
(4, 'Titulo', 'Lorem ipsum dolor sit amet, euismod definitionem ut cum, te mutat iudicabit argumentum pro, ut per expetenda vulputate. Solet conclusionemque sea an, quo ut labitur eripuit tacimates. In sed consulatu definiebas, an usu melius nominati mediocritatem. Ad fugit soleat graeci vix, doctus voluptaria in eos, rebum mentitum eu vim. Pro id diceret delenit. Ea mei dicta volumus constituam.\r\n\r\nIn duo adhuc simul vitae, commodo cotidieque pri ea. Vitae hendrerit id mel. Sed albucius mentitum ei, minim audire eu per. Has commodo adipisci mandamus ut, mel ex euismod accusata. His no regione commune dissentiunt, ex dicat omittam pro.\r\n\r\nCu vix wisi nonumy ocurreret. His tale offendit constituam id, mei maiorum dissentias conclusionemque ei. Vis noluisse petentium hendrerit ex, scaevola accusata percipitur nec at. Ius aliquid veritus in, per tantas maiorum petentium ea, an elit quaerendum his. Facilisi vulputate an sit.\r\n\r\nIus ut cibo sale facete, an gubergren abhorreant qui, has ei elitr evertitur. Ei duo posse apeirian, phaedrum voluptaria an sit, iisque persecuti ius id. An adhuc laboramus persequeris mea, et paulo noster delicata ius, mea ex nemore inimicus sententiae. Vim viris ludus luptatum ut, in eius accusata lobortis sit, utinam interesset id vim. Ex dolor prompta mei.\r\n\r\nEu his modo moderatius, ut mei reque porro saepe. Pro at nonumy gubergren pertinacia, unum cibo eum cu, etiam partem at sed. Tale altera eu per, deserunt philosophia pro ei. Nam illum dictas suscipiantur no. Sint scripserit his in, pri timeam complectitur no. Ea natum legendos conclusionemque vim, nam ut paulo apeirian.', 1, 'Andressa', '2018-11-07'),
(5, 'Titulo 2', 'Lorem ipsum dolor sit amet, euismod definitionem ut cum, te mutat iudicabit argumentum pro, ut per expetenda vulputate. Solet conclusionemque sea an, quo ut labitur eripuit tacimates. In sed consulatu definiebas, an usu melius nominati mediocritatem. Ad fugit soleat graeci vix, doctus voluptaria in eos, rebum mentitum eu vim. Pro id diceret delenit. Ea mei dicta volumus constituam.\r\n\r\nIn duo adhuc simul vitae, commodo cotidieque pri ea. Vitae hendrerit id mel. Sed albucius mentitum ei, minim audire eu per. Has commodo adipisci mandamus ut, mel ex euismod accusata. His no regione commune dissentiunt, ex dicat omittam pro.\r\n\r\nCu vix wisi nonumy ocurreret. His tale offendit constituam id, mei maiorum dissentias conclusionemque ei. Vis noluisse petentium hendrerit ex, scaevola accusata percipitur nec at. Ius aliquid veritus in, per tantas maiorum petentium ea, an elit quaerendum his. Facilisi vulputate an sit.\r\n\r\nIus ut cibo sale facete, an gubergren abhorreant qui, has ei elitr evertitur. Ei duo posse apeirian, phaedrum voluptaria an sit, iisque persecuti ius id. An adhuc laboramus persequeris mea, et paulo noster delicata ius, mea ex nemore inimicus sententiae. Vim viris ludus luptatum ut, in eius accusata lobortis sit, utinam interesset id vim. Ex dolor prompta mei.\r\n\r\nEu his modo moderatius, ut mei reque porro saepe. Pro at nonumy gubergren pertinacia, unum cibo eum cu, etiam partem at sed. Tale altera eu per, deserunt philosophia pro ei. Nam illum dictas suscipiantur no. Sint scripserit his in, pri timeam complectitur no. Ea natum legendos conclusionemque vim, nam ut paulo apeirian.', 1, 'Andressa', '2018-11-09'),
(6, 'Titulo 3', 'Lorem ipsum dolor sit amet, euismod definitionem ut cum, te mutat iudicabit argumentum pro, ut per expetenda vulputate. Solet conclusionemque sea an, quo ut labitur eripuit tacimates. In sed consulatu definiebas, an usu melius nominati mediocritatem. Ad fugit soleat graeci vix, doctus voluptaria in eos, rebum mentitum eu vim. Pro id diceret delenit. Ea mei dicta volumus constituam.\r\n\r\nIn duo adhuc simul vitae, commodo cotidieque pri ea. Vitae hendrerit id mel. Sed albucius mentitum ei, minim audire eu per. Has commodo adipisci mandamus ut, mel ex euismod accusata. His no regione commune dissentiunt, ex dicat omittam pro.\r\n\r\nCu vix wisi nonumy ocurreret. His tale offendit constituam id, mei maiorum dissentias conclusionemque ei. Vis noluisse petentium hendrerit ex, scaevola accusata percipitur nec at. Ius aliquid veritus in, per tantas maiorum petentium ea, an elit quaerendum his. Facilisi vulputate an sit.\r\n\r\nIus ut cibo sale facete, an gubergren abhorreant qui, has ei elitr evertitur. Ei duo posse apeirian, phaedrum voluptaria an sit, iisque persecuti ius id. An adhuc laboramus persequeris mea, et paulo noster delicata ius, mea ex nemore inimicus sententiae. Vim viris ludus luptatum ut, in eius accusata lobortis sit, utinam interesset id vim. Ex dolor prompta mei.\r\n\r\nEu his modo moderatius, ut mei reque porro saepe. Pro at nonumy gubergren pertinacia, unum cibo eum cu, etiam partem at sed. Tale altera eu per, deserunt philosophia pro ei. Nam illum dictas suscipiantur no. Sint scripserit his in, pri timeam complectitur no. Ea natum legendos conclusionemque vim, nam ut paulo apeirian.', 1, 'Andressa', '2018-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ind_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
