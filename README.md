
Após realizar o clone do repositorio , execute o comando composer update no diretorio criado para atualizar os repositorios do projeto.

É possível utilizar o servidor de testes do próprio CodeIgniter utilizando o comando php spark serve, mas se preferir, pode ser usado algum servidor Web, como o Apache, IIS etc.

Copie o arquivo env para .env e configure seu aplicativo, especificamente a baseURL e quaisquer configurações do banco de dados.

Base de Dados
Use o script para criar a base de dados que é utilizada no projeto.

No arquivo .env descomente os campos e insira as informações de conexão do seu Banco de dados:
Utilize essas configurações:

database.default.hostname = localhost
database.default.database = db_ead
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =

CREATE TABLE tbl_cursos (
        id int NOT NULL AUTO_INCREMENT,
        tilulo varchar(100) not Null,
        descricao varchar(200) not null,
        PRIMARY KEY (id)
        );
        ]
        
 CREATE TABLE tbl_alunos (
        id int NOT NULL AUTO_INCREMENT,
        nome varchar(200) NOT Null,
        email varchar(200) not null,
        dt_nasc date,
        PRIMARY KEY (id)
        );
        
 CREATE TABLE tbl_matriculas(
        id_matricula int NOT NULL AUTO_INCREMENT,
        alunos id int NOT Null,
        curso_id int not null,
        PRIMARY KEY (id_matricula)
        );
        
        
 Se tudo estiver correto, basta acessar a URL: http://localhost:8080/ 
