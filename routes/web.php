<?php

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Promotion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $promotions = Promotion::doesntHave('services')->get();
    $services = Service::with('promotions')->paginate(6);
    $testimonial = Testimonial::latest()->take(3)->get();
    return view('welcome', [
        "title" => "Home",
        "promotion" => $promotions,
        "services" => $services,
        "testimonial" => $testimonial

    ]);
});

Route::get('/contacts', function () {
    return view('contact', ["title" => "Contacts"]);
});

Route::get('/visi', function () {
    return view('visi', ["title" => "Visi"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "about"]);
});

Route::get('/service', function () {
    $services = Service::with('promotions')->paginate(6);
    return view('service', [
        "title" => "Service",
        "services" => $services
    ]);
});

Route::get('/service/{id}', function ($id) {
    $service = Service::with('promotions')->findOrFail($id); // load relasi kalau perlu
    $testimonial = Testimonial::where('service_id', $id)->get();

    return view('service_show', [
        "title" => "Service",
        "service" => $service,
        "testimonial" => $testimonial,
    ]);
});
