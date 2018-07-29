-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2018 at 10:37 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quest_s`
--
CREATE DATABASE IF NOT EXISTS `quest_s` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `quest_s`;

-- --------------------------------------------------------

--
-- Table structure for table `avg`
--

CREATE TABLE IF NOT EXISTS `avg` (
  `id_avg` int(11) NOT NULL AUTO_INCREMENT,
  `genero_avg` varchar(255) DEFAULT NULL,
  `idade_avg` varchar(255) DEFAULT NULL,
  `estado_civil_avg` varchar(255) DEFAULT NULL,
  `escolaridade_avg` varchar(255) DEFAULT NULL,
  `situacao_profissional_avg` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_o_avg` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_o_avg` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_do_avg` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_do_avg` varchar(255) DEFAULT NULL,
  `Motivos_da_visita_avg` varchar(255) DEFAULT NULL,
  `Avaliacao_da_visita_avg` varchar(255) DEFAULT NULL,
  `sugestoes_avg` text,
  PRIMARY KEY (`id_avg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `avg`
--

INSERT INTO `avg` (`id_avg`, `genero_avg`, `idade_avg`, `estado_civil_avg`, `escolaridade_avg`, `situacao_profissional_avg`, `primeira_vez_que_visita_o_avg`, `ultima_vez_que_visitou_o_avg`, `D_q_s_da_existencia_do_avg`, `Como_ficou_a_saber_do_avg`, `Motivos_da_visita_avg`, `Avaliacao_da_visita_avg`, `sugestoes_avg`) VALUES
(1, 'Feminino                                           ', '50 - 54', 'Numa relaÃ§Ã£o aberta', '      BÃ¡sico - 3Âº Ciclo', '  EmpresÃ¡rio/a', 'NÃ£o Sabe / NÃ£o Responde', 'HÃ¡ menos de 6 meses', '      Entre 1 mÃªs a 1 ano', 'Por recomendaÃ§Ã£o de amigos / familiares', '      NÃ£o sabe / NÃ£o responde', 'NÃ£o sabe / NÃ£o responde', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba`
--

CREATE TABLE IF NOT EXISTS `ba` (
  `id_ba` int(11) NOT NULL AUTO_INCREMENT,
  `genero_ba` varchar(255) DEFAULT NULL,
  `idade_ba` varchar(255) DEFAULT NULL,
  `estado_civil_ba` varchar(255) DEFAULT NULL,
  `escolaridade_ba` varchar(255) DEFAULT NULL,
  `situacao_profissional_ba` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_a_BA` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_a_BA` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_da_BA` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_da_BA` varchar(255) DEFAULT NULL,
  `Motivos_da_visita_ba` varchar(255) DEFAULT NULL,
  `Avaliacao_da_visita_ba` varchar(255) DEFAULT NULL,
  `sugestoes_ba` text,
  PRIMARY KEY (`id_ba`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ba`
--

INSERT INTO `ba` (`id_ba`, `genero_ba`, `idade_ba`, `estado_civil_ba`, `escolaridade_ba`, `situacao_profissional_ba`, `primeira_vez_que_visita_a_BA`, `ultima_vez_que_visitou_a_BA`, `D_q_s_da_existencia_da_BA`, `Como_ficou_a_saber_da_BA`, `Motivos_da_visita_ba`, `Avaliacao_da_visita_ba`, `sugestoes_ba`) VALUES
(2, 'Feminino', '18 - 24', 'Solteiro/a', 'Secundário', 'Estagiário/a', 'Sim', 'Menos de 6 meses', 'Hoje', 'Recomendação de amigos / familiares', 'Divertir', 'Muito satisifeito/a', 'Muito boa música!'),
(3, 'Masculino', '25 - 29', 'Solteiro/a', 'Secundário', 'Desempregado/a', 'Não', 'Menos de 6 meses', 'Hoje', 'Através de guia turístico', 'Divertir', 'Satisfeito/a', 'Gostei ');

-- --------------------------------------------------------

--
-- Table structure for table `bcm`
--

CREATE TABLE IF NOT EXISTS `bcm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `idade` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `estado_civil` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `escolaridade` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `situacao_profissional` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `primeira_vez_que_visita_a_BCM` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ultima_vez_que_visitou_a_BCM` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `D_q_s_da_existencia_da_BCM` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Como_ficou_a_saber_da_BCM` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Motivos_da_visita` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Avaliacao_da_visita` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sugestoes` text CHARACTER SET utf8mb4,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bcm`
--

INSERT INTO `bcm` (`id`, `genero`, `idade`, `estado_civil`, `escolaridade`, `situacao_profissional`, `primeira_vez_que_visita_a_BCM`, `ultima_vez_que_visitou_a_BCM`, `D_q_s_da_existencia_da_BCM`, `Como_ficou_a_saber_da_BCM`, `Motivos_da_visita`, `Avaliacao_da_visita`, `sugestoes`) VALUES
(1, '  Masculino ', '  50 - 54', 'Numa relaÃ§Ã£o', '  BÃ¡sico - 2Âº Ciclo ', '  EstagiÃ¡rio ', 'NÃ£o', 'Entre 2 a 5 anos', 'Entre 1 mÃªs a 1 ano', 'Por recomendaÃ§Ã£o de amigos / familiares', 'Alargar horizontes / Conhecer coisas novas', 'Insatisfeito/a', 'TESTE-TESTE-TELMA');

-- --------------------------------------------------------

--
-- Table structure for table `ccm`
--

CREATE TABLE IF NOT EXISTS `ccm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero_ccm` varchar(255) DEFAULT NULL,
  `idade_ccm` varchar(255) DEFAULT NULL,
  `estado_civil_ccm` varchar(255) DEFAULT NULL,
  `escolaridade_ccm` varchar(255) DEFAULT NULL,
  `situacao_profissional_ccm` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_ecultural` varchar(255) DEFAULT NULL,
  `eculturais_visitados` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_eculturais` varchar(255) DEFAULT NULL,
  `como_ficou_a_saber_dos_eculturais` varchar(255) DEFAULT NULL,
  `motivos_da_visita_a_ecultural` varchar(255) DEFAULT NULL,
  `sugestoes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ccm`
--

INSERT INTO `ccm` (`id`, `genero_ccm`, `idade_ccm`, `estado_civil_ccm`, `escolaridade_ccm`, `situacao_profissional_ccm`, `primeira_vez_que_visita_ecultural`, `eculturais_visitados`, `ultima_vez_que_visitou_eculturais`, `como_ficou_a_saber_dos_eculturais`, `motivos_da_visita_a_ecultural`, `sugestoes`) VALUES
(1, 'Feminino', '18-24', 'Solteiro/a', 'Secundário', 'Estagiário', 'Sim', '1-2', 'Menos de 6 meses', 'Recomendação de amigos / familiares', 'Conhecer os Equipamentos Culturais', 'teste'),
(16, '            Masculino', '  50-54 ', '    Numa relaÃ§Ã£o aberta ', 'BÃ¡sico - 3Âº Ciclo', 'Desempregado', '  NÃ£o ', '  Ã‰ a primeira vez que visito um Equipamento Cultural', '  Mais de 5 anos', 'Outro', 'Interesse pelos assuntos abordados', ' testette');

-- --------------------------------------------------------

--
-- Table structure for table `fdfg`
--

CREATE TABLE IF NOT EXISTS `fdfg` (
  `id_fdfg` int(11) NOT NULL AUTO_INCREMENT,
  `genero_fdfg` varchar(255) DEFAULT NULL,
  `idade_fdfg` varchar(255) DEFAULT NULL,
  `estado_civil_fdfg` varchar(255) DEFAULT NULL,
  `escolaridade_fdfg` varchar(255) DEFAULT NULL,
  `situacao_profissional_fdfg` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_o_fdfg` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_o_fdfg` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_do_fdfg` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_do_fdfg` varchar(255) DEFAULT NULL,
  `Motivos_da_visita_fdfg` varchar(255) DEFAULT NULL,
  `Avaliacao_da_visita_fdfg` varchar(255) DEFAULT NULL,
  `sugestoes_fdfg` text,
  PRIMARY KEY (`id_fdfg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mm`
--

CREATE TABLE IF NOT EXISTS `mm` (
  `id_mm` int(11) NOT NULL AUTO_INCREMENT,
  `genero_mm` varchar(255) DEFAULT NULL,
  `idade_mm` varchar(255) DEFAULT NULL,
  `estado_civil_mm` varchar(255) DEFAULT NULL,
  `escolaridade_mm` varchar(255) DEFAULT NULL,
  `situacao_profissional_mm` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_o_mm` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_o_mm` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_do_mm` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_da_mm` varchar(255) DEFAULT NULL,
  `Motivos_da_visita_mm` varchar(255) DEFAULT NULL,
  `Avaliacao_da_visita_mm` varchar(255) DEFAULT NULL,
  `sugestoes_mm` text,
  PRIMARY KEY (`id_mm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mm`
--

INSERT INTO `mm` (`id_mm`, `genero_mm`, `idade_mm`, `estado_civil_mm`, `escolaridade_mm`, `situacao_profissional_mm`, `primeira_vez_que_visita_o_mm`, `ultima_vez_que_visitou_o_mm`, `D_q_s_da_existencia_do_mm`, `Como_ficou_a_saber_da_mm`, `Motivos_da_visita_mm`, `Avaliacao_da_visita_mm`, `sugestoes_mm`) VALUES
(1, '            Feminino      ', '55-59', 'Numa relaÃ§Ã£o', '  SECUNDARIO', 'Estudante', '      nsnr  ', '  nsnr', '  NSNR', '  algo aqui', '  A ', '    MUITO SATISFEITO ', NULL),
(2, '              Masculino       ', '  50-54', '  Numa relaÃ§Ã£o aberta', 'BÃ¡sico - 3Âº Ciclo', '  EstagiÃ¡rio', '    NÃ£o', '  2 a 5 anos', 'Entre 3 a 5 anos', '  NA INTERNET ', '  F ', 'INSATISFEITO', ' teste-teste-telmaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `pcg`
--

CREATE TABLE IF NOT EXISTS `pcg` (
  `id_pcg` int(11) NOT NULL AUTO_INCREMENT,
  `genero_pcg` varchar(255) DEFAULT NULL,
  `idade_pcg` varchar(255) DEFAULT NULL,
  `estado_civil_pcg` varchar(255) DEFAULT NULL,
  `escolaridade_pcg` varchar(255) DEFAULT NULL,
  `situacao_profissional_pcg` varchar(255) DEFAULT NULL,
  `primeira_vez_que_visita_o_pcg` varchar(255) DEFAULT NULL,
  `ultima_vez_que_visitou_o_pcg` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_do_pcg` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_do_pcg` varchar(255) DEFAULT NULL,
  `Motivos_da_visita_pcg` varchar(255) DEFAULT NULL,
  `Avaliacao_da_visita_pcg` varchar(255) DEFAULT NULL,
  `sugestoes_pcg` text,
  PRIMARY KEY (`id_pcg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ra`
--

CREATE TABLE IF NOT EXISTS `ra` (
  `id_ra` int(11) NOT NULL AUTO_INCREMENT,
  `genero_ra` varchar(255) DEFAULT NULL,
  `idade_ra` varchar(255) DEFAULT NULL,
  `estado_civil_ra` varchar(255) DEFAULT NULL,
  `escolaridade_ra` varchar(255) DEFAULT NULL,
  `situacao_profissional_ra` varchar(255) DEFAULT NULL,
  `primeira_vez_que_leu_a_ra` varchar(255) DEFAULT NULL,
  `ultima_vez_que_leu_a_ra` varchar(255) DEFAULT NULL,
  `D_q_s_da_existencia_da_ra` varchar(255) DEFAULT NULL,
  `Como_ficou_a_saber_da_ra` varchar(255) DEFAULT NULL,
  `tempo_assinante` varchar(255) DEFAULT NULL,
  `avaliacao_ra` varchar(255) DEFAULT NULL,
  `sugestoes` text,
  PRIMARY KEY (`id_ra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ra`
--

INSERT INTO `ra` (`id_ra`, `genero_ra`, `idade_ra`, `estado_civil_ra`, `escolaridade_ra`, `situacao_profissional_ra`, `primeira_vez_que_leu_a_ra`, `ultima_vez_que_leu_a_ra`, `D_q_s_da_existencia_da_ra`, `Como_ficou_a_saber_da_ra`, `tempo_assinante`, `avaliacao_ra`, `sugestoes`) VALUES
(1, '    Masculino  ', '  NSNR', '    NSNR ', '  NSNR', '  NSNR', '  nsnr ', '  NSNR', '  nsnr ', '    NSNR ', 'nsnr', '  NSNR', ' teste-teste-teste');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
