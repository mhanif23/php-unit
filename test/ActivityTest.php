<?php

use PHPUnit\Framework\TestCase;
use App\Activity;
use App\WalkingActivity;
use App\ReadingActivity;

class ActivityTest extends TestCase
{
    public function testAddAndProcessActivities()
    {
        $activityManager = new Activity();
        $walking = new WalkingActivity(5.0, 8000);
        $reading = new ReadingActivity(50);

        $activityManager->addActivity($walking);
        $activityManager->addActivity($reading);

        $result = $activityManager->processActivities();
        
        $this->assertIsArray($result);
        $this->assertIsString($result[0]);
        $this->assertIsString($result[1]);
    }

    public function testCaloriesBurned()
    {
        $activityManager = new Activity();
        $walking = new WalkingActivity(5.0, 8000);

        $activityManager->addActivity($walking);
        $calories = $activityManager->getTotalCaloriesBurned();

        $this->assertIsFloat($calories);
        $this->assertGreaterThan(0, $calories);
    }

    public function testGetSummary()
    {
        $activityManager = new Activity();
        $walking = new WalkingActivity(5.0, 8000);
        $reading = new ReadingActivity(50);

        $activityManager->addActivity($walking);
        $activityManager->addActivity($reading);

        $summary = $activityManager->getSummary();
        $this->assertIsString($summary);
        $this->assertStringContainsString("Walking", $summary);
        $this->assertStringContainsString("Reading", $summary);
    }

    public function testGetActivities()
    {
        $activity = new Activity();
        $this->assertIsArray($activity->getActivities(), 'Should return an array');
    }

    public function testIsHealthy()
    {
        $activity = new Activity();
        $this->assertIsBool($activity->isHealthy(), 'Should return a boolean');
    }

    public function testGetCalculator()
    {
        $activity = new Activity();
        $this->assertIsCallable($activity->getCalculator(), 'Should return a callable');
    }

    public function testGetAverageHours()
    {
        $activity = new Activity();
        $this->assertIsFloat($activity->getAverageHours(), 'Should return a float');
    }

    public function testGetParticipants()
    {
        $activity = new Activity();
        $this->assertIsInt($activity->getParticipants(), 'Should return an integer');
    }

    public function testGetDataProvider()
    {
        $activity = new Activity();
        $this->assertIsIterable($activity->getDataProvider(), 'Should return an iterable');
    }

    public function testGetNumericId()
    {
        $activity = new Activity();
        $this->assertIsNumeric($activity->getNumericId(), 'Should return a numeric string');
    }

    public function testGetDetailsObject()
    {
        $activity = new Activity();
        $this->assertIsObject($activity->getDetailsObject(), 'Should return an object');
    }

    public function testGetResource()
    {
        $activity = new Activity();
        $this->assertIsResource($activity->getResource(), 'Should return a resource');
    }

    public function testGetValue()
    {
        $activity = new Activity();
        $this->assertIsScalar($activity->getValue(), 'Should return a scalar value');
        $this->assertIsString($activity->getValue(), 'Should return a string');
    }

    public function testGetNullableValue()
    {
        $activity = new Activity();
        $this->assertNull($activity->getNullableValue(), 'Should return null');
    }
}
