@extends('app')
@section('content')
		
<section class="container">
    <form action="{{ url('account_info/'.$query->id) }}" method="post" >
        <style>
            .form-control{
                width: 50%;
            }
        </style>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        帳號: <input type="text" name="account" maxlength="8" class="form-control" value="{{ $query->account }}"><br>
        名字: <input type="text" name="name" maxlength="10" class="form-control" value="{{ $query->name }}"><br>
        性別: <input type="radio" name="sex" value="1" >男
                <input type="radio" name="sex" value="0">女<br>
        生日: <input type="date" name="birth" value="{{ $query->birth }}"><br>
        E-mail: <input type="email" name="mail" class="form-control" value="{{ $query->mail }}"><br>
        備註: <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $query->description }}</textarea>
        <input type="submit" value="送出" class="btn btn-primary">
    </form>
    
</section>

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
@stop