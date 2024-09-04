// Cart Icon
document.addEventListener('DOMContentLoaded', function() {
  const cartBadge = document.getElementById('cartBadge');
  const cartItemsContainer = document.querySelector('.cart-content');
  
  function updateCartBadge() {
    const itemCount = document.querySelectorAll('.cart-item').length;
    if (itemCount > 0) {
      cartBadge.textContent = itemCount;
      cartBadge.style.display = 'block';
    } else {
      cartBadge.style.display = 'none';
    }
  }
  updateCartBadge();

  document.querySelectorAll('.remove-btn').forEach(button => {
    button.addEventListener('click', function() {
      this.closest('.cart-item').remove();
      updateCartBadge(); 
      updateSubtotal(); 
      updateCartView(); 
    });
  });

  document.querySelectorAll('.add-to-cart-button').forEach(button => {
    button.addEventListener('click', function() {
      updateCartBadge();
    });
  });
});

/*Shopping Cart */
document.addEventListener('DOMContentLoaded', function() {
  const shoppingCart = document.getElementById('shoppingCart');
  const pageContent = document.querySelector('.page-content');
  const cartItems = document.getElementById('cartItems');
  const emptyCartMessage = document.getElementById('emptyCartMessage');
  const returnToShopBtn = document.getElementById('returnShopBtn');
  const subtotalElem = document.querySelector('.subtotal');
  const viewCartBtn = document.getElementById('viewCartBtn');
  const checkoutBtn = document.getElementById('checkoutBtn');
  const selectAllCheckbox = document.getElementById('selectAllCheckbox');

  // Toggle cart visibility
  document.getElementById('cartIcon').addEventListener('click', () => {
    shoppingCart.classList.add('active');
    pageContent.classList.add('blur');
    updateCartView();
  });

  document.getElementById('closeCart').addEventListener('click', () => {
    shoppingCart.classList.remove('active');
    pageContent.classList.remove('blur');
  });

  setupQuantityButtons();

  function setupQuantityButtons() {
    document.querySelectorAll('.increase-qty').forEach(button => {
      button.addEventListener('click', function() {
        updateQuantity(this, 1);
      });
    });

    document.querySelectorAll('.decrease-qty').forEach(button => {
      button.addEventListener('click', function() {
        updateQuantity(this, -1);
      });
    });
  }

  function updateQuantity(button, change) {
    let quantityElem = button.previousElementSibling || button.nextElementSibling;
    let quantity = parseInt(quantityElem.textContent);
    if (quantity + change >= 1) {
      quantity += change;
      quantityElem.textContent = quantity;
      updateSubtotal();
    }
  }

  function updateSubtotal() {
    let subtotal = 0;
    document.querySelectorAll('.cart-item').forEach(item => {
      let price = parseFloat(item.querySelector('.item-price').textContent.replace('₱', ''));
      let quantity = parseInt(item.querySelector('.quantity').textContent);
      subtotal += price * quantity;
    });
    document.querySelector('.subtotal').textContent = `Subtotal: ₱${subtotal.toFixed(2)}`;
    updateCartView();
  }

  function updateCartView() {
    const hasItems = document.querySelectorAll('.cart-item').length > 0;
    emptyCartMessage.style.display = hasItems ? 'none' : 'block';
    cartItems.style.display = hasItems ? 'block' : 'none';
    subtotalElem.style.display = hasItems ? 'block' : 'none';
    viewCartBtn.style.display = hasItems ? 'block' : 'none';
    checkoutBtn.style.display = hasItems ? 'block' : 'none';
  }

  // Return to Shop button function
  returnToShopBtn.addEventListener('click', () => {
    window.location.href = 'products.html';
  });

  // Remove item handler
  document.querySelectorAll('.remove-btn').forEach(button => {
    button.addEventListener('click', function() {
      this.closest('.cart-item').remove();
      updateSubtotal();
      updateCartView(); 
      updateCartBadge(); 
    });
  });

  // Select All functionality
  selectAllCheckbox.addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('.checkout-checkbox');
    checkboxes.forEach(checkbox => {
      checkbox.checked = this.checked;
    });
  });

  // View Cart and Checkout buttons
  document.getElementById('viewCartBtn').addEventListener('click', () => {
    alert('Viewing cart details.');
  });

  document.getElementById('checkoutBtn').addEventListener('click', () => {
    const selectedItems = document.querySelectorAll('.checkout-checkbox:checked');
    if (selectedItems.length === 0) {
      alert('Please select at least one item to checkout.');
      return;
    }

    let selectedProducts = [];
    selectedItems.forEach(checkbox => {
      const cartItem = checkbox.closest('.cart-item');
      const itemName = cartItem.querySelector('.item-name').textContent;
      const itemPrice = cartItem.querySelector('.item-price').textContent;
      const itemQuantity = cartItem.querySelector('.quantity').textContent;

      selectedProducts.push({ name: itemName, price: itemPrice, quantity: itemQuantity });
    });

    alert('Proceeding to checkout with selected items.');
  });

  updateCartView();
});
