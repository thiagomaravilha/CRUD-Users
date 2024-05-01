# CRUD - Using (PHP + MySql)
User Registration with Login Control - using PHP<br>

Installation
------------

Create table in database:

```sql
USE empresa;
create table pessoas(
    cod_pessoa integer primary key AUTO_INCREMENT,
    nome varchar(200) not null,
    endereco varchar(250) not null,
    telefone varchar(16) not null,
    email varchar(250) not null,
    data_nascimento date not null
);
create table usuario(
    id_usuario integer primary key AUTO_INCREMENT,
    nome varchar(150) not null,
    login varchar(150) not null,
    senha varchar(150) not null
);
INSERT INTO `usuario`(`nome`, `login`, `senha`) VALUES ('Administrador','admin', md5('admin'));
```

Configure file Conexao.php in folder: 'empresa/restrito/conexao': <br>

Remember to change the data(user,password,bd) in the connection according to your database.
<br>
<hr>

# Screenshots

Tela 1:
![Screenshot](/prints/tela1.png)<hr>
Tela 2:
![Screenshot](/prints/tela2.png)<hr>
Tela 3 - Cadastro:
![Screenshot](/prints/tela3Cadastro.png)<hr>
Tela 4 - Pesquisa:
![Screenshot](/prints/tela4Pesquisa.png)<hr>


## Credits
Thiago L. Maravilha<br>
