# Sistema de gestão com dashboard
Sistema completo de gestão com dashboard!

## Tecnologias

<div>
    <img src="https://cdn.simpleicons.org/html5/E34F26" height="40" alt="html5 logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/css3/1572B6" height="40" alt="css3 logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/tailwindcss/7952B3" height="40" alt="bootstrap logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/javascript/F7DF1E" height="40" alt="javascript logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/php/777BB4" height="40" alt="php logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/codeigniter/EF4223" height="40" alt="codeigniter logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="40" alt="mysql logo"  />
  <img width="12" />
  <img src="https://cdn.simpleicons.org/git/F05032" height="40" alt="git logo"  />
</div>


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/devpaulo2077/sistema-de-gestao.git
```
Altere o arquivo "env" para ".env"

```bash
  Linux/Mac: mv env .env
  Windows: ren env .env
```


Configure os parâmetros do seu banco de dados no arquivo Database.php:
```bash
  public array $default = [
        'DSN'          => '',
        'hostname'     => 'host_da_sua_db',
        'username'     => 'username_da_sua_db',
        'password'     => 'password_da_sua_db',
        'database'     => 'nome_da_sua_db',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];
```


O projeto usa a seguinte estrutura para o banco de dados:

```bash
  create table usuarios(
	id int auto_increment primary key,
    nome varchar(80),
    email varchar(80),
    senha varchar(24),
    cargo varchar(30),
    salario int(10),
    foto varchar(255),
    estatus varchar(8)
);
create table notificacoes(
	id int auto_increment primary key,
    titulo varchar(50),
    legenda varchar(255)
);

create table produtos(
	id int auto_increment primary key,
    categoria varchar(30),
    produto varchar(30),
	acao varchar(30),
    quantidade int,
    valor int,
    id_usuario int,
    foreign key produtos(id_usuario) references usuarios(id)
);
```
Instale o composer

```bash
composer install
```
Instale o node_modules para tailwind

```bash
npm install twind
```

Use o seguinte comando para iniciar o projeto

```bash
php spark serve
```



## Padrão de Commit

- 📦 UPDATE - O arquivo foi atualizado

- ✏️ CREATE - O arquivo foi criado

- ❌ DELETE - O arquivo foi apagado

- 🛠️ FIX - O arquivo foi concertado

- 🕷️ BUG - O arquivo está apresentando bugs


## Post linkedin

 - [Clique aqui](https://www.linkedin.com/posts/paulo-ricardo-cardoso_estou-percebendo-um-grande-progresso-em-minhas-activity-7222030768791814146-P0BW?utm_source=share&utm_medium=member_desktop)
