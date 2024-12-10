<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artworks Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, #141414, #25170C, #431D00);
      color: white;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      padding: 20px;
      padding-top: 60px; /* Add padding to body to avoid overlap with fixed header */
    }

    /* General Header Styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 20px;
      background-color: #161413;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      height: 50px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Add subtle shadow */
    }

    .logo img {
      width: 50px;
      height: 50px;
    }

    .menu-toggle {
      display: none;
      font-size: 24px;
      background: none;
      border: none;
      color: white;
      cursor: pointer;
      margin-left: auto;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      margin: 0 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      font-family: "Roboto Condensed", sans-serif;
    }

    /* Dropdown Navigation for Mobile */
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 50px;
        right: 10px;
        background-color: #161413;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 200px;
        padding: 10px 0;
        opacity: 0;
        transform: scale(0.95);
        transition: opacity 0.3s ease, transform 0.3s ease;
      }

      .nav-links.active {
        display: flex;
        opacity: 1;
        transform: scale(1);
      }

      nav ul li {
        margin: 10px 0;
        text-align: center;
      }
    }

    /* Artworks Section */
    .artworks-section {
      padding: 20px;
    }

    .artworks-title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .gallery-item {
      text-align: center;
      background-color: #161413;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
      flex: 1 1 calc(50% - 20px);
      max-width: 300px;
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .gallery-item.active, .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(255, 69, 0, 0.7);
      border: 2px solid #ff4500;
    }

    .gallery-item img {
      width: 100%; /* Ensure images fill the container width */
      height: auto;
      border-radius: 5px;
    }

    .gallery-item .details {
      margin-top: 10px;
      font-size: 14px;
      color: #ccc;
    }

    /* Review Section Styles */
    .review-section {
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 10px;
    padding: 20px;
    margin-top: 40px; /* Adjusted spacing */
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    font-family: Arial, sans-serif;
    color: #141414;
}


/* Header */
.review-section h2 {
    text-align: center;
    font-size: 24px;
    color: #25170C; /* Dark brown for header */
}

/* Form Group Styling */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    color: #431D00; /* Deep reddish brown for labels */
}

.form-group input, .form-group textarea, .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #431D00; /* Same reddish brown border */
    border-radius: 5px;
    font-size: 16px;
}

.form-group textarea {
    resize: vertical;
}

/* Submit Button */
.submit-btn {
    background-color: #FF6A00; /* Orange button */
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

.submit-btn:hover {
    background-color: #E65B00; /* Darker orange on hover */
}

/* Reviews Display Section */
.reviews-display {
    margin-top: 40px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.6); /* Light translucent background */
    border-radius: 10px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    font-family: Arial, sans-serif;
    color: #141414; /* Dark text */
}

.reviews-display h3 {
    text-align: center;
    font-size: 24px;
    color: #25170C; /* Dark brown for header */
}

.review-item {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8); /* Slightly opaque background for review items */
}

.review-item strong {
    color: #431D00; /* Dark reddish-brown for the name */
}

.review-item p {
    color: #333; /* Darker text for the comment */
}

.reviews-display p {
    text-align: center;
    font-style: italic;
    color: #431D00; /* Deep reddish-brown for the "No reviews yet" message */
}

    /* Responsive Gallery */
    @media (max-width: 768px) {
      .gallery-item {
        flex: 1 1 100%;
      }
    }

    footer {
      text-align: center;
      padding: 10px;
      color: white;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <div class="logo">
      <img src="../Images/Home page/Domsdraw logo.png" alt="Logo">
    </div>
    <button class="menu-toggle" aria-label="Toggle navigation">&#9776;</button>
    <nav>
      <ul class="nav-links">
        <li><a href="Home Page.html">Home</a></li>
        <li><a href="About Me Page.html">About</a></li>
        <li><a href="Artworks Page.php">Artworks</a></li>
        <li><a href="Pricing Page.html">Pricing</a></li>
        <li><a href="Contacts Page.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="artworks-section">
    <h1 class="artworks-title">Artworks</h1>
    <div class="gallery">
      <!-- Artwork Item 1 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/painting.jpg" alt="Bouquet as Cathedral">
        <div class="details">
          <p><strong>Title:</strong> Bouquet as Cathedral</p>
          <p><strong>Medium:</strong> Mixed Media (Acrylic, Charcoal, Graphite)</p>
          <p><strong>Size:</strong> 10x10 inches</p>
          <p><strong>FOR SALE!!!</strong> (Php 4,500)</p>
        </div>
      </div>

      <!-- Artwork Item 2 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/taylor.jpg" alt="Portrait of Taylor Swift">
        <div class="details">
          <p><strong>Title:</strong> Portrait of Taylor Swift</p>
          <p><strong>Medium:</strong> Mixed Media (Gel Pen and Colored Pencils)</p>
          <p><strong>Size:</strong> 11x14 inches</p>
        </div>
      </div>

      <!-- Artwork Item 3 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/Liza.png" alt="Portrait of Leon Soberano">
        <div class="details">
          <p><strong>Title:</strong> Portrait of Liza Soberano</p>
          <p><strong>Medium:</strong> Mixed Media (Gel Pen and Colored Pencils)</p>
          <p><strong>Size:</strong> 11x14 inches</p>
        </div>
      </div>

      <!-- Artwork Item 4 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/angelo.png" alt="The Creation of Adam">
        <div class="details">
          <p><strong>Title:</strong> The Creation of Adam</p>
          <p><strong>Medium:</strong> Mixed Media (Charcoal and Graphite)</p>
          <p><strong>Size:</strong> 14x21 cm</p>
        </div>
      </div>

      <!-- Artwork Item 5 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/Beloved.png" alt="Portrait of My Beloved">
        <div class="details">
          <p><strong>Title:</strong> Portrait of My Beloved</p>
          <p><strong>Medium:</strong> Charcoal</p>
          <p><strong>Size:</strong> 9x12 inches</p>
        </div>
      </div>

      <!-- Artwork Item 6 -->
      <div class="gallery-item">
        <img src="../Images/Artworks Page/Fallen.png" alt="The Fallen Angel">
        <div class="details">
          <p><strong>Title:</strong> The Fallen Angel</p>
          <p><strong>Medium:</strong> Charcoal</p>
          <p><strong>Size:</strong> 9x12 inches</p>
        </div>
      </div>
    </div>

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

<footer>
    <p>&copy; 2024 DomsDraw. All Rights Reserved.</p>
  </footer>


  <script>
    // Toggle navigation menu for mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });

    // Add touch support for highlighting on mobile
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach((item) => {
      item.addEventListener('touchstart', () => {
        item.classList.add('active');
      });
      item.addEventListener('touchend', () => {
        setTimeout(() => item.classList.remove('active'), 300); // Remove highlight after 300ms
      });
    });
  </script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector("form");
        const reviewsContainer = document.querySelector(".reviews-display");
        const popup = document.createElement("div");

        // Style for popup notification
        popup.style.position = "fixed";
        popup.style.top = "20px";
        popup.style.right = "20px";
        popup.style.padding = "10px 20px";
        popup.style.backgroundColor = "#FF6A00";
        popup.style.color = "#fff";
        popup.style.borderRadius = "5px";
        popup.style.display = "none";
        popup.style.zIndex = "1000";
        document.body.appendChild(popup);

        // Handle form submission
        form.addEventListener("submit", (event) => {
            event.preventDefault(); // Prevent default form submission behavior
            const formData = new FormData(form);

            fetch("submit_review.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.text())
                .then((data) => {
                    // Show confirmation popup
                    popup.textContent = "Review has been received!";
                    popup.style.display = "block";
                    setTimeout(() => {
                        popup.style.display = "none";
                    }, 2000);

                    // Refresh the reviews section
                    return fetch("fetch_reviews.php"); // Adjust the URL if needed
                })
                .then((response) => response.text())
                .then((html) => {
                    reviewsContainer.innerHTML = html;
                    form.reset(); // Clear the form fields after successful submission
                })
                .catch((error) => {
                    console.error("Error submitting review:", error);
                });
        });
    });
</script>


</body>
</html>
