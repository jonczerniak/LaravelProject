@extends('layout.adminLayout')

@section('content')
    <h2>Residential Application Details</h2>
    <h4>Personal Information</h4>
    <table class="table">
        <tr>
            <td>Application Number</td>
            <td>{{ $resApp['customerNumber'] }}</td>
        </tr>
        <tr>
            <td>Applicant's Name</td>
            <td>{{ $resApp['firstName']. " ". $resApp['lastName'] }}</td>
        </tr>
        <tr>
            <td>Street Address</td>
            <td>{{ $resApp['streetAddress'] }}</td>
        </tr>
        <tr>
            <td>City</td>
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
    <h4 class="mt-4">Vehicle Information</h4>
    <table class="table">
        <tr>
            <td>Has Electric Vehicle?
            </td>
            <td>
                Add a question in the form about having an electric vehicle
            </td>
        </tr>
        <tr>
            <td>Vehicle Manufacturer</td>
            <td>{{ $resApp['carManufacturer'] }}</td>
        </tr>
        <tr>
            <td>Vechicle Model</td>
            <td>{{ $resApp['carModel'] }}</td>
        </tr>
        <tr>
            <td>Vehicle Year</td>
            <td>{{ $resApp['carYear'] }}</td>
        </tr>
    </table>
    <h4 class="mt-4">Additional Information</h4>
    <table class="table">
        <tr>
            <td>Commute Regularly with EV?</td>
            <td>{{ $resApp['evCommuteRegularly'] }}</td>
        </tr>
        <tr>
            <td>Employer</td>
            <td>{{ $resApp['employerName'] }}</td>
        </tr>
        <tr>
            <td>Employer offer EV charging?</td>
            <td>{{ $resApp['workplaceCharingAvail'] }}</td>
        </tr>
        <tr>
            <td>Parks EV overnight at:</td>
            <td>{{ $resApp['evParkingOvernight'] }}</td>
        </tr>
        <tr>
            <td>Has Wifi?</td>
            <td>{{ $resApp['wifiConnection'] }}</td>
        </tr>
        <tr>
            <td>Electric Panel Location:</td>
            <td>{{ $resApp['electricPanelLocation'] }}</td>
        </tr>
        <tr>
            <td>Desired Charger Location in relation to electric panel</td>
            <td>{{ $resApp['chargerLocation'] }}</td>
        </tr>
        <tr>
            <td>Wall and ceiling condition</td>
            <td>{{ $resApp['wallCeilingDescription'] }}</td>
        </tr>
        <tr>
            <td>Plans to move:</td>
            <td>{{ $resApp['plansToMove'] }}</td>
        </tr>
        <tr class="mb-5 mt-5">
            <td colspan="2">
                <a href="{{route('get-res-admin-page')}}" class="btn btn-info">Back to Admin</a>
                <a class="btn btn-secondary" href="{{ route('get-edit-res-details', $resApp['id']) }}">Update Record</a>
                <a href="{{ route('get-res-scheduler', $resApp['id']) }}" class="btn btn-warning">Schedule Contractor</a>
            </td>
        </tr>
    </table>
@endsection
