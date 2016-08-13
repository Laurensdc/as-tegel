<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Product;
use App\Categorie;
use App\Subcategorie;
use Mail;
use DB;

class AdminController extends Controller
{
    function mainPanel() {
    	return view('admin.home');

    }

    ///////////////////////////////////////
    ///// Users

    function userOverview() {
    	$users = User::orderBy('lastname')->get();

    	return view('admin.users', [
    		'users' => $users
    		]);
    }

    function userDetail($id) {
    	$user = User::find($id);

    	return view('admin.useredit', [
    		'user' => $user
    		]);
    }

    function userEdit($id, Request $request) {
    	// Make changes to user
    	$user = User::find($id);

    	$user->firstname = $request['firstname'];
    	$user->lastname = $request['lastname'];
    	$user->role = $request['role'];
    	$user->telnr = $request['telnr'];
    	$user->email = $request['email'];
    	$user->save();

    	return redirect()->route('admin_useroverview');
    }

    function userDelete($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin_useroverview');   
    }

    function makeHandelaar($email) {
    	$user = User::where('email', $email)->first();
    	$user->role = 'handelaar';
    	$user->save();

    	/* THIS WONT WORK and i DONT know WHY! I can pass variable to subject line but not to '$m->to' function
        // Probably because mailgun only allows registered email to be sent to
		Mail::send('mail.handelaar_goedgekeurd', ['user' => $user], function($m) use ($user)
		{
		    $m->from('mailer@as-tegel.be', 'As-Tegel');
		    $m->to($user->email)->subject('Uw aanvraag voor handelaar is goedgekeurd');
			// $m->to('laurensdc@gmail.com')->subject('Uw aanvraag voor handelaar is goedgekeurd, ' . $user->email); // THIS DOES WORK 
		});
		*/

       	return redirect()->route('admin_useroverview');
    }


    ///////////////////////////////////////
    ///// Products

    function productOverview() {
        $producten = Product::orderBy('naam')->get();

        return view('admin.producten', 
            ['producten' => $producten]);

    }

    function productOverviewOrderby($val) {
        $producten = Product::orderBy($val)->get();

        return view('admin.producten',
         ['producten' => $producten]);

    }

    function productDetail($id) {
        $product = Product::find($id);
        $subcategories = Subcategorie::all();

        return view('admin.productedit', [
            'p' => $product,
            'subcategories' => $subcategories
            ]);
    }

    function productEdit($id, Request $r) {
        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/cover/';
        $name = '_geenfoto.jpg';
        $passpath = $r['coverfoto'];    // Original path

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = public_path() . '/' . $r['coverfoto']; 
                $name = $f->getClientOriginalName();
                $f->move($path, $name);
                $path = $r['coverfoto'];
                $passpath = $path . $name;  // Only edit $p->coverfoto in this case
           }
        }

        // Make changes to product
        $p = Product::find($id);
        
        $p->naam = $r['naam'];
        $p->afmetingen = $r['afmetingen'];
        $p->prijs_particulier = $r['prijs_particulier'];
        $p->prijs_handelaar = $r['prijs_handelaar'];
        $p->invoorraad = $r['invoorraad'];
        $p->beschrijving = $r['beschrijving'];
        $p->coverfoto = $passpath;
        $p->subcategorie_id = $r['subcategorie_id'];

        $p->save();

        return redirect()->route('admin_productoverview');
    }

    function productAdd() {
        $subcategories = Subcategorie::all();

        return view('admin.productadd',
         ['subcategories' => $subcategories,]);
    }

    function productAddAction(Request $r) {
        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/producten/';
        $name = '_geenfoto.jpg';

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = public_path() . '/' . $r['coverfoto']; 
                $name = $f->getClientOriginalName();
                $f->move($path, $name);
                $path = $r['coverfoto'];
           }
        }        

        $p = new Product;

        $p->naam = $r['naam'];
        $p->afmetingen = $r['afmetingen'];
        $p->prijs_particulier = $r['prijs_particulier'];
        $p->prijs_handelaar = $r['prijs_handelaar'];
        $p->invoorraad = $r['invoorraad'];
        $p->beschrijving = $r['beschrijving'];
        $p->coverfoto = $path . $name;
        $p->subcategorie_id = $r['subcategorie_id'];

        $p->save();

        return redirect()->route('admin_productoverview');
    }

    function productDelete($id) {
        $p = Product::find($id);
        $p->delete();

        return redirect()->route('admin_productoverview');
    }


    ///////////////////////////////////////
    ///// Categories

    function categorieOverview() {
        $categories = Categorie::all();

        return view('admin.categories', 
            ['categories' => $categories]);
    }

    function categorieDetail($id) {
        $cat = Categorie::find($id);

        return view('admin.categorieedit',
            ['categorie' => $cat]);
    }

    function categorieEdit($id, Request $r) {
        $this->validate($r, [
            'cat_linknaam' => 'alpha|required|unique:categories,cat_linknaam,' . $id
            ]);

        $cat = Categorie::find($id);

        $cat->naam = $r['naam'];
        $cat->cat_linknaam = strtolower($r['cat_linknaam']);
        $cat->coverfoto = $r['coverfoto'];

        $cat->save();

        return redirect()->route('admin_categorieoverview');
    }

    function categorieAdd() {
        return view('admin.categorieadd');
    }

    function categorieAddAction(Request $r) {
        $this->validate($r, [
            'cat_linknaam' => 'alpha|required|unique:categories'
            ]);

        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/cover/';
        $name = '_geenfoto.jpg';

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = public_path() . '/' . $r['coverfoto']; 
                $name = $f->getClientOriginalName();
                $f->move($path, $name);
                $path = $r['coverfoto'];
           }
        }

        $cat = new Categorie;

        $cat->naam = $r['naam'];
        $cat->cat_linknaam = strtolower($r['cat_linknaam']);
        $cat->coverfoto = $path . $name;

        $cat->save();

        return redirect()->route('admin_categorieoverview');
    }

    function categorieDelete($id) {
        $c = Categorie::find($id);
        $c->delete();

        return redirect()->route('admin_categorieoverview');
    }

    ///////////////////////////////////////
    ///// Subcategories

    function subcategorieOverview() {
        $subcat = Subcategorie::all();

        return view('admin.subcategories',
            ['subcategories' => $subcat]);
    }

    function subcategorieDetail($id) {
        $subcat = Subcategorie::find($id);
        $categories = Categorie::all();

        return view('admin.subcatedit',
            ['subcat' => $subcat,
            'categories' => $categories]);
    }

    function subcategorieEdit($id, Request $r) {
        $this->validate($r, [
            'subcat_linknaam' => 'alpha|required|unique:subcategories,subcat_linknaam,' . $id
            ]);

        $subcat = Subcategorie::find($id);

        $subcat->naam = $r['naam'];
        $subcat->subcat_linknaam = $r['subcat_linknaam'];
        $subcat->categorie_id = $r['categorie_id'];
        $subcat->coverfoto = $r['coverfoto'];

        $subcat->save();

        return redirect()->route('admin_subcategorieoverview');
    }

    function subcategorieAdd() {
        $categories = Categorie::all();

        return view('admin.subcatadd',
            ['categories' => $categories]);
    }

    function subcategorieAddAction(Request $r) {
        $this->validate($r, [
            'subcat_linknaam' => 'alpha|required|unique:subcategories'
            ]);

        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/cover/';
        $name = '_geenfoto.jpg';

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = public_path() . '/' . $r['coverfoto']; 
                $name = $f->getClientOriginalName();
                $f->move($path, $name);
                $path = $r['coverfoto'];
           }
        }

        $subcat = new Subcategorie;

        $subcat->naam = $r['naam'];
        $subcat->subcat_linknaam = $r['subcat_linknaam'];
        $subcat->categorie_id = $r['categorie_id'];
        $subcat->coverfoto = $path . $name;
        $subcat->save();

        return redirect()->route('admin_subcategorieoverview');
    }

    function subcategorieDelete($id) {
        $s = Subcategorie::find($id);
        $s->delete();

        return redirect()->route('admin_subcategorieoverview');
    }

    //////////////////
    // Fotoupload

    function fotoUpload($success = false, $msg = '') {
        return view('admin.fotoupload', ['success' => $success, 'msg' => $msg]);
    }

    function fotoUploadAction(Request $r) {
        // File upload in correct folder, also on fail
        $f = $r->file('foto');

        $msg = "Foto uploaden mislukt";
        $status = false;

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = public_path() . '/' . $r['coverfoto']; 
                $name = $f->getClientOriginalName();
                $f->move($path, $name);
                $msg = $r['coverfoto'] . $name;
                $status = true;
            }
        }
        
        return $this->fotoUpload($status, $msg);

    }


}
