<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Product;
use App\Categorie;
use App\Subcategorie;
use App\Motd;
use Mail;
use DB;
use Image;

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

        if($user->role == 'particulier' && $request['role'] == 'handelaar') {
            Mail::send('mail.handelaar_goedgekeurd', ['user' => $user], function($m) use ($user)
            {
                $m->to($user->email)->subject('Uw aanvraag voor handelaar is goedgekeurd');
            });

        }
        if($user->role == 'admin') $user->role = 'admin';
        else $user->role = $request['role'];

    	$user->firstname = $request['firstname'];
    	$user->lastname = $request['lastname'];

    	$user->telnr = $request['telnr'];
    	$user->email = $request['email'];
        $user->btwnr = $request['btw'];
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
        if($user->role == 'particulier') {
            $user->role = 'handelaar';
            $user->save();

            Mail::send('mail.handelaar_goedgekeurd', ['user' => $user], function($m) use ($user)
            {
                $m->to($user->email)->subject('Uw aanvraag voor handelaar is goedgekeurd');
            });
        }

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
        if($val == 'inpromo') {
            $producten = Product::orderBy($val, 'desc')->get();
        }
        else {
            $producten = Product::orderBy($val)->get();
        }

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
        // Make changes to product
        $p = Product::find($id);
        $useold = false;

        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/producten/';
        $name = '_geenfoto.jpg';
        $name_orig = '_geenfoto.jpg';

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $r['coverfoto'];
                $name = $f->getClientOriginalName();
                $name_orig = '_orig_' . $name;
                $f->move($path, $name_orig);

                $resizedimg = Image::make($path . $name_orig)->fit(400,300);
                $resizedimg->save($path . $name);

                $path = $r['coverfoto'];
            }
            else {
                $useold = true;
            }
        }
        else {
            $useold = true;
        }

        if(!$useold) {
            $p->coverfoto = $path . $name;
            $p->fullresfoto = $path . $name_orig;
        }
        else {
            // Split off last '/' and insert _orig_ so that a string of the path of a picture can be inserted
            // into r['coverfoto'] and the right thumbnail and full res foto will be set.
            $path = $r['coverfoto'];

            $parts = explode('/', $path);
            $last = array_pop($parts);
            $parts = array(implode('/', $parts), $last);
            echo $parts[0]; // outputs "path without catname"

            $p->coverfoto = $parts[0] . '/' . $last;
            $p->fullresfoto = $parts[0] . '/_orig_' . $last;
        }


        $p->naam = $r['naam'];
        $p->afmetingen = $r['afmetingen'];
        $p->prijs_handelaar = $r['prijs_handelaar'];
        $p->eenheid = $r['eenheid'];
        $p->invoorraad = $r['invoorraad'];
        $p->inpromo = $r['inpromo'];
        $p->groepering = $r['groepering'];
        $p->beschrijving = $r['beschrijving'];
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
        $name_orig = '_geenfoto.jpg';

        $useold = false;

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $r['coverfoto'];
                $name = $f->getClientOriginalName();
                $name_orig = '_orig_' . $name;
                $f->move($path, $name_orig);

                $resizedimg = Image::make($path . $name_orig)->fit(400,300);
                $resizedimg->save($path . $name);

                $path = $r['coverfoto'];
            }
            else {
                $useold = true;
            }
        }
        else {
            $useold = true;

        }

        $p = new Product;

        if(!$useold) {
            $p->coverfoto = $path . $name;
            $p->fullresfoto = $path . $name_orig;
        }
        else {
            // Split off last '/' and insert _orig_ so that a string of the path of a picture can be inserted
            // into r['coverfoto'] and the right thumbnail and full res foto will be set.
            $path = $r['coverfoto'];

            $parts = explode('/', $path);
            $last = array_pop($parts);
            $parts = array(implode('/', $parts), $last);
            echo $parts[0]; // outputs "path without catname"

            $p->coverfoto = $parts[0] . '/' . $last;
            $p->fullresfoto = $parts[0] . '/_orig_' . $last;
        }


        $p->naam = $r['naam'];
        $p->afmetingen = $r['afmetingen'];
        $p->prijs_handelaar = $r['prijs_handelaar'];
        $p->eenheid = $r['eenheid'];
        $p->invoorraad = $r['invoorraad'];
        $p->inpromo = $r['inpromo'];
        $p->groepering = $r['groepering'];
        $p->beschrijving = $r['beschrijving'];

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
        if($r['volgorde'] == '') $r['volgorde'] = null;

        $this->validate($r, [
            'cat_linknaam' => 'alpha|required|unique:categories,cat_linknaam,' . $id,
            'volgorde' => 'unique:categories,volgorde,' . $id,
            ]);

        $cat = Categorie::find($id);

        $cat->naam = $r['naam'];
        $cat->cat_linknaam = strtolower($r['cat_linknaam']);
        $cat->coverfoto = $r['coverfoto'];
        $cat->fullresfoto = $r['coverfoto'];
        $cat->volgorde = $r['volgorde'];

        $cat->save();

        return redirect()->route('admin_categorieoverview');
    }

    function categorieAdd() {
        return view('admin.categorieadd');
    }

    function categorieAddAction(Request $r) {
        if($r['volgorde'] == '') $r['volgorde'] = null;

        $this->validate($r, [
            'cat_linknaam' => 'alpha|required|unique:categories',
            'volgorde' => 'unique:categories',
            ]);

        // File upload in correct folder, also on fail
        $f = $r->file('foto');
        $path = 'images/cover/';
        $name = '_geenfoto.jpg';
        $name_orig = '_geenfoto.jpg';

        if($r->hasFile('foto')) {
            if($r->file('foto')->isValid()) {
                $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $r['coverfoto'];
                $name = $f->getClientOriginalName();
                $name_orig = '_orig_' . $name;
                $f->move($path, $name_orig);

                $resizedimg = Image::make($path . $name_orig)->fit(400,300);
                $resizedimg->save($path . $name);

                $path = $r['coverfoto'];
            }
        }

        $cat = new Categorie;

        $cat->naam = $r['naam'];
        $cat->cat_linknaam = strtolower($r['cat_linknaam']);
        $cat->coverfoto = $path . $name;
        $cat->fullresfoto = $path . $name_orig;
        $cat->volgorde = $r['volgorde'];

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
        $subcat->beschrijving = $r['beschrijving'];

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


        $subcat = new Subcategorie;

        $subcat->naam = $r['naam'];
        $subcat->subcat_linknaam = $r['subcat_linknaam'];
        $subcat->categorie_id = $r['categorie_id'];
        $subcat->beschrijving = $r['beschrijving'];
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
                $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $r['coverfoto'];
                $name = $f->getClientOriginalName();
                $name_orig = '_orig_' . $name;
                $f->move($path, $name_orig);
                $msg = $r['coverfoto'] . $name;
                $status = true;

                $resizedimg = Image::make($path . $name_orig)->fit(400,300);
                $resizedimg->save($path . $name);
            }
        }

        return $this->fotoUpload($status, $msg);
    }

    //////////////////
    // MOTD

    function motd() {
        $motd = Motd::all()->first();

        if($motd == null) $motd = new Motd;

        return view('admin.motd', ['motd' => $motd]);
    }

    function motdAction(Request $r) {

        $motd = Motd::all()->first();

        if($motd == null) $motd = new Motd;

        $motd->content = $r["motd"];
        $motd->save();

        return view('admin.home', ['motd' => $motd]);
    }

}
