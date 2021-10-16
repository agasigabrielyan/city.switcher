$(document).ready(function() {
    BX.bindDelegate(
        document.body, "change", {className: "header-top__geo"},
        function(e) {
            let selectedOption = this.selectedOptions[0].value;
            if(selectedOption.length > 0) {
                debugger;
                BX.setCookie(
                    "CITY_OF_SWITCHER",
                    selectedOption,
                    {expires: 36000000}
                );
            }
        }
    );

});