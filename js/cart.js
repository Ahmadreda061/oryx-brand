let images = sessionStorage.getItem('images');
let prices = sessionStorage.getItem('prices');
let names = sessionStorage.getItem('names');
images = JSON.parse(images);
prices = JSON.parse(prices);
names = JSON.parse(names);
itemsLen = images.length - 1;
let items = document.querySelector(".items")
let item = document.querySelector('.item')


// updated the the total price
let totalPrice = 0
prices.map(price => totalPrice += parseFloat(price.slice(1)))
document.querySelector('.price').textContent = '$ ' + totalPrice; 
// add items to table
items.textContent = ''
while (itemsLen >= 0) {
    let newRow = item.cloneNode(true)
    
    newRow.querySelector('td:first-child .prodect__cart__item__pic img').src = images[itemsLen];
    newRow.querySelector('td:nth-child(2)  .prodect__cart__item__text').textContent = names[itemsLen];
    newRow.querySelector('td:nth-child(3) .prodect__cart__price').textContent = prices[itemsLen];
    items.appendChild(newRow)
    itemsLen--
}