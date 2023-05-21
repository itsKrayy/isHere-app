<?php

namespace App\Http\Controllers;

use App\Models\Tenant;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.adminLogin');

        // return view('admin.adminCRUD', [
        //     'tenants' => Tenant::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminHome()
    {

        // dump(Tenant::all());
        return view('admin.adminCRUD', [
            'tenants' => Tenant::all(),
        ]);
    }

    public function adminLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()-> attempt(request()->only(['email','password']))) {
            return redirect('admin/home');
        }
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function adminLogout()
    {
        auth()->logout();

        return redirect('/');
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
        

        // dump($request);
        $tenant1 = Tenant::create(['id' => $request->id]);
        $tenant1->domains()->create(['domain' => $request->id. '.' .request()->getHost()]);
        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editTenant', [
            'tenant' => Tenant::find($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        Tenant::find($id)->update($request->only('id'));
        return redirect('/admin/home');
        // return view('admin.adminCRUD', [
        //     'tenants' => Tenant::all(),
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tenant::destroy($id);
        return redirect('/admin/home');
    }
}
