@include('shared.header')

<form method="POST" action="" class="w-50 mb-5 pb-5">
	@method('POST')
	@csrf
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Name Product</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Price</label>
		<input type="text" class="form-control" id="exampleInputPassword1" name="price">
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Category</label>
		<input type="text" class="form-control" id="exampleInputPassword1" name="category">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@include('shared.footer')
