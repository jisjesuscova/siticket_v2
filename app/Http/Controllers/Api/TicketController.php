<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->segment(3);

        $tickets = Ticket::join('events', 'tickets.event_id', '=', 'events.id')
                  ->where('event_id', $id)
                  ->select('tickets.*', 'events.event_name')
                  ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $tickets
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function check($id)
    {
        $id = $request->segment(4);

        $ticket_qty = Ticket::where('token', $id)->where('status_id', '=', 0)->count();

        if ($ticket_qty == 1) {
            $ticket = Ticket::where('token', $id)->where('status_id', '=', 0)->count();
            $ticket->status_id = 1;
            $ticket->save();

            return response()->json([
                'success' => false,
                'data' => 1
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'data' => 0
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        echo 555;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
