const emojis = ["😀", "🐶", "🍕", "🚗", "🎈", "🌞", "⚽", "🎸"];
const gameBoard = document.getElementById("game-board");
let cards = [...emojis, ...emojis]; // Duplicate to create pairs
let flippedCards = [];
let matchedCards = [];

shuffle(cards);

// Create card elements
cards.forEach((emoji) => {
    const card = document.createElement("div");
    card.classList.add("card");
    card.dataset.emoji = emoji;
    card.addEventListener("click", flipCard);
    gameBoard.appendChild(card);
});

// Shuffle function
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Flip card function
function flipCard() {
    if (flippedCards.length < 2 && !this.classList.contains("flipped") && !this.classList.contains("matched")) {
        this.innerText = this.dataset.emoji;
        this.classList.add("flipped");
        flippedCards.push(this);

        if (flippedCards.length === 2) {
            setTimeout(checkMatch, 500);
        }
    }
}

// Check for a match
function checkMatch() {
    const [card1, card2] = flippedCards;
    if (card1.dataset.emoji === card2.dataset.emoji) {
        card1.classList.add("matched");
        card2.classList.add("matched");
        matchedCards.push(card1, card2);
    } else {
        card1.innerText = "";
        card2.innerText = "";
        card1.classList.remove("flipped");
        card2.classList.remove("flipped");
    }
    flippedCards = [];

    // Check if game is won
    if (matchedCards.length === cards.length) {
        setTimeout(() => alert("You won! 🎉"), 500);
    }
}
