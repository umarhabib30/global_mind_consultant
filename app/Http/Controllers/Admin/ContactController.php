<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    /**
     * Display a listing of the messages.
     */
    public function index()
    {
        $messages = ContactSubmission::orderByDesc('id')->paginate(10);

        $data = [
            'heading' => "Contact Messages",
            'title'   => "View Contact Inquiries",
            'active'  => 'contact',
            'messages' => $messages
        ];

        return view('admin.contact.index', $data);
    }

    /**
     * Display the specified message.
     */
    public function show(string $id)
    {
        $message = ContactSubmission::findOrFail($id);

        $data = [
            'heading' => "Message from " . $message->name,
            'title'   => "Inquiry Details",
            'active'  => 'contact',
            'message' => $message
        ];

        return view('admin.contact.details', $data);
    }

    /**
     * Remove the message from the database.
     */
    public function destroy(string $id)
    {
        $message = ContactSubmission::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Message deleted successfully!');
    }
}
