composer-install:
	docker exec -it oddsscanner_php composer install

start:
	docker-compose up -d

restart:
	docker-compose stop
	docker-compose start

logs:
	docker-compose logs -f

generate-csv:
	docker exec -it oddsscanner_php php index.php

import-database:
	docker exec -it oddsscanner_mysql mysql -u oddsscanner -p secret database < sql_db.sql

db:
	docker exec -it oddsscanner_mysql mysql -u root -psecret