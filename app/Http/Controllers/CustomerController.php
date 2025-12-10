<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pet;
use App\Models\Adoption;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // My profile
    public function myprofile()
    {
        $user = User::find(Auth::user()->id);
        return view('customer.myprofile')->with('user', $user);
    }

    public function updatemyprofile(Request $request)
    {
        $validation = $request->validate([
            'document'  => ['required', 'numeric', 'unique:' . User::class . ',document,' . $request->id],
            'fullname'  => ['required', 'string'],
            'gender'    => ['required'],
            'birthdate' => ['required', 'date'],
            'phone'     => ['required'],
            'email'     => ['required', 'lowercase', 'email', 'unique:' . User::class . ',email,' . $request->id],
        ]);

        if ($validation) {
            if ($request->hasFile('photo')) {
                $photo = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
                if ($request->originphoto != 'null.webp') {
                    unlink(public_path('images/') . $request->originphoto);
                }
            } else {
                $photo = $request->originphoto;
            }
        }
        $user = User::find($request->id);
        $user->document  = $request->document;
        $user->fullname  = $request->fullname;
        $user->gender    = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->photo     = $photo;
        $user->phone     = $request->phone;
        $user->email     = $request->email;
        if ($user->save()) {
            return redirect('dashboard')->with('message', 'My profile was successfully edited!');
        }
    }

    // My adoptions
    public function myadoptions()
    {
        $adopts = Adoption::where('user_id', Auth::user()->id)->get();
        return view('customer.myadoptions')->with('adopts', $adopts);
    }

    public function showadoption(Request $request)
    {
        $adopt = Adoption::find($request->id);
        return view('customer.showadoption')->with('adopt', $adopt);
    }

    // Make adoptions
    public function listpets()
    {
        $pets = Pet::where('status', '0')->orderBy('id', 'DESC')->paginate(20);
        return view ('customer.makeadoption')->with('pets', $pets);
    }

    public function confirmadoption(Request $request)
    {
        $petId = $request->route('id') ?? $request->input('id');
        $pet = Pet::find($petId);
        if (! $pet) {
            return redirect('makeadoption/')->with('error', 'Pet not found.');
        }
        $message = 'Congratulations! You are about to adopt ' . $pet->name . '.';
        return view('customer.confirmadoption')->with('pet', $pet)->with('message', $message);
    }

    public function makeadoption(Request $request)
    {
        $user = Auth::user();
        if (! $user) {
            return redirect()->route('login');
        }

        $petId = $request->route('id') ?? $request->input('id');
        $pet = Pet::find($petId);
        if (! $pet) {
            return redirect('makeadoption/')->with('error', 'Pet not found.');
        }

        // Prevent adopting a pet that's already adopted
        $exists = Adoption::where('pet_id', $pet->id)->exists();
        if ($exists || $pet->status == '1') {
            return redirect('makeadoption/')->with('error', 'This pet is already adopted or unavailable.');
        }

        // Create adoption
        Adoption::create([
            'user_id' => $user->id,
            'pet_id' => $pet->id,
        ]);

        // Mark pet as adopted (status = 1)
        $pet->status = '1';
        $pet->save();

        $message = 'Congratulations! You have successfully adopted ' . $pet->name . '.';
        return redirect('myadoptions/')->with('success', $message);
    }

    public function search(Request $request)
    {
        $pets = Pet::where('name', 'LIKE', '%' . $request->q . '%')->orderBy('id', 'desc')->paginate(20);
        return view('customer.search')->with('pets', $pets);
    }
}
