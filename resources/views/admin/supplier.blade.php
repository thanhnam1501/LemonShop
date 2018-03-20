@extends('layout.app')
@section('content')
<div style="float: left" class="container col-xs-4">
	<legend>Thêm mới Nhà cung cấp</legend>

	<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" id="formCreate">
		<table class="table table-hover">

			<tbody>
				<tr class="form-field-tags">
					<th>Tên nhà cung cấp</th>
					<td>				
						<input type="text" name="name" id="name">					
					</td>
				</tr>

				<tr>
					<th>Mô tả</th>
					<td>
						<input type="text" name="content" id="content">					
					</td>
				</tr>
				
			</tbody>
		</table>
		<button type="submit" class="btn-primary btn" id="btnSubmit">Thêm nhà cung cấp</button>
	</form>
</div>
	<div style="float: left;" class="container col-xs-8">
		<table id="dynamic-table" class="table table-striped table-bordered table-hover">
			<thead>
				<tr >
					{{-- <th class="center">
						Stt
					</th> --}}
					<th>Nhà cung cấp</th>
					<th>Mô tả</th>
					<th class="hidden-480">Số lượng sản phẩm</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<tr class="flag"></tr>
				@foreach($suppliers as $supplier)
				<tr id="supplier_{{$supplier->id}}" >
					<td>
						{{$supplier->name}}
					</td>

					<td>
						{{$supplier->content}} 
					</td>

					<td>
						{{$supplier->content}} 
					</td>

					<td>
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="blue" href="#">
								<i class="ace-icon fa fa-search-plus bigger-130"></i>
							</a>

							<a class="green" href="javascript:;" onclick="updateSupplier({{$supplier->id}})">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a class="red btn_delete" href="javascript:;" onclick="deleteSupplier({{$supplier->id}})">
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
										<a  class="tooltip-info" data-rel="tooltip" title="View">
											<span class="blue">
												<i class="ace-icon fa fa-search-plus bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="javascript:;" onclick="updateSupplier({{$supplier->id}})" class="tooltip-success" data-rel="tooltip" title="Edit">
											<span class="green">

												<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a class="red btn_delete tooltip-error" href="javascript:;" onclick="deleteSupplier({{$supplier->id}})" data-rel="tooltip" title="Delete">
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



<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exa	mpleModalLabel">Sửa Thông Tin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" id="formUpdate">
					<table class="table table-hover">

						<tbody>
							<tr class="hidden">
								<td class="hidden">
									<input type="hidden" name="id" id="idUpdate"></td>

								</tr>
								<tr class="form-field-tags">
									<th>Tên nhà cung cấp</th>	
									<td>			
										<input type="text" name="name" id="nameUpdate">					
									</td>
								</tr>

								<tr>
									<th>Mô tả</th>
									<td>
										<input type="text" name="content" id="contentUpdate">					
									</td>
								</tr>

							</tbody>
						</table>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
							<button type="submit" class="btn btn-primary" data-dismiss="">Sửa</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	@endsection

	@section('script')
	<script src="{{asset('/js/admin/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('/js/admin/jquery.dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/admin/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('/js/admin/dataTables.select.min.js')}}"></script>


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
				var content = $('#content').val();

				$.ajax({
					url: '{{route('add_supplier')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {
						name: name,
						content:content
					},
					success : function(res) {
						var data = res.data;
						console.log(data);
						html = '<tr id = "supplier_'+data.id+'">'+
						'<td>'
						+data.name+
						'</td>'+
						'<td>'+data.content+ '</td>'+
						'<td>'+data.content+ '</td>'+
						'<td>'+
						'<div class="hidden-sm hidden-xs action-buttons">'+
						'<a class="blue" href="#">'+
						'<i class="ace-icon fa fa-search-plus bigger-130"></i>'+
						'</a>'+
						'<a class="green" href="javascript:;" onclick="updateSupplier('+data.id+')">'+
						'<i class="ace-icon fa fa-pencil bigger-130"></i>'+
						'</a>'+
						'	<a class="red btn_delete" href="javascript:;" onclick="deleteSupplier('+data.id+')">'+
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
						'<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">'+
						'<span class="green">'+
						'<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>'+
						'</span>'+
						'</a>'+
						'</li>'+
						'<li>'+
						'<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">'+
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
		function updateSupplier(id){
			$('#update').modal('show');
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '{{ route('edit_supplier')}}',
				type: 'POST',
				dataType: 'JSON',
				data: {id : id},
				success:function(res){
					var data = res.data;
					$('#nameUpdate').val(data.name)
					$('#contentUpdate').val(data.content)
					$('#idUpdate').val(data.id)
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
			$("#formUpdate").submit(function(e){
				
				e.preventDefault();
				var id = $('#idUpdate').val();
				var name = $('#nameUpdate').val();
				var content = $('#contentUpdate').val();
				console.log(id);
				$.ajax({
					url: '{{route('update_supplier')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {
						id: id,
						name: name,
						content:content
					},
					success : function(res) {
						var data = res.data;
						html =
						'<td>'+
						'<a href="#">'+data.name+'</a>'+
						'</td>'+
						'<td>'+data.content+ '</td>'+
						'<td>'+data.content+ '</td>'+
						'<td>'+
						'<div class="hidden-sm hidden-xs action-buttons">'+
						'<a class="blue" href="#">'+
						'<i class="ace-icon fa fa-search-plus bigger-130"></i>'+
						'</a>'+
						'<a class="green" href="javascript:;" onclick="updateSupplier('+data.id+')">'+
						'<i class="ace-icon fa fa-pencil bigger-130"></i>'+
						'</a>'+
						'	<a class="red btn_delete" href="javascript:;" onclick="deleteSupplier('+data.id+')">'+
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
						'<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">'+
						'<span class="green">'+
						'<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>'+
						'</span>'+
						'</a>'+
						'</li>'+
						'<li>'+
						'<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">'+
						'<span class="red">'+
						'<i class="ace-icon fa fa-trash-o bigger-120"></i>'+
						'</span>'+
						'</a>'+
						'</li>'+
						'</ul>'+
						'</div>'+
						'</div>'+
						'</td>';
						$('#supplier_' + data.id).html(html);
						toastr.success('Sửa thành công !');
					}
				})
			});
		});
	</script>

	<script type="text/javascript">
		function deleteSupplier(id){
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
						url: '{{ route('delete.supplier') }}',
						type: 'POST',
						data: {id: id},

						success : function(res) {
							console.log(res);
							if (res.status) {
								$('#supplier_'+id).remove();
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
