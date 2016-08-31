// $(document).ready(function(){
//     $('#ingrediente').autocomplete({
//         serviceUrl: './ingredientes',
//         onSelect: function (suggestion) {
//             alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
//         }
//     });
// });
$(document).ready(function() {
    $('#ingrediente').autocomplete({
        paramName: './ingredientes',
        transformResult: function (response) {
            return {
                suggestions: $.map(response.myData, function (dataItem) {
                    return {value: dataItem.id, data: dataItem.nombre};
                })
            };
        }
    });
});
