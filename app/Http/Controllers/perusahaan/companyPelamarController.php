<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detail_lowongan;
use App\Models\Lowongan;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class companyPelamarController extends Controller
{
    public function index(){
        $id = Auth::user();
        $companyProfile = $id->company;
        $company1= userCompanyModels::find($companyProfile->id);
        $lowongans = $company1->lowongan;
    
        $detailLowongansByLowongan = [];
    
        if ($lowongans) {
            foreach ($lowongans as $lowongan) {
                $details = detail_lowongan::where('fklowongankerja', $lowongan->id)
                            ->with(['lowongan', 'userCandidate', 'userCandidate.users'])
                            ->get();
                $detailLowongansByLowongan[$lowongan->id] = $details;
            }
        }
    
        return view('perusahaan.profilePelamarCompany.companyPelamar', [
            'lowongans' => $lowongans,
            'detailLowongansByLowongan' => $detailLowongansByLowongan
        ]);
    }

    public function changestatus(Request $request){
        try{
            $validator = Validator::make(request()->all(),[
                'status'=>'required|in:diterima,proses,ditolak'
            ]);
            if($validator->fails()){
                Log::error('change status error due to validation errors.', ['errors' => $validator->errors()]);
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $detailLowongan = detail_lowongan::find(Crypt::decrypt($request->id));
            $detailLowongan->status = $request->status;
            $detailLowongan->update();

            Log::info("update detail lowongan: {$request->id} successfully updated.");
            return redirect()->back()->with('success','update status success');
        } catch(\Exception $e){
            Log::error("Failed to delete job listing", ['id' => Crypt::encrypt($detailLowongan->id), 'error' => $e->getMessage()]);
            return redirect()->back()->withErrors('error', 'Failed to update detail lowongan status.');
        }
        
    }

    public function detailPelamar($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $detailLowongan = detail_lowongan::with(['lowongan', 'userCandidate', 'userCandidate.users'])
                            ->findOrFail($decryptedId);
           
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Company not found');
        }
    
        return view('perusahaan.profilePelamarCompany.companyDetailPelamar',[
            'detailLowongan'=>$detailLowongan
        ]);
    }
}
