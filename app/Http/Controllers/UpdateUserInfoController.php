<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserInfoController extends Controller
{
    public function ChangePassword(Request $request)
    {
        $name = $request->user()->vardas;
        $DBPassword = User::where('vardas', $name)->select('slaptazodis')->first()->slaptazodis;
        $entered_password = $request->dabartinis_pw;
        $new_password = $request->new_pw;
        $repeated_password = $request->repeat_pw;

        if ($DBPassword != $entered_password) {
            return response()->json('* Blogai įvestas senas slaptažodis arba neįvestas senas slaptažodis', 404);
        } else if ($new_password != $repeated_password) {
            return response()->json('* Naujas slaptažodis nesutampa su pakartotu slaptazodziumi', 404);
        } else if(strlen($repeated_password === 0) or $repeated_password === null or strlen($new_password === 0) or $new_password === null or strlen($repeated_password === 0) or $repeated_password === null) {
            return response()->json('* Neįvestas slaptažodis arba naujas slatažodis', 404);
        } else {
            User::where('vardas', $name)->update([ 'slaptazodis' => $new_password ]);
            return response()->json('* Slaptažodis sėkmingai pakeistas!');
        }
    }

    public function ChangeEmail(Request $request)
    {
        $name = $request->user()->vardas;
        $new_email = $request->new_Email;
        $repeated_email = $request->repeat_Email;

        if(strlen($new_email === 0) or $new_email === null or strlen($repeated_email === 0) or $repeated_email === null) {
            return response()->json('* Neįvestas el.paštas arba naujas el.paštas', 404);
        }else if ($new_email != $repeated_email) {
            return response()->json('* Naujas el.paštas nesutampa su pakartotu el.paštas', 404);
        } else {
            User::where('vardas', $name)->update([ 'email' => $new_email ]);
            return response()->json('* El.paštas sėkmingai pakeistas!');
        }
    }

    public function ChangeBankPin(Request $request)
    {
        $name = $request->user()->vardas;
        $new_pin = $request->new_Pin;
        $repeated_pin = $request->repeat_Pin;

        if(strlen($new_pin) === 0 or strlen($repeated_pin) === 0) {
            return response()->json('* Neįvestas banko pinkodas arba naujas banko pinkodas', 404);
        }else if ($new_pin != $repeated_pin) {
            return response()->json('* Naujas banko pinkodas nesutampa su pakartotu banko pinkodu', 404);
        }else if (!is_numeric($new_pin) or !is_numeric($repeated_pin)) {
            return response()->json('* Naujas banko pinkodas arba pakartotas banko pinkodas turi buti numeriai', 404);
        }else if(strlen($new_pin) != 4 or strlen($repeated_pin) != 4){
            return response()->json('* Banko pinkodas arba naujas banko pinkodas turi buti 4skaitmenų ilgumo', 404);
        } else {
            User::where('vardas', $name)->update([ 'bank_pin' => $new_pin ]);
            return response()->json('* Banko pinkodas sėkmingai pakeistas!');
        }
    }

    public function SetBankPin(Request $request)
    {
        $name = $request->user()->vardas;
        $new_pin = $request->new_Pin;
        $repeated_pin = $request->repeat_Pin;;

        if(strlen($new_pin) === 0 or strlen($repeated_pin) === 0) {
            return response()->json('* Neįvestas banko pinkodas arba naujas banko pinkodas', 404);
        }else if ($new_pin != $repeated_pin) {
            return response()->json('* Naujas banko pinkodas nesutampa su pakartotu banko pinkodu', 404);
        }else if (!is_numeric($new_pin) or !is_numeric($repeated_pin)) {
            return response()->json('* Naujas banko pinkodas arba pakartotas banko pinkodas turi buti numeriai', 404);
        }else if(strlen($new_pin) != 4 or strlen($repeated_pin) != 4){
            return response()->json('* Banko pinkodas arba naujas banko pinkodas turi buti 4skaitmenų ilgumo', 404);
        } else {
            User::where('vardas', $name)->update([ 'bank_pin' => $new_pin ]);
            return response()->json('* Banko pinkodas sėkmingai nustatytas!');
        }
    }

    public function ChangeKlausimas(Request $request)
    {
        $name = $request->user()->vardas;
        $new_klausimas = $request->new_Kl;
        $repeated_klausimas = $request->repeat_Kl;

        if ($new_klausimas != $repeated_klausimas) {
            return response()->json('* Naujas slaptas klausimas nesutampa su pakartotu slaptu klausimu', 404);
        }else if(strlen($new_klausimas === 0) or $new_klausimas === null or strlen($repeated_klausimas === 0) or $repeated_klausimas === null) {
            return response()->json('* Neįvestas slaptas klausimas arba naujas slaptas klausimas', 404);
        } else {
            User::where('vardas', $name)->update([ 'SlaptasKlausimas' => $new_klausimas ]);
            return response()->json('* Slaptas klausimas sėkmingai pakeistas!');
        }
    }

    public function SetKlausimas(Request $request)
    {
        $name = $request->user()->vardas;
        $new_klausimas = $request->new_Kl;
        $repeated_klausimas = $request->repeat_Kl;

        if ($new_klausimas != $repeated_klausimas) {
            return response()->json('* Naujas slaptas klausimas nesutampa su pakartotu slaptu klausimu', 404);
        }else if(strlen($new_klausimas === 0) or $new_klausimas === null or strlen($repeated_klausimas === 0) or $repeated_klausimas === null) {
            return response()->json('* Neįvestas slaptas klausimas arba naujas slaptas klausimas', 404);
        } else {
            User::where('vardas', $name)->update([ 'SlaptasKlausimas' => $new_klausimas ]);
            return response()->json('* Slaptas klausimas sėkmingai nustatyas!');
        }
    }

    public function ChangeAtsakymas(Request $request)
    {
        $name = $request->user()->vardas;
        $new_ats = $request->new_Ats;
        $repeated_ats = $request->repeat_Ats;

        if ($new_ats != $repeated_ats) {
            return response()->json('* Naujas atsakymas nesutampa su pakartotu atsakymu', 404);
        }else if(strlen($new_ats === 0) or $new_ats === null or strlen($repeated_ats === 0) or $repeated_ats === null) {
            return response()->json('* Neįvestas naujas slapto arba klausimo atsakymas', 404);
        } else {
            User::where('vardas', $name)->update([ 'KlausimoAtsakymas' => $new_ats ]);
            return response()->json('* Slaptas atsakymas sėkmingai pakeistas!');
        }
    }

    public function SetAtsakymas(Request $request)
    {
        $name = $request->user()->vardas;
        $new_ats = $request->new_Ats;
        $repeated_ats = $request->repeat_Ats;

        if ($new_ats != $repeated_ats) {
            return response()->json('* Naujas atsakymas nesutampa su pakartotu atsakymu', 404);
        }else if(strlen($new_ats === 0) or $new_ats === null or strlen($repeated_ats === 0) or $repeated_ats === null) {
            return response()->json('* Neįvestas naujas slapto arba klausimo atsakymas', 404);
        } else {
            User::where('vardas', $name)->update([ 'KlausimoAtsakymas' => $new_ats ]);
            return response()->json('* Slaptas atsakymas sėkmingai nustatyas!');
        }
    }

    public function RemoveKlausimas(Request $request){
        $name = $request->user()->vardas;

        User::where('vardas', $name)->update([ 'SlaptasKlausimas' => '']);
        return response()->json('* Slaptas klausimas sėkmingai nuimtas!');
    }

    public function RemoveAtsakymas(Request $request){
        $name = $request->user()->vardas;

        User::where('vardas', $name)->update([ 'KlausimoAtsakymas' => '']);
        return response()->json('* Slaptas atsakymas sėkmingai nuimtas!');
    }

    public function RemovePin(Request $request){
        $name = $request->user()->vardas;

        User::where('vardas', $name)->update([ 'bank_pin' => 0]);
        return response()->json('* Banko pinkodas sėkmingai nuimtas!');
    }
}
