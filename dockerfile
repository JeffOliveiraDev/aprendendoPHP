FROM php:7.4-cli
# COPY source dest
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
# CMD ["executable"]
CMD ["php", "index.php"]