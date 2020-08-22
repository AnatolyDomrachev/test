
function ftc(fname, id)
{
        console.log('fname');
        console.log(fname);
	fetch(fname)
    .then(function (response) {
        switch (response.status) {
            // status "OK"
            case 200:
                return response.text();
            // status "Not Found"
            case 404:
                throw response;
        }
    })
    .then(function (template) {
        console.log(template);
	document.getElementById(id).innerHTML=template; 
    })
    .catch(function (response) {
        // "Not Found"
        console.log(response.statusText);
    });
}


