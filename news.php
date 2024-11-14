<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/root.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/aboutus.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/news.css?v=<?php echo time(); ?>" />
</head>

<body>
    <?php include 'shared/header.php'; ?>
    <div class="about-us">
        <section class="background-img">
            <div class="opacity"></div>
            <div class="overlay">
                <h1>TIN TỨC</h1>
            </div>
        </section>
        <section style="padding: 60px 20px 60px 20px;">
            <div class="max-width">
                <div class="share-thought-card d-flex">
                    <div class="card flex-column">
                        <img src="assets/images/domain.jpg" class="card-img-top" alt="card-cover">
                        <div class="card-body">
                            <h3 class="card-text">Các loại email doanh nghiệp phổ biến hiện nay</h3>
                            <div class="date"><span>28 March, 2022</span></div>
                            <p>Việc sử dụng email doanh nghiệp vốn không mấy xa lạ trong thời hiện đại. Bởi bên cạnh sự tiện lợi, email doanh</p>
                        </div>
                        <a href="#" class="more">Xem chi tiết</a>
                    </div>
                    <div class="card flex-column">
                        <img src="assets/images/it_service.jpg" class="card-img-top" alt="card-cover">
                        <div class="card-body">
                            <h3 class="card-text">Phân Biệt Dịch Vụ IT Helpdesk, IT Support, IT Outsourcing</h3>
                            <div class="date"><span>17 March, 2022</span></div>
                            <p>Dịch vụ IT Helpdesk là gì? IT HelpDesk là người xử lý các sự cố liên quan đến máy tính, máy in hoặc hệ thống</p>
                        </div>
                    </div>
                    <div class="card flex-column">
                        <img src="assets/images/tong_dai.jpg" class="card-img-top" alt="card-cover">
                        <div class="card-body">
                            <h3 class="card-text">Dich vụ IT chuyên nghiệp</h3>
                            <div class="date"><span>17 March, 2022</span></div>
                            <p>Cách chọn dịch vụ IT chuyên nghiệp Lựa chọn dịch vụ CNTT phù hợp là điều cần thiết để thành công trong kinh doanh, vì</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'shared/footer.php'; ?>
    <div id="video-container">
        <div class="video-wrapper ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?si=eftZaf3DPLpZf3TL?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>