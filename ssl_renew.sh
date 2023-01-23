#!/bin/bash

cd /home/mschmidty/app/
/usr/local/bin/docker-compose -f docker-compose.yml -f docker-compose-prod.yml run --no-deps  certbot  renew
/usr/local/bin/docker-compose exec webserver nginx -s reload
