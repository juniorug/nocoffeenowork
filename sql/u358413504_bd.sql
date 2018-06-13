
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/12/2015 às 16:30:10
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

#CREATE DATABASE u358413504_bd;
USE u358413504_bd;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u358413504_bd`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE PROCEDURE `change_pedido_qtde`()
BEGIN
	declare sum_qtde int(11);
    declare contador int(11);
    declare pedido_id int(11);
    
    SELECT id into pedido_id FROM pedido WHERE pedido_atual=1 limit 1;
    
    SELECT sum(qtde) into sum_qtde
	FROM pessoa_prod_pedido 
	WHERE id_pedido = pedido_id;
    
    IF sum_qtde > 0 THEN
		UPDATE pedido 
        SET  qtde_caixas = sum_qtde
        WHERE id = pedido_id;
	END IF;
END$$

CREATE PROCEDURE `insert_PPP`(IN id_person INT(10),id_product INT(10), id_purchase INT(10),qtde_prod INT(10))
BEGIN
	declare val double;
    declare contador int(11);
    declare ppp_id int(11);
    
    SELECT valor into val FROM produto WHERE id = id_product;
    
    SELECT count(*), id into contador,ppp_id
    FROM pessoa_prod_pedido
	WHERE id_pedido = id_purchase
	AND id_pessoa = id_person
	AND id_produto = id_product;
    
    IF contador > 0 THEN
		UPDATE pessoa_prod_pedido 
        SET val_total = qtde_prod * val, qtde = qtde_prod
        WHERE id = ppp_id;
	ELSE
		insert into pessoa_prod_pedido (id_pessoa, id_produto, id_pedido, qtde, val_total) values (id_person, id_product, id_purchase, qtde_prod, qtde_prod * val);
     END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_inicial` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_final` timestamp NULL DEFAULT NULL,
  `pedido_atual` bit(1) NOT NULL DEFAULT b'0' COMMENT '0 = false; 1 = true',
  `qtde_caixas` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `data_inicial`, `data_final`, `pedido_atual`, `qtde_caixas`) VALUES
(1, '2015-12-02 18:14:22', NULL, b'1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` bit(1) NOT NULL DEFAULT b'1' COMMENT '0 = inativo; 1 = ativo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `email`, `reg_date`, `ativo`) VALUES
(1, 'Ana Luzia Santos Estrela', 'ana.l.estrela@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(2, 'Andre Araujo Silva', 'andre.a.silva@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(3, 'Andre Kazuo Horota', 'andre.k.horota@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(4, 'Antonio Luis Calazans Neto', 'antonio.l.neto@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(5, 'Ayran Costa da Cruz', 'ayran.c.cruz@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(6, 'Bernardo Decco de Siqueira', 'bernardo.d.siqueira@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(7, 'Cassio Lima Santiago', 'cassio.l.santiago@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(8, 'Daniela Santos Gama', 'daniela.s.gama@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(9, 'Diogo Yukio de Oliveira Camada', 'diogo.o.camada@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(10, 'Edivaldo M. F. De Jesus Junior', 'edivaldo.m.junior@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(11, 'Edson Felix Barbosa', 'edson.f.barbosa@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(12, 'Fabio De Jesus Santos', 'fabio.j.santos@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(13, 'Flavio Luis Silva', 'flavio.l.silva@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(14, 'Iole Souza Lopes', 'iole.s.lopes@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(15, 'Jonathan Costa Muniz', 'jonathan.c.muniz@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(16, 'Leirson Barreto Da Silva', 'leirson.b.silva@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(17, 'Luciene Cardoso dos Santos', 'luciene.c.santos@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(18, 'Lucinio Vitor Brito Cortizo', 'lucinio.v.cortizo@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(19, 'Luisa Bernardes de Almeida Barreto', 'luisa.b.barreto@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(20, 'Marcos Diniz Santos Moreira', 'marcos.d.moreira@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(21, 'Orlando Batista Santos Neto', 'orlando.b.neto@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(22, 'Rafael Dallapicola Brisson', 'rafael.d.brisson@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(23, 'Rodrigo Oliveira Cardozo', 'rodrigo.o.cardozo@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(24, 'Ronald Santos Pires', 'ronald.s.pires@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(25, 'Thercio Barreto de Queiroz', 'Thercio Barreto de Queiroz', '2015-12-02 17:58:43', b'1'),
(26, 'Thiago Luis Santana Melo', 'thiago.l.melo@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1'),
(27, 'Wesley Costa Mascarenhas', 'wesley.c.mascarenhas@ericssoninovacao.com.br', '2015-12-02 17:58:43', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_prod_pedido`
--

CREATE TABLE IF NOT EXISTS `pessoa_prod_pedido` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(10) NOT NULL,
  `id_produto` int(10) NOT NULL,
  `id_pedido` int(10) NOT NULL,
  `qtde` int(10) NOT NULL DEFAULT '0',
  `val_total` double NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` bit(1) DEFAULT b'1' COMMENT '0 = inativo; 1 = ativo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `pessoa_prod_pedido`
--

INSERT INTO `pessoa_prod_pedido` (`id`, `id_pessoa`, `id_produto`, `id_pedido`, `qtde`, `val_total`, `reg_date`, `ativo`) VALUES
(1, 10, 3, 1, 1, 22.2, '2015-12-02 20:15:17', NULL),
(2, 10, 2, 1, 2, 44.4, '2015-12-02 20:05:20', NULL),
(3, 10, 4, 1, 3, 66.6, '2015-12-02 20:09:13', b'1');

--
-- Gatilhos `pessoa_prod_pedido`
--
DROP TRIGGER IF EXISTS `insert_PPP_alter_qtde`;
DELIMITER //
CREATE TRIGGER `insert_PPP_alter_qtde` AFTER INSERT ON `pessoa_prod_pedido`
 FOR EACH ROW BEGIN
CALL change_pedido_qtde();
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_PPP_alter_qtde`;
DELIMITER //
CREATE TRIGGER `update_PPP_alter_qtde` AFTER UPDATE ON `pessoa_prod_pedido`
 FOR EACH ROW BEGIN
CALL change_pedido_qtde();
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` double NOT NULL DEFAULT '22.5',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` bit(1) DEFAULT NULL COMMENT '0 = inativo; 1 = ativo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `img`, `link`, `valor`, `reg_date`, `ativo`) VALUES
(1, 'Café Au Lait', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/cafe-au-lait', 22.2, '2015-12-02 18:04:11', b'1'),
(2, 'Caffè Buongiorno', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/cafe-buongiorno', 22.2, '2015-12-02 18:04:11', b'1'),
(3, 'Cappuccino', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/cappuccino', 22.2, '2015-12-02 18:04:11', b'1'),
(4, 'Caramel Latte Macchiato', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/caramel-latte-macchiato', 22.2, '2015-12-02 18:04:11', b'1'),
(5, 'Chai Tea Latte', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/chai-tea-latte', 22.2, '2015-12-02 18:04:11', b'1'),
(6, 'Chococino', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/chococino', 22.2, '2015-12-02 18:04:11', b'1'),
(7, 'Chococino Caramel', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/chococino-caramel', 22.2, '2015-12-02 18:04:11', b'1'),
(8, 'Cortado', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/espresso-macchiato', 22.2, '2015-12-02 18:04:11', b'1'),
(9, 'Espresso', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/espresso', 22.2, '2015-12-02 18:04:11', b'1'),
(10, 'Espresso Barista', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/espresso-barista', 22.2, '2015-12-02 18:04:11', b'1'),
(11, 'Espresso Descafeinado ', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/espresso-descafeinado', 22.2, '2015-12-02 18:04:11', b'1'),
(12, 'Espresso Intenso', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/espresso-intenso', 22.2, '2015-12-02 18:04:11', b'1'),
(13, 'Latte Macchiato', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/latte-macchiato', 22.2, '2015-12-02 18:04:11', b'1'),
(14, 'Lungo', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/lungo', 22.2, '2015-12-02 18:04:11', b'1'),
(15, 'Marrakesh Style Tea', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/marrakesh-style-tea', 22.2, '2015-12-02 18:04:11', b'1'),
(16, 'Mocha', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/mocha', 22.2, '2015-12-02 18:04:11', b'1'),
(17, 'Nescau', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/nescau', 22.2, '2015-12-02 18:04:11', b'1'),
(18, 'Nestea Limão ', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/nestea-lemon', 22.2, '2015-12-02 18:04:11', b'1'),
(19, 'Nestea Pêssego', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/nestea-peach', 22.2, '2015-12-02 18:04:11', b'1'),
(20, 'Ristretto Ardenza', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/ristretto-ardenza', 22.2, '2015-12-02 18:04:11', b'1'),
(21, 'Vanilla Latte Macchiato', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/vanilla-latte-macchiato', 22.2, '2015-12-02 18:04:11', b'1'),
(22, 'Yunnan Espresso ', 'https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab335', 'https://www.nescafe-dolcegusto.com.br/yunnan-espresso', 26.2, '2015-12-02 18:04:11', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
