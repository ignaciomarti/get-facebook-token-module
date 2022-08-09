<?php

namespace Modules\GetFacebookToken\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

class GetFacebookTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('getfacebooktoken::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('getfacebooktoken::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Request $request)
    {
        \Log::info($request);
        if($request->query('error_code') != null) {
            return view('getfacebooktoken::error');
        }

        $user = Socialite::driver('facebook')->scopes(['pages_show_list'])->user();
        \Log::info($user);
        $http = new \GuzzleHttp\Client();

        $response = $http->get('https://graph.facebook.com/'. $user->id . '/accounts?access_token='. $user->token);
        \Log::info($response);
        $data = json_decode($response->getBody()->getContents());
        \Log::info($data);
        return view('getfacebooktoken::show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('getfacebooktoken::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getToken()
    {
        return Socialite::driver('facebook')->scopes(['manage_pages', 'pages_show_list'])->redirect();
    }
}
