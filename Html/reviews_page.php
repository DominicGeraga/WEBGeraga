<!-- reviews_page.php -->
<div class="review-section">
    <h2>Leave a Comment or Review</h2>
    <form action="submit_review.php" method="POST">
        <div class="form-group">
            <label for="name">Name (or Nickname):</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name or nickname">
        </div>
        <div class="form-group">
            <label for="comment">Comment/Review:</label>
            <textarea id="comment" name="comment" rows="4" required placeholder="Write your comment or review"></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>
        </div>
        <button type="submit" class="submit-btn">Submit Review</button>
    </form>
</div>

<div class="reviews-display">
    <h3>Customer Reviews</h3>
    <?php
        include 'fetch_reviews.php'; // Include the PHP file to fetch and display reviews
    ?>
</div>
