#!/usr/bin/env bash
echo ---------------------------
echo Install script
echo ---------------------------

composer install
rm -rf ./.docker/mysql/data
chmod -R 777 temp log
