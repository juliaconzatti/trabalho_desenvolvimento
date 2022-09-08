CREATE TABLE clubes(
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(130) NOT NULL,
    descricao TEXT NOT NULL,
    autor VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE forum(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(120) NOT NULL,
    comentario TEXT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE resenhas(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR (70) NOT NULL,
    resenha TEXT NOT NULL,
    PRIMARY KEY (id)
    
);

CREATE TABLE atualizacoes(
    id INT NOT NULL AUTO_INCREMENT,
    paginas INT NOT NULL,
    comentario TEXT NOT NULL,
    PRIMARY KEY (id)
);

create table usuarios_clubes (
    id int NOT NULL AUTO_INCREMENT,
    id_usuario bigint(20) unsigned not null,
    id_clube int not null,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    CONSTRAINT FOREIGN KEY (id_clube) REFERENCES clubes(id)
    );