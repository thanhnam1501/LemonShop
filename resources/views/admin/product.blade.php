@extends('layout.app')
@section('content')

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Danh Sách Sản Phẩm</h3>

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
						<th>Tên Sản Phẩm</th>
						<th>Giá Sản Phẩm</th>
						<th class="hidden-480">content</th>

						<th>
							<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
							Ngày Đăng Ký
						</th>
						<th class="hidden-480">Status</th>

						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
					<tr id="product_{{$product->id}}">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</td>

						<td>
							{{$product->name}}
						</td>
						<td>{{number_format($product->price)}}</td>
						<td class="hidden-480">{!!$product->content!!}</td>
						<td>{{$product->created_at}}</td>

						<td class="hidden-480">
							<span class="label label-sm label-warning">Expiring</span>
						</td>

						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								{{-- <a class="green" href="javascript:;" onclick="updateProduct({{$product->id}})">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a> --}}

								<a class="red btn_delete" href="javascript:;" onclick="deleteProduct({{$product->id}})">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
								<a class="green" href="{{route ('edit.product',$product->id)}}" onclick="">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

						{{-- 	<a class="red btn_delete" href="{{route ('edit.product')}}" onclick="">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a> --}} 
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
											<a href="{{route ('edit.product',$product->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a class="red btn_delete tooltip-error" href="javascript:;" onclick="deleteProduct({{$product->id}})"data-rel="tooltip" title="Delete">
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


<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	function deleteProduct(id){
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
						url: '{{ route('delete.product') }}',
						type: 'POST',
						data: {id: id},

						success : function(res) {
							console.log(res);
							if (res.status) {
								$('#product_'+id).remove();
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