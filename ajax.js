<script type="text/javascript">

    $(document).ready(function(){
        $('#setiabtn').click(function(e){
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "code.php",
                data: $('#vedformid').serialize(),
                dataType: "text",
                success: function (response){
                    $('#messagedisplay').text(response);
                }
            })
        })
    });

$(document).ready(function(){
        $('#saccbtnt').click(function(e){
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "",
                data: $('stock').serialize(),
                dataType: "html",
                success: function (response){
                    $('#messagedisplay').html(response);
                }
            })
        })
    });

$(document).ready(function(){
        $('#aeonbtn').click(function(e){
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "",
                data: $('stock').serialize(),
                dataType: "html",
                success: function (response){
                    $('#messagedisplay').html(response);
                }
            })
        })
    });

</script>