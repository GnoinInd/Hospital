@include('header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="imguploadsec p-4">
                <h4>Image Upload</h4>
                <form action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="custminputupload" type="file" name="images[]" multiple>
                    <button type="submit">
                        <div class="p-1">Upload</div>
                    </button>
                </form>
            </div>
        </div>

        <div class="col-12">
            <form action="{{ route('images.deleteSelected') }}" method="POST">
                @csrf
                <div class="row">
                    @if(isset($images) && count($images) > 0)
                        @foreach($images as $image)
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="imageUploadedViewSection">
                                    <div class="d-flex flex-row">
                                        <input type="checkbox" name="selected_images[]" value="{{ $image->id }}" class="img-fluid m-2">
                                        <img class="mt-2" src="{{ asset($image->path) }}" alt="{{ $image->image_name }}" width="250px" height="200px">
                                    </div>
                                    <div class="d-flex flex-row p-2 custmfileprevBtn">
                                        <button type="submit" name="status" value="active" class="status-button {{ $image->status === 'active' ? 'active' : 'inactive' }}">Active</button>
                                        <button type="submit" name="status" value="inactive" class="status-button {{ $image->status === 'inactive' ? 'active' : 'inactive' }}">Inactive</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No images to display.</p>
                    @endif
                </div>
                <div class="col-12 my-4 custmfileprevBtn">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger delete-button">Delete Selected</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('footer')
