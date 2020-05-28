@extends('layout.master')

@section('content')
    @if(count($errors->all())>0)
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <!-- nav bar -->
    <section class="header">
        <div class="avistaLogo">
            <img class="img" src="{{asset('Logo.PNG')}}" alt=" Logo"/>
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
        <article class="greetingContainer mb-4">
            <div>
                <h4>RESIDENTIAL APPLICATION</h4>
                <p class="lead">(for Electric Washington Customers)</p>
                <p>
                    To join  EV Charging Program please complete and submit
                    this application. Once we receive your information, we'll contact
                    you on how to get started.
                </p>
            </div>
        </article>
    </section>

    <!-- Form Area -->
    <!-- Start Customer Information -->
    <form method="post" name="resForm" onsubmit="return resFormValidation()"
          action="{{ route('res-application-create') }}">
        <section class="container">
            <h5>Customer Information</h5>
            <hr/>
            <div class="form-group">
                <input
                    type="text"
                    id="customerNumberInput"
                    name="customerNumberInput"
                    class="form-control"
                    placeholder=" Account Number"
                />
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        id="firstNameInput"
                        name="firstNameInput"
                        placeholder="First Name"
                    />
                </div>
                <div class="form-group col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        id="lastNameInput"
                        name="lastNameInput"
                        placeholder="LastName"
                    />
                </div>
            </div>
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    id="streetAddressInput"
                    name="streetAddressInput"
                    placeholder="Street Address"
                />
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input
                        type="text"
                        class="form-control"
                        id="cityInput"
                        name="cityInput"
                        placeholder="City"
                    />
                </div>
                <div class="form-group col-md-4">
                    <input
                        class="form-control"
                        type="text"
                        id="stateInput"
                        name="stateInput"
                        value="WA"
                    />
                </div>
                <div class="form-group col-md-4">
                    <input
                        type="text"
                        class="form-control"
                        id="zipCodeInput"
                        name="zipCodeInput"
                        placeholder="Zip Code"
                    />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input
                        type="tel"
                        class="form-control"
                        id="phoneInput"
                        name="phoneInput"
                        placeholder="Phone (numbers only)"
                    />
                </div>
                <div class="form-group col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        id="emailInput"
                        name="emailInput"
                        placeholder="Email"
                    />
                </div>
            </div>
        </section>
        <!-- End Customer Information -->


        <!-- Start Electric Vehicle Information -->
        <section class="container">
            <h5 class="mt-5">Electric Vehicle Information</h5>
            <hr/>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <select name="yearInput" id="yearInput" class="form-control">
                        <option value="">Year</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <select
                        class="form-control"
                        name="manufacturerInput"
                        id="manufacturerInput"
                    >
                        <option value="default">Make</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <select name="makeInput" id="makeInput" class="form-control">
                        <option value="model">Model</option>
                    </select>
                </div>
            </div>
        </section>
        <!-- End Electric Vehicle Information -->

        <!-- Start Additional Information -->
        <section class="container">
            <h5 class="mt-5">Additional Information</h5>
            <hr/>
            <div class="form-group">
                <label for="evCommuteRegularlyInput"
                >Do you plan to work regularly with your electric vehicle?</label
                >
                <select
                    class="form-control"
                    name="evCommuteRegularlyInput"
                    id="evCommuteRegularlyInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="employerNameInput"
                >If applicable, what is the name of your employer?</label
                >
                <input
                    class="form-control"
                    type="text"
                    id="employerNameInput"
                    name="employerNameInput"
                />
            </div>
            <div class="form-group">
                <label for="workplaceChargingInput"
                >Does your employer offer workplace charging for your EV?</label
                >
                <select
                    class="form-control"
                    name="workplaceChargingInput"
                    id="workplaceChargingInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="overnightParkingInput"
                >Where do normally park your EV overnight?</label
                >
                <select
                    class="form-control"
                    name="overnightParkingInput"
                    id="overnightParkingInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="Attached Garage">Attached Garage</option>
                    <option value="Detached Garage">Detached Garage</option>
                    <option value="Carport">Carport</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wifiConnectionInput"
                >Is your home connected to a Wi-Fi system?</label
                >
                <select
                    class="form-control"
                    name="wifiConnectionInput"
                    id="wifiConnectionInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="homeElectricPanelLocationInput"
                >Where is the electrical panel located?</label
                >
                <input
                    class="form-control"
                    type="text"
                    id="homeElectricPanelLocationInput"
                    name="homeElectricPanelLocationInput"
                />
            </div>
            <div class="form-group">
                <label for="chargerLocationInput"
                >In relation to the electric panel, where would you like to locate
                    the charger?</label
                >
                <input
                    class="form-control"
                    type="text"
                    id="chargerLocationInput"
                    name="chargerLocationInput"
                />
            </div>
            <div class="form-group">
                <label for="wallCeilingDescriptionInput"
                >Which best describes the walls and ceilings for the desired charger
                    location?</label
                >
                <select
                    class="form-control"
                    name="wallCeilingDescriptionInput"
                    id="wallCeilingDescriptionInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="Open Studs">Open Studs</option>
                    <option value="Drywalled">Drywalled but not finished</option>
                    <option value="Finished">Finished</option>
                </select>
            </div>
            <div class="form-group">
                <label for="plansToMoveInput"
                >Do you have plans to move in the next three years?</label
                >
                <select
                    class="form-control"
                    name="plansToMoveInput"
                    id="plansToMoveInput"
                >
                    <option value="--">-- Please Choose --</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
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
                <div class="modal-dialog" id="modal-dialog" role="document">
                    <div class="modal-content" id="modal-content">
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
        <!-- End Additional Information -->
        {{csrf_field()}}
    </form>
    <footer>
        <p class="footerP">Electric Transporation Department</p>
        <p class="footerP">Contact info:</p>
        <p class="footerP">Email: (will link to a form)</p>
        <p class="footerP">Phone number???</p>
    </footer>
    <script src="{{ asset('jscript/resFormValidation.js') }}"></script>
    <script src="{{ asset('jscript/scrollTop.js') }}"></script>

@endsection
