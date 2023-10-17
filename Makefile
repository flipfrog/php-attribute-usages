all: composer-install run-test
composer-install:
	docker compose run --rm console composer install
run-test:
	docker compose run --rm console php ./test_using_attribute.php
	docker compose run --rm console php ./test_using_trait.php
destroy:
	docker compose down --rmi all --volumes --remove-orphans
sh:
	docker compose run --rm console bash
