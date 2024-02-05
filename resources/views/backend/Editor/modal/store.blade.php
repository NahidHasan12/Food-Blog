
<div class="modal fade" id="editor_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalSmallTitle"
  aria-hidden="true">
  <div style="border: 2px solid rgb(124, 17, 139); border-radius:5px" class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalSmallTitle">Add New Editor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('editor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md-2">
                <label for="first_name" class="form-label">first Name</label>
                <input type="text" name="first_name" class="form-control">
                @error('first_name')
                    <span class="bg-light text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="md-2">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control">
                @error('last_name')
                    <span class="bg-light text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="md-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control">
                @error('email')
                    <span class="bg-light text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="md-2">
                <label for="Password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control">
                @error('password')
                    <span class="bg-light text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="md-2">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="text-end">
                <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
