# Use a imagem oficial do PHP 8.1 como base
FROM php:8.1-apache

# Instala as extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Habilita o módulo do Apache para reescrita de URLs
RUN a2enmod rewrite

# Copia os arquivos da aplicação para o diretório do Apache
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html

# Define as permissões apropriadas
RUN chown -R www-data:www-data /var/www/html

# Expondo a porta 80
EXPOSE 80

# Inicia o servidor Apache
CMD ["apache2-foreground"]