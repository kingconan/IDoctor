<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div style="padding: 30px">
                <div style="padding:60px;width: 100%;text-align: center">
                    <img width="80px" height="80px" style="background-color: lightblue" />
                </div>
                <form class="form">
                    <div class="input-group">
                        <div class="input-group-addon"><img style="width: 20px;height: 20px;background-color: lightblue" /></div>
                        <input type="text" class="form-control" placeholder="用户名">
                    </div>
                    <label>用户名</label>
                    <div style="height: 8px"></div>

                    <div class="input-group">
                        <div class="input-group-addon"><img style="width: 20px;height: 20px;background-color: lightblue" /></div>
                        <input type="text" class="form-control" placeholder="密码">
                    </div>
                    <label>密码</label>

                    <div style="height: 30px"></div>


                    <button type="button" style="float: right" class="btn btn-default" onclick="switch_register(this)">注册</button>
                    <button type="button" style="float: right;margin-right: 15px" class="btn btn-default" onclick="login(this)">登录</button>
                    <div style="clear: both"></div>
                </form>
            </div>
        </div>
    </div>
</div>