<?php

namespace App\Http\Controllers;

use App\Models\Beser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\BeserResource;
use App\Http\Controllers\AuthUserTrait;
use Illuminate\Support\Facades\Validator;

class BeserController extends Controller
{
    use AuthUserTrait;

    public function __construct()
    {
        return auth()->shouldUse('api');
    }
    
    public function index()
    {
        return BeserResource::collection(
            Beser::paginate(25)
        );
    }
    
    public function show($id)
    {
        $beser = Beser::find($id);
        if(empty($beser)){
            return response()->json(['error' => 'Id '.$id.' not found'], 401);
        }
        
        return new BeserResource(
            $beser
        );
    }

    public function search(Request $request) 
    {
        $validator = Validator::make(request()->all(), [
            'language' => 'required',
            'word' => 'required',
        ]);

        if($validator->fails()) {
            response()->json($validator->messages(), 422)->send();
            exit;
        }
        
        $lang = request('language');
        $word = request('word');

        if($lang != "indonesia" && $lang != "beser"){
            return response()->json(['orror' => 'Parameter ('.$lang.') Not Valid. Recomended (indonesia or beser)'], 401);
        }

        return BeserResource::collection(
            Beser::where($lang, $word)->get()
        );
    }
    
    public function store(Request $request)
    {
        $this->validateRequest();
        $user = $this->getAuthUser();

        $user->Besers()->create([
            'indonesia' => request('indonesia'), 
            'beser' => request('beser')
        ]);
        
        return response()->json(['message' => 'Successfully posted']);
    }
    
    public function update(Request $request, $id)
    {
        $user = $this->getAuthUser();
        $this->validateRequest();

        $beser = Beser::find($id);
        if(empty($beser)){
            return response()->json(['error' => 'Id '.$id.' not found'], 401);
        }

        $this->checkOwnership($beser->user_id);
        $beser->update([
            'indonesia' => request('indonesia'), 
            'beser' => request('beser')
        ]);
        return response()->json(['message' => 'Successfully updated']);
    }
    
    public function destroy($id)
    {
        $this->getAuthUser();

        $beser = Beser::find($id);
        if(empty($beser)){
            return response()->json(['error' => 'Id '.$id.' not found'], 401);
        }
        
        $this->checkOwnership($beser->user_id);
        $beser->delete();      

        return response()->json(['message' => 'Successfully deleted']);
    }

    private function validateRequest() 
    {
        $validator = Validator::make(request()->all(), [
            'indonesia' => 'required|unique:besers',
            'beser' => 'required',
        ]);

        if($validator->fails()) {
            response()->json($validator->messages(), 422)->send();
            exit;
        }
    }
}
