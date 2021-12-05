@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/users" method="get">
        @csrf  
        <div class="input-group mt-5">
            <input name="ps_id" type="text" class="form-control" placeholder="Passport Seriya" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Qidirish</button>
        </div>
    </form>
</div>
@endsection
