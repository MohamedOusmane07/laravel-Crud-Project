<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Crud Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="bg bg-secondary">
    <h3 class="text-white text-center">Product Management App</h3>
</div>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{route('products.index')}}" class="btn bg bg-secondary text-white">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
                <div class="card-header bg bg-secondary">
                    <h3 class="text-white">Create Product</h3>
                </div>
                <form enctype="multipart/form-data" action="{{ route('products.store')  }}" method="post">
                    @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label h5">Name</label>
                        <input type="text" value="{{old('name')}}" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Name" name="name">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Code</label>
                        <input type="text" value="{{old('code')}}" class="@error('code') is-invalid @enderror form-control form-control-lg" placeholder="Code" name="code">

                        @error('code')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Price</label>
                        <input type="text" value="{{old('price')}}" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">

                        @error('price')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Description</label>
                        <textarea class="form-control" cols="50" rows="5" name="description" placeholder="Description">
                            {{old('description')}}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label h5">Image</label>
                        <input type="file" class="form-control form-control-lg" placeholder="Image" name="image">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
