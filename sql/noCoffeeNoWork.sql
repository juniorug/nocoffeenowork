
###### DDL ###########
#CREATE DATABASE nocoffeenowork;

CREATE TABLE pessoa (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
email VARCHAR(60),
reg_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
ativo bit(1) COMMENT '0 = inativo; 1 = ativo' 
);

CREATE TABLE produto (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
descricao VARCHAR(50) NOT NULL,
img VARCHAR(100),
link VARCHAR(100),
valor DOUBLE,
reg_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
ativo bit(1) COMMENT '0 = inativo; 1 = ativo' 
);

CREATE TABLE pedido (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
data_inicial TIMESTAMP,
data_final TIMESTAMP,
pedido_atual bit(1) COMMENT '0 = false; 1 = true',
qtde_caixas INT(6)
);


CREATE TABLE pessoa_prod_pedido (
id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_pessoa INT(10) NOT NULL,
id_produto INT(10) NOT NULL,
id_pedido INT(10) NOT NULL,
qtde INT(10) NOT NULL,
val_total DOUBLE,
reg_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
ativo bit(1) COMMENT '0 = inativo; 1 = ativo' 
);

## procedure que atualiza val total
DELIMITER //
CREATE PROCEDURE insert_PPP (IN id_person INT(10),id_product INT(10), id_purchase INT(10),qtde_prod INT(10))
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
END //
DELIMITER ;

###### DML ###########
INSERT into pessoa (nome,email,ativo) VALUES
('Ayran Costa da Cruz','ayran.c.cruz@ericssoninovacao.com.br',0),
('Bernardo Decco de Siqueira','bernardo.d.siqueira@ericssoninovacao.com.br',1),
('Cassio Lima Santiago','cassio.l.santiago@ericssoninovacao.com.br',1),
('Daniela Santos Gama','daniela.s.gama@ericssoninovacao.com.br',0),
('Diogo Yukio de Oliveira Camada','diogo.o.camada@ericssoninovacao.com.br',0),
('Edivaldo M. F. De Jesus Junior','edivaldo.m.junior@ericssoninovacao.com.br',1),
('Edson Felix Barbosa','edson.f.barbosa@ericssoninovacao.com.br',0),
('Fabio De Jesus Santos','fabio.j.santos@ericssoninovacao.com.br',1),
('Flavio Luis Silva','flavio.l.silva@ericssoninovacao.com.br',0),
('Jonathan Costa Muniz','jonathan.c.muniz@ericssoninovacao.com.br',0),
('Luciene Cardoso dos SantdefaultDataPlaceholderos','luciene.c.santos@ericssoninovacao.com.br',0),
('Lucinio Vitor Brito Cortizo','lucinio.v.cortizo@ericssoninovacao.com.br',0),
('Marcos Diniz Santos Moreira','marcos.d.moreira@ericssoninovacao.com.br',1),
('Rafael Dallapicola Brisson','rafael.d.brisson@ericssoninovacao.com.br',0),
('Ronald Santos Pires','ronald.s.pires@ericssoninovacao.com.br',0),
('Wesley Costa Mascarenhas','wesley.c.mascarenhas@ericssoninovacao.com.br',0),
('Andre Luis Castro Nascimento','andre.c.nascimento@ericssoninovacao.com.br',1),
('Eduardo da Silva Neto','eduardo.s.neto@ericssoninovacao.com.br',1),
('Fabio Rafael Almeida De Lima','fabio.r.lima@ericssoninovacao.com.br',1),
('Icaro Jerry Salles Santana','icaro.s.santana@ericssoninovacao.com.br',1),
('Nailane Cardoso Oliveira','nailane.c.oliveira@ericssoninovacao.com.br',1),
('Pedro Gabriel Romanno Lisboa','pedro.g.lisboa@ericssoninovacao.com.br',1),
('Rodrigo Araujo Campos','rodrigo.a.campos@ericssoninovacao.com.br',1),
('Thiago Henrique Chaves Neri','thiago.h.neri@ericssoninovacao.com.br',1);


## TB produtos
INSERT into produto (descricao,img,link,valor,ativo) VALUES
('Café Au Lait','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-cafe-au-lait-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/cafe-au-lait',22.20,1),
('Caffè Buongiorno','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/c/a/cafe-buongiorno-xq-43501009-3d-pack_recorte.jpg','https://www.nescafe-dolcegusto.com.br/cafe-buongiorno',22.20,1),
('Cappuccino','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-cappuccino-nescafe-dolce-gusto-box_1.jpg','https://www.nescafe-dolcegusto.com.br/cappuccino',22.20,1),
('Caramel Latte Macchiato','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-caramel-latte-macchiato-nescafe-dolce-gusto-box_2.jpg','https://www.nescafe-dolcegusto.com.br/caramel-latte-macchiato',22.20,1),
('Chai Tea Latte','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-chai-tea-latte-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/chai-tea-latte',22.20,1),
('Chococino','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-chococino-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/chococino',22.20,1),
('Chococino Caramel','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-choco-caramel-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/chococino-caramel',22.20,1),
('Cortado','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-cortado-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/espresso-macchiato',22.20,1),
('Espresso','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-espresso-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/espresso',22.20,1),
('Espresso Barista','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-espresso-barista-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/espresso-barista',22.20,1),
('Espresso Descafeinado ','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-espresso-decaf-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/espresso-descafeinado',22.20,1),
('Espresso Intenso','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-espresso-intenso-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/espresso-intenso',22.20,1),
('Latte Macchiato','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-latte-macchiato-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/latte-macchiato',22.20,1),
('Lungo','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-lungo-nescafe-dolce-gusto-box_2.jpg','https://www.nescafe-dolcegusto.com.br/lungo',22.20,1),
('Marrakesh Style Tea','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-marrakech-tea-nescafe-dolce-gusto-box_1.jpg','https://www.nescafe-dolcegusto.com.br/marrakesh-style-tea',22.20,1),
('Mocha','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-mocha-nescafe-dolce-gusto-box_2.jpg','https://www.nescafe-dolcegusto.com.br/mocha',22.20,1),
('Nescau','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/n/e/nescau-xq-43344612-3d-pack_1.jpg','https://www.nescafe-dolcegusto.com.br/nescau',22.20,1),
('Nestea Limão ','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-nestea-lemon-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/nestea-lemon',22.20,1),
('Nestea Pêssego','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-nestea-peach-nescafe-dolce-gusto-box.jpg','https://www.nescafe-dolcegusto.com.br/nestea-peach',22.20,1),
('Ristretto Ardenza','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/a/r/ardenza_p.jpg','https://www.nescafe-dolcegusto.com.br/ristretto-ardenza',22.20,1),
('Vanilla Latte Macchiato','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/x/i/xi-vanilla-latte-macchiato-nescafe-dolce-gusto-box_1.jpg','https://www.nescafe-dolcegusto.com.br/vanilla-latte-macchiato',22.20,1),
('Yunnan Espresso ','https://www.nescafe-dolcegusto.com.br/media/catalog/product/cache/15/small_image/215x155/9df78eab33525d08d6e5fb8d27136e95/n/d/ndg-yunann1.jpg','https://www.nescafe-dolcegusto.com.br/yunnan-espresso',26.20,1);

## TB pedidos
INSERT into pedido (data_inicial,pedido_atual,qtde_caixas) VALUES (DATE_SUB(NOW( ),INTERVAL 3 HOUR),1,0);



