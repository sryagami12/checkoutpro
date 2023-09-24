@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Checkout Links') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        New
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pixelmodal" style="background-color: #1772e7">
                        Facebook Pixel
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="/storeproductlink" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Product Checkout Link</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                          <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name Here...">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Product Price ($)</label>
                                          <input type="decimal" name="product_price" class="form-control" id="exampleFormControlInput1" placeholder="0.00">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                                          <input type="number" name="product_quantity" class="form-control" id="exampleFormControlInput1" placeholder="0" value="1">
                                      </div>
                                      <div class="mb-3">
                                          <label for="formFile" class="form-label">Product Image</label>
                                          <input class="form-control" name="product_image_path" type="file" id="formFile">
                                      </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Language</label>
                                            <select class="form-select" aria-label="Default select example" name="checkout_language" id="select_language_id">
                                                <option value="English">English</option>
                                                <option value="Spanish">Spanish</option>
                                            </select>
                                        </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Free option Label</label>
                                          <input type="text" name="checkout_free_option_label" class="form-control" id="free_shipping_label_id" placeholder="Checkout Free option Label here..." value="Congratulations, you have been selected for a Free Shipping rate!">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Free option Label ($)</label>
                                          <input type="number" name="checkout_free_option_Value" class="form-control" id="exampleFormControlInput1" placeholder="0.00" value="0.00">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Express Option Label</label>
                                          <input type="text" name="checkout_express_option_label" class="form-control" id="express_shipping_label_id" placeholder="Checkout Express Option Label Here..." value="✈︎ VIP Express shipping + Surprise gift 🎁">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Express Option Label ($)</label>
                                          <input type="number" name="checkout_express_option_value" class="form-control" id="exampleFormControlInput1" placeholder="0.00" value="9.99">
                                      </div>
                                      
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Taxes ($)</label>
                                          <input type="number" name="checkout_taxes_value" class="form-control" id="exampleFormControlInput1" placeholder="0.00" value="0.00">
                                      </div>
      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Save">
                                  </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal fade" id="pixelmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="/updatepixel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Facebook Pixel</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Pixel ID</label>
                                          @if ($actualpixel)
                                            <input type="text" name="fbpixel" class="form-control" id="fbpixel_id" placeholder="Pixel ID Here..." value="{{$actualpixel->pixeel}}">
                                          @else
                                            <input type="text" name="fbpixel" class="form-control" id="fbpixel_id" placeholder="Pixel ID Here..."> 
                                          @endif
                                      </div>
      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                  </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Link Language</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productlinks as $productlink)
                            <tr>
                                <th scope="row">{{$productlink->product_id}}</th>
                                <td>{{$productlink->checkout_language}}</td>
                                <td><img src="{{$productlink->product_image_path}}" alt="image product" width="50px;"></td>
                                <td>{{$productlink->product_name}}</td>
                                <td>$ {{ round($productlink->product_price, 2)}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" target="_blank" href="/productbyid?id={{$productlink->product_id}}">Open Link</a>
                                            <!--<a class="dropdown-item" href="#">Edit Product Link</a>-->
                                            <a class="dropdown-item" href="/deleteproductbyid?id={{$productlink->product_id}}">Delete Product Link</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('scripts.modal')
@endsection
