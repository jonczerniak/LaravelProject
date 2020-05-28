<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commercial;
use App\ResForm;
use App\Contractor;
use App\evse_info;
use App\Residential_Job;


class ApplicationController extends Controller
{
    //Residential Application Functions
    public function getResApplication()
    {
        return view('contentPages.resApplication');
    }

    //thank you page
    public function thanksForSubmitting()
    {
        return view('contentPages.thank-you-page');
    }

    public function postResApplication(Request $request)
    {
        //think about changing this validation to javascript
        $this->validate($request, [
            'firstNameInput' => 'required',
            'lastNameInput' => 'required',
            'streetAddressInput' => 'required|min:3',
            'cityInput' => 'required|min:2',
            'stateInput' => 'required|min:2',
            'zipCodeInput' => 'required|min:5',
            'emailInput' => 'required|min:4',
            'yearInput' => 'required',
            'manufacturerInput' => 'required|min:2',
            'makeInput' => 'required:min:2',
            'wifiConnectionInput' => 'required',
            'homeElectricPanelLocationInput' => 'required|min:5',
            'chargerLocationInput' => 'required|min:5',
            'plansToMoveInput' => 'required|min:2'
        ]);

        //create database entry using ORM
        $resForm = new ResForm([
            'customerNumber' => $request->input('customerNumberInput'),
            'firstName' => $request->input('firstNameInput'),
            'streetAddress' => $request->input('streetAddressInput'),
            'lastName' => $request->input('lastNameInput'),
            'cityInput' => $request->input('cityInput'),
            'stateInput' => $request->input('stateInput'),
            'zipCode' => $request->input('zipCodeInput'),
            'phoneNumber' => $request->input('phoneInput'),
            'email' => $request->input('emailInput'),
            'carYear' => $request->input('yearInput'),
            'carManufacturer' => $request->input('manufacturerInput'),
            'carModel' => $request->input('makeInput'),
            'evCommuteRegularly' => $request->input('evCommuteRegularlyInput'),
            'employerName' => $request->input('employerNameInput'),
            'workplaceChargingAvail' => $request->input('workplaceChargingInput'),
            'evParkingOvernight' => $request->input('overnightParkingInput'),
            'wifiConnection' => $request->input('wifiConnectionInput'),
            'electricPanelLocation' => $request->input('homeElectricPanelLocationInput'),
            'chargerLocation' => $request->input('chargerLocationInput'),
            'wallCeilingDescription' => $request->input('wallCeilingDescriptionInput'),
            'plansToMove' => $request->input('plansToMoveInput'),
            'jobStatus' => "Not Scheduled"
        ]);

        $resForm->save();

        return redirect()->route('thank-you-page');
    }

    //Commercial Application Functions
    public function getCommApplication()
    {
        return view('contentPages.commApplication');
    }

    public function postCommApplication(Request $request)
    {
        $this->validate($request, [
            'businessNameInput' => 'required',
            'facilityAddressInput' => 'required',
            'facilityCityInput' => 'required',
            'facilityStateInput' => 'required',
            'facilityZipInput' => 'required',
            'pointOfContactInput' => 'required',
            'contactTitleInput' => 'required',
            'emailInput' => 'required',
            'phoneInput' => 'required',
            'CustomerInput' => 'required',
            'numberOfEmployeesInput' => 'required',
            'commutingEmployeesInput' => 'required',
            'numberOfFacilityPortsInput' => 'required',
            'facilityWifiInput' => 'required'
        ]);

        $commercialApp = new Commercial([
            'businessName' => $request->input('businessNameInput'),
            'facilityAddress' => $request->input('facilityAddressInput'),
            'facilityCity' => $request->input('facilityCityInput'),
            'facilityState' => $request->input('facilityStateInput'),
            'facilityZip' => $request->input('facilityZipInput'),
            'mailingAddress' => $request->input('mailingAddressInput'),
            'mailingCity' => $request->input('mailingCityInput'),
            'mailingState' => $request->input('mailingStateInput'),
            'mailingZip' => $request->input('mailingZipInput'),
            'pointOfContact' => $request->input('pointOfContactInput'),
            'contactTitle' => $request->input('contactTitleInput'),
            'email' => $request->input('emailInput'),
            'phoneNumber' => $request->input('phoneInput'),
            'Customer' => $request->input('CustomerInput'),
            'AccountNumber' => $request->input('AccountNumberInput'),
            'numberOfEmployees' => $request->input('numberOfEmployeesInput'),
            'commutingEmployees' => $request->input('commutingEmployeesInput'),
            'numberOfFacilityPorts' => $request->input('numberOfFacilityPortsInput'),
            'fleetLightDutyVehicles' => $request->input('fleetLightDutyVehiclesInput'),
            'interestAddingEvFleet' => $request->input('interestAddingEvFleetInput'),
            'facilityWiFi' => $request->input('facilityWifiInput'),
            'distanceToPointsOfInterest' => $request->input('distanceToPointsOfInterestInput'),
            'evBenefits' => $request->input('evBenefitsInput')
        ]);

        $commercialApp->save();

        return redirect()->route('thank-you-page');
    }


    //Admin Functions-----------------------
    public function getAdminPage()
    {
        return view('contentPages.appAdmin');
    }

    public function getResAdminPage()
    {
        $resAppsAll = ResForm::all();

        return view('contentPages.resAdmin', compact('resAppsAll'));

    }

    public function getResAppDetails($id)
    {
        $resApp = ResForm::where('id', $id)->first();

        return view('contentPages.resApplicationDetails', compact('resApp'));
    }

    public function getCommAdminPage()
    {
        $commApps = Commercial::all();
        if (!$commApps) {
            return view('contentPages.pageError');
        }

        return view('contentPages.commAdmin', compact('commApps'));
    }

    public function getCommAppDetails($id)
    {
        $commApp = Commercial::where('id', $id)->first();
        if (!$commApp) {
            return view('contentPages.pageError');
        }
        return view('contentPages.commApplicationDetails', compact('commApp'));
    }

    //ADMIN UPDATE Functions ----------------------
    public function getEditResDetails($id)
    {
        $resApp = ResForm::where('id', $id)->first();
        if (!$resApp) {
            return view('contentPages.pageError');
        }
        return view('contentPages.resEditDetails', compact('resApp'));
    }

    public function postEditResDetails(Request $request)
    {
        $AppID = $request->input('hiddenIdInput');
        $resApp = ResForm::where('id', $AppID)->first();

        //update calls
        $resApp['customerNumber'] = $request->input('customerNumberInput');
        $resApp['firstName'] = $request->input('firstNameInput');
        $resApp['streetAddress'] = $request->input('streetAddressInput');
        $resApp['lastName'] = $request->input('lastNameInput');
        $resApp['cityInput'] = $request->input('cityInput');
        $resApp['stateInput'] = $request->input('stateInput');
        $resApp['zipCode'] = $request->input('zipCodeInput');
        $resApp['phoneNumber'] = $request->input('phoneInput');
        $resApp['email'] = $request->input('emailInput');
        $resApp['carYear'] = $request->input('yearInput');
        $resApp['carManufacturer'] = $request->input('manufacturerInput');
        $resApp['carModel'] = $request->input('makeInput');
        $resApp['evCommuteRegularly'] = $request->input('evCommuteRegularlyInput');
        $resApp['employerName'] = $request->input('employerNameInput');
        $resApp['workplaceChargingAvail'] = $request->input('workplaceChargingInput');
        $resApp['evParkingOvernight'] = $request->input('overnightParkingInput');
        $resApp['wifiConnection'] = $request->input('wifiConnectionInput');
        $resApp['electricPanelLocation'] = $request->input('homeElectricPanelLocationInput');
        $resApp['chargerLocation'] = $request->input('chargerLocationInput');
        $resApp['wallCeilingDescription'] = $request->input('wallCeilingDescriptionInput');
        $resApp['plansToMove'] = $request->input('plansToMoveInput');

        $resApp->save();

        return redirect()->route('get-res-app-details', $resApp['id']);
    }

    public function getEditCommDetails($id)
    {
        $commApp = Commercial::where('id', $id)->first();

        return view('contentPages.commEditDetails', compact('commApp'));

    }

    public function postEditCommDetails(Request $request)
    {
        $commApp = Commercial::where('id', $request->input('hiddenIdInput'))->first();


        $commApp['businessName'] = $request->input('businessNameInput');
        $commApp['facilityAddress'] = $request->input('facilityAddressInput');
        $commApp['facilityCity'] = $request->input('facilityCityInput');
        $commApp['facilityState'] = $request->input('facilityStateInput');
        $commApp['facilityZip'] = $request->input('facilityZipInput');
        $commApp['mailingAddress'] = $request->input('mailingAddressInput');
        $commApp['mailingCity'] = $request->input('mailingCityInput');
        $commApp['mailingState'] = $request->input('mailingStateInput');
        $commApp['mailingZip'] = $request->input('mailingZipInput');
        $commApp['pointOfContact'] = $request->input('pointOfContactInput');
        $commApp['contactTitle'] = $request->input('contactTitleInput');
        $commApp['email'] = $request->input('emailInput');
        $commApp['phoneNumber'] = $request->input('phoneInput');
        $commApp['Customer'] = $request->input('avisatCustomerInput');
        $commApp['AccountNumber'] = $request->input('AccountNumberInput');
        $commApp['numberOfEmployees'] = $request->input('numberOfEmployeesInput');
        $commApp['commutingEmployees'] = $request->input('commutingEmployeesInput');
        $commApp['numberOfFacilityPorts'] = $request->input('numberOfFacilityPortsInput');
        $commApp['fleetLightDutyVehicles'] = $request->input('fleetLightDutyVehiclesInput');
        $commApp['interestAddingEvFleet'] = $request->input('interestAddingEvFleetInput');
        $commApp['facilityWiFi'] = $request->input('facilityWifiInput');
        $commApp['distanceToPointsOfInterest'] = $request->input('distanceToPointsOfInterestInput');
        $commApp['evBenefits'] = $request->input('evBenefitsInput');


        $commApp->save();

        return redirect()->route('get-comm-admin-page');
    }


    //ADMIN DELETE Functions--------------------------------------------------------------------
    public function getDeleteDetails($id)
    {
        $deleteRecord = ResForm::where('id', $id)->first();

        return view('contentPages.resDeleteWarning', compact('deleteRecord'));
    }

    public function postDeleteResRecord(Request $request)
    {
        $deleteRecord = ResForm::where('id', $request->input('hiddenID'))->first();

        if (!$deleteRecord) {
            return view('contentPages.pageError');
        }

        $deleteRecord->delete();
        $deleteFlag = 'deleted';

        return redirect()->route('get-res-admin-page', compact('deleteFlag'));
    }

    //commercial delete functions
    public function getCommDeleteDetails($id)
    {
        $deleteRecord = Commercial::where('id', $id)->first();

        if (!$deleteRecord) {
            return view('contentPages.pageError');
        }
        return view('contentPages.commDeleteWarning', compact('deleteRecord'));
    }

    public function postDeleteCommRecord(Request $request)
    {
        $deletedRecord = Commercial::where('id', $request->input('hiddenID'))->first();
        $urlPath = $request->path();
        if (!$deletedRecord) {
            return view('contentPages.pageError');
        }
        $deletedRecord->delete();

        return redirect()->route('get-comm-admin-page', compact('urlPath'));
    }

    //Scheduling functions -------------------------------------------------
    public function getResScheduling($id)
    {
        //get all Contractors
        $contractors = Contractor::all();
        //get residential evse's
        $evse_info = evse_info::all();
        if(!$evse_info){
            return view('contentPages.pageError');
        }

        $resApp = ResForm::where('id', $id)->first();
        return view('contentPages.resScheduleContractor', compact('contractors', 'evse_info', 'resApp'));
    }

    public function postCreateResInstallJob(Request $request)
    {
        //extract hidden ID
        $resApp = ResForm::where('id', $request->input('hiddenID'))->first();

        if (!$resApp) {
            return view('contentPages.pageError');
        }

        //first change the job status in applicant
        $resApp['jobStatus'] = "Scheduled";
        $resApp->save();
        $adminNotification = ['adminNotification' => "jobScheduled"];
        $resAppsAll = ResForm::all();

        //TODO: Check to see if job already exists

        //second create job in job table
        $newJob = new Residential_Job([
            'customer_id' => $request->input('hiddenID'),
            'sent_to_contractor'=> date('Y-m-d'),
            'contractor_id'=> $request->input('contractorSelectInput'),
            'jobStatus' => $resApp['jobStatus'],
            'job_type' => "Installation",
            'evse_installed_id'=> $request->input('evseTypeInput')
        ]);

        $newJob->save();

        return view('contentPages.resAdmin', compact('adminNotification'), compact('resAppsAll'));
    }

    //RESIDENTIAL JOB ADMINISTRATION -------------------------------------
    public function getResJobAdmin(){
        //query all residential applicants
        //query all residential jobs
        $resApps = ResForm::all();
        $resJobs = Residential_Job::all();
        //query all evse station types
        $evses = evse_info::all();
        //query all contractors
        $contractors = Contractor::all();

        // pass all jobs and applications to the page

        return view('jobAdmin.resJobAdminList', compact('resApps', 'resJobs', 'evses', 'contractors'));
    }

    public function getResJobDetails($id){

        return view('jobAdmin.resJobDetails');

    }
    
}
