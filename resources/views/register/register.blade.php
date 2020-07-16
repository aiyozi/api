<form action="{{url('register/registerdo')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>手机号或者邮箱</td>
            <td><input type="text" name="name">
            <font color="yellow">{{$errors->first("name")}}</font>
            </td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd">
            <font color="green">{{$errors->first("pwd")}}</font>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="注册"></td>
            <td></td>
        </tr>
    </table>
</form>