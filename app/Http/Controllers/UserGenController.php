<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

// require the Faker autoloader
require_once '/../vendor/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

class UserGenController extends Controller {

  public function __construct() {
        # Put anything here that should happen before any of the other actions

    }

  public function getUserGen() {
    return view('usergenerator.getusergen');
    }

  public function postUserGen(Request $request) {
    $users = $request->input('users');
    $title = $request->input('title');
    $birthdate = $request->input('birthdate');
    $address = $request->input('address');
    $phone = $request->input('phone');
    $profile = $request->input('profile');

//    for ($i = 0; $i < $users; $i++){
    $faker = Faker::create();
    if (empty($title)){
      $username = $faker->name.'<br>';
    }
    else{
      $username = $faker->title.' '.$faker->name.'<br>';
    }
    if (empty($birthdate)){
      $birthday = '';
    }
    else{
      $birthday = 'Birthdate: '.$faker->dateTimeThisCentury->format('m-d-Y').'<br>';
    }
    if (empty($address)){
      $useraddress = '';
    }
    else{
      $useraddress =  $faker->streetAddress.'<br>'.$faker->city.', '.$faker->state.' '. $faker->postcode.'<br>';
    }
    if (empty($phone)){
      $userphone = '';
    }
    else{
      $userphone = $faker->phoneNumber.'<br>';
    }
    if (empty($profile)){
      $userprofile = '';
    }
    else{
      $userprofile = 'Profile: '.$faker->text.'<br><br>';
    }
    $finalprofile = $username.$birthday.$useraddress.$userphone.$userprofile;
    return view('usergenerator.postusergen')->with('finalprofile', $finalprofile)->with('users', $users);
  //  }
/*
$faker= \Faker\Factory::create();
for ($i = 0; $i <= 6; $i++) {
        $fake = array($faker->name);
        if ($request->input('address') == TRUE) {
        	array_push($fake, $faker->address);
        }
        if ($request->input('number') == TRUE) {
        	array_push($fake, $faker->phoneNumber);
        }
}
*/
  }
// use the factory to create a Faker\Generator instance
}
