document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Gửi dữ liệu đăng nhập đến server
        var formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                // Nếu đăng nhập thành công, chuyển hướng đến trang home.html
                window.location.href = "../html/home.html";
            } else {
                // Nếu có lỗi, hiển thị thông báo từ server
                alert(data);
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
