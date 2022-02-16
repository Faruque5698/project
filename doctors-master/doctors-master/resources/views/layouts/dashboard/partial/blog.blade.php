<div class=" template_boxes blog_boxes">
    <h3>Blogs</h3>
    <!-- <i class="fas fa-edit"></i> -->
    <div class="box">
        @foreach ($blogs as $blog)
        <div>
            <a href="{{ route('admin.blog.details',$blog->blog_slug) }}">
                <img src="{{   Storage::disk('public')->url('blog/'.$blog->blog_image) }}" alt="$blog->blog_image">
                <h2>{{ $blog->blog_title }}</h2>
                <p>{{ $blog->blog_sub_title }}</p>
            </a>
            <div class="btns">
                <a href="{{ route('admin.blog.edit',$blog->id) }}" class="btn">Edit</a>
                <a href="{{ route('admin.blog.show',$blog->id) }}" class="btn">Show</a>

                <button class="btn btn-danger waves-effect" type="button" onclick="deleteblog({{ $blog->id }})">
                  Delete
                </button>
                <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.blog.destroy',$blog->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="btn add_btn">
        <a href="{{ route('admin.blog.create') }}">
            + Create a New Blog
        </a>
    </div>
</div>


    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteblog(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>