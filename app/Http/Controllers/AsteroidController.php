<?php

namespace App\Http\Controllers;

use App\Models\NearEarthObject;
use Illuminate\Http\Request;
use App\NasaService;

class AsteroidController extends Controller
{
    public function index(){
        $greetingMessage = json_encode(['hello'=>'MacPaw Internship 2022!']);
        return view('index',compact('greetingMessage'));
    }

    public function ViewHazardous(){
        $hazardousAsteroids = NearEarthObject::where('is_hazardous',true)->get();
        $hazardousAsteroidsJson=json_encode($hazardousAsteroids, JSON_PRETTY_PRINT);
        return view('hazardous',compact('hazardousAsteroidsJson'));
    }

    public function ViewOderBySpeed(){
        if(isset($_GET['hazardous']) && $_GET['hazardous']=='true'){
            $hazardousAsteroids = NearEarthObject::where('is_hazardous',true)->orderBy('speed','desc')->get();
            $hazardousAsteroidsJson = json_encode($hazardousAsteroids, JSON_PRETTY_PRINT);
            return view('hazardousOrderBySpeed', compact('hazardousAsteroidsJson'));
        }
        $asteroids = NearEarthObject::orderBy('speed','desc')->get();
        $asteroidsJson = json_encode($asteroids, JSON_PRETTY_PRINT);
        return view('orderBySpeed', compact('asteroidsJson'));
    }

    public function  AddAsteroids(){
        $addedObjects = 0;
        $nasaApi = new NasaService();
        $response = $nasaApi->callNasaApi();
        $nearEarthObjectsCount = $response['element_count'];
        foreach ($response['near_earth_objects'] as $dates){
            foreach ($dates as $asteroid){
                $resultOfCreated = NearEarthObject::firstOrCreate([
                    'referenced'=> $asteroid['neo_reference_id'],
                    'name'=>$asteroid['name'],
                    'speed'=>$asteroid['close_approach_data'][0]['relative_velocity']['kilometers_per_hour'],
                    'is_hazardous'=>$asteroid['is_potentially_hazardous_asteroid'],
                    'date'=>$asteroid['close_approach_data'][0]['close_approach_date']
                ]);
                if($resultOfCreated->wasRecentlyCreated) $addedObjects +=1;
            }
        }
        return view('add',compact('addedObjects','nearEarthObjectsCount'));
    }
}
