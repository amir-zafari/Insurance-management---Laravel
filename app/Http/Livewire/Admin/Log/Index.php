<?php

namespace App\Http\Livewire\Admin\Log;

use App\Models\bimeshode;
use App\Models\karfarma;
use App\Models\log;
use Livewire\Component;

class Index extends Component
{
    public bimeshode $bimeshode;
    public karfarma $karfarma;

    public function bime()
    {
        $pol = 0;
        $karfarma = 0;

        foreach (bimeshode::all() as $kar) {
            $n_b[] = $kar->name;//بیمه شده ها
            $s_b[] = $kar->somare;//شماره تلفن
            $k_b[] = $kar->id_karfama;//کارفرما یان بیمه شده ها
            if ($kar->pardakht_hgog == null) {
                $g_b[] = 0;
            } else {
                $g_b[] = $kar->pardakht_hgog;
            }
            if ($kar->pardakht == 1) {
                $pol += $kar->hag_ma;
                $karfarma = $karfarma + $kar->hag_karfama + $kar->hag_malyat;
                $m_b[] = $kar->hag_ma;//مبلغ هزینه شده
            }
            else{
                $pol +=0;
                $karfarma +=0;
                $m_b[] =0;
            }
            $kar->update([
                'pardakht' => 0,
                'check' => 0,
                'pardakht_hgog' => 0
            ]);
        }
        $S_bn = implode(",", $n_b);
        $S_bs = implode(",", $s_b);
        $S_bm = implode(",", $m_b);
        $S_bk = implode(",", $k_b);
        $S_bg = implode(",", $g_b);
        foreach (karfarma::all() as $kar) {
            $n_k[] = $kar->name;//کار فرمایان
            $s_k[] = $kar->somare;//شماره تماش کارفرمایان
            if ($kar->gardsh == null) {
                $g_k[] = 0;
            } else {
                $g_k[] = $kar->gardsh;
            }
        }
        $S_kn = implode(",", $n_k);
        $S_ks = implode(",", $s_k);

        $S_kg = implode(",", $g_k);

        Log::create([
            'n_bimeshode' => $S_bn,
            's_bimeshode' => $S_bs,
            'k_bimeshode' => $S_bk,
            'm_bimeshode' => $S_bm,
            'g_bimeshode' => $S_bg,
            'n_karfarma' => $S_kn,
            's_karfarma' => $S_ks,
            'm_karfarma' => $karfarma,
            'g_karfarma' => $S_kg,
            'all' => $pol,
            'sod' => $pol - $karfarma,
        ]);
        return redirect(route('admin.index'));
    }

    public function render()
    {
        $pol=0;
        $ka=0;
        foreach (bimeshode::where('pardakht', 1)->get() as $po){
            $pol+=$po->hag_ma;
            $ka=$ka+$po->hag_karfama+$po->hag_malyat;
        }
        $bimeshodes = bimeshode::latest()->get();
        $karfarmas = karfarma::latest()->get();
        return view('livewire.admin.log.index',compact('pol','ka','bimeshodes','karfarmas'));
    }
}
