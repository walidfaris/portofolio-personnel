
<?php

/*
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="jobboard";   
    
    
    try{
        $conn=new  PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Send Successfuly";
    }catch(PDOException $e){
      echo "Erreur d'envoi:" .$e->getMessage();
    }

      if(isset($_POST['Postuler'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $numero=$_POST['numero'];
        $CV=$_POST['CV'];
        $message=$_POST['message'];

        $sql=("INSERT INTO 'informations'('nom','prenom','email','numero','CV','message') VALUES(:nom, :prenom, :email, :numero, :CV, :message)");
        $stmt =$conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':CV', $CV);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
      }
*/

?>

<!doctype html>
<html lang="en">
  <head>
    @include('partials.entete')
  </head>
  <body>
    @include('partials.nav')
    @include('partials.header')

    <!---
     < @foreach($advertisements as $adv)
      <div class="card" style="width: 25rem;">
        <img src="{{asset('images/'.$adv->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$adv->titre}}</h5>
          <p class="card-text"><mark>{{$adv->type}}</mark></p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
      @endforeach
      --->
    <div class="container-fluid">

    <div class="row">
    @foreach($advertisements as $adv)
    <div class="card">
      <div class="card-header">
       <h6>{{$adv->type}}</h6>
    </div>
    <div class="card-body">
    <h5 class="card-title">{{$adv->titre}}</h5>
    <div>
    <img src="{{asset('images/'.$adv->image)}}" class="card-img-top" alt="...">
    </div>
   

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$adv->id}}" data-bs-whatever="@mdo">Appliquer</button>

   <div class="modal fade" id="exampleModal{{$adv->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Postuler</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
  
      <form method="post" action="{{ route('informations.store') }}" enctype="multipart/form-data">

    @csrf  
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom:</label>
            <input type="text" class="form-control" id="recipient-name" name="nom">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Prenom:</label>
            <input type="text" class="form-control" id="recipient-name" name="prenom">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">email:</label>
            <input type="email" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Numero:</label>
            <input type="number" class="form-control" id="recipient-name" name="numero">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">CV:</label>
            <input type="file" class="form-control" id="recipient-name" name="cv">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <label for="recipient-name" class="col-form-label"></label>
            <input type="submit" value="Postuler" name="Postuler" class="btn btn-primary">
  </form>

  @if($message = Session::get('success'))

      <div class="alert alert-success">
	      {{ $message }}
    </div>
    @endif
    


      </div>
      
    </div>
    
  </div>
  
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  En savoir plus
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$adv->titre}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Description: {{$adv->description}}</p>
      <p>Salaire: {{$adv->salaire}} €</p>
      <p>Horaire: {{$adv->horaire}}</p>
      <p>Lieu:{{$adv->lieu}}</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



  
    </div>
  </div>


  

@endforeach
</div>
</div>
   

<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>

  <!-- <footer class=" navbar-dark bg-dark">
        <div>
        Copyrigth 2022 ! Epitech Technology
        14 rue le Kremlin Bicetre
        </div>
 </footer> -->
  
</html>


  
