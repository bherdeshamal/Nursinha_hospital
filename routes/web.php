<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Nrusinha-Hospital', function () {
    return view('Frontend/Index');
});

Route::get('/Nrusinha-Hospital/Services', function () {
    return view('Frontend/Services');
});

Route::get('/Nrusinha-Hospital/Services/Acidity', function () {
    return view('Services/Acidity');
});

Route::get('/Nrusinha-Hospital/Services/Allergy', function () {
    return view('Services/Allergy');
});

Route::get('/Nrusinha-Hospital/Services/Anemia', function () {
    return view('Services/Anemia');
});

Route::get('/Nrusinha-Hospital/Services/Asthma', function () {
    return view('Services/Asthama');
});

Route::get('/Nrusinha-Hospital/Services/Backache', function () {
    return view('Services/Backache');
});

Route::get('/Nrusinha-Hospital/Services/BloodTest', function () {
    return view('Services/BloodTest');
});

Route::get('/Nrusinha-Hospital/Services/Cough', function () {
    return view('Services/Cough');
});

Route::get('/Nrusinha-Hospital/Services/Chickenpox', function () {
    return view('Services/Chickenpox');
});



Route::get('/Nrusinha-Hospital/Services/High-Cholesterol', function () {
    return view('Services/cholesterol');
});

Route::get('/Nrusinha-Hospital/Services/High-Blood-Pressure', function () {
    return view('Services/bp');
});

Route::get('/Nrusinha-Hospital/Services/Dengue', function () {
    return view('Services/Dengue');
});

Route::get('/Nrusinha-Hospital/Services/Diabetes', function () {
    return view('Services/Diabetes');
});

Route::get('/Nrusinha-Hospital/Services/Diet', function () {
    return view('Services/Diet');
});

Route::get('/Nrusinha-Hospital/Services/Diarrhea', function () {
    return view('Services/Diarrhea');
});

Route::get('/Nrusinha-Hospital/Services/Dizziness', function () {
    return view('Services/Dizziness');
});

Route::get('/Nrusinha-Hospital/Services/ECG', function () {
    return view('Services/ECG');
});

Route::get('/Nrusinha-Hospital/Services/Fitness', function () {
    return view('Services/Fitness');
});

Route::get('/Nrusinha-Hospital/Services/Gastric-problems', function () {
    return view('Services/GastricProblem');
});

Route::get('/Nrusinha-Hospital/Services/Heart-Disease', function () {
    return view('Services/HeartDisease');
});

Route::get('/Nrusinha-Hospital/Services/Itching', function () {
    return view('Services/Itching');
});

Route::get('/Nrusinha-Hospital/Services/Joint-pain', function () {
    return view('Services/jointpain');
});

Route::get('/Nrusinha-Hospital/Services/Kidney-problems', function () {
    return view('Services/kidney');
});

Route::get('/Nrusinha-Hospital/Services/Migraine', function () {
    return view('Services/migraine');
});

Route::get('/Nrusinha-Hospital/Services/Nebulisation', function () {
    return view('Services/Nebulisation');
});

Route::get('/Nrusinha-Hospital/Services/Obesity', function () {
    return view('Services/Obesity');
});

Route::get('/Nrusinha-Hospital/Services/TuberCulosis', function () {
    return view('Services/tb');
});

Route::get('/Nrusinha-Hospital/Services/Throat-pain', function () {
    return view('Services/Throat');
});

Route::get('/Nrusinha-Hospital/Services/Thyroid-Disease', function () {
    return view('Services/thyroid');
});

Route::get('/Nrusinha-Hospital/Services/Urine-issues', function () {
    return view('Services/urine');
});

Route::get('/Nrusinha-Hospital/Services/Viral-fever', function () {
    return view('Services/viral');
});

Route::get('/Nrusinha-Hospital/Services/Weight-loss', function () {
    return view('Services/weightloss');
});


Route::get('/Nrusinha-Hospital/About-Us', function () {
    return view('Frontend/about');
});

Route::get('/Nrusinha-Hospital/Our-Team', function () {
    return view('Frontend/team');        
});

Route::get(' /Nrusinha-Hospital/Pediatric', function () {
    return view('Frontend/Pediatric');        
});

Route::get('/Nrusinha-Hospital/Pediatric/New-Born-Infant-Checkup', function () {
    return view('Pediatric/newborn');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Children-OPD', function () {
    return view('Pediatric/children');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Vaccination', function () {
    return view('Pediatric/vaccine');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Nebulization', function () {
    return view('Pediatric/nebulization');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Health-Diet', function () {
    return view('Pediatric/health');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Counselling', function () {
    return view('Pediatric/counselling');        
});

Route::get('/Nrusinha-Hospital/Pediatric/Growth', function () {
    return view('Pediatric/growth');        
});

Route::get('/Nrusinha-Hospital/Facilities', function () {
    return view('Frontend/Facilities');
});

Route::get('/Nrusinha-Hospital/Appointment', function () {
    return view('Frontend/Appointment');
});

Route::post('/Nrusinha-Hospital/sendAppointment', 'App\Http\Controllers\AppointmentController@sendAppointment');
    