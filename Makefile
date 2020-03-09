USER_ID := $(shell id -u)
SUBMAKE := $(shell which make)

install: .env
	docker-compose down
	$(SUBMAKE) start
	@mkdir -p src/public/uploads
	@chmod 777 src/public/uploads

start:
	docker-compose up -d --build

stop:
	docker-compose down --remove-orphans

bin/%:
	docker-compose run --rm $*

.env:
	echo "USER_ID=$(USER_ID)" > .env

restart: stop start
