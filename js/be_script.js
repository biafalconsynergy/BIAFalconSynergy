function showTab(tabId) {
    // Hide all tab contents and remove active class
    var tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(function(tab) {
        tab.classList.remove('active');
    });

    // Remove active class from all tab headers
    var tabHeaders = document.querySelectorAll('.tabs li');
    tabHeaders.forEach(function(header) {
        header.classList.remove('active');
    });

    // Show the selected tab content and set it as active
    document.getElementById(tabId).classList.add('active');
    
    // Add active class to the clicked tab header
    event.target.classList.add('active');
}

// Ensure the correct tab is shown on page load based on the URL hash
document.addEventListener('DOMContentLoaded', function() {
    var initialTab = window.location.hash.substring(1) || 'benefits_future_ready';
    showTab(initialTab);
});

document.addEventListener('DOMContentLoaded', function() {
    var dropdownItems = document.querySelectorAll('.navbar-nav .dropdown-item');

    dropdownItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Remove 'active' class from all dropdown items
            dropdownItems.forEach(function(dropdownItem) {
                dropdownItem.classList.remove('active');
            });

            // Add 'active' class to the clicked item
            this.classList.add('active');
        });
    });
});