@include('layouts.header')
	@if(Session::has('user'))) // Laravel 5 (Session('error')   
		<div class="alert alert-danger">
			{{ Session::get('user')}} // Laravel 5 {{Session('error')}} 
		</div>
	@else
		<p>ABC</p>
	@endif
	{!! Form::open(['url' => '/redirect']) !!}
		{!! Form::submit('Đăng nhập với Facebook')!!}
		{!! Form::close() !!}
		{!! Form::open(['url' => '/get-link']) !!}
		{!! Form::label('url','Link mua hàng:') !!}
		{!! Form::text('url') !!} <br />
		{!! Form::submit('Tạo link rút gọn')!!}
	{!! Form::close() !!}
	@section('result')
		@if(isset($id))
			{{ $id }}
		@endif
	@show
@include('layouts.footer')