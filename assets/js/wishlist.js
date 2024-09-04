document.addEventListener('DOMContentLoaded', function() {
  const wishlistBadge = document.getElementById('wishlistBadge');
  const wishlistItemsContainer = document.querySelector('.wishlist-content');

  function updateWishlistBadge() {
    const itemCount = document.querySelectorAll('.wishlist-item').length;
    if (itemCount > 0) {
      wishlistBadge.textContent = itemCount;
      wishlistBadge.classList.add('show');
    } else {
      wishlistBadge.classList.remove('show');
    }
  }
  updateWishlistBadge();

  // Handle clicking the wishlist icon
  document.getElementById('wishlistIcon').addEventListener('click', function() {
    const wishlist = document.getElementById('wishlist');
    wishlist.classList.toggle('active');
    const pageContent = document.querySelector('.page-content');
    pageContent.classList.toggle('blur');
    updateWishlistBadge();
  });

  document.querySelectorAll('.remove-item').forEach(button => {
    button.addEventListener('click', function() {
      this.closest('.wishlist-item').remove();
      updateWishlistBadge();
    });
  });

  document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function() {
      alert('Item added to cart.');
      this.closest('.wishlist-item').remove();
      updateWishlistBadge();
    });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const wishlist = document.getElementById('wishlist');
  const pageContent = document.querySelector('.page-content');
  const emptyWishlistMessage = document.getElementById('emptyWishlistMessage');

  // Toggle wishlist visibility
  document.getElementById('wishlistIcon').addEventListener('click', () => {
    wishlist.classList.add('active');
    pageContent.classList.add('blur');
    updateWishlistView();
  });

  document.getElementById('closeWishlist').addEventListener('click', () => {
    wishlist.classList.remove('active');
    pageContent.classList.remove('blur');
  });

  function updateWishlistView() {
    const hasItems = document.querySelectorAll('.wishlist-item').length > 0;
    emptyWishlistMessage.style.display = hasItems ? 'none' : 'block';
  }

  // Remove item from wishlist
  document.querySelectorAll('.remove-item').forEach(button => {
    button.addEventListener('click', function() {
      this.closest('.wishlist-item').remove();
      updateWishlistView();
    });
  });

  // Add to Cart button functionality
  document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function() {
      alert('Item added to cart.');
      this.closest('.wishlist-item').remove();
      updateWishlistView();
    });
  });

  updateWishlistView();
});
