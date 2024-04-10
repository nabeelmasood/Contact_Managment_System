@extends('contacts.layout')
@section('content')
 
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="m-0">Contact Information</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $contacts->name }}</h5>
            <h5 class="card-text">Email: {{ $contacts->email }}</h5>
            <h5 class="card-text">Phone: {{ $contacts->phone }}</h5>
            <h5 class="card-text">Address: {{ $contacts->address }}</h5>
        </div>
    </div>
</div>
@endsection
