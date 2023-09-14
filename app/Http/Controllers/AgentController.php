<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Contract;
use App\Models\Service;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


class AgentController extends Controller
{
    

    public function dashboard(){

        $contracts = Contract::where('agent_id', auth()->user()->id)->get();
        $contracts_count = $contracts->count();

        $price = 0;
        foreach($contracts as $contract){
            $price += $contract->service->price;
        }

        $clients = Client::all()->count();

        return view('agent.dashboard', [ 'contracts' => $contracts, 'contracts_count' => $contracts_count,
        'price' => $price, 'clients' => $clients ]);
    }

    public function profilepage(){
        return view('agent.profile');
    }

    public function profile(Request $request){

        $user = Agent::find(Auth::guard('agent')->user()->id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:255',
            'affiliateId' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:10000', 
        ]);

        $profilePictureName = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePictureName = Uuid::uuid4()->toString() . '.' . $profilePicture->getClientOriginalExtension();
            Storage::disk('public')->put("uploads/profile_pictures/$profilePictureName", file_get_contents($profilePicture));
            $user->profile_picture = $profilePictureName;
        }

        if($request->password != '********************'){
            $user->password = Hash::make($request->password);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->affiliateId = $request->affiliateId;

                  

        $user->save();

        return redirect()->route('agent.profile');
    }

    public function addclient_page(){
        return view('agent.add_client');
    }

    public function addclient(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'cin' => 'required|string|unique:clients,cin',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255'
        ]);

        Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'cin' => $request->cin,
            'phone' => $request->phone ,
            'email' => $request->email,
            'address' => $request->address
        ]);

        return redirect()->route('agent.clients.add')->with('success', 'Client added successfully');
    }

    public function editclient_page(){
        $clients = Client::all();
        return view('agent.editclient_page', [ 'clients' => $clients]);
    }


    public function editclient_form($id){
        $client = Client::findOrFail($id);
        return view('agent.editclient_form', ['client' => $client]);
    }

    public function editclient(Request $request, $id){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'cin' => 'required|string',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255'
        ]);

        $client = Client::findOrFail($id);

        $clients = Client::where('cin','!=', $client->cin)->get();
        foreach($clients as $c){
            if($request->cin == $c->cin){
                return back()->with('error', 'CIN belongs to another user already');
            }
        }

        $client->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'cin' => $request->cin,
            'phone' => $request->phone ,
            'email' => $request->email,
            'address' => $request->address
        ]);

        return redirect()->route('agent.clients.edit')->with('success', 'Client successfully edited');

    }


    public function showclients(){
        $clients = Client::all();
        return view('agent.showclients', ['clients' => $clients]);
    }

    public function showclient($id){
        $client = Client::find($id);
        return view('agent.showclient', ['client' => $client]);
    }


    public function addcontract_page(){
        $clients = Client::all();
        $services = Service::all();

        return view('agent.add_contract', ['clients' => $clients, 'services' => $services]);
    }

    public function addcontract(Request $request){

        $request->validate([
            'client_id' => 'required|integer|exists:clients,id',
            'service_id' => 'required|integer|exists:services,id',
            'date_creation' => 'required|date',
            'date_expiration' => 'required|date|after:date_creation',
            'status' => 'required|string|max:255',
        ]);


        Contract::create([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'agent_id' => Auth::user()->id,
            'date_creation' => $request->date_creation ,
            'date_expiration' => $request->date_expiration,
            'status' => $request->status
        ]);

        return redirect()->route('agent.contracts.add')->with('success', 'Contract have been successfully added');
    }


    public function editcontract_page(){
        $contracts = Contract::where('agent_id', Auth::user()->id)->get();
        return view('agent.editcontract_page', [ 'contracts' => $contracts]);
    }


    public function editcontract_form($id){
        $contract = Contract::findOrFail($id);
        $clients = Client::all();
        $services = Service::all();
        return view('agent.editcontract_form', ['contract' => $contract, 'clients' => $clients, 'services' => $services]);
    }

    public function editcontract(Request $request, $id){

        $request->validate([
            'client_id' => 'required|integer|exists:clients,id',
            'service_id' => 'required|integer|exists:services,id',
            'date_creation' => 'required|date',
            'date_expiration' => 'required|date|after:date_creation',
            'status' => 'required|string|max:255',
        ]);

        $contract = Contract::FindOrFail($id);

        $contract->update([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'agent_id' => Auth::user()->id,
            'date_creation' => $request->date_creation ,
            'date_expiration' => $request->date_expiration,
            'status' => $request->status
        ]);


        return redirect()->route('agent.contracts.edit')->with('success', 'Contract successfully edited');
    }


    public function showcontracts(){
        $contracts = Contract::where('agent_id', Auth::user()->id)->get();
        return view('agent.showcontracts', ['contracts' => $contracts]);
    }

    public function showcontract($id){
        $contract = Contract::find($id);
        return view('agent.showcontract', ['contract' => $contract]);
    }






}
