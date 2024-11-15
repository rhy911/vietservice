<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/root.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/aboutus.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/service.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/contact.css?v=<?php echo time(); ?>" />
</head>

<body>
    <?php include 'shared/header.php'; ?>
    <div class="body">
        <section class="background-img">
            <div class="opacity"></div>
            <div class="overlay">
                <h1>Liên hệ</h1>
            </div>
        </section>
        <section class="content">
            <div class="max-width">
                <div class="text-content">
                    <h2>Điền vào biểu mẫu để cung cấp cho bạn thêm thông tin!</h2>
                    <p>Bạn cần tư vấn hoặc gặp bất kỳ vấn đề gì về CNTT, đều có thể liên hệ với chúng tôi, hoàn toàn miễn phí. Chúng tôi luôn chào đón bạn, bạn chỉ cần điền vào mẫu đơn để liên hệ với bạn.</p>
                    <h3>Tải xuống danh mục dịch vụ của chúng tôi</h3>
                    <button class="download-btn btn btn-primary">TÀI LIỆU</button>
                </div>
                <div class="contact-section">
                    <h2>Liên hệ với chúng tôi</h2>
                    <div class="contact-container">
                        <div class="contact-form">
                            <form action="#">
                                <div class="input-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" id="name" placeholder="Nhập họ và tên">
                                </div>

                                <div class="input-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" placeholder="Nhập E-mail">
                                </div>

                                <div class="input-group">
                                    <label for="phone">Điện thoại</label>
                                    <input type="tel" id="phone" placeholder="Nhập số điện thoại">
                                </div>

                                <div class="input-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" id="address" placeholder="Nhập địa chỉ">
                                </div>

                                <div class="input-group-full">
                                    <label for="message">Nội dung tin nhắn</label>
                                    <textarea id="message" rows="4" placeholder="Nhập nội dung tin nhắn"></textarea>
                                </div>

                                <p>Bạn biết chúng tôi qua:</p>
                                <div class="checkbox-group">
                                    <label><input type="checkbox"> Facebook</label>
                                    <label><input type="checkbox"> LinkedIn</label>
                                    <label><input type="checkbox"> Twitter</label>
                                    <label><input type="checkbox"> Instagram</label>
                                    <label><input type="checkbox"> Email</label>
                                    <label><input type="checkbox"> Khác</label>
                                </div>

                                <button type="submit" class="submit-btn">Gửi Liên Hệ</button>
                            </form>
                        </div>
                        <div class="contact-call">
                            <div class="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6341769012674!2d105.84006867603016!3d21.007296380636724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac71294bf0ab%3A0xc7e2d20e5e04a9da!2sHanoi%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2s!4v1731670684302!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>