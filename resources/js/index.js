$(document).ready(function () {
    $('#type').on('change', function (){
        let $accommodation = {'estandar': ['Sencilla', 'Doble'], 'junior': ['Triple','Cuádruple'], 'suite': ['Sencilla', 'Doble', 'Triple']}
        $vale = $(this).val();
        $('#accommodation').html('<option selected disabled>- Seleccione tipo de acomodación -</option>');
        $.each($accommodation, function (i, e){
            if(i === $vale){
                $.each(e, function (index, element) {
                    $('#accommodation').append('<option value="'+element+'">'+element+'</option>');
                });
            }
        });
    });
});
