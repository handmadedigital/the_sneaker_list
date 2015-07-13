<?php

namespace HMD\Http\Controllers\Auth;

use HMD\Commands\RegisterCommand;
use HMD\Http\Controllers\Controller;
use HMD\Http\Requests\RegisterRequest;
use Laracasts\Flash\Flash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegisterRequest  $request
     * @return Response
     */
    public function store(RegisterRequest $request)
    {
        $this->dispatchFrom(RegisterCommand::class, $request);

        Flash::message('Thank you for registering');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
