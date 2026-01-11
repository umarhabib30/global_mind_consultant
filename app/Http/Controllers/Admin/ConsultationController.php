<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the consultations.
     */
    public function index()
    {
        // Get all consultations, newest first, 10 per page
        $consultations = Consultation::latest()->paginate(10);

        $data = [
            'heading'       => "Consultation Bookings",
            'title'         => "View Consultation Requests",
            'active'        => 'consultation',
            'consultations' => $consultations
        ];

        return view('admin.consultation.index', $data);
    }

    /**
     * Display the specified consultation details page.
     */
    public function show($id)
    {
        // Find the specific consultation or fail with 404
        $consultation = Consultation::findOrFail($id);

        $data = [
            'heading'      => "Consultation Details",
            'title'        => "Viewing Request from " . $consultation->first_name . " " . $consultation->last_name,
            'active'       => 'consultation',
            'consultation' => $consultation
        ];

        return view('admin.consultation.details', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();

        return redirect()->route('admin.consultation.index')->with('success', 'Consultation deleted successfully');
    }
}
