<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body">
    <div class="top-heading">
        <h1>Manage Package</h1>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Package
            <ul class="top-right-btn-list">
                <li>
                    <a href="add-package.php" type="button" class="btn btn-primary float-right">Add Package</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="packageData">
                    <thead>
                        <tr>
                            <th>Package Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>MRP Price</th>
                            <th>Discounted Price</th>
                            <th>Services</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>


<!-- The Modal -->
<!-- <div class="modal" id="addPackageModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="addPackageForm">
                <div class="modal-header">
                    <h4 class="modal-title">Add Package</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Package Name</label>
                                <input type="text" class="form-control" name="package_name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="">Select</option>
                                    <option value="ladies">Ladies</option>
                                    <option value="gents">Gents</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" cols="5" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>MRP Price</label>
                                <input type="text" class="form-control" name="mrp_price" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Discounted Price</label>
                                <input type="text" class="form-control" name="discounted_price" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#servicesModal" type="button">Select Services</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<!-- The Modal -->
<div class="modal" id="servicesModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="addPackageForm">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Select Services</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body services-page">
                    <div id="salonServices">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php') ?>

<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
            const allPackage = function() {
                $.ajax({
                    url: `${base_url}/salon/packages/list-package.php`,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token
                    },
                    success: function(result) {
                        console.log(result.result[0].services);
                        // console.log(result.result[0].services);
                        let tr = '';
                        let serviceList = '';
                        let i = 0;
                        $.each(result.result, function(key, value) {
                            tr += `<tr>
                          <td> ${value.package_name} <span class="service-id d-none">${value.id}</span></td>
                          <td> ${value.description} </td>
                          <td> ${value.category} </td>
                          <td> ${value.mrp_price} </td>
                          <td> ${value.discounted_price} </td>
                          <td id="serviceList"><ul></ul></td>
                          <td class="text-center">
                          <ul class="action-list">
                          <li><a href="edit-package.php?id=${value.id}"><i class="fa fa-pencil"></i></a></li>
                          <li class="remove-package"><i class="fa fa-trash"></i></li>
                          </ul>
                          </td></tr>`;
                        });
                        $(".table-loading-wrap").addClass('display-none');
                        $('#packageData tbody').append(tr);

                        for (let i = 0; i < result.result.length; i++) {
                            $.each(result.result[i].services, function(key, value) {
                                serviceList += `<li>${value.name}</li>`;
                            });
                        }
                        $('#serviceList ul').append(serviceList);

                    }
                });
            }
            allPackage();

            $('body').on('click', '.remove-package', function() {
                var status = confirm("Are you sure you want to delete ?");
                if (status == true) {
                    var package_id = $(this).parents('tr').find('td span.service-id').text();
                    let removePackage = {
                        'token': token,
                        'package_id': package_id,
                    }
                    $.ajax({
                        url: base_url + '/salon/packages/delete-package.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(removePackage),
                        success: function(response) {
                            debugger;
                            $.toast({
                                heading: 'Success',
                                text: response.message,
                                showHideTransition: 'slide',
                                icon: 'success',
                                bgColor: '#179756',
                            });
                            $('#packageData tbody').html('');
                            allPackage();
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });


            // $('body').on('click', '.edit-package', function() {
            //     $('#editPackageModal').modal('show');
            //     groupId = $(this).parents('tr').find('td span.group-id').text();
            //     $('#editPackageModal [name=name]').val($(this).parents('tr').find('.groupName').text());
            //     $('#editPackageModal [name=description]').val($(this).parents('tr').find('.groupDes').text());
            // });

            // $('#editPackageForm').validate({
            //     rules: {
            //         name: 'required',
            //         description: 'required',
            //     },
            //     submitHandler: function(form) {
            //         editPackageInfoSubmit();
            //     }
            // });

            // const editPackageInfoSubmit = function() {
            //     let post_data = {
            //         "token": token,
            //         "group_id": groupId,
            //         "name": $('#editPackageModal [name=name]').val(),
            //         "description": $('#editPackageModal [name=description]').val(),
            //     }
            //     editPackageAjex(post_data);
            // }

            // const editPackageAjex = function(post_data) {
            //     $.ajax({
            //         url: base_url + '/salon/packages/update-package.php',
            //         type: 'POST',
            //         dataType: 'JSON',
            //         data: JSON.stringify(post_data),
            //         success: function(result) {
            //             $.toast({
            //                 heading: 'Success',
            //                 text: result.message,
            //                 showHideTransition: 'slide',
            //                 icon: 'success',
            //                 bgColor: '#179756',
            //             });
            //             $('#packageData tbody').html('');
            //             $('#addPackageModal').modal('hide');
            //             allPackage();
            //         },
            //         error: function(error) {
            //             $.toast({
            //                 heading: 'Error',
            //                 text: error.responseJSON.message,
            //                 showHideTransition: 'slide',
            //                 icon: 'error',
            //             });
            //         }
            //     });
            // }

        } else {
            window.location.replace('index.php');
        }
    });
</script>