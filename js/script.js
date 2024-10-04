// script.js

// Function to show the modal after 3 seconds
setTimeout(() => {
    document.getElementById("latestBlogModal").style.display = "block";
}, 5000);

// Close the modal when the user clicks on the close button
document.getElementById("closeModal").onclick = function() {
    document.getElementById("latestBlogModal").style.display = "none";
}

// Close the modal when the user clicks anywhere outside of the modal
window.onclick = function(event) {
    if (event.target === document.getElementById("latestBlogModal")) {
        document.getElementById("latestBlogModal").style.display = "none";
    }
}


// script.js (or include this in your existing script file)

// Initialize an array to store comments
let comments = [];

// Function to render comments
function renderComments() {
    const commentsList = document.getElementById('commentsList');
    commentsList.innerHTML = '';
    comments.forEach((comment) => {
        const commentDiv = document.createElement('div');
        commentDiv.className = 'comment';
        commentDiv.textContent = comment;
        commentsList.appendChild(commentDiv);
    });
}

// Handle form submission
document.getElementById('commentForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const commentInput = document.getElementById('commentInput');
    const newComment = commentInput.value.trim();
    if (newComment) {
        comments.push(newComment);
        commentInput.value = ''; // Clear the input
        renderComments(); // Re-render the comments
    }
});
