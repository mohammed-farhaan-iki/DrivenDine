
@extends('layouts.client')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
<section id="our_menu" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_title text-center mb-4">
                    <h1>Our Menu</h1>
                    <div class="single_line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="breakfast-tab" data-bs-toggle="tab" href="#breakfast" role="tab">Breakfast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lunch-tab" data-bs-toggle="tab" href="#lunch" role="tab">Lunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dinner-tab" data-bs-toggle="tab" href="#dinner" role="tab">Dinner</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content col-lg-12" id="myTabContent">
                <!-- Breakfast Tab -->
                <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Scrambled Eggs <span>₹250</span></h4>
                                    <p>Fluffy scrambled eggs served with buttered toast and a side of avocado.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Pancakes <span>₹300</span></h4>
                                    <p>Delicious pancakes served with maple syrup and fresh berries.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Omelette <span>₹350</span></h4>
                                    <p>Classic omelette with cheese, mushrooms, and spinach.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>French Toast <span>₹275</span></h4>
                                    <p>Golden-brown French toast served with powdered sugar and syrup.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Bagel with Cream Cheese <span>₹180</span></h4>
                                    <p>Freshly baked bagel with smooth cream cheese and a side of fruit.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Coffee <span>₹100</span></h4>
                                    <p>Freshly brewed coffee with your choice of milk or cream.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lunch Tab -->
                <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Grilled Cheese Sandwich <span>₹220</span></h4>
                                    <p>Toasty sandwich filled with melted cheese and served with a side of chips.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Caesar Salad <span>₹300</span></h4>
                                    <p>Classic Caesar salad with romaine lettuce, croutons, and parmesan.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Chicken Wrap <span>₹400</span></h4>
                                    <p>Grilled chicken, lettuce, and veggies wrapped in a tortilla.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Vegetarian Burger <span>₹350</span></h4>
                                    <p>Plant-based burger served with lettuce, tomato, and pickles.</p>
                                    <button class="add-btn btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>BLT Sandwich <span>₹270</span></h4>
                                    <p>Bacon, lettuce, and tomato sandwich served with mayo.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dinner Tab -->
                <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Steak with Mashed Potatoes <span>₹800</span></h4>
                                    <p>Grilled steak served with creamy mashed potatoes and veggies.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Chicken Alfredo Pasta <span>₹500</span></h4>
                                    <p>Creamy pasta with grilled chicken, garlic, and parmesan.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_menu">
                                <div class="menu_content">
                                    <h4>Grilled Salmon <span>₹600</span></h4>
                                    <p>Salmon grilled to perfection served with rice and veggies.</p>
                                    <button class="add-btn  btn-primary">Add</button>
                                    <div class="quantity-section" style="display: none;">
                                        <button class="decrease-btn btn-danger">-</button>
                                        <span class="quantity">0</span>
                                        <button class="increase-btn btn-success">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="d-flex justify-content-center">
  <a href="#" class="menu_btn btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#orderModal">Order Now</a>
  <a href="#" class="menu_btn btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#payModal">Pay Now</a>
</div>

    <!-- Modal -->
<div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payModalLabel">Payment Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-footer">
      
        <button type="button" class="btn btn-primary" onclick="processPayment()">Pay Now</button>
      </div>
    </div>
  </div>
</div>

  <!-- Order Now Button -->


  <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Your Receipt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="receipt">
          <header class="receipt__header">
            <p class="receipt__title">Drive N Dine</p>
            <p class="receipt__date"><?php echo date('d F Y'); ?></p>
          </header>
          
          <dl class="receipt__list">
            <!-- Receipt items will be dynamically added here -->
          </dl>
        </div>
      </div>
      <div class="modal-footer">
        <input type="text" placeholder="Enter your token no" id="token" value="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitOrder()">Submit Order</button>

      </div>
    </div>
  </div>
</div>

</section>


@endsection
@section('js')
    <script>
        
// JavaScript to handle Add, Increase, Decrease, and submitting the order
let orderItems = {};

// Handle Add button click
const addButtons = document.querySelectorAll('.add-btn');
addButtons.forEach((button) => {
  button.addEventListener('click', function () {
    const menuItem = this.parentElement;
    const itemName = menuItem.querySelector('h4').innerText;
    const itemPrice = parseFloat(menuItem.querySelector('span').innerText.replace('₹', ''));

    const quantitySection = menuItem.querySelector('.quantity-section');
    quantitySection.style.display = 'inline-block';
    this.style.display = 'none';

    if (!orderItems[itemName]) {
      orderItems[itemName] = { price: itemPrice, quantity: 0 };
    }

    updateReceipt();
  });
});

// Handle Increase button click
const increaseButtons = document.querySelectorAll('.increase-btn');
increaseButtons.forEach((button) => {
  button.addEventListener('click', function () {
    const quantitySpan = this.previousElementSibling;
    const itemName = this.closest('.menu_content').querySelector('h4').innerText;
    orderItems[itemName].quantity += 1;
    quantitySpan.textContent = orderItems[itemName].quantity;
    updateReceipt();
  });
});

// Handle Decrease button click
const decreaseButtons = document.querySelectorAll('.decrease-btn');
decreaseButtons.forEach((button) => {
  button.addEventListener('click', function () {
    const quantitySpan = this.nextElementSibling;
    const itemName = this.closest('.menu_content').querySelector('h4').innerText;
    if (orderItems[itemName].quantity > 0) {
      orderItems[itemName].quantity -= 1;
      quantitySpan.textContent = orderItems[itemName].quantity;
      updateReceipt();
    }
  });
});

// Function to update the receipt dynamically
function updateReceipt() {
  let total = 0;
  const receiptBody = document.querySelector('.receipt__list');
  receiptBody.innerHTML = ''; // Clear previous receipt items

  for (const itemName in orderItems) {
    const item = orderItems[itemName];
    if (item.quantity > 0) {
      const row = document.createElement('div');
      row.classList.add('receipt__list-row');
      row.innerHTML = `
        <dt class="receipt__item">${itemName}</dt>
        <dd class="receipt__cost">₹${(item.price * item.quantity).toFixed(2)}</dd>
      `;
      receiptBody.appendChild(row);
      total += item.price * item.quantity;
    }
  }

  const totalRow = document.createElement('div');
  totalRow.classList.add('receipt__list-row', 'receipt__list-row--total');
  totalRow.innerHTML = `
    <dt class="receipt__item">Total</dt>
    <dd class="receipt__cost">₹${total.toFixed(2)}</dd>
  `;
  receiptBody.appendChild(totalRow);
}


function submitOrder() {
    console.log("Submitting order...");

    // Retrieve the token from the input field
    let token = document.getElementById("token").value;
    console.log("Token value: ", token);  // Debug: Check if token is correct

    let orderData = {
        token: token,  // Include the token
        items: [] // Initialize an empty array for items
    };

    // Example: orderItems is assumed to be structured as { itemName: { price, quantity } }
    for (const itemName in orderItems) {
        const item = orderItems[itemName];

        if (item.quantity > 0) {
            orderData.items.push({
                item_name: itemName,
                price: item.price,
                quantity: item.quantity
            });
        }
    }

    // Send order data to the backend
    fetch("/submit-order", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(orderData)
    })
    .then(response => response.json())
    .then(data => {
        alert("suucess");  // Handle response
    })
    .catch(error => {
        console.error('Error:', error);  // Handle error
    });
}






function processPayment() {
    // Simulate a successful payment process
    // You can add logic for payment processing here

    // Show a success alert when the payment is processed successfully
    alert("Success: Payment processed successfully!");
}

    </script>
@endsection