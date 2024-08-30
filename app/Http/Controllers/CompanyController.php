<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Group;
use App\Models\Permissions;
use App\Models\Roles;

use Validator;

class CompanyController extends Controller
{
     public function __construct()
    {
        //to secure
        $this->middleware('auth');
    }

     public function index()
    {
        $companies = Company::paginate(10);
        return view('company.companies',compact('companies'));
    }

      public function companyList(Request $request)
    {
        $input = $request->all();
        if($input['searchTerm']){
            $search = $input['searchTerm'];
            $companies = Company::where('name', 'LIKE', '%' . $search . '%')->get();
        }else{
        $companies = Company::paginate(10);
        } 
        $company = view('company.companylist')->with('companies',$companies)->render();
        return response()->json($company);
    }

     public function edit(Request $request)
    {
        $id = $request->id;
        $company = Company::find($id);
        $companies = view('company.editcompany')->with('company',$company)->render();
        return response()->json($companies);
    }

     public function create(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=> 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $input['name'] = preg_replace('/[^A-Za-z0-9 ]/', '', $input['name']);
        $company = Company::create($input);

        //creating first group and roles for superadmin with permission
        $group['name'] = 'Administrator';
        $group['cID'] = $company->id;
         Group::create($group);

        $permission['name'] = 'admin';
        $permission['cID'] = $company->id;
        $permission['permissions'] = 'view,preview,download,upload,edit,delete,share,comments,dynamic,admin,user-create,user-edit,user-view,user-delete,user-mass-upload,user-rollback,user-permanent-delete,role-create,role-edit,role-view,role-delete,role-mass-upload,role-rollback,role-permanent-delete,group-create,group-edit,group-view,group-delete,group-mass-upload,group-rollback,group-permanent-delete,notice,storage,backups,logs';
        $firstpermission =  Permissions::create($permission);

        $role['name'] = 'superadmin';
        $role['cID'] = $company->id;
        $role['permissionID'] = $firstpermission->id; 
         Roles::create($role);
         return redirect()->route('companies')->with('success-company', '');
           
    }

     public function update(Request $request, string $id)
    {

       // Access and prepare data from the request
        $data = request()->except(['_token']);
        $updated = Company::where('id', $id)->update($data);

        if ($updated) {
            return redirect()->route('companies')->with('company-update', '');
        } else {
            // Handle update failure (e.g., log the error or return a specific error message)
            return redirect()->route('companies')->with('error', 'Company update failed!!');
        }
    }

     public function destroy(string $id)
    {
        
        Company::where('id', $id)->delete();
       return redirect()->route('companies');
    
    }
}
