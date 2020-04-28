#!/usr/bin/env bash
composer install
rm -rf ./.docker/mysql/data
chmod -R 777 temp log
