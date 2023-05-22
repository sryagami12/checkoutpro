<script>
    window.addEventListener('load', function(){
        document.getElementById('select_language_id').addEventListener('change', function(){
            var selectElement = document.getElementById('select_language_id');
            var index = selectElement.selectedIndex;

            if(selectElement.options[index].value == "English"){
                document.getElementById('free_shipping_label_id').value = "Congratulations, you have been selected for a Free Shipping rate!";
                document.getElementById('express_shipping_label_id').value = "✈︎ Envío urgente VIP + Regalo sorpresa 🎁";
            }
            else{
                document.getElementById('free_shipping_label_id').value = "Enhorabuena, ¡ha sido seleccionado para una tarifa de envío gratuita!";
                document.getElementById('express_shipping_label_id').value = "Enhorabuena, ¡ha sido seleccionado para una tarifa de envío gratuita!";
            }
            updateShippingPrice(element,currency, total);
        });
    });
</script>
