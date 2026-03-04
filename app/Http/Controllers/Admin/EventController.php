<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderByDesc('date')->orderByDesc('id')->get();

        $data = [
            'heading' => "Event",
            'title' => "View Event ",
            'active' => 'event',
            'events' => $events
        ];
        return view('admin.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'heading' => "Event",
            'title' => "Add Event ",
            'active' => 'event',
        ];
        return view("admin.event.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateEvent($request);
        $data['picture'] = $this->uploadPicture($request);
        $data['parameters'] = $this->toArrayLines($request->input('parameters'));
        $data['why_attend'] = $this->toArrayLines($request->input('why_attend'));

        Event::create($data);

        return redirect()->route('event.index')->with('success', 'Event added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        $data = [
            'heading' => "Event  Detail",
            'title' => "View Event  Detail",
            'active' => 'event',
            'event' => $event
        ];
        return view('admin.event.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $event = Event::findOrFail($id);
        $data = [
            'heading' => 'Event',
            'title' => 'Enter Event Member',
            'active' => 'event',
            "event" => $event
        ];
        return view('admin.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Event::findOrFail($request->id);
        $data = $this->validateEvent($request, $event->id);
        $data['parameters'] = $this->toArrayLines($request->input('parameters'));
        $data['why_attend'] = $this->toArrayLines($request->input('why_attend'));

        $newPicture = $this->uploadPicture($request);
        if ($newPicture) {
            $this->deletePicture($event->picture);
            $data['picture'] = $newPicture;
        }

        $event->update($data);
        return redirect()->route('event.index')->with('success', 'Event  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $this->deletePicture($event->picture);
        $event->delete();

        return redirect()->back()->with('success', 'Event  deleted successfully');
    }

    private function validateEvent(Request $request, ?int $eventId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['nullable', 'string'],
            'long_description' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'start_time' => ['nullable', 'date_format:H:i'],
            'end_time' => ['nullable', 'date_format:H:i'],
            'speaker' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:scheduled,in_progress,completed,cancelled'],
            'event_type' => ['required', 'in:event,webinar'],
            'attendees' => ['nullable', 'integer', 'min:0'],
            'parameters' => ['nullable', 'string'],
            'why_attend' => ['nullable', 'string'],
            'picture' => [$eventId ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ], [
            'picture.required' => 'Event image is required.',
        ]);
    }

    private function uploadPicture(Request $request): ?string
    {
        if (! $request->hasFile('picture')) {
            return null;
        }

        $file = $request->file('picture');
        $directory = public_path('uploads/events');
        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);

        return 'uploads/events/' . $fileName;
    }

    private function deletePicture(?string $path): void
    {
        if (! $path) {
            return;
        }

        $fullPath = public_path($path);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    private function toArrayLines(?string $text): array
    {
        if (! $text) {
            return [];
        }

        return collect(preg_split('/\r\n|\r|\n/', $text))
            ->map(fn($item) => trim((string) $item))
            ->filter()
            ->values()
            ->all();
    }
}
