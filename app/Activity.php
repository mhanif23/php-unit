<?php
namespace App;

class Activity
{
    public function getActivities(): array
    {
        return ['walking', 'reading', 'coding'];
    }

    public function isHealthy(): bool
    {
        return true;
    }

    public function getCalculator(): callable
    {
        return function ($a, $b) {
            return $a + $b;
        };
    }

    public function getAverageHours(): float
    {
        return 6.5;
    }

    public function getParticipants(): int
    {
        return 3;
    }

    // Perbaikan penggunaan ArrayIterator tanpa namespace
    public function getDataProvider(): iterable
    {
        return new \ArrayIterator(['user1', 'user2', 'user3']);
    }

    // Perbaikan penggunaan stdClass tanpa namespace
    public function getDetailsObject(): object
    {
        return new \stdClass();
    }
    
    public function getNumericId(): string
    {
        return '123';
    }

    public function getResource()
    {
        return fopen('php://memory', 'r');
    }

    public function getValue(): string
    {
        return 'hello';
    }

    public function getNullableValue()
    {
        return null;
    }
}