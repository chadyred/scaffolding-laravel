USER_ID := $(shell id -u)

install: .env
	docker-compose down
	docker-compose up -d --build
	@mkdir public/uploads
	@chmod 777 public/uploads

bin/%:
	docker-compose run --rm $*

.env:
	echo "USER_ID=$(USER_ID)" > .env