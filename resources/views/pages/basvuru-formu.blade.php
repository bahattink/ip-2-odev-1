@extends('../layout')

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İnsan Kaynakları Başvuru Formu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .invalid-feedback {
            color: #dc3545;
            display: block;
        }
        .is-invalid {
            border-color: #dc3545 !important;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="mb-4 text-center">Başvuru Formu</h1>

    <form method="POST" enctype="multipart/form-data">

        @csrf

        <h3 class="mt-4 border-bottom pb-2">1. Kişisel Bilgiler</h3>

        <div class="col-md-6">
            <label for="ad" class="form-label">Adınız *</label>
            <input type="text" id="ad" name="ad" class="form-control @error('ad') is-invalid @enderror" value="{{ old('ad') }}">
            @error('ad')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="soyad" class="form-label">Soyadınız *</label>
            <input type="text" id="soyad" name="soyad" class="form-control @error('soyad') is-invalid @enderror" value="{{ old('soyad') }}">
            @error('soyad')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="tc_kimlik" class="form-label">T.C. Kimlik No *</label>
            <input type="number" id="tc_kimlik" name="tc_kimlik" class="form-control @error('tc_kimlik') is-invalid @enderror" value="{{ old('tc_kimlik') }}" placeholder="11 haneli">
            @error('tc_kimlik')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="dogum_tarihi" class="form-label">Doğum Tarihi *</label>
            <input type="date" id="dogum_tarihi" name="dogum_tarihi" class="form-control @error('dogum_tarihi') is-invalid @enderror" value="{{ old('dogum_tarihi') }}">
            @error('dogum_tarihi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Cinsiyet *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet_k" value="K" {{ old('cinsiyet') == 'K' ? 'checked' : '' }}>
                <label class="form-check-label" for="cinsiyet_k">Kadın</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet_e" value="E" {{ old('cinsiyet') == 'E' ? 'checked' : '' }}>
                <label class="form-check-label" for="cinsiyet_e">Erkek</label>
            </div>
            @error('cinsiyet')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="medeni_durum" class="form-label">Medeni Durum *</label>
            <select id="medeni_durum" name="medeni_durum" class="form-select @error('medeni_durum') is-invalid @enderror">
                <option value="">Seçiniz</option>
                <option value="Bekar" {{ old('medeni_durum') == 'Bekar' ? 'selected' : '' }}>Bekar</option>
                <option value="Evli" {{ old('medeni_durum') == 'Evli' ? 'selected' : '' }}>Evli</option>
                <option value="Dul" {{ old('medeni_durum') == 'Dul' ? 'selected' : '' }}>Dul</option>
            </select>
            @error('medeni_durum')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="cocuk_sayisi" class="form-label">Çocuk Sayısı</label>
            <input type="number" id="cocuk_sayisi" name="cocuk_sayisi" class="form-control @error('cocuk_sayisi') is-invalid @enderror" value="{{ old('cocuk_sayisi') ?? 0 }}" min="0">
            @error('cocuk_sayisi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="adres" class="form-label">Adresiniz *</label>
            <textarea id="adres" name="adres" class="form-control @error('adres') is-invalid @enderror" rows="2">{{ old('adres') }}</textarea>
            @error('adres')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="il" class="form-label">İl *</label>
            <input type="text" id="il" name="il" class="form-control @error('il') is-invalid @enderror" value="{{ old('il') }}">
            @error('il')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="eposta" class="form-label">E-posta Adresi *</label>
            <input type="email" id="eposta" name="eposta" class="form-control @error('eposta') is-invalid @enderror" value="{{ old('eposta') }}">
            @error('eposta')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="telefon_cep" class="form-label">Cep Telefonu *</label>
            <input type="tel" id="telefon_cep" name="telefon_cep" class="form-control @error('telefon_cep') is-invalid @enderror" value="{{ old('telefon_cep') }}" placeholder="5xxxxxxxxx">
            @error('telefon_cep')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="telefon_ev" class="form-label">Ev Telefonu</label>
            <input type="tel" id="telefon_ev" name="telefon_ev" class="form-control @error('telefon_ev') is-invalid @enderror" value="{{ old('telefon_ev') }}">
            @error('telefon_ev')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="askerlik_durumu" class="form-label">Askerlik Durumu *</label>
            <select id="askerlik_durumu" name="askerlik_durumu" class="form-select @error('askerlik_durumu') is-invalid @enderror">
                <option value="">Seçiniz</option>
                <option value="Yapildi" {{ old('askerlik_durumu') == 'Yapildi' ? 'selected' : '' }}>Yapıldı</option>
                <option value="Muaf" {{ old('askerlik_durumu') == 'Muaf' ? 'selected' : '' }}>Muaf</option>
                <option value="Tecilli" {{ old('askerlik_durumu') == 'Tecilli' ? 'selected' : '' }}>Tecilli</option>
            </select>
            @error('askerlik_durumu')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Ehliyet Var mı? *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ehliyet_var" id="ehliyet_evet" value="1" {{ old('ehliyet_var') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="ehliyet_evet">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ehliyet_var" id="ehliyet_hayir" value="0" {{ old('ehliyet_var') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="ehliyet_hayir">Hayır</label>
            </div>
            @error('ehliyet_var')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="ehliyet_tipi" class="form-label">Ehliyet Tipi (A, B, C vb.)</label>
            <input type="text" id="ehliyet_tipi" name="ehliyet_tipi" class="form-control @error('ehliyet_tipi') is-invalid @enderror" value="{{ old('ehliyet_tipi') }}" placeholder="B veya B, C, D">
            @error('ehliyet_tipi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <h3 class="mt-5 border-bottom pb-2">2. Eğitim Bilgileri</h3>

        <div class="col-md-6">
            <label for="lisans_okul" class="form-label">Lisans Okul Adı *</label>
            <input type="text" id="lisans_okul" name="lisans_okul" class="form-control @error('lisans_okul') is-invalid @enderror" value="{{ old('lisans_okul') }}">
            @error('lisans_okul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="lisans_bolum" class="form-label">Lisans Bölüm Adı *</label>
            <input type="text" id="lisans_bolum" name="lisans_bolum" class="form-control @error('lisans_bolum') is-invalid @enderror" value="{{ old('lisans_bolum') }}">
            @error('lisans_bolum')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="lisans_mezuniyet" class="form-label">Lisans Mezuniyet Tarihi *</label>
            <input type="date" id="lisans_mezuniyet" name="lisans_mezuniyet" class="form-control @error('lisans_mezuniyet') is-invalid @enderror" value="{{ old('lisans_mezuniyet') }}">
            @error('lisans_mezuniyet')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="ortalama_gpa" class="form-label">Not Ortalaması (4.0 Üzerinden)</label>
            <input type="number" step="0.01" id="ortalama_gpa" name="ortalama_gpa" class="form-control @error('ortalama_gpa') is-invalid @enderror" value="{{ old('ortalama_gpa') }}" min="1.0" max="4.0">
            @error('ortalama_gpa')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Yüksek Lisansınız Var mı? *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yuksek_lisans_var" id="yl_evet" value="1" {{ old('yuksek_lisans_var') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="yl_evet">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yuksek_lisans_var" id="yl_hayir" value="0" {{ old('yuksek_lisans_var') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="yl_hayir">Hayır</label>
            </div>
            @error('yuksek_lisans_var')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="yuksek_lisans_okul" class="form-label">Yüksek Lisans Okul Adı</label>
            <input type="text" id="yuksek_lisans_okul" name="yuksek_lisans_okul" class="form-control @error('yuksek_lisans_okul') is-invalid @enderror" value="{{ old('yuksek_lisans_okul') }}">
            @error('yuksek_lisans_okul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="lise_okul" class="form-label">Lise Okul Adı *</label>
            <input type="text" id="lise_okul" name="lise_okul" class="form-control @error('lise_okul') is-invalid @enderror" value="{{ old('lise_okul') }}">
            @error('lise_okul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="lise_mezuniyet" class="form-label">Lise Mezuniyet Tarihi *</label>
            <input type="date" id="lise_mezuniyet" name="lise_mezuniyet" class="form-control @error('lise_mezuniyet') is-invalid @enderror" value="{{ old('lise_mezuniyet') }}">
            @error('lise_mezuniyet')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Konuşabildiğiniz Yabancı Diller (Seçiniz)</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="yabanci_dil[]" id="ingilizce" value="İngilizce" {{ in_array('İngilizce', old('yabanci_dil', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="ingilizce">İngilizce</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="yabanci_dil[]" id="almanca" value="Almanca" {{ in_array('Almanca', old('yabanci_dil', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="almanca">Almanca</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="yabanci_dil[]" id="fransizca" value="Fransızca" {{ in_array('Fransızca', old('yabanci_dil', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="fransizca">Fransızca</label>
            </div>
            <input type="text" name="yabanci_dil[]" class="form-control mt-2" placeholder="Diğer (varsa)">
        </div>


        <h3 class="mt-5 border-bottom pb-2">3. İş Tecrübesi ve Beklentiler</h3>

        <div class="col-md-6">
            <label class="form-label">Şu Anda Çalışıyor musunuz? *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="calisma_durumu" id="calisma_evet" value="Evet" {{ old('calisma_durumu') == 'Evet' ? 'checked' : '' }}>
                <label class="form-check-label" for="calisma_evet">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="calisma_durumu" id="calisma_hayir" value="Hayir" {{ old('calisma_durumu') == 'Hayir' ? 'checked' : '' }}>
                <label class="form-check-label" for="calisma_hayir">Hayır</label>
            </div>
            @error('calisma_durumu')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="talep_edilen_pozisyon" class="form-label">Talep Edilen Pozisyon *</label>
            <input type="text" id="talep_edilen_pozisyon" name="talep_edilen_pozisyon" class="form-control @error('talep_edilen_pozisyon') is-invalid @enderror" value="{{ old('talep_edilen_pozisyon') }}">
            @error('talep_edilen_pozisyon')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="son_sirket" class="form-label">Son Çalıştığınız Şirket Adı</label>
            <input type="text" id="son_sirket" name="son_sirket" class="form-control @error('son_sirket') is-invalid @enderror" value="{{ old('son_sirket') }}">
            @error('son_sirket')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="son_pozisyon" class="form-label">Son Pozisyonunuz</label>
            <input type="text" id="son_pozisyon" name="son_pozisyon" class="form-control @error('son_pozisyon') is-invalid @enderror" value="{{ old('son_pozisyon') }}">
            @error('son_pozisyon')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="baslangic_tarihi" class="form-label">Son İş Başlangıç Tarihi</label>
            <input type="date" id="baslangic_tarihi" name="baslangic_tarihi" class="form-control @error('baslangic_tarihi') is-invalid @enderror" value="{{ old('baslangic_tarihi') }}">
            @error('baslangic_tarihi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label for="ayrilis_nedeni" class="form-label">Ayrılış Nedeni (Kısaca)</label>
            <textarea id="ayrilis_nedeni" name="ayrilis_nedeni" class="form-control @error('ayrilis_nedeni') is-invalid @enderror" rows="1">{{ old('ayrilis_nedeni') }}</textarea>
            @error('ayrilis_nedeni')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="talep_edilen_ucret" class="form-label">Talep Edilen Aylık Net Ücret (₺) *</label>
            <input type="number" id="talep_edilen_ucret" name="talep_edilen_ucret" class="form-control @error('talep_edilen_ucret') is-invalid @enderror" value="{{ old('talep_edilen_ucret') }}" min="5000">
            @error('talep_edilen_ucret')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Sigara Kullanımı *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sigara_kullanimi" id="sigara_evet" value="1" {{ old('sigara_kullanimi') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="sigara_evet">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sigara_kullanimi" id="sigara_hayir" value="0" {{ old('sigara_kullanimi') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="sigara_hayir">Hayır</label>
            </div>
            @error('sigara_kullanimi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label class="form-label">Seyahat Engeli *</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="seyahat_engeli" id="seyahat_hayir" value="0" {{ old('seyahat_engeli') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="seyahat_hayir">Yok</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="seyahat_engeli" id="seyahat_evet" value="1" {{ old('seyahat_engeli') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="seyahat_evet">Var</label>
            </div>
            @error('seyahat_engeli')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <h4 class="mt-4">Referans 1 *</h4>
        <div class="col-md-4">
            <label for="referans_ad_1" class="form-label">Ad Soyad</label>
            <input type="text" id="referans_ad_1" name="referans_ad_1" class="form-control @error('referans_ad_1') is-invalid @enderror" value="{{ old('referans_ad_1') }}">
            @error('referans_ad_1')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="referans_tel_1" class="form-label">Telefon</label>
            <input type="tel" id="referans_tel_1" name="referans_tel_1" class="form-control @error('referans_tel_1') is-invalid @enderror" value="{{ old('referans_tel_1') }}" placeholder="5xxxxxxxxx">
            @error('referans_tel_1')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="referans_unvan_1" class="form-label">Şirket/Ünvan</label>
            <input type="text" id="referans_unvan_1" name="referans_unvan_1" class="form-control @error('referans_unvan_1') is-invalid @enderror" value="{{ old('referans_unvan_1') }}">
            @error('referans_unvan_1')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <h4 class="mt-4">Referans 2</h4>
        <div class="col-md-4">
            <label for="referans_ad_2" class="form-label">Ad Soyad</label>
            <input type="text" id="referans_ad_2" name="referans_ad_2" class="form-control @error('referans_ad_2') is-invalid @enderror" value="{{ old('referans_ad_2') }}">
            @error('referans_ad_2')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="referans_tel_2" class="form-label">Telefon</label>
            <input type="tel" id="referans_tel_2" name="referans_tel_2" class="form-control @error('referans_tel_2') is-invalid @enderror" value="{{ old('referans_tel_2') }}" placeholder="5xxxxxxxxx">
            @error('referans_tel_2')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="referans_unvan_2" class="form-label">Şirket/Ünvan</label>
            <input type="text" id="referans_unvan_2" name="referans_unvan_2" class="form-control @error('referans_unvan_2') is-invalid @enderror" value="{{ old('referans_unvan_2') }}">
            @error('referans_unvan_2')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <h4 class="mt-4">Sosyal Profil ve Portfolyo Linkleri (İsteğe Bağlı)</h4>

        <div class="col-md-4">
            <label for="profil_url_1" class="form-label">Link 1 (LinkedIn/Portfolyo)</label>
            <input type="url" id="profil_url_1" name="profil_url_1"
                   class="form-control @error('profil_url_1') is-invalid @enderror"
                   value="{{ old('profil_url_1') }}"
                   placeholder="https://linkedin.com/in/..." >
            @error('profil_url_1')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="profil_url_2" class="form-label">Link 2 (GitHub/Kişisel Site)</label>
            <input type="url" id="profil_url_2" name="profil_url_2"
                   class="form-control @error('profil_url_2') is-invalid @enderror"
                   value="{{ old('profil_url_2') }}"
                   placeholder="https://github.com/..." >
            @error('profil_url_2')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="profil_url_3" class="form-label">Link 3 (Diğer Profil/Yayın)</label>
            <input type="url" id="profil_url_3" name="profil_url_3"
                   class="form-control @error('profil_url_3') is-invalid @enderror"
                   value="{{ old('profil_url_3') }}"
                   placeholder="https://medium.com/..." >
            @error('profil_url_3')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12 mt-4">
            <label for="cv_dosyasi" class="form-label">Özgeçmiş Dosyası (PDF/DOCX) *</label>
            <input class="form-control @error('cv_dosyasi') is-invalid @enderror" type="file" id="cv_dosyasi" name="cv_dosyasi">
            @error('cv_dosyasi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="basvuru_kaynagi" class="form-label">Başvuruyu Nereden Gördünüz? *</label>
            <select id="basvuru_kaynagi" name="basvuru_kaynagi"
                    class="form-select @error('basvuru_kaynagi') is-invalid @enderror">
                <option value="">Lütfen Seçiniz</option>
                <option value="KariyerNet" {{ old('basvuru_kaynagi') == 'KariyerNet' ? 'selected' : '' }}>Kariyer.net</option>
                <option value="LinkedIn" {{ old('basvuru_kaynagi') == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                <option value="Referans" {{ old('basvuru_kaynagi') == 'Referans' ? 'selected' : '' }}>Çalışan Referansı</option>
                <option value="SirketWeb" {{ old('basvuru_kaynagi') == 'SirketWeb' ? 'selected' : '' }}>Şirket Web Sitesi</option>
                <option value="Diger" {{ old('basvuru_kaynagi') == 'Diger' ? 'selected' : '' }}>Diğer</option>
            </select>
            @error('basvuru_kaynagi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12 mt-4">
            <div class="form-check">
                <input class="form-check-input @error('kvkk_onay') is-invalid @enderror" type="checkbox" name="kvkk_onay" id="kvkk_onay" value="1" {{ old('kvkk_onay') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="kvkk_onay">
                    KVKK metnini okudum ve anladım, kişisel verilerimin işlenmesine onay veriyorum. *
                </label>
                @error('kvkk_onay')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Başvuruyu Gönder</button>
        </div>

    </form>
</div>

</body>
</html>
@endsection
