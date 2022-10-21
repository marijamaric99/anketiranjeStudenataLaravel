<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KorisnikController extends Controller
{
    public function dodajKorisnika(Request $request)
    {
        $korisnik = new Korisnik();
        $korisnik->ime = $request->ime;
        $korisnik->prezime = $request->prezime;
        $korisnik->email = $request->email;

        $dodana_datoteka = $request->ime_datoteke;
        $ime_datoteke = time() . $dodana_datoteka->getClientOriginalName();

        Storage::putFileAs(
            'files/',
            $dodana_datoteka,
            $ime_datoteke
        );

        $korisnik->ime_datoteke = $ime_datoteke;

        $korisnik->save();
    }

    public function preuzmi_datoteku($ime_datoteke)
    {
        return Storage::download('files/' . $ime_datoteke);
    }

    public function preuzmiDatotekuKorisnika($id)
    {
        $korisnik = Korisnik::findOrFail($id);

        return Storage::download('files/' . $korisnik->ime_datoteke);
    }

    public function dohvatiKorisnike()
    {
        $korisnici = Korisnik::orderBy('ime', 'desc')
            ->limit(4)
            ->where('id','>', '2' )
            ->get();

        return $korisnici;
    }

    public function izbrisiKorisnika($id)
    {
        $korisnik = Korisnik::find($id);
        $korisnik->delete();
    }

    public function urediKorisnika(Request $request)
    {
        $korisnik = Korisnik::find($request->id);
        $korisnik->ime = $request->ime;
        $korisnik->prezime = $request->prezime;
        $korisnik->email = $request->email;
        $korisnik->save();

        return 'Uspješno ste ažurirali korisnika!';
    }
}
