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

var sort = "ASC"; //promenljiva zajednicka za sort automobila i iznajmljivanja

function sortRentPeriod() {


    // var sort = "ASC"; //proveri sta se desi kada se izbaci napolje promenljiva

    $.ajax({
        url: 'ajax/sortRent.php',
        method: 'post',
        data: {
            sort_type: sort
        },

        success: function (data) {
            $('tbody').html(data);
            
            if(sort=="DESC"){
                sort="ASC";
            }
            else
                sort="DESC";
        }
    })
}

function sortCarPrice(){

    $.ajax({
        url: 'ajax/sortCars.php',
        method: 'post',
        data: {
            sort_type: sort
        },

        success: function (data) {
            $('tbody').html(data);
            
            if(sort=="DESC"){
                sort="ASC";
            }
            else
                sort="DESC";
        }
    })
}

function sortCarYear(){

    $.ajax({
        url: 'ajax/sortCarsYear.php',
        method: 'post',
        data: {
            sort_type: sort
        },

        success: function (data) {
            $('tbody').html(data);
            
            if(sort=="DESC"){
                sort="ASC";
            }
            else
                sort="DESC";
        }
    })
}

