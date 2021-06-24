<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="../css/lovebox.css">
    <link rel="stylesheet" href="../css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lovebox - Elemini 2021</title>
</head>
<body>
<?php include('menubar.php'); ?>

    <div class="top">
    <!-- Title -->
    <h1 class="pageHeader">Lovebox Confessions</h1>

    <!-- Input Form -->
    <form>
        <div class="form-row">
          <div class="col">
            <label>To:</label>
            <input type="text" class="form-control" placeholder="Who is this for?" required>
          </div>
          <div class="col">
            <label>From:</label>
            <input type="text" class="form-control" placeholder="What is your name?" required>
          </div>
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" rows="4" placeholder="Your heartfelt message that's probably about feet..." required></textarea>
            <button type="button" class="form-control btn btn-light" style="position: relative; z-index: 1; margin-top: 10pt;">Submit</button>
          </div>
        
    </form>

    <img class="grass" style="z-index: 1;" src="../images/grass-01.png" alt="grass">

    </div> 
    <div class="bottom" style="background: #386033">
    <!-- Card Masonry-like Body -->
    <!-- Plan: dynamicaly add new cards based on table -->
    <div id="masonry" class="card-columns">
        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Arrurr</h5>
              <p class="card-text">ggnore</p>
              <p class="card-text">
                <small class="text-muted">From: Arieeees</small>
                <i class="far fa-heart"></i>
                </p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Card title1</h5>
              <p class="card-text">“You lift me up and hold me down, you make me smile when I’m feeling down. You bring me peace, you bring me gifts, you’re the person I’m most happy to share my life with. I love you now until the end of time. I hope you’ll appreciate my attempted rhyme.”</p>
              <p class="card-text"><small class="text-muted">From: 2cute4u</small></p>
            </div>
        </div>


        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">To: Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">From: bb baby</small></p>
          </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Arrurr</h5>
              <p class="card-text">Get gud ggnore</p>
              <p class="card-text"><small class="text-muted">From: Arieeees</small></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Test Name</h5>
              <p class="card-text">“The minute I heard my first love story, I started looking for you, not knowing how blind that was. Lovers don’t finally meet somewhere. They’re in each other all along.” – Rumi</p>
              <p class="card-text"><small class="text-muted">From: Test Name 2</small></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">From: pp baby</small></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Card title1</h5>
              <p class="card-text">“I can’t sing, but your love makes me want to get up on the rooftop and belt it to the world how much you mean to me.”</p>
              <p class="card-text"><small class="text-muted">From: 2cute4u</small></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Card title1</h5>
              <p class="card-text">“You lift me up and hold me down, you make me smile when I’m feeling down. You bring me peace, you bring me gifts, you’re the person I’m most happy to share my life with. I love you now until the end of time. I hope you’ll appreciate my attempted rhyme.”</p>
              <p class="card-text"><small class="text-muted">From: 2cute4u</small></p>
            </div>
        </div>

        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">To: Card title</h5>
            <p class="card-text">“I can’t sing, but your love makes me want to get up on the rooftop and belt it to the world how much you mean to me.”</p>
            <p class="card-text"><small class="text-muted">From: bb baby</small></p>
          </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">To: Test Name</h5>
              <p class="card-text">“The minute I heard my first love story, I started looking for you, not knowing how blind that was. Lovers don’t finally meet somewhere. They’re in each other all along.” – Rumi</p>
              <p class="card-text"><small class="text-muted">From: Test Name 2</small></p>
            </div>
        </div>

      </div>
      </div>
      <!-- End of Masonry-like Body -->
</body>