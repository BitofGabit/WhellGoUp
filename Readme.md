# Lessons on Codeception

Framework uses infamous PHP lang onwards tasks will be in folders by their numbers

## notes

Running all tests or suite
```php
php vendor/bin/codecept run
php vendor/bin/codecept run acceptance
```

Running specific tests
```php
php vendor/bin/codecept run acceptance SigninCest.php
```

Running specific method in class
```php
php vendor/bin/codecept run tests/acceptance/SigninCest.php:^anonymousLogin$
```

Run after deleting any file for refactoring
```php
vendor/bin/codecept clean
```




#### php!
