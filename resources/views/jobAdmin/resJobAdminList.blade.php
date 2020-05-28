@extends('layout.adminLayout')

@section('content')

    <!-- Add alert notifications in this area -->
    <h2>Residential Application Admin</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Job Number</th>
            <th>Job Type</th>
            <th>Applicant</th>
            <th>Contractor Assigned</th>
            <th>Date Scheduled</th>
            <th>EVSE to be Installed</th>
            <th>Job Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @if(count($resJobs->all())>0)
            @foreach($resJobs as $resJob)
                <tr>
                    <td class="my-auto">{{ $resJob['jobID'] }}</td>
                    <!-- nested for each loop that connects customer id
                    to the customer data-->
                    <!-- Job Type -->
                    <td>{{ $resJob['job_type'] }}</td>

                    <!-- Applicant Name -->
                    @foreach($resApps as $resApp)
                        @if($resApp['id'] == $resJob['customer_id'])
                            <td>{{ $resApp['firstName']. " ". $resApp['lastName'] }}</td>
                        @endif
                    @endforeach

                    <!--Contractors Assigned -->
                    @foreach($contractors as $contractor)
                        @if($resJob['contractor_id'] == $contractor['ID'])
                            <td>{{ $contractor['first_name']. " ". $contractor['last_name']. " / ". $contractor['company_name'] }}</td>
                        @endif

                    @endforeach

                    <td>{{ $resJob['sent_to_contractor'] }}</td>
                    <!-- EVSEs -->
                    @foreach($evses as $evse)
                        @if($resJob['evse_installed_id'] == $evse['evse_id'])
                            <td>{{ $evse['make']. " ". $evse['model'] }}</td>
                        @endif
                    @endforeach
                    <!--Job Status-->
                    <td>{{ $resJob['jobStatus'] }}</td>
                    <td><a href="{{ route('get-res-job-details', $resJob['jobID']) }}" class="btn btn-info my-auto">Details</a></td>
                    <td><a href="" class="btn btn-warning">Delete</a></td>
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
