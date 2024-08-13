function showTab(tabId) {
    // Hide all tab contents
    var contents = document.querySelectorAll('.tab-content');
    contents.forEach(function(content) {
        content.classList.remove('active');
    });

    // Remove active class from all tabs
    var tabs = document.querySelectorAll('.tabs li');
    tabs.forEach(function(tab) {
        tab.classList.remove('active');
    });

    // Show the selected tab content
    document.getElementById(tabId).classList.add('active');

    // Add active class to the clicked tab
    event.currentTarget.classList.add('active');
}