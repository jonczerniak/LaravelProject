@extends('layout.adminLayout')

@section('content')

    <h1>Schedule a contractor</h1>

    <div class="appInfo mt-3">
        <h4 class="mb-4">Applicant Information:</h4>
        <p><strong>Customer Number: </strong>{{ $resApp['customerNumber'] }}</p>
        <p><strong>First Name: </strong>{{ $resApp['firstName'] }}</p>
        <p><strong>Last Name: </strong>{{ $resApp['lastName'] }}</p>
        <p><strong>Street Address: </strong>{{ $resApp['streetAddress'] }}</p>
        <p><strong>City: </strong>{{ $resApp['cityInput'] }}</p>
        <p><strong>State: </strong>{{ $resApp['stateInput'] }}</p>
        <p><strong>Zip Code: </strong>{{ $resApp['zipCode'] }}</p>
        <p><strong>Phone Number: </strong>{{ $resApp['phoneNumber'] }}</p>
        <p><strong>Email: </strong>{{ $resApp['email'] }}</p>
    </div>


    <p class="mt-3"><strong>Contractors available:</strong></p>
    <form method="post" action="{{route('post-create-res-install-job')}}">
        <div class="form-group">
            <select class="form-control" name="contractorSelectInput" id="contractorSelectInput">
                <option value="">-- Please Select a Contractor --</option>
                @foreach($contractors as $contractor)
                    <option value="{{ $contractor['ID'] }}">
                        {{ $contractor['first_name']. " ". $contractor['last_name']. " - ". $contractor['company_name'] }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <p class="mt-2"><strong>EVSE Assigned to job:</strong></p>
            <select class="form-control" name="evseTypeInput" id="evseTypeInput" class="mt-4">
                <option value="">-- Please Select an EVSE --</option>
                @if(!empty($evse_info))
                    @foreach($evse_info as $evse)
                        <option value="{{ $evse['evse_id'] }}">
                            {{ $evse['make']. ": ". $evse['model']. "  -- networked station: ". $evse['wifi_enabled']. "--" }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="mt-5 mb-5">

            <input type="submit" value="Create Job" class="btn btn-warning">
            <input type="hidden" name="hiddenID" id="hiddenID" value="{{ $resApp['id'] }}">
            <a href="{{ route('get-res-app-details', $resApp['id']) }}" class="btn btn-secondary">Back to details</a>
            <a href="{{ route('get-res-admin-page') }}" class="btn btn-secondary">Back to admin</a>
        {{csrf_field()}}
        </div>
    </form>


@endsection
