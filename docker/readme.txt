#Build containers
docker-compose up -d

#Get all containers
docker container ls -a

#Stop Container by id
docker stop CONTAINER ID ec75b20d9516

#Stop Container by container_name
docker stop php_web
docker start php_web


https://github.com/sprintcube/docker-compose-lamp/blob/master/docker-compose.yml
https://www.cloudreach.com/en/resources/blog/containerize-this-how-to-use-php-apache-mysql-within-docker-containers/

//Composer Container
https://hackernoon.com/get-composer-to-run-on-docker-container-a-how-to-guide-y86g36z7

docker-compose restart composer
This will start this container again, execute install and exit.
What if I need to run "composer update" instead of "composer install"?
I can change "install" -> "update" in docker-compose.yml, and run "docker-compose restart composer"