

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meu_blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--
CREATE DATABASE blog;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

insert into categoria (nome, descricao) values ('Animais', 'As caracteristicas dos diversos animais'), ('Esportes', 'Mundo esportivo'), ('Televisao', 'Os programas da televisao')
INSERT INTO `post` (`id`, `titulo`, `texto`, `id_categoria`, `autor`, `dt_criacao`) VALUES (NULL, 'Os gatos', 'Lorem ipsum dolor sit amet, euismod definitionem ut cum, te mutat iudicabit argumentum pro, ut per expetenda vulputate. Solet conclusionemque sea an, quo ut labitur eripuit tacimates. In sed consulatu definiebas, an usu melius nominati mediocritatem. Ad fugit soleat graeci vix, doctus voluptaria in eos, rebum mentitum eu vim. Pro id diceret delenit. Ea mei dicta volumus constituam.

In duo adhuc simul vitae, commodo cotidieque pri ea. Vitae hendrerit id mel. Sed albucius mentitum ei, minim audire eu per. Has commodo adipisci mandamus ut, mel ex euismod accusata. His no regione commune dissentiunt, ex dicat omittam pro.

Cu vix wisi nonumy ocurreret. His tale offendit constituam id, mei maiorum dissentias conclusionemque ei. Vis noluisse petentium hendrerit ex, scaevola accusata percipitur nec at. Ius aliquid veritus in, per tantas maiorum petentium ea, an elit quaerendum his. Facilisi vulputate an sit.

Ius ut cibo sale facete, an gubergren abhorreant qui, has ei elitr evertitur. Ei duo posse apeirian, phaedrum voluptaria an sit, iisque persecuti ius id. An adhuc laboramus persequeris mea, et paulo noster delicata ius, mea ex nemore inimicus sententiae. Vim viris ludus luptatum ut, in eius accusata lobortis sit, utinam interesset id vim. Ex dolor prompta mei.

Eu his modo moderatius, ut mei reque porro saepe. Pro at nonumy gubergren pertinacia, unum cibo eum cu, etiam partem at sed. Tale altera eu per, deserunt philosophia pro ei. Nam illum dictas suscipiantur no. Sint scripserit his in, pri timeam complectitur no. Ea natum legendos conclusionemque vim, nam ut paulo apeirian.', 1, 'Jose', '2018-10-04'),
(NULL, 'O futebol', 'O futebol e um esporte de campo', 2, 'Jose', '2018-10-04'), (NULL, 'Os jornais', 'Os jornais fazem noticias', 3, 'Jose', '2018-10-04');
