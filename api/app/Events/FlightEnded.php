<?php
/**
 * Created by PhpStorm.
 * User: fruit
 * Date: 1/7/2019
 * Time: 12:36 PM
 */

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class FlightEnded extends Event implements ShouldBroadcast
{
    protected $flight_id;
    function __construct($flight_id)
    {
        $this->flight_id = $flight_id;
    }
    public function broadcastOn()
    {
        return ['flight_ended'];
    }
}