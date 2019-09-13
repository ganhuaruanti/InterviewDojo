#!/usr/bin/make -f

.PHONY: check test coverage

# ---------------------------------------------------------------------

all: test

check:
	php vendor/bin/phpcs

test: check
	phpdbg -qrr vendor/bin/phpunit

coverage: test
	@if [ "`uname`" = "Darwin" ]; then open build/coverage/index.html; fi

server:
	php artisan serve
