<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <script src="{{asset('ajax/js/jquery-1.11.3.min.js')}}"></script>
</head>
<body>
    <form id="f" action="https://www.bilibili.com/">
        <div id="tishi">123</div>
        <div class="box1">姓名：<input type="text" id="name"></div>
        <div id="box2">密码：<input type="text" id="password"></div>
        <input type="submit" value="提交" style="display: block;">
    </form>

    <script>
        $(function() {
            $("#f").submit(function(e){
                if($("#name").val() == "bilibili"){
                    alert("yes bilibili")
                    return true;
                }else{
                    alert("不是哔哩哔哩");
                    if($("#password").val() == "123"){
                        $.ajax({
                            //请求方式
                           type:"post",

                           //服务器相应数据的解析方式
                           dataType:"json",
                           headers: {
                                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                               },
                           //请求资源url
                           url:"/ajax/index",
                           //向服务器端发送的数据
                           data:{"name":$("#name").val(),"password":$("#password").val()},
                           success:function(data){
                                if(data.status == 0){
                                    alert("添加成功！");
                                    return true;
                                }else{
                                    alert("添加失败！");
                                    return false;
                                }
                           },
                           error:function(){
                               window.console.log("服务器病了");
                           }

                        });
                    }
                    return false;
                }
            })
        });
    </script>

</body>
</html>
