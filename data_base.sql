USE dbphp7;

CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro VARCHAR(256) NOT NULL
);

INSERT INTO tb_usuarios (deslogin, dessenha, dtcadastro) VALUES('Hugo','00401','900054');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET idusuario = '' WHERE idusuario = '';

DELETE FROM tb_usuario WHERE idusuario = '';