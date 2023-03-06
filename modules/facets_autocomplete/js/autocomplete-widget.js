/**
 * @file
 * provides autocomplete functionality.
 */

(function ($) {

    'use strict';

    Drupal.facets_autocomplete = Drupal.facets_autocomplete || {};
    Drupal.behaviors.facetsAutocompleteWidget = {
        attach: function (context, settings) {
            Drupal.facets_autocomplete.prepareAutocomplete(context, settings);
        }
    };

    /**
     * Turns textfield into an autocomplete Turns all facet links into a dropdown with options for every link.
     *
     * @param {object} context
     *   Context.
     * @param {object} settings
     *   Settings.
     */
    Drupal.facets_autocomplete.prepareAutocomplete = function (context, settings) {
        var autocomplete_settings = settings.facets_autocomplete.autocomplete_widget;
        $('.autocomplete-facet').once().each(function () {
            var facet = $(this);
            var data_id = $(facet).data("id");
            // @TODO if toevoegen.
            var search_results = autocomplete_settings[data_id].results;
            var search_results_urls = autocomplete_settings[data_id].urls
            var default_value = autocomplete_settings[data_id].default_value
            var reset_url = autocomplete_settings[data_id].reset_url
            document.getElementById(data_id).value = default_value;
            autocomplete(document.getElementById(data_id), Object.values(search_results), search_results_urls, document.getElementById(data_id + '-reset'), reset_url);
        });

    };

})(jQuery);




function autocomplete(inp, arr, search_results_urls, reset, reset_url) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    var input_value = this.getElementsByTagName("input")[0].value
                    inp.value = input_value;
                    var redirect_url = search_results_urls[input_value];
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                    // Redirect to the selected value.
                    window.location.href = redirect_url;
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        console.log('x');
        console.log(x);
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
    /*execute a function when someone clicks the reset:*/
    if (reset) {
        reset.addEventListener("click", function(e) {
            e.preventDefault();
            inp.value = "";
            closeAllLists();
            window.location.href = reset_url;
        });
    }
}