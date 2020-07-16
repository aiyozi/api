<form action="{{url('login/logindo')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>输入手机号或邮箱</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>输入密码</td>
            <td><input type="password" name="pwd">
            <font color="red">{{session("msg")}}</font>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"></td>
            <td></td>
        </tr>
    </table>
</form>