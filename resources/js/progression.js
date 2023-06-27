var notificationForm = document.getElementById("notificationForm");
var notificationContent = document.getElementById("notificationContent");

fetch('your_database_endpoint')
  .then(response => response.json())
  .then(data => {
    // Xử lý dữ liệu nhận được từ cơ sở dữ liệu
    // Ví dụ: Hiển thị dữ liệu trong form thông báo
    data.forEach(item => {
      var itemContent = document.createElement('p');
      itemContent.textContent = item; // Thay đổi dựa trên cấu trúc dữ liệu của bạn
      notificationContent.appendChild(itemContent);
    });
  })
  .catch(error => {
    console.error('Lỗi:', error);
  });
