FROM	debian:buster

RUN	apt-get update && apt-get install -y \
	nginx \
	vim \
	openssl \
	php7.3-fpm php-mysql php-mbstring \
	mariadb-server \
	php curl \
	wget
	
COPY	./srcs/default .
COPY	./srcs/config.inc.php .
COPY	./srcs/wp-config.php .
COPY	./srcs/run.sh .

CMD	bash run.sh
