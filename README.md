# Docker PHP e Mysql

## INSTALAR DOCKER E DOCKER-COMPOSE

https://docs.docker.com/engine/install/ubuntu/

https://docs.docker.com/compose/install/

## COMANDOS
```bash
docker ps      # Lista todos os containers ativos.
docker ps -a   # Lista todos os cantainers ativados e desativados.
docker rm ID   # Remove um ou mais containeres.
docker images  # Lista as imagens disponíveis no host.
docker rmi ID  # Remove uma ou mais imagens.
```
```bash
docker-compose up     # Criar e inicializar containers.
docker-compose start  # Iniciar containers.
docker-compose stop   # Parar containers.
docker-compose down   # Parar e remover containers e networks.
```
### Entra no container de Banco de dados (Mysql)
```bash
docker exec -it db_mysql bash
```
