@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <style>
.row-striped:nth-of-type(odd){
  background-color: #efefef;
  border-left: 4px #000000 solid;
}

.row-striped:nth-of-type(even){
  background-color: #ffffff;
  border-left: 4px #efefef solid;
}

.row-striped {
    padding: 15px 0;
}
</style>

                    
	<div class="container">
		<div class="row row-striped">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
				<h2>OCT</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>Ice Cream Social</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li>
				</ul>
				<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
        </div>
        <hr>
		<div class="row row-striped">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">27</span></h1>
				<h2>OCT</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>Operations Meeting</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>
				</ul>
				<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
	
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
