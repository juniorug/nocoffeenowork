
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/06/2018 às 21:31:11
-- Versão do Servidor: 10.1.24-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u765057031_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `ativo` bit(1) DEFAULT NULL COMMENT '0 = inativo; 1 = ativo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `img`, `link`, `valor`, `reg_date`, `ativo`) VALUES
(1, 'Café Au Lait', 'xi-cafe-au-lait-nescafe-dolce-gusto-box.jpg\n', 'https://www.nescafe-dolcegusto.com.br/cafe-au-lait', 22.2, '2018-06-13 21:22:37', b'1'),
(2, 'Caffè Buongiorno', 'cafe-buongiorno-xq-43501009-3d-pack_recorte.jpg', 'https://www.nescafe-dolcegusto.com.br/cafe-buongiorno', 22.2, '2018-06-13 21:22:56', b'1'),
(3, 'Cappuccino', 'xi-cappuccino-nescafe-dolce-gusto-box_1.jpg', 'https://www.nescafe-dolcegusto.com.br/cappuccino', 22.2, '2018-06-13 21:23:22', b'1'),
(4, 'Caramel Macchiato', 'xi-caramel-latte-macchiato-nescafe-dolce-gusto-box_2.jpg\n\n', 'https://www.nescafe-dolcegusto.com.br/caramel-latte-macchiato', 22.2, '2018-06-13 21:30:27', b'1'),
(5, 'Chai Tea Latte', 'xi-chai-tea-latte-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/chai-tea-latte', 22.2, '2018-06-13 21:24:12', b'1'),
(6, 'Chococino', 'xi-chococino-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/chococino', 22.2, '2018-06-13 21:24:25', b'1'),
(7, 'Chococino Caramel', 'xi-choco-caramel-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/chococino-caramel', 22.2, '2018-06-13 21:24:38', b'1'),
(8, 'Cortado', 'xi-cortado-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/espresso-macchiato', 22.2, '2018-06-13 21:24:47', b'1'),
(9, 'Espresso', 'xi-espresso-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/espresso', 22.2, '2018-06-13 21:25:02', b'1'),
(10, 'Espresso Barista', 'xi-espresso-barista-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/espresso-barista', 22.2, '2018-06-13 21:25:11', b'1'),
(11, 'Espresso Descafeinado ', 'xi-espresso-decaf-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/espresso-descafeinado', 22.2, '2018-06-13 21:25:22', b'1'),
(12, 'Espresso Intenso', 'xi-espresso-intenso-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/espresso-intenso', 22.2, '2018-06-13 21:25:33', b'1'),
(13, 'Latte Macchiato', 'xi-latte-macchiato-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/latte-macchiato', 22.2, '2018-06-13 21:25:43', b'1'),
(14, 'Lungo', 'xi-lungo-nescafe-dolce-gusto-box_2.jpg', 'https://www.nescafe-dolcegusto.com.br/lungo', 22.2, '2018-06-13 21:26:02', b'1'),
(15, 'Marrakesh Style Tea', 'xi-marrakech-tea-nescafe-dolce-gusto-box_1.jpg', 'https://www.nescafe-dolcegusto.com.br/marrakesh-style-tea', 22.2, '2018-06-13 21:26:12', b'1'),
(16, 'Mocha', 'xi-mocha-nescafe-dolce-gusto-box_2.jpg', 'https://www.nescafe-dolcegusto.com.br/mocha', 22.2, '2018-06-13 21:26:22', b'1'),
(17, 'Nescau', 'xi-nestea-lemon-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/nescau', 22.2, '2018-06-13 21:26:32', b'1'),
(18, 'Nestea Limão ', 'xi-nestea-lemon-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/nestea-lemon', 22.2, '2018-06-13 21:26:42', b'1'),
(19, 'Nestea Pêssego', 'xi-nestea-peach-nescafe-dolce-gusto-box.jpg', 'https://www.nescafe-dolcegusto.com.br/nestea-peach', 22.2, '2018-06-13 21:26:50', b'1'),
(20, 'Ristretto Ardenza', 'ardenza_p.jpg', 'https://www.nescafe-dolcegusto.com.br/ristretto-ardenza', 22.2, '2018-06-13 21:27:13', b'1'),
(21, 'Vanilla Latte Macchiato', 'xi-vanilla-latte-macchiato-nescafe-dolce-gusto-box_1.jpg', 'https://www.nescafe-dolcegusto.com.br/vanilla-latte-macchiato', 22.2, '2018-06-13 21:27:23', b'1'),
(22, 'Yunnan Espresso ', 'ndg-yunann1.jpg', 'https://www.nescafe-dolcegusto.com.br/yunnan-espresso', 26.2, '2018-06-13 21:27:34', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
