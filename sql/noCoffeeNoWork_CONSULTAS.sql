
use u358413504_bd;
## chamando a procedure para inserir dados do pedido:
insert_PPP##IN id_person INT(10),id_product INT(10), id_purchase INT(10),qtde_prod INT(10)
CALL insert_PPP (10,4,1,3);

## consulta dados do pedido atual
SELECT p.id as id_pessoa, p.nome, 
d.id as id_pedido,
r.id as id_produto,r.descricao as prod_descpessoa,r.valor, 
ppp.id as ppp_id,ppp.qtde,ppp.val_total
FROM  pessoa p,
produto r,
pedido d,
pessoa_prod_pedido ppp
WHERE d.pedido_atual = 1
AND ppp.id_pedido = d.id
AND ppp.id_pessoa = p.id
AND ppp.id_produto = r.id
ORDER BY p.id, r.id;