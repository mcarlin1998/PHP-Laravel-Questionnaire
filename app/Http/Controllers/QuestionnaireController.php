<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\questionnaire;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //get all questionnaires
      $questionnaires = questionnaire::all();

      //display show.blade.php view to the user with questionnaire data
      return view('admin.questionnaires.show', ['questionnaires' => $questionnaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //display create.blade.php view.
        return view('admin.questionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //the following fields are required in order for the form to be sent and stored in the DB
        $this->validate($request, [
          'id' => 'bail|required|unique:questionnaires|min:1|max:255',
          'made_by' => 'required',
          'name' => 'required',
          'category'=> 'required',
        ]);

        //enables the users input to be stored to a variable
        $input = $request->all();

        //stores/creates users input to the database
        questionnaire::create($input);

        //display questions create.blade.php view
        return redirect('questions/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the questionnaire matching the id
        $questionnaire = questionnaire::findOrFail($id);
        //return that questionnaire in the edit.blade.php view
        return view('admin.questionnaires.edit', compact('questionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // find the questionnaire matching the id
        $questionnaire = questionnaire::findOrFail($id);
        // update that questionnaire to the fields in the database
        $questionnaire->update($request->all());

        //display questionnaires view
        return redirect('questionnaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the specific questionnaire matching the id
        $questionnaire = questionnaire::find($id);
        //Delete that questionnaire from the questionnaire table
        $questionnaire->delete();
        //display questionnaires view
        return redirect('questionnaires');
    }
}
