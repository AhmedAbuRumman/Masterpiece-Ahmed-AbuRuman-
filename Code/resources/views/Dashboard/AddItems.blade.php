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
								<h5 class="text-dark font-weight-bold mb-10">Create Items:</h5>
								<!--begin::Group-->
								
								<!--end::Group-->
								<!--begin::Group-->
                                <div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Item Name</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="item_name" type="text" value="" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Item Calories</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="item_calories" type="number" value="" />
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Item Fat</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="item_fat" type="number" value="" />
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Item Protein</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="item_protein" type="number" value="" />
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label">Item Carbohydrates</label>
									<div class="col-lg-9 col-xl-9">
										<input class="form-control form-control-solid form-control-lg" name="item_carb" type="number" value="" />
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



