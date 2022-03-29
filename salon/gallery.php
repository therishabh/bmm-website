<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="services-page">
    <div class="top-heading">
        <h1>Gallery</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Gallery
        </div>
        <div class="card-body">
            <form method='post' action='' enctype="multipart/form-data">
                <input type="file" id="fileInput" multiple>
                <button type="button" class="btn btn-primary float-right" id="uploadPhotos">Upload Photos</button>
            </form>
            <div class="clearfix"></div>
            <div class="row mt-4" id="imageData">
            </div>
        </div>

        <div class="loading-wrapper">
            <img src="./includes/img/loader.gif" alt="loading">
        </div>

</section>
<?php include('footer.php') ?>

<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {

            let getGalleryInfo = function(){
                $.ajax({
                url: base_url + '/salon/get-gallery-image-list.php',
                type: 'GET',
                data: {
                    token: token
                },
                dataType: 'JSON',
                success: function(result) {
                    var srcValue = '';
                    $.each(result.result, function(key, value) {
                        srcValue += `<div class="col-md-3">
                           <div class="upload-img-box">
                               <img src="${value.url}" class="img-thumbnail" data-action="zoom" id="${value.id}" />
                               <span><i class="fa fa-trash"></i></span>
                            </div>
                     </div>`
                    });
                    $('#imageData').append(srcValue);
                    $(".loading-wrapper").hide();
                }
            });
            }
            getGalleryInfo();

            $('body').on('click', '.upload-img-box span', function() {
                var status = confirm("Are you sure to delete it?");
                if (status == true) {
                    var imageId = $(this).parents('.upload-img-box').find('img').attr('id');
                    let deleteFile = {
                        'token': token,
                        'image_id': imageId,
                    }
                    $.ajax({
                        url: base_url + '/salon/delete-gallery-image.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(deleteFile),
                        success: function(response) {
                            $.toast({
                                heading: 'Success',
                                text: response.message,
                                showHideTransition: 'slide',
                                icon: 'success',
                                bgColor: '#179756',
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        },
                        error: function(error) {
                            $.toast({
                                heading: 'Error',
                                text: error.responseJSON.message,
                                showHideTransition: 'slide',
                                icon: 'error',
                            });
                        }
                    });
                }
            });

         

            $('#uploadPhotos').click(function() {
                var fd = new FormData();

                fd.append('token', token);
                var totalFiles = document.getElementById('fileInput').files.length;
                if (!totalFiles == ''){
                    for (var i = 0; i < totalFiles; i++) {
                    fd.append('files[]', document.getElementById('fileInput').files[i]);
                }
                $.ajax({
                    url: base_url + '/salon/upload-gallery-image.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $.toast({
                                heading: 'Success',
                                text: response.message,
                                showHideTransition: 'slide',
                                icon: 'success',
                                bgColor: '#179756',
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } else {
                            $.toast({
                                heading: 'Error',
                                text: error.responseJSON.message,
                                showHideTransition: 'slide',
                                icon: 'error',
                            });
                        }
                    },
                });
                }
                else{
                    alert('Please select a file.');
                }
                
            });

        } else {
            window.location.replace('index.php');
        }

    });
</script>