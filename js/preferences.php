<script>
    $( "#update-preferences" ).click(function() {
        var countryText = $('#select-country').children("option:selected").text();
        var moneyText = $('#select-money-type').children("option:selected").text();
        document.cookie = "countryText="+countryText;
        document.cookie = "moneyText="+moneyText;
        location.reload();
    });
    </script>