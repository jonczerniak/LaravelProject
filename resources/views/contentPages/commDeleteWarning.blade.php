@extends('layout.adminLayout')

@section('content')

    <section class="container mt-5">
        <div>
            <h1 class="display-3">Warning:</h1>
            <h3>You are about to delete a record. This action cannot be undone.</h3>
            <p class="lead">Are you sure you would like to delete:</p>
            <p>{{ $deleteRecord['id'] }}</p>
            <p><strong>Business Name: </strong>{{ $deleteRecord['businessName'] }}</p>
            <p><strong>Facility Address: </strong>{{ $deleteRecord['facilityAddress'] }}</p>
            <p><strong>Facility City: </strong>{{ $deleteRecord['facilityCity'] }}</p>
            <p><strong>Facility State: </strong>{{ $deleteRecord['facilityState'] }}</p>
            <p><strong>Point of Contact: </strong>{{ $deleteRecord['pointOfContact'] }}</p>
            <p><strong>Number of Employees: </strong>{{ $deleteRecord['numberOfEmployees'] }}</p>

        </div>
        <div class="mb-5">
            <form method="post" action="{{route('post-delete-comm-record')}}">
                <input type="submit" class="btn btn-danger" value="DELETE">
                <a class="btn btn-info" href="{{ route('get-comm-admin-page') }}">Back to Admin Page</a>
                <input type="hidden" name="hiddenID" id="hiddenID" value="{{ $deleteRecord['id'] }}">
                {{csrf_field()}}
            </form>
        </div>
    </section>
@endsection
