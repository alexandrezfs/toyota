$(document).ready(function () {

    if($("#my-dropzone").length > 0) {

        var myDropzone = new Dropzone("div#my-dropzone", { url: "/admin/upload"});


        Dropzone.options.myDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 200, // MB
            acceptedFiles: "image/*",
            addRemoveLinks: true
        };

        myDropzone.on('sending', function(file, xhr, formData) {

            // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
            formData.append("_token", $('#token').val()); // Laravel expect the token post value to be named _token by default
        });

        myDropzone.on('success', function(file, response) {
            console.log(response);
        });

    }

});