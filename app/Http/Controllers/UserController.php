<?php

namespace App\Http\Controllers;

use App\Models\User;;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Bus;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo public_path("Documents\sample_2022.pdf");  die;
        $users = User::all();
        $user = User::first();

        // send parameters.
        // Mail::to('aadhargaur41@gmail.com')->send(new WelcomeMail($user->name, $user->email));

        // send an instance.
        // Mail::to('aadhargaur41@gmail.com')->send(new WelcomeMail($user));

        // Simple dispatch.
        // SendMailJob::dispatch($user);

        // Dispatch with delay.
        // SendMailJob::dispatch($user)
        // ->delay(now()->addMinutes(5));

        dispatch(new SendMailJob($user));

        return view('welcome', compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        //
    }
}
