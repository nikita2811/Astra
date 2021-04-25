@extends('layouts.template')

@section('content')
<style type="text/css">
	.card{
		padding: 30px;
		margin:30px;
	}
</style>
<div class="row mt-4">
	
	<div class="col-md card">
		<h3>File Exists in V1 but not in V2</h3>
		@foreach($v2 as $v2)
		{{$v2}}
		@endforeach
		</div>

	

	
	<div class="col-md card">
		<h3>File Exists in V2 but not in V1</h3>
		@foreach($v1 as $v1)
		{{$v1}}
		@endforeach
		
		</div>
	</div>



<div class="row">
	<div class="card"><h3>Contents are different</h3>
	@for($i=0;$i< count($comman);$i++)
	<p>{{$comman[$i]}}</p>
@endfor
</div>
	
</div>



@endsection