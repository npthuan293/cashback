@include('layouts.header')
<div class="container">
	<div class="row">
		<div class="col-md-12">
				{!! Form::open(['id' => 'formUrl']) !!}
				<div class="form-group">
					{!! Form::text('url', null,  ['id' => 'url','class' => 'form-control','placeholder' => 'Link mua hàng']) !!} <br />
					{!! Form::button('Tạo link rút gọn', ['id' => 'btn_get_link','class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
				<div id='result'>
					{!! Form::text('shorturl', null,  ['class' => 'form-control']) !!}
				</div>
		</div>
	</div>

</div>
@include('layouts.footer')