<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <input type="text" class="form-control" placeholder="邮件">
                    </div>
                    <label>邮件</label>
                    <div style="height: 8px"></div>

                    <div class="input-group">
                        <div class="input-group-addon"><img style="width: 20px;height: 20px;background-color: lightblue" /></div>
                        <input type="text" class="form-control" placeholder="电话">
                    </div>
                    <label>电话</label>
                    <div style="height: 8px"></div>

                    <textarea class="form-control" rows="6" placeholder="您的问题"></textarea>
                    <div style="height: 30px"></div>



                    <button type="button" style="float: right" class="btn btn-default" onclick="send_question(this)">发送</button>

                    <div style="clear: both"></div>
                </form>
            </div>
        </div>
    </div>
</div>