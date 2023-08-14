build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
down:
	docker-compose down
up:
	docker-compose up -d
cli:
	docker exec -it challenge-php-1 bash
