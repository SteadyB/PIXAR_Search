<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <title>The PIXAR Caracteres Data Base</title>
  <link rel="shortcut icon" href="ressources/favicon.png" type="image/x-icon">
  <meta name="description" content="the PIXAR Movies Caracteres database">
</head>
<main>
  <body>
    <div class="container-fluid">
      <div class="jumbotron text-center text-light bg-dark mx-5 mt-3">

        <h1>P<img class="pb-4" src="ressources/favicon.png" alt="the pixal desk lamp">XAR SEARCH</h1>
        <p>Find all your favorite characters</p>
      </div>
      <div class="row mt-5">
        <!--add nesting button group for dropdown and sumit button-->
        <form action="FORM.php" method="POST" class="mx-auto">
          <div class="form-inline align-items-center">
            <input name"nameSearch" class="form-control form-control-lg-6 mr-4 active" type="text" placeholder="search caracters">
            <select name="movie" class="form-control form-control-lg-6 mr-2">
              <option>all</option>
              <option>Finding Nemo</option>
              <option>Finding Dory</option>
              <option>Toy Story</option>
              <option>Wall-E</option>
              <option>Monstres et Cie</option>
            </select>
            <button type="submit" class="button btn btn-primary lg-6 px-5 text-dark bg-info"><i class="fas fa-search mr-2"></i>Find</button>
          </div>
        </form>
      </div>
      <!--</div>-->
    </div>
  </body>
  <!--SCRIPTS-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--SCRIPTS-->
</html>
