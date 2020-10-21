<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;
use DataTables;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function participantsList($filter)
    {
        if($filter == null || $filter == 'All'){
            $model = Participant::query();
        }else{
            $model = Participant::where('race_category', $filter)->get();
        }
        return DataTables::of($model)->toJson();
    }
    public function participantsExport(){
        return Excel::download(new ParticipantsExport, 'participants.xlsx');
    }
    public function store(Request $request)
    {   
        $validated_data = $this->validateRequest($request);
        $participants = $this->registerParticipants($validated_data);
        return view('pages.results', compact('participants'));
    }
    public function checkAge($birthdate){
        $date = new DateTime($birthdate);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
    public function checkCategory($age){
        return ($age <= 18 ) ? 'Junior' : 'Senior'; 
    }
    public function combineEntry($entryOne, $entryTwo){
        return $entryOne . " " . $entryTwo;
    }
    public function validateRequest($data){
        return $this->validate($data, [
            'first_name.*' => 'required|min:2',
            'last_name.*' => 'required|min:2',
            'gender.*' => 'required',
            'address_1.*' => 'required',
            'address_2.*' => '',
            'birthday.*' => 'required|date',
            'contact_number.*' => 'required|numeric',
            'email_address.*' => 'required',
            'shirt_size.*' => 'required',
            'terms_and_condition' => 'required',
        ]);
    }
    public function registerParticipants($data){
        $participants = [];
        foreach ($data['first_name'] as $key => $datum) {
            $participant['age'] = $data['age'][$key] = $this->checkAge($data['birthday'][$key]);
            $participant['name'] = $data['name'][$key] = $this->combineEntry($data['first_name'][$key], $data['last_name'][$key]);
            $participant['address'] = $data['address'][$key] = $this->combineEntry($data['address_1'][$key], $data['address_2'][$key]);
            $participant['race_category'] = $data['race_category'][$key] = $this->checkCategory($data['age'][$key]);
            $participant['date_registered'] = $data['date_registered'][$key] = now();
            $participant['gender'] = $data['gender'][$key];
            $participant['email_address'] = $data['email_address'][$key];
            $participant['shirt_size'] = $data['shirt_size'][$key];
            $participant['contact_number'] = $data['contact_number'][$key];
            $created_participant = Participant::create($participant);
            array_push($participants, $created_participant);
        }
        return $participants;
    }
}
