<script crossorigin src="https://unpkg.com/country-to-currency" ></script>
<script>
    window.addEventListener('load', function() {

        var productQuantity = "{{$productlink->product_quantity}}";
        var productprice = "{{$productlink->product_price}}";
        var taxes = "{{$productlink->checkout_taxes_value}}";
        var freeOptionValue = "{{$productlink->checkout_free_option_Value}}";
        var expressOptionValue = "{{$productlink->checkout_express_option_value}}";

        var subtotal=0;
        var total=0;

        var timezonetocountry = {
            "Andorra": "Andorra",
            "Dubai": "United Arab Emirates",
            "Kabul": "Afghanistan",
            "Tirane": "Albania",
            "Yerevan": "Armenia",
            "Casey": "Antarctica",
            "Davis": "Antarctica",
            "Mawson": "Antarctica",
            "Palmer": "Antarctica",
            "Rothera": "Antarctica",
            "Troll": "Antarctica",
            "Vostok": "Antarctica",
            "Buenos_Aires": "Argentina",
            "Cordoba": "Argentina",
            "Salta": "Argentina",
            "Jujuy": "Argentina",
            "Tucuman": "Argentina",
            "Catamarca": "Argentina",
            "La_Rioja": "Argentina",
            "San_Juan": "Argentina",
            "Mendoza": "Argentina",
            "San_Luis": "Argentina",
            "Rio_Gallegos": "Argentina",
            "Ushuaia": "Argentina",
            "Pago_Pago": "Samoa (American)",
            "Vienna": "Austria",
            "Lord_Howe": "Australia",
            "Macquarie": "Australia",
            "Hobart": "Australia",
            "Melbourne": "Australia",
            "Sydney": "Australia",
            "Broken_Hill": "Australia",
            "Brisbane": "Australia",
            "Lindeman": "Australia",
            "Adelaide": "Australia",
            "Darwin": "Australia",
            "Perth": "Australia",
            "Eucla": "Australia",
            "Baku": "Azerbaijan",
            "Barbados": "Barbados",
            "Dhaka": "Bangladesh",
            "Brussels": "Belgium",
            "Sofia": "Bulgaria",
            "Bermuda": "Bermuda",
            "Brunei": "Brunei",
            "La_Paz": "Bolivia",
            "Noronha": "Brazil",
            "Belem": "Brazil",
            "Fortaleza": "Brazil",
            "Recife": "Brazil",
            "Araguaina": "Brazil",
            "Maceio": "Brazil",
            "Bahia": "Brazil",
            "Sao_Paulo": "Brazil",
            "Campo_Grande": "Brazil",
            "Cuiaba": "Brazil",
            "Santarem": "Brazil",
            "Porto_Velho": "Brazil",
            "Boa_Vista": "Brazil",
            "Manaus": "Brazil",
            "Eirunepe": "Brazil",
            "Rio_Branco": "Brazil",
            "Thimphu": "Bhutan",
            "Minsk": "Belarus",
            "Belize": "Belize",
            "St_Johns": "Canada",
            "Halifax": "Canada",
            "Glace_Bay": "Canada",
            "Moncton": "Canada",
            "Goose_Bay": "Canada",
            "Toronto": "Canada",
            "Nipigon": "Canada",
            "Thunder_Bay": "Canada",
            "Iqaluit": "Canada",
            "Pangnirtung": "Canada",
            "Winnipeg": "Canada",
            "Rainy_River": "Canada",
            "Resolute": "Canada",
            "Rankin_Inlet": "Canada",
            "Regina": "Canada",
            "Swift_Current": "Canada",
            "Edmonton": "Canada",
            "Cambridge_Bay": "Canada",
            "Yellowknife": "Canada",
            "Inuvik": "Canada",
            "Dawson_Creek": "Canada",
            "Fort_Nelson": "Canada",
            "Whitehorse": "Canada",
            "Dawson": "Canada",
            "Vancouver": "Canada",
            "Cocos": "Cocos (Keeling) Islands",
            "Zurich": "Switzerland",
            "Abidjan": "Côte d'Ivoire",
            "Rarotonga": "Cook Islands",
            "Santiago": "Chile",
            "Punta_Arenas": "Chile",
            "Easter": "Chile",
            "Shanghai": "China",
            "Urumqi": "China",
            "Bogota": "Colombia",
            "Costa_Rica": "Costa Rica",
            "Havana": "Cuba",
            "Cape_Verde": "Cape Verde",
            "Christmas": "Christmas Island",
            "Nicosia": "Cyprus",
            "Famagusta": "Cyprus",
            "Prague": "Czech Republic",
            "Berlin": "Germany",
            "Copenhagen": "Denmark",
            "Santo_Domingo": "Dominican Republic",
            "Algiers": "Algeria",
            "Guayaquil": "Ecuador",
            "Galapagos": "Ecuador",
            "Tallinn": "Estonia",
            "Cairo": "Egypt",
            "El_Aaiun": "Western Sahara",
            "Madrid": "Spain",
            "Ceuta": "Spain",
            "Canary": "Spain",
            "Helsinki": "Finland",
            "Fiji": "Fiji",
            "Stanley": "Falkland Islands",
            "Chuuk": "Micronesia",
            "Pohnpei": "Micronesia",
            "Kosrae": "Micronesia",
            "Faroe": "Faroe Islands",
            "Paris": "France",
            "London": "Britain (UK)",
            "Tbilisi": "Georgia",
            "Cayenne": "French Guiana",
            "Gibraltar": "Gibraltar",
            "Nuuk": "Greenland",
            "Danmarkshavn": "Greenland",
            "Scoresbysund": "Greenland",
            "Thule": "Greenland",
            "Athens": "Greece",
            "South_Georgia": "South Georgia & the South Sandwich Islands",
            "Guatemala": "Guatemala",
            "Guam": "Guam",
            "Bissau": "Guinea-Bissau",
            "Guyana": "Guyana",
            "Hong_Kong": "Hong Kong",
            "Tegucigalpa": "Honduras",
            "Port-au-Prince": "Haiti",
            "Budapest": "Hungary",
            "Jakarta": "Indonesia",
            "Pontianak": "Indonesia",
            "Makassar": "Indonesia",
            "Jayapura": "Indonesia",
            "Dublin": "Ireland",
            "Jerusalem": "Israel",
            "Kolkata": "India",
            "Calcutta": "India",
            "Chagos": "British Indian Ocean Territory",
            "Baghdad": "Iraq",
            "Tehran": "Iran",
            "Reykjavik": "Iceland",
            "Rome": "Italy",
            "Jamaica": "Jamaica",
            "Amman": "Jordan",
            "Tokyo": "Japan",
            "Nairobi": "Kenya",
            "Bishkek": "Kyrgyzstan",
            "Tarawa": "Kiribati",
            "Kanton": "Kiribati",
            "Kiritimati": "Kiribati",
            "Pyongyang": "Korea (North)",
            "Seoul": "Korea (South)",
            "Almaty": "Kazakhstan",
            "Qyzylorda": "Kazakhstan",
            "Qostanay": "Kazakhstan",
            "Aqtobe": "Kazakhstan",
            "Aqtau": "Kazakhstan",
            "Atyrau": "Kazakhstan",
            "Oral": "Kazakhstan",
            "Beirut": "Lebanon",
            "Colombo": "Sri Lanka",
            "Monrovia": "Liberia",
            "Vilnius": "Lithuania",
            "Luxembourg": "Luxembourg",
            "Riga": "Latvia",
            "Tripoli": "Libya",
            "Casablanca": "Morocco",
            "Monaco": "Monaco",
            "Chisinau": "Moldova",
            "Majuro": "Marshall Islands",
            "Kwajalein": "Marshall Islands",
            "Yangon": "Myanmar (Burma)",
            "Ulaanbaatar": "Mongolia",
            "Hovd": "Mongolia",
            "Choibalsan": "Mongolia",
            "Macau": "Macau",
            "Martinique": "Martinique",
            "Malta": "Malta",
            "Mauritius": "Mauritius",
            "Maldives": "Maldives",
            "Mexico_City": "Mexico",
            "Cancun": "Mexico",
            "Merida": "Mexico",
            "Monterrey": "Mexico",
            "Matamoros": "Mexico",
            "Mazatlan": "Mexico",
            "Chihuahua": "Mexico",
            "Ojinaga": "Mexico",
            "Hermosillo": "Mexico",
            "Tijuana": "Mexico",
            "Bahia_Banderas": "Mexico",
            "Kuala_Lumpur": "Malaysia",
            "Kuching": "Malaysia",
            "Maputo": "Mozambique",
            "Windhoek": "Namibia",
            "Noumea": "New Caledonia",
            "Norfolk": "Norfolk Island",
            "Lagos": "Nigeria",
            "Managua": "Nicaragua",
            "Amsterdam": "Netherlands",
            "Oslo": "Norway",
            "Kathmandu": "Nepal",
            "Nauru": "Nauru",
            "Niue": "Niue",
            "Auckland": "New Zealand",
            "Chatham": "New Zealand",
            "Panama": "Panama",
            "Lima": "Peru",
            "Tahiti": "French Polynesia",
            "Marquesas": "French Polynesia",
            "Gambier": "French Polynesia",
            "Port_Moresby": "Papua New Guinea",
            "Bougainville": "Papua New Guinea",
            "Manila": "Philippines",
            "Karachi": "Pakistan",
            "Warsaw": "Poland",
            "Miquelon": "St Pierre & Miquelon",
            "Pitcairn": "Pitcairn",
            "Puerto_Rico": "Puerto Rico",
            "Gaza": "Palestine",
            "Hebron": "Palestine",
            "Lisbon": "Portugal",
            "Madeira": "Portugal",
            "Azores": "Portugal",
            "Palau": "Palau",
            "Asuncion": "Paraguay",
            "Qatar": "Qatar",
            "Reunion": "Réunion",
            "Bucharest": "Romania",
            "Belgrade": "Serbia",
            "Kaliningrad": "Russia",
            "Moscow": "Russia",
            "Simferopol": "Russia",
            "Kirov": "Russia",
            "Volgograd": "Russia",
            "Astrakhan": "Russia",
            "Saratov": "Russia",
            "Ulyanovsk": "Russia",
            "Samara": "Russia",
            "Yekaterinburg": "Russia",
            "Omsk": "Russia",
            "Novosibirsk": "Russia",
            "Barnaul": "Russia",
            "Tomsk": "Russia",
            "Novokuznetsk": "Russia",
            "Krasnoyarsk": "Russia",
            "Irkutsk": "Russia",
            "Chita": "Russia",
            "Yakutsk": "Russia",
            "Khandyga": "Russia",
            "Vladivostok": "Russia",
            "Ust-Nera": "Russia",
            "Magadan": "Russia",
            "Sakhalin": "Russia",
            "Srednekolymsk": "Russia",
            "Kamchatka": "Russia",
            "Anadyr": "Russia",
            "Riyadh": "Saudi Arabia",
            "Guadalcanal": "Solomon Islands",
            "Mahe": "Seychelles",
            "Khartoum": "Sudan",
            "Stockholm": "Sweden",
            "Singapore": "Singapore",
            "Paramaribo": "Suriname",
            "Juba": "South Sudan",
            "Sao_Tome": "Sao Tome & Principe",
            "El_Salvador": "El Salvador",
            "Damascus": "Syria",
            "Grand_Turk": "Turks & Caicos Is",
            "Ndjamena": "Chad",
            "Kerguelen": "French Southern & Antarctic Lands",
            "Bangkok": "Thailand",
            "Dushanbe": "Tajikistan",
            "Fakaofo": "Tokelau",
            "Dili": "East Timor",
            "Ashgabat": "Turkmenistan",
            "Tunis": "Tunisia",
            "Tongatapu": "Tonga",
            "Istanbul": "Turkey",
            "Funafuti": "Tuvalu",
            "Taipei": "Taiwan",
            "Kiev": "Ukraine",
            "Uzhgorod": "Ukraine",
            "Zaporozhye": "Ukraine",
            "Wake": "US minor outlying islands",
            "New_York": "United States",
            "Detroit": "United States",
            "Louisville": "United States",
            "Monticello": "United States",
            "Indianapolis": "United States",
            "Vincennes": "United States",
            "Winamac": "United States",
            "Marengo": "United States",
            "Petersburg": "United States",
            "Vevay": "United States",
            "Chicago": "United States",
            "Tell_City": "United States",
            "Knox": "United States",
            "Menominee": "United States",
            "Center": "United States",
            "New_Salem": "United States",
            "Beulah": "United States",
            "Denver": "United States",
            "Boise": "United States",
            "Phoenix": "United States",
            "Los_Angeles": "United States",
            "Anchorage": "United States",
            "Juneau": "United States",
            "Sitka": "United States",
            "Metlakatla": "United States",
            "Yakutat": "United States",
            "Nome": "United States",
            "Adak": "United States",
            "Honolulu": "United States",
            "Montevideo": "Uruguay",
            "Samarkand": "Uzbekistan",
            "Tashkent": "Uzbekistan",
            "Caracas": "Venezuela",
            "Ho_Chi_Minh": "Vietnam",
            "Efate": "Vanuatu",
            "Wallis": "Wallis & Futuna",
            "Apia": "Samoa (western)",
            "Johannesburg": "South Africa",
            "Antigua": "Antigua & Barbuda",
            "Anguilla": "Anguilla",
            "Luanda": "Angola",
            "McMurdo": "Antarctica",
            "DumontDUrville": "Antarctica",
            "Syowa": "Antarctica",
            "Aruba": "Aruba",
            "Mariehamn": "Åland Islands",
            "Sarajevo": "Bosnia & Herzegovina",
            "Ouagadougou": "Burkina Faso",
            "Bahrain": "Bahrain",
            "Bujumbura": "Burundi",
            "Porto-Novo": "Benin",
            "St_Barthelemy": "St Barthelemy",
            "Kralendijk": "Caribbean NL",
            "Nassau": "Bahamas",
            "Gaborone": "Botswana",
            "Blanc-Sablon": "Canada",
            "Atikokan": "Canada",
            "Creston": "Canada",
            "Kinshasa": "Congo (Dem. Rep.)",
            "Lubumbashi": "Congo (Dem. Rep.)",
            "Bangui": "Central African Rep.",
            "Brazzaville": "Congo (Rep.)",
            "Douala": "Cameroon",
            "Curacao": "Curaçao",
            "Busingen": "Germany",
            "Djibouti": "Djibouti",
            "Dominica": "Dominica",
            "Asmara": "Eritrea",
            "Addis_Ababa": "Ethiopia",
            "Libreville": "Gabon",
            "Grenada": "Grenada",
            "Guernsey": "Guernsey",
            "Accra": "Ghana",
            "Banjul": "Gambia",
            "Conakry": "Guinea",
            "Guadeloupe": "Guadeloupe",
            "Malabo": "Equatorial Guinea",
            "Zagreb": "Croatia",
            "Isle_of_Man": "Isle of Man",
            "Jersey": "Jersey",
            "Phnom_Penh": "Cambodia",
            "Comoro": "Comoros",
            "St_Kitts": "St Kitts & Nevis",
            "Kuwait": "Kuwait",
            "Cayman": "Cayman Islands",
            "Vientiane": "Laos",
            "St_Lucia": "St Lucia",
            "Vaduz": "Liechtenstein",
            "Maseru": "Lesotho",
            "Podgorica": "Montenegro",
            "Marigot": "St Martin (French)",
            "Antananarivo": "Madagascar",
            "Skopje": "North Macedonia",
            "Bamako": "Mali",
            "Saipan": "Northern Mariana Islands",
            "Nouakchott": "Mauritania",
            "Montserrat": "Montserrat",
            "Blantyre": "Malawi",
            "Niamey": "Niger",
            "Muscat": "Oman",
            "Kigali": "Rwanda",
            "St_Helena": "St Helena",
            "Ljubljana": "Slovenia",
            "Longyearbyen": "Svalbard & Jan Mayen",
            "Bratislava": "Slovakia",
            "Freetown": "Sierra Leone",
            "San_Marino": "San Marino",
            "Dakar": "Senegal",
            "Mogadishu": "Somalia",
            "Lower_Princes": "St Maarten (Dutch)",
            "Mbabane": "Eswatini (Swaziland)",
            "Lome": "Togo",
            "Port_of_Spain": "Trinidad & Tobago",
            "Dar_es_Salaam": "Tanzania",
            "Kampala": "Uganda",
            "Midway": "US minor outlying islands",
            "Vatican": "Vatican City",
            "St_Vincent": "St Vincent",
            "Tortola": "Virgin Islands (UK)",
            "St_Thomas": "Virgin Islands (US)",
            "Aden": "Yemen",
            "Mayotte": "Mayotte",
            "Lusaka": "Zambia",
            "Harare": "Zimbabwe"
        }

        var userRegion;
        var userCity;
        var userCountry;
        var userTimeZone;
        var currency;

        updateActualCuntry(timezonetocountry);
        updateActualCurrency();

        document.getElementById('shipping-rate-1').addEventListener('change', function(){
            var element = document.getElementById('shipping-rate-1');
            updateShippingPrice(element,currency, total);
        });
        document.getElementById('shipping-rate-0').addEventListener('change', function(){
            var element = document.getElementById('shipping-rate-0');
            updateShippingPrice(element,currency, total);
        });

        function updateActualCuntry(timezonetocountry){
            if (Intl) {
                userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                var tzArr = userTimeZone.split("/");
                userRegion = tzArr[0];
                userCity = tzArr[tzArr.length - 1];
                userCountry = timezonetocountry[userCity];
            }
            console.log("Time Zone:", userTimeZone);
            console.log("Region:", userRegion);
            console.log("City:", userCity);
            console.log("Country:", userCountry);

            const $selectBillingCountry = document.querySelector('#checkout_billing_country_code');
            const $selectShippingCountry = document.querySelector('#checkout_shipping_country_code');

            var optionsBilling = $selectBillingCountry.options;
            var optionsShipping = $selectShippingCountry.options;

            for (var i = 0; i < optionsBilling.length; i++) {
                var optionBilling = optionsBilling[i];
                var optionShipping = optionsShipping[i];
                if (optionBilling.innerText === userCountry) {
                    optionBilling.selected = true;
                    optionShipping.selected = true;
                } else {
                    optionBilling.selected = false;
                    optionShipping.selected = false;
                }
            }
        }

        function updateActualCurrency(){
            const selectElement = document.getElementById('checkout_billing_country_code');

            var index = selectElement.selectedIndex;
            var countryCode = selectElement.options[index].value;
            currency = countryToCurrency[ countryCode ];

            console.log(index);
            console.log(countryCode);
            console.log(currency);

            $.get('https://openexchangerates.org/api/latest.json', {app_id: 'ef64265ccfcf4e60bd08ab9387433cd5'}, function(data) {
                
                var changevalue = data["rates"][currency];

                productQuantity     = parseInt(productQuantity);
                productprice        = parseFloat(productprice);
                taxes               = parseFloat(taxes);
                freeOptionValue     = parseFloat(freeOptionValue);
                expressOptionValue  = parseFloat(expressOptionValue);

                subtotal = productQuantity*productprice;
                total = subtotal + freeOptionValue + taxes;

                document.getElementById('subtotal_dolar').value = subtotal.toFixed(2);
                document.getElementById('shipping_price_dolar').value = freeOptionValue.toFixed(2);
                document.getElementById('taxes_dolar').value = taxes.toFixed(2);
                document.getElementById('total_dolar').value = total.toFixed(2);
                document.getElementById('client_currency').value = currency;
                document.getElementById('client_currency_exchange').value = parseFloat(changevalue).toFixed(2);

                productprice        = Math.round(productprice*changevalue);
                taxes               = Math.round(taxes*changevalue);
                freeOptionValue     = Math.round(freeOptionValue*changevalue);
                expressOptionValue  = Math.round(expressOptionValue*changevalue);
                
                subtotal = productQuantity*productprice;
                total = subtotal + freeOptionValue + taxes;

                document.getElementById('mobile_total_1_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_2_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_3_id').innerHTML = total + ' '+currency; 
                document.getElementById('mobile_total_4_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_5_id').innerHTML = total + ' '+currency; 

                document.getElementById('subtotal_1_id').innerHTML = subtotal + ' '+currency;
                document.getElementById('subtotal_2_id').innerHTML = subtotal + ' '+currency;

                document.getElementById('taxes_1_id').innerHTML = taxes + ' '+currency;
                document.getElementById('taxes_2_id').innerHTML = taxes + ' '+currency;

                document.getElementById('shipping_express_value_id').innerHTML = expressOptionValue + ' '+currency;
   
            });
        }

        function updateShippingPrice(inputRadio, currency, total){
            if(inputRadio.id == 'shipping-rate-1'){
                document.getElementById('chipping_selected_id').innerHTML = document.getElementById('shipping_express_id').innerHTML;
                document.getElementById('chipping_selected_value_id').innerHTML = document.getElementById('shipping_express_value_id').innerHTML;
                document.getElementById('shipping_label_mobile').innerHTML = document.getElementById('shipping_express_id').innerHTML;
                document.getElementById('shipping_value_mobile').innerHTML = document.getElementById('shipping_express_value_id').innerHTML;

                total = total + expressOptionValue;

                document.getElementById('mobile_total_1_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_2_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_3_id').innerHTML = total + ' '+currency; 
                document.getElementById('mobile_total_4_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_5_id').innerHTML = total + ' '+currency;

                var expressOptionValue_dolar = parseFloat("{{$productlink->checkout_express_option_value}}").toFixed(2);
                var productPrice_dolar = parseFloat("{{$productlink->product_price}}").toFixed(2);
                var taxes_dolar = parseFloat("{{$productlink->checkout_taxes_value}}").toFixed(2);

                document.getElementById('shipping_price_dolar').value = expressOptionValue_dolar;
                document.getElementById('shipping_description').value = "{{$productlink->checkout_express_option_label}}";

                var total_dolar = (parseFloat(expressOptionValue_dolar) + parseFloat(productPrice_dolar*parseInt(productQuantity))) + parseFloat(taxes_dolar);
                document.getElementById('total_dolar').value = total_dolar.toFixed(2);
                console.log(total_dolar);

            } else{
                document.getElementById('chipping_selected_id').innerHTML = document.getElementById('shipping_free_id').innerHTML;
                document.getElementById('chipping_selected_value_id').innerHTML = document.getElementById('shipping_free_value_id').innerHTML;
                document.getElementById('shipping_label_mobile').innerHTML = document.getElementById('shipping_free_id').innerHTML;
                document.getElementById('shipping_value_mobile').innerHTML = "FREE";
                
                total = total;

                document.getElementById('mobile_total_1_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_2_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_3_id').innerHTML = total + ' '+currency; 
                document.getElementById('mobile_total_4_id').innerHTML = total + ' '+currency;
                document.getElementById('mobile_total_5_id').innerHTML = total + ' '+currency; 

                var freeOptionValue_dolar = parseFloat("{{$productlink->checkout_free_option_Value}}").toFixed(2);
                var productPrice_dolar = parseFloat("{{$productlink->product_price}}").toFixed(2);
                var taxes_dolar = parseFloat("{{$productlink->checkout_taxes_value}}").toFixed(2);
                var total_dolar = (parseFloat(freeOptionValue_dolar) + parseFloat(productPrice_dolar*parseInt(productQuantity))) + parseFloat(taxes_dolar);
                document.getElementById('total_dolar').value = total_dolar.toFixed(2);
                document.getElementById('shipping_price_dolar').value = freeOptionValue_dolar;
                document.getElementById('shipping_description').value = "{{$productlink->checkout_free_option_label}}";
                console.log(total_dolar);
            }
        }
    });
</script>