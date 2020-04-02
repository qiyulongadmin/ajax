<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <script src="{{asset('ajax/js/jquery-1.11.3.min.js')}}"></script>

    <script>

        // $(document).ready(function() {
        //     // alert("hellow 齐玉龙");
        //         var $div1 = $("div")[0];
        //         var $div2 = $(".box1")[0];
        //         var $div3 = $("#box2")[0];
        //         console.log($div1);
        //         console.log($div2);
        //         console.log($div3);
        // });


        $(function(){
            var $div1 = $("div")[0];
            var $div1 = $(".box1")[0];
            var $div1 = $("#box2")[0];
            console.log($$div1);
            console.log($$div2);
            console.log($$div3);
        });
    </script>
</head>
<body>
    <form action="">
        <div></div>
        <div class="box1">姓名：<input type="text"></div>
        <div id="box2">密码：<input type="text"></div>
        <input type="button" value="提交" style="display: block;">
    </form>


</body>
</html>
