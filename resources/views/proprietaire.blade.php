@extends('layout')

    @section('content')

    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
          >
            Listes des clients
          </h2>
          <!-- CTA -->
          @if($message=Session::get('success'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{$message}}</strong> Félicitation!!!
          </div>
          
          @endif
         
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
                  <h4 class="modal-title">Ajout clients</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
                </div>
          
                <!-- Modal body -->
               <form action="{{ route('addClient')}}" method="POST" class="row g-3" style="padding:30px;">
                @csrf
            <div class="col-md-6">
              <label for="lastname" class="form-label">Nom</label>
              <input type="text" class="form-control" name="lastname" id="lastname">
            </div>
            <div class="col-md-6">
              <label for="firstname" class="form-label">Prenoms</label>
              <input type="text" class="form-control" name="firstname" id="firstname">
            </div>
            <div class="col-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="matricule@gmail.com">
            </div>
            <div class="col-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="adress" name="adress" placeholder="Apartment,">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Fonction</label>
              <input type="text" name="work" class="form-control" id="inputCity">
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
              <table class="w-full whitespace-no-wrap" style="padding: 50px;">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                  <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Lastname</th>
                    <th class="px-4 py-3">firstname</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Adress</th>
                    <th class="px-4 py-3">Work</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Actions</th>


                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @forelse ($clients as $key => $client )
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$client->lastname}}</td>
                    <td>{{$client->firstname}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->adress}}</td>
                    <td>{{$client->work}}</td>
                    <td>{{$client->created_at}}</td>
                    <td><button type="button" style="margin-right: -30px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myeditModal{{$client->id}}"><i class="fa-solid fa-pen"></i>update</button>
                      <div class="modal" id="myeditModal{{$client->id}}">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Mise à jour</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">		</button>
                          </div>
                            <!-- Modal body -->
                          <form action="{{ route('ajour', $client->id)}}" method="POST" class="row g-3" style="padding:30px;">
                            @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="col-md-6">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text"  value="{{$client->lastname}}" class="form-control" name="lastname" id="lastname">
                              </div>
                              <div class="col-md-6">
                                <label for="firstname" class="form-label">Prenoms</label>
                                <input type="text" value="{{$client->firstname}}" class="form-control" name="firstname" id="firstname">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{$client->email}}" class="form-control" id="email" name="email" placeholder="matricule@gmail.com">
                              </div>
                              <div class="col-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value="{{$client->adress}}" class="form-control" id="adress" name="adress" placeholder="Apartment,">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <label for="work"  class="form-label">Fonction</label>
                                <input type="text" value="{{$client->work}}"name="work" class="form-control" id="work">
                              </div>
                            </div>
                            
                            
                            <!-- Modal footer -->
                            
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Modifier</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                          </form>
                      
                          </div>
                        </div>
                      </div>
                      <!-- end edit modal -->
                      <form style="float: right;" action="{{ route('supp', $client->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</button>
                      </form>
                      </td>
                  </tr>
                @empty
                  
                @endforelse
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