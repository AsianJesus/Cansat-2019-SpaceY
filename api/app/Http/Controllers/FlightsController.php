<?php
/**
 * Created by PhpStorm.
 * User: fruit
 * Date: 1/7/2019
 * Time: 12:09 PM
 */

namespace App\Http\Controllers;


use App\Events\NewFlightEvent;
use App\Flight;
use App\Events\FlightEnded;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function __construct(Flight $flight)
    {
        parent::__construct($flight);
    }
    public function getByID($id)
    {
        return parent::getByID($id);
    }
    public function add(Request $request)
    {
        $flight = parent::add($request);
        event(new NewFlightEvent($flight));
        return $flight;
    }
    public function endFlight(Request $request, $id){
        $request['end'] = date('Y-m-d H:i:s');
        event(new FlightEnded($id));
        return parent::update($request, $id);
    }
}