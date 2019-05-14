.PHONY: test
test:
	docker build -t fountain-php .
	docker run -ti --rm fountain-php php spec.php
