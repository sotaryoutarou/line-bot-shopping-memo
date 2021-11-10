@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('memos.destroy') }}" >
    @method('DELETE')
    @csrf
    @foreach ($memos as $memo)
        <input type="checkbox" name="memos[]" value={{$memo->id}} id="memo_{{ $memo->id }}">
        <label for="memo_{{ $memo->id }}">{{ $memo->content }}</label>
    @endforeach
    <input type="submit" value="完了">
</form>

@endsection