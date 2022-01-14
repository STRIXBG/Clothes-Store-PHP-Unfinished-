<script type="text/babel">
    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie); //to be careful
        const cArr = cDecoded.split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        });
        return res;
    }
    function checkForCookies(){
        let countryText = getCookie("countryText");
        let moneyText = getCookie("moneyText");
        if (countryText === undefined) {
            document.cookie = "countryText=United Kingdom";
        }
        if (moneyText === undefined) {
            document.cookie = "moneyText=Euro";
        }
    }
    checkForCookies();
    var moneyShoppingIndexText = getCookie("moneyText");
    ReactDOM.render(moneyShoppingIndexText, document.getElementById('shopping-with-currency'));
    var countryIndexText = getCookie("countryText");
    var currencyIndexText = getCookie("moneyText");
    const bulgarianFlagPath = "./images/bulgaria.png";
    const unitedKingdomFlagPath = "./images/uk.png";
    function GetFlagOfCurrentCountry(){
        switch(countryIndexText){
            case "Bulgaria":{
                    return bulgarianFlagPath; 
            }
            case "United Kingdom":{
                    return unitedKingdomFlagPath; 
            }
        }
    }
    function GetNameOfCurrentCountry(){
        return countryIndexText;
    }
    function CountryLogo() {
        return <img src={GetFlagOfCurrentCountry()} id="shopping-country" class="country-flag" alt="Flag" />;
    }
    ReactDOM.render(CountryLogo(), document.getElementById('country-flag-container'));
    ReactDOM.render(CountryLogo(), document.getElementById('country-flag-container-top'));
    const countries = ["Bulgaria", "United Kingdom"];
    var countriesWithoutUsed = countries.filter(function(f) { return f !== GetNameOfCurrentCountry(); });
    const countriesLength = countries.length;
    
    function CountrySelectionOptions(){
        var valueIndex = 0;
        let content = [];
        content.push(<option value="{valueIndex}">{GetNameOfCurrentCountry()}</option>);
        for(var i=0; i<countriesWithoutUsed.length; i++){
            content.push(<option value="{valueIndex}">{countriesWithoutUsed[i]}</option>);
        }
        return content;
    }
        ReactDOM.render(CountrySelectionOptions(), document.getElementById('select-country'));
    
    function GetNameOfCurrentCurrency(){
        return currencyIndexText;
    }
    
    const currency = ["Euro", "Bulgarian Lev"];
    var currencyWithoutUsed = currency.filter(function(f) { return f !== GetNameOfCurrentCurrency(); });
    const currencyLength = currency.length;
    
    function CurrencySelectionOptions(){
        var valueIndex = 0;
        let content = [];
        content.push(<option value="{valueIndex}">{GetNameOfCurrentCurrency()}</option>);
        for(var i=0; i<currencyWithoutUsed.length; i++){
            content.push(<option value="{valueIndex}">{currencyWithoutUsed[i]}</option>);
        }
        return content;
    }
    
    ReactDOM.render(CurrencySelectionOptions(), document.getElementById('select-money-type'));
    </script>