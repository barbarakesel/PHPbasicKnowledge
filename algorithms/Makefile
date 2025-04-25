.PHONY: install start stop terminal help

install: ## Установка и сборка проекта (с очисткой)
	@echo "Запуск полной сборки проекта..."
	docker-compose down -v
	docker-compose build --no-cache
	docker-compose up -d
	@echo "\nПроект собран и запущен. Откройте http://localhost"

start: ## Запуск контейнеров
	@echo "Запуск контейнеров..."
	docker-compose up -d
	@echo "\nКонтейнеры запущены. Откройте http://localhost"

stop: ## Остановка контейнеров
	@echo "Остановка контейнеров..."
	docker-compose down
	@echo "\nКонтейнеры остановлены"

terminal: ## Вход в контейнер PHP
	@echo "Подключение к контейнеру PHP..."
	docker-compose exec php sh

clean: ## Полная очистка (контейнеры, образы, тома)
	@echo "Полная очистка проекта..."
	docker-compose down --rmi all -v
	@echo "\nВсе компоненты проекта удалены"

help: ## Вывод справки
	@echo "Доступные команды:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2}'
