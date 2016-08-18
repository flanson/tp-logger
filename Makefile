.PHONY: build install test lint checkstyle ci-tag

install:
	@wget -nc https://getcomposer.org/composer.phar
	@php -dmemory_limit=4G composer.phar install --prefer-dist
	@wget -nc https://getcomposer.org/composer.phar && php composer.phar install
	@wget -nc https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar

start:
	@php bin/console server:run

lint:
	@find Rf -name "*.php" -print0 | xargs -0 -n1 -P8 php -l > /dev/null
checkstyle:
	@php phpcs.phar --standard=PSR1,PSR2 Rf


