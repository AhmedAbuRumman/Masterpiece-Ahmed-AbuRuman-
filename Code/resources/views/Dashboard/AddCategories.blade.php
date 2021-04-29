@extends('layout.IndexDashboard')

@section('main')

<div class="card card-custom card-shadowless rounded-top-0">
	<!--begin::Body-->
	<div class="card-body p-0">
		<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
			<div class="col-xl-12 col-xxl-10">
				<!--begin::Wizard Form-->
				<form action="" method="POST" enctype="multipart/form-data"  >
					@csrf
					<div class="row justify-content-center">
						<div class="col-xl-9">
							<!--begin::Wizard Step 1-->
							<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
								<h5 class="text-dark font-weight-bold mb-10">Create Category:</h5>
								<!--begin::Group-->
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-left">Category Image</label>
									<div class="col-lg-9 col-xl-9">
										<div class="image-input image-input-outline" id="kt_user_add_avatar">
											<div class="image-input-wrapper" style="background-image: url:{{asset('admin/media/users/100_6.jpg')}})"></div>
											<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
												<i class="fa fa-pen icon-sm text-muted"></i>
												<input type="file" name="category_image" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="category_image" />
											</label>
											<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
												<i class="ki ki-bold-close icon-xs text-muted"></i>
											</span>
										</div>
									</div>
								</div>
								<!--end::Group-->
								<!--begin::Group-->
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Category Name</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="category_name" type="text" value="" />
									</div>
								</div>


								<!--end::Group-->
							</div>

							<!--begin::Wizard Actions-->
							<div class="d-flex justify-content-between border-top pt-10 mt-15">
								<div class="mr-2">

								</div>
								<div>
									<button type="submit" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Create</button>

								</div>
							</div>
							<!--end::Wizard Actions-->
						</div>
					</div>
				</form>
				<!--end::Wizard Form-->
			</div>
		</div>
	</div>
	<!--end::Body-->
</div>
@endsection



