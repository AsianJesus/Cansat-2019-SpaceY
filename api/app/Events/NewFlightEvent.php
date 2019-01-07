<?php
/**
 * Created by PhpStorm.
 * User: fruit
 * Date: 1/7/2019
 * Time: 12:31 PM
 */

namespace App\Events;


use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewFlightEvent extends Event implements ShouldBroadcast
{
    public $flight;
    function __construct($flight)
    {
        $this->flight = $flight;
    }

    public function broadcastOn()
    {
        return ['new_flight'];
    }
}