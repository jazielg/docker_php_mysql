# Docker PHP e Mysql
Container PHP com conexão ao container Mysql.

### Instalar Docker e Docker Compose

https://docs.docker.com/engine/install/ubuntu/
```bash
sudo apt-get remove docker docker-engine docker.io containerd runc
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
```

https://docs.docker.com/compose/install/
```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```
Fazer o docker funcionar sem sudo e na extensão do VSCode:
```bash
sudo gpasswd -a $USER docker
sudo setfacl -m user:<your username>:rw /var/run/docker.sock
```

### Comandos
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
