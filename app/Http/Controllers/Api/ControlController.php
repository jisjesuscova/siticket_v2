<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ControlEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreControlEventRequest;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreControlEventRequest $request)
    {
        $control = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => '3'
        ]);

        $control_event = ControlEvent::create([
            'control_id' => $control->id,
            'event_id' => $request->event_id
        ]);

        return response()->json([
            'success' => true,
            'data' => $control
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $controls = User::where('rol_id', '=', '3')->orderByDesc('id')
             ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $controls
        ], 200);
        
        echo $id;
    }

    /**
     * Show if the control user has the resources to accept the ticket.
     */
    public function validate($id)
    {
        return response()->json([
            'success' => true,
            'data' => 1
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Control $control)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Control $control)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'data' => $user
        ], 200);
    }
}
