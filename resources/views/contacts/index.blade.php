@extends('contacts.layout')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="m-0">Contacts List</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm mb-3" title="Add New Contact">
                        <i class="fa fa-plus"></i> Add New Contact
                    </a>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <a href="{{ url('/contact/' . $contact->id) }}" class="btn btn-info btn-sm action-btn" title="View Contact">
                                                <i class="fa fa-eye"></i> View
                                            </a>
                                            <a href="{{ url('/contact/' . $contact->id . '/edit') }}" class="btn btn-primary btn-sm action-btn" title="Edit Contact">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                            <form action="{{ url('/contact/' . $contact->id) }}" method="POST" style="display: inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm('Are you sure you want to delete this contact?')">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .action-btn {
        margin-right: 5px; /* Adjust this value to increase or decrease the spacing between action buttons */
    }
    .card-header {
        background-color: #343a40; /* Dark background color for card header */
    }
    .btn-success {
        background-color: #28a745; /* Green color for success button */
        border-color: #28a745;
    }
    .btn-info {
        background-color: #17a2b8; /* Blue color for info button */
        border-color: #17a2b8;
    }
    .btn-primary {
        background-color: #007bff; /* Blue color for primary button */
        border-color: #007bff;
    }
    .btn-danger {
        background-color: #dc3545; /* Red color for danger button */
        border-color: #dc3545;
    }
</style>

@endsection
