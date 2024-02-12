<style>

    #loading_img{position: fixed; left: 0;right: 0;margin: 0 auto; top: 100px; display: none;}


</style>

<script src="js/jquery-1.10.2.min.js"></script>

<img src="loading.gif" id="loading_img">

<button id="test"></button>


<script>

    $("#test").click(function(){

        $("#loading_img").show();

        $.ajax(function(){

            url:'test.php',
                type:'post',
                data:{}


        })

            .done(function(){

                $("#loading_img").hide();


            })


    })



</script>