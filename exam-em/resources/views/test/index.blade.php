@extends('template')
@section('title','บททดสอบ')
@section('content')

    {{-- <a href="{{ route('user.create') }}" class="btn btn-success mb-3">สร้างผู้ทดสอบ</a> --}}


        <h2>การทดสอบของ {{ $user->firstname }}</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>บททดสอบ</td>
                    <td>คำตอบ</td>                  
                    <td>จัดการ</td>
                </tr>
            </thead>
            <tbody>
                @foreach($tests as $key=>$test)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $test->name }}</td>
                        <td>
                            @php
                                $count = $test->subTests->flatMap(function ($subTest) use ($user) {
                                    return $subTest->pointTests->where('user_id', $user->id)->where('point', 1)->pluck('point');
                                })->count();
                            @endphp
                        
                            @if($count >= 3)
                                {{ 'ผ่าน' }}
                            @else
                                {{ 'ไม่ผ่าน' }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('sub_test',['id'=> $test->id]) }}" class="btn btn-success">แบบทดสอบ</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
       </table>
    
@endsection