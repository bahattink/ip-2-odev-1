@extends('../layout')

@section('content')
    <h1 class="display-4 fst-italic">Öğrenci Ekle</h1>
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            Form verileri hatalı!
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <p class="lead my-3">
    <form method="post">
        @csrf

        Ad: <input type="text" name="first_name" />
        <br />
        Soyad: <input type="text" name="last_name" />
        <br />
        Şehir:
        <input type="text" name="city" />
        E-Mail:
        <input type="text" name="email" />
        <button type="submit">Ekle</button>
    </form>
    </p>
@endsection
