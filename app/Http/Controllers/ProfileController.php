<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.perusahaan.profil', [
            'title' => "perusahaan",
            'profile' => Profile::where('id_user', Auth::user()->id)->first()
        ]);
    }

    public function getCities($provinceId)
    {
        $cities = City::where('province_id', $provinceId)->pluck('name', 'id')->toArray();
        return response()->json($cities);
    }

    public function updateProfile(Request $request)
    {
        $profile = Profile::where('id_user', Auth::user()->id)->first();
        $profile->nama_perusahaan = $request->nama_perusahaan;
        $profile->alamat = $request->alamat;
        $profile->provinsi = $request->provinsi;
        $profile->kabupaten = $request->kabupaten;
        $profile->no_telepon = $request->no_telepon;
        $profile->npwp = $request->npwp;
        $profile->no_ijin_pbf = $request->no_ijin_pbf;
        $profile->no_ijin_dak = $request->no_ijin_dak;
        $profile->apoteker = $request->apoteker;
        $profile->sipa = $request->sipa;
        $profile->pj_alkes = $request->pj_alkes;
        $profile->sip = $request->sip;
        $profile->tgl_pkp = $request->tgl_pkp;
        $profile->no_pkp = $request->no_pkp;
        $profile->tgl_neraca_awal = $request->tgl_neraca_awal;

        // Handle file uploads
        if ($request->hasFile('logo_perusahaan')) {
            if (!empty($request->old_logo_perusahaan)) {
                $oldLogoPath = 'logo_perusahaan/' . $request->old_logo_perusahaan;
                if (Storage::disk('public')->exists($oldLogoPath)) {
                    Storage::disk('public')->delete($oldLogoPath);
                }
            }

            $logo = $request->file('logo_perusahaan');
            $unique = uniqid() . '.' . $logo->getClientOriginalExtension();
            $logo->storeAs('public/logo_perusahaan', $unique);
            $profile->logo_perusahaan = $unique;
        }

        if ($request->hasFile('ttd_apt')) {
            if (!empty($request->old_ttd_apt)) {
                $oldTtdAptPath = 'ttd_apt/' . $request->old_ttd_apt;
                if (Storage::disk('public')->exists($oldTtdAptPath)) {
                    Storage::disk('public')->delete($oldTtdAptPath);
                }
            }

            $ttdApt = $request->file('ttd_apt');
            $unique = uniqid() . '.' . $ttdApt->getClientOriginalExtension();
            $ttdApt->storeAs('public/ttd_apt', $unique);
            $profile->ttd_apt = $unique;
        }

        // Handle file uploads for 'ttd_pj_alkes'
        if ($request->hasFile('ttd_pj_alkes')) {
            if (!empty($request->old_ttd_pj_alkes)) {
                $oldTtdPjAlkesPath = 'ttd_pj_alkes/' . $request->old_ttd_pj_alkes;
                if (Storage::disk('public')->exists($oldTtdPjAlkesPath)) {
                    Storage::disk('public')->delete($oldTtdPjAlkesPath);
                }
            }

            $ttdPjAlkes = $request->file('ttd_pj_alkes');
            $unique = uniqid() . '.' . $ttdPjAlkes->getClientOriginalExtension();
            $ttdPjAlkes->storeAs('public/ttd_pj_alkes', $unique);
            $profile->ttd_pj_alkes = $unique;
        }

        // Handle file uploads for 'stempel'
        if ($request->hasFile('stempel')) {
            if (!empty($request->old_stempel)) {
                $oldStempelPath = 'stempel/' . $request->old_stempel;
                if (Storage::disk('public')->exists($oldStempelPath)) {
                    Storage::disk('public')->delete($oldStempelPath);
                }
            }

            $stempel = $request->file('stempel');
            $unique = uniqid() . '.' . $stempel->getClientOriginalExtension();
            $stempel->storeAs('public/stempel', $unique);
            $profile->stempel = $unique;
        }

        $profile->save();

        // Redirect back to the edit page with a success message
        return back()->with('success', 'Profile updated successfully');
    }
}