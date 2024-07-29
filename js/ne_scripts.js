 
 // Function to handle filtering based on input value
 function filterCards() {
    var input, filter, cards, card, i, txtValueTitle, txtValueContent;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("news-card");

    // Loop through all cards
    for (i = 0; i < cards.length; i++) {
        card = cards[i];
        txtValueTitle = card.getElementsByClassName("news-title")[0].textContent || card.getElementsByClassName("news-title")[0].innerText;
        txtValueContent = card.getElementsByClassName("news-content-text")[0].textContent || card.getElementsByClassName("news-content-text")[0].innerText;
        if (txtValueTitle.toUpperCase().indexOf(filter) > -1 || txtValueContent.toUpperCase().indexOf(filter) > -1) {
            card.style.display = "";
        } else {
            card.style.display = "none";
        }
    }
}


