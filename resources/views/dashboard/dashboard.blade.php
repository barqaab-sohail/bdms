@extends('layouts.master.master')
@section('title', 'BARQAAB HR')


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
			
			<h2 >{{ucwords (Auth::User()->hrEmployee->first_name??'')}} {{ucwords(Auth::User()->hrEmployee->last_name??'')}} Welcome to HRMS</h2>


		</div>
	</div>
	
		

@stop

@push('scripts')
<script>
$(document).ready(function () {
  
	//var url = "{{route('task.index')}}";
	//refreshTable("{{route('task.index')}}");
	//load_data();
	$('#fromImportSalary').on('submit', function(event){
	 	//preventDefault work through formFunctions;
		url="{{route('employeeSalaryImport')}}";
		$('.fa-spinner').show();	
	   	submitFormAjax(this, url);
	}); //en

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
	

	 function load_data(){
    var loadUrl = "{{route('task.index')}}";
          $("#append_data").load(loadUrl, function (){
            $('#myTable').DataTable({
              stateSave: false,
              "order": [[ 2, "asc" ]],
              "destroy": true,
              "columnDefs": [
              { "width": "30%", "targets": 0, },
              {"targets": "_all", "className": "dt-center"}
              ],
                   dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2]
                            }
                        },
                    ]
                 
            });
        });
  	}

</script>
@endpush

@section('footer')

@stop

