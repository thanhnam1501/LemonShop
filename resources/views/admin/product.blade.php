@extends('layout.AdminHeader')
@section('content')

<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Danh Sách Sản Phẩm</h3>

										<div class="clearfix">
											<div class="dt-buttons btn-overlap btn-group"><a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-search bigger-110 blue"></i> <span class="hidden">Show/hide columns</span></span></a><a class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-copy bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a><a class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-database bigger-110 orange"></i> <span class="hidden">Export to CSV</span></span></a><a class="dt-button buttons-excel buttons-flash btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table"><span><i class="fa fa-file-excel-o bigger-110 green"></i> <span class="hidden">Export to Excel</span></span><div style="position: absolute; left: 0px; top: 0px; width: 39px; height: 35px; z-index: 99;" data-original-title="" title=""><embed id="ZeroClipboard_TableToolsMovie_1" src="{{asset('../css/fonts/flashExport.swf')}}" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="39" height="35" name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=1&amp;width=39&amp;height=35" wmode="transparent"></div></a><a class="dt-button buttons-pdf buttons-flash btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table"><span><i class="fa fa-file-pdf-o bigger-110 red"></i> <span class="hidden">Export to PDF</span></span><div style="position: absolute; left: 0px; top: 0px; width: 39px; height: 35px; z-index: 99;" data-original-title="" title=""><embed id="ZeroClipboard_TableToolsMovie_2" src="{{asset('../css/fonts/flashExport.swf')}}" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="39" height="35" name="ZeroClipboard_TableToolsMovie_2" align="middle" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=39&amp;height=35" wmode="transparent"></div></a><a class="dt-button buttons-print btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></a></div>
										</div>
										{{-- <div class="table-header">
											Results for "Latest Registered Domains"
										</div> --}}

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
														<th>Tên sản phẩm</th>
														<th>Giá</th>
														<th class="hidden-480">Lượt Xem</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Ngày Đăng
														</th>
														<th class="hidden-480">Chế độ</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													@foreach($products as $product)
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">{{$product->name}}</a>
														</td>
														<td>{{$product->price}} đ</td>
														<td class="hidden-480">{{$product->view}}</td>
														<td>{{$product->created_at}}</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">
																@if($product->status=='1')
																	Chưa Đăng
																@else
																	Đã đăng
																@endif
															</span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
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

													
												
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>

	@endsection
	@section('footer')
	
	<script src="{{asset('js/admin/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('js/jquery.mobile.custom.min.js')}})>"+"<"+"/script>");
</script>
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/admin/jquery.dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('js/admin/buttons.flash.min.js')}}"></script>
<script src="{{asset('js/admin/buttons.html5.min.js')}}"></script>
<script src="{{asset('js/admin/buttons.print.min.js')}}"></script>
<script src="{{asset('js/admin/buttons.colVis.min.js')}}"></script>
<script src="{{asset('js/admin/dataTables.select.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('js/admin/ace-elements.min.js')}}"></script>
<script src="{{asset('js/admin/ace.min.js')}}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					{ "bSortable": false },
					null, null,null, null, null,
					{ "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,

					//,
					//"sScrollY": "200px",
					//"bPaginate": false,

					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element

					//"iDisplayLength": 50


					select: {
						style: 'multi'
					}
				} );

				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					{
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					},
					{
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					},
					{
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					}		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});

				////

				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );




				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});



				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});

				

				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/


			})
		</script>


		@endsection