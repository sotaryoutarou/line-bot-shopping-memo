@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('memos.destroy') }}" >
    @method('DELETE')
    @csrf
    @foreach ($memos as $memo)
      <div class="row pb-2 pt-2">
        <label class="block">
          <input type="checkbox" name="memos[]" value={{$memo->id}}>
          <span class="label-text h1 align-bottom">{{ $memo->content }}</span>
        </label>
      </div>
    @endforeach
    <input type="submit" value="購入！" class="btn btn-info">
</form>

@endsection

@section('script')
<script>
  $(document).ready(function(){
    $('input').iCheck({  // inputタグのclass=icheckのものにだけ
        checkboxClass: 'icheckbox_square-blue',
        increaseArea: '40%' // optional
    });
  });
  $('input').on('ifChecked', function(event){
    $(this).parents('.row').css('background-color','#EEEEEE')
  });
  $('input').on('ifUnchecked', function(event){
    $(this).parents('.row').css('background-color','')
  });
</script>
@endsection