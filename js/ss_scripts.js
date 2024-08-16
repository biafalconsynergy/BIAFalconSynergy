document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".btn-danger.read-more-btn");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const p = button.previousElementSibling;
            const fullText = p.getAttribute("data-full-text");
            const truncatedText = fullText.substring(0, 200) + "...";

            if (p.textContent === fullText) {
                p.textContent = truncatedText;
                button.textContent = "Read More";
            } else {
                p.textContent = fullText;
                button.textContent = "Show Less";
            }
        });
    });
});

