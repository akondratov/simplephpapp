FROM centos
MAINTAINER akondratov@gmail.com
EXPOSE 8000

# update install package
RUN yum update -y

# add repository php7.1 (requeirements PHP version >=7.1) *default php on centos have 5.8 version
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
    && rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm \
    && yum-config-manager --enable remi-php71

# install apache and git
RUN yum install -y httpd && yum install -y git-core

# install php,zip and nodejs package
RUN yum install -y php-mbstring php-xml \
    && yum install -y php-mbstring php-xml zip unzip \
    && yum install -y php-pdo_mysql php-pdo \
    && yum install -y php php-opcache \
    && yum install -y nodejs

# install composer from https://getcomposer.org/
RUN php -r "readfile('https://getcomposer.org/installer');" | php \
    && mv composer.phar /usr/local/bin/composer

# clone app from repository
RUN git clone https://github.com/akondratov/simplephpapp

# install composer \ generate artisan key 
RUN cd simplephpapp/ ; composer install ; cp .env.example .env \
    && php artisan key:generate

# install npm
RUN cd simplephpapp/ ; npm install ; npm run production

# run app with container ip and default 8000 port
CMD cd simplephpapp/ ; php artisan serve --host $(hostname -i)