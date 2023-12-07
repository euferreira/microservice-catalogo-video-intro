# Inicializando o projeto:
```bash
docker-compose up -d
```

#Acessando o container:
```bash
docker exec -it app-php bash
```
- Não esqueça de dar a permissão de execução para os arquivos com:
```bash
chown -R 1000:1000 .
```

