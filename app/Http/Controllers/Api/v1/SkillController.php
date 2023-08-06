<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Resources\v1\SkillResource;
use App\Models\Employe;
use Illuminate\Support\Facades\DB;
use DateTime;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SkillResource::collection(Skill::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill       = new Skill;
        $skill->name = $request->name;
        $skill->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }

    public function setEmployeSkill(Request $request){
           $date = new DateTime();   
           DB::table('employe_skill')->insert(
            [
              'employe_id'    =>  $request->employee_id,
              'skill_id'      =>  $request->skill_id,
              'score'         =>  $request->score,
              'created_at'    =>  $date->format("Y-m-d H:i:s")
            ]
           );
    }

    public function getEmployeSkills($id)
    {
    
      $skills = Employe::find($id)->skills;
      $employee_skills = array();

     foreach($skills as $skill){
       array_push($employee_skills, array(
        'name'  => $skill->name,
        'score' => $skill->pivot->score
       ));
     }
     return $employee_skills;
    }

   
}
