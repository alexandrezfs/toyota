var uploaded_images = [];

$(document).ready(function () {

    if($("#my-dropzone").length > 0) {

        var myDropzone = new Dropzone("div#my-dropzone", { url: "/admin/upload"});

        Dropzone.options.myDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 200, // MB
            acceptedFiles: "image/*",
            previewTemplate : '<div style="display:none"></div>'
        };

        myDropzone.on('sending', function(file, xhr, formData) {

            // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
            formData.append("_token", $('#token').val()); // Laravel expect the token post value to be named _token by default
        });

        myDropzone.on('success', function(file, response) {

            var images = JSON.parse($("#images").val());
            uploaded_images = images;
            images.push(response);
            $("#images").val(JSON.stringify(images));

            var image = JSON.parse(response);
            $("#images-uploaded").append("<div class='image-uploaded-unit'><img src='" + image.uri + "'><button onclick='deleteImage(\"" + image.uri + "\")'>Supprimer</button></div>");

        });

        uploaded_images = JSON.parse($("#images").val());
        reloadImagesFromArray();

    }

});

function deleteImage(uri) {

    var index_to_delete;

    console.log(uploaded_images);

    for(var key in uploaded_images) {

        var uploaded_image = JSON.parse(uploaded_images[key]);

        if(uploaded_image.uri == uri) {
            index_to_delete = key;
        }
    }

    uploaded_images.splice(index_to_delete, 1);

    reloadImagesFromArray();
    reloadInputHidden();

    return false;
}

function reloadInputHidden() {

    $("#images").val(JSON.stringify(uploaded_images));
}

function reloadImagesFromArray() {

    $("#images-uploaded").html("");

    for(var key in uploaded_images) {

        var uploaded_image = JSON.parse(uploaded_images[key]);

        $("#images-uploaded").append("<div class='image-uploaded-unit'><img src='" + uploaded_image.uri + "'><button onclick='deleteImage(\"" + uploaded_image.uri + "\")'>Supprimer</button></div>");
    }
}