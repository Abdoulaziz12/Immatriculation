@extends('layout')

    @section('content')
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Listes des proprietaires
            </h2>
            <form class="row g-3">
  <div class="col-md-6">
    <label for="lastname" class="form-label">Nom</label>
    <input type="email" class="form-control" name="lastname" id="lastname">
  </div>
  <div class="col-md-6">
    <label for="firstname" class="form-label">Prenoms</label>
    <input type="password" class="form-control" name="firstname" id="firstname">
  </div>
  <div class="col-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="matricule@gmail.com">
  </div>
  <div class="col-6">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Apartment,">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Fonction</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Vehicule</label>
    <select id="inputState" class="form-select">
      <option selected>---choix---</option>
      <option >Engin à 2 roues</option>
      <option>Engin à 3 roues</option>
      <option>Engin à 4 roues</option>
    </select>
  </div>
  <div class="col-6">
    <label for="marque" class="form-label">Marque</label>
    <input type="text" class="form-control" id="marque" name="marque" placeholder="Apartment,">
  </div>
  <div class="col-md-6">
    <label for="num" class="form-label">Numero charsi</label>
    <input type="text" class="form-control" name="num" id="num">
  </div>
    
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
</form>
            
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
@endsection