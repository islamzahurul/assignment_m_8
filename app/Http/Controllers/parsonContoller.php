<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parsonContoller extends Controller
{
   function getPerson(Request $request ,$name=null ) {
   $display= $request-> input(" display ","profile");
   $limit= $request-> input("limit","10");
//    $all = $request->all();
//    print_r($all);
//    die();
    return response("Hello {$name} - Displaying{$display} Limit {$limit}",200);
   } 
   function getPersonByID(Request $request ,$id=null ) {
    
    if ( $id == null ) {
        return response("Hello please provide id",400); 
    }else{
        return response("The ID is: {$id}",200);
    }
   
   } 

   function personAcount(Request $request ,$name=null,$accountId=null ) {
    return response("Hello {$name} ,Your account number is {$accountId} ",200);
}

function personForm() {
    return view("person");
}
function createPerson(Request $request ) {
$name =$request->input("name");
$email= $request->input("email");
$image = $request->file("image");
if($image){
    $imageNama=time()."-". $image->getClientOriginalName();
    $image->move(public_path("images"), $imageNama);
}
else{
$imageNama=null;
}
return view("newperson",["name"=>$name,"email"=>$email,"image"=>$imageNama]);
//return response("Person {$name} with email {$email} created",200);
}
}