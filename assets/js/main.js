const cartElement = document.querySelector('#cart_list');
const cartButton = document.querySelector('#cartButton');
const slider = document.querySelector('#slider');

let carts = store.get('carts') ? store.get('carts') : [];
let isCartOpen = false;

const cartTigger = () => {
    if (isCartOpen) {
        cartElement.style.animationName = 'fadeOut';
        cartButton.classList.remove('tigger');
        setTimeout(() => {
            cartElement.style.display = 'none';
        }, 200);
    } else {
        cartElement.style.animationName = 'fadeIn';
        cartButton.classList.add('tigger');
        cartElement.style.display = 'block';
        cartElement.focus();
    }
    isCartOpen = !isCartOpen;
}

if (slider) {
    ((time) => {
        let activeSlide = 0;
        (function next() {
            for (let index = 0; index < slider.children.length; index++) {
                let item = slider.children[index];
                index === activeSlide
                    ? item.style.display = 'flex'
                    : item.style.display = 'none'
            }
            slider.children.length - 1 > activeSlide
                ? activeSlide++
                : activeSlide = 0
            setTimeout(() => {
                next();
            }, time)
        })(time)
    })(5000)
}

const totalCal = () => {
    let totalPrice = document.querySelectorAll('.totalPrice');
    let total = 0;
    for (let index = 0; index < carts.length; index++) {
        let item = carts[index];
        total += item.price * item.quantity;
    }
    totalPrice.forEach(element => {
        element.innerHTML = total;
    });
}

const addToCart = (item) => {
    item.orderId = Math.floor(Math.random() * 1000) + Date.now() + Math.floor(Math.random() * 100);
    item.quantity = 1;
    carts.push(item)
    cart_list_update();
}

const cart_list_update = () => {
    let cart_count = document.querySelector('#cart_count');
    let list = document.querySelector('#cart_list').children[1];
    list.innerHTML = '';
    if (carts.length > 0) {
        for (let index = 0; index < carts.length; index++) {
            let item = carts[index];
            let node = document.createElement("LI");
            node.innerHTML = `<div class="item">
                                <div class="qut">
                                <span><button onclick="increase(${item.orderId})">+</button></span>
                                <span><input type="text" disabled value="${item.quantity}" style="width: 20px; text-align: center; border: none;"></span>
                                <span><button onclick="decrease(${item.orderId})">-</button></span>
                            </div>
                            <div class="img"><img width="100%" height="100%" src="${item.imgURl}" alt=""></div>
                            <div class="des">
                                <div>${item.name}</div>
                                <div style="font-size: x-small; color: #666">${item.description}</div>
                                </div>
                            <div class="pri">${item.price * item.quantity} BDT</div>
                            <div class="btn"><button onclick="remove(${item.orderId});">X</button></div>
                            </div>`;
            list.appendChild(node);
        }
    } else {
        let node = document.createElement("LI");
        node.style.textAlign = 'center';
        node.style.color = '#999999';
        node.innerHTML = 'Cart is Empty';
        list.appendChild(node);
    }
    cart_count.innerHTML = carts.length;
    totalCal();
    store.set('carts', carts);
}

cart_list_update();

const increase = async (orderId) => {
    let index = await carts.findIndex(item => item.orderId === orderId);
    carts[index].quantity += 1;
    cart_list_update();
}

const decrease = async (orderId) => {
    let index = await carts.findIndex(item => item.orderId === orderId);
    let item = carts[index];
    if (item.quantity > 1) {
        carts[index].quantity -= 1;
        cart_list_update();
    }
}

const remove = async (orderId) => {
    let index = await carts.findIndex(item => item.orderId === orderId);
    carts.splice(index, 1);
    cart_list_update();
}

totalCal();