create database bdTccShow;

use bdTccShow;

/* INSERIR USUARIO */
create table tb_usuario
(
	cod_usuario int not null primary key auto_increment,
    nome_usuario varchar(20) not null,
    email_usuario varchar(60) not null,
    senha_usuario varchar(12) not null,
    tipo_usuario varchar(12) not null
);


DELIMITER //
create procedure Sp_Inserir_Usuario(nome varchar(20), email varchar(60), senha varchar(12), tipo varchar(12))
begin
if exists(select nome_usuario from tb_usuario where nome_usuario = nome) then
select 'Usuário já cadastrado' as Mensagem;
else insert into tb_usuario (nome_usuario, email_usuario, senha_usuario, tipo_usuario)
values (nome, email, senha, tipo);
select 'Usuário cadastrado com sucesso' as Mensagem;
end if;
end;



/* INSERIR PROFESSOR */
create table tb_professor
(
	cod_professor int not null primary key auto_increment,
    nome_professor varchar(80) not null,
    componente_professor varchar(50) not null,
    dt_nascimento_professor date not null,
    sexo_professor varchar (15) not null,
    matricula_professor int not null,
    
    cod_usuario int not null,
    constraint cod_usuario_professor
    foreign key (cod_usuario)
    references tb_usuario (cod_usuario)
);
 
DELIMITER //
create procedure Sp_Inserir_Professor(nome varchar(20), componente varchar(70), nascimento varchar(12), sexo varchar(15), matricula int, codigo_usuario int)
begin
if exists(select matricula_professor from tb_professor where matricula_professor = matricula) then
select 'Professor já cadastrado' as Mensagem;
else insert into tb_professor (nome_professor, componente_professor, dt_nascimento_professor, sexo_professor, matricula_professor, cod_usuario)
values (nome, componente, nascimento, sexo, matricula, codigo_usuario);
select 'Professor cadastrado com sucesso' as Mensagem;
end if;
end;
 
 

 /* INSERIR ALUNO */
create table tb_aluno
(
	cod_aluno int not null primary key auto_increment,
    nome_aluno varchar(120) not null,
    sexo_aluno varchar(20) not null,
    dt_nasc_aluno date not null,
    escola_aluno varchar(100) not null,
    rm_aluno int not null,
    curso_aluno varchar(70) not null,
    modulo_aluno varchar(50) not null,
    
    cod_usuario int not null,
    constraint cod_usuario_aluno
    foreign key (cod_usuario)
    references tb_usuario (cod_usuario)
);


DELIMITER //
create procedure Sp_Inserir_Aluno(nome varchar(120), sexo varchar(30), nascimento varchar(15), escola varchar(80), rm int, curso varchar(40), modulo varchar(50), codigo int)
begin
if exists(select rm_aluno from tb_aluno where rm_aluno = rm) then
select 'Aluno já cadastrado' as Mensagem;
else insert into tb_aluno (nome_aluno, sexo_aluno, dt_nasc_aluno, escola_aluno, rm_aluno, curso_aluno, modulo_aluno, cod_usuario)
values (nome, sexo, nascimento, escola, rm, curso, modulo, codigo);
select 'Aluno cadastrado com sucesso' as Mensagem;
end if;
end;
	select * from tb_aluno;


/* INSERIR CLIENTE */
create table tb_cliente
(
	nome_cliente varchar(120) not null,
    sexo_cliente varchar(20) not null,
    dt_nasc_cliente date not null,
    
    cod_usuario int not null,
    constraint cod_usuario_cliente
    foreign key (cod_usuario)
    references tb_usuario (cod_usuario)
);

DELIMITER //
create procedure Sp_Inserir_Cliente(nome varchar(120), sexo varchar(30), nascimento varchar(15), codigo int)
begin
if exists(select nome_cliente from tb_cliente where nome_cliente = nome) then
select 'Cliente já cadastrado' as Mensagem;
else insert into tb_cliente(nome_cliente, sexo_cliente, dt_nasc_cliente, cod_usuario)
values (nome, sexo, nascimento, codigo);
select 'Cliente cadastrado com sucesso' as Mensagem;
end if;
end;

create table tb_imagens
(
    nome_imagem varchar(255) primary key not null,
    cod_imagem int not null
);

create table tb_repositorio
(
	cod_repositorio int not null primary key auto_increment,
    titulo_repositorio varchar(50) not null,
    nome_integrantes varchar(255) not null,
	modulo_repositorio varchar(50) not null,
    curso_repositorio varchar(70) not null,
    semestre_ano_repositorio varchar(30) not null,
    
    nome_imagem varchar(255) not null,
    constraint nm_imagem_repositorio
    foreign key(nome_imagem)
    references tb_imagens (nome_imagem)
);




select * from tb_usuario;

select * from tb_cliente;

select * from tb_aluno;

select * from tb_professor;