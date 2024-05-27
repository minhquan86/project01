const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
};
const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
  document.body.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);





const header = document.querySelector("[data-header]");
console.log("🚀 ~ header:", header)
const backTopBtn = document.querySelector("[data-back-top-btn]");

const showElemOnScroll = function () {
  if (window.scrollY > 100) {
    console.log(1111111111111);
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", showElemOnScroll);


// giỏ hàng
const data = [
  {
    id: 1,
    name: "Áo Sơ Mi Dài Tay ",
    price: "350,000",
    image:
      "https://product.hstatic.net/200000053174/product/5_101038bcb1774c998a734780cf596a28_master.jpg",
    title: "Hoa tuoi",
  },
  {
    id: 2,
    name: " Áo Sơ Mi Basic",
    price: "450,000",
    image:
      "https://product.hstatic.net/200000053174/product/5_7cea344525ca40a9a05d87ed01e2764e_master.png",
    title: "Hoa tuoi",
    category: "hot",
  
  }, 
  {
    id: 3,
    name: "Áo Sơ Mi Cộc",
    price: "310,000",
    image:
      "https://product.hstatic.net/200000053174/product/4_b7e4762809ec4cceaee6a8b1a2dbdd55_master.jpg",
    title: "Hoa tuoi",
    category: "hot",

  },
  {
    id: 4,
    name: "Áo Sơ Mi Basic",
    price: "350,000",
    image: "https://product.hstatic.net/200000053174/product/6_ff3d6d674693479b8c05e430d240eb2b_master.png",
    title: "Hoa tuoi",
    category: "hot",
  },
  {
    id: 5,
    name: "Áo Sơ Mi Xanh",
    price: "650,000",
    image:
      "https://product.hstatic.net/200000053174/product/5smdh007ghs_-_flatplay__1__0bded793d1f84d2492d0d5723ed5950f_master.jpg",
    title: "Hoa tuoi",
    category: "hot",

  },
  {
    id: 6,
    name: "Áo Sơ Mi Trắng",
    price: "350,000",
    image:
      "https://product.hstatic.net/200000053174/product/7_f937f00e061642ad9da6529cebdf9eea_master.jpg",
    title: "Hoa tuoi",
    category: "new",

  },
  {
    id: 7,
    name: "Áo Sơ Mi Trắng Cộc",
    price: "550,000",
    image:
      "https://product.hstatic.net/200000053174/product/15_c6a4748f6931460281d6785f4d64f82a_master.jpg",
    title: "Hoa tuoi",
    category: "new",

  },
  {
    id: 8,
    name: "Áo Sơ Mi Xanh Than",
    price: "250,000",
    image: "https://product.hstatic.net/200000053174/product/47_4138ba371489494baa3eb2f75464f27a_master.jpg",
    title: "Hoa tuoi",
    category: "new",
  },
// do the thao
  {
    id: 11,
    name: "Áo Polo Thể Thao ",
    price: "150,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_bf3fa3d86d3b4f9a99d0280ba0d84366_master.jpg",
    title: "Hoa Sap",

  },
  {
    id: 12,
    name: "Áo Polo Bền Màu",
    price: "200,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_fd326052c04f49f9a3e352ee2ac0874d_master.jpg",
    title: "Hoa Sap",
  },
  {
    id: 13,
    name: "Áo Thun Đen",
    price: "700,000",
    image:
      "https://product.hstatic.net/200000053174/product/2_2e7c685d28b54d188d2a2a2fb6f6b344_master.jpg",
    title: "Hoa Sap",
  },
  {
    id: 14,
    name: "Áo Thun Trắng",
    price: "800,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_d0cd2e7731a0463f9b1e3d94943ee91f_master_f695926caf6d437ba7fbb5d231479bc7_master.jpg",
    title: "Hoa Sap",
  },
  // do he

  {
    id: 21,
    name: "Áo Polo Vải",
    price: "300,000",
    image: "https://product.hstatic.net/200000053174/product/3_31f8e18b0b75441f92dea7b557513cb5_master.jpg",
    title: "Hoa Gio",
  },
  {
    id: 22,
    name: "Áo Polo Vải Bền Màu",
    price: "550,000",
    image:
      "https://product.hstatic.net/200000053174/product/4_1bddcf15f32b434cb4f96b1af425f168_master.png",
    title: "Hoa Gio",
  },
  {
    id: 23,
    name: "Áo Polo Xanh Mát",
    price: "100,000",
    image: "https://product.hstatic.net/200000053174/product/6_be4346d4a7284bf8a3553a730ab0c409_master.jpg",
    title: "Hoa Gio",
  },

  {
    id: 24,
    name: "Áo Polo Bền Màu",
    price: "200,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_fd326052c04f49f9a3e352ee2ac0874d_master.jpg",
    title: "Hoa Gio",
  },
  {
    id: 25,
    name: "Áo Polo Thể Thao ",
    price: "150,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_bf3fa3d86d3b4f9a99d0280ba0d84366_master.jpg",
    title: "Hoa Gio",
  
  },

  // khan
  {
    id: 26,
    name: "Ví Da Nam",
    price: "800,000",
    image:
      "https://product.hstatic.net/200000053174/product/5vidt004vab01-529k__2__68728abb8dc24a9ba7b595df12cd1bbd_master.jpg",
    title: "Lang hoa",
  
  },
  {
    id: 27,
    name: "Ví Tinh Tế",
    price: "350,000",
    image:
      "https://product.hstatic.net/200000053174/product/5vidt002vab01-529k__4__a660e6cf591a496f8680086f0b861c4b_master_69952d914f6a42109957108722163d13_master.jpg",
    title: "Lang hoa",
  },
  {
    id: 28,
    name: "Ví Da Sang Trọng",
    price: "300,000",
    image:
      "https://product.hstatic.net/200000053174/product/5vidt002bev01-529k__3__3482eadfdaab46af905e01473d684730_master.jpg",
    title: "Lang hoa",

  },

  // khan
  
  {
    id: 31,
    name: "Dây Lưng Da Nam ",
    price: "495,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_a4bdd4108c004c0185a83488cbddb062_master.jpg",
    title: "Hoa bo",
   
  },
  {
    id: 32,
    name: "Dây Lưng Da Nam loại 2",
    price: "480,000",
    image: "https://product.hstatic.net/200000053174/product/4_829ac3e21023438e8d6441aec2b7fbbd_master.jpg",
    title: "Hoa bo",

  },

  {
    id: 37,
    name: "Áo Thun Trắng",
    price: "800,000",
    image:
      "https://product.hstatic.net/200000053174/product/3_d0cd2e7731a0463f9b1e3d94943ee91f_master_f695926caf6d437ba7fbb5d231479bc7_master.jpg",
    title: "Hoa Gio",
   
  },
  

];

// truy cập phần tử
let rowJsHt = document.querySelector(".row-js-ht");
let rowJsHs = document.querySelector(".row-js-hs");
let rowjsHsn = document.querySelector(".row-js-hsn");
let rowJsHkt = document.querySelector(".row-js-hb");
let rowJsHl = document.querySelector(".row-js-hl");
// try cập phần tử tab listing
let rowHot = document.querySelector(".row-js-hot");
let rowNew = document.querySelector(".row-js-new");
// lọc tittle
const getData = (list, value) => {
  return list.filter((item) => {
    return item.title === value;
  });
};

// lọc categoty
const getDataHn = (list, value) => {
  return list.filter((item) => {
    return item.category === value;
  });
};
// console.log(getDataHn(data,"hot"));
const listDataHt = getData(data, "Hoa tuoi");
// console.log(listDataHt);
const listDataHs = getData(data, "Hoa Sap");
const listDataHsn = getData(data, "Hoa Gio");
const listDataHkt = getData(data, "Hoa bo");
const listDataHl = getData(data, "Lang hoa");
// sp hot, new
const listDataHot = getDataHn(data, "hot");
const listDataNew = getDataHn(data, "new");
// render data => HTML
const renderData = (listData) => {
  let HTML = ``;
  listData.forEach((item) => {
    HTML += `
      <div class="col-12 col-sm-6 col-md-3">
        <div class="content">
          <a href="/product-details.html?id=${item.id}" target="${item.id}">
          <img class="image" src="${item.image}" alt="${item.name}"></a>
          <div class="content2">
            <div class="name-price">
              <div class="name">${item.name}</div>
              <div class="price">${item.price} VND</div>
            </div>
            <button class="cart"><i class="fa-solid fa-cart-plus"></i> Mua ngay</button>
          </div>
        </div>
      </div>
      `;
  });
  return HTML;
};

rowJsHt.innerHTML = renderData(listDataHt);
rowJsHs.innerHTML = renderData(listDataHs);
rowjsHsn.innerHTML = renderData(listDataHsn);
rowJsHkt.innerHTML = renderData(listDataHkt);
rowJsHl.innerHTML = renderData(listDataHl);

rowHot.innerHTML = renderData(listDataHot);
rowNew.innerHTML = renderData(listDataNew);
// truy cập sp bán chạy, new
let btnListing = document.querySelectorAll(".btn-listing");
let tabContent = document.querySelectorAll(".tab-content");
// tab listing
// Tab listing Product
const listingProduct = (btn, tab) => {
  btn.forEach((button, index) => {
    button.addEventListener("click", () => {
      // Remove active old
      btn.forEach((item) => {
        item.classList.remove("active");
      });
      tab.forEach((value) => {
        value.classList.remove("active");
      });
      // Add active new with click button
      button.classList.add("active");
      tabContent[index].classList.add("active");
    });
  });
};
listingProduct(btnListing, tabContent);

// function khai bao du lieu local storage
const saveCartToLocalStorage = (cartItem) => {
  localStorage.setItem("cartItem", JSON.stringify(cartItem));
};
// saveCartToLocalStorage();

// khai bao function get dữ liệu từ local storage
const getCartFromLocalStorage = () => {
  // dat bien gia su
  const cartItem = localStorage.getItem("cartItem");
  // console.log(cartItem);
  //  dung toan tu 3 ngoi
  return cartItem ? JSON.parse(cartItem) : [];
};
// console.log(getCartFromLocalStorage())

// tao bien lay du lieu cart Locastorage
let cartItem = getCartFromLocalStorage();
// console.log(cartItem);

//  giỏ hàng
// truy cập phần tử
let cart = document.querySelector(".bag-main");
// console.log(cart);
let cartModalOverlay = document.querySelector(".cart-modal-overlay");
let closeBtn = document.querySelector("#close-btn");
// thêm sự kiệN mở giỏ hàng
cart.addEventListener("click", () => {
  // alert("123")
  cartModalOverlay.style.transform = "translateY(0)";
});
//  đóng giỏ hàng
closeBtn.addEventListener("click", () => {
  cartModalOverlay.style.transform = "translateY(-200%)";
});
// đóng khi click ra ngoài màn hình
cartModalOverlay.addEventListener("click", (event) => {
  if (event.target.classList.contains("cart-modal-overlay") == true) {
    cartModalOverlay.style.transform = "translateY(-200%)";
  }
});
// thêm sản phẩm vào trong giỏ hàng
// truy cập vào nút mua
const addToCartButtons = document.querySelectorAll(".cart");
// lặp qua các nút
addToCartButtons.forEach((item) => {
  item.addEventListener("click", () => {
    addToCartClicked(item);
    cartModalOverlay.style.transform = "translateX(0)";
  });
});
// function trung gian lấy giá trị thông tin thêm vào cart
let addToCartClicked = (buttonAdd) => {
  let parentButtonAdd = buttonAdd.parentElement;
  let parentImageAdd = parentButtonAdd.parentElement;

  let price = parentButtonAdd.querySelector(".price").innerHTML;
  console.log(`[DEBUG] price: ${price}`);
  let image = parentImageAdd.querySelector(".image").src;
  let name = parentButtonAdd.querySelector(".name").innerHTML;

  //khởi tạo giá trị người dùng thêm sản phẩm, push object và save lại
  let isDuplicate = false;
  cartItem.forEach((value) => {
    // console.log(value);
    if (value.price === price && value.image === image) {
      alert("Đã thêm sản phẩm vào giỏ hàng!!");
      isDuplicate = true;
    }
  });
  if (isDuplicate == false) {
    cartItem.push({
      name: name,
      image: image,
      price: price,
      quantity: 1,
    });
  }

  // console.log(cartItem, "cartItem");
  //  hiển thị ra ngoài giao diện
  saveCartToLocalStorage(cartItem);

  // console.log(name);
  //  thêm image, price, name lên popup giỏ hàng
  addItemToCart(cartItem);
};

// thêm sản phẩm vào trong giỏ hàng
const addItemToCart = (cartItem) => {
  const productRows = document.querySelector(".product-rows");
  productRows.innerHTML = ``;
  if (cartItem.length > 0) {
    cartItem.forEach((item) => {
      // console.log(item);
      let HTML = `
      <img class="cart-image" src="${item.image}" alt="hoa bo">
      <div class="cart-main-name">
        <div class="cart-name">
          <div class="cart-name-title">${item.name}</div>
          <button class="remove-btn">Xoá</button>
        </div>
        <div class="cart-price-quality">
         <input class="product-quantity" type="number" value="${item.quantity}" min="0">
        <span class="cart-price">${item.price}</span></div>
      </div>
   `;

      // tạo ra row chứa thẻ HTML
      let productRow = document.createElement("div");
      // thêm class
      productRow.classList.add("cart-image-name");
      // THÊM NỘI DUNG
      productRow.innerHTML = HTML;
      // Hien thi ra giao dien popup
      productRows.append(productRow);
    });
  }

  // console.log("Price in addItemToCart:", price);
  // console.log("Image path in addItemToCart:", image);

  // Truy cap phan tu lay ra tat cac hinh anh co san truoc day
  let cartImage = document.querySelectorAll(".cart-image");

//   let issAdd = false;
//   cartImage.forEach((img)=>{
//     if(img.src == image) {
//       alert("San pham da ton tai.");
//       issAdd = true;
//     }
//   });

//   if(issAdd) {
//     return null;
//   }

  // Xoa 1 item trong popup cart

  let removeBtn = document.querySelectorAll(".remove-btn");

  // console.log(removeBtn);
  removeBtn.forEach((value) => {
    // console.log(value);
    let imageSrc = value
      .closest(".cart-image-name")
      .querySelector(".cart-image").src;
    //  console.log(imageSrc);

    // value chinh nut button xoa
    value.addEventListener("click", () => {
      removeCart(value);
      // update local storage trong nay
      cartItem = cartItem.filter((item) => item.image !== imageSrc);
      // console.log(cartItem);

      saveCartToLocalStorage(cartItem);
      addItemToCart(cartItem);
    });
  });
  changeProductValue(); // thay đổi ố lượng

  updatePrice(); // cap nhat gia
};
// Xoa cac san pham da them

const removeCart = (btnRemove) => {
  let productRemove = btnRemove.closest(".cart-image-name");
  let imageS = productRemove.querySelector(".cart-image").src;

  // console.log(productRemove);
  productRemove.remove();
  cartItem = cartItem.filter((item) => item.image !== imageS);

  saveCartToLocalStorage(cartItem);
  // console.log(productRemove);
  saveCartToLocalStorage(cartItem);
  addItemToCart(cartItem);
  updatePrice();
};

//  thay đổi số lượng

const changeProductValue = () => {
  // console.log("thay doi so luong");
  const inputQuantity = document.querySelectorAll(".product-quantity");
  inputQuantity.forEach((item, index) => {
    // console.log(item);
    item.addEventListener("change", () => {
      updatePrice();
      // cập nhật số lượng
      cartItem[index].quantity = item.value;
      // lưu lại vào local storage
      saveCartToLocalStorage(cartItem);
    });
  });
};

// up price and count product
const updatePrice = () => {
  const productEle = document.querySelectorAll(".cart-image-name");
  // console.log(productEle);
  let total = 0;
  cartItem.forEach((item) => {
    // console.log(item);
    // const priceEle =item.querySelector('.cart-price').innerHTML;
    // console.log(priceEle);
    const priceWithoutCurrency = item.price.replace(" VND", "");
    const prices = parseFloat(priceWithoutCurrency.replace(/,/g, ""));
    // console.log(prices);
    // const quantity =item.querySelector('.product-quantity').value;
    // console.log(quantity);
    total = total + prices * item.quantity;
    // console.log(total);
    // chuyển đơn vị tiền tệ có dấu ,
  });
  //ghi rapopup
  document.querySelector(".total-price").innerHTML =
    total.toLocaleString("en-US") + " VND";
  // thay đổi số lượng trên giỏ hàng

  let bagCount = document.querySelectorAll(".bag-product");
  // console.log(bagCount);
  bagCount.forEach(item=>{
  item.innerHTML = cartItem.length;})
  document.querySelector(".cart-count").innerHTML = cartItem.length;
};

// load lại trang luôn luôn phải kiểm tra dữ liệu
window.addEventListener("DOMContentLoaded", () => {
  const cartItem = getCartFromLocalStorage();
  addItemToCart(cartItem);
});


// Hàm hiển thị sản phẩm theo danh mục
function showCategory(category) {
  const categoryContent = document.getElementById("categoryContent");
  const productSp = document.querySelector(".row-js-menu");
  // console.log(categoryContent);
  // Xóa nội dung cũ trước khi hiển thị mới
  categoryContent.innerHTML = "";
  productSp.innerHTML = ``;

  // console.log(category);
  const categoryProducts = data.filter((data) => data.title === category);

  categoryProducts.forEach((product) => {
    // console.log(product);
    const productHTML = `
          <div class="col-12 col-sm-6 col-md-3">
              <div class="content">
              <a href="/product-details.html?id=${product.id}" target="${item.id}">
                  <img class="image" src="${product.image}" alt="${product.name}"></a>
                  <div class="content2">
                      <div class="name-price">
                          <div class="name">${product.name}</div>
                          <div class="price">${product.price}</div>
                      </div>
                      <button id="product_id_${product.id}" class="cart"><i class="fa-solid fa-cart-plus"></i> Mua ngay</button>
                  </div>
              </div>
          </div>
      `;
    productSp.insertAdjacentHTML("beforeend", productHTML);

    const cartButton = document.getElementById(`product_id_${product.id}`);
    cartButton.addEventListener("click", () => {
      addToCartClicked(cartButton);
      cartModalOverlay.style.transform = "translateX(0)";
    });
  });
}
