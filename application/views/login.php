<body>
    <div data-role="content">
        <form class="form-horizontal" role="form" action="/api" method="Post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">学号</label>
                <div class="col-sm-5">
                    <input type="txt" class="form-control"  name= 'username' placeholder="请输入您的学号">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control"  name='password' placeholder="请输入您的密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住密码
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-12">
                    <button type="submit" class="btn btn-success">登入</button>
                </div>
            </div>
        </form>
    </div>

</body>