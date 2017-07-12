var options = {
    url: "cards.json",
    listLocation: "cards",
    getValue: "name",
    ajaxSettings: {
        dataType: "jsonp"
    },

    requestDelay: 300,
    theme: "funky"
};

$("#pokemon").easyAutocomplete(options);