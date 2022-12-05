function pretraziRent() {

    var proizvodjac = $('#rez_input').val()

    $.ajax({
        url: 'ajax/search.php',
        method: 'post',
        data: {
            proizvodjac_car: proizvodjac
        },

        success: function (data) {
            $('.div-reservations').html(data);
        }
    })
}

function obrisiRent(id){

    

    $.ajax({
        url: 'ajax/deleteRent.php',
        method: 'post',
        data: {
            rent_id: id
        },

        success: function () {
            window.location.reload()
        }
    })


}

