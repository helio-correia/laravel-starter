<?php

class SessionsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::find(1);//Auth::getUser()->username->first();



        return View::make('sessions.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check())
            return Redirect::admin();
        else
            return View::make('sessions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('username', 'password');

        $attempt = Auth::attempt($input);

        if ($attempt)
            return Redirect::intended('/admin');
        else
            return Redirect::back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('sessions.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::home();
    }

}
