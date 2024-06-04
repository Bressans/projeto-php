# Use a imagem oficial do PHP com Apache
FROM php:7.4-apache

# Copie os arquivos da aplicação para o diretório raiz do Apache
COPY src/ /var/www/html/

# Defina o diretório de trabalho
WORKDIR /var/www/html/

# Instale extensões necessárias, se aplicável
# RUN docker-php-ext-install pdo pdo_mysql
