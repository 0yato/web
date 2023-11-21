let menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach(function(item) {
  item.addEventListener('click', function() {
    menuItems.forEach(function(otherItem) {
      otherItem.classList.remove('clicked');
      otherItem.classList.add('unclicked');
    });

    item.classList.remove('unclicked');
    item.classList.add('clicked');
  });
});
