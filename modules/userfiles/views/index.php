<div class="col-md-4 col-md-offset-4">
    <form name="upload" id="uploads" class="mt20">
        <div class="form-group">
            <input type="file" name="myfile"/>
            <input type="submit" value="Upload" class="mt10"/> 
        </div>
    </form>
    <div id="log">Progress bar</div>
</div>
<div class="col-md-12">
    <ul class="files-list">
        
    </ul>
</div>
<script>
    function log(html) {
        document.getElementById('log').innerHTML = html;
    }
    document.forms.upload.onsubmit = function() {
        var file = this.elements.myfile.files[0];
        if (file) {
            upload(file);
        }
        return false;
    }
    function upload(file) {
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'json';
        xhr.onload = function(msg) {
            if (this.status == 200) {
                log("Success");
            } else {
                log("error " + this.status);
            }
        };
        xhr.onerror = function(msg) {
            console.log('ERROR');
            console.log(msg.currentTarget.response);
        };
        xhr.upload.onprogress = function(event) {
            log(event.loaded + ' / ' + event.total);
        }
        var formData = new FormData();
        formData.append("myfile", file);
        console.log(file);
        xhr.open("POST", "/upload", true);
        xhr.send(formData);
    }
</script>