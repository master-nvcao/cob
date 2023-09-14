<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Service;
use App\Models\Contract;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class AdminController extends Controller
{
    

    public function dashboard(){

        $contracts = Contract::all();

        $conctracts_count = $contracts->count();

        $total_price = 0;
        foreach($contracts as $contract){
            $total_price += $contract->service->price;
        }

        $companies = Company::all();
        $companies_count = $companies->count();

        $services = Service::all()->count();
        $clients = Client::all()->count();


        return view('admin.dashboard', ['contracts' => $conctracts_count, 'price' => $total_price,
        'companies_count' => $companies_count ,'companies' => $companies, 
        'services' => $services, 'clients' => $clients ]);
    }

    public function profilepage(){
        return view('admin.profile');
    }

    public function profile(Request $request){

        $user = Admin::find(Auth::guard('admin')->user()->id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'admin_key' => 'required|string|max:255',
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
        $user->admin_key = $request->admin_key;
        $user->save();      


        return redirect()->route('admin.profile');

    }
    

    public function addcompany_page(){
        return view('admin.add_company');
    }

    public function addcompany(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:10000', 
        ]);

        $logoName = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = Uuid::uuid4()->toString() . '.' . $logo->getClientOriginalExtension();
            Storage::disk('public')->put("uploads/companies_logos/$logoName", file_get_contents($logo));
        }

        if($logoName == null)
            $logoName = "default.png";
        
        
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'website' => $request->website,
            'description' => $request->description,
            'logo' => $logoName,
        ]);

        return redirect()->route('admin.companies.show')->with('success','Company added successfully');
    }

    public function editcompany_page(){
        $companies = Company::all();
        return view('admin.editcompany_page', [ 'companies' => $companies]);
    }

    public function editcompany_form($id){
        $company = Company::findOrFail($id);
        return view('admin.editcompany_form', ['company' => $company]);
    }

    public function editcompany(Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:10000', 
        ]);

        $logoName = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = Uuid::uuid4()->toString() . '.' . $logo->getClientOriginalExtension();
            Storage::disk('public')->put("uploads/companies_logos/$logoName", file_get_contents($logo));
        }

        if($logoName == null)
            $logoName = "default.png";

        $company = Company::findOrFail($id);

        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'website' => $request->website,
            'description' => $request->description ,
            'logo' => $logoName, 
        ]);

        return redirect()->route('admin.companies.show')->with('success','Company updated successfully');

    }


    public function showcompanies(){
        $companies = Company::all();
        return view('admin.showcompanies', ['companies' => $companies]);
    }

    public function showcompany($id){
        $company = Company::find($id);
        return view('admin.showcompany', ['company' => $company]);
    }

    public function addservice_page(){
        $companies = Company::all();
        return view('admin.add_service', ['companies' => $companies]);
    }

    public function addservice(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|max:255',
            'type' => 'required|string|max:255',
            'company_id' => 'required|integer|exists:companies,id',
            'description' => 'required|string',
        ]);

        Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'company_id' => $request->company_id,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.services.show')->with('success','Service added successfully');
    }


    public function editservice_page(){
        $services = Service::all();
        return view('admin.editservice_page', [ 'services' => $services]);
    }


    public function editservice_form($id){
        $service = Service::findOrFail($id);
        $companies = Company::all();
        return view('admin.editservice_form', ['service' => $service, 'companies' => $companies]);
    }

    public function editservice(Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|max:255',
            'type' => 'required|string|max:255',
            'company_id' => 'required|integer|exists:companies,id',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'company_id' => $request->company_id,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.services.show')->with('success','Company updated successfully');
    }

    public function showservices(){
        $services = Service::all();
        return view('admin.showservices', ['services' => $services]);
    }

    public function showservice($id){
        $service = Service::find($id);
        return view('admin.showservice', ['service' => $service]);
    }


    

}
