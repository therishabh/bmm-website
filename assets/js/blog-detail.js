// -----------------------POST DETAIL START HERE ----------------------------------------
    const __url = $("#base_url").val();
    let post_id = $('#post_id').val(); // get post-id from url [query params]
    let get_value_params_name = function () {
        let post_data = {
            post_id: post_id
        }
        $.ajax({
            url: base_url + "user/blog/post-detail.php",
            type: "GET",
            data: post_data,
            dataType: "JSON",
            success: function (result) {
                $(".blog-post-box-detail h2").text(result.heading);
                $(".blog-post-box-detail .blog-post-box-detail-body").html(result.description);
                $(".blog-post-box-detail .blog-category").html('<a href = "">' + result.category.name + '</a>');
                if (result.tags.length > 0) {
                    result.tags.forEach(function (val, key) {
                        let tag = `<li class = "d-inline-block mr-2">
                                <a href = "#" class = "badge-primary p-2">${val.name}</a>
                            </li>`;
                        $(".blog-post-box-detail .blog-tags ul").append(tag);
                    })
                }
            }
        });
    };
    get_value_params_name();
    // -----------------------POST DETAIL ENDS HERE ----------------------------------------
    
    function onCategoryClick(id,name){
            location.href=`${__url}blog/${id}/${name}`;
        };

    // ------------------------CATEGORIES STARTS HERE------------------------------------------------- 
    let get_category_list = function() {
            $.ajax({
                url: base_url + "user/blog/category-list.php",
                type: "GET",
                dataType: "JSON",
                success: function(result) {
                    let data = "";
                    result.result.forEach(function(val) {
                        data = '<li onClick="onCategoryClick('+val.id+','+"'"+val.name+"'"+')" > ';
                        data += '<a class="social-links">'+val.name+'</a>';
                        data += '</li>';
                        $("#categories-list ul").append(data);
                    });
                    
                }
            });
        };
    get_category_list();
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
    get_recentpost_list();
    //--------------------------RECENT POST ENDS HERE---------------------------------------------


