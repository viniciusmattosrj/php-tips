# Sobre o Projeto
Um projeto onde a ideia é a gente programar juntos, se divertindo, enquanto resolve problemas específicos desenvolvendo aplicações reais que você pode colocar em seus projetos para aumentar sua produtividade, qualidade do código e ciclo de vida da aplicação.
- <a href="https://www.youtube.com/results?search_query=%23phptips">PHP TIPS</a> - Robson Leite


## Requerimentos

- Install <a href="https://docs.docker.com/install/">Docker</a>

- Install <a href="https://docs.docker.com/compose/install/">docker-compose</a>

- PHP >= 7.3

- Postgres >= 9.6 ou Mysql >= 5.7


## Instalação
Realizar o git clone do projeto base para o funcionamento da sua rede docker:
```bash
git@github.com:viniciusmattosrj/projetos.git
```

Para que o git não considere alterações de permissão como modificações a serem rastreadas, execute:
```
git config core.fileMode false
```

Agora suba o servidor:
```
docker-compose up -d
```

Navege até dentro da pasta projetos e realize o git clone do projeto
```bash
cd projetos && git@github.com:viniciusmattosrj/php-tips.git
```

Para que o git não considere alterações de permissão como modificações a serem rastreadas, execute:
```
git config core.fileMode false
```

Entre pelo terminal na pasta do projeto e rode:
```
cp ./docker-compose-example.php  ./docker-compose.php
```

Agora suba o servidor:
```
docker-compose up -d
```

Em outra aba do terminal se conecte no container do php e inicie um servidor built in do PHP
```
docker exec -it php bash
php -S 10.11.0.11:8008 -t public
```

No browser digite http://10.11.0.11:8008

Criando banco dados postgres: 

```
docker exec -it postgres bash
psql -U webadm -c "CREATE DATABASE php_tips";
```

Realizando a importação dump sql para a base criada:
```
psql -U webadm php_tips < /var/lib/postgresql/sqlscript/php_tips.pgsql
```

Para o acesso no <strong>POSTGRES</strong> database administration tool, use http://localhost:5050 e use as credênciais abaixo:

  - server: 10.11.0.2
  - username:
  - password:


Criando banco dados postgres: 

```
docker exec -it mysql bash
mysql -u root -c "CREATE DATABASE php_tips;";
```

Realizando a importação dump sql para a base criada:
```
mysql -u root -p php_tips < /var/lib/mysql57/php_tips.sql
```

Para o acesso no <strong>MYSQL</strong> database administration tool, use http://localhost:8080 e use as credênciais abaixo:

  - server: 10.11.0.3
  - username:
  - password:


## Contribuições
Caso identifique pontos
que possam ser aprimorados envie o seu PR. ;-)


## License
[MIT](https://choosealicense.com/licenses/mit/)
