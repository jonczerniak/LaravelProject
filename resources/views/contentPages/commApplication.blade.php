@extends('layout.master')

@section('content')
    @if(count($errors->all())>0)
        <div class="alert alert-primary">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- nav bar -->
    <section class="header">
        <div class="avistaLogo">
            <img class="img" src="{{ asset('Logo.PNG') }}" alt=" Logo" />
        </div>
        <div class="headerTitle">
            <p class="title-text">
                Electric Vehicle Charging Program
            </p>
        </div>
    </section>

    <!-- Main form body -->
    <section class="container">
        <!-- Greeting Information -->
        <div class="mb-4">
            <h4>BUSINESS APPLICATION</h4>
            <p class="lead">(for Electric Washington Customers)</p>
        </div>
    </section>

    <!-- Form Area -->
    <!-- Start Business Information -->
    <form method="post" name="commForm" onsubmit="return commFormValidation()" action="{{route('post-comm-application')}}">
        <section class="container">
            <h5>Business Information</h5>
            <hr />
            <div class="form-group">
                <input
                    type="text"
                    id="businessNameInput"
                    name="businessNameInput"
                    class="form-control"
                    placeholder="Business Name"
                />
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input
                        type="text"
                        id="facilityAddressInput"
                        name="facilityAddressInput"
                        class="form-control"
                        placeholder="Facility Address"
                    />
                </div>
                <div class="form-group col-md-3">
                    <input
                        type="text"
                        id="facilityCityInput"
                        name="facilityCityInput"
                        class="form-control"
                        placeholder="City"
                    />
                </div>
                <div class="form-group col-md-2">
                    <input
                        type="text"
                        id="facilityStateInput"
                        name="facilityStateInput"
                        class="form-control"
                        placeholder="State"
                    />
                </div>
                <div class="form-group col-md-2">
                    <input
                        type="text"
                        id="facilityZipInput"
                        name="facilityZipInput"
                        class="form-control"
                        placeholder="Zip Code"
                    />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <input
                        type="text"
                        id="mailingAddressInput"
                        name="mailingAddressInput"
                        class="form-control"
                        placeholder="Mailing Address (if different from the facility)"
                    />
                </div>
                <div class="form-group col-md-3">
                    <input
                        type="text"
                        id="mailingCityInput"
                        name="mailingCityInput"
                        class="form-control"
                        placeholder="City"
                    />
                </div>
                <div class="form-group col-md-2">
                    <input
                        type="text"
                        id="mailingStateInput"
                        name="mailingStateInput"
                        class="form-control"
                        placeholder="State"
                    />
                </div>
                <div class="form-group col-md-2">
                    <input
                        type="text"
                        id="mailingZipInput"
                        name="mailingZipInput"
                        class="form-control"
                        placeholder="Zip Code"
                    />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <input
                        type="text"
                        class="form-control"
                        id="pointOfContactInput"
                        name="pointOfContactInput"
                        placeholder="Point of Contact"
                    />
                </div>
                <div class="form-group col-md-4">
                    <input
                        type="text"
                        class="form-control"
                        id="contactTitleInput"
                        name="contactTitleInput"
                        placeholder="PoC Title"
                    />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                    <input
                        type="text"
                        class="form-control"
                        id="emailInput"
                        name="emailInput"
                        placeholder="E-Mail"
                    />
                </div>
                <div class="form-group col-md-5">
                    <input
                        type="tel"
                        class="form-control"
                        id="phoneInput"
                        name="phoneInput"
                        placeholder="Phone Number"
                    />
                </div>
            </div>
        </section>
        <!-- End Business Information -->

        <!-- Start Account Information -->
        <section class="container">
            <h5 class="mt-5"> Account Information</h5>
            <hr />

            <div class="form-group">
                <label for="CustomerInput"
                >Are you a current electric customer in Washington?</label
                >
                <select
                    name="CustomerInput"
                    id="CustomerInput"
                    class="form-control"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="AccountNumberInput"> Account Number</label>
                <input
                    type="text"
                    class="form-control"
                    id="AccountNumberInput"
                    name="AccountNumberInput"
                />
            </div>
        </section>
        <!-- End Account Information -->

        <!-- Start Employee Information -->
        <section class="container">
            <h5 class="mt-5">Employee Information</h5>
            <hr />
            <div class="form-group">
                <label for="numberOfEmployeesInput"
                >How many employees are at this facility?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="numberOfEmployeesInput"
                    name="numberOfEmployeesInput"
                />
            </div>
            <div class="form-group">
                <label for="commutingEmployeesInput"
                >How many ofyour employees commute to your facility with a plug-in
                    electric vehicle?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="commutingEmployeesInput"
                    name="commutingEmployeesInput"
                />
            </div>
            <div class="form-group">
                <label for="numberOfFacilityPortsInput"
                >How many electric vehicle charging port connections do you
                    currently have available at your facility?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="numberOfFacilityPortsInput"
                    name="numberOfFacilityPortsInput"
                />
            </div>
        </section>
        <!-- End Employee Information -->

        <!-- Start Other Information -->
        <section class="container">
            <h5 class="mt-5">Other Information</h5>
            <hr />
            <div class="form-group">
                <label for="fleetLightDutyVehiclesInput"
                >How many light duty fleet vehicles do you have at your
                    facility?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="fleetLightDutyVehiclesInput"
                    name="fleetLightDutyVehiclesInput"
                />
            </div>
            <div class="form-group">
                <label for="interestAddingEvFleetInput"
                >Are you interested in electric fleet vehicles and/or charging fleet
                    vehicles at your facility?</label
                >
                <select
                    name="interestAddingEvFleetInput"
                    id="interestAddingEvFleetInput"
                    class="form-control"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="facilityWifiInput"
                >Is your facility currently connected to a Wi-Fi system?</label
                >
                <select
                    name="facilityWifiInput"
                    id="facilityWifiInput"
                    class="form-control"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="distanceToPointsOfInterestInput"
                >What would you estimate is the average distance in miles from your
                    facility to a major park, shopping, restaurants, and/or similar
                    venues?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="distanceToPointsOfInterestInput"
                    name="distanceToPointsOfInterestInput"
                    placeholder="Distance in miles"
                />
            </div>
            <div class="form-group">
                <label for="evBenefitsInput"
                >What benefit would you realize by installing electric vehicle
                    charging for your employees and/or customers?</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="evBenefitsInput"
                    name="evBenefitsInput"
                />
            </div>

            <!--  Modal  -->
            <!-- Button trigger modal -->
            <button
                type="button"
                class="btn btn-primary mb-3"
                data-toggle="modal"
                data-target="#staticBackdrop"
            >
                User Agreement
            </button>
            <!-- Modal Content-->
            <div
                class="modal fade"
                id="staticBackdrop"
                data-backdrop="static"
                tabindex="-1"
                role="dialog"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                Modal title
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button
                                type="button"
                                class="btn btn-info"
                                id="back-to-top"
                            >
                                <i class="fas fa-fx fa-angle-up"></i>
                            </button>
                            @include('partials.termsAndConditions')
                        </div>
                        <div class="modal-footer">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="readAgreementInput"
                                    name="readAgreementInput"
                                />
                                <label
                                    for="readAgreemtnInput"
                                    class="form-check-label d-block"
                                    id="termsRead"
                                >I have read the user agreement</label
                                >
                            </div>
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    class="form-check-input d-block"
                                    id="acceptAgreementInput"
                                    name="acceptAgreementInput"
                                />
                                <label
                                    for="acceptAgreementInput"
                                    class="form-check-label"
                                    id="termsAccepted"
                                >I accept the terms of the user agreement</label
                                >
                            </div>
                            <div class="text-right">
                                <button
                                    type="button"
                                    class="btn btn-info"
                                    id="agreementSubmit"
                                    onclick="checkAgreement()"
                                >
                                    Submit Agreement
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input class="btn btn-primary"
                       type="submit"
                       name="submitResForm"
                       id="submitResForm"
                       value="Submit"
                       disabled>
            </div>
        </section>

        <!-- End Other Information -->
        {{csrf_field()}}
    </form>
    <footer>
        <p class="footerP">Electric Transporation Department</p>
        <p class="footerP">Contact info:</p>
        <p class="footerP">Email: (will link to a form)</p>
        <p class="footerP">Phone number???</p>
    </footer>
    <script src="{{ asset('jscript/commFormValidation.js') }}"></script>
    <script src="{{ asset('jscript/scrollTop.js') }}"></script>
@endsection
