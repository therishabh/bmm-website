<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="services-page">
    <div class="top-heading">
        <h1>Documents</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Salon Documents
        </div>
        <div class="card-body">
            <table class="table table-bordered documents-table">
                <thead>
                    <tr>
                        <th>Document Name</th>
                        <th>Document Type</th>
                        <th>Document</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="document-name">GST Certificate</td>
                        <td class="document-type">GST Certificate</td>
                        <td><input type="file" class="" name="document" /></td>
                        <td><button type="button" class="btn btn-primary uploadDocumentForm">Upload</button></td>
                    </tr>
                    <tr>
                        <td class="document-name">Certificate of Incorporation</td>
                        <td class="document-type">Certificate of Incorporation</td>
                        <td><input type="file" class="" name="document" /></td>
                        <td><button type="button" class="btn btn-primary uploadDocumentForm">Upload</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Contact Person Documents
        </div>
        <div class="card-body">
            <table class="table table-bordered documents-table">
                <thead>
                    <tr>
                        <th>Document Name</th>
                        <th>Document Type</th>
                        <th>Document</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="document-name">
                            <select name="document-name-select" class="form-control">
                                <option value="ID Proof">ID Proof</option>
                                <option value="Address Proof">Address Proof</option>
                            </select>
                        </td>
                        <td class="document-type">
                            <select name="document-type-select" class="form-control">
                                <option value="Aadhar Card">Aadhar Card</option>
                                <option value="Pan Card">Pan Card</option>
                                <option value="Driving License">Driving License</option>
                                <option value="Voter ID Card">Voter ID Card</option>
                                <option value="Passport">Passport</option>
                            </select>
                        </td>
                        <td><input type="file" class="" name="document" /></td>
                        <td><button type="button" class="btn btn-primary uploadPersonalDocumentForm">Upload</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Documents List
        </div>
        <div class="card-body">
            <table class="table table-bordered documents-table" id="documentData">
                <thead>
                    <tr>
                        <th>Document Name</th>
                        <th>Document Type</th>
                        <th>Document</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <div class="loading-wrapper">
                <img src="./includes/img/loader.gif" alt="loading">
            </div>
        </div>
    </div>



</section>
<?php include('footer.php') ?>

<script>
    $(function() {

        const token = localStorage.getItem("salonToken");
        if (token) {

            let getDocumentInfo = function() {
                $.ajax({
                    url: base_url + '/salon/get-document-info.php',
                    type: 'GET',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function(result) {
                        var trHTML = '';
                        $.each(result.result, function(key, value) {
                            trHTML +=
                                '<tr><td>' + value.document_name +
                                '</td><td>' + value.document_type +
                                '</td><td>' + `<a href="${value.url}" class="btn btn-primary" download target="_blank" >Download</a>` +
                                '</td></tr>';
                        });
                        $('#documentData tbody').append(trHTML);
                        $(".loading-wrapper").hide();
                    }
                });
            }
            getDocumentInfo();

            $('.uploadDocumentForm').click(function() {
                var fd = new FormData();
                var files = $(this).parents('tr').find('[name=document]')[0].files;
                var document_name = $(this).parents('tr').find('.document-name').text();
                var document_type = $(this).parents('tr').find('.document-type').text();

                if (files.length > 0) {
                    fd.append('token', token);
                    fd.append('document', files[0]);
                    fd.append('document_name', document_name);
                    fd.append('document_type', document_type);

                    $.ajax({
                        url: base_url + '/salon/upload-document.php',
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
                } else {
                    alert("Please select a file.");
                }
            });

            $('.uploadPersonalDocumentForm').click(function() {
                var fd = new FormData();
                var files = $(this).parents('tr').find('[name=document]')[0].files;
                var document_name = $(this).parents('tr').find('.document-name').find('[name=document-name-select] option:selected').val();
                var document_type = $(this).parents('tr').find('.document-type').find('[name=document-type-select] option:selected').val();

                if (files.length > 0) {
                    fd.append('token', token);
                    fd.append('document', files[0]);
                    fd.append('document_name', document_name);
                    fd.append('document_type', document_type);

                    $.ajax({
                        url: base_url + '/salon/upload-document.php',
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
                } else {
                    alert("Please select a file.");
                }
            });
        } else {
            window.location.replace('index.php');
        }
    });
</script>