<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabbedForm;
use App\Models\TabbedForm2;


class Form1Controller extends Controller
{
    public function index()
    {
        return vieW("tabb2");
    }


    // $meta=[
    //     'field4'=>$request->field4,
    //     'field5'=>$request->field5,
    //     'field7'=>$request->field7,
    //     'field8'=>$request->field8,
    //     'field9'=>$request->field9,
    // ];



    public function submit(Request $request)
    {
        // Validate the request data
        // $validatedData = $request->validate([
        //     'field1' => 'required|string',
        //     'field2' => 'required|string',
        //     'field3' => 'required|string',
        // ]);

        // echo "<pre>";
        // print_r($request->all());
        // exit();




        $data=[
        'field1'=>$request->field1,
        'field2'=>$request->field2,
        'field3'=>$request->field3,
        ];
        // Save the form data to the database
       $tabb = TabbedForm::create($data);

       $f_id=$tabb->id;

        $fkey=[
            'fieldj4'=>$request->fieldj4,
            'fieldj5'=>$request->fieldj5,
          ];

          $fkey2=[
            'field6'=>$request->field6,
            'field7'=>$request->field7,

          ];

          $fkey3=['field9'=>$request->field9,'field8'=>$request->field8,];


          $fkeyjson = json_encode($fkey);
          $fkey2json =json_encode($fkey2);
          $fkey3json = json_encode($fkey3);


       $TabbedForm2 = new TabbedForm2;
       $TabbedForm2->f_id =$f_id;
       $TabbedForm2->field4 ="fieldf1";
       $TabbedForm2->field5 =$fkeyjson;
       $TabbedForm2->save();


       $TabbedForm2 = new TabbedForm2;
       $TabbedForm2->f_id =$f_id;
       $TabbedForm2->field4 ="fieldf2";
       $TabbedForm2->field5 =$fkey2json;
       $TabbedForm2->save();

       $TabbedForm2 = new TabbedForm2;
       $TabbedForm2->f_id =$f_id;
       $TabbedForm2->field4 ="fieldf3";
       $TabbedForm2->field5 =$fkey3json;
       $TabbedForm2->save();


        // You can add additional logic or redirect the user as needed
        return redirect("/");
    }


  public function show()
  {

    $tabbedForms2 = TabbedForm::with('tabbedForm2')->get();

    // echo "<pre>";
    // print_r($tabbedForms2);
    // exit();
    return view("show",compact('tabbedForms2'));
  }

  public function edit($id)
  {

    // $editdata=TabbedForm::find($id);
    $tabbedForms2 = TabbedForm::with('tabbedForm2')->get();
    $editdata= $tabbedForms2->find($id);

    return view("edittabb2",compact('editdata'));
  }

  public function update(Request $request,$id)
  {

    // echo "<pre>";
    // print_r($request->all());
    // exit();



    $data=[
        'field1'=>$request->field1,
        'field2'=>$request->field2,
        'field3'=>$request->field3,
        ];
        // Save the form data to the database
        $TabbedForm = TabbedForm::find($id);
        $TabbedForm->field1 = $request->field1;
        $TabbedForm->field2 = $request->field2;
        $TabbedForm->field3 = $request->field3;
        $TabbedForm->save();




    //    $f_id=$tabb->id;

        $fkey=[
            'fieldj4'=>$request->fieldj4,
            'fieldj5'=>$request->fieldj5,
          ];

          $fkey2=[
            'field6'=>$request->field6,
            'field7'=>$request->field7,

          ];

          $fkey3=['field8'=>$request->field8,'field9'=>$request->field9,];


          $fkeyjson = json_encode($fkey);
          $fkey2json =json_encode($fkey2);
          $fkey3json = json_encode($fkey3);

        //   echo "<pre>";
        //     print_r($request->all());
        //     exit();

        //   echo "<pre>";
        //   print_r($TabbedForm2);
        //   exit();
    //    $TabbedForm2 = new TabbedForm2;
       $TabbedForm2 = TabbedForm2::where("f_id",$id)->first();
       $TabbedForm2->f_id =$id;
       $TabbedForm2->field4 ="fieldf1";
       $TabbedForm2->field5 =$fkeyjson;
       $TabbedForm2->save();


       $TabbedForm2 = TabbedForm2::where("f_id",$id)->first();
       $TabbedForm2->f_id =$id;
       $TabbedForm2->field4 ="fieldf2";
       $TabbedForm2->field5 =$fkey2json;
       $TabbedForm2->save();

       $TabbedForm2 = TabbedForm2::where("f_id",$id)->first();
       $TabbedForm2->f_id =$id;
       $TabbedForm2->field4 ="fieldf3";
       $TabbedForm2->field5 =$fkey3json;
       $TabbedForm2->save();



    return redirect("/show");


  }
  public function delete($id)
  {

    $TabbedForm = TabbedForm::find($id);

    // $tabbedForm->tabbedForm2()->delete();

    // Delete the record in the first table
    // $tabbedForm->delete();

    // $tabbedForms2 = TabbedForm::with('tabbedForm2')->get();

    $tabbedForms2 = TabbedForm2::where("f_id", $id)->delete();
    $TabbedForm = TabbedForm::find($id)->delete();


    return redirect("/show");

  }

}
