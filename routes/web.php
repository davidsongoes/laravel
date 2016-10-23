<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Charlie\Customer;


Route::get('/', function () {
//    return view('welcome');

//  Listar Customers

//    $customers = Charlie\Customer::paginate(10);
////    dd($customers->toArray());
//    echo $customers->render();

//   Criar Novo Customer
//    $customer = new Customer();
//    $customer->name = 'Davidson Góes';
//    $customer->city = 'Brasília';
//    $customer->state = 'DF';
//    $customer->birthdate = '1987-03-24 20:00:00';
//    $customer->special_customer = 1;
//    $customer->save();
//    dd($customer->toArray());

//    Trazer Customer ID 2

    $customer = Customer::find(2);
    dd($customer->birthdate);
});
