#!/bin/bash

docker stop dalev_mysql
docker stop dalev_php
docker stop dalev_composer
docker stop dalev_phpmyadmin

docker rm dalev_mysql
docker rm dalev_php
docker rm dalev_composer
docker rm dalev_phpmyadmin
