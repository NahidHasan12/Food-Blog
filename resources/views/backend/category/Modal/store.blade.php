<div class="modal fade" id="cat_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
  aria-hidden="true">
  <div style="border: 2px solid rgb(124, 17, 139); border-radius:5px" class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalSmallTitle">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="md-2">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="text-end">
                <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
