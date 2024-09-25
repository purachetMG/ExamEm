@extends('template')
@section('title','บททดสอบ')
@section('content')

    {{-- <a href="{{ route('user.create') }}" class="btn btn-success mb-3">สร้างผู้ทดสอบ</a> --}}
        <form action="{{ route('test.answer',['id'=>$user_id]) }}" method="post">
            @csrf
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>บททดสอบ</td>
                        <td>คำตอบ</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subs as $key=>$sub)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $sub->name }}</td>
                            <td>
                                <div class="btn-group" role="group" >
                                    <input type="radio" class="btn-check" name="ans[{{ $sub->id }}]" id="ans{{ $sub->id }}_1" autocomplete="off" value="1">
                                    <label class="btn btn-outline-success" for="ans{{ $sub->id }}_1">ผ่าน</label>
                                
                                    <input type="radio" class="btn-check" name="ans[{{ $sub->id }}]" id="ans{{ $sub->id }}_0" autocomplete="off" value="0">
                                    <label class="btn btn-outline-danger" for="ans{{ $sub->id }}_0">ไม่ผ่าน</label>
                                </div>
                            </td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                    <button class="btn btn-success">ส่งคำตอบ</button>
            </div>
        </form>
@endsection