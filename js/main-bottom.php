<script type="text/babel">
//ReactDOM.render(GetNameOfCurrentCurrency(), document.getElementsByClassName('priceCurrency'));
var indexWriteCurrency = 0;
$( ".priceCurrency" ).each(function() {
    ReactDOM.render(GetNameOfCurrentCurrency(), document.getElementsByClassName('priceCurrency')[indexWriteCurrency]);
    indexWriteCurrency+=1;
});

</script>