/**
 * Created by Jarvis on 04/04/2020.
 */
$(function () {
    if($('.page-content').hasClass('plans')){
        $('.nav-item').siblings('.active').removeClass('active');
        $('.plansSpan').parents('.nav-item').addClass('active');
    }else if($('.page-content').hasClass('users')){
        $('.nav-item').siblings('.active').removeClass('active');
        $('.usersSpan').parents('.nav-item').addClass('active');
    }else if($('.page-content').hasClass('acceuil')){
        $('.nav-item').siblings('.active').removeClass('active');
        $('.dashSpan').parents('.nav-item').addClass('active');
    }else if($('.page-content').hasClass('roles')){
        $('.nav-item').siblings('.active').removeClass('active');
        $('.rolesSpan').parents('.nav-item').addClass('active');
    }else if($('.page-content').hasClass('msg')){
        $('.nav-item').siblings('.active').removeClass('active');
        $('.msgSpan').parents('.nav-item').addClass('active');
    }
    $('.link-title').click(function (e) {

        $(this).siblings('.active').removeClass('active');
       $(this).addClass('active');

    });
    $.ajax({
        type:'get',
        url:'messages/notifs',
        data:{
            messages:'messages',
        },
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        async:false,
        success:function (data) {
            //  console.log(data);
            //alert(data);
            return data;
        },
        error:function (e) {
            // console.log(e);
        }
    });


    /* $(".basic").click(function (e) {
     e.preventDefault();
     //alert("youpiii");
     $.ajaxSetup({

     headers: {

     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }
     });
     //showSwal('custom-position');
     $.ajax({
     url:'/plans/buy',
     type:'post',
     data:{
     test:'test',
     },
     success:function (data) {
     console.log(data);
     alert("success");
     showSwal('custom-position');
     },
     });

     });


     */
});