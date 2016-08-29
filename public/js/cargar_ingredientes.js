$(document).ready(function(){
    var ingredientes = [
        { value: 'Andorra', data: 'AD' },
        { value: 'Zimbabwe', data: 'ZZ' },
        { value: 'Venezuela', data: 'VE' },
        { value: 'Colombia', data: 'CO' }
    ];

    $('#ingrediente').autocomplete({
        lookup: ingredientes,
        onSelect: function (suggestion) {
            alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        }
    });
});

// $( function() {
//     function log( message ) {
//         $( "<div>" ).text( message ).prependTo( "#log" );
//         $( "#log" ).scrollTop( 0 );
//     }
//
//     $( "#ingredientes" ).autocomplete({
//         source: "ingredientes",
//         minLength: 2,
//         select: function( event, ui ) {
//             log( ui.item ?
//             "Selected: " + ui.item.value + " aka " + ui.item.id :
//             "Nothing selected, input was " + this.value );
//         }
//     });
// } );
