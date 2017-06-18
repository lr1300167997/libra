<!--创建权限组-->
<div class="modal inmodal fade" id="addgroup" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <span class="font-bold">创建权限组</span>
            </div>
            <form action="{{ url('back/role/addgroup') }}" method="post" id="addform" class="form-horizontal" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 control-label">权限组名称 *</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" value="{{ old('role_name') }}" name="role_name" id="role_name" required placeholder="如：技术部" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label">权限组描述</label>
                        <div class="col-lg-4">
                            <textarea type="text" class="form-control" rows="3" value="{{ old('role_description') }}" name="role_description" id="role_description" placeholder="如：技术组下面有前端/UI等角色"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-sm btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("document").ready(function(){
        $("#addform").validate({
            errorElement : "small",
            errorClass : "error",
        });
    });
</script>
