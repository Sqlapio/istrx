<!DOCTYPE html>
<html>
<head>
    <title>Check+</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

    @import url('https://fonts.cdnfonts.com/css/creato-display');
    body{
        font-family: 'Creato Display', sans-serif;
    }
    table, td, th {
      border: 1px solid black;
      font-size: 0.5rem;
    }

    table {
      border-collapse: collapse;
      width: 100%;

    }
    p{
    margin-bottom: 15px;
    font-weight: bold;
    font-size: 10rem;
    font-family: 'Creato Display', sans-serif;
    }

    .fecha{
    text-align:right;
    font-weight: bold;
    font-size: 9rem;
    }

    .cards {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    flex-direction: row;
    max-height: 100vh;
  }
  .cards img {
    margin: 10px;
    border: 3px solid #000;
    box-shadow: 3px 3px 8px 0px rgba(0,0,0,0.3);
    max-width: 23vw;
  }
    </style>
<body>
    @php
        use Carbon\Carbon;
        $fecha = Carbon::now();
    @endphp
    <div class="row row-cols-3 row-cols-md-3 g-2">
        <div class="col">
          <div class="card w-10">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
              alt="Hollywood Sign on The Hill" width="100px"/>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card w-10">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
              alt="Palm Springs Road" width="100px" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card w-10">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
              alt="Los Angeles Skyscrapers" width="100px" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card w-10">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
              alt="Skyscrapers" width="100px" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
