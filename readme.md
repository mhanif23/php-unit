
# Activity Class and PHPUnit Test Example

This is a simple PHP program that represents an `Activity` class with various methods and corresponding PHPUnit tests to validate the functionality. The tests make use of multiple assertion types provided by PHPUnit.

## Prerequisites

- PHP >= 7.0
- [PHPUnit](https://phpunit.de/) >= 9.x

## Installation

1. Clone the repository or download the project files.
2. Make sure you have [Composer](https://getcomposer.org/) installed.
3. Install PHPUnit if it's not already installed:

```bash
composer require --dev phpunit/phpunit
```

## Running the Tests

To run the tests, simply execute the following command in your project directory:

```bash
./vendor/bin/phpunit test
```

This will execute all the test cases defined in all program on folder test.

## Activity Class

The `Activity` class represents a set of daily activities and contains various methods that return different types of data like arrays, booleans, callables, floats, integers, etc.

### Methods in `Activity` class:

- `getActivities(): array` - Returns an array of activities.
- `isHealthy(): bool` - Returns whether the activities are healthy (boolean).
- `getCalculator(): callable` - Returns a callable (function) for calculations.
- `getAverageHours(): float` - Returns the average hours spent on activities.
- `getParticipants(): int` - Returns the number of participants.
- `getDataProvider(): iterable` - Returns an iterable object.
- `getNumericId(): string` - Returns a numeric string.
- `getDetailsObject(): object` - Returns an object of details.
- `getResource()` - Returns a resource (file handle).
- `getValue(): string` - Returns a scalar string value.
- `getNullableValue()` - Returns a nullable value (null).

## PHPUnit Tests

The PHPUnit tests are located in folder `test`. The following assertion types are used:

- `assertIsArray()`
- `assertIsBool()`
- `assertIsCallable()`
- `assertIsFloat()`
- `assertIsInt()`
- `assertIsIterable()`
- `assertIsNumeric()`
- `assertIsObject()`
- `assertIsResource()`
- `assertIsScalar()`
- `assertIsString()`
- `assertNull()`

