<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Applicant;
use App\Http\Controllers\Controller;
use http\Url;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminMessage;
use App\Notifications\ApplicantMessage;
use App\Notifications\Admin;
use Illuminate\Support\Facades\Notification;
use Psr\Log\NullLogger;
use Exception;

//use Illuminate\Notifications\Notification;

class ApplicantController extends Controller
{
    // Getting Data & Posting
    use Notifiable;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getApplicant(Request $request){

        //$mobile = str_replace('', '', $request['mobile'] );

        // 1st Upload Sort
        if($request->hasFile('scannedidpassport')){
            //get filename with ext
            $filenameWithExt = $request->file('scannedidpassport')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get just the filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('scannedidpassport')->getClientOriginalExtension();
            // filename to store
            $filenameToStore = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('scannedidpassport')->storeAs('public/uploads/ids', $filenameToStore);
        }
        else {
            $filenameToStore = 'No_ScannedIDpassport.jpg';
        }
        // 2nd-Upload-Sort
        if($request->hasFile('proof_of_residence')){
            //get filename with ext
            $filenameWithExt = $request->file('proof_of_residence')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get just the filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('proof_of_residence')->getClientOriginalExtension();
            // filename to store
            $filenameToStore1 = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('proof_of_residence')->storeAs('public/uploads/residence', $filenameToStore1);
        }
        else {
            $filenameToStore1 = 'No_Proof_Of_Residence.jpg';
        }
        // 3rd Upload Sort
        if($request->hasFile('childbirth_cert')){
            //get filename with ext
            $filenameWithExt = $request->file('childbirth_cert')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get just the filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('childbirth_cert')->getClientOriginalExtension();
            // filename to store
            $filenameToStore2 = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('childbirth_cert')->storeAs('public/uploads/childbirthcert', $filenameToStore2);
        }
        else {
            $filenameToStore2 = 'No_ChildBirth_Certificate.jpg';
        }
        // 4th Upload sort
        if($request->hasFile('learners_report')){
            //get filename with ext
            $filenameWithExt = $request->file('learners_report')->getClientOriginalName();
            //remove-white-space
            $filenameWithExt = str_replace(' ', '', $filenameWithExt);
            //get-just-the-filename
            $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('learners_report')->getClientOriginalExtension();
            // filename to store
            $filenameToStore3 = $name.'_'.time().'.'.$extension;
            //Upload the file
            $path = $request->file('learners_report')->storeAs('public/uploads/childreport', $filenameToStore3);
        }
        else {
            $filenameToStore3 = 'No_Child_Report.jpg';
        }
        // Validating
        // Posting Data Into the DB
           try{
               Applicant::create([
                   //Parent / Guardian Details
                   'name' => $request['name'],
                   'email' => $request['email'],
                   'idpassport' => $request['idpassport'],
                   'mobile' => $request['mobile'],
                   'address' => $request['address'],
                   'city' => $request['city'],
                   //Child Details
                   'childfirstname' => $request['childfirstname'],
                   'childlastname' => $request['childlastname'],
                   'DOB' => $request['DOB'],
                   'education_level' => $request['education_level'],
                   'grade' => $request['grade'],
                   'gender' => $request['gender'],
                   // Enrollment Options
                   'enrol_type' => $request['enrol_type'],
                   'previous_school' => $request['previous_school'],
                   'startyear' => $request['startyear'],
                   'school_branch' => $request['school_branch'],
                   // Uploads Optional
                   'scannedidpassport' => $filenameToStore,
                   'proof_of_residence' => $filenameToStore1,
                   'childbirth_cert' => $filenameToStore2,
                   'learners_report' => $filenameToStore3,
               ]);
           }
           catch (QueryException $exception)
           {
               return back()->withError('Sorry Looks Like You Have Already Applied With Us !!! ', $request->input('email'))->withInput();
           }
        //  Sort Files To Be Attached::
        // Notifiable Setup
        $app_info = [
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'childfirstname' => $request['childfirstname'],
            'childlastname' => $request['childlastname'],
            'education_level' => $request['education_level'],
            'grade' => $request['grade'],
            'gender' => $request['gender'],
            'enrol_type' => $request['enrol_type'],
            'startyear' => $request['startyear'],
            'school_branch' => $request['school_branch'],
            // Attachments - Upload
            'scannedidpassport' => $filenameToStore,
            'proof_of_residence' => $filenameToStore1,
            'childbirth_cert' => $filenameToStore2,
            'learners_report' => $filenameToStore3,
        ];
        // Use the Above Data
        Notification::route('mail', 'webdeveloper@taalct.co.za')->notify( new AdminMessage($app_info));
        //Notification::route('mail', 'justin@taalct.co.za')->notify( new Admin($app_info));
        //Notification::route('mail', $request['email'])->notify( new ApplicantMessage($app_info));

        //Conditional

        switch ($request['school_branch']) {
            case "Midrand":
                Notification::route('mail', 'midrand@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Randburg"  :
                Notification::route('mail', 'randburg@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Kempton_Park":
                Notification::route('mail', 'kemptonreception@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Roodepoort":
                Notification::route('mail', 'roodepoort@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Hazyview":
                Notification::route('mail', 'hazyview@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Turffontein":
                Notification::route('mail', 'johannesburg@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Germiston":
                Notification::route('mail', 'beulapark@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "New_Havard":
                Notification::route('mail', 'info@newhavardcollege.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Pretoria":
                Notification::route('mail', 'glendale@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            case "Eastview":
                Notification::route('mail', 'eastview@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
            default:
                Notification::route('mail', 'collen@taalct.co.za')->notify( new AdminMessage($app_info));
                break;
        }

        /*
         *
         */

        // Close it Up
        return $this->success();
    }

    public function success()
    {
        //return route('/success');
        return redirect()->route('successPage');
    }

}
