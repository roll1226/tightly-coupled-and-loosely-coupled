# Laravel Docker Development Makefile
# ----------------------------------
# This Makefile provides shortcuts for common Docker Compose and Laravel operations
# Usage: make [command]

# Mark all targets as non-file targets
.PHONY: up down build ps logs restart restart-php restart-mysql restart-nginx php mysql composer artisan migrate migrate-fresh cache-clear test

# Docker Compose commands
# ----------------------------------

# Start the Docker containers
up:
	docker compose up -d

# Stop the Docker containers
down:
	docker compose down

# Build the Docker containers
build:
	docker compose up -d --build

# Show running containers
ps:
	docker compose ps

# View the logs
logs:
	docker compose logs

# View the logs for a specific container
logs-php:
	docker compose logs php
logs-nginx:
	docker compose logs nginx
logs-mysql:
	docker compose logs mysql

# Restart containers
restart:
	docker compose restart

# Restart only PHP container
restart-php:
	docker compose restart php

# Restart only MySQL container
restart-mysql:
	docker compose restart mysql

# Restart only Nginx container
restart-nginx:
	docker compose restart nginx

# Shell access
# ----------------------------------

# Enter the PHP container
php:
	docker compose exec php bash

# Enter the MySQL container
mysql:
	docker compose exec mysql bash

# Laravel commands
# ----------------------------------

# Run composer commands (usage: make composer command="require package")
composer:
	docker compose exec php composer $(command)

# Run artisan commands (usage: make artisan command="make:model Model")
artisan:
	docker compose exec php php artisan $(command)

# Run migrations
migrate:
	docker compose exec php php artisan migrate

# Reset and re-run all migrations
migrate-fresh:
	docker compose exec php php artisan migrate:fresh --seed

# Clear Laravel cache
cache-clear:
	docker compose exec php php artisan cache:clear
	docker compose exec php php artisan config:clear
	docker compose exec php php artisan route:clear
	docker compose exec php php artisan view:clear

# Run PHPUnit tests
test:
	docker compose exec php php artisan test
