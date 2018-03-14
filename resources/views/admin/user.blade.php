@extends('layout.app')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Danh Sách Người Dùng</h3>

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Results for "Latest Registered Domains"
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</th>
						<th>Tên Người Dùng</th>
						<th>Email</th>
						<th class="hidden-480">Phone</th>

						<th>
							<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
							Ngày Đăng Ký
						</th>
						<th class="hidden-480">Status</th>

						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</td>

						<td>
							{{$user->name}}
						</td>
						<td>{{($user->email)}}</td>
						<td class="hidden-480">{{$user->phone}}</td>
						<td>{{$user->created_at}}</td>

						<td class="hidden-480">
							<span class="label label-sm label-warning">Expiring</span>
						</td>

						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="javascript:;" onclick="updateUser({{$user->id}})">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="javascript:;" onclick="deleteUser({{$user->id}})">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
							</div>

							<div class="hidden-md hidden-lg">
								<div class="inline pos-rel">
									<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
										<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
									</button>

									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
										<li>
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="ace-icon fa fa-search-plus bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection

@section('script')

@endsection