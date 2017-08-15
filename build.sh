#!/usr/bin/env bash
drush make build.make.yml webroot
cd webroot
drush si -y --db-url=mysql://drupal:drupal@mariadb/drupal \
  --account-name=admin \
  --account-pass=q \
  --account-mail=admin@example.com \
  --site-mail=admin@example.com \
  --site-name=Drupal \
  standard
