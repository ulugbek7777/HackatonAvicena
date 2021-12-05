@extends('user.user')

@section('content')
@foreach ($tashxislar as $tashxis)
    <div class="tashxisBlock">
        <div>{{$tashxis->tashxis}}</div>
        @foreach ($tashxis->dorilar()->get() as $dori)
            <input class="input" {{$checker ? 'disabled' : null}} type="checkbox" name="" id="">
            <p class="text">{{$dori->name}}</p>
        @endforeach
    </div>
@endforeach
<form action="/users" method="POST" style="display: {{!$checker ? 'none' : null}}">
    @csrf
    <textarea name="tashxis"></textarea>
    <select name="dori[]" class="select" id="ddlViewBy" multiple>
        @foreach ($dorilar as $dori)
            <option onClick="yo()" value="{{$dori->id}}">{{$dori->name}}</option>
        @endforeach
        
        {{-- <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option> --}}
    </select>
    <button type="submit">Send</button>
</form>
@endsection
<script>
    const yo = (e) => {
        var e = document.getElementById("ddlViewBy");
        var strUser = e.value;
        if(strUser === '2') {
            alert('Bemorga askarbinka mumkin emas chunki bemorni qand kasalligi bor.Iltimos bemorga maxsus qand kasalligi borlar uchun beriladigan askarbinka dorisini bering!!!');
            e.value = 1;
        }
    }

    
</script>
<style> 
    textarea {
      width: 100%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
    }
    .tashxisBlock {
        margin-top: 20px;
        background: silver;
    }
    .input {
        display: inline-block;
    }
    .text {
        display: inline-block;
    }
</style>