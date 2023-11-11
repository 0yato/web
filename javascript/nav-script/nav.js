// Assuming you have a common class for all elements, let's call it 'menu-item'
let menuItems = document.querySelectorAll('.menu-item');

// Adding click event listeners using a loop
menuItems.forEach(function(item) {
  item.addEventListener('click', function() {
    // Remove 'clicked' class from all elements
    menuItems.forEach(function(otherItem) {
      otherItem.classList.remove('clicked');
      otherItem.classList.add('unclicked');
    });

    // Add 'clicked' class to the clicked element
    item.classList.remove('unclicked');
    item.classList.add('clicked');
  });
});
