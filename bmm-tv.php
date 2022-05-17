

<section class="inner-header">
    <img src="assets/images/tv-banner.jpg" class="img-fluid" alt="">
</section>

<div class="container">
</div>

<div id="bmm-tv-page">

</div>
<!-- <section class="bmm-tv-playlist-section">
    <div class="container">
        <h3>Haircare</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="bmm-tv-box">
                    <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid" alt="">
                    <h5>Beauty Hacks with Neha Dhupia - Two Toned Liner</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bmm-tv-box">
                    <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid" alt="">
                    <h5>Beauty Hacks with Neha Dhupia - Two Toned Liner</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bmm-tv-box">
                    <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid" alt="">
                    <h5>Beauty Hacks with Neha Dhupia - Two Toned Liner</h5>
                </div>
            </div>
        </div>
    </div>
</section> -->


<script>
    $(function() {
        let get_post_listing = function() {
            $.ajax({
                url: base_url + "user/bmm-tv/listing.php",
                type: "GET",
                dataType: "JSON",
                success: function(result) {
                    var categoryObj = {}

                    var data = '';
                    result.result.forEach(function(val) {
                        if (!categoryObj[val.category.name]) {
                            categoryObj[val.category.name] = {
                                categoryName: val.category.name,
                                videos: []
                            }
                        }
                        var urlArr = val.video_url.split('/')
                        let videoEmbbedCode = urlArr[urlArr.length - 1];
                        categoryObj[val.category.name].videos.push({
                            heading: val.heading,
                            video_url: `https://www.youtube.com/embed/${videoEmbbedCode}`
                        });
                    });
                    let finalCategory = Object.values(categoryObj);
                    finalCategory.forEach(val => {
                        data = `<section class="bmm-tv-playlist-section">
                                <div class="container">
                                    <h3>${val.categoryName}</h3>
                                    <div class="row">
                                        ${val.videos.map(video => {
                                            return `<div class="col-md-4 mb-4">
                                                <div class="bmm-tv-box">
                                                    <iframe
                                                    src="${video.video_url}" style="width: 350px; height: 200px;">
                                                    </iframe>
                                                   
                                                    <h5>${video.heading}</h5>
                                                </div>
                                            </div>`
                                        }).join('')}
                                    </div>
                                </div>
                            </section>`;
                        $("#bmm-tv-page").append(data);
                    })
                }
            });
        }
        get_post_listing();
    });
</script>