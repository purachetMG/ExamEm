@extends('template')
@section('title','index')
@section('content')

    <div class="card">
        <div class="card-header">
            <p class="h3">สร้างผู้ทดสอบ</p>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update',['id'=>$user->id]) }}" method="post" >
                @csrf
                <div class="form-group mb-4">
                    <label for="firstname" class="form-label">ชื่อจริง</label>
                    <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="lastname" class="form-label">นามสกุล</label>
                    <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control">
                </div>
                <div class="text-center">
                    <button class="btn btn-success">เพิ่มผู้ทดสอบ</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection