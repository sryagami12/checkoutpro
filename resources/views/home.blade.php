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

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="" method="POST">
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
                                          <input type="number" name="product_price" class="form-control" id="exampleFormControlInput1" placeholder="0.00">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                                          <input type="number" name="product_quantity" class="form-control" id="exampleFormControlInput1" placeholder="0">
                                      </div>
                                      <div class="mb-3">
                                          <label for="formFile" class="form-label">Product Image</label>
                                          <input class="form-control" name="product_image_path" type="file" id="formFile">
                                      </div>
                                      <hr>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Free option Label</label>
                                          <input type="text" name="checkout_free_option_label" class="form-control" id="exampleFormControlInput1" placeholder="Checkout Free option Label here..." value="Congratulations, you have been selected for a Free Shipping rate!">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Free option Label ($)</label>
                                          <input type="number" name="checkout_free_option_Value" class="form-control" id="exampleFormControlInput1" placeholder="0.00" value="0.00">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Checkout Express Option Label</label>
                                          <input type="text" name="checkout_express_option_label" class="form-control" id="exampleFormControlInput1" placeholder="Checkout Express Option Label Here..." value="✈︎ VIP Express shipping + Surprise gift 🎁">
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

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="https://cdn.shopify.com/s/files/1/0522/7433/1830/products/220829-Product-VW4-BLU-01_92e3b433-ce48-4e38-a4da-d5334de26738.png" alt="image product" width="50px;"></td>
                                <td>vw4 Volkswagen Stroller Wagon (Green - Blue) ✅</td>
                                <td>$ 69.99</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Options
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Open Link</a>
                                          <a class="dropdown-item" href="#">Edit Product Link</a>
                                          <a class="dropdown-item" href="#">Delete Product Link</a>
                                        </div>
                                      </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
