
<div class="modal fade" id="post_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div style="border: 2px solid rgb(124, 17, 139); border-radius:5px" class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
            <div class="alert-message">

            </div>
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Add New Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <label for="title" class="form-label"> Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="category" class="form-label">Select Category</label> <br>
                          <select style="width:300px" class="form-control select2" name="category" id="category">
                            @forelse ($category as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @empty
                                <span class="text-danger text-center">No Category Found</span>
                            @endforelse
                        </select>
                        </div>
                    </div>
                    <div class="col-6">
                      <div class="mb-2">
                        <label for="status" class="form-label">Select Status</label>
                        <select class="form-control" name="status" id="status">
                          <option value="1">Active</option>
                          <option value="0">Deactive</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label for="image" class="form-label"> Post Image</label>
                        <input type="file" name="image" class="form-control dropify">
                    </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="details" class="form-label"> Post Articel</label>
                    <textarea id="summernote" name="details" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>

        </div>
                <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary submit_btn">Save</button>
                </div>
           </form>
      </div>
    </div>
  </div>
