  function darkFunction() {
    const element = document.body;
    element.classList.toggle("dark-mode");
    // Đổi ảnh marquee chỉ khi bật dark-mode
    const imageReturn = document.querySelector(".return img");
    const imagePayment = document.querySelector(".payment img");
    const imageGuarantee = document.querySelector(".guarantee img");
    const imageDelivery = document.querySelector(".delivery img");
  }

