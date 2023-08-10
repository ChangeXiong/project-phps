$(function(){
 $(".button").on('click',function(){
    var bclass = $('#Bclass').val();
    var rclass = $('#Rclass').val();
    if(bclass == "" && rclass == ""){
        $('#Bclass').css('border','1px solid red');
        $('.Bclass').text('ເລືອກຊັ້ນຮຽນ').css('color','red');
        $('#Rclass').css('border','1px solid red');
        $('.Rclass').text('ປ້ອນຂໍ້ມູນຫ້ອງ').css('color','red');
    }
    if(bclass != ""){
        $('#Bclass').css('border','1px solid #CCC');
        $('.Bclass').hide();
        $('#Rclass').css('border','1px solid red');
        $('.Rclass').text('ປ້ອນຂໍ້ມູນຫ້ອງ').css('color','red');
    }
    if(rclass != ""){
        $('#Rclass').css('border','1px solid #CCC');
        $('.Rclass').hide();
    }
 })
})