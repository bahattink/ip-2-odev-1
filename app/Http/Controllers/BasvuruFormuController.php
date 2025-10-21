<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasvuruFormuController extends Controller
{
    public function index(){
return view('pages.basvuru-formu');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([

           'ad' => 'required|string|max:20',
            'soyad' => 'required|string|max:20',
            'tc_kimlik' => 'required|numeric|digits:11|unique:users,tc_kimlik',
            'dogum_tarihi' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),
            'cinsiyet' => 'required|in:K,E',
            'medeni_durum' => 'required|in:Evli,Bekar,Dul',
            'cocuk_sayisi' => 'nullable|integer|min:0|max:15',
            'adres' => 'required|string|max:500',
            'il' => 'required|string|max:50',
            'eposta' => 'required|email|unique:users,email',
            'telefon_cep' => 'required|digits:10',
            'telefon_ev' => 'nullable|digits_between:7,10',
            'askerlik_durumu' => 'required|in:Yapildi,Muaf,Tecilli',
            'ehliyet_var' => 'required|boolean',
            'ehliyet_tipi' => 'required_if:ehliyet_var,1|nullable|string',

            'lisans_okul' => 'required|string|max:100',
            'lisans_bolum' => 'required|string|max:100',
            'lisans_mezuniyet' => 'required|date',
            'yuksek_lisans_var' => 'required|boolean',
            'yuksek_lisans_okul' => 'nullable|required_if:yuksek_lisans_var,1|string',
            'lise_okul' => 'required|string|max:100',
            'lise_mezuniyet' => 'required|date|before:lisans_mezuniyet',
            'ortalama_gpa' => 'nullable|numeric|between:1.0,4.0',
            'yabanci_dil' => 'nullable|array',
            'yabanci_dil.*' => 'string',

            'son_sirket' => 'nullable|required_if:calisma_durumu,Evet|string|max:100',
            'son_pozisyon' => 'nullable|required_if:calisma_durumu,Evet|string|max:100',
            'baslangic_tarihi' => 'nullable|date',
            'ayrilis_nedeni' => 'nullable|string|max:500',
            'calisma_durumu' => 'required|in:Evet,Hayir',
            'talep_edilen_pozisyon' => 'required|string|max:100',
            'talep_edilen_ucret' => 'required|numeric|min:5000',
            'sigara_kullanimi' => 'required|boolean',
            'seyahat_engeli' => 'required|boolean',
            'referans_ad_1' => 'required|string',
            'referans_tel_1' => 'required|digits:10',
            'referans_unvan_1' => 'required|string',
            'referans_ad_2' => 'nullable|string',
            'referans_tel_2' => 'nullable|digits:10',
            'profil_url_1' => 'nullable|url|max:255',
            'profil_url_2' => 'nullable|url|max:255',
            'profil_url_3' => 'nullable|url|max:255',
            'cv_dosyasi' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'basvuru_kaynagi' => 'required|string|in:KariyerNet,LinkedIn,Referans,SirketWeb,Diger',

            'kvkk_onay' => 'accepted',],
            [
                'tc_kimlik.digits' => 'T.C. Kimlik numarası tam olarak 11 hane olmalıdır.',
                'dogum_tarihi.before_or_equal' => 'Başvuru için en az 18 yaşında olmanız gerekmektedir.',
                'eposta.unique' => 'Bu e-posta adresi ile zaten bir başvuru yapılmış.',

                'kvkk_onay.accepted' => 'Devam etmek için KVKK metnini onaylamanız gerekmektedir.',
            ]);

        return back()
            ->with('success', 'Başvurunuz başarıyla gönderilmiştir.');
    }
}
