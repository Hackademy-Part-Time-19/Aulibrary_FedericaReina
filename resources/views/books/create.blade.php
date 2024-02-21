<x-layout>

    <h1 style="text-align: center">Upload your Books</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class='mb-3'>
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id='title'>
                    </div>
                    @error('title') <span class="text-danger">{{$message}}</span> @enderror

                    <div class='mb-3'>
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" id='author'>
                    </div>
                    @error('author') <span class="text-danger">{{$message}}</span> @enderror

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="decimal" name="price" class="form-control" id="price">
                    </div>
                    @error('price') <span class="text-danger">{{$message}}</span> @enderror

                    <div class='mb-3'>
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id='description'>
                    </div>
                    @error('description') <span class="text-danger">{{$message}}</span> @enderror

                   <div class='mb-3'>
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id='image'>
                    </div>
                    @error('image') <span class="text-danger">{{$message}}</span> @enderror

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>

        </div>

    </div>

</x-layout>