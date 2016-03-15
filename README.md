# 構成

nginx / PHP-FPM / MySQL

# Dockerのインストール

```
curl -fsSL https://get.docker.com/ | sh
```

# Docker Composeのインストール

```
curl -L https://github.com/docker/compose/releases/download/1.6.2/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```

# 起動

```
git clone https://github.com/naga3/docker-nginx-php
cd docker-nginx-php/
docker-compose up -d
```
