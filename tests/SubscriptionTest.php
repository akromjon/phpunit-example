<?php 

class SubscriptionTest extends PHPUnit\Framework\TestCase
{
    public function test_it_can_subscribe_to_a_plan()
    {
        $user = new \Akromjon\PhpunitExample\User;
        $subscription = new \Akromjon\PhpunitExample\Subscription;

        $user->subscribe($subscription);

        $this->assertEquals($user->subscription(), $subscription);
    }
}