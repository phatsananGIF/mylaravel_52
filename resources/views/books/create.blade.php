@extends('layouts.app') 

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">เพิ่มข้อมูลหนังสือ</div>

				<div class="panel-body">

					{{ Form::open(['url' => 'btsubmit','files' => true]) }}

						<div class='col-xs-8'>
							<div class='form-group'>
								{{ Form::label('title','ชื่อหนังสือ') }}
								{{ Form::text('title',null,['class'=>'form-control','placeholder'=>'ชื่อหนังสือ']) }}
							</div>
						</div>	

						<div class='col-xs-4'>
							<div class='form-group'>
								{{ Form::label('price','ราคา') }}
								{{ Form::text('price',null,['class'=>'form-control','placeholder'=>'เช่น 100, 50.00']) }}
							</div>
						</div>

						<div class='col-xs-4'>
							<div class='form-group'>
								{{ Form::label('typebooks_id','ประเภทหนังสือ') }}
								{{ Form::select('typebooks_id', App\TypeBooks::all()->pluck('name', 'id'), null,['class'=>'form-control','placeholder'=>'กรุณาเลือกประเภทหนังสือ..']) }}
							</div>
						</div>

						<div class='col-xs-4'>
							<div class='form-group'>
								{{ Form::label('image','รูปภาพ') }}
								{{ Form::file('image', null,['class'=>'form-control']) }}
							</div>
						</div>

						<div class='form-group'>
							<div class='col-sm-10'>
								{{ form::submit('บันทึก',['class'=>'btn btn-primary']) }}								
							</div>
						</div>

					{{ Form::close() }}
					
				</div><!-- panel-body -->
			</div>
		</div>
	</div>
</div>
@endsection