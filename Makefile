migrate:
	docker-compose exec apache php artisan migrate

update:
	docker-compose exec apache php artisan db:seed

kill:
	docker stop $$(docker ps -aq) && \
	docker rm $$(docker ps -aq)

start:
	docker-compose up -d --build

stop:
	docker-compose down

run:
	docker-compose up --build