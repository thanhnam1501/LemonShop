@extends('layout.app')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Danh Sách Người Dùng</h3>
		<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Thêm mới</a>

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
					<tr class="flag"></tr>
					@foreach($users as $user)
					<tr id="user_{{$user->id}}">
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

								<a class="red btn_delete" href="javascript:;" onclick="deleteUser({{$user->id}})">
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
											<a href="javascript:;" onclick="updateUser({{$user->id}})" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="javascript:;" onclick="deleteUser({{$user->id}})" class="tooltip-error btn_delete" data-rel="tooltip" title="Delete">
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


<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới khách hàng</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" id="formCreate">
					<table class="table table-hover">

						<tbody>
							<tr class="form-field-tags">
								<th>Họ và tên</th>
								<td>				
									<input id="name" type="text" name="name">					
								</td>
							</tr>
							<tr class="form-field-select-4">
								<th>Tên người dùng</th>
								<td>			
									<input id="username" type="text" name="username">					
								</td>
							</tr>
							<tr>
								<th>Email</th>	
								<td>
									<input id="email" type="text" name="email">					
								</td>
							</tr>
							<tr>
								<th>Password</th>
								<td>
									<input id="password" type="Password" name="password">					
								</td>
							</tr>
							<tr>
								<th>Số Điện thoại</th>
								<td>
									<input id="phone" type="text" name="phone">		
								</td>
							</tr>
						</tbody>
					</table>
					<button type="submit" class="btn-primary btn" id="btnSubmit">Thêm nhà cung cấp</button>
				</form>	
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="update"  tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				{{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
				<h4 class="modal-title">Sửa Thông Tin</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" id="formUpdate">
					<table class="table table-hover">

						<tbody>
							<tr class="form-field-tags hidden-md hidden-lg hidden-xs hidden-sm hidden" >
								
								<td>				
									<input class="hidden" id="idUpdate" type="text" name="name">					
								</td>
							</tr>
							<tr class="form-field-tags">
								<th>Họ và tên</th>
								<td>				
									<input type="text" name="name"  id="nameUpdate">					
								</td>
							</tr>
							<tr>
								<th>Email</th>	
								<td>
									<input id="emailUpdate" type="text" name="email">					
								</td>
							</tr>
							<tr>
								<th>Số Điện thoại</th>
								<td>
									<input id="phoneUpdate" type="text" name="phone">		
								</td>
							</tr>
						</tbody>
					</table>
					
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="submit" class="btn btn-primary" data-dismiss="">Sửa</button>

			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#formCreate").submit(function(e){
			e.preventDefault();
			var name = $('#name').val();
			var username = $('#username').val();
			var email = $('#email').val();
			var	password = $('#password').val();
			var phone = $('#phone').val();
			$.ajax({
				url: '{{route('add.user')}}',
				type: 'POST',
				dataType: 'JSON',
				data: {
					name : name,
					username : username,
					email : email,
					password : password,
					phone : phone,
				},
				success : function(res){
					var data = res.data;
					html = '<tr id="user_'+data.id+'">'+
					'<td class="center">'+
					'<label class="pos-rel">'+
					'<input type="checkbox" class="ace" />'+
					'<span class="lbl"></span>'+
					'</label>'+
					'</td>'+

					'<td>'+
					+data.name+
					'</td>'+
					'<td>'+data.email+'</td>'+
					'<td class="hidden-480">'+data.phone+'</td>'+
					'<td>'+data.created_at+'</td>'+

					'<td class="hidden-480">'+
					'<span class="label label-sm label-warning">Expiring</span>'+
					'</td>'+

					'<td>'+
					'<div class="hidden-sm hidden-xs action-buttons">'+
					'<a class="blue" href="#">'+
					'<i class="ace-icon fa fa-search-plus bigger-130"></i>'+
					'</a>'+

					'<a class="green" href="javascript:;" onclick="updateUser('+data.id+')">'+
					'<i class="ace-icon fa fa-pencil bigger-130"></i>'+
					'</a>'+

					'<a class="red btn_delete" href="javascript:;" onclick="deleteUser('+data.id+')">'+
					'<i class="ace-icon fa fa-trash-o bigger-130"></i>'+
					'</a>'+
					'</div>'+

					'<div class="hidden-md hidden-lg">'+
					'<div class="inline pos-rel">'+
					'<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">'+
					'<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>'+
					'</button>'+

					'<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">'+
					'<li>'+
					'<a href="#" class="tooltip-info" data-rel="tooltip" title="View">'+
					'<span class="blue">'+
					'<i class="ace-icon fa fa-search-plus bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+

					'<li>'+
					'<a href="javascript:;" onclick="updateUser('+data.id+')" class="tooltip-success btn_delete" data-rel="tooltip" title="Edit">'+
					'<span class="green">'+
					'<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+

					'<li>'+
					'<a href="javascript:;" onclick="deleteUser('+data.id+')" class="tooltip-error" data-rel="tooltip" title="Delete">'+
					'<span class="red">'+
					'<i class="ace-icon fa fa-trash-o bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+
					'</ul>'+
					'</div>'+
					'</div>'+
					'</td>'+
					'</tr>';
					var flag = $('.flag');
					$(html).insertAfter(flag);
					toastr.success('Thêm mới thành công !');
				}
			})
		});
	});


</script>

<script type="text/javascript">
	function updateUser(id){
		$('#update').modal('show');
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '{{route( 'edit.user')}}',
			type: 'POST',
			dataType: 'JSON',
			data: {id: id},
			success:function(res){
				var data = res.data;
				$('#nameUpdate').val(data.name);
				$('#emailUpdate').val(data.email);
				$('#phoneUpdate').val(data.phone);
				$('#idUpdate').val(data.id);
			}
		});
	}
</script>

<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#formUpdate").on('submit', function(e){
			e.preventDefault();
			var id = $('#idUpdate').val();
			var name = $('#nameUpdate').val();
			var email = $('#emailUpdate').val();
			var phone = $('#phoneUpdate').val();
			console.log(id);
			$.ajax({
				url: '{{route('update.user')}}',
				type: 'POST',
				dataType: 'JSON',
				data: {
					id: id,
					name: name,
					phone: phone,
					email: email
				},
				success:function(res){
					var data = res.data;
					html = '<td class="center">'+
					'<label class="pos-rel">'+
					'<input type="checkbox" class="ace" />'+
					'<span class="lbl"></span>'+
					'</label>'+
					'</td>'+

					'<td>'+
					+data.name+
					'</td>'+
					'<td>'+data.email+'</td>'+
					'<td class="hidden-480">'+data.phone+'</td>'+
					'<td>'+data.created_at+'</td>'+

					'<td class="hidden-480">'+
					'<span class="label label-sm label-warning">Expiring</span>'+
					'</td>'+

					'<td>'+
					'<div class="hidden-sm hidden-xs action-buttons">'+
					'<a class="blue" href="#">'+
					'<i class="ace-icon fa fa-search-plus bigger-130"></i>'+
					'</a>'+

					'<a class="green" href="javascript:;" onclick="updateUser('+data.id+')">'+
					'<i class="ace-icon fa fa-pencil bigger-130"></i>'+
					'</a>'+

					'<a class="red btn_delete" href="javascript:;" onclick="deleteUser('+data.id+')">'+
					'<i class="ace-icon fa fa-trash-o bigger-130"></i>'+
					'</a>'+
					'</div>'+

					'<div class="hidden-md hidden-lg">'+
					'<div class="inline pos-rel">'+
					'<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">'+
					'<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>'+
					'</button>'+

					'<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">'+
					'<li>'+
					'<a href="#" class="tooltip-info" data-rel="tooltip" title="View">'+
					'<span class="blue">'+
					'<i class="ace-icon fa fa-search-plus bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+

					'<li>'+
					'<a href="javascript:;" onclick="updateUser('+data.id+')" class="tooltip-success btn_delete" data-rel="tooltip" title="Edit">'+
					'<span class="green">'+
					'<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+

					'<li>'+
					'<a href="javascript:;" onclick="deleteUser('+data.id+')" class="tooltip-error" data-rel="tooltip" title="Delete">'+
					'<span class="red">'+
					'<i class="ace-icon fa fa-trash-o bigger-120"></i>'+
					'</span>'+
					'</a>'+
					'</li>'+
					'</ul>'+
					'</div>'+
					'</div>'+
					'</td>';
					$('#user_' + data.id).html(html);
						toastr.success('Sửa thành công !');
				}
			})
		});
	});
	
</script>

<script type="text/javascript">
	function deleteUser(id){
		$('.btn_delete').click(function(){
			// alert('aaa');
			swal({
				title: "Bạn có chắc muốn xóa?",
				text: "Bạn sẽ không thể khôi phục lại bản ghi này !",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				cancelButtonText: "Không",
				confirmButtonText: "Có",
				closeOnConfirm: true,
			},
			function(isConfirm){
				if (isConfirm) {
					$.ajax({
						url: '{{ route('delete.user') }}',
						type: 'POST',
						data: {id: id},

						success : function(res) {
							console.log(res);
							if (res.status) {
								$('#user_'+id).remove();
								toastr.success('Xoá thành công!', '',{timeOut: 1000});
							}
						},
						error: function(xhr, ajaxOptions, thrownError) {
							toastr.error('Xoá thất bại!', '',{timeOut: 1000});
						}
					});

				}else{
					toastr.error('Thao tác bị huỷ!', '',{timeOut: 1000});
				}
			});

		});
	}

</script>
@endsection