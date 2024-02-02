
<div class="modal fade" id="post_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
            <div class="alert-message">

            </div>
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <label for="title" class="form-label"> Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="title" class="form-label"> Post Title</label>
                            <input type="file" name="title" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="title" class="form-label"> Post Articel</label>
                            <textarea name="details" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-6"></div>
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
