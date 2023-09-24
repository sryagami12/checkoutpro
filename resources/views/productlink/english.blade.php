<html>
   <!-- This Checkout is powered by Checkout X - visit www.checkout-x.com for more info! -->
   <!-- Mirrored from checkout.froppyt.com/f/4DGH1XJG/c/KMWCPNRGNJR by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 03:36:56 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title> CHECKOUT SECURE </title>
      <link rel="stylesheet" media="screen" href="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/front-40d519d210bdf230002063e6455d10b48b84df43130ca30d65b5966f2e4c7d62.css')}}" />
      <script src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/front-6d9d5904687d27bc0abae7ed18e3d1f9b6c0e7d6d0942c96d94ac9d73d155c05.js')}}"></script>
      <link href="{{secure_asset('cdn.shopify.com/s/files/1/0088/4899/8459/files/Diseno_sin_titulo_1_1a7e7b40-7b0a-4e2e-80f2-e1aef91d7511de8a.png')}}" rel='icon'>
      <meta content='width=device-width, initial-scale=1' name='viewport'>
      <!-- Meta Pixel Code -->
      <script>
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '{{$actualPixel->pixeel}}');
         fbq('track', 'InitiateCheckout');
      </script>
      <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1198371520827281&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Meta Pixel Code -->

   </head>
   <body class='front-shops-checkouts-show'>
      <div data-checkout='760789837' data-countries='[]' data-locale='en' data-money-format='$ 0.00' data-page='checkout' data-shop-id='36996' id='js-data'></div>
      <form class="edit_checkout" id="edit_checkout_760789837" action="/store" autocomplete="off" accept-charset="UTF-8" method="POST"> @csrf <div class='container-fluid d-lg-none cart-summary-wrapper splitter'>
         <input type="text" name="language" value="english" hidden>
         <input type="text" id="subtotal_dolar" name="subtotal_dolar" hidden>
         <input type="text" id="shipping_price_dolar" name="shipping_price_dolar" hidden>
         <input type="text" id="taxes_dolar" name="taxes_dolar" hidden>
         <input type="text" id="total_dolar" name="total_dolar" hidden>
         <input type="text" id="client_currency" name="client_currency" hidden>
         <input type="text" id="client_currency_exchange" name="client_currency_exchange" hidden>
         <input type="text" id="shipping_description" name="shipping_description" hidden>     
         <div class='row'>
               <div class='card'>
                  <div class='cart-summary line-row first d-lg-none' data-function='mobile-cart-toggler'>
                     <div class='d-flex align-items-center'>
                        <i class='ion-ios-cart-outline cart-icon'></i>
                        <span>
                           <span class='cart-show-label'>Show order summary</span>
                           <span class='cart-hide-label d-none'>Hide order summary</span>
                        </span>
                        <i class='ion-chevron-down cart-toggle'></i>
                     </div>
                     <div class='cart-price' data-function='cart-summary-price'>
                        <div class='final-price' id="mobile_total_1_id">
                           {{number_format($productlink->product_price, 2, '.', '')}}
                        </div>
                     </div>
                     <script>
                        $(document).ready(setTimeout(function() {
                           $('[data-function="cart-summary-price-discounted-wrapper"]').addClass('discount-applied')
                        }, 500))
                     </script>
                  </div>
                  <div class='cart-details' data-function='slide-toggle' style='display: none;'>
                     <div class='cart'>
                        <div class='item line-row'>
                           <div class='d-flex align-items-center'>
                              <div class='item-img-wrapper'>
                                 <div class='item-img'>
                                    <img src='{{($productlink->product_image_path)}}'>
                                    <input type="text" value="{{$productlink->product_image_path}}" name="product_image_path" hidden>
                                 </div>
                                 <div class='item-qty'> {{$productlink->product_quantity}} </div>
                                 <input type="number" value="{{$productlink->product_quantity}}" name="product_quantity" hidden>
                              </div>
                              <div class='d-flex flex-column'>
                                 <span class='bold'>
                                    {{$productlink->product_name}}
                                 </span>
                                 <input type="text" value="{{$productlink->product_name}}" name="product_name" hidden>
                              </div>
                           </div>
                           <div class='ml-1 bold price' id="mobile_total_2_id">
                              {{number_format($productlink->product_price, 2, '.', '')}} USD
                           </div>
                           <input type="text" value="{{$productlink->product_price}}" name="product_price" hidden>
                        </div>
                        <div class='line-row d-block' data-function='cart-total-container'>
                           <div class='d-flex justify-content-between'>
                              <span> Subtotal </span>
                              <span class='[]' id="subtotal_2_id">
                                 {{number_format($productlink->product_price, 2, '.', '')}}
                              </span>
                           </div>
                           <div class='d-flex justify-content-betwtoten space-top-2'>
                              <span id="shipping_label_mobile">
                                 {{$productlink->checkout_free_option_label}}
                              </span>
                              <input type="text" value="{{$productlink->checkout_free_option_label}}" name="checkout_free_option_label" hidden>
                              <span>
                                 <span class='accent free-shipping' id="shipping_value_mobile">Free</span>
                              </span>
                              <input type="text" value="{{$productlink->checkout_free_option_value}}" name="checkout_free_option_value" hidden>
                           </div>
                           <div class='d-flex justify-content-between space-top-2'>
                              <span> Taxes </span>
                              <span id="taxes_2_id">
                                 {{number_format($productlink->checkout_taxes_value, 2, '.', '')}}
                              </span>
                              <input type="text" value="{{$productlink->checkout_taxes_value}}" name="checkout_taxes_value" hidden>
                           </div>
                           <div class='d-flex justify-content-between space-top-2'>
                              <span class='bold'> Total </span>
                              <span class='bold' data-function='three-d-secure-data-container' data-three-d-secure='eyJlbmFibGVkIjpmYWxzZSwiYW1vdW50IjoiNjkuOTkiLCJjdXJyZW5jeSI6
                                 IlVTRCIsImVtYWlsIjoiIn0=
                                 ' data-total-amount='69.99' id="mobile_total_5_id">
                                 {{number_format($productlink->product_price, 2, '.', '')}}
                              </span>
                           </div>
                        </div>
                        <div class='line-row discount-container'>
                           <div class='d-flex flex-column discount-box w-100'>
                              <div class='d-flex justify-content-between mb-lg-0'>
                                 <div class='form-group col-10 col-md-10 col-lg-9 mb-0 pl-0'>
                                    <input class="form-control " data-function="discount-text" data-validate="false" id="checkout_discount_title_24ef5e5c-2e86-4086-9aa8-6e3007875ea3" type="text" name="checkout[discount][title]" />
                                    <i class='icon ion-android-warning'></i>
                                    <svg class='svg-custom-icon svg-icon-discount' height='20' viewBox='0 0 16 16' width='20' xmlns='https://www.w3.org/2000/svg'>
                                       <path d='M-73.884-1568.346l-.89-.827a.44.44,0,0,0-.3-.116.486.486,0,0,0-.061,0l-1.227.167a1.37,1.37,0,0,1-.182.013,1.254,1.254,0,0,1-1.249-1.011l-.214-1.17a.408.408,0,0,0-.223-.293l-1.094-.558a1.191,1.191,0,0,1-.547-1.613l.544-1.068a.4.4,0,0,0,0-.363l-.544-1.068a1.192,1.192,0,0,1,.547-1.614l1.094-.558a.412.412,0,0,0,.223-.293l.214-1.171a1.255,1.255,0,0,1,1.249-1.01,1.285,1.285,0,0,1,.182.013l1.227.166a.474.474,0,0,0,.062,0,.436.436,0,0,0,.3-.116l.89-.826A1.292,1.292,0,0,1-73-1582a1.29,1.29,0,0,1,.884.346l.89.826a.438.438,0,0,0,.3.116.467.467,0,0,0,.062,0l1.227-.166a1.292,1.292,0,0,1,.182-.013,1.254,1.254,0,0,1,1.249,1.01l.214,1.171a.412.412,0,0,0,.223.293l1.094.558a1.191,1.191,0,0,1,.547,1.613l-.544,1.068a.4.4,0,0,0,0,.363l.544,1.068a1.191,1.191,0,0,1-.547,1.613l-1.094.558a.408.408,0,0,0-.223.293l-.214,1.17a1.253,1.253,0,0,1-1.248,1.01,1.412,1.412,0,0,1-.183-.012l-1.227-.167a.486.486,0,0,0-.061,0,.441.441,0,0,0-.3.116l-.89.827A1.291,1.291,0,0,1-73-1568,1.292,1.292,0,0,1-73.884-1568.346Zm-.306-1.406.891.826a.439.439,0,0,0,.3.117.438.438,0,0,0,.3-.117l.891-.826a1.285,1.285,0,0,1,.881-.344,1.272,1.272,0,0,1,.181.013l1.227.166a.4.4,0,0,0,.062,0,.424.424,0,0,0,.422-.341l.214-1.171a1.218,1.218,0,0,1,.657-.867l1.095-.557a.4.4,0,0,0,.185-.546l-.544-1.068a1.168,1.168,0,0,1,0-1.072l.544-1.068a.4.4,0,0,0-.185-.547l-1.095-.556a1.221,1.221,0,0,1-.657-.867l-.214-1.171a.423.423,0,0,0-.421-.342.418.418,0,0,0-.062,0l-1.227.166a1.29,1.29,0,0,1-.181.013,1.288,1.288,0,0,1-.881-.344l-.891-.827a.438.438,0,0,0-.3-.117.439.439,0,0,0-.3.117l-.891.827a1.288,1.288,0,0,1-.881.344,1.291,1.291,0,0,1-.181-.013l-1.227-.166a.405.405,0,0,0-.062,0,.425.425,0,0,0-.422.342l-.214,1.171a1.221,1.221,0,0,1-.657.867l-1.095.556a.4.4,0,0,0-.185.547l.544,1.068a1.168,1.168,0,0,1,0,1.072l-.544,1.068a.4.4,0,0,0,.185.546l1.095.557a1.219,1.219,0,0,1,.657.867l.214,1.171a.424.424,0,0,0,.422.341.39.39,0,0,0,.062,0l1.227-.166a1.389,1.389,0,0,1,.181-.012A1.285,1.285,0,0,1-74.19-1569.752Zm1.558-3.148a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-72.632-1572.9Zm.8,0a.655.655,0,0,0,.67.637.655.655,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.655.655,0,0,0-71.828-1572.9Zm-4.36,1.278a.4.4,0,0,1,0-.586l5.759-5.471a.453.453,0,0,1,.617,0,.4.4,0,0,1,0,.586l-5.759,5.471a.445.445,0,0,1-.308.121A.447.447,0,0,1-76.188-1571.622Zm-.128-5.479a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-76.316-1577.1Zm.8,0a.655.655,0,0,0,.67.637.654.654,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.654.654,0,0,0-75.512-1577.1Z' transform='translate(81 1583)'></path>
                                    </svg>
                                    <label for="checkout_discount_title_24ef5e5c-2e86-4086-9aa8-6e3007875ea3">Discount code</label>
                                 </div>
                                 <div class='form-group col-2 col-md-2 col-lg-3 mb-0 p-0'>
                                    <button class='btn btn-primary w-100 p-0' data-function='submit-discount' data-url='https://checkout.froppyt.com/f/4DGH1XJG/c/760789837/discounts' disabled type='button'>
                                       <span class='btn-text'>
                                          <i class='icon ion-android-arrow-forward'></i>
                                          <span> Apply </span>
                                       </span>
                                       <div class='btn-loader'></div>
                                    </button>
                                 </div>
                              </div>
                              <div class='d-flex'>
                                 <div class='error is-invalid' data-function='discount-error'> 
                                    Make sure that the code you have applied is correct, not used before or expired.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class='card d-lg-none'>
            <div class='row'>
               <div class='col-12 cart-discount-wrapper pushed'>
                  <div class='row discount-container'>
                     <div class='col-12'>
                        <div class='d-flex flex-column discount-box w-100'>
                           <div class='d-flex justify-content-between mb-lg-0'>
                              <div class='form-group col-10 col-md-10 col-lg-9 mb-0 pl-0'>
                                 <input class="form-control " data-function="discount-text" data-validate="false" id="checkout_discount_title_b2273688-3de8-4b45-881a-ac857121523f" type="text" name="checkout[discount][title]" />
                                 <i class='icon ion-android-warning'></i>
                                 <svg class='svg-custom-icon svg-icon-discount' height='20' viewBox='0 0 16 16' width='20' xmlns='https://www.w3.org/2000/svg'>
                                    <path d='M-73.884-1568.346l-.89-.827a.44.44,0,0,0-.3-.116.486.486,0,0,0-.061,0l-1.227.167a1.37,1.37,0,0,1-.182.013,1.254,1.254,0,0,1-1.249-1.011l-.214-1.17a.408.408,0,0,0-.223-.293l-1.094-.558a1.191,1.191,0,0,1-.547-1.613l.544-1.068a.4.4,0,0,0,0-.363l-.544-1.068a1.192,1.192,0,0,1,.547-1.614l1.094-.558a.412.412,0,0,0,.223-.293l.214-1.171a1.255,1.255,0,0,1,1.249-1.01,1.285,1.285,0,0,1,.182.013l1.227.166a.474.474,0,0,0,.062,0,.436.436,0,0,0,.3-.116l.89-.826A1.292,1.292,0,0,1-73-1582a1.29,1.29,0,0,1,.884.346l.89.826a.438.438,0,0,0,.3.116.467.467,0,0,0,.062,0l1.227-.166a1.292,1.292,0,0,1,.182-.013,1.254,1.254,0,0,1,1.249,1.01l.214,1.171a.412.412,0,0,0,.223.293l1.094.558a1.191,1.191,0,0,1,.547,1.613l-.544,1.068a.4.4,0,0,0,0,.363l.544,1.068a1.191,1.191,0,0,1-.547,1.613l-1.094.558a.408.408,0,0,0-.223.293l-.214,1.17a1.253,1.253,0,0,1-1.248,1.01,1.412,1.412,0,0,1-.183-.012l-1.227-.167a.486.486,0,0,0-.061,0,.441.441,0,0,0-.3.116l-.89.827A1.291,1.291,0,0,1-73-1568,1.292,1.292,0,0,1-73.884-1568.346Zm-.306-1.406.891.826a.439.439,0,0,0,.3.117.438.438,0,0,0,.3-.117l.891-.826a1.285,1.285,0,0,1,.881-.344,1.272,1.272,0,0,1,.181.013l1.227.166a.4.4,0,0,0,.062,0,.424.424,0,0,0,.422-.341l.214-1.171a1.218,1.218,0,0,1,.657-.867l1.095-.557a.4.4,0,0,0,.185-.546l-.544-1.068a1.168,1.168,0,0,1,0-1.072l.544-1.068a.4.4,0,0,0-.185-.547l-1.095-.556a1.221,1.221,0,0,1-.657-.867l-.214-1.171a.423.423,0,0,0-.421-.342.418.418,0,0,0-.062,0l-1.227.166a1.29,1.29,0,0,1-.181.013,1.288,1.288,0,0,1-.881-.344l-.891-.827a.438.438,0,0,0-.3-.117.439.439,0,0,0-.3.117l-.891.827a1.288,1.288,0,0,1-.881.344,1.291,1.291,0,0,1-.181-.013l-1.227-.166a.405.405,0,0,0-.062,0,.425.425,0,0,0-.422.342l-.214,1.171a1.221,1.221,0,0,1-.657.867l-1.095.556a.4.4,0,0,0-.185.547l.544,1.068a1.168,1.168,0,0,1,0,1.072l-.544,1.068a.4.4,0,0,0,.185.546l1.095.557a1.219,1.219,0,0,1,.657.867l.214,1.171a.424.424,0,0,0,.422.341.39.39,0,0,0,.062,0l1.227-.166a1.389,1.389,0,0,1,.181-.012A1.285,1.285,0,0,1-74.19-1569.752Zm1.558-3.148a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-72.632-1572.9Zm.8,0a.655.655,0,0,0,.67.637.655.655,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.655.655,0,0,0-71.828-1572.9Zm-4.36,1.278a.4.4,0,0,1,0-.586l5.759-5.471a.453.453,0,0,1,.617,0,.4.4,0,0,1,0,.586l-5.759,5.471a.445.445,0,0,1-.308.121A.447.447,0,0,1-76.188-1571.622Zm-.128-5.479a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-76.316-1577.1Zm.8,0a.655.655,0,0,0,.67.637.654.654,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.654.654,0,0,0-75.512-1577.1Z' transform='translate(81 1583)'></path>
                                 </svg>
                                 <label for="checkout_discount_title_b2273688-3de8-4b45-881a-ac857121523f">Discount code</label>
                              </div>
                              <div class='form-group col-2 col-md-2 col-lg-3 mb-0 p-0'>
                                 <button class='btn btn-primary w-100 p-0' data-function='submit-discount' data-url='https://checkout.froppyt.com/f/4DGH1XJG/c/760789837/discounts' disabled type='button'>
                                    <span class='btn-text'>
                                       <i class='icon ion-android-arrow-forward'></i>
                                       <span> Apply </span>
                                    </span>
                                    <div class='btn-loader'></div>
                                 </button>
                              </div>
                           </div>
                           <div class='d-flex'>
                              <div class='error is-invalid' data-function='discount-error'> Make sure that the code you have applied is correct, not used before or expired. </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class='container'>
            <div class='row'>
               <div class='col-12'>
                  <div class='header clearfix'>
                     <div class='logo-wrapper'>
                        
                     </div>
                     <div class='badges-wrapper'>
                        <img class='secure-logos' src='{{secure_asset('cdn.shopify.com/s/files/1/0522/7433/1830/files/class-payments730e.png?v=1675448311')}}'>
                     </div>
                  </div>
                  <div class='row space-4'>
                     <div class='col-12 col-lg-7'>
                        <div>
                           <div class='timer-title d-flex align-items-center'>
                              <div class="timer-fire">
                                 <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="125px" height="189.864px" viewBox="0 0 125 189.864" enable-background="new 0 0 125 189.864" xml:space="preserve">
                                    <path class="flame-main" fill="#F36E21" d="M76.553,186.09c0,0-10.178-2.976-15.325-8.226s-9.278-16.82-9.278-16.82s-0.241-6.647-4.136-18.465
                                       c0,0,3.357,4.969,5.103,9.938c0,0-5.305-21.086,1.712-30.418c7.017-9.333,0.571-35.654-2.25-37.534c0,0,13.07,5.64,19.875,47.54
                                       c6.806,41.899,16.831,45.301,6.088,53.985" />
                                    <path class="flame-main one" fill="#F6891F" d="M61.693,122.257c4.117-15.4,12.097-14.487-11.589-60.872c0,0,32.016,10.223,52.601,63.123
                                       c20.585,52.899-19.848,61.045-19.643,61.582c0.206,0.537-19.401-0.269-14.835-18.532S57.576,137.656,61.693,122.257z" />
                                    <path class="flame-main two" fill="#FFD04A" d="M81.657,79.192c0,0,11.549,24.845,3.626,40.02c-7.924,15.175-21.126,41.899-0.425,64.998
                                       C84.858,184.21,125.705,150.905,81.657,79.192z" />
                                    <path class="flame-main three" fill="#FDBA16" d="M99.92,101.754c0,0-23.208,47.027-12.043,80.072c0,0,32.741-16.073,20.108-45.79
                                       C95.354,106.319,99.92,114.108,99.92,101.754z" />
                                    <path class="flame-main four" fill="#F36E21" d="M103.143,105.917c0,0,8.927,30.753-1.043,46.868c-9.969,16.115-14.799,29.041-14.799,29.041
                                       S134.387,164.603,103.143,105.917z" />
                                    <path class="flame-main five" fill="#FDBA16" d="M62.049,104.171c0,0-15.645,67.588,10.529,77.655C98.753,191.894,69.033,130.761,62.049,104.171z" />
                                    <path class="flame" fill="#F36E21" d="M101.011,112.926c0,0,8.973,10.519,4.556,16.543C99.37,129.735,106.752,117.406,101.011,112.926z" />
                                    <path class="flame one" fill="#F36E21" d="M55.592,126.854c0,0-3.819,13.29,2.699,16.945C64.038,141.48,55.907,132.263,55.592,126.854z" />
                                    <path class="flame two" fill="#F36E21" d="M54.918,104.595c0,0-3.959,6.109-1.24,8.949C56.93,113.256,52.228,107.329,54.918,104.595z" />
                                 </svg>
                              </div>
                              <div class='bold ml-2'>
                                 <div class='mt-2'> Strong demand! Complete your order before it's too late!</div>
                              </div>
                           </div>
                           <div class='time-wrapper' data-finished-text='Your cart reservation has ended.' id='time-wrapper'> Your cart is reserved for <span id='time'> 10:00 </span> minutes. </div>
                        </div>
                        <div class='section-title d-flex align-items-center mt-2 mt-lg-0'>
                           <h2> 1. Shipping Details</h2>
                           <div class='completed-indicator' data-function='shipping-details-completed-indicator'></div>
                        </div>
                        <div class='card' data-function='checkout-form-shipping-section' data-url='KMWCPNRGNJR/shipping_rates.html'>
                           <script>
                              //
                              <![CDATA[var COUNTRY_STATES = {
                                       "US": ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"],
                                       "CA": ["Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Northwest Territories", "Nova Scotia", "Nunavut", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan", "Yukon"],
                                       "AU": ["Australian Capital Territory", "New South Wales", "Northern Territory", "Queensland", "South Australia", "Tasmania", "Victoria", "Western Australia"],
                                       "IN": ["Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal"],
                                       "BR": ["Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Paraná", "Paraíba", "Pará", "Pernambuco", "Piauí", "Rio Grande do Norte", "Rio Grande do Sul", "Rio de Janeiro", "Rondônia", "Roraima", "Santa Catarina", "Sergipe", "São Paulo", "Tocantins"],
                                       "RO": ["Alba", "Arad", "Arges", "Bacau", "Bihor", "Bistrita-Nasaud", "Botosani", "Braila", "Brasov", "Bucuresti", "Buzau", "Calarasi", "Caras-Severin", "Cluj", "Constanta", "Covasna", "Dolj", "Dâmbovita", "Galati", "Giurgiu", "Gorj", "Harghita", "Hunedoara", "Ialomita", "Iasi", "Ilfov", "Maramures", "Mehedinti", "Mures", "Neamt", "Olt", "Prahova", "Salaj", "Satu Mare", "Sibiu", "Suceava", "Teleorman", "Timis", "Tulcea", "Vaslui", "Vrancea", "Vâlcea"],
                                       "MX": ["Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Ciudad de México", "Coahuila", "Colima", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Michoacán", "Morelos", "México", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas"],
                                       "CL": ["Aisén del General Carlos Ibáñez del Campo", "Antofagasta", "Araucanía", "Arica y Parinacota", "Atacama", "Bío-Bío", "Coquimbo", "Libertador General Bernardo O'Higgins", "Los Lagos", "Los Ríos", "Magallanes", "Maule", "Región Metropolitana de Santiago", "Región de Ñuble", "Tarapacá", "Valparaíso"]
                                    };
                                    var COUNTRY_CODES_WITH_STATES = ["US", "CA", "AU", "IN", "BR", "RO", "MX", "CL"]
                                    ]]>
                           </script>
                           <div class='form-row'>
                              <div class='form-group col-12'>
                                 <input required="required" class="form-control" type="email" value="" name="checkout[email]" id="checkout_email" data-validate="true" />
                                 <label class="" for="checkout_email">Email Address</label>
                              </div>
                           </div>
                           <div class='form-row'>
                              <div class='form-group col'>
                                 <input required="required" class="form-control" type="text" name="checkout[shipping_first_name]" id="checkout_shipping_first_name" />
                                 <label for="checkout_shipping_first_name">First Name</label>
                              </div>
                              <div class='form-group col'>
                                 <input required="required" class="form-control " type="text" name="checkout[shipping_last_name]" id="checkout_shipping_last_name" />
                                 <label for="checkout_shipping_last_name">Last Name</label>
                              </div>
                           </div>
                           <div class='form-row'>
                              <div class='form-group col-12'>
                                 <input required="required" class="form-control " type="text" name="checkout[shipping_phone]" id="checkout_shipping_phone" />
                                 <label for="checkout_shipping_phone">Phone</label>
                              </div>
                           </div>
                           <div class='form-row'>
                              <div class='form-group col'>
                                 <input required="required" class="form-control " type="text" name="checkout[shipping_address1]" id="checkout_shipping_address1" />
                                 <label for="checkout_shipping_address1">Address</label>
                              </div>
                           </div>
                           <div class='form-row'>
                              <div class='form-group col col-lg-6'>
                                 <input required="required" class="form-control " type="text" name="checkout[shipping_zip]" id="checkout_shipping_zip" />
                                 <label for="checkout_shipping_zip">Zip Code</label>
                              </div>
                              <div class='form-group col col-lg-6'>
                                 <input required="required" class="form-control " type="text" name="checkout[shipping_city]" id="checkout_shipping_city" />
                                 <label for="checkout_shipping_city">City</label>
                              </div>
                           </div>
                           <div class='form-row'>
                              <div class='form-group col' style='display: none;'>
                                 <div class='custom-select-wrapper'>
                                    <select class="custom-select js-value-changed-update" data-country="PE" required="required" name="checkout[shipping_province]" id="checkout_shipping_province">
                                       <option value="">Country</option>
                                    </select>
                                 </div>
                              </div>
                              <div class='form-group col'>
                                 <div class='custom-select-wrapper'>
                                    <select class="custom-select" name="checkout[shipping_country_code]" id="checkout_shipping_country_code">
                                       <option value="">Select a Country</option>
                                       <option value="AF">Afghanistan</option>
                                       <option value="AX">Åland Islands</option>
                                       <option value="AL">Albania</option>
                                       <option value="DZ">Algeria</option>
                                       <option value="AS">American Samoa</option>
                                       <option value="AD">Andorra</option>
                                       <option value="AO">Angola</option>
                                       <option value="AI">Anguilla</option>
                                       <option value="AQ">Antarctica</option>
                                       <option value="AG">Antigua and Barbuda</option>
                                       <option value="AR">Argentina</option>
                                       <option value="AM">Armenia</option>
                                       <option value="AW">Aruba</option>
                                       <option value="AU">Australia</option>
                                       <option value="AT">Austria</option>
                                       <option value="AZ">Azerbaijan</option>
                                       <option value="BS">Bahamas</option>
                                       <option value="BH">Bahrain</option>
                                       <option value="BD">Bangladesh</option>
                                       <option value="BB">Barbados</option>
                                       <option value="BY">Belarus</option>
                                       <option value="BE">Belgium</option>
                                       <option value="BZ">Belize</option>
                                       <option value="BJ">Benin</option>
                                       <option value="BM">Bermuda</option>
                                       <option value="BT">Bhutan</option>
                                       <option value="BO">Bolivia</option>
                                       <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                       <option value="BA">Bosnia and Herzegovina</option>
                                       <option value="BW">Botswana</option>
                                       <option value="BV">Bouvet Island</option>
                                       <option value="BR">Brazil</option>
                                       <option value="IO">British Indian Ocean Territory</option>
                                       <option value="BN">Brunei Darussalam</option>
                                       <option value="BG">Bulgaria</option>
                                       <option value="BF">Burkina Faso</option>
                                       <option value="BI">Burundi</option>
                                       <option value="CV">Cabo Verde</option>
                                       <option value="KH">Cambodia</option>
                                       <option value="CM">Cameroon</option>
                                       <option value="CA">Canada</option>
                                       <option value="KY">Cayman Islands</option>
                                       <option value="CF">Central African Republic</option>
                                       <option value="TD">Chad</option>
                                       <option value="CL">Chile</option>
                                       <option value="CN">China</option>
                                       <option value="CX">Christmas Island</option>
                                       <option value="CC">Cocos (Keeling) Islands</option>
                                       <option value="CO">Colombia</option>
                                       <option value="KM">Comoros</option>
                                       <option value="CG">Congo</option>
                                       <option value="CD">Congo, The Democratic Republic of the</option>
                                       <option value="CK">Cook Islands</option>
                                       <option value="CR">Costa Rica</option>
                                       <option value="CI">Côte d&#39;Ivoire</option>
                                       <option value="HR">Croatia</option>
                                       <option value="CU">Cuba</option>
                                       <option value="CW">Curaçao</option>
                                       <option value="CY">Cyprus</option>
                                       <option value="CZ">Czechia</option>
                                       <option value="DK">Denmark</option>
                                       <option value="DJ">Djibouti</option>
                                       <option value="DM">Dominica</option>
                                       <option value="DO">Dominican Republic</option>
                                       <option value="EC">Ecuador</option>
                                       <option value="EG">Egypt</option>
                                       <option value="SV">El Salvador</option>
                                       <option value="GQ">Equatorial Guinea</option>
                                       <option value="ER">Eritrea</option>
                                       <option value="EE">Estonia</option>
                                       <option value="SZ">Eswatini</option>
                                       <option value="ET">Ethiopia</option>
                                       <option value="FK">Falkland Islands (Malvinas)</option>
                                       <option value="FO">Faroe Islands</option>
                                       <option value="FJ">Fiji</option>
                                       <option value="FI">Finland</option>
                                       <option value="FR">France</option>
                                       <option value="GF">French Guiana</option>
                                       <option value="PF">French Polynesia</option>
                                       <option value="TF">French Southern Territories</option>
                                       <option value="GA">Gabon</option>
                                       <option value="GM">Gambia</option>
                                       <option value="GE">Georgia</option>
                                       <option value="DE">Germany</option>
                                       <option value="GH">Ghana</option>
                                       <option value="GI">Gibraltar</option>
                                       <option value="GR">Greece</option>
                                       <option value="GL">Greenland</option>
                                       <option value="GD">Grenada</option>
                                       <option value="GP">Guadeloupe</option>
                                       <option value="GU">Guam</option>
                                       <option value="GT">Guatemala</option>
                                       <option value="GG">Guernsey</option>
                                       <option value="GN">Guinea</option>
                                       <option value="GW">Guinea-Bissau</option>
                                       <option value="GY">Guyana</option>
                                       <option value="HT">Haiti</option>
                                       <option value="HM">Heard Island and McDonald Islands</option>
                                       <option value="VA">Holy See (Vatican City State)</option>
                                       <option value="HN">Honduras</option>
                                       <option value="HK">Hong Kong</option>
                                       <option value="HU">Hungary</option>
                                       <option value="IS">Iceland</option>
                                       <option value="IN">India</option>
                                       <option value="ID">Indonesia</option>
                                       <option value="IR">Iran, Islamic Republic of</option>
                                       <option value="IQ">Iraq</option>
                                       <option value="IE">Ireland</option>
                                       <option value="IM">Isle of Man</option>
                                       <option value="IL">Israel</option>
                                       <option value="IT">Italy</option>
                                       <option value="JM">Jamaica</option>
                                       <option value="JP">Japan</option>
                                       <option value="JE">Jersey</option>
                                       <option value="JO">Jordan</option>
                                       <option value="KZ">Kazakhstan</option>
                                       <option value="KE">Kenya</option>
                                       <option value="KI">Kiribati</option>
                                       <option value="KP">Korea, Democratic People&#39;s Republic of</option>
                                       <option value="KR">Korea, Republic of</option>
                                       <option value="KW">Kuwait</option>
                                       <option value="KG">Kyrgyzstan</option>
                                       <option value="LA">Lao People&#39;s Democratic Republic</option>
                                       <option value="LV">Latvia</option>
                                       <option value="LB">Lebanon</option>
                                       <option value="LS">Lesotho</option>
                                       <option value="LR">Liberia</option>
                                       <option value="LY">Libya</option>
                                       <option value="LI">Liechtenstein</option>
                                       <option value="LT">Lithuania</option>
                                       <option value="LU">Luxembourg</option>
                                       <option value="MO">Macao</option>
                                       <option value="MG">Madagascar</option>
                                       <option value="MW">Malawi</option>
                                       <option value="MY">Malaysia</option>
                                       <option value="MV">Maldives</option>
                                       <option value="ML">Mali</option>
                                       <option value="MT">Malta</option>
                                       <option value="MH">Marshall Islands</option>
                                       <option value="MQ">Martinique</option>
                                       <option value="MR">Mauritania</option>
                                       <option value="MU">Mauritius</option>
                                       <option value="YT">Mayotte</option>
                                       <option value="MX">Mexico</option>
                                       <option value="FM">Micronesia, Federated States of</option>
                                       <option value="MD">Moldova</option>
                                       <option value="MC">Monaco</option>
                                       <option value="MN">Mongolia</option>
                                       <option value="ME">Montenegro</option>
                                       <option value="MS">Montserrat</option>
                                       <option value="MA">Morocco</option>
                                       <option value="MZ">Mozambique</option>
                                       <option value="MM">Myanmar</option>
                                       <option value="NA">Namibia</option>
                                       <option value="NR">Nauru</option>
                                       <option value="NP">Nepal</option>
                                       <option value="NL">Netherlands</option>
                                       <option value="NC">New Caledonia</option>
                                       <option value="NZ">New Zealand</option>
                                       <option value="NI">Nicaragua</option>
                                       <option value="NE">Niger</option>
                                       <option value="NG">Nigeria</option>
                                       <option value="NU">Niue</option>
                                       <option value="NF">Norfolk Island</option>
                                       <option value="MK">North Macedonia</option>
                                       <option value="MP">Northern Mariana Islands</option>
                                       <option value="NO">Norway</option>
                                       <option value="OM">Oman</option>
                                       <option value="PK">Pakistan</option>
                                       <option value="PW">Palau</option>
                                       <option value="PS">Palestine, State of</option>
                                       <option value="PA">Panama</option>
                                       <option value="PG">Papua New Guinea</option>
                                       <option value="PY">Paraguay</option>
                                       <option selected="selected" value="PE">Peru</option>
                                       <option value="PH">Philippines</option>
                                       <option value="PN">Pitcairn</option>
                                       <option value="PL">Poland</option>
                                       <option value="PT">Portugal</option>
                                       <option value="PR">Puerto Rico</option>
                                       <option value="QA">Qatar</option>
                                       <option value="RE">Réunion</option>
                                       <option value="RO">Romania</option>
                                       <option value="RU">Russian Federation</option>
                                       <option value="RW">Rwanda</option>
                                       <option value="BL">Saint Barthélemy</option>
                                       <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                       <option value="KN">Saint Kitts and Nevis</option>
                                       <option value="LC">Saint Lucia</option>
                                       <option value="MF">Saint Martin (French part)</option>
                                       <option value="PM">Saint Pierre and Miquelon</option>
                                       <option value="VC">Saint Vincent and the Grenadines</option>
                                       <option value="WS">Samoa</option>
                                       <option value="SM">San Marino</option>
                                       <option value="ST">Sao Tome and Principe</option>
                                       <option value="SA">Saudi Arabia</option>
                                       <option value="SN">Senegal</option>
                                       <option value="RS">Serbia</option>
                                       <option value="SC">Seychelles</option>
                                       <option value="SL">Sierra Leone</option>
                                       <option value="SG">Singapore</option>
                                       <option value="SX">Sint Maarten (Dutch part)</option>
                                       <option value="SK">Slovakia</option>
                                       <option value="SI">Slovenia</option>
                                       <option value="SB">Solomon Islands</option>
                                       <option value="SO">Somalia</option>
                                       <option value="ZA">South Africa</option>
                                       <option value="GS">South Georgia and the South Sandwich Islands</option>
                                       <option value="SS">South Sudan</option>
                                       <option value="ES">Spain</option>
                                       <option value="LK">Sri Lanka</option>
                                       <option value="SD">Sudan</option>
                                       <option value="SR">Suriname</option>
                                       <option value="SJ">Svalbard and Jan Mayen</option>
                                       <option value="SE">Sweden</option>
                                       <option value="CH">Switzerland</option>
                                       <option value="SY">Syrian Arab Republic</option>
                                       <option value="TW">Taiwan</option>
                                       <option value="TJ">Tajikistan</option>
                                       <option value="TZ">Tanzania</option>
                                       <option value="TH">Thailand</option>
                                       <option value="TL">Timor-Leste</option>
                                       <option value="TG">Togo</option>
                                       <option value="TK">Tokelau</option>
                                       <option value="TO">Tonga</option>
                                       <option value="TT">Trinidad and Tobago</option>
                                       <option value="TN">Tunisia</option>
                                       <option value="TR">Turkey</option>
                                       <option value="TM">Turkmenistan</option>
                                       <option value="TC">Turks and Caicos Islands</option>
                                       <option value="TV">Tuvalu</option>
                                       <option value="UG">Uganda</option>
                                       <option value="UA">Ukraine</option>
                                       <option value="AE">United Arab Emirates</option>
                                       <option value="GB">United Kingdom</option>
                                       <option value="UM">United States Minor Outlying Islands</option>
                                       <option value="US">United States</option>
                                       <option value="UY">Uruguay</option>
                                       <option value="UZ">Uzbekistan</option>
                                       <option value="VU">Vanuatu</option>
                                       <option value="VE">Venezuela</option>
                                       <option value="VN">Vietnam</option>
                                       <option value="VG">Virgin Islands, British</option>
                                       <option value="VI">Virgin Islands, U.S.</option>
                                       <option value="WF">Wallis and Futuna</option>
                                       <option value="EH">Western Sahara</option>
                                       <option value="YE">Yemen</option>
                                       <option value="ZM">Zambia</option>
                                       <option value="ZW">Zimbabwe</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='custom-control custom-checkbox space-top-4 text-center text-lg-left'>
                           <input name="checkout[accepts_marketing]" type="hidden" value="0" />
                           <input class="custom-control-input js-value-changed-update" type="checkbox" value="1" checked="checked" name="checkout[accepts_marketing]" id="checkout_accepts_marketing" />
                           <label class="custom-control-label medium" for="checkout_accepts_marketing">Sign up for exclusive offers and news via text messages & email</label>
                        </div>
                        <!-- Shipping options -->
                        <div class='space-top-4 space-2' data-function='shipping-card-header'>
                           <div class='section-title d-flex align-items-center mt-2 mt-lg-0'>
                              <h2> 2. Shipping Options </h2>
                              <div class='completed-indicator' data-function='shipping-rates-completed-indicator'></div>
                              <div class='checkout-contextual-loader-wrapper' data-function='shipping-rates-loader' style='display: none;'>
                                 <div class='checkout-contextual-loader'>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='card' data-function='shipping-card'>
                           <div data-function='shipping-list' data-url='KMWCPNRGNJR/shipping_rates.html'>
                              <div class='line-row'>
                                 <div class='custom-control custom-radio'>
                                    <input checked class='custom-control-input' id='shipping-rate-0' name='checkout[shipping_rate_id]' required type='radio' validate='true' value='138299'>
                                    <label class='custom-control-label' for='shipping-rate-0' id="shipping_free_id">
                                       {{$productlink->checkout_free_option_label}}
                                    </label>
                                 </div>
                                 <span class='is-free accent' id="shipping_free_value_id"> Free </span>
                              </div>
                              <div class='line-row'>
                                 <div class='custom-control custom-radio'>
                                    <input class='custom-control-input' id='shipping-rate-1' name='checkout[shipping_rate_id]' required type='radio' validate='true' value='123090'>
                                    <label class='custom-control-label' for='shipping-rate-1' id="shipping_express_id">
                                       {{$productlink->checkout_express_option_label}}
                                    </label>
                                 </div>
                                 <div class='bold' id="shipping_express_value_id">
                                    $ {{number_format($productlink->checkout_express_option_value, 2, '.', '')}}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Billing details -->
                        <div class='section-title d-flex align-items-center mt-4'>
                           <h2> 3. Billing Details </h2>
                           <div class='completed-indicator' data-function='billing-details-completed-indicator'></div>
                        </div>
                        <div class='card' data-function='checkout-form-billing-section'>
                           <div class='line-row first'>
                              <div class='custom-control custom-checkbox'>
                                 <input name="checkout[billing_address_same]" type="hidden" value="0" />
                                 <input class="custom-control-input" type="checkbox" value="1" checked="checked" name="checkout[billing_address_same]" id="checkout_billing_address_same" />
                                 <label validate="false" class="custom-control-label" for="checkout_billing_address_same">Billing address is the same as shipping</label>
                              </div>
                           </div>
                           <div class='line-row block' id='js-billing-fields' style='display: none'>
                              <div class='form-row'>
                                 <div class='form-group col'>
                                    <input class="form-control " type="text" name="checkout[billing_first_name]" id="checkout_billing_first_name" />
                                    <label for="checkout_billing_first_name">First Name</label>
                                 </div>
                                 <div class='form-group col'>
                                    <input class="form-control " type="text" name="checkout[billing_last_name]" id="checkout_billing_last_name" />
                                    <label for="checkout_billing_last_name">Last Name</label>
                                 </div>
                              </div>
                              <div class='form-row'>
                                 <div class='form-group col'>
                                    <input class="form-control " type="text" name="checkout[billing_address1]" id="checkout_billing_address1" />
                                    <label for="checkout_billing_address1">Address</label>
                                 </div>
                              </div>
                              <div class='form-row'>
                                 <div class='form-group col col-lg-6'>
                                    <input class="form-control " type="text" name="checkout[billing_zip]" id="checkout_billing_zip" />
                                    <label for="checkout_billing_zip">Zip Code</label>
                                 </div>
                                 <div class='form-group col col-lg-6'>
                                    <input class="form-control " type="text" name="checkout[billing_city]" id="checkout_billing_city" />
                                    <label for="checkout_billing_city">City</label>
                                 </div>
                              </div>
                              <div class='form-row'>
                                 <div class='form-group col' style='display: none;'>
                                    <div class='custom-select-wrapper'>
                                       <select class="custom-select" name="checkout[billing_province]" id="checkout_billing_province">
                                          <option value="">Estate</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class='form-group col'>
                                    <div class='custom-select-wrapper'>
                                       <select class="custom-select" name="checkout[billing_country_code]" id="checkout_billing_country_code">
                                          <option value="">Select a Country</option>
                                          <option value="AF">Afghanistan</option>
                                          <option value="AX">Åland Islands</option>
                                          <option value="AL">Albania</option>
                                          <option value="DZ">Algeria</option>
                                          <option value="AS">American Samoa</option>
                                          <option value="AD">Andorra</option>
                                          <option value="AO">Angola</option>
                                          <option value="AI">Anguilla</option>
                                          <option value="AQ">Antarctica</option>
                                          <option value="AG">Antigua and Barbuda</option>
                                          <option value="AR">Argentina</option>
                                          <option value="AM">Armenia</option>
                                          <option value="AW">Aruba</option>
                                          <option value="AU">Australia</option>
                                          <option value="AT">Austria</option>
                                          <option value="AZ">Azerbaijan</option>
                                          <option value="BS">Bahamas</option>
                                          <option value="BH">Bahrain</option>
                                          <option value="BD">Bangladesh</option>
                                          <option value="BB">Barbados</option>
                                          <option value="BY">Belarus</option>
                                          <option value="BE">Belgium</option>
                                          <option value="BZ">Belize</option>
                                          <option value="BJ">Benin</option>
                                          <option value="BM">Bermuda</option>
                                          <option value="BT">Bhutan</option>
                                          <option value="BO">Bolivia</option>
                                          <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                          <option value="BA">Bosnia and Herzegovina</option>
                                          <option value="BW">Botswana</option>
                                          <option value="BV">Bouvet Island</option>
                                          <option value="BR">Brazil</option>
                                          <option value="IO">British Indian Ocean Territory</option>
                                          <option value="BN">Brunei Darussalam</option>
                                          <option value="BG">Bulgaria</option>
                                          <option value="BF">Burkina Faso</option>
                                          <option value="BI">Burundi</option>
                                          <option value="CV">Cabo Verde</option>
                                          <option value="KH">Cambodia</option>
                                          <option value="CM">Cameroon</option>
                                          <option value="CA">Canada</option>
                                          <option value="KY">Cayman Islands</option>
                                          <option value="CF">Central African Republic</option>
                                          <option value="TD">Chad</option>
                                          <option value="CL">Chile</option>
                                          <option value="CN">China</option>
                                          <option value="CX">Christmas Island</option>
                                          <option value="CC">Cocos (Keeling) Islands</option>
                                          <option value="CO">Colombia</option>
                                          <option value="KM">Comoros</option>
                                          <option value="CG">Congo</option>
                                          <option value="CD">Congo, The Democratic Republic of the</option>
                                          <option value="CK">Cook Islands</option>
                                          <option value="CR">Costa Rica</option>
                                          <option value="CI">Côte d&#39;Ivoire</option>
                                          <option value="HR">Croatia</option>
                                          <option value="CU">Cuba</option>
                                          <option value="CW">Curaçao</option>
                                          <option value="CY">Cyprus</option>
                                          <option value="CZ">Czechia</option>
                                          <option value="DK">Denmark</option>
                                          <option value="DJ">Djibouti</option>
                                          <option value="DM">Dominica</option>
                                          <option value="DO">Dominican Republic</option>
                                          <option value="EC">Ecuador</option>
                                          <option value="EG">Egypt</option>
                                          <option value="SV">El Salvador</option>
                                          <option value="GQ">Equatorial Guinea</option>
                                          <option value="ER">Eritrea</option>
                                          <option value="EE">Estonia</option>
                                          <option value="SZ">Eswatini</option>
                                          <option value="ET">Ethiopia</option>
                                          <option value="FK">Falkland Islands (Malvinas)</option>
                                          <option value="FO">Faroe Islands</option>
                                          <option value="FJ">Fiji</option>
                                          <option value="FI">Finland</option>
                                          <option value="FR">France</option>
                                          <option value="GF">French Guiana</option>
                                          <option value="PF">French Polynesia</option>
                                          <option value="TF">French Southern Territories</option>
                                          <option value="GA">Gabon</option>
                                          <option value="GM">Gambia</option>
                                          <option value="GE">Georgia</option>
                                          <option value="DE">Germany</option>
                                          <option value="GH">Ghana</option>
                                          <option value="GI">Gibraltar</option>
                                          <option value="GR">Greece</option>
                                          <option value="GL">Greenland</option>
                                          <option value="GD">Grenada</option>
                                          <option value="GP">Guadeloupe</option>
                                          <option value="GU">Guam</option>
                                          <option value="GT">Guatemala</option>
                                          <option value="GG">Guernsey</option>
                                          <option value="GN">Guinea</option>
                                          <option value="GW">Guinea-Bissau</option>
                                          <option value="GY">Guyana</option>
                                          <option value="HT">Haiti</option>
                                          <option value="HM">Heard Island and McDonald Islands</option>
                                          <option value="VA">Holy See (Vatican City State)</option>
                                          <option value="HN">Honduras</option>
                                          <option value="HK">Hong Kong</option>
                                          <option value="HU">Hungary</option>
                                          <option value="IS">Iceland</option>
                                          <option value="IN">India</option>
                                          <option value="ID">Indonesia</option>
                                          <option value="IR">Iran, Islamic Republic of</option>
                                          <option value="IQ">Iraq</option>
                                          <option value="IE">Ireland</option>
                                          <option value="IM">Isle of Man</option>
                                          <option value="IL">Israel</option>
                                          <option value="IT">Italy</option>
                                          <option value="JM">Jamaica</option>
                                          <option value="JP">Japan</option>
                                          <option value="JE">Jersey</option>
                                          <option value="JO">Jordan</option>
                                          <option value="KZ">Kazakhstan</option>
                                          <option value="KE">Kenya</option>
                                          <option value="KI">Kiribati</option>
                                          <option value="KP">Korea, Democratic People&#39;s Republic of</option>
                                          <option value="KR">Korea, Republic of</option>
                                          <option value="KW">Kuwait</option>
                                          <option value="KG">Kyrgyzstan</option>
                                          <option value="LA">Lao People&#39;s Democratic Republic</option>
                                          <option value="LV">Latvia</option>
                                          <option value="LB">Lebanon</option>
                                          <option value="LS">Lesotho</option>
                                          <option value="LR">Liberia</option>
                                          <option value="LY">Libya</option>
                                          <option value="LI">Liechtenstein</option>
                                          <option value="LT">Lithuania</option>
                                          <option value="LU">Luxembourg</option>
                                          <option value="MO">Macao</option>
                                          <option value="MG">Madagascar</option>
                                          <option value="MW">Malawi</option>
                                          <option value="MY">Malaysia</option>
                                          <option value="MV">Maldives</option>
                                          <option value="ML">Mali</option>
                                          <option value="MT">Malta</option>
                                          <option value="MH">Marshall Islands</option>
                                          <option value="MQ">Martinique</option>
                                          <option value="MR">Mauritania</option>
                                          <option value="MU">Mauritius</option>
                                          <option value="YT">Mayotte</option>
                                          <option value="MX">Mexico</option>
                                          <option value="FM">Micronesia, Federated States of</option>
                                          <option value="MD">Moldova</option>
                                          <option value="MC">Monaco</option>
                                          <option value="MN">Mongolia</option>
                                          <option value="ME">Montenegro</option>
                                          <option value="MS">Montserrat</option>
                                          <option value="MA">Morocco</option>
                                          <option value="MZ">Mozambique</option>
                                          <option value="MM">Myanmar</option>
                                          <option value="NA">Namibia</option>
                                          <option value="NR">Nauru</option>
                                          <option value="NP">Nepal</option>
                                          <option value="NL">Netherlands</option>
                                          <option value="NC">New Caledonia</option>
                                          <option value="NZ">New Zealand</option>
                                          <option value="NI">Nicaragua</option>
                                          <option value="NE">Niger</option>
                                          <option value="NG">Nigeria</option>
                                          <option value="NU">Niue</option>
                                          <option value="NF">Norfolk Island</option>
                                          <option value="MK">North Macedonia</option>
                                          <option value="MP">Northern Mariana Islands</option>
                                          <option value="NO">Norway</option>
                                          <option value="OM">Oman</option>
                                          <option value="PK">Pakistan</option>
                                          <option value="PW">Palau</option>
                                          <option value="PS">Palestine, State of</option>
                                          <option value="PA">Panama</option>
                                          <option value="PG">Papua New Guinea</option>
                                          <option value="PY">Paraguay</option>
                                          <option value="PE">Peru</option>
                                          <option value="PH">Philippines</option>
                                          <option value="PN">Pitcairn</option>
                                          <option value="PL">Poland</option>
                                          <option value="PT">Portugal</option>
                                          <option value="PR">Puerto Rico</option>
                                          <option value="QA">Qatar</option>
                                          <option value="RE">Réunion</option>
                                          <option value="RO">Romania</option>
                                          <option value="RU">Russian Federation</option>
                                          <option value="RW">Rwanda</option>
                                          <option value="BL">Saint Barthélemy</option>
                                          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                          <option value="KN">Saint Kitts and Nevis</option>
                                          <option value="LC">Saint Lucia</option>
                                          <option value="MF">Saint Martin (French part)</option>
                                          <option value="PM">Saint Pierre and Miquelon</option>
                                          <option value="VC">Saint Vincent and the Grenadines</option>
                                          <option value="WS">Samoa</option>
                                          <option value="SM">San Marino</option>
                                          <option value="ST">Sao Tome and Principe</option>
                                          <option value="SA">Saudi Arabia</option>
                                          <option value="SN">Senegal</option>
                                          <option value="RS">Serbia</option>
                                          <option value="SC">Seychelles</option>
                                          <option value="SL">Sierra Leone</option>
                                          <option value="SG">Singapore</option>
                                          <option value="SX">Sint Maarten (Dutch part)</option>
                                          <option value="SK">Slovakia</option>
                                          <option value="SI">Slovenia</option>
                                          <option value="SB">Solomon Islands</option>
                                          <option value="SO">Somalia</option>
                                          <option value="ZA">South Africa</option>
                                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                                          <option value="SS">South Sudan</option>
                                          <option value="ES">Spain</option>
                                          <option value="LK">Sri Lanka</option>
                                          <option value="SD">Sudan</option>
                                          <option value="SR">Suriname</option>
                                          <option value="SJ">Svalbard and Jan Mayen</option>
                                          <option value="SE">Sweden</option>
                                          <option value="CH">Switzerland</option>
                                          <option value="SY">Syrian Arab Republic</option>
                                          <option value="TW">Taiwan</option>
                                          <option value="TJ">Tajikistan</option>
                                          <option value="TZ">Tanzania</option>
                                          <option value="TH">Thailand</option>
                                          <option value="TL">Timor-Leste</option>
                                          <option value="TG">Togo</option>
                                          <option value="TK">Tokelau</option>
                                          <option value="TO">Tonga</option>
                                          <option value="TT">Trinidad and Tobago</option>
                                          <option value="TN">Tunisia</option>
                                          <option value="TR">Turkey</option>
                                          <option value="TM">Turkmenistan</option>
                                          <option value="TC">Turks and Caicos Islands</option>
                                          <option value="TV">Tuvalu</option>
                                          <option value="UG">Uganda</option>
                                          <option value="UA">Ukraine</option>
                                          <option value="AE">United Arab Emirates</option>
                                          <option value="GB">United Kingdom</option>
                                          <option value="UM">United States Minor Outlying Islands</option>
                                          <option value="US">United States</option>
                                          <option value="UY">Uruguay</option>
                                          <option value="UZ">Uzbekistan</option>
                                          <option value="VU">Vanuatu</option>
                                          <option value="VE">Venezuela</option>
                                          <option value="VN">Vietnam</option>
                                          <option value="VG">Virgin Islands, British</option>
                                          <option value="VI">Virgin Islands, U.S.</option>
                                          <option value="WF">Wallis and Futuna</option>
                                          <option value="EH">Western Sahara</option>
                                          <option value="YE">Yemen</option>
                                          <option value="ZM">Zambia</option>
                                          <option value="ZW">Zimbabwe</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class='form-row'>
                                 <div class='form-group col'>
                                    <input data-optional="true" class="form-control " type="text" name="checkout[billing_company]" id="checkout_billing_company" />
                                    <label for="checkout_billing_company">Company name ( optional )</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='space-top-8 d-none d-lg-block'>
                           <div class='about-section'>
                              <div class='about-img'>
                                 <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/18/18188.png')}}'>
                              </div>
                              <p>
                                 <span> 24/7 customer service </span>
                                 <br> Our team is at your disposal every day of the week and every month of the year.
                              </p>
                           </div>
                           <div class='about-section'>
                              <div class='about-img'>
                                 <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/3190/3190354.png')}}'>
                              </div>
                              <p>
                                 <span> Verified site ✅ </span>
                                 <br> We have delivered over 8,460 orders and thousands of satisfied customers.
                              </p>
                           </div>
                           <div class='about-section'>
                              <div class='about-img'>
                                 <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/81/81566.png')}}'>
                              </div>
                              <p>
                                 <span> 100% secure payment - Your information is encrypted with SSL </span>
                                 <br> We accept all Credit and Debit cards (VISA, Mastercard, Amex)
                              </p>
                           </div>
                        </div>
                        <div class='d-none d-lg-block'>
                           <div class='text-center text-lg-left'>
                              <a class='mr-2' href='https://home.bluesnap.com/privacy-policy/refund-policy/' target='_blank'> Returns Policy </a>
                              <a class='mr-2' href='https://home.bluesnap.com/privacy-policy/' target='_blank'> PPrivacy Policy </a>
                              <a href='https://home.bluesnap.com/ecommerce/legal/terms_and_conditions' target='_blank'> Terms and Conditions </a>
                           </div>
                           <div class='text-center text-lg-left consent'> I consent to receive recurring automated marketing by text message through an automatic telephone dialing system. Consent is not a condition to purchase. STOP to cancel, HELP for help. Message and Data rates apply. </div>
                           <div class='space-6'></div>
                        </div>
                     </div>
                     <div class='col-12 col-lg-5'>
                        <div class='d-none d-lg-flex justify-content-between'>
                           <h2> Order Summary </h2>
                        </div>
                        <div class='d-lg-none'>
                           <div class='section-title d-flex align-items-center mt-2 mt-lg-0'>
                              <h2 class='mb-0'> 4. Payment Method </h2>
                              <div class='completed d-none'> Complete </div>
                              <div class='checkout-contextual-loader-wrapper' data-function='payment-method-loader' style='display: none;'>
                                 <div class='checkout-contextual-loader'>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='card'>
                           <div class='js-cart d-none d-lg-block'>
                              <div class='cart'>
                                 <div class='item line-row'>
                                    <div class='d-flex align-items-center'>
                                       <div class='item-img-wrapper'>
                                          <div class='item-img'>
                                             <img src='{{($productlink->product_image_path)}}'>
                                          </div>
                                          <div class='item-qty'>
                                             {{$productlink->product_quantity}}
                                          </div>
                                       </div>
                                       <div class='d-flex flex-column'>
                                          <span class='bold'>
                                             {{$productlink->product_name}}
                                          </span>
                                       </div>
                                    </div>
                                    <div class='ml-1 bold price' id="mobile_total_3_id">
                                       {{number_format($productlink->product_price, 2, '.', '')}}
                                    </div>
                                 </div>
                                 <div class='line-row d-block' data-function='cart-total-container'>
                                    <div class='d-flex justify-content-between'>
                                       <span> Subtotal </span>
                                       <span class='[]' id="subtotal_1_id"> ${{number_format($productlink->product_price, 2, '.', '')}}
                                       </span>
                                    </div>
                                    <div class='d-flex justify-content-between space-top-2'>
                                       <span id="chipping_selected_id">
                                          {{$productlink->checkout_free_option_label}}
                                       </span>
                                       <span>
                                          <span class='accent free-shipping' id="chipping_selected_value_id">Free</span>
                                       </span>
                                    </div>
                                    <div class='d-flex justify-content-between space-top-2'>
                                       <span> Taxes </span>
                                       <span id="taxes_1_id">
                                          {{number_format($productlink->checkout_taxes_value, 2, '.', '')}}
                                       </span>
                                    </div>
                                    <div class='d-flex justify-content-between space-top-2'>
                                       <span class='bold'> Total </span>
                                       <span class='bold' data-function='three-d-secure-data-container' data-three-d-secure='eyJlbmFibGVkIjpmYWxzZSwiYW1vdW50IjoiNjkuOTkiLCJjdXJyZW5jeSI6
                                          IlVTRCIsImVtYWlsIjoiIn0=
                                          ' data-total-amount='69.99' id="mobile_total_4_id">
                                          {{number_format($productlink->product_price, 2, '.', '')}}
                                       </span>
                                    </div>
                                 </div>
                                 <div class='line-row discount-container'>
                                    <div class='d-flex flex-column discount-box w-100'>
                                       <div class='d-flex justify-content-between mb-lg-0'>
                                          <div class='form-group col-10 col-md-10 col-lg-9 mb-0 pl-0'>
                                             <input class="form-control " data-function="discount-text" data-validate="false" id="checkout_discount_title_753144a8-42fc-4ab6-8480-4b7b429144c0" type="text" name="checkout[discount][title]" />
                                             <i class='icon ion-android-warning'></i>
                                             <svg class='svg-custom-icon svg-icon-discount' height='20' viewBox='0 0 16 16' width='20' xmlns='https://www.w3.org/2000/svg'>
                                                <path d='M-73.884-1568.346l-.89-.827a.44.44,0,0,0-.3-.116.486.486,0,0,0-.061,0l-1.227.167a1.37,1.37,0,0,1-.182.013,1.254,1.254,0,0,1-1.249-1.011l-.214-1.17a.408.408,0,0,0-.223-.293l-1.094-.558a1.191,1.191,0,0,1-.547-1.613l.544-1.068a.4.4,0,0,0,0-.363l-.544-1.068a1.192,1.192,0,0,1,.547-1.614l1.094-.558a.412.412,0,0,0,.223-.293l.214-1.171a1.255,1.255,0,0,1,1.249-1.01,1.285,1.285,0,0,1,.182.013l1.227.166a.474.474,0,0,0,.062,0,.436.436,0,0,0,.3-.116l.89-.826A1.292,1.292,0,0,1-73-1582a1.29,1.29,0,0,1,.884.346l.89.826a.438.438,0,0,0,.3.116.467.467,0,0,0,.062,0l1.227-.166a1.292,1.292,0,0,1,.182-.013,1.254,1.254,0,0,1,1.249,1.01l.214,1.171a.412.412,0,0,0,.223.293l1.094.558a1.191,1.191,0,0,1,.547,1.613l-.544,1.068a.4.4,0,0,0,0,.363l.544,1.068a1.191,1.191,0,0,1-.547,1.613l-1.094.558a.408.408,0,0,0-.223.293l-.214,1.17a1.253,1.253,0,0,1-1.248,1.01,1.412,1.412,0,0,1-.183-.012l-1.227-.167a.486.486,0,0,0-.061,0,.441.441,0,0,0-.3.116l-.89.827A1.291,1.291,0,0,1-73-1568,1.292,1.292,0,0,1-73.884-1568.346Zm-.306-1.406.891.826a.439.439,0,0,0,.3.117.438.438,0,0,0,.3-.117l.891-.826a1.285,1.285,0,0,1,.881-.344,1.272,1.272,0,0,1,.181.013l1.227.166a.4.4,0,0,0,.062,0,.424.424,0,0,0,.422-.341l.214-1.171a1.218,1.218,0,0,1,.657-.867l1.095-.557a.4.4,0,0,0,.185-.546l-.544-1.068a1.168,1.168,0,0,1,0-1.072l.544-1.068a.4.4,0,0,0-.185-.547l-1.095-.556a1.221,1.221,0,0,1-.657-.867l-.214-1.171a.423.423,0,0,0-.421-.342.418.418,0,0,0-.062,0l-1.227.166a1.29,1.29,0,0,1-.181.013,1.288,1.288,0,0,1-.881-.344l-.891-.827a.438.438,0,0,0-.3-.117.439.439,0,0,0-.3.117l-.891.827a1.288,1.288,0,0,1-.881.344,1.291,1.291,0,0,1-.181-.013l-1.227-.166a.405.405,0,0,0-.062,0,.425.425,0,0,0-.422.342l-.214,1.171a1.221,1.221,0,0,1-.657.867l-1.095.556a.4.4,0,0,0-.185.547l.544,1.068a1.168,1.168,0,0,1,0,1.072l-.544,1.068a.4.4,0,0,0,.185.546l1.095.557a1.219,1.219,0,0,1,.657.867l.214,1.171a.424.424,0,0,0,.422.341.39.39,0,0,0,.062,0l1.227-.166a1.389,1.389,0,0,1,.181-.012A1.285,1.285,0,0,1-74.19-1569.752Zm1.558-3.148a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-72.632-1572.9Zm.8,0a.655.655,0,0,0,.67.637.655.655,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.655.655,0,0,0-71.828-1572.9Zm-4.36,1.278a.4.4,0,0,1,0-.586l5.759-5.471a.453.453,0,0,1,.617,0,.4.4,0,0,1,0,.586l-5.759,5.471a.445.445,0,0,1-.308.121A.447.447,0,0,1-76.188-1571.622Zm-.128-5.479a1.44,1.44,0,0,1,1.474-1.4,1.44,1.44,0,0,1,1.474,1.4,1.44,1.44,0,0,1-1.474,1.4A1.44,1.44,0,0,1-76.316-1577.1Zm.8,0a.655.655,0,0,0,.67.637.654.654,0,0,0,.67-.637.654.654,0,0,0-.67-.636A.654.654,0,0,0-75.512-1577.1Z' transform='translate(81 1583)'></path>
                                             </svg>
                                             <label for="checkout_discount_title_753144a8-42fc-4ab6-8480-4b7b429144c0">Discount Code</label>
                                          </div>
                                          <div class='form-group col-2 col-md-2 col-lg-3 mb-0 p-0'>
                                             <button class='btn btn-primary w-100 p-0' data-function='submit-discount' data-url='https://checkout.froppyt.com/f/4DGH1XJG/c/760789837/discounts' disabled type='button'>
                                                <span class='btn-text'>
                                                   <i class='icon ion-android-arrow-forward'></i>
                                                   <span> Apply </span>
                                                </span>
                                                <div class='btn-loader'></div>
                                             </button>
                                          </div>
                                       </div>
                                       <div class='d-flex'>
                                          <div class='error is-invalid' data-function='discount-error'> 
                                             Make sure that the code you have applied is correct, not used before or expired.
                                           </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class='payment-method-wrapper'>
                              <div class='d-none d-lg-block'>
                                 <div class='section-title d-flex align-items-center mt-2 mt-lg-0'>
                                    <h2 class='mb-0'> 4. Payment Method </h2>
                                    <div class='completed d-none'> Complete </div>
                                    <div class='checkout-contextual-loader-wrapper' data-function='payment-method-loader' style='display: none;'>
                                       <div class='checkout-contextual-loader'>
                                          <div></div>
                                          <div></div>
                                          <div></div>
                                          <div></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- / checkout -->
                              <!-- / detailed_view -->
                              <script src='{{secure_asset('ws.bluesnap.com/web-sdk/4/bluesnap.js')}}'></script>
                              <div class='payment-method' data-function='payment-method'>
                                 
                                 <div class='d-none d-lg-block'></div>
                                 <!-- gateway -->
                                 <!-- checkout -->
                                 <div class='gateway-option'>
                                    <label class='option-wrapper' for='transaction_gateway_id_437d5370-f911-4a82-9188-1d487d5ec540'>
                                       <div class='custom-control custom-radio click-through'>
                                          <input test_id="437d5370-f911-4a82-9188-1d487d5ec540" data-gateway-type="BluesnapGateway" data-dynamic="true" class="custom-control-input" type="radio" checked/>
                                          <label class='custom-control-label'> Credit Card </label>
                                       </div>
                                       <div class='payment-logo-wrapper'>
                                          <div class='credit-card-brands'>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_visa-dea3ec0732c5927df292d546dd45081c3985db48c937346def99b4e948432171.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_mastercard-72efe085837ac5852aa70af6fe2a2cb90e81af9dc7f8cbff77fd9d4fab4aff61.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_amex-d9301d2d277dc8bc1369a1e9c8dcf0ca4864d243163f9d56eff55e33e82bcc8c.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_maestro-4e36ce4c4a0d2b33dcb26443c10dc6650c7890f0d596c077cda6fc6f528a0510.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_jcb-dcaadea38a05d4a4451c20df8fe7369469008193b743da6e43ee0600b67f96ed.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_discover-31d590203c72a75c443efa97d223b3ddb8a843d543d362518086da920fb89d0d.png')}}" />
                                             </div>
                                             <div class='credit-card-brand-logo'>
                                                <img src="{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_diners_club-e7fa030c8de0ef07bd6c0109b43b36512f141d9f319017624e3d3c1ab7fba7a3.png')}}" />
                                             </div>
                                             <div class='credit-card-more'>
                                                <span> &amp; more </span>
                                             </div>
                                          </div>
                                       </div>
                                    </label>
                                    <!-- checkout -->
                                    <div class='js-gateway-form' data-function='payment-method-form'>
                                       <div class="fields-wrapper" style="">
                                          <!-- / FIXME: gateway.hosted_fields_token do POST request every time. we need to cache token in checkout for 60 minutes and use it -->
                                          <style>
                                             .inputWithIcon {
                                                position: relative
                                             }

                                             .cc_brand_img {
                                                width: 50px;
                                                height: 20px;
                                                object-fit: cover;
                                                margin: 3px;
                                             }

                                             .inputWithIcon span {
                                                position: absolute;
                                                right: 0px;
                                                bottom: 9px;
                                                color: #57c97d;
                                                cursor: pointer;
                                                transition: 0.3s;
                                                font-size: 14px
                                             }
                                          </style>
                                          <script
                                             src="https://code.jquery.com/jquery-3.2.1.min.js"
                                             integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                                             crossorigin="anonymous"></script>
                                          <script type="text/javascript" src="{{secure_asset('payments\jquery.payment.js')}}"></script>
                                          <script>
                                             jQuery(function($) {
                                                $("#brand_cc").hide();
                                                $('.cc-number').payment('formatCardNumber');
                                                $('.cc-exp').payment('formatCardExpiry');
                                                $('.cc-cvc').payment('formatCardCVC');

                                                $('#cc-number').on('keyup',function(){
                                                   var cardType = $.payment.cardType($('#cc-number').val());
                                                   document.getElementById('ccType').value = cardType;
                                                   console.log(document.getElementById('ccType').value);
                                                   switch (cardType) {
                                                      case "visa":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_visa-dea3ec0732c5927df292d546dd45081c3985db48c937346def99b4e948432171.png')}}");
                                                         break;

                                                      case "mastercard":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_mastercard-72efe085837ac5852aa70af6fe2a2cb90e81af9dc7f8cbff77fd9d4fab4aff61.png')}}");
                                                         break;

                                                      case "amex":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_amex-d9301d2d277dc8bc1369a1e9c8dcf0ca4864d243163f9d56eff55e33e82bcc8c.png')}}");
                                                         break;

                                                      case "maestro":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_maestro-4e36ce4c4a0d2b33dcb26443c10dc6650c7890f0d596c077cda6fc6f528a0510.png')}}");
                                                         break;

                                                      case "jcb":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_jcb-dcaadea38a05d4a4451c20df8fe7369469008193b743da6e43ee0600b67f96ed.png')}}");
                                                         break; 
                                                         
                                                      case "discover":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_discover-31d590203c72a75c443efa97d223b3ddb8a843d543d362518086da920fb89d0d.png')}}");
                                                         break;
                                                      
                                                      case "dinersclub":
                                                         $("#brand_cc").show();
                                                         $("#brand_cc").attr("src","{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/card_diners_club-e7fa030c8de0ef07bd6c0109b43b36512f141d9f319017624e3d3c1ab7fba7a3.png')}}");
                                                         break;

                                                      default:
                                                         $("#brand_cc").hide();
                                                         break;
                                                   }
                                                })
                                             });

                                             
                                          </script>
                                          <div class="row">
                                             <div class="col-12">
                                                <label class="form-label" style="font-size: 11px">Credit card number</label>
                                                <div class="inputWithIcon">
                                                   <input class="form-control cc-number" type="tel" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" name="credit_card_number" id="cc-number" required>
                                                   <span class="">
                                                      <img class= "cc_brand_img" id="brand_cc" src="" alt="">
                                                   </span> 
                                                   <input  type="text" name="ccType" id="ccType" hidden>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-6 col-6">
                                                <div class="d-flex flex-column">
                                                   <label class="form-label" style="font-size: 11px">Expire date</label>
                                                   <div class="inputWithIcon">
                                                      <input type="tel" class="form-control cc-exp" placeholder="•• / ••" id="cc-exp" name="cc-exp" autocomplete="cc-exp" required>
                                                      <span class="fas fa-calendar-alt"></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                <div class="d-flex flex-column">
                                                   <label class="form-label" style="font-size: 11px">Security Code</label>
                                                   <div class="inputWithIcon">
                                                      <input id="cc-cvc" type="password" class="form-control cc-cvc" autocomplete="off" placeholder="•••" name="credit_card_cvv" required>
                                                      <span class="fas fa-lock"></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <iframe frameborder="0" height="1" scrolling="no" src="https://www.bluesnap.com/servlet/logo.htm?s=" style="position: absolute;" width="1">
                                             <img height='1' src='https://www.bluesnap.com/servlet/logo.gif?s=' width='1'>
                                          </iframe>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class='space-2'>
                              <input type="submit" value="Complete Purchase" class="btn btn-primary" id="btn_purchase_id" />
                              <script type="text/javascript">
                                 $('#btn_purchase_id').click(function() {
                                    var dolar_value = document.getElementById('total_dolar').value
                                    fbq('track', 'Purchase', {currency: "USD", value: dolar_value});
                                 });
                               </script>
                              <button name="button" type="submit" class="btn btn-paypal" id="js-paypal-btn" style="display: none;">Complete Purchase with <img src='{{secure_asset('d2dehg7zmi3qpg.cloudfront.net/assets/gateways/paypal-f4fbed618964a8fc4b0d8e1e4c7dd0db6d70f773726d5230f07999058350ad90.png')}}'>
                              </button>
                           </div>

                           <br>
                        </div>
                        <div class='text-center space-top-4 space-4'>
                           <i class='ion-locked accent mr-1'></i> Transaction secured over SSL
                        </div>
                        <div class='text-center space-4 d-none d-lg-block'></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class='row d-lg-none'>
               <div class='col-12'>
                  <div class='about-section'>
                     <div class='about-img'>
                        <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/18/18188.png')}}'>
                     </div>
                     <p>
                        <span> 
                           24/7 customer service </span>
                        <br> Our team is at your disposal every day of the week and every month of the year.
                     </p>
                  </div>
               </div>
               <div class='col-12'>
                  <div class='about-section'>
                     <div class='about-img'>
                        <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/3190/3190354.png')}}'>
                     </div>
                     <p>
                        <span> Verified site ✅ </span>
                        <br> We have delivered over 8,460 orders and thousands of satisfied customers.
                     </p>
                  </div>
               </div>
               <div class='col-12'>
                  <div class='about-section'>
                     <div class='about-img'>
                        <img src='{{secure_asset('cdn-icons-png.flaticon.com/512/81/81566.png')}}'>
                     </div>
                     <p>
                        <span> 100% secure payment - Your information is encrypted with SSL </span>
                        <br> We accept all Credit and Debit cards (VISA, Mastercard, Amex)
                     </p>
                  </div>
               </div>
               <div class='col-12'>
                  <div class='text-center text-lg-left'>
                     <a class='mr-2' href='https://home.bluesnap.com/privacy-policy/refund-policy/' target='_blank'> Returns Policy  </a>
                     <a class='mr-2' href='https://home.bluesnap.com/privacy-policy/' target='_blank'> Privacy Policy  </a>
                     <a href='https://home.bluesnap.com/ecommerce/legal/terms_and_conditions' target='_blank'> Terms and Conditions </a>
                  </div>
                  <div class='text-center text-lg-left consent'> I consent to receive recurring automated marketing by text message through an automatic telephone dialing system. Consent is not a condition to purchase. STOP to cancel, HELP for help. Message and Data rates apply.</div>
                  <div class='space-6'></div>
               </div>
               <div class='col-12'>
                  <div class='text-center space-8'></div>
               </div>
            </div>
         </div>
      </form>
      <div data-function='loading-screen' style='display: none;'>
         <div class='loading-screen-wrapper'>
            <div class='loading-screen-content px-4'>
               <div class='loader-wrapper'>
                  <div class='loader'> Loading... </div>
               </div> Processing your payment
            </div>
         </div>
      </div>
   </body>
   <style>
      .icon-custom {
         color: #167FF7;
      }

      .svg-custom-icon {
         fill: #167FF7;
      }

      .btn-primary {
         background-color: #167FF7 !important;
      }

      .btn-primary:hover,
      .btn-primary:active {
         background-color: #167FF7 !important;
         filter: brightness(98%);
      }

      .btn-primary:disabled {
         background-color: #167FF7 !important;
         opacity: 0.4;
      }

      a,
      .accent,
      .edit-link,
      .back,
      .upsell-price,
      .promocode {
         color: #187EF2 !important;
      }

      a:hover,
      .accent:hover,
      .edit-link:hover,
      .back:hover,
      .upsell-price:hover,
      .promocode:hover {
         color: #187EF2 !important;
         filter: brightness(90%);
      }

      .custom-control-input:checked~.custom-control-label::before {
         background-color: #187EF2 !important;
      }

      .checkout-contextual-loader div {
         border-color: #187EF2 transparent transparent transparent !important;
      }

      .completed-indicator {
         background-color: #187EF2 !important;
      }

      .form-control.is-invalid~.message,
      div.is-invalid,
      .form-control.is-invalid~i.icon,
      .field_with_errors .message,
      .field_with_errors .icon {
         color: #EA6A11 !important;
      }

      .discount-box .form-control.is-invalid {
         border-color: #EA6A11 !important;
         background-color: rgba(234, 106, 17, 0.2) !important;
      }
   </style>
   @include('scripts.currency');
   <!-- Mirrored from checkout.froppyt.com/f/4DGH1XJG/c/KMWCPNRGNJR by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 03:37:09 GMT -->
</html>