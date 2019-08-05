@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

   <p>Crée une demande</p>
   <form action="{{ route('demand.store') }}" method="POST">
       @csrf
   <div class="form-group">
       <label>Titre de l'évènement :</label>

       <div class="input-group date">
           <div class="input-group-addon">

           </div>
           <input name="title" type="text" class="form-control pull-right" id="datepicker">
       </div>
       <!-- /.input group -->
   </div>
   <div class="form-group">
       <label>Nombre de personne:</label>

       <div class="input-group date">
           <div class="input-group-addon">

           </div>
           <input name="nbr_personne" type="number" class="form-control pull-right" id="datepicker">
       </div>
       <!-- /.input group -->
   </div>











   <div id="locationField">
       <input id="autocomplete"
              placeholder="Enter your address"
              onFocus="geolocate()"
              type="text"
        name="lieux"/>
   </div>

   <!-- Note: The address components in this sample are typical. You might need to adjust them for
              the locations relevant to your app. For more information, see
        https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
   -->

   <table id="address">
       <tr>
           <td class="label">Street address</td>
           <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
           <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
       </tr>
       <tr>
           <td class="label">City</td>
           <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
       </tr>
       <tr>
           <td class="label">State</td>
           <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
           <td class="label">Zip code</td>
           <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
       </tr>
       <tr>
           <td class="label">Country</td>
           <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
       </tr></tr>
   </table>

















   <div class="form-group">
       <label>Date de début:</label>

       <div class="input-group date">
           <div class="input-group-addon">
               <i class="fa fa-calendar"></i>
           </div>
           <input name="date_debut" type="date" class="form-control pull-right" id="datepicker">
       </div>
       <!-- /.input group -->
   </div>
   <div class="form-group">
       <label>Date de fin :</label>

       <div class="input-group date">
           <div class="input-group-addon">
               <i class="fa fa-calendar"></i>
           </div>
           <input name="date_fin" type="date" class="form-control pull-right" id="datepicker">
       </div>
       <!-- /.input group -->
   </div>
    <div class="form-group">
        <label>Type d'evenement:</label>
        <select name="type_evenement" multiple="" class="form-control">
            <option value="" selected="selected">Sélectionnez le type d'événement</option>
            <option value="17">Attraction</option>
            <option value="100">Autre</option>
            <option value="18">Camp, voyage ou retraite</option>
            <option value="6">Concert ou spectacle</option>
            <option value="1">Conférence</option>
            <option value="4">Convention</option>
            <option value="15">Course ou compétition d'endurance</option>
            <option value="8">Dîner ou gala</option>
            <option value="5">Festival ou foire</option>
            <option value="9">Formation, cours ou atelier</option>
            <option value="14">Jeu ou compétition</option>
            <option value="7">Projection</option>
            <option value="12">Rally</option>
            <option value="10">Rencontre ou événement social</option>
            <option value="3">Salon professionnel, grand public ou exposition</option>
            <option value="19">Séance de dédicaces</option>
            <option value="2">Séminaire ou entretien</option>
            <option value="11">Soirée ou activité sociale</option>
            <option value="13">Tournoi</option>
            <option value="16">Visite</option>
        </select>
    </div>
    <div class="form-group">
        <label>Theme de l'evenement:</label>
        <select name="theme_de_l_evenement" multiple="" class="form-control">
            <option value="" selected="selected">Sélectionnez un thème</option>
            <option value="120">Activités scolaires</option>
            <option value="105">Arts du spectacle et de la scène</option>
            <option value="118">Automobiles, bateaux et avions</option>
            <option value="199">Autre</option>
            <option value="103">Concerts et spectacles</option>
            <option value="113">Événement communautaire et culturel</option>
            <option value="101">Événements professionnels</option>
            <option value="115">Famille et éducation</option>
            <option value="116">Fête et événement saisonnier</option>
            <option value="104">Films et divertissement</option>
            <option value="110">Gastronomie</option>
            <option value="117">Maison et mode de vie</option>
            <option value="106">Mode et beauté</option>
            <option value="119">Passions et loisirs</option>
            <option value="112">Politique et gouvernement</option>
            <option value="114">Religion et spiritualité</option>
            <option value="107">Santé et bien-être</option>
            <option value="102">Sciences et technologies</option>
            <option value="108">Sports et fitness</option>
            <option value="109">Voyages et activités de plein air</option>
            <option value="111">Œuvres de bienfaisance</option>
        </select>
    </div>
   <div class="form-group">
       <label>Déscription:</label>
       <br>
       <textarea col="12"    id="textarea" name="description"  ></textarea>
   </div>
       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Submit</button>
       </div>

</form>
   <script>
       // This sample uses the Autocomplete widget to help the user select a
       // place, then it retrieves the address components associated with that
       // place, and then it populates the form fields with those details.
       // This sample requires the Places library. Include the libraries=places
       // parameter when you first load the API. For example:
       // <script
       // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

       var placeSearch, autocomplete;

       var componentForm = {
           street_number: 'short_name',
           route: 'long_name',
           locality: 'long_name',
           administrative_area_level_1: 'short_name',
           country: 'long_name',
           postal_code: 'short_name'
       };

       function initAutocomplete() {
           // Create the autocomplete object, restricting the search predictions to
           // geographical location types.
           autocomplete = new google.maps.places.Autocomplete(
               document.getElementById('autocomplete'), {types: ['geocode']});

           // Avoid paying for data that you don't need by restricting the set of
           // place fields that are returned to just the address components.
           autocomplete.setFields(['address_component']);

           // When the user selects an address from the drop-down, populate the
           // address fields in the form.
           autocomplete.addListener('place_changed', fillInAddress);
       }

       function fillInAddress() {
           // Get the place details from the autocomplete object.
           var place = autocomplete.getPlace();

           for (var component in componentForm) {
               document.getElementById(component).value = '';
               document.getElementById(component).disabled = false;
           }

           // Get each component of the address from the place details,
           // and then fill-in the corresponding field on the form.
           for (var i = 0; i < place.address_components.length; i++) {
               var addressType = place.address_components[i].types[0];
               if (componentForm[addressType]) {
                   var val = place.address_components[i][componentForm[addressType]];
                   document.getElementById(addressType).value = val;
               }
           }
       }

       // Bias the autocomplete object to the user's geographical location,
       // as supplied by the browser's 'navigator.geolocation' object.
       function geolocate() {
           if (navigator.geolocation) {
               navigator.geolocation.getCurrentPosition(function(position) {
                   var geolocation = {
                       lat: position.coords.latitude,
                       lng: position.coords.longitude
                   };
                   var circle = new google.maps.Circle(
                       {center: geolocation, radius: position.coords.accuracy});
                   autocomplete.setBounds(circle.getBounds());
               });
           }
       }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuV7Oz3YQEzTTwfRSevIJUPFBDYChHvQw&libraries=places&callback=initAutocomplete"
           async defer></script>
@stop
