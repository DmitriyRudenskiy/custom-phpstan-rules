# Custom PHPStan Rules

This repository provides following custom rules for [PHPStan](https://github.com/phpstan/phpstan):

* Use methods instead of functions.


## Usage

To use those rules, require them in [Composer](https://getcomposer.org/):

```bash
composer require --dev d.rudenskiy/custom-phpstan-rules
```

And include them in your project's PHPStan config:

```yaml
includes:
    - vendor/d.rudenskiy/custom-phpstan-rules/rules.neon
```
