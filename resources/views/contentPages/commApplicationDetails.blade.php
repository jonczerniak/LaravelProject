@extends('layout.adminLayout')

@section('content')
    <h2>Commercial Application Details</h2>
    <h4>Business Information</h4>
    <hr>
    <table class="table">
        <tr>
            <td>Business Name</td>
            <td>{{ $commApp['businessName'] }}</td>
        </tr>
        <tr>
            <td>Facility Address</td>
            <td>{{ $commApp['facilityAddress'] }}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $commApp['facilityCity'] }}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{ $commApp['facilityState'] }}</td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>{{ $commApp['facilityZip'] }}</td>
        </tr>
        <!-- Check to see if applicant entered a different
        mailing address-->
        @if(!empty($commApp['mailingAddress']))
            <tr>
                <td>Mailing Address</td>
                <td>{{ $commApp['mailingAddress'] }}</td>
            </tr>
            <tr>
                <td>Mailing City</td>
                <td>{{ $commApp['mailingCity'] }}</td>
            </tr>
            <tr>
                <td>Mailing State</td>
                <td>{{ $commApp['mailingState'] }}</td>
            </tr>
            <tr>
                <td>Mailing Zip</td>
                <td>{{ $commApp['mailingZip'] }}</td>
            </tr>
            @else
            <tr>
                <td colspan="2">Mailing address same as facility address</td>
            </tr>
        @endif
        <tr>
            <td>Point of Contact</td>
            <td>{{ $commApp['pointOfContact'] }}</td>
        </tr>
        <tr>
            <td>Contact Title</td>
            <td>{{ $commApp['contactTitle'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $commApp['email'] }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{ $commApp['phoneNumber'] }}</td>
        </tr>
    </table>

    <h4>Additional Information</h4>
    <table class="table">

        @if(!empty($commApp['avistaCustomer']) && $commApp['avistaCustomer'] == 'Yes')
            <tr>
                <td>Avista Customer?</td>
                <td>{{ $commApp['avistaCustomer'] }}</td>
            </tr>
            <tr>
                <td>Avista Account Number</td>
                <td>{{ $commApp['avistaAccountNumber'] }}</td>
            </tr>
        @else
            <tr>
                <td>Avista Customer</td>
                <td colspan="2">Not an Avista Customer</td>
            </tr>
        @endif
        <tr>
            <td>Number of Employees</td>
            <td>{{ $commApp['numberOfEmployees'] }}</td>
        </tr>
        <tr>
            <td>Number of Employees that commute with an EV?</td>
            <td>{{ $commApp['commutingEmployees'] }}</td>
        </tr>
        <tr>
            <td>Number of Charging ports currently at the facility</td>
            <td>{{ $commApp['numberOfFacilityPorts'] }}</td>
        </tr>
        <tr>
            <td>Number of EVs in business fleet</td>
            <td>{{ $commApp['fleetLightDutyVehicles'] }}</td>
        </tr>
        <tr>
            <td>Interest in EV fleet expansion</td>
            @if($commApp['interestAddingEvFleet'] == 1)
            <td>true</td>
            @else
            <td>false</td>
            @endif
        </tr>
        <tr>
            <td>Facility has Wi-Fi</td>
            @if($commApp['facilityWiFi'] == 1)
            <td>true</td>
            @else
            <td>false</td>
            @endif
        </tr>
        <tr>
            <td>Distance to points of interest</td>
            <td>{{ $commApp['distanceToPointsOfInterest'] }}</td>
        </tr>
        <tr>
            <td>Reported EV benefits</td>
            <td>{{ $commApp['evBenefits'] }}</td>
        </tr>
        <tr class="mb-5 mt-5">
            <td colspan="2">
                <a href="{{route('get-comm-admin-page')}}" class="btn btn-info">Back to Admin</a>
                <a class="btn btn-secondary" href="{{ route('get-edit-comm-details', $commApp['id']) }}">Update Record</a>
            </td>
        </tr>
    </table>
@endsection
