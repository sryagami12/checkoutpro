<script>
    window.addEventListener('load', function() {
        var total                   = "{{$total_dolar}}";
        var subtotal                = "{{$subtotal_dolar}}";
        var shipping_option         = "{{$shipping_price_dolar}}";
        var shipping_description    = "{{$shipping_description}}";
        var taxes                   = "{{$taxes_dolar}}";
        var currency                = "{{$client_currency}}";
        var exchange                = "{{$client_currency_exchange}}";
        var language                = "{{$language}}";

        total           = parseFloat(total);
        subtotal        = parseFloat(subtotal);
        shipping_option = parseFloat(shipping_option);
        taxes           = parseFloat(taxes);
        exchange        = parseFloat(exchange);

        total           = Math.round(total*exchange);
        subtotal        = Math.round(subtotal*exchange);
        shipping_option = Math.round(shipping_option*exchange);
        taxes           = Math.round(taxes*exchange);
        exchange        = Math.round(exchange*exchange);

        document.getElementById('total_1').innerHTML = total + ' ' + currency;
        document.getElementById('total_2').innerHTML = total + ' ' + currency;

        document.getElementById('subtotal_1').innerHTML = subtotal + ' ' + currency;

        document.getElementById('taxes_id').innerHTML = taxes + ' ' + currency;

        document.getElementById('shipping_description_id').innerHTML = shipping_description;

        if(shipping_option == 0){
            if(language == 'spanish'){
                document.getElementById('shipping_value_id').innerHTML = 'GRATIS';
            }
            else{
                document.getElementById('shipping_value_id').innerHTML = 'FREE';
            }
        }
        else{
            document.getElementById('shipping_value_id').innerHTML = shipping_option + ' ' + currency;
        }

    });
</script>