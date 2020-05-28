@extends('layout.adminLayout')

@section('content')
    <section class="container mt-5">
        <div>
            <h1 class="display-3">Warning:</h1>
            <h3>You are about to delete a record. This action cannot be undone.</h3>
            <p class="lead">Are you sure you would like to delete:</p>
            <p>{{ $deleteRecord['id'] }}</p>
            <p><strong>Customer Number: </strong>{{ $deleteRecord['customerNumber'] }}</p>
            <p><strong>First Name: </strong>{{ $deleteRecord['firstName'] }}</p>
            <p><strong>Last Name: </strong>{{ $deleteRecord['lastName'] }}</p>
            <p><strong>Street Address: </strong>{{ $deleteRecord['streetAddress'] }}</p>
            <p><strong>City: </strong>{{ $deleteRecord['cityInput'] }}</p>
            <p><strong>State: </strong>{{ $deleteRecord['stateInput'] }}</p>
            <p><strong>Zip Code: </strong>{{ $deleteRecord['zipCode'] }}</p>
            <p><strong>Phone Number: </strong>{{ $deleteRecord['phoneNumber'] }}</p>
            <p><strong>Email: </strong>{{ $deleteRecord['email'] }}</p>
            <p><strong>Car Model: </strong>{{ $deleteRecord['carModel'] }}</p>
        </div>
        <div class="mb-5">
            <form method="post" action="{{route('post-delete-res-record')}}">
                <input type="submit" class="btn btn-danger" value="DELETE">
                <a class="btn btn-info" href="{{ route('get-res-admin-page') }}">Back to Admin Page</a>
                <input type="hidden" name="hiddenID" id="hiddenID" value="{{ $deleteRecord['id'] }}">
                {{csrf_field()}}
            </form>
        </div>
    </section>
@endsection
