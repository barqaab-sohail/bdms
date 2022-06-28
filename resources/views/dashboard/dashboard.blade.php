@extends('layouts.master.master')
@section('title', 'BARQAAB BDMS')


@section('Heading')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
 
	

	<h3 class="text-themecolor">Dashboard</h3>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
		
		
	</ol>

@stop
@section('content')

	<div class="card">
		<div class="card-body">
			<!--<div class="float-right">
				<input id="month" class="form-control" value="" type="month">
			</div>
			<h4 class="card-title">Salaries</h4>
			-->
			
			<h2 >{{ucwords (Auth::User()->hrEmployee->first_name??'')}} {{ucwords(Auth::User()->hrEmployee->last_name??'')}} Welcome to BDMS</h2>


		</div>
	</div>
	
		

@stop

@push('scripts')
<script>
$(document).ready(function () {
  
	
	

	$('#myDataTable').DataTable({
        stateSave: false,
        dom: 'flrti',
        scrollY:        "500px",
			scrollX:        true,
		scrollCollapse: true,
		paging:         false,
		fixedColumns:   {
    		leftColumns: 1,
    		rightColumns:2
		}
	});
});
	

	

</script>
@endpush

@section('footer')

@stop

