/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


const __url = $("#base_url").val();
var page_no = "1";
var page_count = "10";
var category_id = $('#blog_category').val();
let total_pages = "";
var category_name = $('#blog_category_name').val();

let get_post_listing = function () {
    let paramsData = {
        page_no: page_no,
        page_count: page_count,
        category_id: category_id,
    }

    $.ajax({
        url: base_url + "user/blog/post-list.php",
        type: "GET",
        data: paramsData,
        dataType: "JSON",
        success: function (result) {
            let data = "";
            result.result.forEach(function (val) {
                data += `<div class="col-md-6">
                            <div class="blog-item">
                                <img src="${val.image.name}" class="img-fluid">
                                <div class="blog-body">
                                <a href="${__url}detail-post/${val.id}">
                                <h4>${val.heading}</h4>
                                </a>
                                <span class="blog-category">${val.category.name}</span>
                                </div>
                            </div>
                        </div>`;
            });
            $("#post-list").html(data);

            // PAGINATION
            let paginationLi = `<li class="page-item pagination-previous-btn"><a class="page-link">Previous</a></li>`
            total_pages = Math.ceil(result.total / page_count);
            for (var i = 1; i <= total_pages; i++) {
                if (i == page_no) {
                    paginationLi += `<li class="page-item pagination-page-no active" data_id="${i}"><a class="page-link">${i}</a></li>`
                } else {
                    paginationLi += `<li class="page-item pagination-page-no" data_id="${i}"><a class="page-link">${i}</a></li>`
                }
            }
            paginationLi += `<li class="page-item pagination-next-btn"><a class="page-link " >Next</a></li>`

            $("#blog_listing_pagination").html(paginationLi);
            if (total_pages == page_no) {
                $(".pagination-next-btn").hide();
            }

            if (page_no == 1) {
                $(".pagination-previous-btn").hide();
            }
            if (category_id != '') {
                $("#blog-filter").removeClass('d-none');
                $("#blog-filter li span").html(category_name);
            }
        }
    });
}


$("#blog_listing_pagination").on('click', '.pagination-page-no', function () {
    page_no = $(this).attr('data_id');
    get_post_listing();
})

$("#blog_listing_pagination").on('click', '.pagination-next-btn', function () {
    page_no = parseInt(page_no) + 1;
    get_post_listing();

})
$("#blog_listing_pagination").on('click', '.pagination-previous-btn', function () {
    page_no = parseInt(page_no) - 1;
    get_post_listing();

})



function onCategoryClick(id, name) {
//    category_id = id;
//    page_no = "1";
//    get_post_listing();
    location.href=`${__url}blog/${id}/${name}`;
}
;

function removeFilter() {
//    $("#blog-filter").addClass('d-none');
//    $("#blog-filter li span").html('');
//    category_id = '';
//    page_no = "1";
    location.href=`${__url}blog`;
    
}

// ------------------------CATEGORIES STARTS HERE------------------------------------------------- 
let get_category_list = function () {
    $.ajax({
        url: base_url + "user/blog/category-list.php",
        type: "GET",
        dataType: "JSON",
        success: function (result) {
            let data = "";
            result.result.forEach(function (val) {
                data = '<li onClick="onCategoryClick(' + val.id + ',' + "'" + val.name + "'" + ')" > ';
                data += '<a class="social-links">' + val.name + '</a>';
                data += '</li>';
                $("#categories-list ul").append(data);
            });

        }
    });
};

// ------------------------CATEGORIES ENDS HERE------------------------------------------------- 



//--------------------------RECENT POST STARTS HERE---------------------------------------------
let get_recentpost_list = function () {
    $.ajax({
        url: base_url + "user/blog/recent-post.php",
        type: "GET",
        dataType: "JSON",
        success: function (result) {
            let data = "";
            result.result.forEach(function (val) {
                data += `<li>
                            <a href="${__url}detail-post/${val.id}" class="social-links">${val.heading}</a>
                        </li>`;
            });
            $("#recent-post ul").html(data);
        }
    });
};

//--------------------------RECENT POST ENDS HERE---------------------------------------------
get_category_list();
get_recentpost_list();
get_post_listing();
   