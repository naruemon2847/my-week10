<!-- resources/views/form.blade.php -->
@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="content">เนื้อหา</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        @error('content')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog" class="btn btn-success my-3">บทความทั้งหมด</a>
    </form>
@endsection 