@extends('layout.adminLayout')

@section('content')
    @if(!empty($urlPath))
        <div class="alert alert-primary">
            <ul>
                <li>! Record Deleted !</li>
            </ul>
        </div>
    @endif
    <h2>Commercial Application Admin</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Business Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @if(count($commApps->all())>0)
            @foreach($commApps as $commApp)
                <tr>
                    <td>{{ $commApp['businessName'] }}</td>
                    <td>{{ $commApp['facilityAddress'] }}</td>
                    <td>{{ $commApp['facilityCity'] }}</td>
                    <td>{{ $commApp['facilityState'] }}</td>
                    <td>{{ $commApp['facilityZip'] }}</td>
                    <td><a href="{{ route('get-comm-app-details', $commApp['id']) }}" class="btn btn-info">Details</a></td>
                    <td><a href="{{ route('get-comm-delete-details', $commApp['id']) }}" class="btn btn-warning">Delete</a></td>
                </tr>
            @endforeach
        @else
            <td>
                the query is empty
            </td>
        @endif

        </tbody>
    </table>

@endsection
