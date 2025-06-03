<?php

use App\Models\Contact;
use App\Models\Service;
use App\Models\Promotion;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $promotions = Promotion::doesntHave('services')->get();
    $services = Service::with('promotions')->paginate(6);
    $testimonial = Testimonial::latest()->take(3)->get();
    return view('welcome', [
        "title" => "Rumah",
        "promotion" => $promotions,
        "services" => $services,
        "testimonial" => $testimonial

    ]);
});

Route::get('/contacts', function () {
    return view('contact', ["title" => "Contacts"]);
});
Route::get('/products', function () {
    $services = Service::with('promotions')->paginate(6);
    return view('products', ["title" => "Produk",  "services" => $services]);
});


Route::post('/contacts', function (Request $request) {
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'phone' => ['required', 'regex:/^[0-9]+$/', 'max:20'],
        'email'      => 'required|email|max:255',
        'message'    => 'nullable|string',
    ]);

    Contact::create($validated);

    return back()->with('success', 'Pesan berhasil dikirim.');
})->name('contacts.submit');

Route::get('/visi', function () {
    return view('visi', ["title" => "Visi"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "Tentang Kami"]);
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
