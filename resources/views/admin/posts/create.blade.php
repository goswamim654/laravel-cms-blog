<x-admin-master>
	
	@section('content')
		<!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
            </div>
            <div class="card-body">
             	<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
             		@csrf
				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" id="title" name="title">
				  </div>
				  <div class="form-group">
				    <label for="post_image">Image</label>
				    <input type="file" class="form-control-file" id="post_image" name="post_image">
				  </div>
				  <div class="form-group">
				    <label for="body">Body</label>
				     <textarea class="form-control" id="body" rows="3" name="body"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Create</button>
				</form>
            </div>
          </div>
	@endsection

</x-admin-master>