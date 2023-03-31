@extends('layout')

    @section('content')

    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
          >
            Listes des vehicule immatriculés
          </h2>
          <!-- CTA -->
          
         
          <div class="container mt-3">
            
            <button style="margin-bottom: 10px; margin-left:90%" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
              <i class="fa-solid fa-square-plus"></i>
              Nouveau
            </button>
          </div>
          
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Immatriculé</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
                </div>
          
                <!-- Modal body -->
               <form action="" method="POST" class="row g-3" style="padding:30px;">
                @csrf
            <div class="col-md-6">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="col-md-6">
              <label for="Owners" class="form-label">Owners</label>
              <select name="owner" id="">
                @foreach ($voiture as $voitures )
                  <option value="{{$voitures->clients->id}}">{{$voitures->clients->lastname}}</option>
                @endforeach
              </select>
              
            </div>
            <div class="col-6">
              <label for="email" class="form-label">Marque</label>
              <input type="text" class="form-control" id="marque" name="marque">
            </div>
            <div class="col-6">
              <label for="address" class="form-label">Matricule</label>
              <input type="text" class="form-control" id="matricule" name="matricule">
            </div>
            
            
          
                <!-- Modal footer -->
                
                <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ajouter</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
               </form>
          
              </div>
            </div>
          </div>
          <!-- edit modal -->
          

          <!-- New Table -->

          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                  <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Owner</th>
                    <th class="px-4 py-3">Marque</th>
                    <th class="px-4 py-3">Matricule</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Actions</th>


                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                </tbody>
              </table>
            </div>
            <div
              class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
            >
              <span class="flex items-center col-span-3">
                Showing 21-30 of 100
              </span>
              <span class="col-span-2"></span>
              <!-- Pagination -->
              <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                  <ul class="inline-flex items-center">
                    <li>
                      <button
                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Previous"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 fill-current"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        1
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        2
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        3
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        4
                      </button>
                    </li>
                    <li>
                      <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        8
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                      >
                        9
                      </button>
                    </li>
                    <li>
                      <button
                        class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Next"
                      >
                        <svg
                          class="w-4 h-4 fill-current"
                          aria-hidden="true"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </li>
                  </ul>
                </nav>
              </span>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
    @endsection