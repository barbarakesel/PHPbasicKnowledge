.PHONY: install start stop terminal help

install:
	@echo "Запуск полной сборки проекта..."
	docker-compose down -v
	docker-compose build --no-cache
	docker-compose up -d
	@echo "\nПроект собран и запущен. Откройте http://localhost"

start:
	@echo "Запуск контейнеров..."
	docker-compose up -d
	@echo "\nКонтейнеры запущены. Откройте http://localhost"

stop:
	@echo "Остановка контейнеров..."
	docker-compose down
	@echo "\nКонтейнеры остановлены"

terminal:
	@echo "Подключение к контейнеру PHP..."
	docker-compose exec php sh

clean: 
	@echo "Полная очистка проекта..."
	docker-compose down --rmi all -v
	@echo "\nВсе компоненты проекта удалены"

help: 
	@echo "Доступные команды:"
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2}'
