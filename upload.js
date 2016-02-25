var _submit = document.getElementById('_submit'), 
_file = document.getElementById('_file'), 
_progress = document.getElementById('_progress');

var upload = function(){

    if(_file.files.length === 0){
        return;
    }

    var data = new FormData();
    data.append('SelectedFile', _file.files[0]);
	alert("ok");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4){
            try {
                var resp = JSON.parse(request.response);
				alert(resp);
            } catch (e){
                var resp = {
                    status: 'error',
                    data: 'Unknown error occurred: [' + request.responseText + ']'
                };
            }
            console.log(resp.status + ': ' + resp.data);
        }
    };

    request.upload.addEventListener('progress', function(e){
        _progress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
<<<<<<< HEAD
        
=======
       // document.getElementById('pbar').innerHTML=Math.ceil(e.loaded/e.total) * 100 + '%';
>>>>>>> c456fed363836c14f76f0e0049f2cf68f5b102cd
    }, false);

    request.open('POST', 'upload.php');
    request.send(data);
}

_submit.addEventListener('click', upload);
