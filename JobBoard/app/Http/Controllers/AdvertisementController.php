<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\User;

class AdvertisementController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::all();
        $data = Advertisement::latest()->paginate(5);

        return view('admin.pages.advertissements.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.advertissements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description'      =>  'required',
            'horaire'     =>  'required',
            'lieu'     =>  'required',
            'type'     =>  'required',
            'titre'     =>  'required',
            'salaire'     =>  'required',
            
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $advertisement = new Advertisement;

        $advertisement->description = $request->description;
        $advertisement->horaire = $request->horaire;
        $advertisement->lieu = $request->lieu;
        $advertisement->type= $request->type;
        $advertisement->salaire = $request->salaire;
        $advertisement->titre = $request->titre;
        $advertisement->image = $file_name;

        $advertisement->save();

        return redirect()->route('advertisements.index')->with('success', 'advertisement Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertissement  $advertissement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.pages.advertissements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        return view('admin.pages.advertissements.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
            'description'      =>  'required',
            'horaire'     =>  'required',
            'lieu'     =>  'required',
            'type'     =>  'required',
            'titre'     =>  'required',
            'salaire'     =>  'required',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $image = $request->hidden_image;

        if($request->image != '')
        {
            $image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $advertisements = Advertisement::find($request->hidden_id);

        $advertisement->description = $request->description;
        $advertisement->horaire = $request->horaire;
        $advertisement->lieu = $request->lieu;
        $advertisement->type= $request->type;
        $advertisement->salaire = $request->salaire;
        $advertisement->titre = $request->titre;


        $advertisement->image = $image;

        $advertisement->save();

        return redirect()->route('advertisements.index')->with('success', 'advertisements Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertissement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();

        return redirect()->route('advertisements.index')->with('success', 'advertisement Data deleted successfully');
    }
}
