@extends('layouts.admin')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($events as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ optional($event->date)->format('d M Y') }}</td>
                                    <td>{{ $event->start_time ? date('h:i A', strtotime($event->start_time)) : '-' }}</td>
                                    <td>{{ ucfirst($event->event_type ?? 'event') }}</td>
                                    <td>{{ $event->location ?? '-' }}</td>
                                    <td>
                                        @if ($event->status == 'scheduled')
                                            <span class="badge bg-primary">Scheduled</span>
                                        @elseif($event->status == 'in_progress')
                                            <span class="badge bg-warning text-dark">In Progress</span>
                                        @elseif($event->status == 'completed')
                                            <span class="badge bg-success">Completed</span>
                                        @elseif($event->status == 'cancelled')
                                            <span class="badge bg-danger">Cancelled</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('event.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('event.show', $event->id) }}" class="btn btn-info btn-sm" style="background-color: #0A245D; color: white;">Details</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No events found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
