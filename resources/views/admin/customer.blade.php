@extends('layout.AdminHeader')
@section('content')

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Job</th>
			<th>Action</th>
		</tr>
	</thead>
	{{-- <tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				@if (!empty($user->city_id))
                	{{$user->city->name}}
                @else
                	<strong style="color: red">Chưa cập nhật</strong>
                @endif
            </td>
			{{-- <td>@if (!empty($user->job_id))
                                       {{$user->job->name}}}}
                                   @endif</td></td> --}}
	{{-- 		<td>
				<button type="button" class="btn btn-info">Xem Chi Tiết</button>
			</td>
		</tr>
		@endforeach
	</tbody> --}} 
</table>

@endsection
@section('footer')
	@include('layout.AdminFooter')
@endsection