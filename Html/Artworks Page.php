<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doms' Art Portfolio</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%; /* Ensure the body takes full height */
      margin: 0;
      display: flex;
      flex-direction: column; /* Stack content vertically */
      margin-bottom: 0;
      padding-bottom: ;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, #141414, #25170C, #431D00);
      color: white;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    /* Header */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background: #161413;
      height: 45px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .logo {
      width: 50px; 
      height: auto;
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 20px;
      font-family: "Roboto Condensed", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
    }

    .content {
      flex: 1;
    }

    .logo {
      width: 50px; 
      height: auto;
    }

    .shadow-picture {
      position: fixed;
      top: 0px;
      z-index: -1;
      opacity: 80%;
    }

    .Painting {
      position: absolute;
      top: 150px;
      left: 160px;
    }

    .shadow1 {
      position: absolute;
      top: 119px;
      left: 62px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc1{
      position: absolute;
      top: 630px;
      left: 160px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }

    .sale{
      position: absolute;
      top: 120px;
      left: 160px;
      font-size: 20px;
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: bold;
      font-style: normal;
    }

    .title {
      font-family: "Playfair Display", serif;
      font-optical-sizing: auto;
      font-weight: bolder;
      font-style: normal;
    }

    .Taylor {
      position: absolute;
      top: 150px;
      left: 920px;
    }

    .shadow2 {
      position: absolute;
      top: 119px;
      left: 840px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc2{
      position: absolute;
      top: 630px;
      left: 920px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }


    .Liza {
      position: absolute;
      top: 850px;
      left: 160px;
    }

    .shadow3 {
      position: absolute;
      top: 819px;
      left: 70px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc3{
      position: absolute;
      top: 1330px;
      left: 160px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }


    .angelo {
      position: absolute;
      top: 870px;
      left: 800px;
    }

    .shadow4 {
      position: absolute;
      top: 823px;
      left: 700px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc4{
      position: absolute;
      top: 1330px;
      left: 800px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }


    .Beloved {
      position: absolute;
      top: 1550px;
      left: 160px;
    }

    .shadow5 {
      position: absolute;
      top: 1496px;
      left: 60px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc5{
      position: absolute;
      top: 2135px;
      left: 160px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }


    .Fallen {
      position: absolute;
      top: 1605px;
      left: 800px;
    }

    .shadow6 {
      position: absolute;
      top: 1560px;
      left: 680px;
      opacity: 60%;
      z-index: -2;
    }

    .Desc6{
      position: absolute;
      top: 2135px;
      left: 800px;
      font-size: 20px;
      font-family: "Source Code Pro", monospace;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }


    /* Review Section Styles */
.review-section {
    background-color: rgba(255, 255, 255, 0.4); /* Semi-translucent gray background */
    border-radius: 10px;
    padding: 20px;
    margin-top: 2320px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Light shadow for separation */
    font-family: Arial, sans-serif;
    color: #141414; /* Dark text for contrast */
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

/* Optional: Adjustments for mobile responsiveness */
@media screen and (max-width: 768px) {
    .review-section, .reviews-display {
        width: 90%;
    }
}


    /* Footer */
    .footer {
      background-color: #161413;
      color: white;
      text-align: center;
      font-size: 14px;
      padding: 10px 0;
      border-top: 1px solid #555; /* Subtle top border */
      width: 100%;
      bottom: 0%;
    }

  </style>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="../Images/Artworks Page/Domsdraw logo.png" alt="Logo" style="width: 70px; height: 75px;">
    </div>
    <nav>
      <ul>
        <li><a href="Home Page.html" style="color: white; text-decoration: none;">Home</a></li>
        <li><a href="About Me Page.html" style="color: white; text-decoration: none;">About</a></li>
        <li><a href="Artworks Page.php" style="color: white; text-decoration: none;">Artworks</a></li>
        <li><a href="Pricing Page.html" style="color: white; text-decoration: none;">Pricing</a></li>
        <li><a href="Contacts Page.html" style="color: white; text-decoration: none;">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
      <div class="content">
        <div class="Artwork1">
          <div class="Painting">
            <img src="../Images/Artworks Page/painting.jpg" alt="Painting" style="width: 450px; height: 450px;">
          </div>
          <div class="shadow1">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 650px; height: 550px;">
          </div>
          <div class="Desc1">
            <p><span class="title">Title:</span> "Buwak sa Cathedral"<br><span class="title">Medium:</span> Mixed Media (Acrylic, Charcoal, Graphite)<br><span class="title">Size:</span> 10x10 inches</p>
          </div>
          <div class="sale">
            <p>FOR SALE!! (₱4500)</p>
          </div>
        </div>


        <div class="Artwork2">
          <div class="Taylor">
            <img src="../Images/Artworks Page/taylor.jpg" alt="Drawing" style="width: 380px; height: 450px;">
          </div>
          <div class="shadow2">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 540px; height: 550px;">
          </div>
          <div class="Desc2">
            <p><span class="title">Title:</span> “Portrait of Taylor Swift”<br><span class="title">Medium:</span> Mixed Media (Gel Pen and <br>Colored Pencils) <br><span class="title">Size:</span> 11x14 inches </p>
          </div>
        </div>


        <div class="Artwork3">
          <div class="Liza">
            <img src="../Images/Artworks Page/Liza.png" alt="Drawing" style="width: 445px; height: 450px;">
          </div>
          <div class="shadow3">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 635px; height: 550px;">
          </div>
          <div class="Desc3">
            <p><span class="title">Title:</span> “Portrait of Liza Soberano”<br><span class="title">Medium:</span> Mixed Media (Gel pen and <br>Colored Pencils)<br><span class="title">Size:</span> 11x14 inches</p>
          </div>
        </div>


        <div class="Artwork4">
          <div class="angelo">
            <img src="../Images/Artworks Page/angelo.png" alt="Drawing" style="width: 550px; height: 400px;">
          </div>
          <div class="shadow4">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 770px; height: 510px;">
          </div>
          <div class="Desc4">
            <p><span class="title">Title:</span> "The Creation of Adam: A Tribute in <br>Graphite and Charcoal"<br><span class="title">Medium:</span> Mixed Media (Charcoal and Graphite)<br><span class="title">Size:</span> 14.4x21 cm</p>
          </div>
        </div>


        <div class="Artwork5">
          <div class="Beloved">
            <img src="../Images/Artworks Page/Beloved.png" alt="Drawing" style="width: 500px; height: 550px;">
          </div>
          <div class="shadow5">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 713px; height: 690px;">
          </div>
          <div class="Desc5">
            <p><span class="title">Title:</span> "Portrait of My Beloved"<br><span class="title">Medium:</span> Charcoal<br><span class="Title">Size:</span> 9x12 inches</p>
          </div>
        </div>


        <div class="Artwork6">
          <div class="Fallen">
            <img src="../Images/Artworks Page/Fallen.png" alt="Drawing" style="width: 550px; height: 445px;">
          </div>
          <div class="shadow6">
            <img src="../Images/Artworks Page/dropshadow.png" alt="shadow" style="width: 795px; height: 560px;">
          </div>
          <div class="Desc6">
            <p><span class="title">Title:</span> "The Fallen Angel: A Tribute in Charcoal"<br><span class="title">Medium:</span> Charcoal<br><span class="title">Size:</span> 9x12 inches</p>
          </div>
        </div>


         <!-- Review Section -->
    <div class="review-section">
        <h2>Leave a Comment or Review</h2>
        <form id="reviewForm">
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

    <!-- Display Reviews Section -->
    <div class="reviews-display">
        <h3>Customer Reviews</h3>
        <div id="reviewsContainer">
            <?php include 'fetch_reviews.php'; ?>
        </div>
    </div>

    <script>
        document.getElementById('reviewForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(this);

            fetch('submit_review.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Update the reviews dynamically after submission
                fetch('fetch_reviews.php')
                    .then(response => response.text())
                    .then(reviews => {
                        document.getElementById('reviewsContainer').innerHTML = reviews;
                    });

                // Optionally clear the form fields
                this.reset();
                alert('Review submitted successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting your review.');
            });
        });
    </script>



</style>


    
          
        <div class="shadow-picture">
          <img src="../Images/Artworks Page/Black-Gradient-PNG-File.png" alt="Gradient Picture" style="width: 1473px; height: 280px;">
        </div>

      </div>
  <div class="footer">
    <p>© <span id="year"></span> DomsDraw. All rights reserved. Unauthorized use, reproduction, or distribution of any artworks is prohibited.</p>
  </div>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
  </main>
</body>
</html>
