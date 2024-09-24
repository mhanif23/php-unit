<?php
namespace App;

interface ActivityInterface
{
    public function execute();
}

class WalkingActivity implements ActivityInterface
{
    private float $distance;
    private int $steps;

    public function __construct(float $distance, int $steps)
    {
        $this->distance = $distance;
        $this->steps = $steps;
    }

    public function execute()
    {
        return "Walking for {$this->distance} km with {$this->steps} steps.";
    }

    public function getCaloriesBurned(): float
    {
        return $this->steps * 0.04;
    }
}

class ReadingActivity implements ActivityInterface
{
    private int $pages;

    public function __construct(int $pages)
    {
        $this->pages = $pages;
    }

    public function execute()
    {
        return "Reading {$this->pages} pages.";
    }

    public function getKnowledgeGained(): string
    {
        return "Gained knowledge from {$this->pages} pages of reading.";
    }
}

class Activity
{
    private array $activities = [];

    public function addActivity(ActivityInterface $activity)
    {
        $this->activities[] = $activity;
    }

    public function processActivities(): array
    {
        $results = [];
        foreach ($this->activities as $activity) {
            $results[] = $activity->execute();
        }
        return $results;
    }

    public function getTotalCaloriesBurned(): float
    {
        $totalCalories = 0;
        foreach ($this->activities as $activity) {
            if ($activity instanceof WalkingActivity) {
                $totalCalories += $activity->getCaloriesBurned();
            }
        }
        return $totalCalories;
    }

    public function getSummary(): string
    {
        $activities = $this->processActivities();
        return implode("\n", $activities);
    }
    
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

    public function getDataProvider(): iterable
    {
        return new \ArrayIterator(['user1', 'user2', 'user3']);
    }

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