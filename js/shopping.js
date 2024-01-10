sessionStorage.clear("images")        
sessionStorage.clear("names")        
sessionStorage.clear("prices") 
let shoppingItems = document.querySelector(".col-lg-12 i span");
addCartList = document.querySelectorAll('.add-cart');
counter = 0;
images = []
prices = []
names = []    
addCartList.forEach(cart=>{
    cart.addEventListener("click", ()=> {
        let productItem = cart.closest('.product__item')  // get the colse one to add-cart element 
        !cart.classList.contains("active") ? addItem(cart, productItem): removeItem(cart, productItem)
        shoppingItems.textContent = counter;  // change the number of items that chosed 

        // updated the sessionStorage to use it in shopping cart
        sessionStorage.setItem("images", JSON.stringify(images))        
        sessionStorage.setItem("names", JSON.stringify(names))        
        sessionStorage.setItem("prices", JSON.stringify(prices)) 
    })
})

function addItem(cart, productItem) {
    counter++;
    cart.classList.add("active");
    images.push(productItem.querySelector('.product__item__pic img').src)
    names.push(productItem.querySelector('.product__item__text h4').textContent)
    prices.push(productItem.querySelector('.product__item__text__pay h5').textContent)
}

function removeItem(cart, productItem) {
    counter--;  
    cart.classList.remove("active")
    images.pop(productItem.querySelector('.product__item__pic img').src)
    names.pop(productItem.querySelector('.product__item__text h4').textContent)
    prices.pop(productItem.querySelector('.product__item__text__pay h5').textContent)
}