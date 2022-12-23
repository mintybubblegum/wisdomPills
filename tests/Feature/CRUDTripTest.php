<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Trip;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function PHPUnit\Framework\assertCount;

class CRUDTripTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_listTripAppearInHomeView() {
        $this->withExceptionHandling();
        $trips = Trip::factory(2)->create();
        $trip = $trips[0];
        $response = $this->get('/');
        $response->assertSee($trip->name);
        $response->assertStatus(200)->assertViewIs('home');
    }

    public function test_aTripCanBeDeleted() {
        $this->withExceptionHandling();
        $trip = Trip::factory()->create();
        $this->assertCount(1, Trip::all());
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(0, Trip::all());
    }

    public function test_aTripCanBeCreated(){
        $this->withExceptionHandling();
        $response = $this->post(route ('storeTrip'),
        [
            'imgDestination' => 'imgDestination',
            'originAddress' => 'originAddress',
            'originPostcode' => 'originPostcode',
            'originCity' => 'originCity',
            'originCountry' => 'originCountry',
            'destinationAddress' => 'destinationAddress',
            'destinationPostcode' => 'destinationPostcode',
            'destinationCity' => 'destinationCity',
            'destinationCountry' => 'destinationCountry',
            'preferences' => 'preferences',
            'seats' => '3',
            'price' => '15',
            'driverName' => 'driverName',
            'driverSurname' => 'driverSurname',
            'driverPhone' => 'driverPhone',
            'driverImg' => 'driverImg',
            'energyType' => 'energyType',
            'numberplate' => 'numberplate',
            'vehicleType' => 'vehicleType',
            'date' => '2022-12-23',
            'departureTime' => 'departureTime',
            'arrivalTime' => 'arrivalTime',
            'topJourneys' => 'topJourneys',
            'userEmail' => 'userEmail'
        ]);
        $this->assertCount(1,Trip::all()); 
    }

    public function test_aTripCanBeUpdated(){
        $this->withExceptionHandling();
        $trip=Trip::factory()->create();
        $this->assertCount(1,Trip::all());
        $response=$this->patch(route('updateTrip',$trip->id), ['destinationCity'=>'New DestinationCity']);
        $this->assertEquals('New DestinationCity', Trip::first()->destinationCity);
    }

    public function test_aTripCanBeShowed(){
        $this->withExceptionHandling();
        $trip=Trip::factory()->create();
        $this->assertCount(1,Trip::all());
        $response=$this->get(route('showTrip', $trip->id));
        $response->assertSee($trip->name);
        $response->assertStatus(200)->assertViewIs('showTrip');
    }

}