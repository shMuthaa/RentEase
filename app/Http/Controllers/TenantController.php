<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Tenant;
use Illuminate\Http\Request;

/**
 * Class TenantController
 * @package App\Http\Controllers
 */
class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::paginate();

        return view('tenant.index', compact('tenants'))
            ->with('i', (request()->input('page', 1) - 1) * $tenants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::latest()->get();

        // $tenant = new Tenant();
        return view('tenant.create', [
            'rooms' => $rooms,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('hello');
        $this->validate($request, [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'room' => 'required',
            'datemovedin' => 'required',
        ]);

        Tenant::create([
            'fullname' => $request->fullname,
            'phonenumber' => $request->phone,
            'email' => $request->email,
            'roomid' => $request->room,
            'rentdue' => 0,
            'datemovedin' => $request->datemovedin,
            'rentPaid' => 0,
        ]);

        return redirect()->route('tenants.index')
            ->with('success', 'Tenant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant = Tenant::find($id);

        return view('tenant.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant = Tenant::find($id);

        return view('tenant.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tenant $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenant $tenant)
    {
        request()->validate(Tenant::$rules);

        $tenant->update($request->all());

        return redirect()->route('tenants.index')
            ->with('success', 'Tenant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tenant = Tenant::find($id)->delete();

        return redirect()->route('tenants.index')
            ->with('success', 'Tenant deleted successfully');
    }
}