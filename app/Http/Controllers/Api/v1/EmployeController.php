<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\Api\v1\StoreEmployeRequest;
use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Resources\v1\EmployeResource;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EmployeResource::collection(Employe::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeRequest $request)
    {
        $employe = new Employe;
        $employe->name     = $request->name;
        $employe->birth    = $request->birth;
        $employe->address  = $request->address;
        $employe->latitud  = $request->latitud;
        $employe->longitud = $request->longitud;
        $employe->job_id   = $request->job_id;
        $employe->save();   
    }

    /**
     * Display the specified resource.
     */ 
    public function show(Employe $employee)
    {
        return $employee;
       return new EmployeResource($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeRequest $request, Employe $employee)
    {
        $employee->name       = $request->name;
        $employee->birth      = $request->birth;
        $employee->address    = $request->address;
        $employee->latitud    = $request->latitud;
        $employee->longitud   = $request->longitud;
        $employee->job_id     = $request->job_id;
        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employee)
    {
 
        $employee->delete();

    }
}
