// Click "-"
function Decrease() {
    var count = parseInt(document.getElementById("count").innerHTML);
    if (count > 0) {
      count--;
      document.getElementById("count").innerHTML = count;
    }
  }
  //Click "+"
  function Increase() {
    var count = parseInt(document.getElementById("count").innerHTML);
    count++;
    document.getElementById("count").innerHTML = count;
  }
  // Click "-"
  function Decrease1() {
    var count = parseInt(document.getElementById("count1").innerHTML);
    if (count > 0) {
      count--;
      document.getElementById("count1").innerHTML = count;
    }
  }
  //Click "+"
  function Increase1() {
    var count = parseInt(document.getElementById("count1").innerHTML);
    count++;
    document.getElementById("count1").innerHTML = count;
  }
  // Click "-"
  function Decrease2() {
    var count = parseInt(document.getElementById("count2").innerHTML);
    if (count > 0) {
      count--;
      document.getElementById("count2").innerHTML = count;
    }
  }
  //Click "+"
  function Increase2() {
    var count = parseInt(document.getElementById("count2").innerHTML);
    count++;
    document.getElementById("count2").innerHTML = count;
  }
  // Click "-"
  function Decrease3() {
    var count = parseInt(document.getElementById("count3").innerHTML);
    if (count > 0) {
      count--;
      document.getElementById("count3").innerHTML = count;
    }
  }
  //Click "+"
  function Increase3() {
    var count = parseInt(document.getElementById("count3").innerHTML);
    count++;
    document.getElementById("count3").innerHTML = count;
  }
  
  function toggleCheckboxes() {
    var checkboxes = document.querySelectorAll(
      '.product-detail input[type="checkbox"]'
    );
    var masterCheckbox = document.getElementById("checkAll");
  
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = masterCheckbox.checked;
    }
  }
  
  function darkFunction() {
    const element = document.body;
    element.classList.toggle("dark-mode");
    // Đổi ảnh marquee chỉ khi bật dark-mode
    const imageReturn = document.querySelector(".return img");
    const imagePayment = document.querySelector(".payment img");
    const imageGuarantee = document.querySelector(".guarantee img");
    const imageDelivery = document.querySelector(".delivery img");
  }

 
