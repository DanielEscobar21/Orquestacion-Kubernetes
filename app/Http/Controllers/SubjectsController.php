<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubjectResource;
use App\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubjectResource::collection(Subject::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new SubjectResource(Subject::create($request->all())))->additional(["message"=>"Materia agregada con éxito."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return new SubjectResource($subject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->all());
        return (new SubjectResource($subject))->additional(["message"=>"Materia actualizada con éxito."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return (new SubjectResource($subject))->additional(["message"=>"Materia eliminada con éxito."]);
    }
}
