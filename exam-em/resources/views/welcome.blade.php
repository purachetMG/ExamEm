@extends('template')
@section('title','index')

@section('content')
<form action="{{ route('index') }}" method="GET" class="mb-3">
    @csrf
    <label for="search">ค้นหา</label>
    <input type="text" id="search" name="search" class="form-control">
    <button class="btn btn-info">ค้นหา</button>
</form>
    <a href="{{ route('user.create') }}" class="btn btn-success mb-3">สร้างผู้ทดสอบ</a>

    <div class="d-flex justify-content-center">
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ชื่อจริง</td>
                    <td>นามสกุล</td>
                    <td>ผลการสอบ</td>
                    <td>ทดสอบ</td>
                    <td>จัดการ</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $list)
                    <tr>
                        <td>{{ $list->firstname }}</td>
                        <td>{{ $list->lastname }}</td>
                        <td>{{ $list->status }}</td>
                        <td>
                            <a href="{{ route('test.index',['id'=>$list->id]) }}" class="btn btn-success">เริ่มทดสอบ</a>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('user.edit',['id' => $list->id]) }}" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('user.delete', ['id' => $list->id]) }}" method="POST" onsubmit="return confirm('ยืนยันการลบข้อมูลนี้?');">
                                    @csrf
                                    @method('DELETE')
                                    <button 
                                    class="btn btn-danger">ลบ</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
       </table>
    </div>
@endsection