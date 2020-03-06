
    <div id="image">
        <img width="100%" height="100%" id="preview_image" src="{{ $user->image_url}}"/>
        <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div>
    <p>
        <a href="javascript:changeProfile()" style="text-decoration: none;">
            <i class="fa fa-edit"></i> Change
        </a>&nbsp;&nbsp;
        <a href="javascript:removeFile()" style="color: red;text-decoration: none;">
            <i class="fa fa-trash"></i>
            Remove
        </a>
    </p>
    <input type="file" id="file" style="display: none"/>
    <input type="hidden" id="file_name"/>
