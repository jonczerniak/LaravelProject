@extends('layout.adminLayout')

@section('content')
    <h1>Residential Job Details</h1>
    <h4>Job Info</h4>
    <table class="table">
        <tr>
            <td>Job ID</td>
            <td>ID number</td>
        </tr>
        <tr>
            <td>Job Status</td>
            <td></td>
        </tr>
        <h4>Customer Information</h4>
        <tr>
            <td>Application Date</td>
            <td>date</td>
        </tr>
        <tr>
            <td>Dat</td>
            <td>{{ $resApp['cityInput'] }}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{ $resApp['stateInput'] }}</td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>{{ $resApp['zipCode'] }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{ $resApp['phoneNumber'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $resApp['email'] }}</td>
        </tr>
    </table>

@endsection
