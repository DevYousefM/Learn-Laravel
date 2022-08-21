<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnSelf;
use App\Models\Skill;

class SkillsController extends Controller
{
    /* private static function getData()
     {
         return
             [
                ["id" => 1, "skill" => "React", "percent" => "80%"],
                ["id" => 2, "skill" => "NextJS", "percent" => "75%"],
                ["id" => 3, "skill" => "PHP", "percent" => "70%"],
                ["id" => 4, "skill" => "Laravel", "percent" => "60%"],
             ];
     } */
    public function index()
    {
        return view("skills.index", ["skills" => Skill::all()]);
    }

    public function create()
    {
        return view("skills.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "skill_name" => "required",
            "skill_percent" => ["required", "integer"],
        ]);

        $skill = new Skill();
        $skill->skill_name = strip_tags($request->input("skill_name"));
        $skill->skill_precent = strip_tags($request->input("skill_percent"));

        $skill->save();
        return redirect()->route("skills.index");
    }

    public function show($id)
    {
        return view("skills.show", ['skill' => Skill::findOrFail($id)]);
    }

    public function edit($id)
    {
        return  view("skills.edit", ["skill" => Skill::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "skill_name" => "required",
            "skill_percent" => ["required", "integer"],
        ]);

        $db_update = Skill::findOrfail($id);

        $db_update->skill_name = strip_tags($request->input("skill_name"));
        $db_update->skill_precent = strip_tags($request->input("skill_percent"));

        $db_update->save();
        return redirect()->route("skills.show", $id);
    }

    public function destroy($id)
    {
        $db_delete = Skill::findOrfail($id);
        $db_delete -> delete();
        return redirect()->route("skills.store", $id);

    }
}
