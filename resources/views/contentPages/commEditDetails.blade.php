@extends('layout.adminLayout')

@section('content')
    <h2>Commercial Application Details - Edit -</h2>
    <h4>Business Information</h4>
    <table class="table">
        <form name="commDetailsEditTable" method="post" action="{{ route('post-edit-comm-details') }}">
            <tr>
                <td>Business Name</td>
                <td>
                    <input type="text"
                           class="form-control"
                           id="businessNameInput"
                           name="businessNameInput"
                           value="{{ $commApp['businessName'] }}">
                </td>
            </tr>
            <tr>
                <td>Facility Address</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="facilityAddressInput"
                           id="facilityAddressInput"
                           value="{{ $commApp['facilityAddress'] }}">
                </td>
            </tr>
            <tr>
                <td>Facility City</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="facilityCityInput"
                           id="facilityCityInput"
                           value="{{ $commApp['facilityCity'] }}">
                </td>
            </tr>
            <tr>
                <td>Facility State</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="facilityStateInput"
                           id="facilityStateInput"
                           value="{{ $commApp['facilityState'] }}">
                </td>
            </tr>
            <tr>
                <td>Facility Zip Code</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="facilityZipInput"
                           id="facilityZipInput"
                           value="{{ $commApp['facilityZip'] }}">
                </td>
            </tr>
            <tr>
                <td>Mailing Address</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="mailingAddressInput"
                           id="mailingAddressInput"
                           value="{{ $commApp['mailingAddress'] }}">
                </td>
            </tr>
            <tr>
                <td>Mailing City</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="mailingCityInput"
                           id="mailingCityInput"
                           value="{{ $commApp['mailingCity'] }}">
                </td>
            </tr>
            <tr>
                <td>Mailing State</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="mailingStateInput"
                           id="mailingStateInput"
                           value="{{ $commApp['mailingState'] }}">
                </td>
            </tr>
            <tr>
                <td>Point of Contact</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="pointOfContactInput"
                           id="pointOfContactInput"
                           value="{{ $commApp['pointOfContact'] }}">
                </td>
            </tr>
            <tr>
                <td>Contact Title</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="contactTitleInput"
                           id="contactTitleInput"
                           value="{{ $commApp['contactTitle'] }}">
                </td>
            </tr>
            <tr>
                <td>Contact Email</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="emailInput"
                           id="emailInput"
                           value="{{ $commApp['email'] }}">
                </td>
            </tr>
            <tr>
                <td>Contact Phone</td>
                <td>
                    <input type="text"
                           class="form-control"
                           name="phoneInput"
                           id="phoneInput"
                           value="{{ $commApp['phoneNumber'] }}">
                </td>
            </tr>
    </table>
    <h4 class="mt-4">Additional Information</h4>
    <table class="table">
        <tr>
            <td>Avista Customer?</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="avistaCustomerInput"
                       id="avistaCustomerInput"
                       value="{{ $commApp['avistaCustomer'] }}">
            </td>
        </tr>
        <tr>
            <td>Avista Account Number</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="avistaAccountNumberInput"
                       id="avistaAccountNumberInput"
                       value="{{ $commApp['avistaAccountNumber'] }}">
            </td>
        </tr>
        <tr>
            <td>Number of Employees</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="numberOfEmployeesInput"
                       id="numberOfEmployeesInput"
                       value="{{ $commApp['numberOfEmployees'] }}">
            </td>
        </tr>
        <tr>
            <td>Number of Employees that commute with an EV</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="commutingEmployeesInput"
                       id="commutingEmployeesInput"
                       value=" {{ $commApp['commutingEmployees'] }}">
            </td>
        </tr>
        <tr>
            <td>Number of Charging ports currently at the facility</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="numberOfFacilityPortsInput"
                       id="numberOfFacilityPortsInput"
                       value="{{ $commApp['numberOfFacilityPorts'] }}">
            </td>
        </tr>
        <tr>
            <td>Number of EVs in the business fleet</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="fleetLightDutyVehiclesInput"
                       id="fleetLightDutyVehiclesInput"
                       value="{{ $commApp['fleetLightDutyVehicles'] }}">
            </td>
        </tr>
        <tr>
            <td>Interest in EV fleet expansion</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="interestAddingEvFleetInput"
                       id="interestAddingEvFleetInput"
                       value="{{ $commApp['interestAddingEvFleet'] }}">
            </td>
        </tr>
        <tr>
            <td>Facility has WiFi</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="facilityWiFiInput"
                       id="facilityWiFiInput"
                       @if($commApp['facilityWiFi'] == 1)
                       value="true"
                       @elseif($commApp ['facilityWiFi'] == 0)
                       value = "false"
                       @endif
                       >
            </td>
        </tr>
        <tr>
            <td>Distance to points of interest</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="distanceToPointsOfInterestInput"
                       id="distanceToPointsOfInterestInput"
                       value="{{ $commApp['distanceToPointsOfInterest'] }}">
            </td>
        </tr>
        <tr>
            <td>Reported EV benefits</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="evBenefitsInput"
                       id="evBenefitsInput"
                       value="{{ $commApp['evBenefits'] }}">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit"
                       class="form-control btn btn-primary"
                       value="Submit Updates">
            </td>
            <td>
                <a href="{{route('get-comm-admin-page')}}" class="btn btn-secondary">
                    Discard Updates
                </a>
            </td>
        </tr>
        <input type="hidden"
               id="hiddenIdInput"
               name="hiddenIdInput"
               value="{{ $commApp['id'] }}">
        {{csrf_field()}}
        </form>
    </table>
@endsection
