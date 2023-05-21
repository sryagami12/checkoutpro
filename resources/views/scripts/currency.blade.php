<script>
    window.addEventListener('load', function() {
        console.log('La página ha terminado de cargarse!!');

        var productQuantity = "{{$productlink->product_quantity}}";

        console.log(productQuantity);
        
    });
</script>