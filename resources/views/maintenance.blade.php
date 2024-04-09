<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Under Maintenance</title>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #2b2b2b; /* Warna background yang lebih gelap */
    font-family: Arial, sans-serif;
  }

  .maintenance-container {
    text-align: center;
    color: white; /* Warna teks putih untuk kontras dengan latar belakang gelap */
  }

  .maintenance-text {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .loader {
    width: 100%; /* Lebar sesuai dengan lebar website */
    height: 20px;
    -webkit-mask: linear-gradient(90deg, #000 70%, #0000 0) left/20% 100%;
    background: linear-gradient(#000 0 0) left -25% top 0 /20% 100% no-repeat #333; /* Background yang lebih gelap */
    animation: l7 1s infinite steps(6);
    margin-top: 20px;
  }

  @keyframes l7 {
    100% { background-position: right -25% top 0; }
  }
</style>
</head>
<body>
  <div class="maintenance-container">
    <div class="maintenance-text">
    <h1>Sorry, this page under development...</h1>  
    </div>
    <div class="loader"></div>
  </div>
</body>
</html>
