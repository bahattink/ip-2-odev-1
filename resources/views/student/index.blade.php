@extends('../layout')

@section('content')
    <h1 class="display-4 fst-italic">Öğrencilerimiz</h1>

    <h5><a href="/ogrencilerimiz/ekle">Yeni Bir Öğrenci Eklemek İçin Tıklayınız</a></h5>
    <p class=" my-3">

    <table class="table" style="width: 100%;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>E-Posta</th>
            <th>Şehir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->city }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    </p>

    {{ $students->links() }}
@endsection
