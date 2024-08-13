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
    var clickedTab = document.querySelector('.tabs li[onclick="showTab(\'' + tabId + '\')"]');
    if (clickedTab) {
        clickedTab.classList.add('active');
    }
}

// Ensure the correct tab is shown on page load based on the URL hash
document.addEventListener('DOMContentLoaded', function() {
    var initialTab = window.location.hash.substring(1) || 'benefits_future_ready';
    showTab(initialTab);
});

// Update the tab status when navigating through header links
document.querySelectorAll('.tabs li').forEach(function(tab) {
    tab.addEventListener('click', function() {
        var targetTabId = this.getAttribute('onclick').match(/'([^']+)'/)[1];
        window.location.hash = targetTabId;
    });
});
