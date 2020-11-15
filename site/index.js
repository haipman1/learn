$(document).ready(function () {

    $('#sendTask').on('click', function () {



        try {
            var name1 = $('#name1').val();
            var name2 =  $('#name2').val();
            var sumname = name1 +' '+ name2;
            var tel = $('#tel').val();
            var age = $('#age').val();
            var category = $('#category').val();



            var isChecked = false;
            $('input[type=checkbox]').each(function () {
                if ($(this).prop('checked')) {
                    isChecked = true;
                }
                else {
                    isChecked = false;
                }
            });


            if(name1 != "" & name2 != '' & tel != "" & isChecked == true) {


                $('#response').load('main.php', {'name': sumname, 'tel': tel, 'age': age, 'category': category});



                $(document).ready(function () {
                    setTimeout(function () {
                        $('#name1').val(name1);
                        $('#name2').val(name2);
                        $('#tel').val(tel);
                        $('#invalidCheck').attr('checked', true);


                        $('#response').append('<div id="box_suc-reg" style="position: fixed; bottom: 0; left: 0; z-index: 5;">\n' +
                            '<div class="alert alert-success alert-dismissible fade show m-5 w-50" id=\'suc-reg\' role="alert">\n' +
                            '<h4 class="alert-heading">Well done!</h4>\n' +
                            '<p>Your application has been successfully sent! Please look forward to being contacted.</p>\n' +
                            '<hr>\n<p class="mb-0">You can join a group discussing the timing and duration of the courses<br>vk.com/...</p>\n' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</div>\n' +
                            '</div>');

                    }, 700); // время в мс
                })

            }
            else{
                //Работает modal-header
            }




        } catch (e) {
            alert(e);
        }
    })

    $('#letsGo').click(function(){
        $('html, body').animate({
            scrollTop: $('#sendTask').position().top - '600'
        },  {duration: 1500,
            easing: 'swing'});
    });




})
